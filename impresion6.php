 
<!DOCTYPE html>
<html lang="en"> 
<head>
  <title>Impresion OT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--Marcador de Combustible-->
	<link rel="stylesheet" type="text/css" href="Gauges-dynameter/css/jquery.dynameter.css">
	<link rel="stylesheet" type="text/css" href="Gauges-dynameter/css/index.css">
	<link rel="stylesheet" href="Gauges-dynameter/css/jquery-ui.css">	
	<!-- copiar en todos -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--Marcador de combustible-->
	<script src="Gauges-dynameter/js/jquery.dynameter.js"></script>
	<script src="Gauges-dynameter/js/jquery-ui.min.js"></script>	
	<script src="jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
	<script src="jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>


  <style>
	
	body {
	  background: rgb(204,204,204); 
	}
	/*
		al cambiar la etiqueta size 
		*/

	/*page[size="A4"] {*/
	page[size="Folio"] {
	  background: white;
	  width:  8.5in;  /* Legal - width:  8.5in; Folio - width:  21cm;   A4 */
	  height: 14.0in; /* Legal - height: 13.0in;Folio - height: 29.7cm; A4 */
	  display: block;
	  margin: 0 auto;
	  margin-bottom: 0.2cm;
	  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
	}
	@media print { 
	  body, page[size="Folio"] { 
		margin: 0; 
		box-shadow: 0; 
	  } 
	}	
	table, th, td {
		border: 1px solid gray;
		padding-left:3px;	
		padding-right:3px;
	}	

	table th td {
		border: 5px solid black;
	}
	table th td {
		border: 5px solid black;
	}

  </style>
</head>
<body>
<page size="Folio">
<div class="container-fluid" style="margin:10px; position: relative;">
        <div class="row"> 
        	<div class="col-xs-3 text-left"> 
		  		<div style="border: 2px solid black; border-radius: 5px; margin-top: 10px; min-width: 200px; min-height: 80px;"><center><h3><strong><span id="TipoServicio">CARGO CLIENTE</span></strong> </h3></center></div> 
            </div> 
        	<div class="col-xs-6 text-center"> 
        		<div class="row">
					<!-- <img class="img-rounded text-left" src="logo_garden.png" alt="Chania" width="60" height="55" style="margin-top: 5px; margin-left: -45px;"> -->
					<img class="img-rounded text-right" src="logo_bmw3.jpeg" alt="Chania" width="250" height="55" style="margin-top: 8px; margin-left:-110px;">
					<p style="margin-left: 20px; font-size: 8px; margin-bottom: 0px; margin-top:5px;" class="text-left">Avda. Mcal. López y RI 1 2 de Mayo 
		          Tel.: (021) 237 7105
		          Asuncion - Paraguay
					</p> 
	        	</div>	
	                
            </div> 
        	<div class="col-xs-3 text-right" style="padding-top: 10px;"> 
		  		<span > <?php echo date("Y-m-d H:i"); ?> </span>
		  		<h4><strong>TIPO SERVICIO</strong> </h4> 
		  		<h5><strong><span id="TipoLlamada"></span></strong></h5>
            </div> 
        </div> 

   		<!-- copiar en todos -->
        <div class="row" style="margin-bottom: 5px;">
			<div class="col-xs-12 text-right d-flex justify-content-between"><span  id="planMini"></span> <span  id="mora"></span> </div>	
        </div>  

  <table id="contenido" >
    <thead>
      <tr>
        <th colspan="10" class="text-center"><h2 style="margin:0px;">NRO SERVICIO: &nbsp;<span id = "NroLlamada">0029246</span></h2> </th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<td colspan=4>
      		<span style="margin-right: 20px;"><strong>Fecha Recepcion: </strong> <span id="FechaApertura"></span></span>
      		<span style="margin-right: 20px;"><strong>Fecha Promesa  : </strong> <span id="FechaPromesa"></span></span>
      		<span style="margin-right: 20px;"><strong>Fecha Venta    : </strong> <span id="FechaVenta"></span></span>
      		<span style="margin-right: 20px;"><strong>Cono: </strong><span id="Identificador"></span> </span>
      		<p style="margin-bottom: 0px;">
	      		<span style="margin-right: 20px;"><strong>Nro Documento: </strong><span id="NroDocumento"></span> </span>
	      		<!--<span style="margin-right: 20px;"><strong>Nro OT: </strong><span id="NroOt"></span> </span>-->
	      		<span style="margin-right: 20px;"><strong>ASESOR: </strong><span id="Asesor"></span> </span>
	      		<span style="margin-right: 20px;"><strong>CONTACTO CLIENTE: </strong><span id="contacto_cliente"></span> </span>
	      		<span style="margin-right: 20px;"><strong>EMAIL CLIENTE: </strong><span id="contacto_email"></span> </span>

      		</p>
      	</td>
      </tr>
      <tr  > 
		<td  class="text-center" colspan="2" style="background-color:#eee !important;"><strong>Hoja de Encargo y Asesoramiento<strong></td> 
		<td ><strong>Hora: </strong></td> 
		<td ><strong>Prometido: </strong></td> 
	  </tr>
      <tr> 
		<td style="width:5%;"><strong>Nombre:</strong> </td> <td style="width:40%;" id="NombreCliente">Juan Pueblo</td>   
		<td style="width:2%;"><strong>Chassis:</strong> </td> <td style="width:40%;" id="Chassis">ABC123456</td> 
	  </tr>
      <tr> 
		<td><strong>Direccion:</strong> </td> <td id="Direccion">Rca Argentina c/Facundo Machain</td>   
		<td><strong>Marca:</strong> </td> <td id="Marca">KIA   </td> 
	  </tr>
      <tr> 
		<td><strong>Telefono: </strong> </td> <td id="Telefono">0981 123 123</td> 
		<td><strong>Modelo:</strong>     </td> <td id="Modelo">KIA PICANTO </td> 
	  </tr>
      <tr> 
		<td><strong>Ruc / Ci: </strong> </td> <td id="CodigoCliente">3216541</td> 
		<td><strong>Kilometraje	:</strong>    </td> <td id="Kilometraje">25000  </td> 
	  </tr>
      <tr>
      	<td></td>
      	<td></td>
      	<td><strong>Chapa:</strong> </td>
      	<td id="Chapa">ABC123 </td>
      </tr>	
      <tr>
      	<td></td>
      	<td></td>
      	<td><strong>Color:</strong> </td>
      	<td id="Color">rojo </td>
      </tr>

