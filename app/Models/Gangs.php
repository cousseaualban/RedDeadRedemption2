<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gangs extends Model
{
    use HasFactory;

    protected $table = "gangs";

    protected $fillable = [
        'id',
        'nom',
        'historique',
        'localisation',
    ];
}
