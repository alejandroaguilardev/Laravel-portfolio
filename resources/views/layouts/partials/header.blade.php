 <!-- navbar-->
 <header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white ">
      <div class="container"><a class="navbar-brand  d-flex align-items-center" href="{{route('home.index')}}"><img src="{{asset('img/alejandro-aguilar-dev.svg')}}" alt="Logotype de Alejandro Aguilar Dev" width="50"><span class="text-uppercase text-small font-weight-bold text-dark ml-2 mb-0">Alejandro Aguilar</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                  <!-- Navbar link--><a class="nav-link" href="{{route('about.index')}}">Acerca de mí</a>
            </li>
            <li class="nav-item">
                  <!-- Navbar link--><a class="nav-link" href="{{route('skill.index')}}">Habilidades</a>
            </li>
            <li class="nav-item">
                <!-- Navbar link--><a class="nav-link" href="{{route('project.index')}}">Proyectos</a>
            </li>
            <li class="nav-item">
                <!-- Navbar link--><a class="nav-link" href="{{route('project.index')}}">CV</a>
            </li>
            <li class="nav-item ml-lg-2 py-2 py-lg-0"><a class="btn btn-primary" href="#listingModal" data-toggle="modal">Empezemos
            </a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>