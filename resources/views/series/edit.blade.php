@extends('layouts.app')

@section('title', 'Editar Sèrie')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Editar Sèrie</h1>
        <form action="{{ route('series.update', $series) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="titol" class="form-label">Títol</label>
                <input type="text" name="titol" id="titol" class="form-control" value="{{ $series->titol }}" required>
            </div>
            <div class="mb-3">
                <label for="descripcio" class="form-label">Descripció</label>
                <textarea name="descripcio" id="descripcio" class="form-control" rows="3" required>{{ $series->descripcio }}</textarea>
            </div>
            <div class="mb-3">
                <label for="temporades" class="form-label">Temporades</label>
                <input type="number" name="temporades" id="temporades" class="form-control" value="{{ $series->temporades }}" required>
            </div>
            <div class="mb-3">
                <label for="any_inici" class="form-label">Any d'inici</label>
                <input type="number" name="any_inici" id="any_inici" class="form-control" value="{{ $series->any_inici }}" required>
            </div>
            <div class="mb-3">
                <label for="creador" class="form-label">Creador</label>
                <input type="text" name="creador" id="creador" class="form-control" value="{{ $series->creador }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Canvis</button>
            <a href="{{ route('series.index') }}" class="btn btn-secondary">Cancel·lar</a>
        </form>
    </div>
@endsection
