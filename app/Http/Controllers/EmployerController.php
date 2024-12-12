<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Utilisateur; // Ajoutez cette ligne pour importer le modèle
use Illuminate\Support\Facades\Hash;


class EmployerController extends Controller
{
    //affiche information utilisateur
    public function __construct()
    {
        view()->share('userInfo',
        [
            'nom' => Auth::check() ? Auth::user()->nom : '',
            'prenom' => Auth::check() ? Auth::user()->prenom : '',
            'statut' => Auth::check() ? Auth::user()->statut : '',
            'id' => Auth::check() ? Auth::user()->id : '',
            'password' => Auth::check() ? Auth::user()->password : '',
        ]);
    }

    //redirection vers la page admin
    public function creationcomptebancaire(){
        return view('employer/creationcomptebancaire');
    }

    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'prenom' => 'required|max:50',
            'nom' => 'required|max:50',
            'login' => 'required|max:30',
            'password' => 'required',
            'numero' => 'required|min:9',
        ]);

        // Création de l'utilisateur
        Utilisateur::create([
            'prenom' => $validated['prenom'],
            'nom' => $validated['nom'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']), // Hashage du mot de passe
            'numero' => $validated['numero'],
        ]);

        // Redirection après la création
        return redirect()->route('employer')->with('success', 'Client ajouté avec succès.');
    }

}