<!--
      <tr style="background-color:#eee !important;"> <td colspan="4"><strong> COMENTARIO</strong></td> </tr>
      <tr> <td colspan="4" id="PedidoCliente"> <br><br> </td> </tr>

	  <tr style="background-color:#eee !important;"> <td colspan="4"><strong> MOTIVO</strong></td> </tr>
      <tr> <td colspan="4" id="Motivo"> <br><br> </td> </tr>

	  <tr style="background-color:#eee !important;"> <td colspan="4"><strong> OBSERVACIONES</strong></td> </tr>
      <tr> <td colspan="4" id="Accesorios"> <br><br> </td> </tr>

-->      
	  <tr style="background-color:#eee !important;" class="text-center"><td colspan="4"><strong>DETALLE DEL VEHICULO</strong></td> </tr>
	  <tr style="background-color:#eee !important;"> <td colspan="2"><strong>1. Tareas de Mantenimiento</strong></td> <td colspan="1"><strong>2. Combustible</strong></td> <td colspan="1"><strong> 3. Estado del Automovil</strong></td></tr>
	<tr> 
		<td colspan="2" style="width:10%; position: relative;"> Filtro de aceite      
			<span style="float:right; border-width: 0px 0px 0px 1px;  border-style: solid; border-color:gray; margin:0px; width: 30px; height: 27px; position: absolute; right: 0px; top:-1px;"></span>
		</td> 
		<td colspan="1" rowspan="6" style="width:20%;">
			<center>
				<div id="fuelMeterDiv" class="dm-wrapperDiv"><div class="dm-bgClrDiv normal" style="transform: rotate(10deg); z-index: 3;"></div><div class="dm-bgClrDiv warn" style="transform: rotate(7deg); z-index: 2;"></div><div class="dm-bgClrDiv error" style="transform: rotate(0deg); z-index: 1;"></div><div class="dm-maskDiv" style="transform: rotate(0deg);"></div><div class="dm-innerDiv"><p class="dm-valueP Combustible">0</p><p class="dm-unitP">%</p><p class="dm-labelP">Combustible</p></div></div>					
			</center>
		</td> 
		<td colspan="1" rowspan="6" style="width:40%;">
			<center><img src="vehiculo5.jpeg" class="img-rounded detalle_vehiculo" alt="Cinque Terre" width="60%" height="60%"> </center>
		</td>
	</tr>
	<tr> 
		<td colspan="2" style="width:10%; position: relative;"> Filtro de aire 
			<span style="float:right; border-width: 0px 0px 0px 1px;  border-style: solid; border-color:gray; margin:0px; width: 30px; height: 27px; position: absolute; right: 0px; top:-1px;"></span>
		</td> 
	</tr>
	<tr> 
		<td colspan="2" style="width:10%; position: relative;"> Filtro de Acondicionador de Aire 
			<span style="float:right; border-width: 0px 0px 0px 1px;  border-style: solid; border-color:gray; margin:0px; width: 30px; height: 27px; position: absolute; right: 0px; top:-1px;"></span>
		</td> 
	</tr>
	<tr> 
		<td colspan="2" style="width:10%; position: relative;"> Sustituir bujias 
			<span style="float:right; border-width: 0px 0px 0px 1px;  border-style: solid; border-color:gray; margin:0px; width: 30px; height: 27px; position: absolute; right: 0px; top:-1px;"></span>
		</td> 
	</tr>
	<tr> 
		<td colspan="2" style="width:10%; position: relative;"> Sustituir liquidos de frenos 
			<span style="float:right; border-width: 0px 0px 0px 1px;  border-style: solid; border-color:gray; margin:0px; width: 30px; height: 27px; position: absolute; right: 0px; top:-1px;"></span>
		</td> 
	</tr>
	<tr> 
		<td colspan="2" style="width:10%; position: relative;"> Sustituir pastillas de freno delanteros 
			<span style="float:right; border-width: 0px 0px 0px 1px;  border-style: solid; border-color:gray; margin:0px; width: 30px; height: 27px; position: absolute; right: 0px; top:-1px;"></span>
		</td> 
	</tr>
	<tr> 
		<td colspan="2" style="width:10%; position: relative;"> Sustituir pastillas de freno traseros 
			<span style="float:right; border-width: 0px 0px 0px 1px;  border-style: solid; border-color:gray; margin:0px; width: 30px; height: 27px; position: absolute; right: 0px; top:-1px;"></span>
		</td> 
		<td colspan="2" style="position: relative;">
			<span style="border-width: 0px 1px 0px 1px; border-style: solid; border-color:gray; width:208px; height: 22px; position: absolute; top:-1px; left: -1px;"> <span class="glyphicon glyphicon-remove" style="margin-left: 5px; margin-top: 3px"></span> Impacto de piedras</span>
			<span style="border-width: 0px 1px 0px 1px; border-style: solid; border-color:gray; width:120px; height: 22px; position: absolute; top:-1px; left: 206px;"> <span class="glyphicon glyphicon-alert" style="margin-left: 5px; margin-top: 3px"></span> Arañazo</span>
			<span style="border-width: 0px 1px 0px 1px; border-style: solid; border-color:gray; width:125px; height: 22px; position: absolute; top:-1px; left: 325px;"> <span class="glyphicon glyphicon-record" style="margin-left: 5px; margin-top: 3px"></span> Abolladura</span>
		</td>
	</tr>
	<tr> 
		<td colspan="2" style="width:10%; position: relative;"> Sustituir escobillas limpia parabrisas 
			<span style="float:right; border-width: 0px 0px 0px 1px;  border-style: solid; border-color:gray; margin:0px; width: 30px; height: 21px; position: absolute; right: 0px; top:-1px;"></span>

		</td> 
		<td colspan="2" rowspan="2" >Observaciones:</td>
		<!--<td></td> tiene colspan--> 
	</tr>

	<tr>
		<td colspan="2"> &nbsp;</td>
	</tr>
	<tr style="background-color:#eee !important;"> 
		<td colspan="2"><strong>4. Accesorios</strong></td> 
		<td colspan="2"><strong>5. Servicios Adicionales</strong></td> 
	</tr>

	<tr style="font-size: 12px;">
		<td>Gato</td> <td>Baliza</td> <!----> <td>Lavado cargo adicional</td> <td>Lavado sin cargo adicional</td>
	</tr>
	<tr style="font-size: 12px;">
		<td>Extintor</td> <td>Herramientas</td> <!----> <td>Cambio de neumaticos</td> <td></td>
	</tr>
	<tr style="font-size: 12px;">
		<td>Taza</td> <td>Rueda auxilio</td> <!----> <td></td> <td></td>
	</tr>
