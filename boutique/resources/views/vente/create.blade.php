@extends('layouts.app')

@section('content')
  <h2>Ajouter une vente</h2>
  <form action="{{ route('vente.store') }}" method="post">

    @csrf

    <div>
      <label for="libelle">produit</label>
      <input type="text" name="libelle" id="libelle" value="{{ old('libelle') }}" required maxlength="50">
    </div>

    <div>
      <label for="libelle">Quantité</label>
      <input type="number" name="Quantite" id="Quantite" value="{{ old('Quantite') }}" required maxlength="5">
    </div>

    <div>
      <input type="submit" value="Valider" class="btn btn-success">
    </div>

  </form>
@endsection