<?php

$diretorioArtual = scandir('.');
//var_dump($diretorioArtual);

foreach($diretorioArtual as $arquivosDiretorio) {
    echo $arquivosDiretorio . PHP_EOL;
}
