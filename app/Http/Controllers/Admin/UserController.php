<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    
    public function index(Request $request)
    {
        $users = User::all();
       
        $activeTab = $request->query('tab', 'lista'); 
        return view('admin/colaboradores.colaboradores', compact('users', 'activeTab'));
    }

    
    public function edit(User $user)
    {
        return view('admin.edit-user', compact('user'));
    }

 
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users,name,'.$user->id],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'role' => ['required', 'in:user,admin'],
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        
        if ($request->filled('password')) {
            $request->validate(['password' => ['confirmed', Rules\Password::defaults()]]);
            $user->update(['password' => Hash::make($request->password)]);
        }

        return redirect()->route('admin.colaboradores')->with('status', 'Usuario actualizado correctamente.');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'confirmed', \Illuminate\Validation\Rules\Password::defaults()],
        'role' => ['required', 'in:user,admin'],
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => $request->role,
    ]);

    return redirect()->route('admin.colaboradores', ['tab' => 'lista'])
                     ->with('status', 'Usuario creado correctamente.');
}

    
    public function destroy(User $user)
    {
        
        if (auth()->id() === $user->id) {
            return back()->with('error', 'No puedes eliminar tu propia cuenta.');
        }

        $user->delete();
        return back()->with('status', 'Usuario eliminado con éxito.');
    }
}