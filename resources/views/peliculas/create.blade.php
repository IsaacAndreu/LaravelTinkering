@extends('layouts.app')

@section('title', 'Afegir Pel·lícula')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Afegir Pel·lícula</h1>
        <form action="{{ route('peliculas.store') }}" method="POST" class="shadow-sm p-4 bg-white rounded">
            @csrf
            <div class="mb-3">
                <label for="titol" class="form-label">Títol</label>
                <input type="text" name="titol" id="titol" class="form-control" placeholder="Introdueix el títol" required>
            </div>
            <div class="mb-3">
                <label for="descripcio" class="form-label">Descripció</label>
                <textarea name="descripcio" id="descripcio" class="form-control" rows="3" placeholder="Escriu una descripció" required></textarea>
            </div>
            <div class="mb-3">
                <label for="any" class="form-label">Any</label>
                <input type="number" name="any" id="any" class="form-control" placeholder="Introdueix l'any de publicació" required>
            </div>
            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" name="director" id="director" class="form-control" placeholder="Nom del director" required>
            </div>
            <button type="submit" class="btn btn-primary">Afegir Pel·lícula</button>
            <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">Cancel·lar</a>
        </form>
    </div>
@endsection
