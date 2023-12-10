@extends('layouts.app')

@section('content')
    <div class="text-center mt-5">
        <h2>Ajouter une vente</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-md-3">
            <form action="{{ route('vente.store') }}" method="post">
                @csrf

                <div class="form-group mb-3">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" value="{{ old('date') }}" required
                        class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="heure">Heure</label>
                    <input type="time" name="heure" id="heure" value="{{ old('heure') }}" required
                        class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="produit_id">ID Produit</label>
                    <input type="number" name="produit_id" id="produit_id" value="{{ old('produit_id') }}" required
                        class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="quantite">Quantité</label>
                    <input type="number" name="quantite" id="quantite" value="{{ old('quantite') }}" required
                        class="form-control">
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>
            </form>
        </div>
    </div>
@endsection
