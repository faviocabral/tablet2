<?php
echo 'entro para crear la imagen....... ';
$data = $_POST['imagedata']; 
//$filename = 'jqScribbleImage.png';
$asesor = $_POST['asesor']; 
$filename = md5($asesor) . '.png'; 

//Need to remove the stuff at the beginning of the string 
$data = substr($data, strpos($data, ",")+1); 
$data = base64_decode($data); 
echo 'llego 1';
$imgRes = imagecreatefromstring($data); 
echo 'llego 2' . $imgRes;
if($imgRes !== false && imagepng($imgRes, $filename) === true) 
    echo "<img src='jqScribble/{$filename}?" . rand() . "' alt='jqScribble Created Image'/>";
