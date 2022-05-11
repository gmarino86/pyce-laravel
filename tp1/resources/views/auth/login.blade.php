@extends('layout.main')
@section('title','Iniciar Sesion')

@section('main')
    <section>
        <h1>Iniciar Sesión</h1>

        <form action="{{ route('auth.login.do') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email"
                       name="email"
                       id="email"
                       class="form-control"
                       value="{{ old('email') }}"
                >
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-100">Ingresar</button>
        </form>
    </section>
@endsection

