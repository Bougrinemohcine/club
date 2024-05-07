<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adherentController;
use App\Http\Controllers\afficheController;
use App\Models\adherent;
use App\Models\affiche;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\utilisateur;
use App\Http\Controllers\testController;

use App\Mail\refus;
use Illuminate\Support\Facades\Mail;
use App\Mail\accepte;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('home.index');
})->name("home");





Route::get('/about/index', function () {
    return view('about.index');
});

Route::get('/courses/index', function () {
    return view('courses.index');
});
Route::get('/Natation/index', function () {
    return view('Natation.index');
});
Route::get('/blog/index', function () {
    return view('blog.index');
});


Route::get('/contact/index', function () {
    return view('contact.index');
});
Route::get('/ADHÉSION/TEST', function () {
    return view('ADHÉSION.TEST');
});
Route::post('/ADHÉSION/TEST', [App\Http\Controllers\adherentController::class, 'getData'])->name('ADHÉSION.TEST');;



Route::get('/admin', [App\Http\Controllers\afficheController::class, 'index'])->name('admin');



Route::delete('/emails/ins/{id}', function ($id) {
    // Envoyer l'email
    $adhe = adherent::find($id);
    Mail::to($adhe->email)->send(new refus());

    // Supprimer l'adhérent
    $adhe->delete();

    return redirect('admin')->with('mssg','user supp');
})->name('send.email.and.delete');


#accepte




// Route::get('/emails/accept/{id}', function ($id) {
//     $adhe = adherent::find($id);

//     // Generate a random number
//     $randomNumber = mt_rand(10000, 99999); // Adjust the range of the random number as per your requirement

//     // Send the email with the random number
//     Mail::to($adhe->email)->send(new accepte($randomNumber));

//     // Delete the adherent
//     $adhe->delete();

//     $exist = utilisateur::where('email', $adhe->email)->first();

//     if (!$exist) {
//         $user = new utilisateur;
//         $user->nom = $adhe->nom;
//         $user->prenom = $adhe->prenom;
//         $user->ville = $adhe->ville;
//         $user->telephone = $adhe->telephone;
//         $user->cin = $adhe->cin;
//         $user->carte = $adhe->carte;
//         $user->email = $adhe->email;
//         $user->random_code = $randomNumber;



//         $user->save();
//     }

//     return redirect('admin')->with('mssg', 'Utilisateur supprimé');
// })->name('send.email.and.accept');



Route::get('/emails/accept/{id}', function ($id) {
    $adhe = adherent::find($id);
    $email01 = $adhe->email;

    $randomNumber = mt_rand(10000, 99999);

    // Send the email with the random number
    Mail::to($adhe->email)->send(new accepte($randomNumber,$email01));

    // Delete the adherent
    $adhe->delete();

    $user = new utilisateur;
    $user->nom = $adhe->nom;
    $user->prenom = $adhe->prenom;
    $user->ville = $adhe->ville;
    $user->telephone = $adhe->telephone;
    $user->cin = $adhe->cin;
    $user->carte = $adhe->carte;
    $user->email = $adhe->email;
    $user->random_code = $randomNumber;

    $user->save();

    return redirect('admin')->with('mssg', 'Utilisateur supprimé');
})->name('send.email.and.accept');



Route::get('/test', [App\Http\Controllers\testController::class, 'index'])->name('test');






Route::get('/acceptance', function () {
    return view('acceptance');
});


Route::post('/admin/register', [testController::class, 'register'])->name('admin.register.post');
Route::get('/addAdmin',[testController::class,'addAdminShow'])->name('addAdminShow');
Route::delete('/utilisateurs/{user}', [testController::class, 'destroy'])->name('utilisateurs.destroy');
Route::get('/utilisateurs/{user}/edit', [testController::class, 'edit'])->name('utilisateurs.edit');
Route::put('/utilisateurs/{user}', [testController::class, 'update'])->name('utilisateurs.update');



Route::post('/profileadh', [LoginController::class, 'authenticate'])->name("test_me");
Route::post('/add', [LoginController::class, 'adminLogin'])->name('admin.login');

Route::get('/emial', [LoginController::class, 'logout'])->name('logout');





// Route::get('/profile', function () {
//     return view('profile')->name("profile");
// });
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/add', function () {
    return view('add');
});



