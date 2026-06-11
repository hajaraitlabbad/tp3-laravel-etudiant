<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EtudiantController extends Controller
{
    public function index(): View
    {
        $etudiants = Etudiant::orderBy('nom')->orderBy('prenom')->get();

        return view('etudiants.index', compact('etudiants'));
    }

    public function create(): View
    {
        return view('etudiants.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $donnees = $request->validate([
            'cne' => ['required', 'string', 'max:30', 'unique:etudiants,cne'],
            'nom' => ['required', 'string', 'max:100'],
            'prenom' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150', 'unique:etudiants,email'],
            'tel' => ['required', 'regex:/^(05|06|07)[0-9]{8}$/'],
            'ville' => ['required', 'string', 'max:100'],
        ]);

        Etudiant::create($donnees);

        return redirect()
            ->route('etudiants.index')
            ->with('success', 'Etudiant ajoute avec succes.');
    }

    public function show(Etudiant $etudiant): View
    {
        return view('etudiants.show', compact('etudiant'));
    }

    public function edit(Etudiant $etudiant): View
    {
        return view('etudiants.edit', compact('etudiant'));
    }

    public function update(Request $request, Etudiant $etudiant): RedirectResponse
    {
        $donnees = $request->validate([
            'cne' => ['required', 'string', 'max:30', 'unique:etudiants,cne,'.$etudiant->id],
            'nom' => ['required', 'string', 'max:100'],
            'prenom' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150', 'unique:etudiants,email,'.$etudiant->id],
            'tel' => ['required', 'regex:/^(05|06|07)[0-9]{8}$/'],
            'ville' => ['required', 'string', 'max:100'],
        ]);

        $etudiant->update($donnees);

        return redirect()
            ->route('etudiants.index')
            ->with('success', 'Etudiant modifie avec succes.');
    }

    public function destroy(Etudiant $etudiant): RedirectResponse
    {
        $etudiant->delete();

        return redirect()
            ->route('etudiants.index')
            ->with('success', 'Etudiant supprime avec succes.');
    }
}
