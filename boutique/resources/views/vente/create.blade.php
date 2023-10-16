@extends('layouts.app')

@section('content')
  <h2>Ajouter une vente</h2>
  <form action="{{ route('vente.store') }}" method="post">

    @csrf

    <div>
      <label for="date">date</label>
      <input type="date" name="date" id="date" value="{{ old('date') }}" required>
    </div>

    <div>
      <label for="heure">heure</label>
      <input type="time" name="heure" id="heure" value="{{ old('heure') }}" required>
    </div>

    <div>
      <label for="Id Produit">Id Produit</label>
      <input type="number" name="produit_id" id="produit_id" value="{{ old('produit_id') }}" required>
    </div>

    <div>
      <label for="quantite">quantite</label>
      <input type="number" name="quantite" id="quantite" value="{{ old('quantite') }}" required>
    </div>

    <div>
      <input type="submit" value="Valider" class="btn btn-success">
    </div>

  </form>
@endsection