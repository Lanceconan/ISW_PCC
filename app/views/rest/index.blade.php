<?php
$sec = trim(strip_tags($_REQUEST['sec']));

switch ($sec) {
    default:
        main();
        break;
}

function main() {
    ?>
    <div>
        <h1>Autenticación DIRDOC</h1>
        <form action="procesar.php" method="post">
            <input type="hidden" name="sec" value="login" />
            <fieldset>
                <legend>Información Personal:</legend>
                Rut: <input id="rut" name="rut" type="text" size="30" required="true" />
                <br />
                Contraseña: <input id="contrasena" name="contrasena" type="password" size="30" required="true" />
                <br />
            </fieldset>
            <input type="submit" value="Enviar" />
        </form>        
    </div>
    <?php
}


?>

