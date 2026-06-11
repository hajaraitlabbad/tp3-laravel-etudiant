@csrf

<div class="row g-3">
    <div class="col-md-6">
        <label for="cne" class="form-label">CNE</label>
        <input type="text" name="cne" id="cne" class="form-control @error('cne') is-invalid @enderror" value="{{ old('cne', $etudiant->cne ?? '') }}">
        @error('cne')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom', $etudiant->nom ?? '') }}">
        @error('nom')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="prenom" class="form-label">Prenom</label>
        <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom', $etudiant->prenom ?? '') }}">
        @error('prenom')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $etudiant->email ?? '') }}">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="tel" class="form-label">Telephone</label>
        <input type="text" name="tel" id="tel" class="form-control @error('tel') is-invalid @enderror" value="{{ old('tel', $etudiant->tel ?? '') }}" placeholder="0612345678">
        @error('tel')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="ville" class="form-label">Ville</label>
        <select name="ville" id="ville" class="form-select @error('ville') is-invalid @enderror">
            @php($villeSelectionnee = old('ville', $etudiant->ville ?? ''))
            <option value="">Choisir une ville</option>
            @foreach (['Casablanca', 'Rabat', 'Marrakech', 'Fes', 'Tanger', 'Agadir'] as $ville)
                <option value="{{ $ville }}" @selected($villeSelectionnee === $ville)>{{ $ville }}</option>
            @endforeach
        </select>
        @error('ville')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="mt-4 d-flex gap-2">
    <button type="submit" class="btn btn-primary">{{ $bouton }}</button>
    <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Annuler</a>
</div>
