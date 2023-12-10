@extends('layouts.app')

@section('title', 'Liste des produits')

@section('content')

<div class="container">
    <h2>{{__('Liste des produits')}}</h2>
    <a href="{{ route('produit.create') }}" class="btn btn-success mb-3">{{__('Ajouter')}}</a>

    @forelse ($produits as $produit)
    <form method="post" action="{{ route('produit.destroy', $produit->id) }}">
        @csrf
        @method('DELETE')
        <div class="mb-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><strong>{{ $produit->nom }}</strong> - {{__('Référence')}} : {{ $produit->reference }} - {{__('Prix')}} : {{ $produit->prix}}{{__('€')}}</p>
                    <a href="{{ route('produit.edit', ['produit' => $produit->id]) }}" class="btn btn-warning">{{__('Modifier')}}</a>
                    <input type="submit" class="btn btn-danger" value="{{__('Supprimer')}}" />
                </div>
            </div>
        </div>
    </form>
    @empty
    <div class="alert alert-info">
        Aucun produit connu
    </div>
    @endforelse
</div>

@endsection
