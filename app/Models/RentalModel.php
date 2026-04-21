<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalModel extends Model
{
    use HasFactory;


    protected $table = 'reservaciones';

    protected $fillable = [
        'nombre',
        'identidad',
        'telefono', 
        'fecha_inicial',
        'fecha_final',
        'servicios',
        'costo'
    ];

    protected $hidden = [ 
        'created_at',
        'updated_at'
    ];
}