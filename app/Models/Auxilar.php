<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Autenticatable;

class Auxilar extends Model //Autenticatable 
{
    use HasFactory;
    Protected $table = 'auxilars';
    public $timestamp = false;
    protected $primaryKey = 'idAuxiliares';

    public function conductor()
    {
        return $this->hasOne(Conductor::class);
    }
}
