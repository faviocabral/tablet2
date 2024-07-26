<?php

$data = $_POST['imagedata']; 
$filename = $_POST['Nombre'] . '.png'; 
//$filename = 'combustible.png'; 
$path     = '..\imagenes\ '; 
//Need to remove the stuff at the beginning of the string 
$data = substr($data, strpos($data, ",")+1); 
$data = base64_decode($data); 
$imgRes = imagecreatefromstring($data); 

if($imgRes !== false && imagepng($imgRes, '..\imagenes\C' . $filename ) === true) 
	echo "ok !"; 
    //echo "<img src='jqScribble/{$filename}?" . rand() . "' alt='jqScribble Created Image'/>"; 
