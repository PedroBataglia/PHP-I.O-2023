<?php

$arquivo = fopen('lista-cursos.txt' , 'read');

$tamanhoDoArquivo = filesize('lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;
fclose($arquivo);
