<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mattress extends Model
{
    use HasFactory;


    //Permet la création de la relation One to Many (Un matelas pour plusieurs tailles)
    
    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

}
