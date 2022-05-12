<?php
/**
 * @var \App\Models\Blog $blog;
 */
?>
@extends('layout.main')

@section('title', 'Blog')
@section('main')
    <div class="container">
        <h1 class="my-3">Este es el Blog de Erres ;-)</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach($blogs as $blog)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ url('img/' . $blog->imagen) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->titulo }}</h5>
                        <p class="card-text">{{ $blog->texto }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection
