<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class affiche extends Model
{
    use HasFactory;
    protected $fillable = ["nom","prenom","ville","telephone","cin","carte","email"];

  
}
