@extends('layouts.app')

@section('title', 'Benvingut a LaravelTinkering')

@section('content')
    <!-- Hero Section -->
    <section class="hero bg-primary text-white text-center py-5" style="background: url('https://source.unsplash.com/1600x900/?movies,cinema') no-repeat center center; background-size: cover;">
        <div class="container">
            <h1 class="display-4 fw-bold">LaravelTinkering</h1>
            <p class="lead">El teu sistema CRUD per gestionar pel·lícules i sèries fàcilment.</p>
            <a href="{{ route('peliculas.index') }}" class="btn btn-light btn-lg mt-3">Explora les Pel·lícules</a>
            <a href="{{ route('series.index') }}" class="btn btn-outline-light btn-lg mt-3">Descobreix les Sèries</a>
        </div>
    </section>

    <!-- Funcionalitats -->
    <section class="features py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Què ofereix LaravelTinkering?</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <i class="bi bi-film fs-1 text-primary"></i>
                            <h5 class="card-title mt-3">Gestiona Pel·lícules</h5>
                            <p class="card-text">Afegeix, edita i elimina les teves pel·lícules preferides amb facilitat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <i class="bi bi-tv fs-1 text-primary"></i>
                            <h5 class="card-title mt-3">Organitza Sèries</h5>
                            <p class="card-text">Mantén al dia el teu catàleg de sèries amb un sistema intuïtiu.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <i class="bi bi-speedometer2 fs-1 text-primary"></i>
                            <h5 class="card-title mt-3">Interfície Ràpida</h5>
                            <p class="card-text">Gaudeix d'una experiència fluida amb una interfície optimitzada.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
