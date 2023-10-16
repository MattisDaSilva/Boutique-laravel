@extends('layouts.app')

@section('content')
    <h2>Mise à jour</h2>
    <form action="{{ route('vente.update', ['vente' => $vente->id]) }}" method="post">

        @csrf
        @method('put')

        <div>
            <label for="date">date</label>
            <input type="date" name="date" id="date" value="{{ old('date', $vente->date) }}" required>
            @error('date')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="heure">heure</label>
            <input type="time" name="heure" id="heure" value="{{ old('heure', $vente->heure) }}" required>
            @error('heure')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="Id Produit">Id Produit</label>
            <input type="number" name="produit_id" id="produit_id" value="{{ old('produit_id', $vente->produit_id) }}" required
                maxlength="75">
            @error('produit_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="quantite">quantite</label>
            <input type="number" name="quantite" id="quantite" value="{{ old('quantite', $vente->quantite) }}" required>
            @error('quantite')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <input type="submit" value="Valider" class="btn btn-success">
        </div>

    </form>
@endsection
