@extends('layouts.master')
@section('titulo')
	Portal de Planificacion de Asignaturas
@stop
@section('css')
<?php echo HTML::style('Css/stylesCommon.css');?>
<html>

<body>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<div class="principal">
	<h1>Planificaci&oacuten semestral para asignaturas UTEM</h1>
	<div id="login">
        {{ Form::open(array('method' => 'POST', 'url' => '/')) }}
        <p>{{ Form::label('rut', 'Rut'); }}</p>
        {{ Form::text('rut'); }}
        <p>{{ Form::label('password', 'Contraseña'); }} </p>
        {{ Form::password('password'); }}
        <p>{{ Form::label('lblRememberme', 'Recordar contraseña') }}</p>
        {{ Form::checkbox('rememberme', true) }}
        <p>{{ Form::submit('Ingresar'); }}</p>
        {{ Form::close() }}
    </div>
    <div id="Inscribir">{{HTML::link('registrar','¿No tiene una cuenta? ¡Regístrese acá!')}}</div>
<div id="logo"><img src="Images/logo-utem.jpg"></div>
  <div id="link">{{HTML::link('admin','Logueo como Admin')}}</div>
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
