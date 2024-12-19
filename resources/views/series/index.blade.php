@extends('layouts.app')

@section('title', 'Llistat de Sèries')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Llistat de Sèries</h1>
        <a href="{{ route('series.create') }}" class="btn btn-success mb-3">Afegir nova sèrie</a>
        @if($series->count())
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Títol</th>
                    <th>Creador</th>
                    <th>Temporades</th>
                    <th>Accions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($series as $seriesItem)
                    <tr>
                        <td>{{ $seriesItem->id }}</td>
                        <td>{{ $seriesItem->titol }}</td>
                        <td>{{ $seriesItem->creador }}</td>
                        <td>{{ $seriesItem->temporades }}</td>
                        <td>
                            <a href="{{ route('series.show', $seriesItem) }}" class="btn btn-info btn-sm">Veure</a>
                            <a href="{{ route('series.edit', $seriesItem) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('series.destroy', $seriesItem) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p class="text-center">No hi ha sèries registrades.</p>
        @endif
    </div>
@endsection
