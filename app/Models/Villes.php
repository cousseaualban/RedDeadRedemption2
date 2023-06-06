<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villes extends Model
{
    use HasFactory;

    protected $table = 'villes';

    protected $fillable = [
        'id',
        'nom',
        'region_id',
    ];

    public function region(){
        return $this->belongsTo(Regions::class);
    }
}
