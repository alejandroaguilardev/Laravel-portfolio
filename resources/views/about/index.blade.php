@extends('layouts.template')

@section('metadata')
@include('meta::manager', [
  'title'         => 'Acerca de mí - Alejandro Aguilar',
  'description'   => 'Hola. Soy Alejandro, un Desarrollador e Ingeniero de Sistemas freelance con 2 años de experiencia comercial creando sitios web y aplicaciones.',
])
@endsection

@section('content')
<section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mb-5 mb-lg-0">
          <!-- About-->
          <div class="card border-0 shadow-sm mb-4 mb-lg-5 p-2 p-lg-0">
            <div class="card-body p-lg-5">
              <h1 class="h3 mb-4">Acerca de mí</h1>
              <span class="border-bot"></span>
                <p>Soy Alejandro Aguilar, Ingeniero de Sistemas egresado del Politécnico Santiago Mariño un apasionado por la tecnología, la Ingeniería de Software y redes.</p>
                <p>Primordialmente me desempeño como desarrollador web, ¿en qué rol? Me encanta abarcar mucho, aunque no sea lo más recomendable, por tanto, dispongo de conocimientos front-end y back-end con el stack de Lamp y Wamp.</p>
                <p>Además, me encanta superarme, así como aprender sobre nuevas tecnologías algo que ya he mencionado ¿cierto? Es por ello, que también me encuentro en aprendizaje de nuevos stack como Mern, nunca se detiene de aprender en esta profesión.</p>
              
            </div>
          </div>

          <div class="card border-0 shadow-sm mb-4 mb-lg-5 p-2 p-lg-0">
            <div class="card-body p-lg-5">
              <h2 class="h3 mb-4">Mis Conocimientos</h2>
              <span class="border-bot"></span>
                <p>Además de desempeñarme como desarrollador, también he laborado alrededor de un año en mis inicios como Ingeniero de Sistemas, como Analista de Soporte en donde cumplí funciones tales como:</p>
                <ul>
                  <li>Mesa de ayuda: soporte técnico en hardware y Software y remoto (RealVNC, UltraVNC, TeamViewer).</li>
                  <li>En Redes: Cat5e, Cat6, Access point, router y switch (Cisco).</li>
                  <li>Ofimática: Microsoft office y libre office. Sistemas Operativos: En Windows, Linux.</li>
                  <li>Conocimientos básicos servidores: Active Directory, DHCP, file servers, Apache.</li>
                </ul>
                <p>También me de desempeñado  como Diseñador y Community Manager (Aunque no es mi preferencia)</p>
                <ul>
                  <li>En Diseño Gráfico Publicitario, Adobe y Corel.</li>
                  <li>Redes sociales: Facebook e Instagram.</li>

                </ul>
            </div>
          </div>

          <div class="card border-0 shadow-sm mb-4 mb-lg-5 p-2 p-lg-0">
            <div class="card-body p-lg-5">
              <h2 class="h3 mb-4">Cursos y Certificados</h2>
              <span class="border-bot"></span>
                <p>En plataformas de curso como Edteam, SoloLearn, Udemy  y  Cisco. Pero principalmente suelo ver viodetutoriales en plataformas de streaming gratuitos como Youtube y Clases en Vivo gratuitas, que suelo reforzar con la documentación de la tecnología. </p>
                <div class="row">
                  <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                     <a  href="{{asset('img/certificates/cisco-introduccion.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/cisco-introduccion.jpg')}}" alt="Imagen de Certificado de Cisco de Introducción "></a>
                  </div>
                  <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                     <a  href="{{asset('img/certificates/cisco-it.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/cisco-it.jpg')}}" alt="Imagen de Certificado de Cisco de It essencial "></a>
                  </div>
                  <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                    <a  href="{{asset('img/certificates/cisco-iot.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/cisco-iot.jpg')}}" alt="Imagen de Certificado de Cisco de Internet de las cosas "></a>
                 </div>
                 <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                  <a  href="{{asset('img/certificates/cisco-linux.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/cisco-linux.jpg')}}" alt="Imagen de Certificado de Cisco de Linux básico " ></a>
                 </div>
                  <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                   <a  href="{{asset('img/certificates/learn-html.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/learn-html.jpg')}}" alt="Imagen de Certificado de Html Sololearn"></a>
                  </div>
                  <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                    <a  href="{{asset('img/certificates/learn-css.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/learn-css.jpg')}}" alt="Imagen de Certificado de Css3 Sololearn"></a>
                   </div>
                   <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                    <a  href="{{asset('img/certificates/learn-js.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/learn-js.jpg')}}" alt="Imagen de Certificado de Javascript Sololearn"></a>
                   </div>
                   <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                    <a  href="{{asset('img/certificates/learn-php.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/learn-php.jpg')}}" alt="Imagen de Certificado de Php En Sololearn"></a>
                   </div>
                   <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                    <a  href="{{asset('img/certificates/learn-jquery.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/learn-php.jpg')}}" alt="Imagen de Certificado de Jquery En Sololearn"></a>
                   </div>
                   <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                    <a  href="{{asset('img/certificates/learn-sql.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/learn-php.jpg')}}" alt="Imagen de Certificado de SQL En Sololearn"></a>
                   </div>
                   <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                    <a  href="{{asset('img/certificates/learn-java.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/learn-java.jpg')}}" alt="Imagen de Certificado de Java En Sololearn"></a>
                   </div>
                   <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                    <a  href="{{asset('img/certificates/edteam-html.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/edteam-html.jpg')}}" alt="Imagen de Certificado de Html En Edteam"></a>
                   </div>
                   <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                     <a  href="{{asset('img/certificates/edteam-css.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/edteam-css.jpg')}}" alt="Imagen de Certificado de Css3 En Edteam"></a>
                    </div>
                    <div class="rounded overflow-hidden mb-3 col-6 col-md-3 ">
                     <a  href="{{asset('img/certificates/edteam-js.jpg')}}" data-lightbox="tool-gallery"  class="certificates"> <img class="img-fluid" src="{{asset('img/certificates/edteam-js.jpg')}}" alt="Imagen de Certificado de Javascript En Edteam"></a>
                    </div>
                    
                   
                </div>
            </div>
          </div>
        </div>

        {{-- <div class="col-lg-4 mb-5 mb-lg-0">
          <!-- About-->
          <div class="card border-0 shadow-sm mb-4 mb-lg-5 p-2 p-lg-0">
            <div class="card-body p-lg-5">
              <header>
                <h2 class="h3 mb-4 text-center">Experiencia Laboral</h2>
              </header>
              <div class="row text-center align-items-stretch">
                <div class="col-lg-12 mb-4 mb-lg-0 pb-4">
                  <div class=" reset-anchor border-0 shadow h-100 hover-transition">
                    <div class="card-body p-4 p-lg-5">
                      <div class="essential-tool-img mb-4 mx-auto" style="background: url({{asset('img/experiences/gweb7.png')}})"></div>
                      <h3 class="h5"> <a class="stretched-link reset-anchor" href="https://gweb7.com/" target="_blank"  rel="noreferrer noopener">Gweb7</a></h3>
                      <p class="text-small text-muted mb-0">Desarrollador de Sitios Web administrables, Diseño Publicitario, Marketing Digital y Asesor de Ventas</p>
                    </div>
                  </div>
                </div>
    
                <div class="col-lg-12 mb-4 mb-lg-0 pb-4">
                  <div class="card reset-anchor border-0 shadow h-100 hover-transition">
                    <div class="card-body p-4 p-lg-5">
                      <div class="essential-tool-img mb-4 mx-auto" style="background: url({{asset('img/experiences/yupa.png')}})"></div>
                      <h3 class="h5"> <a class="stretched-link reset-anchor" href="http://yupacreativa.com/" target="_blank"  rel="noreferrer noopener">Yupa Creativa</a></h3>
                      <p class="text-small text-muted mb-0">Desarrollador de Web Service,   Desarrollador de Sitios Web / Ecommerce, Administrador de WHM</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
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
        </div> --}}
      </div>
    </div>
</section>
 
@endsection

@section('links')
<link rel="stylesheet" href="{{asset('vendor/lightbox2/css/lightbox.min.css')}}">
@endsection
@section('scripts')
  <script src="{{asset('vendor/lightbox2/js/lightbox.min.js')}}"></script>
@endsection

