@extends('layouts.app')

@section('content')
    <h2>Ajouter un produit</h2>
    <form action="{{ route('marque.store') }}" method="post">

        @csrf

        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="{{ old('nom') }}" required maxlength="50">
        </div>

        <div>
            <label for="pays">pays</label>
            <input type="text" name="pays" id="pays" value="{{ old('pays') }}" required maxlength="50">
        </div>

        <div>
            <input type="submit" value="Valider" class="btn btn-success">
        </div>

    </form>
@endsection
