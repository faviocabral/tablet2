<?php   
	//fco se setean los datos 
	if( isset($_POST['funcion']) ) {
	  $funcion = $_POST['funcion'];
	} else {
	  die("Solicitud no válida.");
	}

	//$funcion = "NuevoCliente";

		$sucursal = strtolower( $_POST['sucursal'] );
		if(empty($sucursal)){
			$sucursal = 'alider';
		}

		if($sucursal == 'alider'){//fca 
			$basedatos = 'gardenkia';
			$serieDoc  = 718;
			$sucuCod   = 'ALIDER';
		}elseif($sucursal == 'abay-fca' ) {//mpy
            $serieDoc  = 718;
            $sucuCod   = 'AVAY';
		}elseif($sucursal == 'mpy') {//mpy
			$basedatos = 'garden_mpy';
			$serieDoc  = 17;
			$sucuCod   = 'ALIDER';
		}elseif($sucursal == 'abay-mpy') {//mpy
			$basedatos = 'garden_mpy';
			$serieDoc  = 17;
			$sucuCod   = 'AVAY';
		}elseif($sucursal == 'victoria'){//kia la victoria 
			$basedatos = 'gardenkia';
			$serieDoc = 715;
			$sucuCod  = 'VICTORIA';
		}elseif($sucursal == 'abay-kia'){//kia la victoria 
			$basedatos = 'gardenkia';
			$serieDoc = 715;
			$sucuCod  = 'AVAY';
		}elseif($sucursal == 'mra kia'){//kia la victoria 
			$basedatos = 'gardenkia';
			$serieDoc = 715;
			$sucuCod  = 'MRA KIA';
		}elseif($sucursal == 'mra fca'){//MRA FCA 
			$basedatos = 'gardenkia';
			$serieDoc = 718;
			$sucuCod  = 'MRA FCA';
		}elseif($sucursal == 'mra mpy'){//MRA MPY
			$basedatos = 'garden_mpy';
			$serieDoc = 17;
			$sucuCod  = 'MRA MPY';
		}elseif($sucursal == 'choferes'){//kia choferes 
			$basedatos = 'gardenkia';
			$serieDoc = 715;
			$sucuCod  = 'CHOFERES';
		}elseif($sucursal == 'mini-moto'){//kia choferes 
			$basedatos = 'gardenkia';
			$serieDoc = 718;	//734;
			$sucuCod  = 'Mini-moto';
		}elseif($sucursal == 'abay-moto'){//kia choferes 
			$basedatos = 'gardenkia';
			$serieDoc = 718;	//734;
			$sucuCod  = 'AVAY';
		}elseif($sucursal == '016' || $sucursal == 'abay-nissan'){//nissan fdo  
			$basedatos = 'garden_ch';
			$serieDoc = 7;
			$sucuCod  = '016';
		}elseif($sucursal == '003'){//nissan fdo  
			$basedatos = 'garden_ch';
			$serieDoc = 7;
			$sucuCod  = '003';
		}elseif($sucursal == '002'){//nissan fdo  
			$basedatos = 'garden_ch';
			$serieDoc = 7;
			$sucuCod  = '002';
		}elseif($sucursal == '004'){//nissan fdo  
			$basedatos = 'garden_ch';
			$serieDoc = 7;
			$sucuCod  = '004';
		}elseif($sucursal == '005'){//nissan fdo  
			$basedatos = 'garden_ch';
			$serieDoc = 7;
			$sucuCod  = '005';
		}elseif($sucursal == '001'){//nissan fdo  
			$basedatos = 'garden_ch';
			$serieDoc = 7;
			$sucuCod  = '001';
		}elseif($sucursal == 'cde'){//nissan fdo  
			$basedatos = 'gardensa';
			$serieDoc = 4;
			$sucuCod  = 'GARDEN';
		}

	//connectarse al servidor sap para insertar en la base control tabla ot_tablet datos adicionales 
	$user = "sa"; 
	$password = "Sqlservices*"; 
	$conexión = odbc_connect("Driver={SQL Server};Server=192.168.10.160;Database=$basedatos;", $user, $password); 

	if($funcion == 'NuevaOrden')
	{

		if( isset($_POST['data']) ) { 
		  $datos = $_POST['data']; 
		} else { 
		  die("Solicitud no válida."); 
		} 

		$array = array(); 
		parse_str($datos, $array); 
		//print_r($array); 
		$callid = $_POST['ot'];

			$Accesorios  = $array['Observacion']; 
			$Observacion = $array['Observacion2']; 
			$Combustible = $array['Combustible']; 
			$DetalleVehiculo = $array['DetalleVehiculo']; 
			//$DetalleVehiculo = ''; 
			$NombreAsesor = $array['NombreAsesor']; 
			$IpCliente = $array['IpCliente']; 
			$contactoCliente = $array['contacto_cliente']; 
			$contactoEmail = $array['contacto_email']; 
			$costoServicio = $array['costoServicio']; //empty($array['costoServicio']) ? $array['costoServicio'] : NULL ; 
			$lavado = $array['lavado']; 
			$fechaPrometida = str_replace("-","", $array['FechaPrometida'] ); 

			//para la campaña... 
			if($array['TipoLlamada'] == '7' ){
				if(isset($array['listadoCampanhas'])){
					$query = "";
					$listado = json_decode($array['listadoCampanhas']);
					for ($x = 0; $x < count($listado); $x++) {
						$codigo = $listado[$x]->cod;
						$vin = $listado[$x]->vin;
						$marca = strtolower( $listado[$x]->marca);
						if($marca == 'fca'){
							$estado = 'REPAIRED';
						}else {
							$estado = 'COMPLETED';
						}
						$query = $query . " update control.dbo.campanha set ot = $callid , status = '$estado' where cod_camp = '$codigo' and vin = '$vin'; \n ";
					  } 
					odbc_exec( $conexión, $query ); 
				}
			}

			$consulta = "insert into control.dbo.ot_tablet (Ot , Observaciones , Detalle_vehiculo, Accesorios, Combustible , usuario , ip_tablet , sucursal , contacto_cliente , fecha_promesa , email, lavado, costoServicio) values ($callid, '$Observacion', '$DetalleVehiculo', '$Accesorios', '$Combustible' , '$NombreAsesor' , '$IpCliente', upper( '$sucursal' ) , '$contactoCliente' , '$fechaPrometida', '$contactoEmail' , upper('$lavado') , '$costoServicio'  )"; 
			odbc_exec( $conexión, $consulta ); 
		    echo $callid; 


	} elseif($funcion == 'ModificarOrden'){ 

		if( isset($_POST['data']) ) { 
		  $datos = $_POST['data']; 
		} else { 
		  die("Solicitud no válida."); 
		} 

		$array = array(); 
		parse_str($datos, $array); 
		//print_r($array);
		
		//echo '<br>' . $array['CodigoCliente'];

		$vCmp=new COM("SAPbobsCOM.company") or die ("No connection"); 
		$vCmp->DbServerType= 10; 
		$vCmp->server = "192.168.10.160"; 

		$vCmp->UseTrusted = "False"; 
		$vCmp->DbUserName = "sa"; 
		$vCmp->DbPassword = "Sqlservices*"; 

		$vCmp->CompanyDB = $basedatos; 
		$vCmp->username = "tablet"; 
		$vCmp->password = "1234567"; 

		$vCmp->LicenseServer = "192.168.10.170"; 
		$vCmp->language = 3; //SAPbobsCOM.BoSuppLangs.ln_English; 
		$lRetCode = $vCmp->Connect; 

		//echo $vCmp->CompanyName; echo "<br>"; 
		//echo 'conexion (0 ok): ' . $lRetCode . "<br>"; 
		$vItem = $vCmp->GetBusinessObject(191); 
 		$RetVal = $vItem->GetByKey( $array['NroLlamada'] ); 
		$vItem->Subject         = $array['Motivo'];	//"VERIFICAR PRUEBA"; 
		$vItem->CallType        = $array['TipoLlamada']; //"3"; 
		$vItem->Description     = $array['PedidoCliente']; //""; //es el pedido del cliente 
		$vItem->UserFields->Fields->Item("U_Tipo")->Value   = $array['TipoServicio']; //"1500"; 
		$retorno = $vItem->Update; 

		$ot = $array['NroLlamada'];
		$Combustible = $array['Combustible']; 
		$fechaPrometida = str_replace("-","", $array['FechaPrometida'] );

		$consulta = "update control.dbo.ot_tablet set Combustible = $Combustible , fecha_promesa = '$fechaPrometida' where ot = $ot "; 
		$rs = odbc_exec( $conexión, $consulta );


		if ($retorno==0) { 
			//desconecta del sap 
			//$vCmp->Disconnect();
		
		    echo $array['NroLlamada']; 	//. ' ' . $fechaPrometida; 
		} else { 
			//$vCmp->Disconnect();
		    echo '<p>Mensaje de Error: </>' . $vCmp->GetLastErrorDescription() . '<br /> '; 
		} 

	} elseif($funcion == 'NuevoCliente'){

		if( isset($_POST['data']) || isset($_POST['chassis']) || isset($_POST['NroSerie']) || isset($_POST['vehiculo']) ) {
		  $datos = $_POST['data']; 
		  $chassis = $_POST['chassis']; 
		  $NroSerie = $_POST['NroSerie']; 
		  $vehiculo = $_POST['vehiculo']; 
		} else {
		  die("Solicitud no válida."); 
		}
/*
		$datos = "Nombre=Lucas+Valinotti&Ruc=3216544&Telefono1=0981123123&Direccion=San+Cosmo+Nro+1023";
		$chassis = "VN-8AGCN48X0ER134422";
		$NroSerie= "8AGCN48X0ER134422-0";
		$vehiculo= "AGILE LTZ FLEX 1.4";
*/
		$array = array(); 
		parse_str($datos, $array); 
		//print_r($array);
		//echo '<br>' . $chassis;
		//echo '<br>' . $NroSerie;
		//echo '<br>' . $vehiculo;
		$CodigoCliente = $array['Codigo'];
		if ($CodigoCliente == ''){//si es nuevo cliente agregar sino asesigar 

			//insertar cliente
			$vCmp=new COM("SAPbobsCOM.company") or die ("No connection"); 
			$vCmp->DbServerType= 10; 
			$vCmp->server = "192.168.10.160"; 

			$vCmp->UseTrusted = "False"; 
			$vCmp->DbUserName = "sa"; 
			$vCmp->DbPassword = "Sqlservices*"; 

			$vCmp->CompanyDB = $basedatos; 
			$vCmp->username = "tablet"; 
			$vCmp->password = "1234567"; 

			$vCmp->LicenseServer = "192.168.10.170"; 
			$vCmp->language = 3; //SAPbobsCOM.BoSuppLangs.ln_English; 
			$lRetCode = $vCmp->Connect; // para clientes 
			
			$vItem = $vCmp->GetBusinessObject(2); 

			$vItem->CardCode = 'C' . $array['Ruc']; 
			$vItem->CardName = $array['Nombre']; 
			//$vItem->CardType = "C"; es automatico
		    $vItem->FederalTaxID = $array['Ruc']; 

		    $vItem->Phone1 = $array['Telefono1']; 
	        $vItem->Phone2 = "";
	        $vItem->Cellular = "";
			$vItem->EmailAddress = $array['Correo']; 
		    $vItem->Address = $array['Direccion']; 
	        //$vItem->UserFields->Fields->Item("U_TipoEmpresa")->Value = "FI"; 
	        //$vItem->UserFields->Fields->Item("U_SnTipo")->Value = "1"; 
	        //$vItem->CommissionGroupCode = "0"; //grupo de clientes 
	        //$vItem->Currency  = "##"; //monedas todas 
	        if ( $sucursal == 'mpy'){
		        //$vItem->Territory = ""; //central 

	        }else{
		        $vItem->Territory = "2"; //central 
	        }
	        $vItem->AdditionalID = "CC"; 

			$retorno = $vItem->Add; 

			if ($retorno==0) { 
			
			    $cliente = ""; 
			    $vCmp->GetNewObjectCode($cliente); 
			    echo $cliente; 

			} else { 
				//$vCmp->Disconnect();
			    echo 'Mensaje de Error: ' . $vCmp->GetLastErrorDescription() . ' '; 
			    return ;
			} 
			//fin insertar cliente 
		}	


		//parte del codigo de tarjeta de vhiculo 
		$vCmp2=new COM("SAPbobsCOM.company") or die ("No connection"); 
		$vCmp2->DbServerType= 10; 
		$vCmp2->server = "192.168.10.160"; 

		$vCmp2->UseTrusted = "False"; 
		$vCmp2->DbUserName = "sa"; 
		$vCmp2->DbPassword = "Sqlservices*"; 

		$vCmp2->CompanyDB = $basedatos; 
		$vCmp2->username = "tablet"; 
		$vCmp2->password = "1234567"; 

		$vCmp2->LicenseServer = "192.168.10.170"; 
		$vCmp2->language = 3; //SAPbobsCOM.BoSuppLangs.ln_English; 
		$lRetCode2 = $vCmp2->Connect; //para tarjeta cliente.

		$vItem2 = $vCmp2->GetBusinessObject(176); 
		if ($CodigoCliente == ''){
		    $vItem2->CustomerCode = 'C' . $array['Ruc']; 
		}else {
		    $vItem2->CustomerCode = $CodigoCliente; 
		}
		$vItem2->CustomerName = $array['Nombre']; 
		$vItem2->ItemCode     = $chassis; 
		$vItem2->ManufacturerSerialNum =substr( $NroSerie, 0, 16); 
		$vItem2->InternalSerialNum  = $NroSerie; 
		$vItem2->ItemDescription    = $vehiculo; 
		$vItem2->StatusOfSerialNumber  = "0"; 

		$retorno = $vItem2->Add; 

		if ($retorno==0) { 
		
		    $tarjeta = ""; 
		    $vCmp2->GetNewObjectCode($tarjeta); 
			if ($CodigoCliente == ''){
			    //echo $tarjeta; 
			}else {
				echo $CodigoCliente; 
			}

		} else { 
			//$vCmp2->Disconnect();
		    echo 'Mensaje de Error: ' . $vCmp2->GetLastErrorDescription() . ' '; 
		} 
	}	

?>