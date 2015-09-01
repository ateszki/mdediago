@extends('listados')

@section('content')

<!--Content-->

<div class="wrapper" style="padding-top: 0px; margin-top:20px;">
  <ul class="breadcrumb">
    <li><a  class="linkgral volverlink"  href="javascript:history.back();">← VOLVER</a> <span class="divider"> I </span></li>
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
          <div style=" float:right; clear:both; padding:15px; background-color: #ECECEC; border-radius:6px;">tienes <strong>16 mensajes</strong> sin responder <span class="editbtn"><a href="registro.html">
            <div class="fa fa-envelope"></div>
            Leer mensajes</a></span></div>
        </div>
        <div class="name_doctors">
          <h1 style="margin-bottom:5px;">{{$medico->titu_nom_ape}} <span class="editbtn"><a href="{{URL::to('auth/register')}}">
            <div class="fa fa-edit"></div>
            Editar mis datos</a></span> </h1>
          <h3 style="margin-bottom:5px;">Cirujano Cardiovascular</h3>
          <h4 style="margin-bottom:20px; color:#999;">@foreach($medico->especialidades as $espe){{$espe->nombre}}@endforeach</h4>
          <div class="ratio">
            <ul>
              <li>Rating:</li>
              <li><a href="#"><img src="css/images/hart.png" alt="ratio"/></a></li>
              <li><a href="#"><img src="css/images/hart.png" alt="ratio"/></a></li>
              <li><a href="#"><img src="css/images/hart.png" alt="ratio"/></a></li>
              <li><a href="#"><img src="css/images/hart_empty.png" alt="ratio"/></a></li>
              <li><a href="#"><img src="css/images/hart_empty.png" alt="ratio"/></a></li>
            </ul>
          </div>
        </div>
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
                    
                    <!-- <li><a href="#tabs-4">Opinar / Valorar</a></li> -->
                    
                    <li><a href="#tabs-5">Preguntas (16)</a></li>
                    <li><a href="#tabs-6">Mensajes</a></li>
                  </ul>
                  <div  class="borderbottom2"></div>
                  <div id="tabs-1">
                    <div> 
                      
                      <!-- Abro contenedor columna izq -->
                      
                      <div class="col-8 media100" style="margin-top:-10px;">
                        <div  class="borderbottom"></div>
                        
                        <!-- Abro contenedor ubicacion -->
                        
                        <div class="mediahide col-1" style="padding-right:10px;"> <img src="css/images/geobullet-01.svg" width="100%" height="auto" alt="" /> </div>
                        <div class="col-8 media100" style="margin-top:-10px;">
                          <p>
                          <h2 style="margin-bottom:5px;;">Consultorio Privado <span class="editbtn"><a href="registro.html">
                            <div class="fa fa-edit"></div>
                            Editar</a></span> </h2>
                          Victor Martinez 15, piso 2B. Capital Federal | <a href="#" class="leermas">ver mapa</a>
                          </p>
                          <a class="button2" href="#"><span class="fa fa-phone fa-lg"></span> (011) 4787-3122 ›</a> </div>
                        <div class="col-3 media100 mediahorario gris">
                          <p style="text-align:left;"> <strong>Horario:<br>
                            </strong> martes de 17 a 21 hs.<br>
                            <strong>Atiende: <br>
                            </strong>Particulares, Swiss medical, OSDE, Osecac, OMINT </p>
                        </div>
                        <div  class="borderbottom"></div>
                        
                        <!-- fin contenedor ubicacion --> 
                        
                        <!-- Abro contenedor ubicacion -->
                        
                        <div class="mediahide col-1" style="padding-right:10px;"> <img src="css/images/geobullet-02.svg" width="100%" height="auto" alt="" /> </div>
                        <div class="col-8 media100" style="margin-top:-10px;">
                          <p>
                          <h2 style="margin-bottom:5px;;">Fundación Favaloro <span class="editbtn"><a href="registro.html">
                            <div class="fa fa-edit"></div>
                            Editar</a></span> </h2>
                          AV BELGRANO 1746 (Balvanera) C1107AHA Capital Federal, Capital Federal | <a href="#" class="leermas">ver mapa</a>
                          </p>
                          <a class="button2" href="#"><span class="fa fa-phone fa-lg"></span> (011) 4675-0283 ›</a> </div>
                        <div class="col-3 media100 mediahorario gris">
                          <p style="text-align:left;"> <strong>Horario:<br>
                            </strong> Lunes a viernes de 11 hs a 15 hs.<br>
                            <strong>Atiende: <br>
                            </strong>Swiss medical, OSDE, OMINT </p>
                        </div>
                        <div  class="borderbottom"></div>
                        
                        <!-- fin contenedor ubicacion --> 
                        
                        <!-- Abro contenedor ubicacion -->
                        
                        <div class="mediahide col-1" style="padding-right:10px;"> <img src="css/images/geobullet-03.svg" width="100%" height="auto" alt="" /> </div>
                        <div class="col-8 media100" style="margin-top:-10px;">
                          <p>
                          <h2 style="margin-bottom:5px;;"> <span class="editbtn"><a href="registro.html">
                            <div class="fa fa-edit"></div>
                            AGREGAR NUEVA UBICACION</a></span> </h2>
                          </p>
                        </div>
                        <div class="col-3 media100 mediahorario gris">
                          <p style="text-align:left;"> </p>
                        </div>
                        <div  class="borderbottom"></div>
                        
                        <!-- fin contenedor ubicacion --> 
                        
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
                      
                      <div class="col-1">
                        <div style="margin-top:-10px;" class="fa fa-heartbeat fa-4x gris"></div>
                      </div>
                      
                      <!--Esta contiene las dos columnas de especialidades-->
                      
                      <div class="col-11"> 
                        
                        <!--columna izquierda-->
                        
                        <div class="col-6">
                          <h3>Especialista en:</h3>
                          <div class="list2">
                            <ul>
                              <li>
                                <h2><a href="#">Biopsia de piel y mucosas </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Biopsias</a> <a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Cirugía de Nissen. Videolaparoscópica </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Cirugía videoendoscópica </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Drenaje de colecciones </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Ecografía </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Punciones (hepática, pleural, abdominal, raquídea) </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Vías de alimentación </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <br>
                              <br>
                              <br>
                              <span class="editbtn"><a href="registro.html">
                              <div class="fa fa-plus-circle"></div>
                              Agregar especialidad</a></span>
                            </ul>
                          </div>
                        </div>
                        
                        <!--columna derecha-->
                        
                        <div class="col-6">
                          <h3>Enfermedades y Patologías:</h3>
                          <div class="list2">
                            <ul>
                              <li>
                                <h2><a href="#">Cáncer de colon y recto </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Colelitiasis </a> <a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Diverticulosis </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Enfermedades del sistema digestivo </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Hemorroides </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Hernias </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Lipomas </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Pancreatitis </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Peritonitis </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Reflujo Gastroesofágico </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Tumores </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <li>
                                <h2><a href="#">Verrugas </a><a href="#">
                                  <div class="fa fa-minus-circle" style="color:#45619D !important;"></div>
                                  </a></h2>
                              </li>
                              <br>
                              <br>
                              <br>
                              <span class="editbtn"><a href="registro.html">
                              <div class="fa fa-plus-circle"></div>
                              Agregar enfermedad</a></span>
                            </ul>
                          </div>
                        </div>
                      </div>
                      
                      <!--fin columna derecha--> 
                      
                    </div>
                    <div  class="borderbottom" style="padding-top:40px; margin-bottom:60px;"></div>
                    
                    <!--Abro especialidades-->
                    
                    <div class="col-1">
                      <div style="margin-top:-10px;" class="fa fa-graduation-cap fa-4x gris"></div>
                    </div>
                    
                    <!--Esta contiene las dos columnas de especialidades-->
                    
                    <div class="col-11">
                      <h3>Formación Académica / profesional:</h3>
                      <div class="list1">
                        <ul>
                          <li><strong>Médico.</strong> UBA, 2001</li>
                          <li><strong>Cirujano general.</strong> Ministerio de salud, 2006</li>
                          <li><strong>Especialista en cirugía laparoscópica.</strong> Asociación Argentina de Cirugía, 2007</li>
                          <br>
                          <br>
                          <br>
                          <span class="editbtn"><a href="registro.html">
                          <div class="fa fa-institution"></div>
                          Editar información académica</a></span>
                        </ul>
                      </div>
                    </div>
                    
                    <!--columna izquierda--> 
                    
                  </div>
                  
                  <!--fin especialidades-->
                  
                  <div id="tabs-3">
                    <div style="margin-top:30px;">
                      <div class="col-3 media100">
                        <div class="photo_ale"></div>
                        <div class="name_doctors">
                          <h3 style="margin-bottom:4px;">Valoración General<span style="color:#999; font-size:13px;"> (3/5)<br>
                            </span></h3>
                          <div class="ratio">
                            <ul>
                              <li style="float:left;">Rating:&nbsp;&nbsp;</li>
                              <li style="float:left;"><a href="#"><img src="css/images/hart.png" alt="ratio"/></a> &nbsp;</li>
                              <li style="float:left;"><a href="#"><img src="css/images/hart.png" alt="ratio"/></a> &nbsp;</li>
                              <li style="float:left;"><a href="#"><img src="css/images/hart.png" alt="ratio"/></a>&nbsp; </li>
                              <li style="float:left;"><a href="#"><img src="css/images/hart_empty.png" alt="ratio"/></a> &nbsp;</li>
                              <li style="float:left;"><a href="#"><img src="css/images/hart_empty.png" alt="ratio"/></a> &nbsp; </li>
                              <li style="float:left; color: #959595;"><br>
                                Promedio en base a <br>
                                <strong>27 comentarios</strong> realizados:&nbsp;&nbsp;</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-4 media100">
                        <div class="list-group">
                          <div class="list-group-item"> <span class="fa fa-male fa-2x"></span>&nbsp;&nbsp;Atención &nbsp;&nbsp; <span class="fa fa-star-o fa-lg yellow float-right margintop20"></span> <span class="fa fa-star-half-o fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="gris">&nbsp;&nbsp;(3.5 de 5)</span> </div>
                          <div class="list-group-item"> <span class="fa fa-clock-o fa-2x"></span>&nbsp;&nbsp;Puntualidad &nbsp;&nbsp; <span class="fa fa-star-o fa-lg yellow float-right margintop20"></span> <span class="fa fa-star-half-o fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="gris">&nbsp;&nbsp;(3.5 de 5)</span> </div>
                          <div class="list-group-item"> <span class="fa fa-home fa-2x"></span>&nbsp;&nbsp;Instalaciones <span class="fa fa-star-o fa-lg yellow float-right margintop20"></span> <span class="fa fa-star-half-o fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="gris">&nbsp;&nbsp;(3.5 de 5)</span> </div>
                          <div class="list-group-item"> <span class="fa fa-money fa-lg"></span>&nbsp;&nbsp;Honorarios <span class="fa fa-star-o fa-lg yellow float-right margintop20"></span> <span class="fa fa-star-half-o fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="gris">&nbsp;&nbsp;(3.5 de 5)</span> </div>
                          <div class="list-group-item"> <span class="fa fa-desktop fa-lg"></span>&nbsp;&nbsp;Equipamientos <span class="fa fa-star-o fa-lg yellow float-right margintop20"></span> <span class="fa fa-star-half-o fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="fa fa-star fa-lg yellow float-right margintop20"></span> <span class="gris">&nbsp;&nbsp;(3.5 de 5)</span> </div>
                        </div>
                      </div>
                      <div class="borderbottom"></div>
                      
                      <!-- Abro contenedor ubicacion -->
                      
                      <div class="mediahide col-1" style="padding-right:10px;"> <img src="css/images/comment-bullet1.svg" width="100%" height="auto" alt="" /> </div>
                      <div class="col-8 media100" style="margin-top:-10px; padding-right:50px;">
                        <p style="margin-bottom:5px; font-size:13px;">"Excelente atencion y cordialidad. Muy buen profesional. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
                          
                          | 09/03/2015</p>
                        <br>
                        <span class="editbtn"><a href="registro.html">
                        <div class="fa fa-exclamation-circle"></div>
                        Reportar comentario</a></span> </div>
                      <div class="col-3 media100 mediahorario gris">
                        <p style="text-align:left;"> Paciente que se atendió con Dra. Carolina Perez Goiti en Santiago del Estero 1743 e/piso Entre San Martin (peatonal) y Rivadavia </p>
                      </div>
                      <div  class="borderbottom"></div>
                      
                      <!-- fin contenedor ubicacion --> 
                      
                      <!-- Abro contenedor ubicacion -->
                      
                      <div class="mediahide col-1" style="padding-right:10px;"> <img src="css/images/comment-bullet2.svg" width="100%" height="auto" alt="" /> </div>
                      <div class="col-8 media100" style="margin-top:-10px; padding-right:50px;">
                        <p style="margin-bottom:5px; font-size:13px;">"Excelente atencion y cordialidad. Muy buen profesional. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
                          
                          | 09/03/2015</p>
                        <br>
                        <span class="editbtn"><a href="registro.html">
                        <div class="fa fa-exclamation-circle"></div>
                        Reportar comentario</a></span> </div>
                      <div class="col-3 media100 mediahorario gris">
                        <p style="text-align:left;"> Paciente que se atendió con Dra. Carolina Perez Goiti en Santiago del Estero 1743 e/piso Entre San Martin (peatonal) y Rivadavia </p>
                      </div>
                      <div  class="borderbottom"></div>
                      
                      <!-- fin contenedor ubicacion --> 
                      
                      <!-- Abro contenedor ubicacion -->
                      
                      <div class="mediahide col-1" style="padding-right:10px;"> <img src="css/images/comment-bullet3.svg" width="100%" height="auto" alt="" /> </div>
                      <div class="col-8 media100" style="margin-top:-10px; padding-right:50px;">
                        <p style="margin-bottom:5px; font-size:13px;">"Excelente atencion y cordialidad. Muy buen profesional. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
                          
                          | 09/03/2015</p>
                        <br>
                        <span class="editbtn"><a href="registro.html">
                        <div class="fa fa-exclamation-circle"></div>
                        Reportar comentario</a></span> </div>
                      <div class="col-3 media100 mediahorario gris">
                        <p style="text-align:left;"> Paciente que se atendió con Dra. Carolina Perez Goiti en Santiago del Estero 1743 e/piso Entre San Martin (peatonal) y Rivadavia </p>
                      </div>
                      <div  class="borderbottom"></div>
                      
                      <!-- fin contenedor ubicacion --> 
                      
                      <!-- Abro contenedor ubicacion -->
                      
                      <div class="mediahide col-1" style="padding-right:10px;"> <img src="css/images/comment-bullet4.svg" width="100%" height="auto" alt="" /> </div>
                      <div class="col-8 media100" style="margin-top:-10px; padding-right:50px;">
                        <p style="margin-bottom:5px; font-size:13px;">"Excelente atencion y cordialidad. Muy buen profesional. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
                          
                          | 09/03/2015</p>
                        <br>
                        <span class="editbtn"><a href="registro.html">
                        <div class="fa fa-exclamation-circle"></div>
                        Reportar comentario</a></span> </div>
                      <div class="col-3 media100 mediahorario gris">
                        <p style="text-align:left;"> Paciente que se atendió con Dra. Carolina Perez Goiti en Santiago del Estero 1743 e/piso Entre San Martin (peatonal) y Rivadavia </p>
                      </div>
                      <div  class="borderbottom"></div>
                      
                      <!-- fin contenedor ubicacion --> 
                      
                      <!-- Abro contenedor ubicacion -->
                      
                      <div class="mediahide col-1" style="padding-right:10px;"> <img src="css/images/comment-bullet5.svg" width="100%" height="auto" alt="" /> </div>
                      <div class="col-8 media100" style="margin-top:-10px; padding-right:50px;">
                        <p style="margin-bottom:5px; font-size:13px;">"Excelente atencion y cordialidad. Muy buen profesional. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
                          
                          | 09/03/2015</p>
                        <br>
                        <span class="editbtn"><a href="registro.html">
                        <div class="fa fa-exclamation-circle"></div>
                        Reportar comentario</a></span> </div>
                      <div class="col-3 media100 mediahorario gris">
                        <p style="text-align:left;"> Paciente que se atendió con Dra. Carolina Perez Goiti en Santiago del Estero 1743 e/piso Entre San Martin (peatonal) y Rivadavia </p>
                      </div>
                      <div  class="borderbottom"></div>
                      
                      <!-- fin contenedor ubicacion --> 
                      
                      <!-- Abro contenedor ubicacion -->
                      
                      <div class="mediahide col-1" style="padding-right:10px;"> <img src="css/images/comment-bullet6.svg" width="100%" height="auto" alt="" /> </div>
                      <div class="col-8 media100" style="margin-top:-10px; padding-right:50px;">
                        <p style="margin-bottom:5px; font-size:13px;">"Excelente atencion y cordialidad. Muy buen profesional. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "
                          
                          | 09/03/2015</p>
                        <br>
                        <span class="editbtn"><a href="registro.html">
                        <div class="fa fa-exclamation-circle"></div>
                        Reportar comentario</a></span> </div>
                      <div class="col-3 media100 mediahorario gris">
                        <p style="text-align:left;"> Paciente que se atendió con Dra. Carolina Perez Goiti en Santiago del Estero 1743 e/piso Entre San Martin (peatonal) y Rivadavia </p>
                      </div>
                      <div  class="borderbottom"></div>
                      
                      <!-- fin contenedor ubicacion --> 
                      
                    </div>
                  </div>
                  <div id="tabs-5">
                    <div class="cf">
                      <div class="col-12">
                        <table width="100%%" border="0" cellspacing="0" cellpadding="10">
                          <tr>
                            <td width="84%"><h2>Estas son las preguntas <strong> de pacientes</strong> (16 son responder)<br />
                              </h2>
                              <div>Podrás responder libremente, tus respuestas se publicarán para que todos los pacientes puedan consultarla<br />
                                Medadvisors revisa todas las respuestas y se reserva el derecho de no publicar las que no cumplan las <a class="linkgral" href="#">directrices de publicación</a> de las opiniones </div></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                        </table>
                        <div id="main-slider" class="liquid-slider">
                          <div>
                            <h2 class="title" style="display:none;"><</h2>
                            <p> 
                              
                              <!--Abro pregunta-->
                              
                            <blockquote class="example-right">
                              <h3>1/16</h3>
                              <p>Hola, buenas tardes, una colega del trabajo está haciendo este tratamiento y no me atrevo a preguntarle mucho ¿En qué consiste el tratamiento con células madre para la insuficiencia cardíaca?</p>
                            </blockquote>
                            <p><a href="#" class="nameuser">María Paula Fernandez</a></p>
                            
                            <!-- cierro pregunta--> 
                            
                            <!--Abro respuesta-->
                            
                            <p>
                              <label> Tu respuesta </label>
                              <textarea name="textfield5" rows="10" id="textfield4" style="width:100%;"></textarea>
                            </p>
                            <span class="editbtn"><a href="registro.html">
                            <div class="fa fa-comment"></div>
                            Enviar Respuesta</a></span>
                            <hr>
                            </p>
                          </div>
                          <div>
                            <h2 class="title" style="display:none;">></h2>
                            <p> 
                              
                              <!--Abro pregunta-->
                              
                            <blockquote class="example-right">
                              <h3>2/16</h3>
                              <p>buenas tardes, una colega del trabajo está haciendo este tratamiento y no me atrevo a preguntarle mucho ¿En qué consiste el tratamiento con células madre para la insuficiencia cardíacabuenas tardes, una colega del trabajo está haciendo este tratamiento y no me atrevo a preguntarle mucho ¿En qué consiste el tratamiento con células madre para la insuficiencia cardíacaHola, buenas tardes, una colega del trabajo está haciendo este tratamiento y no me atrevo a preguntarle mucho ¿En qué consiste el tratamiento con células madre para la insuficiencia cardíaca?</p>
                            </blockquote>
                            <p><a href="#" class="nameuser">María Paula Fernandez</a></p>
                            
                            <!-- cierro pregunta--> 
                            
                            <!--Abro respuesta-->
                            
                            <p>
                              <label> Tu respuesta </label>
                              <textarea name="textfield5" rows="10" id="textfield4" style="width:100%;">buenas tardes, una colega del trabajo está haciendo este tratamiento y no me atrevo a preguntarle mucho ¿En qué consiste el tratamiento con células madre para la insuficiencia cardíaca</textarea>
                            </p>
                            <span class="editbtn"><a href="registro.html">
                            <div class="fa fa-edit"></div>
                            Editar Respuesta</a></span>
                            <hr>
                            </p>
                          </div>
                          <div>
                            <h2 class="title" style="display:none;">></h2>
                            <p> 
                              
                              <!--Abro pregunta-->
                              
                            <blockquote class="example-right">
                              <h3>3/16</h3>
                              <p>Hola, buenas tardes, una colega del trabajo está haciendo este tratamiento y no me atrevo a preguntarle mucho ¿En qué consiste el tratamiento con células madre para la insuficiencia cardíacabuenas tardes, una colega del trabajo está haciendo este tratamiento y no me atrevo a preguntarle mucho ¿En qué consiste el tratamiento con células madre para la insuficiencia cardíacabuenas tardes, una colega del trabajo está haciendo este tratamiento y no me atrevo a preguntarle mucho ¿En qué consiste el tratamiento con células madre para la insuficiencia cardíaca?</p>
                            </blockquote>
                            <p><a href="#" class="nameuser">María Paula Fernandez</a></p>
                            
                            <!-- cierro pregunta--> 
                            
                            <!--Abro respuesta-->
                            
                            <p>
                              <label> Tu respuesta </label>
                              <textarea name="textfield5" rows="10" id="textfield4" style="width:100%;"></textarea>
                            </p>
                            <span class="editbtn"><a href="registro.html">
                            <div class="fa fa-comment"></div>
                            Enviar Respuesta</a></span>
                            <hr>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="tabs-6">
                    <div class="cf">
                      <div class="col-12">
                      
                      
                      
                      
                      <div class="contenedor">
  <section id="barra-1"> 
    <p><!--empieza barra-1 --->
    </p>
    <nav class="botonera">
      <ul>
        <li class="titulo-botonera">Correo</li>
        <li><a href="#" class="link-botonera">Bandeja de entrada (1)</a></li>
        <li><a href="#" class="link-botonera">Enviados</a></li>
        <li><a href="#" class="link-botonera">Redactar</a></li>
      </ul>
