@extends('layouts.app')

@section('title', $nom)

@section('content')
    <div class="bg-white border rounded shadow-sm p-4">
        <h1 class="mb-3">{{ $nom }}</h1>
        <p class="text-muted mb-4">
            Correction du TP 3 Laravel: modele, migration, controleur resource, vues Blade et Bootstrap.
        </p>
        <a href="{{ route('etudiants.index') }}" class="btn btn-primary">Voir les etudiants</a>
        <a href="{{ route('etudiants.create') }}" class="btn btn-outline-primary">Ajouter un etudiant</a>
    </div>
@endsection
