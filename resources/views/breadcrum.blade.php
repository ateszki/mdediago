<ul class="breadcrumb">        
	<li><a  class="linkgral volverlink"  href="javascript:history.back();">← VOLVER</a> <span class="divider"> I </span></li>
    <li><a  class="linkgral"  href="{{URL::to('/')}}">Inicio</a> </li>
    @foreach ($breadcrum as $crum)
	<li>&nbsp;<span class="divider">/</span>&nbsp;<a class="linkgral" href="{{URL::to($crum['url'])}}">{{$crum["texto"]}}</a></li>
    @endforeach
    <li class="linkgral active">&nbsp;<span class="divider">/</span>&nbsp;{{$titulo}}</li>
</ul>