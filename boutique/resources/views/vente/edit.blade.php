@extends('layouts.app')

@section('content')
    <div class="text-center mt-5">
        <h2>Mise à jour</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-md-3">
            <form action="{{ route('vente.update', ['vente' => $vente->id]) }}" method="post">
                @csrf
                @method('put')

                <div class="form-group mb-3">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" value="{{ old('date', $vente->date) }}" required class="form-control">
                    @error('date')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="heure">Heure</label>
                    <input type="time" name="heure" id="heure" value="{{ old('heure', $vente->heure) }}" required class="form-control">
                    @error('heure')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="produit_id">ID Produit</label>
                    <input type="number" name="produit_id" id="produit_id" value="{{ old('produit_id', $vente->produit_id) }}" required maxlength="75" class="form-control">
                    @error('produit_id')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="quantite">Quantité</label>
                    <input type="number" name="quantite" id="quantite" value="{{ old('quantite', $vente->quantite) }}" required class="form-control">
                    @error('quantite')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>
            </form>
        </div>
    </div>
@endsection
