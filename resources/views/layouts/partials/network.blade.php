<aside class="sticky-container">
    <ul class="sticky">
        <li style="background: #3A559F">
            <img src="{{asset('img/icons/facebook.png')}}" alt="ir al Fanpage de Facebook Alejandro Aguilar">
            <a href="{{$informations->facebook}}" target="_blank" rel="noreferrer noopener" ><p>Síguenos en<br>Facebook</p></a>
        </li>
       
        <li style="background: #C536A4">
            <img src="{{asset('img/icons/instagram.png')}}" alt="ir al Instagram Alejandro Aguilar" >
            <a href="{{$informations->instagram}}" target="_blank" rel="noreferrer noopener" ><p>Conócenos en <br>Instagram</p></a>
        </li>
        
        <li style="background: #2666B2">
            <img src="{{asset('img/icons/linkedin.png')}}" alt="ir al Linkedin Alejandro Aguilar">
            <a href="{{$informations->linkedin}}" target="_blank" rel="noreferrer noopener" ><p>Trabajemos  en <br>linkedin</p></a>
        </li>  
        <li style="background: #00a51e">
            <img src="{{asset('img/icons/whatsapp.png')}}" alt="ir whatsapp Alejandro Aguilar" >
            <a href="https://api.whatsapp.com/send?phone={{$informations->whatsapp}}" target="_blank" rel="noreferrer noopener"><p>Escríbenos  en <br>Whatsapp</p></a>
        </li>  
        <li style="background: #212121">
            <img src="{{asset('img/icons/github.png')}}" alt=" ir Repositorio de Facebook Alejandro Aguilar">
            <a href="{{$informations->github}}" target="_blank" rel="noreferrer noopener" ><p>Consulta  mis <br>Repositorios</p></a>
        </li> 
    </ul>
</aside>