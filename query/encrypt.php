<?php

function encrypt($plaintext, $key)
{
    $key = hash('sha256', $key, true);
    $iv = openssl_random_pseudo_bytes(16);
    $ciphertext = openssl_encrypt($plaintext, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
    // Ubah base64 menjadi base64url
    $base64 = base64_encode($iv . $ciphertext);
    $base64url = strtr($base64, '+/', '-_');

    return $base64url;
}
function decrypt($ciphertext, $key)
{
    $key = hash('sha256', $key, true);
    // Ubah base64url menjadi base64
    $base64 = strtr($ciphertext, '-_', '+/');
    $ciphertext = base64_decode($base64);
    $iv = substr($ciphertext, 0, 16);
    $ciphertext = substr($ciphertext, 16);
    return openssl_decrypt($ciphertext, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
}

$key = "whyyy-project";
?>