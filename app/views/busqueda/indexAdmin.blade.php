@extends('layouts.master')
@section('titulo')
	Portal de Planificacion de Asignaturas
@stop
@section('javascript')
<?php echo HTML::script('Js/funciones.js');?>
@section('css')
<?php echo HTML::style('Css/stylesAdmin.css');?>
<html>

<body>
<div class="principal">
	<h1>B&uacutesqueda</h1>
	<div class="menu">
	<ul>
		<li><a href="#">Manejo de cuentas</a>
		<ul>
			<li><a href="#">Agregar</a></li>
			<li><a href="#">Reasignar</a></li>
			<li><a href="#">Borrar</a></li>
		</ul>
		</li>
		<li><a href="#">Buscar...</a></li>
		<li><a href="#">Config. cuenta</a></li>
		<li><a href="#">Salir</a></li>
	</ul>
	</div>

	<div class="busqueda">
		<p>Buscar por:</p>
		<p>{{Form::open(array('url' => 'buscar'))}}</p>
		<p>{{Form::label('apellido','Apellido Profesor')}}</p>
		<p>{{Form::text('apellido')}}</p>
		<p>{{Form::label('nombre','Nombre Profesor')}}</p>
		<p>{{Form::text('nombre')}}</p>
		<p>{{Form::label('asignatura','Asignatura')}}</p>
		<p>{{Form::text('ramo')}}</p>
		<p>{{Form::label('departamento','Departamento')}}</p>
		<p>{{Form::text('depto')}}</p>
		<p>{{Form::submit('Buscar')}}</p>
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