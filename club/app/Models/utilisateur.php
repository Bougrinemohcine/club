<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class utilisateur extends model
{
    use HasFactory;
    protected $table = 'utilisateur';

    protected $fillable=["nom","prenom","ville","telephone","cin","carte","email","random_code"];

}