<!--
	<tr style="font-size: 12px;">
		<td>Llavero</td> <td>Documento</td>  <td></td> <td></td>
	</tr>	
	<tr style="font-size: 12px;">
		<td>Manual</td> <td>Linterna</td>  <td></td> <td></td>
	</tr>
-->
	<tr style="background-color:#eee !important;"> 
		<td colspan="2"><strong> MOTIVO</strong></td> 		
		<td colspan="2"><strong> COMENTARIO</strong></td> 
	</tr>
	<tr> 
		<td colspan="2" id="Motivo" style="font-size: 12px;"></td> 
		<td colspan="2" id="PedidoCliente" style="font-size: 12px;">el cliente reclama que el auto hace mucho ruido </td> 
	</tr>

<!--
	  <tr style="background-color:#eee !important;" class="text-center"> <td colspan="4"><strong> AUTORIZACION Y FIRMAS </strong></td> </tr>	  <tr style="background-color:#eee !important;" class="text-center"> <td colspan="4"><strong> AUTORIZACION </strong></td>  </tr>
      <tr> <td colspan="4" style="width:20%; text-align: justify"><p style="font-size:10px; margin-top: 2px;">Autorizo al Dpto. de Servicios de Garden Automotores SA a realizar los trabajos apuntados mas arriba. Asi mismo a la provision de los repuestos y materiales que sean necesarios; las piezas sustitutiva en las reparaciones estaran a disposicion hasta el momento del retiro del vehiculo. Autorizo tambien a las pruebas del vehiculo fuera del taller en las calles y rutas para garantizar los trabajos realizados. Garden Automotores SA tendra derecho a cobrar 15.000 GS por dia en concepto de estacionamiento y seguro a partir de las 24 horas de la fecha de notificacion para el retiro del vehiculo. La empresa no se responsabiliza por los objetos de valor dejados dentro del vehiculo. En caso de incumplimiento de pago por los servicios contratados, el presente instrumento se constituye en título ejecutivo, de conformidad a los artículos 439 y 448, inciso b) del C.P.C. 
      En caso de retiro de repuestos sustitutos, manifiesto asumir responsabilidad respecto a su destino, disposición y uso comprometiéndome a dar cumplimiento a disposiciones legales y/o normativas que regulen la utilización de los mismos</p> </td>  </tr>
	  <tr style="background-color:#eee !important;" class="text-center" >
		<td colspan="4"><strong> FIRMA DE CONFORMIDAD </strong></td>	  	
	  </tr>
	  <tr style="height: 50px;">
	  	<td colspan="2"> <span style="position: relative; top: 16px; font-size: 12px;">Firma: </span></td>
		<td colspan="1"> <span style="position: relative; top: 16px; font-size: 12px; ">CI.: </span></td>  
		<td colspan="1"> <span style="position: relative; top: 16px; font-size: 12px;">Aclaracion.: </span></td>
	  </tr>
