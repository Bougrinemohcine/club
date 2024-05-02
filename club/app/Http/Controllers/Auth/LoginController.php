<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\utilisateur;
use App\Models\isadmin;
use App\Models\adherent;

use App\Models\user;





class LoginController extends Controller

{

    public function authenticate(Request $request)
{
    $email = $request->input('email');
    $randomCode = $request->input('random_code');

    $user = Utilisateur::where('email', $email)
        ->where('random_code', $randomCode)
        ->first();

    if (isset($user)) {
        // Authentication successful
        // You can perform additional actions here, such as redirecting to the profile page or creating a user session
        $userName = $user->nom;
        $userPrenom = $user->prenom;
        $userville = $user->ville;
        $usercin = $user->cin;
        $usercarte = $user->carte;
        $useremail = $user->email;
        return view("profile",compact('userName','userPrenom','userville','usercin','usercarte','useremail'));
    }

    // Authentication failed
    $error_message = "Erreur d'authentification. Veuillez vérifier vos informations de connexion.";
    echo '<script>alert("' . $error_message . '");</script>';
    echo '<script>window.location.href = "login";</script>';
    return;
}


public function adminLogin(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    $user = isadmin::where('email', $email)
        ->where('password', $password)
        ->first();

    if (isset($user)) {

        // Authentication successful
        // You can perform additional actions here, such as redirecting to the profile page or creating a user session
        return redirect('admin');

    }

    // Authentication failed
    $error_message = "Erreur d'authentification. Veuillez vérifier vos informations de connexion.";
    echo '<script>alert("' . $error_message . '");</script>';
    echo '<script>window.location.href = "add";</script>';
    return;
}

public function logout()
{
    // Déconnecter l'utilisateur
    session()->forget('user_id');

    return redirect("/");
}

}







