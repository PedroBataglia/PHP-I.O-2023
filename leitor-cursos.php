<?php

$cursos = file_get_contents('lista-cursos.txt');

$cursoArray = file('lista-cursos.txt');

var_dump($cursoArray);
