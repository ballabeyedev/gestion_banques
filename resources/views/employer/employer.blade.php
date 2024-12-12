@extends('layouts.app')

@section('title', 'Accueil | EMPLOYERS')

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
        <h1 class="balisse">ACCUEIL EMPLOYERS</h1>
        <br>

        <ul class="nav-links list-unstyled">
            <li class="mb-3">
                <a href="{{route('employer.creationcomptebancaire')}}" class="btn btn-outline-primary">
                    <i class="fas fa-user-plus"></i> Creation compte bancaire client
                </a>
            </li>
            <li class="mb-3">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fas fa-users"></i> Voir la liste de clients
                </a>
            </li>
            <li class="mb-3">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fas fa-cogs"></i> Gerer compte bancaire
                </a>
            </li>
            <li class="mb-3">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fas fa-chart-bar"></i> Rapport des transactions
                </a>
            </li>
        </ul>
    </div>
@endsection
