@extends('listados')

@section('content')
<!--Content-->
<div class="wrapper cf">
    <div class="all_contact cf boxregistro">
        <div class="left-side-contact cf">
             
        			<h2>Para ingresar con Twitter necesitamos que ingrese su dirección de email por única vez.</h2>
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/twitter/callback') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="provider_id" value="{{$u->getId()}}">
						<input type="hidden" name="avatar" value="{{$u->getAvatar()}}">
						
						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" readonly="readonly" class="form-control" name="name" value="{{$u->getName()}}">
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="button3">Ingresar con twitter</button>
							</div>
						</div>
					</form>
            
        </div>
    </div>
</div>

@endsection
