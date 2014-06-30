@extends('layouts.master')
@section('titulo')
	Portal de Planificacion de Asignaturas
@stop
@section('javascript')
<?php echo HTML::script('Js/funciones.js');?>
@section('css')
<?php echo HTML::style('Css/stylesTeacher.css');?>
<!-----------final---->
<html>

<body>
<div class="principal">
	<h1>Crear Planificaci&oacuten</h1>

	<div class="menu">
	<ul>
		<li>{{ HTML::link('crear', 'Crear Plan') }}</li>
		<li>{{ HTML::link('revisar', 'Revisar Plan')}}</li>
		<li>{{ HTML::link('buscar', 'Buscar...')}}</li>
		<li>{{ HTML::link('opciones', 'Config. Cuenta')}}</li>
		<li>{{ HTML::link('logout', 'Salir')}}</li>
	</ul>
	</div>
	<div id="subtitulo"><h2>Desde ac&aacute se pueden las planificaciones correspondientes a sus asignaturas asignadas.</h2></div>
	<div class="Plan">
		<p>Formato DEA-Planificaci&oacuten clase a clase</p>
		<div id="dea"><a href="#"><img src="Images/DEA.PNG"></a></div>
		<div id="I">
			<table border="3">
			<tr><td>I. Unidad Acad&aacutemica</td></tr>
			<tr><td>Facultad</td><td></td></tr>
			<tr><td>Escuela</td><td></td></tr>
			<tr><td>Carreras</td><td></td></tr>
			<tr><td>Asignaturas</td><td></td></tr>
			<tr><td>Profesor</td><td></td></tr>
			<tr><td>Fecha de formulaci&oacuten</td><td></td></tr>
			<tr><td>Semestre de dictaci&oacuten</td><td></td></tr>
			</table>
		</div>
		<div id="II">
				{{Form::open(array('url' => 'plan'))}}
				<p>II. Objetivo(s) General(es) (De preferencia, uno general)</p>
				{{Form::textarea('objetivos')}}
		</div>
		<div id="III">
				<p>II. Objetivo(s) General(es) (De preferencia, uno general)</p>
				{{Form::textarea('estrategia')}}
		</div>
		<div id="IV">
		<table border="3">
			<tr><td>IV. Planificaci&oacuten</td></tr>
			<tr><td>Unidad/Clase/Fecha</td><td>Objetivos espec&iacuteficos</td><td>Contenidos tem&aacuteticos</td><td>Evaluaciones</td></tr>
			<tr><td>1</td><td>{{Form::textarea('objetivo1',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido1',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba1',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>2</td><td>{{Form::textarea('objetivo2',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido1',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba2',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>3</td><td>{{Form::textarea('objetivo3',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido3',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba3',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>4</td><td>{{Form::textarea('objetivo4',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido4',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba4',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>5</td><td>{{Form::textarea('objetivo5',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido5',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba5',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>6</td><td>{{Form::textarea('objetivo6',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido6',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba6',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>7</td><td>{{Form::textarea('objetivo7',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido7',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba7',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>8</td><td>{{Form::textarea('objetivo8',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido8',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba8',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>9</td><td>{{Form::textarea('objetivo9',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido9',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba9',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>10</td><td>{{Form::textarea('objetivo10',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido10',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba10',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>11</td><td>{{Form::textarea('objetivo11',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido11',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba11',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>12</td><td>{{Form::textarea('objetivo12',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido12',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba12',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>13</td><td>{{Form::textarea('objetivo13',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido13',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba13',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>14</td><td>{{Form::textarea('objetivo14',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido14',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba14',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>15</td><td>{{Form::textarea('objetivo15',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido15',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba15',null,['size' =>'20x10'])}}</td></tr>
			<tr><td>16</td><td>{{Form::textarea('objetivo16',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('contenido16',null,['size' =>'20x10'])}}</td><td>{{Form::textarea('prueba16',null,['size' =>'20x10'])}}</td></tr>
		</table>
			<p>V. Observaciones Director de Departamento</p>
			{{Form::textarea('observaciones')}}
			<p>{{Form::submit('Enviar')}}</p>
			{{Form::close()}}
		</div>
		</div>
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