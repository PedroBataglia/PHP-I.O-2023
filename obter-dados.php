<?php


//$images = scandir(".");
//// var_dump($images);
//foreach($images as $img){
//    if (!in_array($img, array(".", ".."))) {
//        $filename = "images" . DIRECTORY_SEPARATOR . $img;
//        $info = pathinfo($filename);
//        var_dump($info);
//}
//}

$arquivos = scandir('.');
//var_dump($arquivos);
foreach($arquivos as $arquivo) {
    if(!in_array($arquivo, array(".", ".."))) {
        $filename = "PHP IO" . DIRECTORY_SEPARATOR . $arquivo;
        $info = pathinfo($filename);
        var_dump($info);
    }
}
