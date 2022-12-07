<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    Protected $table = 'vehiculos';
    public $timestamp = false;
    protected $primaryKey = 'idVehiculos';

    public function usuario(){
        return $this->belongsToMany('App\Models\Usuario');
    }
}
