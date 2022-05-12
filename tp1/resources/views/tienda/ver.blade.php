<?php
/**
 * @var \App\Models\Producto | \Database\Seeders\ProductoSeeder $producto
 */
    ?>
@extends('layout.main')

@section('main')
    <div class="container">
        <h1>Tienda de Erres</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 my-3">

            @foreach($productos as $producto)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ url('img/'.$producto->imagen) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $producto->nombre }}</h5>
                            <p class="card-text">$ {{ $producto->precio/100 }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