</nav>
    <nav class="botonera">
      <ul>
        <li class="titulo-botonera">Favoritos</li>
        <li><a href="#" class="link-botonera">Instituciones</a></li>
        <li><a href="#" class="link-botonera">Profesionales</a></li>
      </ul>
    </nav>
    <!--termina botonera-->
    
    <div class="clearing"> </div>
  </section>
  <!--termina y empieza bandeja de entrada --->
  <div class="bandeja-de-entrada">
    <div id="bandeja"> <div id="bandeja-1"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image17','','images/bandeja-1-2.png',1)"><img src="images/bandeja-1.png" name="Image17" width="34" height="35" border="0"></a> </div><div id="bandeja-2"> <a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image18','','images/bandeja-2-2.png',1)"><img src="images/bandeja-2.png" name="Image18" width="34" height="35" border="0"></a></div><div id="bandeja-3"> <a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image19','','images/bandeja-3-2.png',1)"><img src="images/bandeja-3.png" name="Image19" width="34" height="35" border="0"></a></div>
    
    <div id="bandeja-4"> <input name="" type="text" value="Buscar" class="campotexto"></div>
    <div id="bandeja-5"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image20','','images/bandeja-5-2.png',1)"><img src="images/bandeja-5.png" name="Image20" width="34" height="35" border="0"></a> </div>
    <div id="bandeja-6"> <span class="arial-gris-bold">1</span> <span class="arial-gris">-</span> <span class="arial-gris-bold">15</span> <span class="arial-gris">de</span> <span class="arial-gris-bold">4312</span></div>
    <div id="bandeja-7"><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image21','','images/bandeja-7-2.png',1)"><img src="images/bandeja-7.png" name="Image21" width="36" height="29" border="0" align="left"></a><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image22','','images/bandeja-8-2.png',1)"><img src="images/bandeja-8.png" name="Image22" width="36" height="29" border="0" align="left"></a> </div>
    </div>
    <div id="de-paciente-mensaje"> <div id="mails-on-1">
      <input type="checkbox" name="checkbox4" id="checkbox4">
        
      </div>
      <div id="mails-on-1"></div>
      <div class="titulo-botonera" id="mails-on-2"><a href="#" class="link-filtrosvisited">De</a> </div>
      <div class="titulo-botonera" id="mails-on-3"><a href="#" class="link-filtrosvisited">Paciente</a></div>
      <div id="mails-on-4"><a href="#" class="link-filtrosvisited">Mensaje</a></div>
      <div class="titulo-botonera" id="mails-on-5"><a href="#" class="link-filtrosvisited">Fecha</a></div>
    </div>
    <div class="mails-on">
      <div id="mails-on-1">
        <input type="checkbox" name="checkbox3" id="checkbox3">
      </div>
      <div id="mails-on-1"><img src="images/estrella-on.png" width="16" height="16"></div>
      <div class="arial-gris-bold" id="mails-on-2">Luciana Aguirre</div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Consulta sobre paciente</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la información sobre ...</span> </div>
      <div class="titulo-botonera" id="mails-on-5"><span class="arial-gris">18:30 </span></div>
    </div>
    <div class="mails-off">
      <div id="mails-on-1">
        <input type="checkbox" name="checkbox2" id="checkbox2">
      </div>
      <div id="mails-on-1"><img src="images/estrella-off.png" width="16" height="16"></div>
      <div class="arial-gris-bold" id="mails-on-2">Martín Fernandez</div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Consulta sobre paciente</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la información sobre ...</span> </div><div class="arial-gris" id="mails-on-5">18:30 </div>
    </div>
    <div class="mails-click">
      <div id="mails-on-1">
        <input name="checkbox" type="checkbox" id="checkbox" checked>
      </div>
      <div id="mails-on-1"><img src="images/estrella-off.png"></div>
      <div class="arial-gris-bold" id="mails-on-2">Ignacion Martines Fernandez </div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Hola necesito una opinión profesional</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la...</span> </div><div class="arial-gris" id="mails-on-5">18:30 </div>
    </div><!--termina mail-->
    <div class="mails-off">
      <div id="mails-on-1">
        <input type="checkbox" name="checkbox" id="checkbox">
      </div>
      <div id="mails-on-1"><img src="images/estrella-off.png"></div>
      <div class="arial-gris-bold" id="mails-on-2">María Torres </div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Consulta sobre paciente</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la información sobre ...</span> </div><div class="arial-gris" id="mails-on-5">18:30 </div>
    </div><!--termina mail-->
    <div class="mails-off">
      <div id="mails-on-1">
        <input type="checkbox" name="checkbox" id="checkbox">
      </div>
      <div id="mails-on-1"><img src="images/estrella-off.png"></div>
      <div class="arial-gris-bold" id="mails-on-2">María Torres </div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Consulta sobre paciente</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la información sobre ...</span> </div><div class="arial-gris" id="mails-on-5">18:30 </div>
    </div><!--termina mail-->
    <div class="mails-on">
      <div id="mails-on-1">
        <input type="checkbox" name="checkbox" id="checkbox">
      </div>
      <div id="mails-on-1"><img src="images/estrella-on.png"></div>
      <div class="arial-gris-bold" id="mails-on-2">María Torres </div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Consulta sobre paciente</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la información sobre ...</span> </div><div class="arial-gris" id="mails-on-5">18:30 </div>
    </div><!--termina mail-->
    <div class="mails-on">
      <div id="mails-on-1">
        <input type="checkbox" name="checkbox" id="checkbox">
      </div>
      <div id="mails-on-1"><img src="images/estrella-on.png"></div>
      <div class="arial-gris-bold" id="mails-on-2">María Torres </div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Consulta sobre paciente</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la información sobre ...</span> </div><div class="arial-gris" id="mails-on-5">18:30 </div>
    </div><!--termina mail-->
    <div class="mails-off">
      <div id="mails-on-1">
        <input type="checkbox" name="checkbox" id="checkbox">
      </div>
      <div id="mails-on-1"><img src="images/estrella-off.png"></div>
      <div class="arial-gris-bold" id="mails-on-2">María Torres </div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Consulta sobre paciente</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la información sobre ...</span> </div><div class="arial-gris" id="mails-on-5">18:30 </div>
    </div><!--termina mail-->
    <div class="mails-on">
      <div id="mails-on-1">
        <input type="checkbox" name="checkbox" id="checkbox">
      </div>
      <div id="mails-on-1"><img src="images/estrella-off.png"></div>
      <div class="arial-gris-bold" id="mails-on-2">María Torres </div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Consulta sobre paciente</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la información sobre ...</span> </div><div class="arial-gris" id="mails-on-5">18:30 </div>
    </div><!--termina mail-->
    <div class="mails-on">
      <div id="mails-on-1">
        <input type="checkbox" name="checkbox" id="checkbox">
      </div>
      <div id="mails-on-1"><img src="images/estrella-off.png"></div>
      <div class="arial-gris-bold" id="mails-on-2">María Torres </div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Consulta sobre paciente</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la información sobre ...</span> </div><div class="arial-gris" id="mails-on-5">18:30 </div>
    </div><!--termina mail-->
    <div class="mails-off">
      <div id="mails-on-1">
        <input type="checkbox" name="checkbox" id="checkbox">
      </div>
      <div id="mails-on-1"><img src="images/estrella-on.png"></div>
      <div class="arial-gris-bold" id="mails-on-2">María Torres </div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Consulta sobre paciente</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la información sobre ...</span> </div><div class="arial-gris" id="mails-on-5">18:30 </div>
    </div><!--termina mail-->
    <div class="mails-on">
      <div id="mails-on-1">
        <input type="checkbox" name="checkbox" id="checkbox">
      </div>
      <div id="mails-on-1"><img src="images/estrella-off.png"></div>
      <div class="arial-gris-bold" id="mails-on-2">María Torres </div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Consulta sobre paciente</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la información sobre ...</span> </div><div class="arial-gris" id="mails-on-5">18:30 </div>
    </div><!--termina mail-->
    <div class="mails-off">
      <div id="mails-on-1">
        <input type="checkbox" name="checkbox" id="checkbox">
      </div>
      <div id="mails-on-1"><img src="images/estrella-off.png"></div>
      <div class="arial-gris-bold" id="mails-on-2">María Torres </div>
      <div class="arial-gris" id="mails-on-3"></div>
      <div class="arial-gris-bold" id="mails-on-4"><a href="#" class="asunto">Consulta sobre paciente</a> <span class="arial-gris">-</span> <span class="arial-gris">Estimada Dra. enviamos la información sobre ...</span> </div><div class="arial-gris" id="mails-on-5">18:30 </div>
    </div><!--termina mail--><!--termina mail--><!--termina mail--><!--termina mail--><!--termina mail-->
  </div>
  <!--termina bandeja de entrada -->
  <div class="clearing"> </div>
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
</div>

@endsection