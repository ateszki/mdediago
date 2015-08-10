@extends('master')

@section('content')
<div class="cf"></div>

<!--SLAIDER-->
<div class="slidertop cf">
  <div class="slider-wrapper">
    <div class="top-slider">
      <ul class="slides">
        <li><img src="{{URL::to('css/images/s1.jpg') }}"  alt="Alt de la image" />
          <div class="contry ">
          
            <p class="cf">Opiniones y experiencias<br />
              en primera persona</p>
            <a class="button1" href="#">Buscar profesionales › </a> </div>
        </li>
        <li><img src="{{URL::to('css/images/s2.jpg') }}"  alt="Alt de la image" />
          <div class="contry ">
            <p class="cf">Opiná y compartí<br />
              tus experiencias médicas</p>
            <a class="button1" href="#">Quiero contar mi experiencia › </a> </div>
        </li>
        <li><img src="{{URL::to('css/images/s3.jpg') }}"  alt="Alt de la image" />
          <div class="contry ">
            <p class="cf">Conoce los comentarios<br />
              de otros pacientes</p>
            <a class="button1" href="#">Buscar comentacios de un profesional › </a> </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!--end of slaider--> 

<!--CONTENT-->
<div class="content">
  <div class="box_homeform">
    <div class="wrapper">
      <div class="text-center">
        <h1>Buscá a tu <span class="ultra_bold">doctor</span></h1>
        <p style="margin-top:-30px;">Podrás leer los comentarios de otros pacientes, conocer los datos de contacto del profesional, escribir y calificar tu experiencia</p>
      </div>
      <!--end text-center-->
      
      <div class="grup">
        <div class="list-left">
          <ul>
            <li><img class="center" src="{{URL::to('css/images/settings.png') }}" alt="icon"/>
              <p><b>Calidad del servicio</b><br />
                <span class="new">Podrás realizar comentarios<br>
                con respecto al tipo<br>
                de servicio recibido.</span></p>
            </li>
          
          </ul>
        </div>
        <!--end list-left-->
        
        <div class="list-right">
          <ul>
            <li><img class="center" src="{{URL::to('css/images/tag.png') }}" alt="icon"/>
              <p><b>Calificá al profesional</b><br />
                <span class="new">Dentro de cada profesional<br>
                podrás realizar una calificación</span></p>
            </li>
           
          </ul>
        </div>
        <!--end list-left-->
        <div class="grid1">
          
          <div style="padding-left:50px; padding-right:50px; padding-top:20px; padding-bottom:20px; width:100%; margin:0 auto; ">
          <form name="form" method="post" action="#">
             <label for="last-name">Nombre del doctor: </label>
                <input class="default_field" placeholder="Busca Nombre, especialidad, enfermedad, ciudad..." type="text" id="last-name"  name="last-name" style="width:100%"/>
                </div>
                
            <div class="submitsec">
              <input class="button_red" type="submit" value="Buscar profesional ›"/>
              <div class="comment">
                <div class="vertical-line1">
                  <p><a href="#" class="politicaslink">Políticas de privacidad</a><br />
                    <a href="#" class="politicaslink">Términos y condiciones</a></p>
                </div>
                <!--end vertical-line1--> 
              </div>
            </div>      

          </form>
          
        </div>
                  

        <!--end grid1--> 
      </div>
      <!--end grup--> 
    </div>
    <!--end wrapper--> 
  </div>
  <!--end box--> 
</div>
<!---end content-->

<div class="about-as">
  <div class="photo"> </div>
  <!--end photo-->
  
  <div class="about">
    <div class="text2">Sobre <span class="ultra_bold">Medadvisors</span></div>
    <div class="text-color">
      <p> Medadvisors cuenta con el más completo directorio de profesionales y servicios médicos y tiene como centro la “experiencia del paciente”.
        Es un sitio de recomendación donde los usuarios de medicina pueden hacer comentarios,  verter opiniones y recomendar con su calificación a profesionales, hospitales, sanatorios, instituciones, centros de asistencia  y diagnóstico, laboratorios, obras sociales, prepagas y servicios de salud en general. </p>
    </div>
    <div class="icon cf">
      <div class="icon1">
        <div class="col-icon cf">
          <div class="text_icons"> <b>88.373</b> <span class="about_doctor">Profesionales</span> </div>
        </div>
      </div>
      <div class="icon2">
        <div class="col-icon cf">
          <div class="text_icons"> <b>8.321</b> <span class="about_clinic">Centros médicos</span> </div>
        </div>
      </div>
      <div class="icon3">
        <div class="col-icon cf">
          <div class="text_icons"> <b>29.838</b> <span class="about_place">Opiniones</span> </div>
        </div>
      </div>
    </div>
    <!--end icon--> 
  </div>
  <!--end about--> 
</div>
<!--end about-as-->

<div class="blogonhome cf">
  <div class="wrapper">
    <h1 class="greenline2"> <span class="value2">Últimas&nbsp;&nbsp;<span class="ultra_bold">preguntas&nbsp;</span>realizadas<a class="button4" href="{{URL::to('/').'/preguntas/'}}">Ver preguntas ›</a></span></h1>
        
    @if (isset($preguntas))
    @foreach ($preguntas as $pid=>$pregunta)
            <div class="blogitem col-3">
              <div class="blog1" style="font-size:14px; line-height:20px;"><a href="{{URL::to('/').'/preguntas/index.php?qa='.$pid}}">{{ $pregunta["contenido"] }}</a><a href="{{URL::to('/').'/preguntas/index.php?qa='.$pid}}" class="leermas">leer más</a>
              </div>
                <br>
              @if (isset($pregunta["respuesta"]))
              <div class="blog3"><span>{{ $pregunta["respuesta"]["contenido"] }}<a href='{{URL::to("/")}}/preguntas/index.php?qa={!!$pid !!}' class="leermas">leer más</a></span><br>
                  <br>
                  <strong>Dr. {{ $pregunta["respuesta"]["nombre"]." ".$pregunta["respuesta"]["apellido"]}} </strong><br>
                  {{$pregunta["respuesta"]["titulo"]}}<br>
                  <br>
                  <a href="{{URL::to('/').'/preguntas/index.php?qa='.$pid}}"><span class="button2" >Leer más</span> </a>
              </div>
              @endif
            </div>
    @endforeach    
    @endif
    
    <!--end col-3--> 
  </div>
  <!--end wrapper--> 
</div>
<!--end blog-->

<div class="ease cf">
  <div class="wrapper">
    <div class="col-6">
      <div class="ease-align">
        <div class="ease-title"><span class="ultra_bold">Todo</span> en tu celular</div>
        <div class="ease-content"> Medadvisors cuenta con el más completo directorio de profesionales y servicios médicos y tiene como centro la “experiencia del paciente”.Medadvisors cuenta con el más completo directorio de profesionales. <br><br>
        <img src="{{URL::to('css/images/tiendasmobile.png') }}" width="280" height="auto"> </div>
        <br />
        <br /> </div>
    </div>
    <div class="col-6">
      <div class="iphone">
        <div class="imgin"> </div>
        <!--end imgin--> 
      </div>
      <!--end iphone-->
      <div class="imgin2"></div>
    </div>
    <!--end col-6--> 
  </div>
  <!--end wrapper--> 
</div>
<!--end erase-->
@endsection
