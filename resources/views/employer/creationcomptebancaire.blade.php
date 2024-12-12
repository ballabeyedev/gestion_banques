@extends('layouts.app')

@section('title', 'Accueil | EMPLOYERS')

@section('content')
    <div class="container1">
        <a href="javascript:history.go(-1)" class="btn btn-secondary mb-4">RETOUR</a>
        <h1 class="balisse">ACCUEIL EMPLOYERS / CREATION COMPTE CLIENT</h1>
        <br>
        <form action="{{ route('employer.store') }}" method="POST" enctype="multipart/form-data" class="formulaire">
            @csrf
            <label for="titre">Prenom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Prenom du client" value="{{ old('prenom') }}">

            <label for="auteur">Nom</label>
            <input type="text" name="nom"  id="nom" placeholder="Nom du client" value="{{ old('nom') }}">

            <label for="genre">Identifiant</label>
            <input type="text" name="text" id="text" placeholder="Identifiant du client " value="{{ old('email') }}">

            <label for="annee_publication">Mot de Passe</label>
            <input type="password" name="password"  id="password" placeholder="Password Etudiant" value="{{ old('password') }}">

            <label for="logo">Numero Telephone</label>
            <input type="number" name="numero"  id="numero" placeholder="Contact Etudiant" value="{{ old('numero') }}">
            <div id="error-messages" style="color: red; margin-bottom: 20px;"></div>
            <button type="submit" class="btn btn-primary">AJOUTER DU CLIENT</button>

        </form>
    </div>
    <script src="{{asset('js/creation.js')}}"></script>

@endsection
