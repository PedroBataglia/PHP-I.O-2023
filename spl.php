<?php

$arquivosCursos = new SplFileObject('cursos.csv', 'r');

while(!$arquivosCursos->eof()) {
    $linha = $arquivosCursos->fgetcsv(';');

    echo $linha[0];
}
