                <div class="col-9 media100" style="margin-top:-10px;">
                                  <p>
                                  <h2 style="margin-bottom:5px;;"><a href="{{URL::to('profesionales/'.$consultorio->medico->slug)}}" class="linktit">{{ $consultorio->medico->titu_nom_ape }}</a> </h2>
                                  
                                  <div class="ratio">
                          <ul>
                            @for($i=1;$i<6;$i++)
            <li style="float:left; margin-right:5px;"><a href="#"><img src="@if($i<=$consultorio->medico->valoracion_general['promedios']['total']){{URL::to('css/images/hart.png')}}@else{{URL::to('css/images/hart_empty.png')}}@endif" alt="ratio"/></a> &nbsp;</li>
            @endfor<li>
            <a href="{{URL::to('profesionales/'.$consultorio->medico->slug)}}#tabs-3" class="linkgral">{{$consultorio->medico->valoracion_general["cant"]}} opiniones</a></li>
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
                <script>
                  consultorios.push(["{{ $consultorio->medico->titu_nom_ape }}",{{$consultorio->lat}},{{$consultorio->lon}},"{{$consultorio->domicilio_completo}}"]);
                </script>
                