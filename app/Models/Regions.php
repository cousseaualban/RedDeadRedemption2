<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;

    protected $table = "regions";

    protected $fillable = [
        'id',
        'nom',
        'image',
        'description',
        'ville_id',
    ];

    public function ville(){
        return $this->belongsTo(Villes::class);
    }
}