-->

<tr style="background-color:#eee !important;" class="text-center"> <td colspan="4"><strong> AUTORIZACION</strong></td></tr>
	  <tr> <td colspan="4" style="width:20%; text-align: justify"> <p style="font-size:10px; margin:0px; position: relative;"><b>Autorización al Dpto. de Servicios de Garden Automotores S.A. a:</b>Realizar los trabajos apuntados más arriba mediante la provisión de los repuestos y materiales que sean necesarios. A las pruebas del vehículo fuera del taller en las calles y rutas para garantizar los trabajos realizados <b>Informamos al Cliente que:</b>La empresa tendrá derecho a cobrar 30.000 Gs. por día en concepto de estacionamiento y seguro a partir de las 24 horas de la fecha de notificación para el retiro del vehículo. La empresa no se responsabiliza por los objetos de valor dejados dentro del vehículo. Los datos proporcionados podrán ser utilizados en acciones de marketing, encuestas de calidad y llamadas de seguimiento. En caso de incumplimiento de pago por los servicios contratados, el presente instrumento se constituye en título ejecutivo, de conformidad a los artículos 439 y 448, inciso b) del C.P.C. De conformidad a lo establecido en el artículo 1.826 del Código Civil Paraguayo, Garden Automotores S.A. podrá ejercer derecho de retención del vehículo hasta el cobro íntegro del crédito exigido. En caso de haber arrendado un vehículo, conjuntamente con el pago de servicio del taller deberá ser abonado el costo del arrendamiento. <b>Retiro de Repuestos:</b> Las piezas sustituidas en las reparaciones estarán a disposición hasta el momento del retiro del vehículo. Yo cliente, manifiesto asumir responsabilidad respecto a su destino, disposición y uso comprometiéndome a dar cumplimiento a disposiciones legales y/o normativas que regulen la utilización de los mismos.</p>
		</td></tr>

