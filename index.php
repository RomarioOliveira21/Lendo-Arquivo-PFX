<?php

$pfx = file_get_contents("./expired_certificate.pfx");
$senha = "associacao";
$certs = [];
if (!openssl_pkcs12_read($pfx, $certs, $senha)) {

    $error = 'ocorreu o seguinte erro: ';
    while ($msg = openssl_error_string()) {
        $error .= "$msg";
    }
    echo $error . '<br>';
}

echo phpversion() . '<br>';
echo OPENSSL_VERSION_TEXT;
