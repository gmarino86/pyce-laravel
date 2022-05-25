@extends('layout.admin')

@section('main')
    <div class="container mt-3">
        <h1>Bienvenido {{ auth()->user()->name }}</h1>
        <p class="mt-2 w-50">En esta sección podrás dar de alta productos nuevos, editar los actuales o eliminar los que
        ya no sean necesarios.</p>
    </div>
@endsection
