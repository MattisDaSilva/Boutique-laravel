@extends('layouts.app')

@section('title', 'Liste des marques')

@section('content')

<div class="container">
    <h2>Liste des marques</h2>
    <a href="{{ route('marque.create') }}" class="btn btn-success mb-3">Ajouter</a>

    @forelse ($marques as $marque)
    <form method="post" action="{{ route('marque.destroy', $marque->id) }}">
        @csrf
        @method('DELETE')
        <div class="mb-4">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><strong>{{ $marque->nom }}</strong> - Pays : {{ $marque->pays }}</p>
                    <a href="{{ route('marque.edit', ['marque' => $marque->id]) }}" class="btn btn-warning">Modifier</a>
                    <input type="submit" class="btn btn-danger" value="Supprimer" />
                </div>
            </div>
        </div>
    </form>
    @empty
    <div class="alert alert-info">
        Aucune marque connue
    </div>
    @endforelse
</div>

@endsection
