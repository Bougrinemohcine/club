<?php

namespace App\Http\Controllers;
use App\Models\adherentuser;
use Illuminate\Http\Request;
use App\Models\utilisateur;

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
}
