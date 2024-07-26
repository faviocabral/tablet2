<?php  


      	$vCmp=new COM("SAPbobsCOM.company") or die ("No connection"); 
		$vCmp->DbServerType= 10; 
		$vCmp->server = "192.168.10.160"; 

		$vCmp->UseTrusted = "False"; 
		$vCmp->DbUserName = "sa"; 
		$vCmp->DbPassword = "Sqlservices*"; 


		$vCmp->CompanyDB = 'gardenkia'; 

		//$vCmp->username = "tablet"; 
		//$vCmp->password = '1234567'; 

		$vCmp->username = "manager"; 
		$vCmp->password = 'kernel1979'; 

		$vCmp->LicenseServer = "192.168.10.170"; 
		$vCmp->language = 3; //SAPbobsCOM.BoSuppLangs.ln_English; 
		echo "<br> conecto ??? " . $vCmp->Connected . "<br>";  
		
		$lRetCode = $vCmp->Connect; 
		//echo $lRetCode;
		echo "<br> conecto ??? " . $vCmp->Connected . "<br>";  
		 
		//echo $vCmp->CompanyName; echo "<br>"; 
		//echo 'conexion (0 ok): ' . $lRetCode . "<br>"; 
		
		//$vItem = $vCmp->GetBusinessObject(191); 
		//$RetVal = $vItem->GetByKey(39770); 
		//echo $vItem->CustomerName; 
		//$vCmp->Disconnect();

		$vItem = $vCmp->GetBusinessObject(4); 
		$RetVal = $vItem->GetByKey('00005801AA'); 
		echo $vItem->ItemCode; 
		echo "<br>";
		$priceList = $vItem->PriceList;
		$priceList->SetCurrentLine(2);
		echo $priceList->Price ;
		//$vCmp->Disconnect();
		
		echo "<br> conecto ??? " . $vCmp->Connected . "<br>";  
		//echo "<br> datos ??? <br>";
		//com_print_typeinfo($vItem); 
		



	/*	$vCmp=new COM("SAPbobsCOM.company") or die ("No connection");
		echo 'conectado';
		$vCmp->DbServerType= 6; 
		$vCmp->server = "192.168.10.3"; 

		$vCmp->UseTrusted = "False"; 
		$vCmp->DbUserName = "sa"; 
		$vCmp->DbPassword = "1234567"; 

		$vCmp->CompanyDB = "gardenkia"; 
		$vCmp->username = "manager"; 
		$vCmp->password = "kernel1979" ; 

		$vCmp->LicenseServer = "192.168.10.3"; 
		$vCmp->language = 3; //SAPbobsCOM.BoSuppLangs.ln_English; 
		$lRetCode = $vCmp->Connect; 

		//echo $vCmp->CompanyName; echo "<br>"; 
		echo 'conexion (0 ok): ' . $lRetCode . "<br>"; 
		$vItem = $vCmp->GetBusinessObject(33);
		$RetVal = $vItem->GetByKey(2102417); 
		print_r (($vItem));
		echo $vItem->CardCode ; //"Oviedo, Estela Olmedo De"; 
		echo 'este2';
		$vCmp->Disconnect();
		*/
		
		
		/*	//	echo 'iniciando';
		$vCmp=new COM("SAPbobsCOM.company") or die ("No connection");
		//echo 'conectado';
		$vCmp->DbServerType= 6; 
		$vCmp->server = "192.168.10.3"; 

		$vCmp->UseTrusted = "False"; 
		$vCmp->DbUserName = "sa"; 
		$vCmp->DbPassword = "1234567"; 

		$vCmp->CompanyDB = "gardenkia"; 
		$vCmp->username = "manager"; 
		$vCmp->password = "kernel1979" ; 

		$vCmp->LicenseServer = "192.168.10.3"; 
		$vCmp->language = 3; //SAPbobsCOM.BoSuppLangs.ln_English; 
		$lRetCode = $vCmp->Connect; 

		//echo $vCmp->CompanyName; echo "<br>"; 
		echo 'conexion (0 ok): ' . $lRetCode . "<br>"; 
		$vItem = $vCmp->GetBusinessObject(33);
		$RetVal = $vItem->GetByKey(1); 
		echo $vItem->CntctCode ; //"Oviedo, Estela Olmedo De"; 
		$vCmp->Disconnect();*/
/*

		$user = "sa"; 
		$password = "Sqlservices*"; 
		$conexión = odbc_connect("Driver={SQL Server};Server=192.168.10.160;Database=control;", $user, $password);

		$consulta =  " update control.dbo.Campanha set ot = 1 from control.dbo.Campanha where Cod_Camp = 'h46' and  vin = '3D7KS28C67G779056'; 
					   update control.dbo.Campanha set ot = 1 from control.dbo.Campanha where Cod_Camp = 'n62' and  vin = '3D7KS28C67G779056' "; 
		//echo $consulta ;
		
		$rs = odbc_exec( $conexión, $consulta ); 
		if ( !$rs )
		{
			exit( "Error en la consulta SQL" ); 
		}

		$valor = array(); 
		while ( $row = odbc_fetch_array($rs) )
		{
			$valor[] =  array_map('utf8_encode', $row); 
		} 
		echo json_encode( $valor);*/
		
?>