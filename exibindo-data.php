<?php

$arquivosCursos = new SplFileObject('cursos.csv');

while(!$arquivosCursos->eof()) {
    $linha = $arquivosCursos->fgetcsv(';');

    echo $linha[0];
}


$data = new DateTime();
$data->setTimestamp($arquivosCursos->getCTime());
echo $data->format('d/m/Y');
