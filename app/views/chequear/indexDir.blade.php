@extends('layouts.master')
@section('titulo')
	Portal de Planificacion de Asignaturas
@stop
@section('javascript')
<?php echo HTML::script('Js/funciones.js');?>
@section('css')
<?php echo HTML::style('Css/stylesDir.css');?>
<html>

<body>
<div class="principal">
	<h1>Revisar Planificaci&oacuten</h1>
	<div class="menu">
	<ul>
		<li>{{ HTML::link('crear', 'Crear Plan') }}</li>
		<li>{{ HTML::link('revisar', 'Revisar Plan')}}</li>
		<li>{{ HTML::link('reporte', 'Generar PDF')}}</li>
		<li>{{ HTML::link('buscar', 'Buscar...')}}</li>
		<li>{{ HTML::link('opciones', 'Config. Cuenta')}}</li>
		<li>{{ HTML::link('logout', 'Salir')}}</li>
	</ul>
	</div>
	<h2>Desde ac&aacute se pueden revisar las planificaciones de cada unidad/d&iacute/clase para comprobar su cumplimiento.</h2>
	
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