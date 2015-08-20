<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Medadvisors</title>
<meta name="description" content="HTML framework description">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Google Fonts Load -->
<link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700,900,600' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css' />

<!-- Styles -->
<link rel="stylesheet" href="{{ URL::to('css/general.css') }} ">
<link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }} ">

<style>
	.center-block{
		margin: 80px auto;
		width: 20%;
		text-align: center;
	}

</style>

<!-- Modernizr -->
<script type='text/javascript' src="{{ URL::to('js/libs/modernizr-2.5.3.min.js') }}"></script>

<!-- Semantic HTML5 Support on old IE -->
<!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body style="background-color:#e5e5e5">
<div class="container-fluid">
	<div class="center-block"><img src="{{URL::to('css/images/air.png')}}"><h3>Proximamente...</h3></div>
</div>
<!-- Libs --> 
<script src="{{ URL::to('js/libs/jquery-1.10.2.min.js') }}"></script> 

</body>
</html>