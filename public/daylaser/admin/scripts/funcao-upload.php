<?php

function Redimensionar ($imagem, $name, $largura, $pasta) {
    $img = imagecreatefromjpeg($imagem);
    $x = imagesx ($img);
    $y = imagesy ($img);
    $altura = ($lagura*$y) / $x;
    $nova = imagecreatetruecolor($largura, $altura);
    imagecopyresampled($nova, $img, 0, 0, 0, 0, $largura, $altura, $x, $y);
    imagejpeg($nova, "$pasta/$name");
    imagedestroy ($img);
    imagedestroy ($img);
    return($name);
}
?>