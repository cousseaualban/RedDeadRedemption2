<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnages extends Model
{
    use HasFactory;

    protected $table = 'personnages';

    protected $fillable = [
        'id',
        'prenom',
        'nom',
        'image',
        'age',
        'biographie',
        'gang_id',
    ];

    public function gang(){
        return $this->belongsTo(Gangs::class);
    }
}
