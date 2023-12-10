@extends('layouts.app')

@section('content')
    <div class="text-center mt-5">
        <h2>Mise à jour</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-md-3">
            <form action="{{ route('marque.update', ['marque' => $marque->id]) }}" method="post">
                @csrf
                @method('put')

                <div class="form-group mb-3">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" value="{{ old('nom', $marque->nom) }}" required maxlength="75" class="form-control">
                    @error('marque')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="pays">Pays</label>
                    <input type="text" name="pays" id="pays" value="{{ old('pays', $marque->pays) }}" required maxlength="20" class="form-control">
                    @error('quantite')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>
            </form>
        </div>
    </div>
@endsection
