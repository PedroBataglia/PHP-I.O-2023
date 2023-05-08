<?php

$arquivo = fopen('lista-cursos.txt' , 'read');

while(!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso;
}

fclose($arquivo);
