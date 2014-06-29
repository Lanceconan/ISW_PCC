@extends('layouts.master')
@section('titulo')
	Portal de Planificacion de Asignaturas
@stop
@section('javascript')
<?php echo HTML::script('Js/funciones.js');?>
@section('css')
<?php echo HTML::style('Css/stylesCommon.css');?>
//cambio css
<html>

<body>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<div class="principal">
	<h1>Revisar Planificaciones</h1>
	<div id="login">
        {{ Form::open(array('method' => 'POST', 'url' => '/revision')) }}
        {{ Form::label('rut', 'Rut'); }}
        {{ Form::text('rut'); }}
        {{ Form::label('password', 'Contraseña'); }} 
        {{ Form::password('password'); }}
        {{ Form::label('lblRememberme', 'Recordar contraseña') }}
        {{ Form::checkbox('rememberme', true) }}
        {{ Form::submit('Ingresar'); }}
        {{ Form::close() }}
</div>
{{HTML::link('/','Volver a la página principal')}}
<div id="logo"><img src="Images/utem.jpg"></div>
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
