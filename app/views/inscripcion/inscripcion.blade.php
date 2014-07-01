@extends('layouts.master')
@section('titulo')
	Portal de Planificacion de Asignaturas
@stop
@section('javascript')
<?php echo HTML::script('Js/funciones.js');?>
@section('css')
<?php echo HTML::style('Css/stylesCommon.css');?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
</head>

<body>
<div class="principal">
	<h1>Formulario de inscripci&oacuten</h1>
	<div class="crear">

		{{ Form::open(array('url' => 'inscribir')) }}

			<p>{{ Form::label('nombre', 'Nombre') }}</p>
			<p>{{ Form::text('nombre') }}</p>

			<p>{{ Form::label('apellido', 'Apellido') }}</p>	
			<p>{{ Form::text('apellido') }}</p>

			<p>{{ Form::label('contrasena', 'Contraseña') }}</p>
			<p>{{ Form::password('password1') }}</p>

			<p>{{ Form::label('repetir contrasena', 'Repetir Contraseña') }}</p>
			<p>{{ Form::password('password2') }}</p>

			<p>{{ Form::label('repetir contrasena', 'Email') }}</p>
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
