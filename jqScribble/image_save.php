<?php
$data = $_POST['imagedata']; 
//$filename = 'jqScribbleImage.png';
$asesor = $_POST['asesor']; 
$filename = md5($asesor) . '.png'; 

//Need to remove the stuff at the beginning of the string 
$data = substr($data, strpos($data, ",")+1); 
$data = base64_decode($data); 
$imgRes = imagecreatefromstring($data); 
header('Content-Type: image/png');
echo 'imagen... '  . $imgRes;
if($imgRes !== false && imagepng($imgRes, $filename) === true) 
    echo "<img src='jqScribble/{$filename}?" . rand() . "' alt='jqScribble Created Image'/>";
