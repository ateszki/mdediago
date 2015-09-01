@extends('listados')

@section('content')


  <!--Content-->
<div class="wrapper" style="padding-top: 0px; margin-top:20px;">
  <ul class="breadcrumb">        <li><a  class="linkgral volverlink"  href="javascript:history.back();">← VOLVER</a> <span class="divider"> I </span></li>
        <li><a  class="linkgral"  href="index.html">Inicio</a> <span class="divider">/</span></li>
<li><a class="linkgral" href="search_especialidad.html">Especialidades</a> <span class="divider">/</span></li>
        <li><a class="linkgral" href="doctors_inside.html">Profesionales</a> <span class="divider">/</span></li>
                <li class="linkgral active">Cirujanos Plásticos</li>
</ul>

  <div class="about_doctors">
    <div class="boxmedico">
      <div class="doctors_information">
        <div class="doctors_photo">
          <div class="photo_ale"></div>
        </div>
        
        <div class="ratio" style="float:right;">

          
        <a href="#" class="button3 vertelefono" data-medico="{{$medico->slug}}" style="float:right; clear:both;"><span class="fa fa-phone fa-lg"></span> Ver telefono</a> 
        <a href="#" class="button3" style="float:right; clear:both; background-color:#ff768a;"><span class="fa fa-envelope fa-1x"></span> Enviar mensaje</a> 
        
        
        <div style=" float:right; clear:both; padding:15px; margin-top:15px; background-color: #ECECEC; border-radius:6px;"><strong>{{$medico->titu_nom_ape}}</strong>, tienes <strong>16 mensajes</strong> sin responder</div>
        </div>
        <div class="name_doctors">
          <h1 style="margin-bottom:5px;">{{$medico->titu_nom_ape}}  <span class="registrarmebtn"><a href="{{URL::to('registro-profesional')}}"> ¿Sos Vos? Reclama tu perfil</a></span> </h1> 
          <h3 style="margin-bottom:5px;">{{$medico->especialidad}} </h3>
           <h4 style="margin-bottom:20px; color:#999;">@foreach($medico->especialidades as $espe){{$espe->nombre}}@endforeach</h4>
  <div class="ratio">
          <ul>
            <li>Rating:</li>
            @for($i=1;$i<6;$i++)
            <li><a href="#"><img src="@if($i<=$medico->valoracion_general['promedios']['total']){{URL::to('css/images/hart.png')}}@else{{URL::to('css/images/hart_empty.png')}}@endif" alt="ratio"/></a> &nbsp;</li>
            @endfor
          </ul>
        </div>        </div>

        
       
      </div>
  
    
    <!--Service--><!--Content-->
<div class="content" style="margin-top:30px;">
  <div class="tabs">
      <div class="wrapper">
            <div class="col-12">
                <div class="tabs2 cf">
                    <div id="tabs">
                        <ul>
                           <li><a href="#tabs-1">Consultorios</a></li>
                            <li><a href="#tabs-2">Especialidad</a></li>
                            <li><a href="#tabs-3">Opiniones y Valoraciones</a></li>
                            <li><a href="#tabs-4">Opinar / Valorar</a></li>
                            <li><a href="#tabs-5">Preguntar</a></li>

                        </ul>
                        <div  class="borderbottom2"></div>

                        <div id="tabs-1">
                             <div>
              
              
<!-- Abro contenedor columna izq -->                
<div class="col-8 media100" style="margin-top:-10px;">
                <div  class="borderbottom"></div>
@each('medicos.consultorios',$medico->consultorios , 'consultorio' ,'medicos.vacio')

        
        
        
        
        
         </div>
    <!-- fin contenedor columna izq --> 
        
           
                               
        <!-- Abro contenedor columna derecha con mapa -->    
               
          <div class="media100 mediatop col-4" style="float:left; padding-left:30px;">
                <div> 
                <iframe src="https://mapsengine.google.com/map/embed?mid=zU1qhzJdvLzQ.kWPnwtNqHd4o" width="100%" height="500"></iframe>
                </div>
          </div>
    <!-- fin contenedor columna derecha con mapa -->    

                
              </div>
             </div>
             
             
             
             
             
             
             
                        <div id="tabs-2">
                            <div style="margin-top:20px;">
                                
                                <!--Abro especialidades-->
                                <div class="col-1"><div style="margin-top:-10px;" class="fa fa-heartbeat fa-4x gris"></div></div>
                                
                                <!--Esta contiene las dos columnas de especialidades-->
                                <div class="col-11">
                                <!--columna izquierda-->

                                <div class="col-6">
                                <h3>Especialista en:</h3>
                               <div class="list2">
                                 <ul>
                    @foreach($medico->especialidades as $especialidad)
                    <li><h2><a href="{{URL::to('especialidades/'.$especialidad->slug)}}">{{$especialidad->nombre}}</a></h2></li>
                    @endforeach
                </ul> 
