<?php

$novoCursos = trim(fgets(STDIN));

file_put_contents('cursos-php.txt', $novoCursos, FILE_APPEND);
