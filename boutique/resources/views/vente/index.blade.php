@extends('layouts.app')

@section('title', 'Liste des ventes')

@section('content')

<div class="container">
    <h2>Liste des ventes</h2>
    <a href="{{ route('vente.create') }}" class="btn btn-success mb-3">Ajouter</a>

    @forelse ($ventes as $vente)
    <form method="post" action="{{ route('vente.destroy', $vente->id) }}">
        @csrf
        @method('DELETE')
        <div class="mb-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        <strong>Produit : {{ $vente->produit->nom }}</strong> | Date : {{ $vente->date }} | Heure : {{ $vente->heure }} | Quantité : {{ $vente->quantite }} | Prix total : {{ $vente->produit->prix * $vente->quantite }}€
                    </p>
                    <a href="{{ route('vente.edit', ['vente' => $vente->id]) }}" class="btn btn-warning">Modifier</a>
                    <input type="submit" class="btn btn-danger" value="Supprimer" />
                </div>
            </div>
        </div>
    </form>
    @empty
    <div class="alert alert-info">
        Aucune vente connue
    </div>
    @endforelse
</div>

@endsection
