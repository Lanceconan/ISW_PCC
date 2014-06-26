<?php


$sec = trim(strip_tags($_REQUEST['sec']));

switch ($sec) {
    default:
        main();
        break;
}

function main() {
    ?>
    <div style="background-color: green;">
        <h1>ÉXITO</h1>
        <p>Autenticación exitosa</p>
        <p><a href="login/index.php">Volver</a></p>
    </div>
    <?php
}


?>

