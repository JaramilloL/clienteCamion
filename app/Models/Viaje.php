<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    Protected $table = 'viajes';
    public $timestamp = false;
    protected $primaryKey = 'idViaje';
}
