                <div class="col-9 media100" style="margin-top:-10px;">
                                  <p>
                                  <h2 style="margin-bottom:5px;;"><a href="{{URL::to('profesionales/'.$consultorio->medico->slug)}}" class="linktit">{{ $consultorio->medico->titulo.' '.$consultorio->medico->nombre.' '.$consultorio->medico->apellido }}</a> </h2>
                                  
                                  <div class="ratio">
                          <ul>
                            <li style="float:left; margin-right:5px;"><a href="#"><img src="{{ URL::to('css/images/hart.png') }}" alt="ratio"/></a></li>
                            <li style="float:left; margin-right:5px;"><a href="#"><img src="{{ URL::to('css/images/hart.png') }}" alt="ratio"/></a></li>
                            <li style="float:left; margin-right:5px;"><a href="#"><img src="{{ URL::to('css/images/hart.png') }}" alt="ratio"/></a></li>
                            <li style="float:left; margin-right:5px;"><a href="#"><img src="{{ URL::to('css/images/hart_empty.png') }}" alt="ratio"/></a></li>
                            <li style="float:left; margin-right:5px;"><a href="#"><img src="{{ URL::to('css/images/hart_empty.png') }}" alt="ratio"/></a></li>
                            <li><a href="#" class="linkgral">14 opiniones</a></li>
                          </ul>
                        </div>      
                <br>
      
                  <p style="font-size:13px; color:#333;  margin-bottom:0px;">@foreach($consultorio->medico->especialidades as $espe){{ $espe->nombre}} @endforeach</p>
                  <p style="font-size:13px; color:#666; margin-bottom:-20px;"> {{ $consultorio->domicilio_completo }} | <a href="#" class="leermas">ver mapa</a></p>
                  </p>
                </div>
                <div class="col-3 media100 mediahorario gris">
                  <p style="text-align:left;"> 
                    <strong>Atiende: <br>
                    </strong>@foreach ($consultorio->medico->coberturas() as $c){{ $c->nombre }} @endforeach</p>
                </div>
                <div  class="borderbottom"></div>