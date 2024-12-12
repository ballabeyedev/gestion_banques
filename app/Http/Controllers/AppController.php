<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Utilisateur; // Ajoutez cette ligne pour importer le modèle
use Illuminate\Support\Facades\Hash;


class AppController extends Controller
{
    //redirection vers la page admin
    public function admin(){
        return view('admin/admin');
    }

    //redirection vers la page etudiant
    public function client(){
        return view('client/client');
    }

    //redirection vers la page superadmin
    public function employer(){
        return view('employer/employer');
    }

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

}
