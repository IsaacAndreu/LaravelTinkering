@extends('layouts.app')

@section('title', $editMode ? 'Editar Pel·lícula' : 'Afegir Pel·lícula')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">{{ $editMode ? 'Editar Pel·lícula' : 'Afegir Pel·lícula' }}</h1>
        <form action="{{ $editMode ? route('peliculas.update', $pelicula) : route('peliculas.store') }}" method="POST" class="shadow-sm p-4 bg-white rounded">
            @csrf
            @if($editMode)
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="titol" class="form-label">Títol</label>
                <input type="text" name="titol" id="titol" class="form-control" value="{{ $pelicula->titol }}" placeholder="Introdueix el títol" required>
            </div>
            <div class="mb-3">
                <label for="descripcio" class="form-label">Descripció</label>
                <textarea name="descripcio" id="descripcio" class="form-control" rows="3" placeholder="Escriu una descripció" required>{{ $pelicula->descripcio }}</textarea>
            </div>
            <div class="mb-3">
                <label for="any" class="form-label">Any</label>
                <input type="number" name="any" id="any" class="form-control" value="{{ $pelicula->any }}" placeholder="Introdueix l'any de publicació" required>
            </div>
            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" name="director" id="director" class="form-control" value="{{ $pelicula->director }}" placeholder="Nom del director" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Canvis</button>
            <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">Cancel·lar</a>
        </form>
    </div>
@endsection
