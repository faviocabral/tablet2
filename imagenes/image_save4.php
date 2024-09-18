<?php

$data = 	$_POST['FOTO'];			//'../jqScribble/jqScribbleImage.png'; 
$ot   =     $_POST['OT'];
$filename = $_POST['OT'] . '.png'; 
$evento   = $_POST['EVENTO'];
$path     = 'camara/'; 

//header('Content-Type: image/png');
/*
	1 - GUARDAR IMAGEN 
	2 - RECUPERAR IMAGEN 
*/


if ($evento == 1 ){ //guardar imagen con el nro de ot

	$data = substr($data, strpos($data, ",")+1); 
	$data = base64_decode($data); 
	$imgRes = imagecreatefromstring($data); 

	//imagepng($imgRes, $path);
	if( imagepng($imgRes, $path . $filename )){
		//echo 'se creo correctamente el fichero';
		echo 'ok';
	} else {
		//echo 'hubo un error al crear el fichero';
		echo 'error';
	}

}elseif($evento == 2 ){ //recuperar imagen de ot 

	$list = glob("camara/" . $ot . "*.png");
	$cant = count($list);
	$img = "";
	for ($x = 0; $x < $cant; $x++) {
	    $img = $img . ' <img class="thumb img-thumbnail" onclick="mostrarFoto(this)" style="margin-top:2px; margin-left:2px;" src="imagenes/camara/' . $ot . '_' . $x . '.png"> ';
	} 	
	echo $img;
}elseif($evento == 3 ){ //consultar si tiene imagen  

	$list = glob("camara/" . $ot . "*.png");
	$cant = count($list);
	//if ($cant > 0 ){
		echo $cant ;
	//}

}
