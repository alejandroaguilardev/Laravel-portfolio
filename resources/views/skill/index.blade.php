@extends('layouts.template')

@section('metadata')
@include('meta::manager', [
  'title'         => 'Acerca de mí - Alejandro Aguilar',
  'description'   => 'Hola. Soy Alejandro, un Desarrollador e Ingeniero de Sistemas freelance con 2 años de experiencia comercial creando sitios web y aplicaciones.',
])
@endsection

@section('content') 
<section class="py-5">
    <div class="container ">
      <header class="text-center mb-5 mx-auto">
        <h1 class="mb-1">Habilidades y Tenologías</h1>
        <p class="text-muted text-small"> Tecnologías, Framework y Lenguajes de programación</p>
      </header>

      <div class="row text-center">
        <header class="text-center mb-5 mx-auto">
            <h2 class="h3 text-primary border-bottom">Mejor Desempeño</h2>
        </header>
      </div>

      <div class="row text-center mb-4 pb-4">
            @foreach ($oneSkills as $skill)
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
      </div>

      <div class="row text-center">
        <header class="text-center mb-5 mx-auto">
            <h2 class="h3 text-primary border-bottom">Desempeño Promedio </h2>
        </header>
      </div>

      <div class="row text-center mb-4 pb-4">
            @foreach ($twoSkills as $skill)
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
      </div>

      <div class="row text-center">
        <header class="text-center mb-5 mx-auto">
            <h2 class="h3 text-primary border-bottom">En Aprendizaje</h2>
        </header>
      </div>

      <div class="row text-center ">
            @foreach ($threeSkills as $skill)
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
      </div>
    </div>
  </section>
 
@endsection