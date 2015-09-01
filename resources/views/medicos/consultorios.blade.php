<div class="mediahide col-1" style="padding-right:10px;"> 
                <img src="{{URL::to('css/images/geobullet-')}}@if($key+1<10){{'0'}}@endif{{$key+1}}{{'.svg'}}" width="100%" height="auto" alt="" /> </div>                
                <div class="col-8 media100" style="margin-top:-10px;">
<p><h2 style="margin-bottom:5px;">{{$consultorio->nombre}}</h2>
{{$consultorio->domicilio_completo}} | <a href="#" class="leermas">ver mapa</a></p>
                  <a class="button2 ver_tel" data-medico="{{$consultorio->medico->slug}}" href="#"><span class="fa fa-phone fa-lg"></span> Ver teléfono ›</a>  
               </div>
               <div class="col-3 media100 mediahorario gris">
              <p style="text-align:left;"> <strong>Horario:<br>
</strong> {{$consultorio->horarios}}<br>
        <strong>Atiende: <br>
</strong>@foreach ($consultorio->medico->coberturas() as $c){{ $c->nombre }} @endforeach
</p>

        </div>
                <div  class="borderbottom"></div>