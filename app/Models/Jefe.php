<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jefe extends Model
{
    use HasFactory;
    Protected $table = 'jeves';
    public $timestamp = false;
    protected $primaryKey = 'idJefes';
}
