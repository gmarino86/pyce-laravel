<?php
/**
 * @var \Illuminate\Support\ViewErrorBag $errors;
 * @var \App\Models\Producto $producto;
 * @var \App\Models\ProductoTipo[] | \Illuminate\Database\Eloquent\Collection $tipoProductos

 */
?>
@extends('layout.main')
@section('title', 'Editar Producto')
@section('main')
    <h1>Editar producto</h1>

    @if($errors->any())
        <div class="alert alert-danger">Hay errores de validación</div>
    @endif

    <form action="{{ route('producto.editar.grabar', ['id' => $producto->producto_id]) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>

            <input
                type="text"
                id="nombre"
                name="nombre"
                class="form-control @if($errors->has('nombre')) is-invalid @endif"
                @if($errors->has('nombre')) aria-describedby="error-nombre" @endif
                value="{{ old('nombre', $producto->nombre) }}"
            >
            @if($errors->has('nombre'))
                <div class="text-danger" id="error-nombre">{{ $errors->first('nombre') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea
                id="descripcion"
                name="descripcion"
                class="form-control @error('descripcion') is-invalid @enderror"
                @error('descripcion') aria-describedby="error-descripcion" @enderror
            >{{ old('descripcion', $producto->descripcion) }}</textarea>
            @error('descripcion')
            <div class="text-danger" id="error-descripcion">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input
                type="text"
                id="precio"
                name="precio"
                class="form-control @error('precio') is-invalid @enderror"
                @error('precio') aria-describedby="error-precio" @enderror
                value="{{ old('precio', $producto->precio) }}"
            >
            @error('precio')
            <div class="text-danger" id="error-precio">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="producto_tipo_id" class="form-label">Tipo de producto</label>
            <select
                name="producto_tipo_id"
                id="producto_tipo_id"
                class="form-control @error('producto_tipo_id') is-invalid @enderror"
                @error('producto_tipo_id') aria-describedby="error-producto_tipo_id" @enderror
            >
                <option value="">Elegir el tipo de producto</option>
                @foreach($tipoProductos as $tp)
                    <option
                        value="{{ $tp->producto_tipo_id }}"
                        @selected($tp->producto_tipo_id == old('producto_tipo_id', $producto->producto_tipo_id))
                    >{{ $tp->nombre }}</option>
                @endforeach
            </select>
            @error('producto_tipo_id')
            <div class="text-danger" id="error-producto_tipo_id">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection
