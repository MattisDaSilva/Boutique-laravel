@extends('layouts.app')

@section('title')

@section('content')

    <h2>Liste des ventes</h2>
    <a href="{{ route('vente.create') }}" class="btn btn-primary">Ajouter</a>
    @forelse ($ventes as $vente)
        <div class="mb-2">
            {{ $vente->produit }}
            <a href="{{ route('vente.edit', ['vente' => $vente->id]) }}" class="btn btn-sm btn-warning">Modifier</a>
            <a href="{{ route('vente.destroy', ['vente' => $vente->id]) }}" class="btn btn-sm btn-warning">Supprimer</a>
        </div>
    @empty
        <li>
            Aucune vente connue
        </li>
    @endforelse
@endsection