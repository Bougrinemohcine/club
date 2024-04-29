<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adherent extends Model
{
    use HasFactory;
    protected $fillable = ["nom","prenom","ville","telephone","cin","carte","email"];

  
}
