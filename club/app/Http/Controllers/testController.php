<?php

namespace App\Http\Controllers;
use App\Models\isadmin;
use App\Models\utilisateur;
use App\Models\adherentuser;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        $users = \App\Models\utilisateur::all();
        return view('test', compact('users'));
    }

    public function destroy(Utilisateur $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'Utilisateur supprimé avec succès');
    }

    public function edit(Utilisateur $user)
    {
        return view('adherents.editer', compact('user'));
    }

    public function update(Request $request, Utilisateur $user)
    {
        $request->validate([
            "nom" => 'required',
            "prenom" => 'required',
            "ville" => 'required',
            "telephone" => 'required',
            "cin" => 'required',
            "carte" => 'required',
            "email" => 'required',
            "random_code" => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('test')->with('success', 'Utilisateur mis à jour avec succès');
    }

    public function addAdminShow(){
        return view('addAdmin');
    }
    public function register(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
        ]);

        // Create a new admin
        isadmin::create([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // Redirect after registration
        return redirect()->route('admin.login')->with('success', 'Admin created successfully!');
    }
}
