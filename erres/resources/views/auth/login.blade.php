@extends('layout.main')
@section('title','Iniciar Sesion')

@section('main')
    <div class="container mt-4">
        <h1>Iniciar Sesión</h1>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-6">
                <form action="{{ route('auth.login.do') }}" method="post">
                    @csrf
                    <div class="my-3">
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
            </div>
        </div>
    </div>
@endsection

