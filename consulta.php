<?php
header('Content-Type: text/html; charset=UTF-8');  
$env = parse_ini_file('.env');

	//fco se setean los datos 
	if( isset($_POST['funcion']) ) {
	  $funcion = $_POST['funcion'];
	} else {
	  die("Solicitud no válida." ); 
	}


	// Microsoft SQL Server usando SQL Native Client 10.0 ODBC Driver - permite la conexión a SQL 7, 2000, 2005 y 2008
	$user = "";
	$password = "";

	$sucursal = strtolower( $_POST['sucursal'] );
	if(empty($sucursal)){
		$sucursal = 'alider';
	}
	$dbhost = 'localhost';
	$dbcontrasena = $env["DB_PASSWORD"];
	$dbusuario = $env["DB_USER"];
	$db = $env["DB"];
	$dbpuerto = $env["DB_PORT"];
	$conexión = pg_connect("host=$dbhost port=$dbpuerto password=$dbcontrasena user=$dbusuario dbname=$db") or die( 'No se pudo conectar'.$con);

	$db2 = $env["DB2"];

	$conexión2 = pg_connect("host=$dbhost port=$dbpuerto password=$dbcontrasena user=$dbusuario dbname=$db2") or die( 'No se pudo conectar'.$con);
	
	if($funcion == 'ConsultarOt')
	{
		if( isset($_POST['NroOt']) ) {
		  $NroOt = $_POST['NroOt'];
		} else {
		  die("Solicitud no válida.");
		}
		
		//fco en esta consulta los campos deben ser iguales a las del form para que se pueda automatizar . 
		$consulta = "
					SELECT 
							callid  NroOt
						, callID NroOt2
						, callID NroLlamada
						, DocNum NroDocumento
						, createDate FechaApertura 
						, '' FechaCierre 
						, '' FechaVenta
						, status OtEstado 
						, customer CodigoCliente 
						, custmrName NombreCliente 
						, '' Direccion
						, ''  Telefono
						, itemCode Chassis 
						, '' NroSerie 
						, manufSN NroSerie2 
						, itemName Vehiculo 
						, Street Chapa 
						, Room Identificador 
						, U_KmEntrada Kilometraje 
						, U_KmSalida KilometrajeSalida 
						, U_Tipo TipoServicio 
						, callType TipoLlamada  
						,subject Motivo 
						,descrption PedidoCliente 
						,COALESCE(resolution, '') Observacion
						,'' Color
						,''Marca 
						, itemName Modelo
						,'' Modelo2
						,nombreasesor Asesor
						,nombreasesor Asesor2, 
						COALESCE( Observaciones, '') Observaciones, 
						COALESCE( Detalle_vehiculo, '') as DetalleVehiculo , 
						'' Accesorios, 
						COALESCE( Combustible, 0) Combustible, 
						COALESCE( contacto_cliente, '') as contacto_cliente, 
						'' FechaPrometida, 
						t1.sucursal sucursal ,
						t1.campanha campanha , 
						'' contacto_email , 
						t1.lavado,
						t1.costoServicio
					FROM OSCL left outer join ot_tablet T1 on OSCL.callID = t1.ot 
					WHERE ( callID = $NroOt ) 
				";
			$rs = pg_query( $conexión, $consulta );
			if ( !$rs )
			{
				exit( "Error en la consulta SQL" );
			}
			//fco resultado de varios registros en json 
			while ( $row = pg_fetch_array($rs) )
			{
				$valor[] = $row;
			}	
			echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 


	} elseif ($funcion == 'insertarCliente') {
		$nombre = $_POST["Nombre"];
		$telefono = $_POST["Telefono"];
		$email = $_POST["Email"];
		$vehiculo = $_POST["Vehiculo"];

		$consulta = "insert into control.dbo.marketingClientes (nombre , telefono , email, vehiculo ) values ('$nombre', '$telefono', '$email', '$vehiculo' )"; 
		$rs = odbc_exec( $conexión, $consulta ); 
		//odbc_close ( $conexion );

	} elseif ($funcion == 'ConsultarCliente') {

		if( isset($_POST['CodigoCliente']) ) {
		  $CodigoCliente = $_POST['CodigoCliente'];
		} else {
		  die("Solicitud no válida.");
		}
		
		$consulta = 
				"
					select 
						'' as customer2 
						, '' as customer 
						, '' as custmrName 
						, pro_chassis vin
						,pro_codigo as itemCode 
						, pro_descripcion_local as itemName 
						, pro_chapa_definitiva chapa
					from productos
					where rub_codigo = 5
					and pro_chassis like '%$CodigoCliente%'
				";

		$rs = pg_query( $conexión2, $consulta );
		if ( !$rs )
		{
			exit( "Error en la consulta SQL" );
		}
		//fco resultado de varios registros en json 
		while ( $row = pg_fetch_array($rs) )
		{
			$valor[] = $row;
		}	
		echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 

	} elseif ($funcion == 'ConsultarCliente2') {

		if( isset($_POST['CodigoCliente']) ) {
		  $CodigoCliente = $_POST['CodigoCliente'];
		} else {
		  die("Solicitud no válida.");
		}
		
		$consulta = 
				"
					select 
					cli_codigo codigo , 
					cli_nombres nombre , 
					cli_telefono telefono, 
					cli_ruc documento
					from clientes
					where lower(cli_nombres) like lower('%$CodigoCliente%') or cli_ruc like '%$CodigoCliente%'
				";

		$rs = pg_query( $conexión2, $consulta );
		if ( !$rs )
		{
			exit( "Error en la consulta SQL" );
		}
		//fco resultado de varios registros en json 
		while ( $row = pg_fetch_array($rs) )
		{
			$valor[] = $row;
		}	
		echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 


	} elseif($funcion == 'insertarOrden'){

		if( isset($_POST['datos']) ) {
			$datos = $_POST['datos'];
		  } else {
			die("Solicitud no válida.");
		  }
		  $array = array(); 
		  parse_str($datos, $array); 
		  //echo json_encode($array);

		  $customer = $array['CodigoCliente'];
		  $customerName = $array['NombreCliente'];
		  $itemCode = $array['Chassis'];
		  $itemName = $array['vehiculo'];
		  $street = $array['Chapa'];
		  $status = $array['OtEstado'];
		  $assignee = $array['Asesor'];
		  $nombreAsesor = $array['NombreAsesor'];
		  $u_kmEntrada = $array['Kilometraje'];
		  $u_tipo = $array['TipoServicio'];
		  $callType = $array['TipoLlamada'];
		  $description = $array['PedidoCliente'];
		  $subject = $array['Motivo'];
		  $room = $array['Identificador'];
			
		  $consulta = 
				  "
				  insert into oscl ( docnum , customer , custmrname , itemcode , itemname, street, status, assignee, u_kmentrada, u_tipo, calltype , descrption , subject, room, nombreasesor )
				  values (0, '$customer' , '$customerName' , '$itemCode' , '$itemName' , '$street', '$status', '$assignee', '$u_kmEntrada', '$u_tipo', '$callType', '$description', '$subject', '$room', '$nombreAsesor');

				  select * from oscl order by callid desc limit 1 ;

				  ";
  
		  $rs = pg_query( $conexión, $consulta );
		  if ( !$rs )
		  {
			  exit( "Error en la consulta SQL" );
		  }
		  //fco resultado de varios registros en json 
		  while ( $row = pg_fetch_array($rs) )
		  {
			  $valor[] = $row;
		  }
		  $datos = 	json_encode( $valor );
		  echo $datos[0];
		  return ;

		  $consulta2 = 
		  "
		  insert into orden_trabajo (
			ot_numero, -- NroLlamada
			ot_fecha, -- 
			ot_fecha_cierre, -- 
			ot_estado,  --1 
			to_codigo,  -- tipoServicio 1->cargo cliente 2->pre-entrega 3->garantia 
			loc_codigo, -- 1 central (sucursal) 
			cli_codigo, -- codigoCliente ->ruc 
			tp_codigo,  -- 'REPARACION'
			ts_codigo,  -- 1 -- tipo de servicio 
			os_codigo,  -- 2 -- origen servicio 
			ot_pedido,  -- Motivo 
			ot_resolucion, -- ''
			fun_codigo_creador, --0 --Asesor 
			fun_codigo_modificador, --0
			fec_creacion, --''
			fec_modificacion, --''
			fun_asesor, --0 -- Asesor
			fun_probador, --0
			ot_km_entrada, -- Kilometraje
			ot_km_salida, -- 0
			ot_chapa, -- Chapa
			ot_chassis, -- Chassis
			pro_codigo, -- Chassis
			tiene_licitacion, -- ''
			ot_comentario_licitacion, --'' 
			cli_lleva_rep_viejo, --''
			ot_indicador_combustible --0
		  )
		 
		  values (
			$datos[0]['callid'],
			now(), --fecha 
			null,  --ot_fecha_cierre 
			1, --ot_estado 
			$u_tipo, --to_codigo,  --> tipoServicio 1->cargo cliente 2->pre-entrega 3->garantia 
			1, --loc_codigo, -- 1 central (sucursal) 
			$customer, --cli_codigo, -- codigoCliente ->ruc 
			'REPARACION', ---tp_codigo,  -- 'REPARACION'
			1, --ts_codigo,  -- 1 -- tipo de servicio 
			2, --os_codigo,  -- 2 -- origen servicio 
			'$subject', --ot_pedido,  -- Motivo 
			'', --ot_resolucion, -- ''
			$assignee, --fun_codigo_creador, --0 --Asesor 
			0, --fun_codigo_modificador, --0
			now(), --fec_creacion, --''
			null, --fec_modificacion, --''
			$assignee, --fun_asesor, --0 -- Asesor
			0, --fun_probador, --0
			$u_kmEntrada, --ot_km_entrada, -- Kilometraje
			0, --ot_km_salida, -- 0
			'$street', --ot_chapa, -- Chapa
			'$itemCode', --ot_chassis, -- Chassis
			'$itemCode', --pro_codigo, -- Chassis
			'', --tiene_licitacion, -- ''
			'', --ot_comentario_licitacion, --'' 
			'', --cli_lleva_rep_viejo, --''
			0, --ot_indicador_combustible --0
			);
		";
		//echo $consulta2;

		$rs = pg_query( $conexión2, $consulta2 );
		if ( !$rs )
		{
			exit( "Error en la consulta SQL" );
		}

		//echo $datos; //fco esta linea codifica para ser leido como json 


	} elseif($funcion == 'ConsultarTurnos'){
		//fco para consultar turnos 
		//conexion directa //esto hay que llevar a una libreria para mas adelante... y hacer el include... 

		$filtro = "";
		$consulta = 
			"
				SELECT 
					 CAST( date_part('hour', hora ) AS VARCHAR(100)) || CAST( date_part('minute', hora ) AS VARCHAR(100)) hora  , 	
					'<div class=''panel-heading '' data-toggle=''collapse'' href=''.' || cast(id_ficha as varchar(100)) || '''>'|| 
						'<span class=''glyphicon glyphicon-user ' || CASE WHEN ESTADO = '2' THEN 'text-success' WHEN ESTADO = '1' AND ESTADO_ATENCION = 2 THEN 'text-amarillo' WHEN ESTADO = '1' THEN 'text-rojo' END || ' '' id=''tnombre_' || cast(id_ficha as varchar(100)) || '''> ' || upper(nombre) || '</span>' ||
					'</div>' ||
					'<div class=''panel-collapse collapse list-group-item-info ' || cast(id_ficha as varchar(100)) || '''>'||
						'<div class=''panel-body text-justify''>'||
							'<span class=''glyphicon glyphicon-th-list''></span>&nbsp;&nbsp;<span>' || upper(servicio) || '</span><span class=''glyphicon glyphicon-save pull-right'' onclick=''CopiarDatos('  || cast(id_ficha as varchar(100)) || ')'' ></span>' ||  '<br><br><span>' || upper( comentario) ||  '</span>' ||
						'</div>'||
						'<div class=''btn-group btn-group-justified''>'||
							'<a href=''#'' class=''btn btn-success ' || CASE ESTADO WHEN '2' THEN 'disabled' ELSE '' END || ' ''  onclick=''SetTurnos(' || CASE ESTADO WHEN '2' THEN '-1' ELSE cast(id_ficha as varchar(100)) END || ')  ''>Atender</a>'||
							'<a href=''#'' class=''btn btn-warning ' || CASE WHEN ESTADO = '1' AND ESTADO_ATENCION = 2 THEN 'disabled' WHEN ESTADO = '2' THEN 'disabled' ELSE '' END || ' '' onclick=''SetTurnosContactar(' || CASE ESTADO WHEN '2' THEN '-1' ELSE cast(id_ficha as varchar(100)) END || ')  '' >Contactar</a>'||
							'<a href=''#'' class=''btn btn-danger ' || CASE ESTADO WHEN '1' THEN 'disabled'  WHEN '2' THEN 'disabled' ELSE '' END || ' ''>Espera</a>'||
						'</div>'||
					'</div>' html 
				FROM public.fichas 
				WHERE fecha = current_date "
			 . $filtro .  
			"	AND estado <> '0' 
				AND length(trim(nombre))>3 
				ORDER BY 1 
			";
		$rs = pg_query($conexión, $consulta);
		if ( !$rs )
		{
			exit( "Error en la consulta SQL" );
		}
		$valor = array();
		$valor = pg_fetch_all($rs);
		/*
		while ( $row = pg_fetch_array($rs) )
		{
			$valor[] = $row;
		}	
		*/
		echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 
		pg_close($con);
	
	} elseif($funcion == 'SetTurnos') {

		if( isset($_POST['turno']) ) {
		  $codigo = $_POST['turno'];
		} else {
		  die("Solicitud no válida.");
		}
		
		$consulta = "UPDATE public.fichas SET ESTADO_ATENCION = 3, ESTADO = '2' WHERE ID_FICHA =  $codigo" ; // LLAMADO";
		$rs = pg_query($conexión, $consulta);
		if ( !$rs )
		{
			echo "Error en la actualizacion";
		}else{
			echo "Exito en la actualizacion";
		}
		pg_close($conexión);

	} elseif($funcion == 'SetTurnosContactar') {

		if( isset($_POST['turno']) ) {
		  $codigo = $_POST['turno'];
		} else {
		  die("Solicitud no válida.");
		}
	
		
		$consulta = "UPDATE public.fichas SET ESTADO_ATENCION = 2 WHERE ID_FICHA =  $codigo" ; // LLAMADO";
		$rs = pg_query($conexión, $consulta);
		if ( !$rs )
		{
			echo "Error en la actualizacion";
		}else{
			echo "Exito en la actualizacion";
		}
		pg_close($conexión);


	} elseif($funcion == 'AsignarCliente') {

		if( isset($_POST['Chassis']) || isset($_POST['Cliente']) ) {
		  $Chassis = $_POST['Chassis'];
		  $Cliente = $_POST['Cliente'];
		} else {
		  die("Solicitud no válida.");
		}
		
		//fco en esta consulta los campos deben ser iguales a las del form para que se pueda automatizar . 
		$consulta = "	
					select 
						customer CodigoCliente 
						,custmrName NombreCliente 
						, t3.itemCode Chassis 
						, internalSN NroSerie 
						, manufSN NroSerie2 
						, t3.itemName Vehiculo 
						, CASE WHEN LEN( t2.Cellular)>=6 THEN T2.Cellular WHEN LEN(T2.Phone2)>=6 THEN T2.Phone2 WHEN LEN(T2.Phone1)>=6 THEN T2.Phone1 ELSE '' END Telefono 
						, isnull( t3.BuyUnitMsr , t3.SuppCatNum) Chapa 
						--, T4.Name Identificador 
						, (select top 1 cast( v.DocDate as date)  
							from  OINV v with(nolock) , INV1 d with(nolock) 
							where v.DocEntry = d.DocEntry 
							---and v.cardname not like '%garden%' 
							and	d.ItemCode = t3.itemCode ORDER BY V.DOCDATE ASC ) FechaVenta 
					from OINS with(nolock)
							left outer join OCRD T2 with(nolock) on oins.customer = t2.CardCode 
							left outer join OITM T3 with(nolock) on oins.itemCode = t3.ItemCode 
							left outer join [@COLOR] T4 with(nolock) on T4.Code = T3.U_Color 
					where internalSN = '$Chassis' and customer = '$Cliente'
				";
				
		$rs = odbc_exec( $conexión, $consulta );
		if ( !$rs )
		{
			exit( "Error en la consulta SQL" );
		}

		$valor = array();
		while ( $row = odbc_fetch_array($rs) )
		{
			$valor[] = array_map('utf8_encode',$row);
		}	

		echo json_encode( $valor ); //fco esta linea codifica para ser leido como json solo una linea
		//odbc_close ( $conexion ); 
	
	} elseif ($funcion == 'ConsultarColor') {
		
		if( isset($_POST['Color']) ) {
		  $Color = $_POST['Color'];
		} else {
		  die("Solicitud no válida.");
		}
			$rs = odbc_exec( $conexión, $consulta );
		if ( !$rs )
		{
			exit( "Error en la consulta SQL" );
		}
		$consulta = "
					select '<a href=''#'' ' 
							+ 'id=''' +name+ ''' class=''list-group-item' 
							+ CASE WHEN ROW_NUMBER() OVER(ORDER BY NAME ) % 2 =0 THEN ' list-group-item-info' ELSE '' END  
							+ '''onclick=''AsignarColor(this)''>'
							+ name +'</a>' html  
					from [@COLOR]  
					WHERE Name like '%$Color%'
				";
		
		//fco resultado de varios registros en json 
		$rs = odbc_exec( $conexión, $consulta );
		$valor = array();
		while ( $row = odbc_fetch_array($rs) )
		{
			$valor[] = $row;
		}	
		echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 
		//odbc_close ( $conexion );

	} elseif ($funcion == 'ConsultarClienteVehiculo') {
		if( isset($_POST['cliente']) || isset($_POST['vehiculo']) ) {
		  $cliente = $_POST['cliente'];
		  $vehiculo= $_POST['vehiculo'];
		} else {
		  die("Solicitud no válida.");
		}
			$rs = odbc_exec( $conexión, $consulta );
		if ( !$rs )
		{
			exit( "Error en la consulta SQL" );
		}

		$consulta = "
					SELECT 
					case when ROW_NUMBER() OVER(PARTITION BY tabla.LicTradNum , tabla.ItemCode ORDER BY tabla.LicTradNum , tabla.ItemCode, tabla2.duedate ) = 1 then 
						CAST( ROW_NUMBER() OVER(PARTITION BY tabla.LicTradNum , tabla.ItemCode ORDER BY tabla.LicTradNum , tabla.ItemCode, tabla2.duedate ) AS VARCHAR(10) ) 
						+'/'+ CAST( ROW_NUMBER() OVER(PARTITION BY tabla.LicTradNum , tabla.ItemCode ORDER BY tabla.LicTradNum , tabla.ItemCode , tabla2.duedate desc) AS VARCHAR(10) ) 
					else 
						CAST( ROW_NUMBER() OVER(PARTITION BY tabla.LicTradNum , tabla.ItemCode ORDER BY tabla.LicTradNum , tabla.ItemCode, tabla2.duedate ) AS VARCHAR(10))
					end ITEM 
					, tabla.DocNum DOCUMENTO, tabla.LicTradNum CODIGO, tabla.CardName CLIENTE 
					, tabla.ItemCode CODIGO_VEH , tabla.Dscription VEHICULO, CONVERT( VARCHAR(10), tabla2.DueDate , 105) VTO 
					, isnull( tabla2.U_NroCuota, 0) NROCUOTA 
					, (DATEDIFF(DAY, tabla2.DueDate, getdate() )) AS MORA 
					from ( 
							SELECT * , ROW_NUMBER() OVER(PARTITION BY ITEMCODE ORDER BY ITEMCODE, DOCDATE DESC ) FILA 
							FROM ( 
									select 'GASA' base , t1.docnum , t1.docdate , t2.itemcode , t2.Dscription, LicTradNum, CardName, t1.DocEntry
									from gardenkia.dbo.oinv t1 with ( nolock ) 
										 inner join gardenkia.dbo.inv1 t2 with ( nolock ) on t1.docentry = t2.docentry  where t1.u_conceptofactura = 'vhe' and t1.U_LIIV = 1
									union all 	 
									select 'CDE' , t1.docnum , t1.docdate , t2.itemcode , t2.Dscription, LicTradNum, CardName, t1.DocEntry
									from gardensa.dbo.oinv t1 with ( nolock ) 
										 inner join gardensa.dbo.inv1 t2 with ( nolock )   on t1.docentry = t2.docentry  where t1.u_conceptofactura = 'vhe' and t1.U_LIIV = 1 
									union all 	 
									select 'TEMA' , t1.docnum , t1.docdate , t2.itemcode , t2.Dscription, LicTradNum, CardName, t1.DocEntry
									from temasa.dbo.oinv t1 with ( nolock ) 
										 inner join temasa.dbo.inv1 t2 with ( nolock )   on t1.docentry = t2.docentry  where t1.u_conceptofactura = 'vhe' and t1.U_LIIV = 1 
									union all 	 
									select 'NISSAN' , t1.docnum , t1.docdate , isnull( t2.itemcode, u_vehicuechassis), t2.Dscription, LicTradNum, CardName, t1.DocEntry 
									from garden_ch.dbo.oinv t1 with ( nolock ) 
										 inner join garden_ch.dbo.inv1 t2 with ( nolock )   on t1.docentry = t2.docentry  where t1.u_conceptofactura = 'vhe' and t1.U_LIIV = 1 
									union all 	 
									select 'MPY' , t1.docnum , t1.docdate , t2.itemcode , t2.Dscription, LicTradNum, CardName, t1.DocEntry
									from garden_mpy.dbo.oinv t1 with ( nolock ) 
										 inner join garden_mpy.dbo.inv1 t2 with ( nolock ) on t1.docentry = t2.docentry where t1.u_conceptofactura = 'vhe' and t1.u_liiv = 1 
								) tabla1 
					) tabla 
					inner join ( 
								SELECT DueDate, u_nrocuota , DocEntry, InsTotalFC, InsTotal , PaidFC , paidtodate FROM gardenkia.dbo.INV6  with(nolock) union all 
								SELECT DueDate, u_nrocuota , DocEntry, InsTotalFC, InsTotal , PaidFC , paidtodate FROM gardensa.dbo.INV6   with(nolock) union all 
								SELECT DueDate, u_nrocuota , DocEntry, InsTotalFC, InsTotal , PaidFC , paidtodate FROM temasa.dbo.INV6   with(nolock) union all 
								SELECT DueDate, u_nrocuota , DocEntry, InsTotalFC, InsTotal , PaidFC , paidtodate FROM garden_mpy.dbo.INV6 with(nolock) 
							   )tabla2 on tabla.DocEntry = tabla2.DocEntry 
					where (tabla.itemCode like '%' + '$vehiculo' ) 
					and tabla.LicTradNum like '%' + '$cliente' + '%'  
					and ( isnull( tabla2.InsTotalFC , tabla2.InsTotal) - ISNULL( tabla2.PaidFC , tabla2.paidtodate ) ) > 0 
					AND FILA = 1 
					order by tabla.LicTradNum , tabla.ItemCode , tabla2.duedate 

				";

		//fco resultado de varios registros en json 
		$rs = odbc_exec( $conexión, $consulta );
		$i = 0;
		$valor = array();
		while ( $row = odbc_fetch_array($rs) )
		{
			$valor[] = array_map('utf8_encode',$row);
		}	
		echo json_encode( $valor , JSON_UNESCAPED_UNICODE ); //fco esta linea codifica para ser leido como json 
		//odbc_close ( $conexion );

	} elseif ($funcion == 'ClienteGestor') {
		if( isset($_POST['cliente']) ) {
		  $cliente = $_POST['cliente'];
		} else {
		  die("Solicitud no válida.");
		}
			$rs = odbc_exec( $conexión, $consulta );
		if ( !$rs )
		{
			exit( "Error en la consulta SQL" );
		}
		$consulta = "
		SELECT ITEM , DOCUMENTO , CODIGO , CLIENTE , CODIGO_VEH , VEHICULO , 
			   VTO , CUOTA , MORA , CASE WHEN MORA < 0 THEN TRAMO ELSE '' END TRAMO , CASE WHEN MORA < 0 THEN GESTOR ELSE '' END GESTOR , SUCURSAL  
		FROM ( 
			SELECT 
			case when ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) = 1 then 
				CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) AS VARCHAR(10) )
				+'/'+ CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode , b.duedate desc) AS VARCHAR(10) )
			else 
				CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) AS VARCHAR(10))
			end ITEM 
			, ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode)ORDEN
			, a.DocNum DOCUMENTO, a.CardCode CODIGO, a.CardName CLIENTE 
			, C.ItemCode CODIGO_VEH , C.Dscription VEHICULO, CONVERT( VARCHAR(10), b.DueDate , 105) VTO 
			, b.U_NroCuota CUOTA 
			, (DATEDIFF(DAY, GETDATE(), b.DueDate )) AS MORA 
			, CAST( d.codigo_tramo AS VARCHAR(10)) TRAMO 
			, D.gestor GESTOR 
			, 'MAZDA' SUCURSAL 
			FROM   garden_mpy.dbo.OINV a with(nolock) 
					inner join garden_mpy.dbo.INV6 b with(nolock) on a.DocEntry = b.DocEntry 
					INNER JOIN garden_mpy.dbo.INV1 C WITH(NOLOCK) ON A.DocEntry = C.DocEntry 
					inner join control_mpy.dbo.vcartera_periodo d on d.cod_cli  = a.CardCode COLLATE Modern_Spanish_CI_AS
			WHERE a.U_ConceptoFactura = 'VHE' and a.U_LIIV = 1 
						and ((b.InsTotalFC - b.PaidFC ) > 0)
						AND d.periodo = LEFT( CONVERT( varchar(100), GETDATE() , 120 ) , 7 ) 
						AND REPLACE ( REPLACE( a.CardCode , 'C', ''),'_' , '')  = '$cliente'
			UNION ALL 
			SELECT 
			case when ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) = 1 then 
				CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) AS VARCHAR(10) )
				+'/'+ CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode , b.duedate desc) AS VARCHAR(10) )
			else 
				CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) AS VARCHAR(10))
			end ITEM 
			, ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode)ORDEN
			, a.DocNum DOCUMENTO, a.CardCode CODIGO, a.CardName CLIENTE 
			, C.ItemCode CODIGO_VEH , C.Dscription VEHICULO, CONVERT( VARCHAR(10), b.DueDate , 105) VTO 
			, b.U_NroCuota CUOTA 
			, (DATEDIFF(DAY, GETDATE(), b.DueDate )) AS MORA 
			, CAST( d.codigo_tramo AS VARCHAR(10)) TRAMO 
			, D.gestor GESTOR 
			, 'GARDEN KIA' SUCURSAL 
			FROM   gardenkia.dbo.OINV a with(nolock) 
					inner join gardenkia.dbo.INV6 b with(nolock) on a.DocEntry = b.DocEntry 
					INNER JOIN gardenkia.dbo.INV1 C WITH(NOLOCK) ON A.DocEntry = C.DocEntry 
					inner join control.dbo.vcartera_periodo d on d.cod_cli  = a.CardCode COLLATE Modern_Spanish_CI_AS
			WHERE a.U_ConceptoFactura = 'VHE' and a.U_LIIV = 1 
						--and ((b.InsTotalFC - b.PaidFC ) > 0)
						AND d.periodo = LEFT( CONVERT( varchar(100), GETDATE() , 120 ) , 7 ) 
						AND REPLACE ( REPLACE( a.CardCode , 'C', ''),'_' , '')  = '$cliente'
			UNION ALL 
			SELECT 
			case when ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) = 1 then 
				CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) AS VARCHAR(10) )
				+'/'+ CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode , b.duedate desc) AS VARCHAR(10) )
			else 
				CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) AS VARCHAR(10))
			end ITEM 
			, ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode)ORDEN
			, a.DocNum DOCUMENTO, a.CardCode CODIGO, a.CardName CLIENTE 
			, C.ItemCode CODIGO_VEH , C.Dscription VEHICULO, CONVERT( VARCHAR(10), b.DueDate , 105) VTO 
			, b.U_NroCuota CUOTA 
			, (DATEDIFF(DAY, GETDATE(), b.DueDate )) AS MORA 
			, CAST( d.codigo_tramo AS VARCHAR(10)) TRAMO 
			, D.gestor GESTOR 
			, 'NISSAN' SUCURSAL 
			FROM  Garden_CH.dbo.OINV a with(nolock) 
					inner join garden_ch.dbo.INV6 b with(nolock) on a.DocEntry = b.DocEntry 
					INNER JOIN garden_ch.dbo.INV1 C WITH(NOLOCK) ON A.DocEntry = C.DocEntry 
					inner join control_ch.dbo.vcartera_periodo d on d.cod_cli  = a.CardCode COLLATE Modern_Spanish_CI_AS
			WHERE a.U_ConceptoFactura = 'VHE' and a.U_LIIV = 1 
						and ((b.InsTotalFC - b.PaidFC ) > 0)
						AND d.periodo = LEFT( CONVERT( varchar(100), GETDATE() , 120 ) , 7 ) 
						AND REPLACE ( REPLACE( a.CardCode , 'C', ''),'_' , '')  = '$cliente'
			UNION ALL 
			SELECT 
			case when ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) = 1 then 
				CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) AS VARCHAR(10) )
				+'/'+ CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode , b.duedate desc) AS VARCHAR(10) )
			else 
				CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) AS VARCHAR(10))
			end ITEM 
			, ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode)ORDEN
			, a.DocNum DOCUMENTO, a.CardCode CODIGO, a.CardName CLIENTE 
			, C.ItemCode CODIGO_VEH , C.Dscription VEHICULO, CONVERT( VARCHAR(10), b.DueDate , 105) VTO 
			, b.U_NroCuota CUOTA 
			, (DATEDIFF(DAY, GETDATE(), b.DueDate )) AS MORA 
			, CAST( d.codigo_tramo AS VARCHAR(10)) TRAMO 
			, D.gestor GESTOR 
			, 'TEMA' SUCURSAL 
			FROM  Garden_CH.dbo.OINV a with(nolock) 
					inner join temasa.dbo.INV6 b with(nolock) on a.DocEntry = b.DocEntry 
					INNER JOIN temasa.dbo.INV1 C WITH(NOLOCK) ON A.DocEntry = C.DocEntry 
					inner join control_tema.dbo.vcartera_periodo d on d.cod_cli  = a.CardCode COLLATE Modern_Spanish_CI_AS
			WHERE a.U_ConceptoFactura = 'VHE' and a.U_LIIV = 1 
						and ((b.InsTotalFC - b.PaidFC ) > 0)
						AND d.periodo = LEFT( CONVERT( varchar(100), GETDATE() , 120 ) , 7 ) 
						AND REPLACE ( REPLACE( a.CardCode , 'C', ''),'_' , '')  = '$cliente'
			UNION ALL 
			SELECT 
			case when ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) = 1 then 
				CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) AS VARCHAR(10) )
				+'/'+ CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode , b.duedate desc) AS VARCHAR(10) )
			else 
				CAST( ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode) AS VARCHAR(10))
			end ITEM 
			, ROW_NUMBER() OVER(PARTITION BY a.CardCode , C.ItemCode ORDER BY a.CardCode , C.ItemCode)ORDEN
			, a.DocNum DOCUMENTO, a.CardCode CODIGO, a.CardName CLIENTE 
			, C.ItemCode CODIGO_VEH , C.Dscription VEHICULO, CONVERT( VARCHAR(10), b.DueDate , 105) VTO 
			, b.U_NroCuota CUOTA 
			, (DATEDIFF(DAY, GETDATE(), b.DueDate )) AS MORA 
			, CAST( d.codigo_tramo AS VARCHAR(10)) TRAMO 
			, D.gestor GESTOR 
			, 'CDE' SUCURSAL 
			FROM  gardensa.dbo.OINV a with(nolock) 
					inner join gardensa.dbo.INV6 b with(nolock) on a.DocEntry = b.DocEntry 
					INNER JOIN gardensa.dbo.INV1 C WITH(NOLOCK) ON A.DocEntry = C.DocEntry 
					inner join control_cde.dbo.vcartera_periodo d on d.cod_cli  = a.CardCode COLLATE Modern_Spanish_CI_AS
			WHERE a.U_ConceptoFactura = 'VHE' and a.U_LIIV = 1 
						--and ((b.InsTotalFC - b.PaidFC ) > 0)
						AND d.periodo = LEFT( CONVERT( varchar(100), GETDATE() , 120 ) , 7 ) 
						AND REPLACE ( REPLACE( a.CardCode , 'C', ''),'_' , '')  = '$cliente'
			) TABLA 
			order by CODIGO , CODIGO_VEH , ORDEN  
		";		

		//fco resultado de varios registros en json 
		$rs = odbc_exec( $conexión, $consulta );
		$valor = array();
		while ( $row = odbc_fetch_array($rs) )
		{
			$valor[] = array_map('utf8_encode', $row) ;
		}	
		echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 
		//odbc_close ( $conexion );

	} elseif ( $funcion == 'MostrarVin' ){
		if( isset($_POST['cliente']) && isset($_POST['vehiculo']) ) {
		  $cliente  = $_POST['cliente'];
		  $vehiculo = $_POST['vehiculo'];
		} else {
		  die("Solicitud no válida.");
		}

		$consulta = "
					select BASE , CLIENTE , RUC , VIN , VEHICULO 
					from ( 
							select * , ROW_NUMBER() OVER(PARTITION BY VIN ORDER BY VIN , FECHA DESC ) FILA 
							from ( 
									select 'MPY' base, t1.DocDate FECHA, t1.CardName CLIENTE, t3.LicTradNum RUC, t4.U_Chassis VIN, t2.Dscription VEHICULO 
									from garden_mpy.dbo.oinv t1 with(nolock) inner join garden_mpy.dbo.INV1 t2 with(nolock) on t1.DocEntry = t2.DocEntry  and T1.U_ConceptoFactura = 'VHE' and t1.U_LIIV = '1' 
										 inner join garden_mpy.dbo.ocrd t3 with(nolock) on t1.CardCode = T3.CardCode 
										 inner join garden_mpy.dbo.OITM t4 with(nolock) on t2.ItemCode = t4.ItemCode UNION ALL 

									select 'GASA' BASE , t1.DocDate FECHA, t1.CardName CLIENTE, t3.LicTradNum RUC, t4.U_Chassis VIN, t2.Dscription VEHICULO 
									from gardenkia.dbo.oinv t1 with(nolock) inner join GardenKia.dbo.INV1 t2 with(nolock) on t1.DocEntry = t2.DocEntry  and T1.U_ConceptoFactura = 'VHE' and t1.U_LIIV = '1' 
										 inner join gardenkia.dbo.ocrd t3 with(nolock) on t1.CardCode = T3.CardCode 
										 inner join gardenkia.dbo.OITM t4 with(nolock) on t2.ItemCode = t4.ItemCode UNION ALL 

									select 'CDE' BASE, t1.DocDate FECHA, t1.CardName CLIENTE, t3.LicTradNum RUC, t4.U_Chassis VIN, t2.Dscription VEHICULO 
									from gardensa.dbo.oinv t1 with(nolock) inner join gardensa.dbo.INV1 t2 with(nolock) on t1.DocEntry = t2.DocEntry  and T1.U_ConceptoFactura = 'VHE' and t1.U_LIIV = '1' 
										 inner join gardensa.dbo.ocrd t3 with(nolock) on t1.CardCode = T3.CardCode 
										 inner join gardensa.dbo.OITM t4 with(nolock) on t2.ItemCode = t4.ItemCode 
								)tabla2 
						) tabla 
						where FILA = 1 
						and case when len(ltrim(rtrim( '$vehiculo' ))) > 0 then tabla.vin else tabla.ruc end like case when len(ltrim(rtrim( '$vehiculo' ))) > 0 then '%'+'$vehiculo' else '$cliente'+ '%' end 
					";						

		//fco resultado de varios registros en json 
		$rs = odbc_exec( $conexión, $consulta );
		$valor = array();
		while ( $row = odbc_fetch_array($rs) )
		{
			$valor[] = array_map('utf8_encode', $row ) ;
		}	
		echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 
		//odbc_close ( $conexion );

	} elseif ( $funcion == 'ConsultarLog' ){
		if( isset($_POST['usuario']) && isset($_POST['password']) ) {
		  $usuario  = $_POST['usuario'];
		  $password = $_POST['password'];
		} else {
		  die("Solicitud no válida.");
		}

		$consulta = "select count(*) consulta from control.dbo.usuarios where usu_codigo = '$usuario' and usu_password = '$password' ";
		//fco resultado de varios registros en json 
		$rs = odbc_exec( $conexión, $consulta );
		$valor = array();
		while ( $row = odbc_fetch_array($rs) )
		{
			$valor[] = array_map('utf8_encode', $row ) ;
		}	
		echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 
		//odbc_close ( $conexion );

	} elseif ( $funcion == 'ConsultarVehiculo' ){ 
		if( isset($_POST['Chassis']) ) { 
		  $Chassis = $_POST['Chassis']; 
		} else { 
		  die("Solicitud no válida."); 
		}
		
		$consulta = "select top 1 itemcode b_Chassis,right( itemcode, 17) +'-'+ ( select cast( ( count(*) + 1 ) as varchar(5)) from OINS with(nolock) where right( itemCode, 17) = right( oitm.itemcode, 17) ) b_NroSerie, itemname b_Vehiculo from oitm with(nolock) where itemcode like '%$Chassis' and ItmsGrpCod in ( select itmsgrpcod from oitb with(nolock) where ( ItmsGrpNam like '%vehi%' or ItmsGrpNam like '%moto%' or ItmsGrpNam like '*'  ))";
		//fco resultado de varios registros en json 
		$rs = odbc_exec( $conexión, $consulta );
		$valor = array();
		while ( $row = odbc_fetch_array($rs) )
		{
			$valor[] = array_map('utf8_encode', $row ) ;
		}	
		echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 
		//odbc_close ( $conexion );

	} elseif($funcion == 'Asesor' ){

		$consulta = "select fun_codigo Codigo, fun_nombres Asesor from funcionarios f where fun_codigo in ( 26, 25, 28, 31, 0) ";
		
		$rs = pg_query( $conexión2, $consulta );
		if ( !$rs )
		{
			exit( "Error en la consulta SQL" );
		}
		//fco resultado de varios registros en json 
		while ( $row = pg_fetch_array($rs) )
		{
			$valor[] = $row;
		}	
		echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 
		////odbc_close ( $conexion );
		
	} elseif($funcion == 'ConsultarMora'){
		if( isset($_POST['vin']) ) {
		  $Chassis = $_POST['vin'];
		} else {
		  die("Solicitud no válida.");
		}

		$consulta = " 
					select top 1 datediff( day , t2.DueDate  , getdate() ) mora , CASE when t1.Project in ('PLAN_PLUS_3_36' , 'PLAN_PLUS_3_48') then 'si' else 'no' end plan_familiar3
					from oinv t1 with(nolock)
						inner join inv6 t2 with(nolock) on t1.DocEntry = t2.DocEntry 
						inner join INV1 t3 with(nolock) on t1.DocEntry = t3.DocEntry 
					and t1.U_ConceptoFactura = 'vhe' 
					and t1.U_LIIV = 1 
					where  ( t2.InsTotal - t2.PaidToDate ) <> 0 
					and t2.DueDate <= GETDATE() 
					and case when t3.Dscription = 'Saldo Inicial' then t1.U_VehiCueChassis  else t3.ItemCode end =  '$Chassis' 
					and t1.cardcode not in ( 'CGARA956330O' , 'CGAUA0266090C' , 'C80091866-5')
					order by t2.DueDate 
				"; 
		//					and t3.ItemCode like '%' + '$Chassis' + '%' 
				
		//fco resultado de varios registros en json 
		$rs = odbc_exec( $conexión, $consulta );
		$valor = array();
		while ( $row = odbc_fetch_array($rs) )
		{
			$valor[] = array_map('utf8_encode', $row );
		}	
		echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 
		//odbc_close ( $conexion );

	
	} elseif($funcion == 'consultarEncuesta'){
		if( isset($_POST['vin']) ) {
			$Chassis = $_POST['vin'];
		  } else {
			die("Solicitud no válida.");
		  }
  
		  $consulta = " 
					select top 1 recomiendaTaller , comentarioEstadiaTaller, asesor , nroOrden, comentarioNegativoEtiqueta
					from control.dbo.encuestaClienteTaller
					where right( vin , 12)= right('$Chassis', 12) 
					order by fecha desc 
				  "; 
		  //					and t3.ItemCode like '%' + '$Chassis' + '%' 
				  
		  //fco resultado de varios registros en json 
		  $rs = odbc_exec( $conexión, $consulta );
		  $valor = array();
		  while ( $row = odbc_fetch_array($rs) )
		  {
			  $valor[] = array_map('utf8_encode', $row );
		  }	
		  echo json_encode( $valor ); //fco esta linea codifica para ser leido como json 
		  //odbc_close ( $conexion );

	} 
?>