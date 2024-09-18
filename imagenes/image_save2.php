<?php

//$data = '../jqScribble/jqScribbleImage.png'; 

$data2    = '../vehiculo2.png'; 
$asesor   = $_POST['asesor']; 
$data     = '../jqScribble/' . md5($asesor) . '.png'; 
$filename = $_POST['OT'] . '.png'; 
$evento   = $_POST['EVENTO']; 
$path     = 'imagenes/'; 


/*
	1 - GUARDAR IMAGEN 
	2 - RECUPERAR IMAGEN 
*/

if ($evento == 1 ){ //guardar imagen con el nro de ot
	$imgRes = imagecreatefrompng($data); 
	//imagepng($imgRes, $path); 
	if( imagepng($imgRes, $filename )){
		echo 'se creo correctamente el fichero';
		if(file_exists($filename)){
			//para refrescar su imagen 
			$imgRes = imagecreatefrompng($data2);
			imagepng($imgRes, $data );
		}
		//$imgRes = imagecreatefrompng($data2); 
		//imagepng($imgRes, $data );

	} else {
		echo 'hubo un error al crear el fichero';
	}

}elseif($evento == 2 ){ //recuperar imagen de ot 
	$nombre = $path . $filename;
	if ( file_exists($filename) ){
		//echo 'existe el fichero';
		echo "<img src='{$nombre}?" . rand() . "' alt='jqScribble Created Image' class='img-responsive' />";
		
	}else {
		echo "<img src='vehiculo2.png?" . rand() . "' alt='jqScribble Created Image' class='img-responsive' />";
		//echo 'no existe el fichero';
	}
}
