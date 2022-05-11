@extends('layout.main')

@section('title', 'Página Principal')
@section('main')
    <div class="divCarrousel">
        <p class="textHeader">Lo que haces importa</p>
        <p class="pTHeader">Es tiempo de tomar conciencia. Ayudanos a reducir el impacto, para lograr un mundo más sustentable.</p>
    </div>

    <div class="container my-5">
        <div class="card-group">
            <div class="card" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ url('img/economiaCircular.svg') }}" class="card-img-top pildoras" alt="economiaCircular">
                <div class="card-body">
                    <h2 class="card-title text-center fs-3">Economía Circular</h2>
                    <p class="card-text text-center fs-6">Los residuos se utilizan como materia prima para crear nuevos productos.</p>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ url('img/consumoResponsable.svg') }}" class="card-img-top pildoras" alt="consumoResponsable">
                <div class="card-body">
                    <h2 class="card-title text-center fs-3">Consumo Responsable</h2>
                    <p class="card-text text-center fs-6">Como consumidores tenemos el poder de elegir productos sustentables.</p>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ url('img/concienciaAmbiental.svg') }}" class="card-img-top pildoras" alt="concienciaAmbiental">
                <div class="card-body">
                    <h2 class="card-title text-center fs-3">Conciencia Ambiental</h2>
                    <p class="card-text text-center fs-6">Cada uno es responsable de los residuos que genera y de reducir su impacto.</p>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-delay="400">
                <img src="{{ url('img/solucionesSustentables.svg') }}" class="card-img-top pildoras" alt="solucionesSustentables">
                <div class="card-body">
                    <h2 class="card-title text-center fs-3">Soluciones Sustentables</h2>
                    <p class="card-text text-center fs-6">Creamos soluciones amigables con el medioambiente.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid ourProp">
        <div class="container p-5">
            <div class="row justify-content-evenly" data-aos="zoom-in">
                <div class="col-12 col-md-5">
                    <img src="{{ url('img/ourProp.jpg') }}" class="w-100" alt="Nuestro Proposito">
                </div>
                <div class="col-12 col-md-5">
                    <h3 class="h1">Nuestro Proposito</h3>
                    <p class="textoOurProp">En Erres nos proponemos lograr que todos seamos conscientes y nos sepamos responsables del
                        impacto que nuestro consumo genera socio-ambientalmente, de forma tal que busquemos
                        alternativas, que no sólo eviten mayores daños, sino que, de ser posible,  reparen el
                        ya causado.</p>
                    <p class="textoOurProp">La economía circular es el camino hacia una nueva forma de gestionar los recursos,
                        agregar valor, reducir el impacto de nuestras acciones de consumo,
                        inspirarnos en el cuidado de nuestro hogar (el planeta) y finalmente proveer de
                        productos sustentables accesibles a nivel universal.</p>
                </div>
            </div>
        </div>
    </div>

@endsection()
