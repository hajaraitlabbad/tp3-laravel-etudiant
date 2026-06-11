@extends('layouts.app')

@section('title', 'Ajouter un etudiant')

@section('content')
    <div class="bg-white border rounded shadow-sm p-4">
        <h1 class="h3 mb-4">Ajouter un etudiant</h1>

        <form action="{{ route('etudiants.store') }}" method="POST">
            @include('etudiants.form', ['bouton' => 'Enregistrer'])
        </form>
    </div>
@endsection
