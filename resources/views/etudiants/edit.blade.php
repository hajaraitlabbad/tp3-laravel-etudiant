@extends('layouts.app')

@section('title', 'Modifier un etudiant')

@section('content')
    <div class="bg-white border rounded shadow-sm p-4">
        <h1 class="h3 mb-4">Modifier un etudiant</h1>

        <form action="{{ route('etudiants.update', $etudiant) }}" method="POST">
            @method('PUT')
            @include('etudiants.form', ['bouton' => 'Modifier'])
        </form>
    </div>
@endsection
