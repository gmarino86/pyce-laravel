<?php
/**
 * @var \App\Models\Producto $producto
 */
?>
@extends('layout.main')

@section('title', 'Detalle del Producto')
@section('main')
    <div class="container mt-3">
        <div class="card mb-3 prodImg" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    @if($producto->imagen != '' && file_exists(public_path('img/' . $producto->imagen)))
                        @php
                        $imageSize = getimagesize(public_path('img/' . $producto->imagen));

                        @endphp
                        <img src="{{ url('img/' . $producto->imagen) }}"
                             class="img-fluid rounded-start h-100"
                             alt="{{ $producto->nombre }}"
                             {{ $imageSize[3] }}
                        >
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title h3">{{ $producto->nombre }}</h1>
                        <p class="card-text">{{ $producto->descripcion }}</p>
                        <p class="card-text"><small class="text-muted">Precio: ${{ $producto->precio/100 }}</small></p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-light me-md-2 mt-lg-5" href="{{ route('productos.index') }}" role="button">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
