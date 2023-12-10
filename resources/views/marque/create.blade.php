@extends('layouts.app')

@section('content')
    <div class="text-center mt-5"> 
        <h2>Ajouter un produit</h2>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-md-3">
            <form action="{{ route('marque.store') }}" method="post">
                @csrf

                <div class="form-group mb-3">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" value="{{ old('nom') }}" required maxlength="50" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for "pays">Pays</label>
                    <input type="text" name="pays" id="pays" value="{{ old('pays') }}" required maxlength="50" class="form-control">
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>
            </form>
        </div>
    </div>
@endsection
