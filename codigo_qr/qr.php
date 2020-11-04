<?php 
require 'phpqrcode/qrlib.php';

$dir = 'temp/';

if(!file_exists($dir))
	mkdir($dir);

$filename = $dir.'test.png';

$tamanio = 10;
$level = 'H';
$frameSize = 5;
$contenido = ' Exitoso';

QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);

echo '<img src="'.$filename.'"/>';
 ?>