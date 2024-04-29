<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class isadmin extends Model
{
    use HasFactory;
    protected $table = 'isadmin';

    protected $fillable = ["email","password"];


}
