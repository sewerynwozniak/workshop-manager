<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'place',
        'description',
    ];

    function users(){
        return $this->belongsToMany(User::class);    
     }
}
