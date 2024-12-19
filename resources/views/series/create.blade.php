@extends('layouts.app')

@section('title', 'Afegir Sèrie')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Afegir Sèrie</h1>
        <form action="{{ route('series.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="titol" class="form-label">Títol</label>
                <input type="text" name="titol" id="titol" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="descripcio" class="form-label">Descripció</label>
                <textarea name="descripcio" id="descripcio" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="temporades" class="form-label">Temporades</label>
                <input type="number" name="temporades" id="temporades" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="any_inici" class="form-label">Any d'inici</label>
                <input type="number" name="any_inici" id="any_inici" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="creador" class="form-label">Creador</label>
                <input type="text" name="creador" id="creador" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Afegir</button>
        </form>
    </div>
@endsection
