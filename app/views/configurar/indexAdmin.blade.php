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
	<h1>Cambiar Contrase&ntildea</h1>
	<div class="menu">
	<li>
            {{HTML::link('#','Manejo de Cuentas')}}           
            <ul>
                <li>{{HTML::link('#','Agregar')}}</li>
		<li>{{HTML::link('#','Reasignar')}}</li>
		<li>{{HTML::link('/','Borrar')}}</li>
            </ul>  
            </li>
            <li>{{HTML::link('#','Buscar')}}</li>
            <li>{{HTML::link('#','Configurar')}}</li>
            <li>{{HTML::link('/','Salir')}} </li>  
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
