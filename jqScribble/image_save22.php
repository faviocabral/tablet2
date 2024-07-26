<?php

//$data = 'jqScribbleImage.png';
$filename = '100000' . '.png';	//$_POST['OT'] . '.png'; 
$evento   = 1;		//$_POST['EVENTO'];
$asesor   = 'VÍCTOR DENIZ';	///$_POST['asesor'];
$path     = '..\imagenes\ '; 
$path     = rtrim($path," ");
$data     = md5($asesor) . '.png';

/*
	1 - GUARDAR IMAGEN 
	2 - RECUPERAR IMAGEN 
*/


if ($evento == 1 ){ //guardar imagen con el nro de ot
	$imgRes = imagecreatefrompng($data); 
	//imagepng($imgRes, $path);
	if( imagepng($imgRes, $path .  $filename )){
		echo 'se creo correctamente el fichero' . $data ;
	} else {
		echo 'hubo un error al crear el fichero';
	}

}elseif($evento == 2 ){ //recuperar imagen de ot 
	$nombre = $path . $filename;
	if ( file_exists($nombre) ){
		//echo 'existe el fichero';
		echo "<img src='{$nombre}?" . rand() . "' alt='jqScribble Created Image' class='img-responsive' />";
		
	}else {
		echo "<img src='vehiculo2.png?" . rand() . "' alt='jqScribble Created Image' class='img-responsive' />";
		//echo 'no existe el fichero';
	}
}
