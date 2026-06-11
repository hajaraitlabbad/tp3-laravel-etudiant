@extends('layouts.app')

@section('title', 'Liste des etudiants')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Liste des etudiants</h1>
        <a href="{{ route('etudiants.create') }}" class="btn btn-primary">Ajouter</a>
    </div>

    <div class="table-responsive bg-white border rounded shadow-sm">
        <table class="table table-striped table-hover mb-0 align-middle">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>CNE</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Tel</th>
                    <th>Ville</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($etudiants as $etudiant)
                    <tr>
                        <td>{{ $etudiant->id }}</td>
                        <td>{{ $etudiant->cne }}</td>
                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->prenom }}</td>
                        <td>{{ $etudiant->email }}</td>
                        <td>{{ $etudiant->tel }}</td>
                        <td>{{ $etudiant->ville }}</td>
                        <td class="text-end">
                            <a href="{{ route('etudiants.show', $etudiant) }}" class="btn btn-sm btn-outline-info">Voir</a>
                            <a href="{{ route('etudiants.edit', $etudiant) }}" class="btn btn-sm btn-outline-warning">Modifier</a>
                            <form action="{{ route('etudiants.destroy', $etudiant) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cet etudiant ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted py-4">Aucun etudiant trouve.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