</div>

                                
                             

                                </div>
                                
                               <!--columna derecha-->
                                <div class="col-6">
 <h3>Enfermedades y Patologías:</h3>
                                <div class="list2">
                                 <ul>
                    @foreach($medico->enfermedades as $enfermedad)
                    <li><h2><a href="{{URL::to('enfermedades/'.$enfermedad->slug)}}">{{$enfermedad->nombre}}</a></h2></li>
                    @endforeach
                </ul> 
</div>                                </div>
                </div>

                                
                                                               <!--fin columna derecha-->

                                
                                
                            </div>
                            
                            
                            
              @if($medico->formacion)
               <div  class="borderbottom" style="padding-top:40px; margin-bottom:60px;"></div>

   <!--Abro especialidades-->
                                <div class="col-1"><div style="margin-top:-10px;" class="fa fa-graduation-cap fa-4x gris"></div></div>

                                <!--Esta contiene las dos columnas de especialidades-->
                                <div class="col-11">
                                <h3>Formación Académica / profesional:</h3>
                                <div class="list1">
                                  {{$medico->formacion}}
                                </div>
                                </div>
              @endif
                                <!--columna izquierda-->
                                
                                
                        </div>
                        
                        
                                                       <!--fin especialidades-->
  
                        <div id="tabs-3">
                            <div style="margin-top:30px;">
                               
                                <div class="col-3 media100">
          <div class="photo_ale"></div>
         <div class="name_doctors">
          <h3 style="margin-bottom:4px;">Valoración General<span style="color:#999; font-size:13px;"> ({{$medico->valoracion_general['promedios']['total']}}/5)<br>
</span></h3>
  <div class="ratio">
          <ul>
            <li style="float:left;">Rating:&nbsp;&nbsp;</li>
            @for($i=1;$i<6;$i++)
            <li style="float:left;"><a href="#"><img src="@if($i<=$medico->valoracion_general['promedios']['total']){{URL::to('css/images/hart.png')}}@else{{URL::to('css/images/hart_empty.png')}}@endif" alt="ratio"/></a> &nbsp;</li>
            @endfor
            <li style="float:left; color: #959595;"><br>
Promedio en base a <br>
<strong>{{$medico->valoracion_general["cant"]}} comentario(s)</strong> realizados:&nbsp;&nbsp;</li>

          </ul>
        </div>        </div> 
           
                                </div>
                                <div class="col-4 media100">
                                    <div class="list-group">

 <div class="list-group-item">
  <span class="fa fa-male fa-2x"></span>&nbsp;&nbsp;Atención &nbsp;&nbsp;
   <span class="gris">&nbsp;&nbsp;({{$medico->valoracion_general['promedios']['atencion']}} de 5)</span>
  <ul style="float:right;">  
    @for($i=1;$i<6;$i++)
      <li style="float:left;" class="margintop20"><a href="#"><img src="@if($i<=$medico->valoracion_general['promedios']['atencion']){{URL::to('css/images/hart.png')}}@else{{URL::to('css/images/hart_empty.png')}}@endif" alt="ratio"/></a> &nbsp;</li>
    @endfor
  </ul>
</div>


 <div class="list-group-item">
  <span class="fa fa-clock-o fa-2x"></span>&nbsp;&nbsp;Puntualidad &nbsp;&nbsp;
     <span class="gris">&nbsp;&nbsp;({{$medico->valoracion_general['promedios']['puntualidad']}} de 5)</span>
  <ul style="float:right;">  
    @for($i=1;$i<6;$i++)
      <li style="float:left;" class="margintop20"><a href="#"><img src="@if($i<=$medico->valoracion_general['promedios']['puntualidad']){{URL::to('css/images/hart.png')}}@else{{URL::to('css/images/hart_empty.png')}}@endif" alt="ratio"/></a> &nbsp;</li>
    @endfor
  </ul>
</div>



 <div class="list-group-item">
  <span class="fa fa-home fa-2x"></span>&nbsp;&nbsp;Instalaciones 
     <span class="gris">&nbsp;&nbsp;({{$medico->valoracion_general['promedios']['instalaciones']}} de 5)</span>
  <ul style="float:right;">  
    @for($i=1;$i<6;$i++)
      <li style="float:left;" class="margintop20"><a href="#"><img src="@if($i<=$medico->valoracion_general['promedios']['instalaciones']){{URL::to('css/images/hart.png')}}@else{{URL::to('css/images/hart_empty.png')}}@endif" alt="ratio"/></a> &nbsp;</li>
    @endfor
  </ul>
