@extends('layouts.app')

@section('title', 'Detalls de Pel·lícula')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">{{ $pelicula->titol }}</h1>
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $pelicula->titol }}</h5>
                <p class="card-text"><strong>Descripció:</strong> {{ $pelicula->descripcio }}</p>
                <p class="card-text"><strong>Director:</strong> {{ $pelicula->director }}</p>
                <p class="card-text"><strong>Any:</strong> {{ $pelicula->any }}</p>
            </div>
        </div>
        <div class="mt-4 text-center">
            <a href="{{ route('peliculas.index') }}" class="btn btn-secondary">Torna al llistat</a>
            <a href="{{ route('peliculas.edit', $pelicula) }}" class="btn btn-warning"><i class="bi bi-pencil"></i> Editar</a>
            <form action="{{ route('peliculas.destroy', $pelicula) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Eliminar</button>
            </form>
        </div>
    </div>
@endsection
