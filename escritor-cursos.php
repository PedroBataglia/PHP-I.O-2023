<?php


$curso = "\n". 'Design Patters PHP II: Boas práticas de programação';

file_put_contents('cursos-php.txt', $curso, FILE_APPEND);
