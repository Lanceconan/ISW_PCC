<?php


$sec = trim(strip_tags($_REQUEST['sec']));

switch ($sec) {
    default:
        main();
        break;
}

function main() {
    ?>
    <div style="background-color: red;">
        <h1>FRACASO</h1>
        <p>Autenticación fallida</p>
        <p><a href="login/index.php">Volver</a></p>
    </div>
    <?php
}


?>

