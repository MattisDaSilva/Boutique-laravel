@extends('layouts.app')

@section('title')

@section('content')

    <h2>Liste des ventes</h2>
    <a href="{{ route('vente.create') }}" class="btn btn-success">Ajouter</a>
    @forelse ($ventes as $vente)
        <form method="post" action="{{ route('vente.destroy', $vente->id) }}">
            <div class="mb-2">
                <table class="table">
                    <tr>
                        <td>
                        <p>Produit : {{ $vente->produit->nom }} | Date : {{ $vente->date }} | Heure : {{ $vente->heure }}
                            |
                            Quantité : {{ $vente->quantite }} Prix : {{ $vente->produit->prix }}€</p>
                        </td>
                        @csrf
                        @method('DELETE')
                        <td>
                        <a href="{{ route('vente.edit', ['vente' => $vente->id]) }}"
                            class="btn btn-sm btn-warning">Modifier</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Supprimer" />
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    @empty
        <li>
            Aucune vente connue
        </li>
    @endforelse
@endsection
