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
	$fecha_i= '20191101';
	$fecha_f= '20191231';

	$consulta = " 
		SELECT DISTINCT 
		isnull( SUCU.NAME ,'SN') SUCURSAL, 
		convert( varchar(100), OT.createdate ,111) FECHA, 
		ISNULL( convert( varchar(100), VE.DOCDATE , 111 ),'') FECHA_FACT, 
		ASESOR.U_NAME ASESOR, 
		OT.CALLID OT, 
		OT.subject as MOTIVO,
		OT.custmrName as CLIENTE,
		CASE WHEN LEN(OT.ITEMCODE) < 10 THEN OT.internalSN ELSE OT.itemCode END VEHICULO, 
		ISNULL( ARTI.ItemName +' - '+ ISNULL(COLO.Name,'') +' - '+ ISNULL( ARTI.BuyUnitMsr , OT.STREET),'')  DESCRIPCION, 
		UPPER( case OT.U_Tipo 
				  when 1 then '1 - Cargo Cliente' 
				  when 2 then '2 - Pre - Entrega' 
				  when 3 then '3 - Garantia' 
				  when 4 then '4 - Rep. Usado vta' 
				  when 5 then '5 - Promocion' 
				  when 6 then '6 - Uso Taller/Garden' 
				  when 7 then '7 - Service en Casa' 
				end ) AS TIPO_SERVICIO,
		REPLACE( REPLACE( REPLACE( TIPO_CALL.Name , '�' , 'o' ), '�' , 'i' ) , '�', 'nh') TIPO_LLAMADA,  
		CASE WHEN OT.STATUS = -3 THEN 'ABIERTO' 
			WHEN OT.STATUS =  2 THEN 'IMPRESO' 
			WHEN OT.STATUS =  3 THEN 'DISTRIBUIDO' 
			WHEN OT.STATUS =  5 THEN 'CONCLUIDO' 
			WHEN OT.STATUS =  1 THEN 'CANCELADO' 
			WHEN OT.STATUS = -1 THEN 'CERRADO' END  ESTADO, 
		CASE WHEN VE.CardCode IS NULL THEN 'NO' ELSE 'SI' END FACTURADO, 
		ISNULL( VE.U_ConceptoFactura , '' ) CONCEPTO, 
		OT.U_kmEntrada KILOMETRAJE,
		ARTI.U_ANHO ANHO_VEHICULO,
		ARTI.U_MODELO MODELO, 
		ARTI.U_MARCA MARCA, 
		ISNULL(COLO.Name,'') COLOR,
		DATEPART(year, OT.CREATEDATE) ANHO, 
		UPPER( DATENAME(month, OT.CREATEDATE)) MES, 
		DATEPART(day, OT.CREATEDATE) DIA, 
		REPLACE ( REPLACE( UPPER( DATENAME(weekday, OT.CREATEDATE)), '�' , 'A'), '�', 'E') DIASEMANA, 
		ISNULL( (select REPLACE( name , '�' , 'NH' ) from OSCP where prblmtypid = ot.problemTyp ), 'NO ASIGNADO') TIPO_PROBLEMA,
		CASE WHEN DOCCUR = 'GS' THEN DOCTOTAL WHEN DOCCUR = 'USD' THEN DOCTOTALFC END TOTAL_FACTURA, 
		DOCCUR MONEDA
		
		FROM OSCL OT WITH(NOLOCK) 
		LEFT OUTER JOIN OINV VE with(nolock) ON OT.DocNum = VE.U_NroInterno AND VE.U_LIIV = 1 
		INNER JOIN OCRD CLIENTE WITH(NOLOCK) ON CLIENTE.CARDCODE = OT.CUSTOMER 
		LEFT OUTER JOIN OSCT TIPO_CALL WITH(NOLOCK) ON OT.callType = TIPO_CALL.callTypeID 
		, OUSR ASESOR WITH(NOLOCK) 
		,[@SUCURSALES] SUCU WITH(NOLOCK) 
		, OITM ARTI WITH(NOLOCK) LEFT OUTER JOIN  [@COLOR] COLO ON ARTI.U_Color  = COLO.Code 
		WHERE OT.ASSIGNEE = ASESOR.USERID 
		AND OT.U_SUCURSAL = SUCU.CODE 
		AND OT.U_SUCURSAL IN ( 'VICTORIA', 'CHOFERES' )
		AND OT.itemCode   = ARTI.ItemCode 
		AND OT.status NOT IN ( 6) 
		AND OT.CREATEDATE >=  CONVERT( VARCHAR(100), CAST( '$fecha_i' AS DATE ), 112)
		AND OT.CREATEDATE <=  CONVERT( VARCHAR(100), CAST( '$fecha_f' AS DATE), 112) 
		ORDER BY 1 ,2 , CASE WHEN LEN(OT.ITEMCODE) < 10 THEN OT.internalSN ELSE OT.itemCode END ";
 
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