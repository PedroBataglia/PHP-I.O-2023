<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => 'ph1234pj56'
    ]
]);
echo file_get_contents('zip://arquivo.zip#cursos-php.txt', false, $contexto);
