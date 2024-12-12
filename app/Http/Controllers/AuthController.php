<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.index');
    }

    public function login(){
        return view('auth.login');
    }

    //methode pour faire la redirection
    public function handlogin(AuthRequest $request)
    {
        $credentials = $request->only('identifiant', 'password');

        if (Auth::guard('utilisateur')->attempt($credentials)) {
            $user = Auth::guard('utilisateur')->user();

            switch ($user->statut) {
                case 'employer':
                    return redirect()->route('employer');
                case 'client':
                    return redirect()->route('client');
                case 'admin':
                    return redirect()->route('admin');
                default:
                    return redirect()->back()->with('error_msg', "Rôle utilisateur non reconnu : {$user->statut}");
            }
        } else {
            return redirect()->back()->with('error_msg', 'Identifiant ou mot de passe incorrect');
        }
    }
}
