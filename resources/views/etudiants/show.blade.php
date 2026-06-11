@extends('layouts.app')

@section('title', 'Details etudiant')

@section('content')
    <div class="bg-white border rounded shadow-sm p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 mb-0">{{ $etudiant->nom }} {{ $etudiant->prenom }}</h1>
            <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Retour</a>
        </div>

        <dl class="row mb-0">
            <dt class="col-sm-3">ID</dt>
            <dd class="col-sm-9">{{ $etudiant->id }}</dd>

            <dt class="col-sm-3">CNE</dt>
            <dd class="col-sm-9">{{ $etudiant->cne }}</dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $etudiant->email }}</dd>

            <dt class="col-sm-3">Telephone</dt>
            <dd class="col-sm-9">{{ $etudiant->tel }}</dd>

            <dt class="col-sm-3">Ville</dt>
            <dd class="col-sm-9">{{ $etudiant->ville }}</dd>
        </dl>

        <div class="mt-4">
            <a href="{{ route('etudiants.edit', $etudiant) }}" class="btn btn-warning">Modifier</a>
        </div>
    </div>
@endsection
