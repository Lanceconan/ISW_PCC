@extends('layouts.master')
@section('titulo')
	Portal de Planificacion de Asignaturas
@stop
@section('javascript')
<?php echo HTML::script('Js/funciones.js');?>
@section('css')
<?php echo HTML::style('Css/stylesCommon.css');?>
<html>

<body>
<div class="principal">
	<h1>Cambiar Contrase&ntildea</h1>
	<div class="menu">
	<ul>
		<li>{{ HTML::link('buscar', 'Buscar...')}}</li>
		<li>{{ HTML::link('opciones', 'Config. Cuenta')}}</li>
		<li>{{ HTML::link('logout', 'Salir')}}</li>
	</ul>
	</div>
	<div class="configurar">
		<p>{{Form::open(array('url' => 'configurar'))}}</p>
		<p>{{Form::label('correo','Correo')}}</p>
		<p>{{Form::text('correo')}}</p>
		<p>{{Form::label('password','Contraseña')}}</p>
		<p>{{Form::text('password')}}</p>
		<p>{{Form::label('password','Confirmar Password')}}</p>
		<p>{{Form::text('password')}}</p>
		<p>{{Form::submit('Enviar')}}</p>
		{{Form::close()}}
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