<tr style="background-color:#eee !important;" class="text-center"> 
	  	<td colspan="4"><strong> FIRMA DE CONFORMIDAD </strong></td>  
	  </tr>
	  <tr style="background-color:#eee !important;" class="text-center"> 
	  	<td colspan="2"><strong> ENTREGA DE VEHICULO </strong></td>
	  	<td colspan="2"><strong> RETIRO DE VEHICULO </strong></td>  
	  </tr>
      <tr> <td colspan="2" ><span style="position: relative;">Firma:</span> <p></p> </td><td colspan="2" > <span style="position: relative;">Firma:</span><p></p> </td></tr>
	  <tr> <td colspan="2"><span style="position: relative; ">Aclaracion: </span> </td><td colspan="2"><span style="position: relative; ">Aclaracion: </span></td>  </tr> 
	  <tr> <td colspan="2"><span style="position: relative; ">CI: </span></td><td colspan="2"><span style="position: relative; ">CI: </span></td>  </tr>
	  <tr> <td colspan="2"><span style="position: relative; "></span></td><td colspan="2"><span style="position: relative; ">Fecha: </span> <span style="margin-left: 150px;">Hora: </span></td>  </tr>
	  <tr> <td colspan="2"><span style="position: relative; "></span></td><td colspan="2"><span style="position: relative; ">Retiro de Piezas Sustituidas: </span> <span style="margin-left: 50px">SI (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</span> <span style="margin-left: 50px;">NO (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</span></td>  </tr>

	  <tr> <td colspan="4" style="text-align: center"><span style="position: relative;">No se aceptan reclamos posteriores </span></td>  </tr> 

	</tbody>
  </table>
  <!-- <hr style="margin:10px; border: 1px dotted black;"> -->

  <!-- <table style="width:100%; margin-top:10px; position: relative;" id="ticket">-->
  <table style="width:98%; margin-top:10px; position: absolute;  top:1100px; left:5px;" id="ticket">
	<tbody>
	  <tr style="background-color:#eee !important;" class="text-center"> <td colspan="10"><strong> TICKET </strong></td> </tr>
      <tr class="text-center"  style="background-color:#eee !important;"> <td colspan="8" ><strong> CONFORMIDAD CLIENTE<strong></td> <td colspan="2"><strong>VEHICULO</strong></td> </tr>
      <tr> <td colspan="8" rowspan="2" style="width:60%; position: relative;"> 
      	        <img src="logo_bmw3.jpeg" alt="Mazda" width="120" height="32" style="position: absolute; top:2px; left:2px;" >

				<strong><p style="margin-bottom:0px; margin-left: 130px;"> Garden Automotores S.A.</p></strong> 
				<p style="font-size:10px;margin-bottom:0px; margin-left: 130px;">Avda. Mcal. López y RI 1 2 de Mayo  Tel.: (021) 237 7105 </p>
				<p style="margin-bottom:0px;"><strong> Estimado Cliente</p></strong> 
<!--				
				<p style="font-size:10px;margin-bottom:0px;"> * Para mantener el turno en el taller el presupuesto debera ser aceptado entre las 48 hs. </p>
				<p style="font-size:10px;margin-bottom:0px;"> * Horario de Atencion del Dpto. de Servicios de 07:30 a 18:00 hs de Lunes a Viernes Sabado de 07:30 a 12:00 hs. </p>
				<p style="font-size:10px;margin-bottom:0px;"> * La empresa no se responsabiliza por los objetos de valor dejados dentro del vehiculo. </p>
				<p style="font-size:10px;margin-bottom:0px;"> * El ticket sera requerido para el retiro del vehiculo. </p>
				<p style="font-size:10px;margin-bottom:0px;"> * Sugierenos su inquietud para mejorar aun mas nuestros servicios. </p>
-->	

				<p style="font-size:9px;margin-bottom:0px;"> * Para mantener el turno en el taller el presupuesto debera ser aceptado entre las 48 hs. </p>
				<p style="font-size:9px;margin-bottom:0px;"> * Horario de Atencion del Dpto. de Servicios de 07:30 a 18:00 hs de Lu - Vie Sab de 07:30 a 12:00 hs. </p>
				<p style="font-size:9px;margin-bottom:0px;"> * El ticket sera requerido para el retiro del vehiculo. </p> 
				<p style="font-size:9px;margin-bottom:0px;"> * Es nuestra obligación informarle permanentemente el estado de los servicios solicitados a través del Clear Service. Su Asesor de Servicios debe proveerle evidencias audiovisuales vía WhatsApp para garantizar la transparencia de nuestros trabajos.</p> 
				<p style="font-size:9px;margin-bottom:0px;"> * Los datos proporcionados en esta Orden de Servicios podrán ser utilizados en acciones de marketing, encuestas de calidad y llamadas de seguimiento. </p> 


				<p style="margin-bottom:3px;"><strong> ASESOR : </strong> <span class="Asesor2"></span></p> 
				
			</td> 
			<td colspan="1"  style="width:20%;"> 
				<!--<center><img src="combustible.png" style="margin-top:0px; filter: grayscale(100%);" class="img-rounded combustible" alt="Cinque Terre" width="100%" height="100%"> </center>  -->
				<center>
					<div id="fuelMeterDiv" class="dm-wrapperDiv"><div class="dm-bgClrDiv normal" style="transform: rotate(10deg); z-index: 3;"></div><div class="dm-bgClrDiv warn" style="transform: rotate(7deg); z-index: 2;"></div><div class="dm-bgClrDiv error" style="transform: rotate(0deg); z-index: 1;"></div><div class="dm-maskDiv" style="transform: rotate(0deg);"></div><div class="dm-innerDiv"><p class="dm-valueP Combustible">0</p><p class="dm-unitP">%</p><p class="dm-labelP">Combustible</p></div></div>					
				</center>
			</td>
			<td colspan="1"  style="width:20%;"><center><img src="vehiculo2.png" class="img-rounded detalle_vehiculo" alt="Cinque Terre" width="100%" height="100%"> </center> 
			</td>
		</tr>
		<tr>
			<td colspan="2"><center><h3 style="margin:5px;"> NRO SERVICIO: &nbsp;<span id="NroOt2">0029246</span></h3></center></td>
		</tr>
	  
	</tbody>
  </table>

  </div>
</page>

<page size="Folio" style="display: none">
	<div class="container-fluid" >
	  <table id="tabla2" class="table" style="margin-top: 20px;">
	    <thead>
	    	<tr> <td style="text-align: center; padding: 0px;" colspan="6"> <strong>Taller</strong></td> </tr>
	      <tr>
	        <th style="width:1%; padding: 0px;" colspan="2">Hs</th>
	        <th style="width:1%; padding: 0px;">Horario</th>
	        <th style="width:60%; padding: 0px;">Trabajos Realizados</th>
	        <th style="width:15%; padding: 0px;">Tecnico</th>
	        <th style="width:5%; padding: 0px;">Autorizado</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">1</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>

	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">2</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">3</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">4</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">5</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">6</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">7</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">8</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">9</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">10</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">11</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">12</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">13</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">14</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">15</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	      <tr> <td style="padding-left: 0px; padding-right: 0px; text-align: center;" rowspan="2">16</td> <td style="padding: 0px; text-align: center; font-size: 10px;">I</td> <td></td> <td rowspan="2"></td> <td rowspan="2"></td> <td rowspan="2"></td> </tr>
	      <tr> <td style="padding: 0px; text-align: center; font-size: 10px;">F</td> <td></td></tr>
	    </tbody>
	  </table>
	  <table id="tabla2" class="table" style="margin-top: 20px;">
	    <thead>
	    	<tr><th style="text-align: center; padding: 0px;" colspan="4">Repuestos</th></tr>
	      <tr>
	        <th style="width:1%;  padding: 0px;">Ide</th>
	        <th style="width:1%;  padding: 0px;">Cantidad</th>
	        <th style="width:60%; padding:0px;">Repuestos</th>
	        <th style="width:5%;  padding: 0px;">Autorizado</th>
	      </tr>
	    </thead>
	    <tbody>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">1</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">2</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">3</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">4</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">5</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">6</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">7</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">8</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">9</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">10</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">11</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">12</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">13</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">14</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">15</td><td></td> <td></td> <td></td> </tr>
	    	<tr style="height: 20px;"> <td style="padding: 0px; text-align: center;">16</td><td></td> <td></td> <td></td> </tr>
		</tbody>
	</table>

	<table id="tabla2" class="table" style="margin-top: 20px;">
	    <thead>
	    	<tr><th style="text-align: center; padding: 0px;" colspan="4">Control de Calidad</th></tr>
	    </thead>
	    <tbody>
	    	<tr style="height: 50px;"> <td></td> </tr>
		</tbody>
	</table>

	<table id="tabla2" class="table" style="margin-top: 20px;">
	    <thead>
	    	<tr><th style="text-align: center; padding: 0px;" colspan="4">Recomendaciones Tecnicas</th></tr>
	    </thead>
	    <tbody>
	    	<tr style="height: 50px;"> <td></td> </tr>
		</tbody>
	</table>
	</div>
</page>

</body>

<script>
	$(document).ready(function(){

		var NroOt = <?php echo $_GET["NroOt"]; ?> ;
		//alert( NroOt );	

		$.ajax( { method: "POST", url: "consulta.php", data : { NroOt : NroOt , funcion: 'ConsultarOt', sucursal : 'alider' }, dataType: 'json'})
		//fco exito en la consulta 
		.done(function(rs) {
			console.log( rs );//fco para ver en la consola de la web 
			if (rs ){
				if(rs.length ==0 ){
					swal({
						type: 'info',
						html: 'No existen Registros !!!' 
					});
					return ;
				}
				var valor ;
				rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
					var callid = Object.keys(rs2), id = 0 , campo , campo2 ; //fco captura los nombres de los campos 
					Object.keys(rs2).forEach(function(key) { //fco recorre los campos con sus valores 
						campo = "#" + callid[id]; 
						campo2 = "." + callid[id]; 
						id++;
						valor = rs2[key]; 
						//console.log(campo);
						if (key == 'FechaApertura' ){ 
							valor = valor.substr(0, 10); 
						} else if (key == 'FechaVenta' ){ 
							valor = valor.substr(0, 10); 
						} else if (key == 'CodigoCliente' && ( valor.indexOf('C') == 0 || valor.indexOf('c') == 0 ) ){ 
							valor = valor.substr(1, 50); 
						} else if (key == 'TipoServicio' ){ 
							if(valor == 1){ 
								valor = 'CARGO CLIENTE';
							}else if(valor == 2){ 
								valor = 'PRE-ENTREGA';
							}else if(valor == 3){ 
								valor = 'GARANTIA';
							}else if(valor == 4){ 
								valor = 'REP USADO VTA';
							}else if(valor == 5){ 
								valor = 'PROMOCION';
							}else if(valor == 6){ 
								valor = 'USO TALLER/GARDEN';//192.168.10.54/tablet/imagenes/309796.png
							}else if(valor == 7){ 
								valor = 'SERVICE EN CASA';
							} 
						} else if (key == 'TipoLlamada'){

							if(valor == 1){ 
								valor = 'SERVICE EXPRESS';
							}else if(valor == 2){ 
								valor = 'REINGRESO/RECLAMO';
							}else if(valor == 3){ 
								valor = 'SERVICIO REPARACION';
							}else if(valor == 4){ 
								valor = 'REPARACIONES MAYORES';
							}else if(valor == 5){ 
								valor = 'CLIENTE EN ESPERA';
							}else if(valor == 6){ 
								valor = 'OTROS';//192.168.10.54/tablet/imagenes/309796.png
							}else if(valor == 7){ 
								valor = 'CAMPAÑA';
							}else if(valor == 8){ 
								valor = 'PRE-ENTREGA';
							}else if(valor == 9){ 
								valor = 'GARANTIA';
							} 
							//copiar en todos 
						} else if ( key == 'Chassis'){
							ConsultarMora(valor);
							ConsultarPlanMini(valor)							
							console.log(valor);	
						}

						
						$(campo).html(valor); 
						$(campo2).html(valor.toUpperCase()); 
					}); //fco este forEach trae los datos de cada campo de la consulta php ver archivo consulta.php 
					id = 0; 
				}); 
			} 
		}); 

		var existeFile = <?php if( file_exists('imagenes/' . $_GET['NroOt'] . '.png') ){ echo 1 ;}else{ echo 0; } ?>; 
		var existeFile2 = <?php if( file_exists('imagenes/C' . $_GET['NroOt'] . '.png') ){ echo 1 ;}else{ echo 0; } ?>; 

		var fecha = new Date();
		var año  = fecha.getFullYear();
		var mes  = '0' + fecha.getMonth();
		var dia  = '0' + fecha.getDate();
		var hora = '0' + fecha.getHours();
		var minuto = '0' + fecha.getMinutes();
		var fecha2 = año +'-'+ mes.slice(-2) +'-'+ dia.slice(-2) +' '+ hora.slice(-2) +':'+ minuto.slice(-2);
		$('#FechaHora').html(fecha2);
		console.log( fecha2 );
		console.log( existeFile ); 
		console.log( existeFile2 ); 
		//detalle del vehiculo
		if ( existeFile == 1 ){
			$('.detalle_vehiculo').attr('src', 'imagenes/' + NroOt + '.png'); 
		}else {
			$('.detalle_vehiculo').attr('src', 'vehiculo5.jpeg'); 
		}
		//detalle del combustible 
		if ( existeFile2 == 1 ){
			$('.combustible').attr('src', 'imagenes/C' + NroOt + '.png'); 
		}else {
			$('.combustible').attr('src', 'combustible.png'); 
		}

/*
		console.log( 'tamaño de contenido ' + $("#contenido").height() );
		setTimeout(function(){ 
			//alert($("#contenido").height()) 
			var valor ;
			if ( $("#contenido").height() > 850 ){
				valor = $("#contenido").height() -850;
				//valor = 1195 - valor ;  //folio
				valor = 1190 - valor ; 
				$("#ticket").offset({top:valor});
			} else {
				$("#ticket").offset({top:1500});
			}

		}, 500);
				*/
	});

 //copiar en todos... 
   function ConsultarMora(chassis){ 
      var mora; 

      $.ajax( { method: "POST", url: "consulta.php", data : {vin : chassis , funcion: 'ConsultarMora' , sucursal: 'alider' }, dataType: 'json' }) 
      .done(function( rs ) { 
        if ( rs ){ 
            mora = rs[0]['mora'];
            if (mora > 0 ){
              $("#mora").css("visibility","visible");
              $("#mora").html("<span class='badge'  style='font-size:16px;'><span class='glyphicon glyphicon-bell'></span> Cliente con " + mora + " dias de Mora </span>" );

            }else {
              $("#mora").css("visibility","hidden");
              $("#mora").html("" );

            } 
            console.log(mora); 
        } 
      }); 
      /*.fail(function(jqxhr, textStatus, error) {
        console.log('error en la consulta de mora..  ' + error );
      });*/
	}

	function ConsultarPlanMini(chassis){
      chassis = chassis.slice();
      var sucu = localStorage.sucursal;
      sucu = sucu.toLowerCase(); 
      console.log('chassis para el plan mini... ', chassis);
      $.ajax( { method: "POST", url: "consulta.php", data : {vin : chassis , funcion: 'ConsultarPlanMini' , sucursal: sucu }, dataType: 'json' }) 
      .done(function( rs ) { 
        if ( rs ){ 
            if (rs.length > 0 ){
              console.log( rs[0]['planMini'] );
                console.log("datos para controlar Plan Mini...  ", rs);
				//$("#planMini").css("visibility","visible");
	            $("#planMini").html(
									"<span class='badge'  style='font-size:16px;'><span class='glyphicon glyphicon-bell'></span>Service Gratuito "+
									`${(rs[0]['vigencia'] > 12  )? '<span class="glyphicon glyphicon-remove "></span>': '<span class="glyphicon glyphicon-ok "></span>'} `+
  									rs[0]['planMini'] + " "+  rs[0]['vigencia'] + "/12 vigencia 12 meses </span>" );

            }
        }
      })
      .fail(function(jqxhr, textStatus, error) {
        console.log('error en la consulta de plan plus..  ' + error );
      });
    }

</script>	
</html>
