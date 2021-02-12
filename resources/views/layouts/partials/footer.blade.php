<footer>
    <div class="container py-4">
      <div class="row py-5">
        <div class="col-md-6 col-sm-12 mb-3 mb-md-0">
        <figure>
          <div class="d-flex align-items-center mb-3"><img src="{{asset('img/alejandro-aguilar-dev-white.svg')}}" alt="Logotype de Alejandro Aguilar Dev" width="50"><span class="text-uppercase text-small font-weight-bold text-white ml-2">Alejandro Aguilar</span></div>
          <figcaption>
              <p class=" text-small font-weight-light mb-3 text-footer">Hola. Soy Alejandro, un Desarrollador e Ingeniero de Sistemas freelance con 2 años de experiencia comercial creando sitios web y aplicaciones.</p>
          </figcaption>
        </figure>
          <div class="list-inline mb-0 text-white">
            <div class="list-inline-item">
              <a class="reset-anchor text-small" href="{{$informations->facebook}}" target="_blank"rel="noreferrer noopener"><img src="{{asset('img/icons/facebook.png')}}" alt="Link para ir al Fanpage de Facebook Alejandro Aguilar" class="network"rel="noreferrer noopener" ></a></div>
            <div class="list-inline-item"><a class="reset-anchor text-small" href="{{$informations->instagram}}" target="_blank"rel="noreferrer noopener"><img src="{{asset('img/icons/instagram.png')}}" alt="Link para ir al Instragram Alejandro Aguilar"class="network"rel="noreferrer noopener" ></a></div>
            <div class="list-inline-item"><a class="reset-anchor text-small" href="{{$informations->linkedin}}" target="_blank"rel="noreferrer noopener"><img src="{{asset('img/icons/linkedin.png')}}"  alt="Link para ir al Linkedin Alejandro Aguilar"class="network"rel="noreferrer noopener" ></a></div>
            <div class="list-inline-item"><a class="reset-anchor text-small" href="{{$informations->github}}" target="_blank"rel="noreferrer noopener"><img src="{{asset('img/icons/github.png')}}"  alt="Link para ir al Repositorio en Gihud Alejandro Aguilar" class="network"rel="noreferrer noopener" ></a></div>
          </div>
          
        </div>
        <div class="col-md-3 col-sm-12 mb-3 mb-md-0">
          <h2 class="pt-2 h6 text-white">Información</h2>
          <div class="d-flex flex-wrap">
            <ul class="list-unstyled text-footer mb-3 mr-4">
              <li><a class="reset-anchor text-small text-footer" href="#">{{$informations->direction}}</a></li>
              <li><a class="reset-anchor text-small text-footer" href="#">{{$informations->mobile}}</a></li>
            </ul>
          </div>
          <div class="d-flex flex-wrap">
            <ul class="list-unstyled text-footer mb-0">
                <li><a class="reset-anchor text-small text-footer" href="{{route('about.politicas')}}">Políticas de seguridad </a></li>
                <li><a class="reset-anchor text-small text-footer" href="{{route('about.terminos')}}">Términos y condiciones</a></li>
              </ul>
          </div>
        </div>

        <div class="col-md-3 col-sm-12 mb-3 mb-md-0">
          <h2 class="pt-2 h6 text-white">Portafolio</h2>
          <div class="d-flex flex-wrap">
            <ul class="list-unstyled text-footer mb-3 mr-4">
              @foreach ($categories as $category)
                <li><a class="reset-anchor text-small" href="{{route('project.show', $category)}}">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </div>
          
        </div>
       
      </div>
    </div>
    <div class="copyrights py-4">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-6 text-lg-left mb-2 mb-md-0">
            <p class="mb-0 text-footer text-small">&copy; 2021 Alejandro Aguilar developer.</p>
          </div>
          <div class="col-md-6 col-sm-6 text-md-right">
           
        </div>
      </div>
    </div>
  </footer>