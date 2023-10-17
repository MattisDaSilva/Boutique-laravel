@extends('layouts.app')

@section('title', 'Liste des ventes')

@section('content')

<div class="container">
    <h2>{{__('Liste des ventes')}}</h2>
    <a href="{{ route('vente.create') }}" class="btn btn-success mb-3">{{__('Ajouter')}}</a>

    @forelse ($ventes as $vente)
    <form method="post" action="{{ route('vente.destroy', $vente->id) }}">
        @csrf
        @method('DELETE')
        <div class="mb-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        <strong>{{__('Produit')}} ID : {{ $vente->produit_id}}</strong> | {{__('Date')}} : {{ $vente->date }} | {{__('Heure')}} : {{ $vente->heure }} | {{__('Quantité')}} : {{ $vente->quantite }}
                    </p>
                    <a href="{{ route('vente.edit', ['vente' => $vente->id]) }}" class="btn btn-warning">{{__('Modifier')}}</a>
                    <input type="submit" class="btn btn-danger" value="{{__('Supprimer')}}" />
                </div>
            </div>
        </div>
    </form>
    @empty
    <div class="alert alert-info">
        {{__('Aucune vente connue')}}
    </div>
    @endforelse
</div>

@endsection
