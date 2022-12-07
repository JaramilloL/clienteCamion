<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    use HasFactory;
    Protected $table = 'conductors';
    public $timestamp = false;
    protected $primaryKey = 'idConductores';

    public function auxilar()
    {
        return $this->belongsTo(Auxilar::class);
    }
}
