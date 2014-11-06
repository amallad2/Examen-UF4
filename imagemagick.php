<?php

/*
* @Author: Gustavo de Basica
*
*/

$image = new Imagick('photo.jpg');
$image->resizeImage(640, 480, imagick::FILTER_LANCZOS, 0.9);
// nou codi
$image = new Imagick('photo2.jpg');

?>
