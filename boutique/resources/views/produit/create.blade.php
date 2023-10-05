@extends('layouts.app')

@section('content')
    <h2>Ajouter un produit</h2>
    <form action="{{ route('produit.store') }}" method="post">

        @csrf

        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="{{ old('nom') }}" required maxlength="50">
        </div>

        <div>
            <label for="prix">prix</label>
            <input type="number" name="prix" id="prix" value="{{ old('prix') }}" required maxlength="5">
        </div>

        <div>
            <label for="marque">Marque</label>
            <input type="text" name="marque" id="marque" value="{{ old('marque') }}" required maxlength="50">
        </div>

        <div>
            <label for="reference">Reference</label>
            <input type="text" name="reference" id="reference" value="{{ old('reference') }}" required maxlength="5">
        </div>

        <div>
            <input type="submit" value="Valider" class="btn btn-success">
        </div>

    </form>
@endsection
