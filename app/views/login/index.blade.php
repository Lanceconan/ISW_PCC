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
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<div class="principal">
	<h1>Planificaci&oacuten semestral para asignaturas UTEM</h1>
	<div id="login">
        <div id="link";>{{HTML::link('/revision','Revisar Planificación')}}</div>
        <div id="link";>{{HTML::link('profesor','Login como Profesor')}}</div>
</div>
<div id="logo"><img src="Images/utem.jpg"></div>
	<div id="foot">
		<p>UNIVERSIDAD TECNOLOGICA METROPOLITANA</p>
		<p>Dieciocho 161, Santiago-Chile</p>
		<div id="link-logo">
			<a href=http://www.utem.cl><img src ="Images/logo.png"></a>
		</div>
        <div id="link";>{{HTML::link('admin','Logueo como Admin')}}</div>
	</div>
    <div id="linea">
    </div>
</div>
</body>
</html>
@stop
