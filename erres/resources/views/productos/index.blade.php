<?php
/**
 * @var \App\Models\Producto[] | Illuminate\Database\Eloquent\Collection $productos
 */
?>
@extends('layout.main')

@section('title', 'Productos')
@section('main')
    <div class="container">
        <h1>Productos</h1>
        <p>Listado de todos los Productos</p>

        @auth()
        <a href="{{ route('producto.nuevo.form') }}">Agregar nuevo producto</a>
        @endauth

        @if($productos->isNotEmpty())
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>Precio</td>
                <td>Tipo</td>
                <td>Acciones</td>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($productos as $p) : ?>
            <tr>
                <td>{{ $p->producto_id }}</td>
                <td>{{ $p->nombre }}</td>
                <td>{{ $p->descripcion }}</td>
                <td>$ {{ $p->precio/100 }}</td>
                <td>{{ $p->tipoProducto->nombre }}</td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-primary mx-1" href="{{ route('producto.ver', ['id' => $p->producto_id]) }}">Ver</a>
                        @auth()
                        <a class="btn btn-secondary mx-1" href="{{ route('producto.editar.form', ['id' => $p->producto_id]) }}">Editar</a>
                        <form action="{{ route('producto.eliminar',['id' => $p->producto_id]) }}" method="post">
                            @csrf
                            <button class="btn btn-danger mx-1" type="submit">Eliminar</button>
                        </form>
                        @endauth
                    </div>
                </td>
            </tr>
            <?php
            endforeach; ?>
            </tbody>
        </table>
        @else
            <p class="my-4">Aún no hay productos.</p>
        @endif
    </div>
@endsection
