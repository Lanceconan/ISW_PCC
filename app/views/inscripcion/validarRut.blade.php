@extends('layouts.master')
@section('titulo')
	Portal de Planificacion de Asignaturas
@stop
@section('javascript')
<?php echo HTML::script('Js/funciones.js');?>
@section('css')
<?php echo HTML::style('Css/styles.css');?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>

<body>
<div class="principal">
	<h1>Formulario de inscripci&oacuten</h1>
	<div class="crear">

		{{ Form::open(array('url' => 'inscribir')) }}

			<p>Ingrese su rut, si est&aacute registrado en la universidad, podr&aacute crear una cuenta de usuario</p>
			<p>{{ Form::label('nombre', 'Rut:') }}</p>
			<p>{{ Form::text('nombre') }}</p>
			<p>{{ Form::submit('Enviar') }}</p>

			{{ Form::close() }}


	</div>

		
	<div id="foot">
		<p>UNIVERSIDAD TECNOLOGICA METROPOLITANA</p>
		<p>Dieciocho 161, Santiago-Chile</p>
		<div id="link-logo">
			<a href=http://www.utem.cl><img src ="Images/logo.png"></a>
		</div>
	</div>
	<div id="linea">
	</div>
</div>
</body>
</html>
@stop