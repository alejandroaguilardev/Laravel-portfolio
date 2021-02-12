@extends('layouts.template')

@section('metadata')
@include('meta::manager', [
  'title'         => 'Proyectos de Alejandro Aguilar',
  'description'   => 'Mis proyectos realziados,  2 años de experiencia comercial creando sitios web y aplicaciones.',
])
@endsection

@section('content')

<section class="py-5">
  <div class="container">
    <div class="row">
      <!-- Filter-->
      <div class="col-lg-3 order-2 order-lg-1">
          <div class="card border-0 shadow-sm mb-4 p-2">
            <div class="card-body">
              <h2 class="h5 mb-4">Categorías</h2>
              <span class="border-bot"></span>
              <h1 class ="p text-muted text-small pb-2">Algunos de los proyectos realizados.</h1>
              <a href="{{route('project.index')}}">
                <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input"  type="checkbox" {{request()->routeis('project.index') ? 'checked' :''}}> 
                  <label class="custom-control-label" >Todos los Proyectos</label>
                </div>
              </a>
              @foreach ($categories as $listCategory)
                    <a href="{{route('project.show', $listCategory)}}">
                      <div class="custom-control custom-checkbox mb-2">
                          @isset($category2)
                          <input class="custom-control-input"  type="checkbox"   @if($category2->slug == $listCategory->slug) checked @endif)>                               
                          @else
                            <input class="custom-control-input"  type="checkbox" >
                          @endisset
                          <label class="custom-control-label" >{{$listCategory->name}}</label>
                      </div>
                    </a>
              @endforeach
            </div>
          </div>
      </div>
      <div class="col-lg-9 mb-5 mb-lg-0 order-1 order-lg-2">
        <div class="row mb-4 align-items-center">
          <div class="col-md-7">
            
          </div>
          <div class="col-md-5 text-md-right">
            <p class="h6 mb-0 p-3 p-md-0">{{$projects->count()}} Proyectos </p>
          </div>
        </div>
        <div class="row mb-4">
          @foreach ($projects as $project)
            <div class="col-lg-6 mb-4">
                  <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block  card-img-top overflow-hidden tool-trending" href="{{$project->link}}" target="_blank" rel="noreferrer noopener">
                      <div class="tool-thumb rounded-circle" href="{{$project->link}}" target="_blank" rel="noreferrer noopener"><img class="img-fluid rounded-circle backgroung-white" src="{{asset('img/favicon.png')}}" alt="Icono de Alejandro Aguilar" width="30" ></div>
                      <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                     
                      <div class="overlay-content"><img class="img-fluid img-project" src="{{asset($project->image)}}" alt=" Imagen del proyecto{{$project->name}}"></div></a>
                    <div class="card-body p-4">
                      <h3 class="h5"> <a class="stretched-link reset-anchor" href="{{$project->link}}" target="_blank" rel="noreferrer noopener">{{$project->name}}</a></h3>
                      <p class="text-muted text-small mb-0">{{$project->description}}</p>
                    </div>
                  </div>
            </div>
          @endforeach

        {{ $projects->links() }}
      </div>
    </div>
  </div>
</section>
 
@endsection