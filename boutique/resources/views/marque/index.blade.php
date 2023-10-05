@extends('layouts.app')

@section('title')

@section('content')

    <h2>Liste des marques</h2>
    <a href="{{ route('marque.create') }}" class="btn btn-primary">Ajouter</a>
    @forelse ($marques as $marque)
        <div class="mb-2">
            {{ $marque->nom }}
            <a href="{{ route('marque.edit', ['marque' => $marque->id]) }}" class="btn btn-sm btn-warning">Modifier</a>
            <a href="{{ route('marque.destroy', ['marque' => $marque->id]) }}" class="btn btn-sm btn-warning">Supprimer</a>
        </div>
    @empty
        <li>
            Aucune marque connue
        </li>
    @endforelse
@endsection
