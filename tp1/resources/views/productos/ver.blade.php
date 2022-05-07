<?php
/**
 * @var \App\Models\Producto $producto
 */
?>
@extends('layout.main')

@section('title', 'Detalle del Producto')
@section('main')
    <h1 class="my-3">{{ $producto->nombre }}</h1>

    <dl>
        <dt>Descripcion</dt>
        <dd>{{ $producto->descripcion }}</dd>
        <dt>Precio</dt>
        <dd>$ {{ $producto->precio }}</dd>
    </dl>
@endsection
