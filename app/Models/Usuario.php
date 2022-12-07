<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    Protected $table = 'usuarios';
    public $timestamp = false;
    protected $primaryKey = 'idUsuarios';

    public function vehiculo(){
        return $this->belongsToMany('App\Models\Vehiculo');
    }
}
