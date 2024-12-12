@extends('layouts.app')

@section('title', 'Accueil | ADMINS')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="container text-center">
        <a href="javascript:history.go(-1)" class="btn btn-secondary mb-4">RETOUR</a>
        <h1 class="balisse">ACCUEIL ADMINISTRATEUR</h1>
        <br>

        <ul class="nav-links list-unstyled">
            <li class="mb-3">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fas fa-wallet"></i> Voir Liste Client
                </a>
            </li>
            <li class="mb-3">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fas fa-history"></i> Modifier/Supprimer client
                </a>
            </li>
            <li class="mb-3">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fas fa-wallet"></i> Voir Liste Employer
                </a>
            </li>
            <li class="mb-3">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fas fa-history"></i> Modifier/Supprimer Employer
                </a>
            </li>

        </ul>

    </div>
@endsection
