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
        <form method="post" action="#">
        <table >
            <br>
            <tr> 
                    <select id="botones">
                        <option value="director">Ingresar Como</option>
                        <option value="director">Director</option>
                        <option value="profesor">Profesor</option>
                        <option value="comun">Comun</option>                        
                    </select>
            </tr> 
            <tr>             
                    <td><label id="botones">Usuario:</label></td>
                    <td><input id="botones" type="number" name="usuario" placeholder="RUT" required></input></td>
            </tr> 
            <tr> 
                    <td><label id="botones">Contraseña:</label></td>
                    <td><input id="botones" type= "password" name="contrasena"  placeholder="Contraseña" required></input></td>
                    <td></td>
            <tr> 
                    <td>
                        <input id="botones" type="submit" value ="Ingresar" required></input>
                        <input id="botones" type="reset" value="Limpiar">
                    </td>
            </tr> 
            </tr> 
            <br>
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
        <div id="link";>{{HTML::link('admin','Logueo como Admin')}}</div>
	</div>
    <div id="linea">
    </div>
</div>
</body>
</html>
@stop
