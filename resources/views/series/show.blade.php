@extends('layouts.app')

@section('title', 'Detalls de la Sèrie')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">{{ $series->titol }}</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <h4><strong>Títol:</strong> {{ $series->titol }}</h4>
                <p><strong>Descripció:</strong> {{ $series->descripcio }}</p>
                <p><strong>Temporades:</strong> {{ $series->temporades }}</p>
                <p><strong>Any d'Inici:</strong> {{ $series->any_inici }}</p>
                <p><strong>Creador:</strong> {{ $series->creador }}</p>
            </div>
        </div>

        <div class="mt-4 text-center">
            <a href="{{ route('series.index') }}" class="btn btn-secondary">Torna al llistat</a>
            <a href="{{ route('series.edit', $series) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('series.destroy', $series) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@endsection
