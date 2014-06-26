<?php

function verificar($datos) {
    return trim(strip_tags($datos));
}

function autenticar($rut, $contrasena) {
    $resultado = false;
    $password = hash('sha256', strtoupper($contrasena));
    $url = "https://146.83.181.139/saap-rest/api/autenticar/$rut/$password";

    $opciones = array(
        'http' => array(
            'header' => "Authorization: Basic " . base64_encode("11.111.111-1:745948b275f6212ee233f52679d4ba1ea87b0dac")
        )
    );
    $contexto = stream_context_create($opciones);

    $objeto = json_decode(file_get_contents($url, false, $contexto));
    if (!empty($objeto)) {
        error_log($objeto->mensaje . " rut $rut");
        $resultado = (boolean) $objeto->respuesta;
    }
    return $resultado;
}

?>
