@extends('layouts.app')

@section('title')

@section('content')

    <h2>Liste des marques</h2>
    <a href="{{ route('marque.create') }}" class="btn btn-success">Ajouter</a>
    @forelse ($marques as $marque)
        <form method="post" action="{{ route('marque.destroy', $marque->id) }}">
            <div class="mb-2">
                <table class="table">
                    <tr>
                        <td>
                           <p>Marque : {{ $marque->nom }} | Pays : {{ $marque->nom }}</p>
                        </td>
                        @csrf
                        @method('DELETE')
                        <td>
                            <a href="{{ route('marque.edit', ['marque' => $marque->id]) }}"
                                class="btn btn-sm btn-warning">Modifier</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="Supprimer" />
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    @empty
        <li>
            Aucune marque connue
        </li>
    @endforelse
@endsection
