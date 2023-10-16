@extends('layouts.app')

@section('title')

@section('content')

    <h2>Liste des produits</h2>
    <a href="{{ route('produit.create') }}" class="btn btn-success">Ajouter</a>
    @forelse ($produits as $produit)
        <form method="post" action="{{ route('produit.destroy', $produit->id) }}">
            <div class="mb-2">
                <table class="table">
                    <tr>
                        <td>
                            <p>Nom : {{ $produit->nom }} | Reference : {{ $produit->reference }} | Prix : {{ $produit->prix}}€</p>
                        </td>
                        @csrf
                        @method('DELETE')
                        <td>
                            <a href="{{ route('produit.edit', ['produit' => $produit->id]) }}"
                                class="btn btn-sm btn-warning">Modifier</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="Supprimer" />
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    @empty
        <li>
            Aucun produit connu
        </li>
    @endforelse
@endsection
