@extends('layouts.app')

@section('title', 'Accueil | CLIENTS')

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
        <h1 class="balisse">ACCUEIL CLIENTS</h1>
        <br>

        <ul class="nav-links list-unstyled">
            <li class="mb-3">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fas fa-wallet"></i> Consulter le solde de mon compte
                </a>
            </li>
            <li class="mb-3">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fas fa-history"></i> Historique des transactions
                </a>
            </li>
            <li class="mb-3">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fas fa-exchange-alt"></i> Faire des transactions
                </a>
            </li>
            <li class="mb-3">
                <a href="#" class="btn btn-outline-primary">
                    <i class="fas fa-file-invoice-dollar"></i> Payer Facture
                </a>
            </li>
        </ul>

    </div>
@endsection
