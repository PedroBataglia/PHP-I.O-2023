<?php

$arquivo = fopen('cursos-php.txt', 'a');

$curso = "\n". 'Design Patters PHP II: Boas práticas de programação';

fwrite($arquivo, $curso, );
