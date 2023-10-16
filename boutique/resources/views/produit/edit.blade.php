@extends('layouts.app')

@section('content')
    <div class="text-center mt-5">
        <h2>Mise à jour</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-md-3">
            <form action="{{ route('produit.update', ['produit' => $produit->id]) }}" method="post">
                @csrf
                @method('put')

                <div class="form-group mb-3">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" value="{{ old('nom', $produit->nom) }}" required
                        maxlength="75" class="form-control">
                    @error('produit')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="reference">Référence</label>
                    <input type="number" name="reference" id="reference"
                        value="{{ old('reference', $produit->reference) }}" required maxlength="20" class="form-control">
                    @error('reference')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="prix">Prix</label>
                    <input type="number" name="prix" id="prix" value="{{ old('prix', $produit->prix) }}" required
                        maxlength="20" class="form-control">
                    @error('prix')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="marque_id">Marque</label>
                    <input type="text" name="marque_id" id="marque_id" value="{{ old('marque_id', $produit->marque) }}"
                        required maxlength="20" class="form-control">
                    @error('marque_id')
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
