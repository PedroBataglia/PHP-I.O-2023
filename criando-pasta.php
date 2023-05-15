<?php

$name = 'iamgens';

if(!is_dir($name)) {
    mkdir($name);
    echo "diretório $name criado com sucesso";
} else {
    rmdir($name);
    echo "diretório $name existe e foi removido";
}
