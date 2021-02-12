@extends('layouts.template')

@section('metadata')
@include('meta::manager', [
  'title'         => 'Alejandro Aguilar - Developer',
  'description'   => 'Hola. Soy Alejandro, un Desarrollador e Ingeniero de Sistemas freelance con 2 años de experiencia comercial creando sitios web y aplicaciones.',
])

<style>
.banner {
  display:flex;
  justify-content:center;
  position:relative;
  height:15rem;
}
.banner-primary {
  width:20rem;
  transition: 1s all;
  content:url({{asset('img/alejandro-aguilar-recurse.svg')}});
  position:absolute;
}
.banner-primary-2 {
  width:20rem;
  opacity:0;
  transition: opacity 1s ease;
  position:absolute;
  content:url({{asset('img/alejandro-aguilar-recurse-2.svg')}});
}

.banner:hover .banner-primary{
  opacity:0;
}
.banner:hover .banner-primary-2{
  opacity:1;
}

</style>
@endsection

@section('content')
    
      <!-- Hero section-->
      <section class="hero-home py-5">
        <div class="container pt-5">
          @if(session('alert'))
          <div class="alert alert-success justify-content-center">{{session('alert')}}</div>
          @endif
          <div class="row">
            <div class="col-lg-7 mx-auto text-center">
              <p class="h6 text-uppercase text-primary mb-3">Hello World</p>
              <hgroup class="mb-5"> 
                <h1 >Hola. Soy Alejandro Aguilar </h1>
                  <h2>Engineer System - Developer</h2> 
              </hgroup>
              {{-- <form class="p-2 rounded shadow-sm bg-white" action="#">
                <div class="input-group">
                  <input class="form-control border-0 mr-2" type="search" placeholder="Search tools and resources...">
                  <div class="input-group-append rounded">
                    <button class="btn btn-primary rounded" type="submit"><i class="fas fa-search"></i></button>
                  </div>
                </div>
              </form> --}}
              <div class="banner">
                <div class="banner-primary"></div>
                <div class="banner-primary-2"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Features section-->
      <section class="py-5">
        <div class="container py-5">
          <div class="row text-center">
            <div class="col-lg-10 mx-auto">
              <div class="card border-0 shadow">
                <div class="card-body p-5">
                  <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{asset('img/icons/front-end.svg')}}" alt="Icono representativo de Front end" class="icons">
                      <h2 class="h5">Front - End </h2>
                      <p class="text-muted text-small mb-0">Dispongo de conocimientos básicos en diseño de piezas gráficas así como dominio Javascript</p>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="{{asset('img/icons/back-end.svg')}}" alt="Icono representativo de Back end" class="icons">

                      <h2 class="h5">Back - End</h2>
                      <p class="text-muted text-small mb-0">Dispongo de mejor dominio de tecnologías y algoritmos del lado del servidor </p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{asset('img/icons/full-stack.svg')}}" alt="Icono representativo de Full Stack" class="icons">
                      <h2 class="h5">Full Stack</h2>
                      <p class="text-muted text-small mb-0">Manejo el Stack en Lamp (Linux, Apache, Mysql, Php), en camino a aprender el stack Mern.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Essential tools-->
      <section class="pb-5">
        <div class="container pb-5">
          <header>
            <h2 class="h3 mb-1">Mi Experiencia Laboral</h2>
            <p class="text-muted text-small mb-5">Empresas para las cuales he laborado en mi carrera como desarrollador.</p>
          </header>
          <div class="row text-center align-items-stretch">
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card reset-anchor border-0 shadow h-100 hover-transition">
                <div class="card-body p-4 p-lg-5">
                  <div class="essential-tool-img mb-4 mx-auto" style="background: url({{asset('img/experiences/gweb7.png')}})"></div>
                  <h3 class="h5"> <a class="stretched-link reset-anchor" href="https://gweb7.com/" target="_blank" rel="noreferrer noopener">Gweb7</a></h3>
                  <p class="text-small text-muted mb-0">Desarrollador de Sitios Web administrables, Diseño Publicitario, Marketing Digital y Asesor de Ventas</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card reset-anchor border-0 shadow h-100 hover-transition">
                <div class="card-body p-4 p-lg-5">
                  <div class="essential-tool-img mb-4 mx-auto" style="background: url({{asset('img/experiences/yupa.png')}})"></div>
                  <h3 class="h5"> <a class="stretched-link reset-anchor" href="http://yupacreativa.com/" target="_blank" rel="noreferrer noopener">Yupa Creativa</a></h3>
                  <p class="text-small text-muted mb-0">Desarrollador de Web Service,   Desarrollador de Sitios Web / Ecommerce, Administrador de WHM</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card reset-anchor border-0 shadow h-100 hover-transition">
                <div class="card-body p-4 p-lg-5">
                  <div class="essential-tool-img mb-4 mx-auto" style="background: url({{asset('img/experiences/ford.png')}})"></div>
                  <h3 class="h5"> <a class="stretched-link reset-anchor" href="https://www.ford.com.ve/" target="_blank" rel="noreferrer noopener">Ford Motor Company</a></h3>
                  <p class="text-small text-muted mb-0">Mi Primeras practicas laborales fue en esta compañia, realizando Macros para Excel  y aplicaciones a medidas. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Categories section-->
      <section class="pb-5">
        <div class="container pb-5">
          <header class="text-center mb-5">
            <h2 class="mb-1">Habilidades y Tecnologías</h2>
            <p class="text-muted text-small"> Tecnologías, Framework y Lenguajes de programación</p>
          </header>
          <div class="row text-center">
            @foreach ($skills as $skill)
            <div class="col-lg-3 px-lg-2">
              <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
                <div class="card-body px-4 py-5">
                  <img src="{{asset($skill->image)}}" alt="logo de la tecnología {{$skill->name}}" class="skill-icon">
                  <h3 class="h5"> <span class="stretched-link reset-anchor-inherit" >{{$skill->name}} </span></h2>
                  <p class="categories-item-number small mb-0">{{$skill->description}}</p>
                </div>
              </div>
            </div>
            @endforeach
            <div class="col-lg-12 text-center pt-4"><a class="btn btn-primary" href="{{route('skill.index')}}">Ver todas</a></div>
          </div>
        </div>
      </section>
      <!-- Resources section-->
      <section class="pb-5">
        <div class="container pb-5">
          <header class="text-center mb-5">
            <h2 class="mb-1">Proyectos Realizados</h2>
            <p class="text-muted text-small">Mira algunos mis proyectos no olvides visitar mis redes sociales.</p>
          </header>
          <div class="row">
            @foreach ($projects as $project)
            <div class="col-md-4 mb-4">
              <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block  card-img-top overflow-hidden tool-trending" href="{{$project->link}}" target="_blank" rel="noreferrer noopener">
                  <div class="tool-thumb rounded-circle" href="{{$project->link}}" target="_blank" rel="noreferrer noopener"><img class="img-fluid rounded-circle backgroung-white" src="{{asset('img/favicon.png')}}" alt="Icono de Alejandro Aguilar" width="30" ></div>
                  <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                  <ul class="list-inline tool-rating mb-0">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                  </ul>
                  <div class="overlay-content"><img class="img-fluid img-project" src="{{asset($project->image)}}" alt=" Imagen del proyecto{{$project->name}}"></div></a>
                <div class="card-body p-4">
                  <h3 class="h5"> <a class="stretched-link reset-anchor" href="{{$project->link}}" target="_blank" rel="noreferrer noopener">{{$project->name}}</a></h3>
                  <p class="text-muted text-small mb-0">{{$project->description}}</p>
                </div>
              </div>
        </div>
              @endforeach
            <div class="col-lg-12 text-center pt-5"><a class="btn btn-primary" href="{{route('project.index')}}">Mostrar Todos los Proyectos</a></div>
          </div>
        </div>
      </section>
      
@endsection