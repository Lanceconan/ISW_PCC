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
<h1>Planificaci&oacuten semestral para asignaturas de la UTEM</h1>
 
<div id="Datos">
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

<div id="foot">
	<p>UNIVERSIDAD TECNOL&OacuteGICA METROPOLITANA</p>
	<p>Dieciocho 161, Santiago-Chile</p>
	<div id="foot2">Visite www.&#32.&#32.&#32.cl
	<div id="logo"></div></div>
	
</div>
</div>
</body>


</html>
@stop
