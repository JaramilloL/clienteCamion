<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    Protected $table = 'registros';
    public $timestamp = false;
    protected $primaryKey = 'idRegistros';
}