</div>



 <div class="list-group-item">
  <span class="fa fa-money fa-lg"></span>&nbsp;&nbsp;Honorarios 
     <span class="gris">&nbsp;&nbsp;({{$medico->valoracion_general['promedios']['honorarios']}} de 5)</span>
  <ul style="float:right;">  
    @for($i=1;$i<6;$i++)
      <li style="float:left;" ><a href="#"><img src="@if($i<=$medico->valoracion_general['promedios']['honorarios']){{URL::to('css/images/hart.png')}}@else{{URL::to('css/images/hart_empty.png')}}@endif" alt="ratio"/></a> &nbsp;</li>
    @endfor
  </ul>
</div>




 <div class="list-group-item">
  <span class="fa fa-desktop fa-lg"></span>&nbsp;&nbsp;Equipamiento 
     <span class="gris">&nbsp;&nbsp;({{$medico->valoracion_general['promedios']['equipamiento']}} de 5)</span>
  <ul style="float:right;">  
    @for($i=1;$i<6;$i++)
      <li style="float:left;" "><a href="#"><img src="@if($i<=$medico->valoracion_general['promedios']['equipamiento']){{URL::to('css/images/hart.png')}}@else{{URL::to('css/images/hart_empty.png')}}@endif" alt="ratio"/></a> &nbsp;</li>
    @endfor
  </ul>
</div>







                            </div>
                            </div>
                                
                                <div class="col-5 media100" style="text-align:center !important;">
                                    <h3>¿Te atendiste con <br>
                                    {{$medico->titu_nom_ape}}?</h3>
                                    <a class="button6 gotoOpinaYValora" href="#">¡Opina y Valora! ›</a>
                                </div>
                                
                                <div class="borderbottom"></div>
                                
                                <!-- Abro contenedor ubicacion -->    
                                @foreach ($medico->opiniones_aprobadas() as $opinion)
                <div class="mediahide col-1" style="padding-right:10px;"> 
                <img src="css/images/comment-bullet1.svg" width="100%" height="auto" alt="" /> </div>                
                
                <div class="col-8 media100" style="margin-top:-10px; padding-right:50px;">
<p style="margin-bottom:5px; font-size:13px;">"{{$opinion->me_gusta}}"| {{$opinion->created_at->format("d/m/Y")}} </p>
                  </div>               <div class="col-3 media100 mediahorario gris">
<p style="text-align:left;"> Paciente que se atendió con {{$medico->titu_nom_ape}} en {{$opinion->consultorio->domicilio_completo}}

