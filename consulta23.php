<?php
header('Content-Type: text/html; charset=UTF-8');  

 
	// Microsoft SQL Server usando SQL Native Client 10.0 ODBC Driver - permite la conexión a SQL 7, 2000, 2005 y 2008
	$user = "sa";
	$password = "Sqlservices*";

	$sucursal = 'alider';

	//fco cadena de conexion mas adelante hacer de la forma correcta 
	if ($sucursal == 'alider' || $sucursal == 'victoria'  || $sucursal == 'choferes' || $sucursal == 'mini-moto' ){
		$conexión = odbc_connect("Driver={SQL Server};Server=192.168.10.160;Database=gardenkia_prueba;", $user, $password);
	}elseif ($sucursal == 'mpy'){
		$conexión = odbc_connect("Driver={SQL Server};Server=192.168.10.160;Database=garden_mpy;", $user, $password);
	}elseif ( $sucursal == $sucursal){//nissan
		$conexión = odbc_connect("Driver={SQL Server};Server=192.168.10.160;Database=garden_ch;", $user, $password);

	}
	//$conexión = odbc_connect("Driver={SQL Server};Server=192.168.10.3;Database=gardenkia;", $user, $password);
	
	//$ Conn = new PDO ("odbc: Driver = {SQL Server}; Server = JAMILI-PC \ SQLEXPRESS; null; null");

	//$funcion = 'ConsultarCliente2';

		  //$Chassis = 'KNAPH81BBG5130034';



		if($sucursal == 'alider'  || $sucursal == 'mra fca'){
			$consulta = "select USERID Codigo, upper( U_NAME) Asesor from OUSR with(nolock) where Department = 18 and Branch = 1 ";
		}elseif($sucursal == 'mpy'  || $sucursal == 'mra mpy'){
			$consulta = "select USERID Codigo, upper( U_NAME) Asesor from OUSR with(nolock) where Department = 1 and Branch = 1 ";
		}elseif($sucursal == 'victoria' || $sucursal == 'mra kia'){
			$consulta = "select USERID Codigo, upper( U_NAME) Asesor from OUSR with(nolock) where Department = 18 and Branch = 9 ";
		}elseif($sucursal == 'choferes'){
			$consulta = "select USERID Codigo, upper( U_NAME) Asesor from OUSR with(nolock) where Department = 18 and Branch = 15 ";
		}elseif($sucursal == 'mini-moto'){
			$consulta = "select USERID Codigo, upper( U_NAME) Asesor from OUSR with(nolock) where Department = 18 and Branch = 3 ";
		}elseif($sucursal == '001' || $sucursal == '002' || $sucursal == '003' || $sucursal == '004' || $sucursal == '005'  ){
			$consulta = "select USERID Codigo, upper( U_NAME) Asesor from OUSR with(nolock) where Department = 1 and Branch in (1, 2, 3 , 4)  ";
		}elseif($sucursal == 'cde' ){
			$consulta = "select USERID Codigo, upper( U_NAME) Asesor from OUSR with(nolock) where Department = 1 and Branch in (-2)  ";
		}


		// mpy $consulta = "select USERID Codigo, upper( U_NAME) Asesor from OUSR where Department = 1 and Branch = 1 ";
		// kia $consulta = "select USERID Codigo, upper( U_NAME) Asesor from OUSR where Department = 18 and Branch = 9 ";
		// moto $consulta = "select USERID Codigo, upper( U_NAME) Asesor from OUSR where Department = 18 and Branch = 3 ";
		// missan $consulta = "select USERID Codigo, upper( U_NAME) Asesor from OUSR where Department = 1 and Branch = 2 ";


		//fco resultado de varios registros en json
		$rs = odbc_exec( $conexión, $consulta );
		$valor = array();
		while ( $row = odbc_fetch_array($rs) )
		{
			$valor[] = array_map('utf8_encode', $row );
		}	
		echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 
		////odbc_close ( $conexion );

?>