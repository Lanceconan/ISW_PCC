@extends('layouts.master')
@section('titulo')
	Portal de Planificacion de Asignaturas
@stop
@section('javascript')
<?php echo HTML::script('Js/funciones.js');?>
@section('css')
<?php echo HTML::style('Css/styles.css');?>
<html>

<body>
<div class="principal">
	<h1>Planificaci&oacuten semestral para asignaturas UTEM</h1>
	<div id="login">
<form method="post" action="index.php">
        <table >
            <br>
            <tr> 
                    <td><label>Usuario:</label></td>
                    <td><input type="text" name="usuario" required></input></td>
            </tr> 
            <tr> 
                    <td><label>Contraseña:</label></td>
                    <td><input type="text" name="rut" required></input></td>
                    <td></td>
            <tr> 
                    <td><input type="submit" value ="Ingresar" required></input></td>
            </tr> 
            </tr>        
        </table>
</form>
</div>
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
