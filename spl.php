<?php

$arquivosCursos = new SplFileObject('cursos.csv');

while(!$arquivosCursos->eof()) {
    $linha = $arquivosCursos->fgetcsv(';');

    echo utf8_encode($linha[0]).PHP_EOL;
}

$date = new DateTime();
$date->setTimestamp($arquivosCursos->getCTime());
$date->format('d/m/Y');
