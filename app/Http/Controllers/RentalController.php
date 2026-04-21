<?php

namespace App\Http\Controllers;

use App\Models\RentalModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RentalController extends Controller
{
    public function index(): View
    {
        $reservations = RentalModel::all();
        
        return view('reservation', ["reservations" => $reservations]); 
    }

    public function create(): View
    {
        return view('reservations.create');
    }

    public function store(Request $request): RedirectResponse 
    {
        RentalModel::create([
            "nombre" => $request->nombre,
            "identidad" => $request->identidad,
            "telefono" => $request->telefono,
            "fecha_inicial" => $request->fecha_inicial,
            "fecha_final" => $request->fecha_final,
            "servicios" => $request->servicios,
            "costo" => $request->costo
        ]);

        return redirect()->route('admin.reservation');
    }
    
    public function edit($folio): View
    {
        $reservation = RentalModel::find($folio);
        return view('reservations.edit', ["reservation" => $reservation]);
    }

    public function update(Request $request, $folio): RedirectResponse
    {
        $reservation = RentalModel::find($folio);
        $reservation->update($request->only([
            'nombre',
            'identidad',
            'telefono',
            'fecha_inicial',
            'fecha_final',
            'servicios',
            'costo',
            ]));
        
        return redirect()->route('admin.reservation');
    }

    public function destroy($folio): RedirectResponse
    {
        $reservation = RentalModel::find($folio);
        $reservation->delete();
        return redirect()->route('admin.reservation');
    }
}