@extends('layouts.app')

@section('content')
    <h2>Mise à jour</h2>
    <form action="{{ route('marque.update', ['marque' => $marque->id]) }}" method="post">

        @csrf
        @method('put')

        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" value="{{ old('nom', $marque->nom) }}" required
                maxlength="75">
            @error('marque')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="pays">pays</label>
            <input type="text" name="pays" id="pays" value="{{ old('pays', $marque->pays) }}" required
                maxlength="20">
            @error('quantite')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Valider" class="btn btn-success">
        </div>

    </form>
@endsection
