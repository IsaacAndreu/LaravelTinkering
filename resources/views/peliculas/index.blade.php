@extends('layouts.app')

@section('title', 'Llistat de Pel·lícules')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Pel·lícules</h1>
        <a href="{{ route('peliculas.create') }}" class="btn btn-success mb-4">Afegir nova pel·lícula</a>
        @if($peliculas->count())
            <div class="row">
                @foreach($peliculas as $pelicula)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $pelicula->titol }}</h5>
                                <p class="card-text text-truncate"><strong>Descripció:</strong> {{ $pelicula->descripcio }}</p>
                                <p class="card-text"><strong>Director:</strong> {{ $pelicula->director }}</p>
                                <p class="card-text"><strong>Any:</strong> {{ $pelicula->any }}</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="{{ route('peliculas.show', $pelicula) }}" class="btn btn-info btn-sm"><i class="bi bi-eye"></i> Veure</a>
                                <a href="{{ route('peliculas.edit', $pelicula) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i> Editar</a>
                                <form action="{{ route('peliculas.destroy', $pelicula) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No hi ha pel·lícules registrades.</p>
        @endif
    </div>
@endsection
