<?php
header('Content-Type: text/html; charset=UTF-8');  
//header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); 

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

	$usuario = $_POST['username'];
	$pass    = $_POST['password'];
	//fco se setean los datos 
	
	// Microsoft SQL Server usando SQL Native Client 10.0 ODBC Driver - permite la conexión a SQL 7, 2000, 2005 y 2008
	$sever = "garden";
	$database = "GardenKia";
	$user = "sa";
	$password = "1234567";

	//fco cadena de conexion mas adelante hacer de la forma correcta 
	$conexión = odbc_connect("Driver={SQL Server};Server=192.168.10.3;Database=gardenkia;", $user, $password);

	$consulta = " 
					select top 20 usu_codigo , usu_password
					from control.dbo.usuarios 	--where usu_codigo = '$usuario'
				"; 
		//fco resultado de varios registros en json 
		$rs = odbc_exec( $conexión, $consulta );
		while ( $row = odbc_fetch_array($rs) )
		{
			$valor[] = array_map('utf8_encode', $row );
		}
		echo json_encode($valor);
		//echo '{ "usuario": ' . json_encode($valor) . '}';	//, "\n\n";
	
		//echo '{"records":'.json_encode( $valor, JSON_FORCE_OBJECT ).'}';  //fco esta linea codifica para ser leido como json 
		odbc_close ( $conexion );

	?>