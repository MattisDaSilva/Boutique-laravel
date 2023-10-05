@extends('layouts.app')

@section('content')
    <h2>Mise à jour</h2>
    <form action="{{ route('vente.update', ['vente' => $vente->id]) }}" method="post">

        @csrf
        @method('put')

        <div>
            <label for="produit">Produit</label>
            <input type="text" name="produit" id="produit" value="{{ old('produit', $vente->produit) }}" required
                maxlength="75">
            @error('produit')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="quantite">Quantité</label>
            <input type="number" name="quantite" id="quantite" value="{{ old('quantite', $vente->quantite) }}" required
                maxlength="20">
            @error('quantite')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <input type="submit" value="Valider" class="btn btn-success">
        </div>

    </form>
@endsection