</p>

        </div>
                <div  class="borderbottom"></div>
    <!-- fin contenedor ubicacion --> 
                                @endforeach
        
        
        
        
        
                                
                            </div>
                        </div>
                        
                         <div id="tabs-4">
                            <div class="cf">
                                <div class="col-12">
                                <div class="opinion-gracias" style="display:none;">
                                <h3>Gracias por compartir tu experiencia</h3>
                                <h4>La verás en el sitio una vez que sea aprobada por un moderador</h4>
                                </div>
                      <form action="{{URL::to('ajax/opinion')}}" id="formopinar" method="POST">
                      {!! csrf_field() !!}
                      <input type="hidden" name="valoracion" id="valoracion" value="0">
                      <input type="hidden" name="atencion" id="atencion" value="0">
                      <input type="hidden" name="puntualidad" id="puntualidad" value="0">
                      <input type="hidden" name="instalaciones" id="instalaciones" value="0">
                      <input type="hidden" name="honorarios" id="honorarios" value="0">
                      <input type="hidden" name="equipamiento" id="equipamiento" value="0">     
                      <input type="hidden" name="medico_id" id="medico_id" value="{{$medico->id}}">
                   <table width="100%%" border="0" cellspacing="0" cellpadding="20">
                   <tr>
    <td></td>
    <td><h3>Compartí tu experiencia con <strong>{{$medico->titu_nom_ape}}</strong></h3></td>
  </tr>
  
  <tr>
    <td width="16%">Dónde te atendió</td>
    <td width="84%"><select name="consultorio_id" id="consultorio_id">
      @foreach($medico->consultorios as $consu)
        <option value="{{$consu->id}}">{{$consu->nombre}} - {{$consu->domicilio_completo}}</option>
      @endforeach
    </select></td>
  </tr>
  <tr>
    <td>Valoración General</td>
    <td>  <div class="ratio">
          <ul>
            @for($i=1;$i<6;$i++)
            <li style="float:left;"><a href="#" data-value="{{$i}}" data-calificador="valoracion"><img src="{{URL::to('css/images/hart_empty.png')}}" alt="ratio"/></a> &nbsp; </li>
            @endfor
            <li style="float:left; clear:both; color: #959595;">&nbsp;</li>

          </ul>
        </div>  </td>
  </tr>
   <tr>
    <td>Atención</td>
   <td>  <div class="ratio">
          <ul>
            @for($i=1;$i<6;$i++)
            <li style="float:left;"><a href="#" data-value="{{$i}}" data-calificador="atencion"><img src="{{URL::to('css/images/hart_empty.png')}}" alt="ratio"/></a> &nbsp; </li>
            @endfor
            <li style="float:left; clear:both; color: #959595;">&nbsp;</li>

          </ul>
        </div>   </td>
  </tr>
  <tr>
    <td>Puntualidad</td>
    <td> <div class="ratio">
          <ul>
            @for($i=1;$i<6;$i++)
            <li style="float:left;"><a href="#" data-value="{{$i}}" data-calificador="puntualidad"><img src="{{URL::to('css/images/hart_empty.png')}}" alt="ratio"/></a> &nbsp; </li>
            @endfor
            <li style="float:left; clear:both; color: #959595;">&nbsp;</li>

          </ul>
        </div>  </td>
  </tr>
 <tr>
    <td>Instalaciones</td>
    <td><div class="ratio">
          <ul>
            @for($i=1;$i<6;$i++)
            <li style="float:left;"><a href="#" data-value="{{$i}}" data-calificador="instalaciones"><img src="{{URL::to('css/images/hart_empty.png')}}" alt="ratio"/></a> &nbsp; </li>
            @endfor
            <li style="float:left; clear:both; color: #959595;">&nbsp</li>

          </ul>
        </div> </td>
  </tr>
 <tr>
    <td>Honorarios</td>
    <td><div class="ratio">
          <ul>
            @for($i=1;$i<6;$i++)
            <li style="float:left;"><a href="#" data-value="{{$i}}" data-calificador="honorarios"><img src="{{URL::to('css/images/hart_empty.png')}}" alt="ratio"/></a> &nbsp; </li>
            @endfor
            <li style="float:left; clear:both; color: #959595;">&nbsp</li>

          </ul>
        </div> </td>
  </tr>
 <tr>
    <td>Equipamiento</td>
    <td><div class="ratio">
          <ul>
            @for($i=1;$i<6;$i++)
            <li style="float:left;"><a href="#" data-value="{{$i}}" data-calificador="equipamiento"><img src="{{URL::to('css/images/hart_empty.png')}}" alt="ratio"/></a> &nbsp; </li>
            @endfor
            <li style="float:left; clear:both; color: #959595;">&nbsp</li>

          </ul>
        </div> </td>
  </tr>
  <tr>
    <td>Motivo de Visita (opcional)</td>
    <td><input type="text" class="textcampo" name="motivo_visita" id="motivo_visita"></td>
  </tr>
  <tr>
    <td>¿Qué te gustó?</td>
    <td><textarea name="me_gusta" class="textcampo" id="me_gusta"></textarea></td>
  </tr>
  <tr>
    <td>¿Qué podría mejorar?</td>
    <td><textarea name="puede_mejorar" id="puede_mejorar"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><button type="submit" class="button6 enviar_experiencia" href="#">Enviar experiencia ›</button></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>Medadvisors revisa todas las opiniones y se reserva el derecho de no publicar las que no cumplan las <a class="linkgral" href="{{URL::to('directrices-de-publicacion-de-opiniones')}}">directrices de publicación</a> de las opiniones</td>
  </tr>
</table>
</form>





                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        <div id="tabs-5">
                            <div class="cf">
                                <div class="col-12">
                                 
                                 
                  
                  
                  
 <table width="100%%" border="0" cellspacing="0" cellpadding="10">
                   <tr>
    <td width="84%"><h2>¿Tenés preguntas sobre <strong> {{$medico->especialidades->first()->nombre}}</strong>?<br />
    </h2>
      <div>Ingresá en nuestro sistema de preguntas y respuestas.<br>Preguntá gratuitamente a miles de especialistas registrados en Medadvisors.<br />
        Todos los que son especialistas en Cardiología recibirán tu pregunta y la contestarán. <br />
      </div></td>
  </tr>
  <tr>
    <td><a class="button6" href="{{URL::to('preguntas')}}">Ingresar al sistema de preguntas y respuestas›</a></td>
  </tr>
    <tr>
    <td></td>
  </tr>
    <tr>
    <td>Medadvisors revisa todas las preguntas y se reserva el derecho de no publicar las que no cumplan las <a class="linkgral" href="{{URL::to('directrices-de-publicacion-de-opiniones')}}">directrices de publicación</a> de las opiniones</td>
  </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    
</table>

   

                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    
    
    
    
    
  </div>
</div>

@endsection