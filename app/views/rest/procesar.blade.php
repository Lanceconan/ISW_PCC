<?php

require '.rest/rest.blade.php';

$sec = verificar($_POST['sec']);
switch ($sec) {
    case 'login':
        $usuario = verificar($_POST['usuario']);
        $contrasena = verificar($_POST['contrasena']);
        login($rut, $contrasena);
        break;

    default:
        header("Location: login/index.blade.php");
        exit();
        break;
}

function login($rut, $contrasena) {
    $ok = autenticar($rut,$contrasena);
    if ($ok) {
        header("Location: rest/exito.blade.php");
        exit();
    } else {
        header("Location: rest/fracaso.blade.php");
        exit();
    }
}

?>
