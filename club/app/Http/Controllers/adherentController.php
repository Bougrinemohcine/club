<?php

namespace App\Http\Controllers;
use App\Models\adherent;
use App\Mail\AcceptanceMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;


class adherentController extends Controller
{
    public function getData(Request $Request){
        $Request->validate([
            'nom'=>'required'
           
        ]);
       
        $ad = new adherent;
 
        $ad->nom = $Request->nom;
        $ad->prenom = $Request->prenom;
        $ad->ville = $Request->ville;
        $ad->telephone = $Request->telephone;
        $ad->cin = $Request->cin;
        $ad->carte = $Request->carte;
        $ad->email = $Request->email;
        
        $ad->save();

 
        return redirect('/ADHÉSION/TEST')->with('status', 'Form Data Has Been validated and insert');
    }

   
    
}
