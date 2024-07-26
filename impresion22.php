<!DOCTYPE html>
<html lang="en">
<head>
  <title>Impresion OT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"> 

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
<body onload="">
<page size="Folio">
<div class="container-fluid" style="margin:10px; position: relative;">
        <div class="row"> 
        	<div class="col-xs-3 text-left"> 
		  		<div style="border: 2px solid black; border-radius: 5px; margin-top: 10px; min-width: 200px; min-height: 80px;"><center><h3><strong><span id="TipoServicio">CARGO CLIENTE</span></strong> </h3></center></div> 
            </div> 
        	<div class="col-xs-6 text-center"> 
            <br> 
		  		<h2 style="margin:0px;">Garden Automotores S.A.</h2> 
                <p style="font-size:10px;">Republica Argentina c/ Facundo Machain Tel.: (+595 21)237-7888 <br> 
                recepcionservice@garden.com.py - Asuncion Paraguay </p> 
                
            </div> 
        	<div class="col-xs-3 text-right" style="padding-top: 10px;"> 
		  		<span > <?php echo date("Y-m-d H:i"); ?> </span>
		  		<h4><strong>TIPO SERVICIO</strong> </h4> 
		  		<h5><strong><span id="TipoLlamada"></span></strong></h5>
            </div> 
        </div> 

        <!-- copiar en todos -->
        <div class="row" style="margin-bottom: 5px;">
        	<div class="col-xs-12 text-right"> <span style="" id="mora"></span> </div>	
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
      		<span style="margin-right: 20px;"><strong>Fecha Promesa  : </strong> <span id="FechaPrometida"></span></span>
      		<span style="margin-right: 20px;"><strong>Fecha Venta    : </strong> <span id="FechaVenta"></span></span>
      		<span style="margin-right: 20px;"><strong>Cono: </strong><span id="Identificador"></span> </span>
      		<p style="margin-bottom: 0px;">
	      		<span style="margin-right: 20px;"><strong>Nro Documento: </strong><span id="NroDocumento"></span> </span>
	      		<!--<span style="margin-right: 20px;"><strong>Nro OT: </strong><span id="NroOt"></span> </span>-->
	      		<span style="margin-right: 20px;"><strong>ASESOR: </strong><span id="Asesor"></span> </span>
	      		<span style="margin-right: 20px;"><strong>CONTACTO CLIENTE: </strong><span id="contacto_cliente"></span> </span>
      		</p>
      	</td>
      </tr>
      <tr class="text-center"  style="background-color:#eee !important;"> 
		<td colspan="2" ><strong>CLIENTE<strong></td> 
		<td colspan="2"><strong>VEHICULO</strong></td> 
	  </tr>
      <tr> 
		<td style="width:5%;"><strong>Nombre:</strong> </td> <td style="width:40%; font-size: 12px;" id="NombreCliente">Juan Pueblo</td>   
		<td style="width:2%;"><strong>Chassis:</strong> </td> <td style="width:40%; font-size: 12px;" id="Chassis">ABC123456</td> 
	  </tr>
      <tr> 
		<td><strong>Direccion:</strong> </td> <td id="Direccion" style=" font-size: 12px;">Rca Argentina c/Facundo Machain</td>   
		<td><strong>Marca:</strong> </td> <td id="Marca" style=" font-size: 12px;">KIA   </td> 
	  </tr>
      <tr> 
		<td><strong>Telefono: </strong> </td> <td id="Telefono" style=" font-size: 12px;">0981 123 123</td> 
		<td><strong>Modelo:</strong>     </td> <td id="Modelo" style=" font-size: 12px;">KIA PICANTO </td> 
	  </tr>
      <tr> 
		<td><strong>Ruc / Ci: </strong> </td> <td id="CodigoCliente" style=" font-size: 12px;">3216541</td> 
		<td><strong>KM:</strong>    </td> <td id="Kilometraje" style=" font-size: 12px;">25000  </td> 
	  </tr>
      <tr>
      	<td></td>
      	<td></td>
      	<td><strong>Chapa:</strong> </td>
      	<td id="Chapa" style=" font-size: 12px;">ABC123 </td>
      </tr>	
      <tr>
      	<td></td>
      	<td></td>
      	<td><strong>Color:</strong> </td>
      	<td id="Color" style=" font-size: 12px;">rojo </td>
      </tr>
      <tr style="background-color:#eee !important;"> <td colspan="4"><strong> COMENTARIO</strong></td> </tr>
      <tr> <td colspan="4"  style="height: 40px; max-height: 40px; text-align: justify margin: 0px; position: relative; overflow: hidden;"> 
      			<p id="PedidoCliente" style="font-size:11px; margin:0px; position: absolute; top:-2px;"></p> 
      		</td> </tr>

	  <tr style="background-color:#eee !important;"> <td colspan="4"><strong> MOTIVO</strong></td> </tr>
      <tr> <td colspan="4" style="height: 40px; max-height: 40px; position: relative; overflow: hidden"> 
      			<p id="Motivo" style="font-size:11px; margin:0px; position: absolute; top:-2px;"></p> 

      </td> </tr>

	  <tr style="background-color:#eee !important;"> <td colspan="4"><strong> OBSERVACIONES</strong></td> </tr>
      <tr> <td colspan="4" style="height: 35px; max-height: 30px; position: relative; overflow: hidden">
      			<p id="Accesorios" style="font-size:12px; margin:0px; position: relative; top:-1px;"></p> 
       </td> </tr>
      
	  <tr style="background-color:#eee !important;" class="text-center"><td colspan="4"><strong> DETALLE DEL VEHICULO</strong></td> </tr>
	  <tr style="background-color:#eee !important;"> <td colspan="2"><strong> ACCESORIOS</strong></td> <td colspan="1"><strong> COMBUSTIBLE</strong></td> <td colspan="1"><strong> DETALLE EXTERNO</strong></td></tr>
      <tr> 
      		<td colspan="2" style="width:10%;" id="list-accesorios"></td>  
      		<td colspan="1" rowspan="6" style="width:20%;">
				<center>
					<div id="fuelMeterDiv" class="dm-wrapperDiv"><div class="dm-bgClrDiv normal" style="transform: rotate(10deg); z-index: 3;"></div><div class="dm-bgClrDiv warn" style="transform: rotate(7deg); z-index: 2;"></div><div class="dm-bgClrDiv error" style="transform: rotate(0deg); z-index: 1;"></div><div class="dm-maskDiv" style="transform: rotate(0deg);"></div><div class="dm-innerDiv"><p class="dm-valueP Combustible">0</p><p class="dm-unitP">%</p><p class="dm-labelP">Combustible</p></div></div>					
				</center>
			</td> 
			<td colspan="1" rowspan="6" style="width:40%;">
      			<center><img src="vehiculo2.png" class="img-rounded detalle_vehiculo" alt="Cinque Terre" width="100%" height="100%"> </center>
      		</td>
      </tr>
      <tr><td colspan="2" style="width:10%;"> </td></tr>
      <tr><td colspan="2" style="width:10%;"> </td></tr>
      <tr><td colspan="2" style="width:10%;"> </td></tr>
      <tr><td colspan="2" style="width:10%;"> </td></tr>
      <tr><td colspan="2" style="width:10%;"> </td></tr>

	  <tr style="background-color:#eee !important;" class="text-center"> <td colspan="4"><strong> AUTORIZACION</strong></td></tr>
	  <tr> <td colspan="4" style="width:20%; text-align: justify"> <p style="font-size:10px; margin:0px; position: relative;">Autorizo al Dpto. de Servicios de Garden Automotores SA a realizar los trabajos apuntados mas arriba. Asi mismo a la provision de los repuestos y materiales que sean necesarios; las piezas sustituidas en las reparaciones estaran a disposicion hasta el momento del retiro del vehiculo. Autorizo tambien a las pruebas del vehiculo fuera del taller en las calles y rutas para garantizar los trabajos realizados. Garden Automotores SA tendra derecho a cobrar 15.000 GS por dia en concepto de estacionamiento y seguro a partir de las 24 horas de la fecha de notificacion para el retiro del vehiculo. La empresa no se responsabiliza por los objetos de valor dejados dentro del vehiculo. En caso de incumplimiento de pago por los servicios contratados, el presente instrumento se constituye en título ejecutivo, de conformidad a los artículos 439 y 448, inciso b) del C.P.C. 
	  En caso de retiro de repuestos sustitutos, manifiesto asumir responsabilidad respecto a su destino, disposición y uso comprometiéndome a dar cumplimiento a disposiciones legales y/o normativas que regulen la utilización de los mismos</p> </td></tr>
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

  <table style="width:100%; margin-top:67px; position: relative;" id="ticket">
	<tbody>
	  <tr style="background-color:#eee !important;" class="text-center"> <td colspan="10"><strong> TICKET </strong></td> </tr>
      <tr class="text-center"  style="background-color:#eee !important;"> <td colspan="8" ><strong> CONFORMIDAD CLIENTE<strong></td> <td colspan="2"><strong>VEHICULO</strong></td> </tr>
      <tr> <td colspan="8" rowspan="2" style="width:60%;"> 
				<strong><p style="margin-bottom:0px; text-align: center;"> Garden Automotores S.A.</p></strong> 
				<p id="sucu-direccion" style="font-size:10px;margin-bottom:0px; text-align: center;">Republica Argentina c/ Facundo Machain Tel.: (+595 21)237-7888 <br> recepcionservice@garden.com.py - Asuncion Paraguay </p>
				<p style="margin-bottom:0px; float: clear;font-size: 11px;"><strong> ADVERTENCIA</p></strong> 
				<p style="font-size:9px;margin-bottom:0px;"> * Para mantener el turno en el taller el presupuesto debera ser aceptado entre las 48 hs. </p>
				<p style="font-size:9px;margin-bottom:0px;"> * Horario de Atencion del Dpto. de Servicios de 07:30 a 18:00 hs de Lunes a Viernes Sabado de 07:30 a 12:00 hs. </p>
				<p style="font-size:9px;margin-bottom:0px;"> * La empresa no se responsabiliza por los objetos de valor dejados dentro del vehiculo. </p>
				<p style="font-size:9px;margin-bottom:0px;"> * El ticket sera requerido para el retiro del vehiculo. </p> 
				<p style="font-size:9px;margin-bottom:0px;"> * Sugierenos su inquietud para mejorar aun mas nuestros servicios. </p> 
				<p style="font-size:9px;margin-bottom:0px;"><b> * Apreciado cliente, el retiro de las piezas usadas reemplazadas es una garantía de la realización de trabajos. No olvide solicitar las mismas a su asesor de servicios <b></p> 
				<p style="font-size:9px;margin-bottom:0px;"> * Estimado cliente, es nuestra obligación informarle permanentemente el estado de los servicios solicitados. Su asesor de servicios debe proveerle evidencias audiovisuales vía WhatsApp para garantizar la transparencia de nuestros trabajos </p> 
				
				
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
			<td colspan="2" ><p style="margin:0px; margin-bottom: 8px; text-align: center; font-size: 20px;"> NRO SERVICIO: &nbsp;<span id="NroOt2">0029246</span></p>
<p style="margin-bottom:0px; font-size: 13px; text-align: center; font-weight: bold;"><span class="glyphicon glyphicon-user"></span> ASESOR : <span class="Asesor2"></span></p> 
			</td>
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

		$.ajax( { method: "POST", url: "consulta.php", data : { NroOt : NroOt , funcion: 'ConsultarOt' }, dataType: 'json'})
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

						if ( rs2['sucursal'] == 'VICTORIA') {
							$("#sucu-direccion").html('Avda. Fernando de la Mora y De la Victoria Tel: (021) 237-7095 <br> kiarecepcionservice@garden.com.py   Asuncion - Paraguay');
						}

						if (key == 'Accesorios') {
							var accesorio = rs2['Accesorios'];
							var i = 0 ;
							while( i <= accesorio.length ){
								
							}
						}

						//copiar en todos 
						} else if ( key == 'Chassis'){
							ConsultarMora(valor.slice(-8));
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
			$('.detalle_vehiculo').attr('src', 'vehiculo2.png'); 
		}
		//detalle del combustible 
		if ( existeFile2 == 1 ){
			$('.combustible').attr('src', 'imagenes/C' + NroOt + '.png'); 
		}else {
			$('.combustible').attr('src', 'combustible.png'); 
		}

		console.log( 'tamaño de contenido ' + $("#contenido").height() );

/*

		var valor ;
		if ( $("#contenido").height() > 740 ){
			valor = $("#contenido").height() -740 ;
			//valor = 1195 - valor ;  //folio
			valor = 1180 - valor ; 
			$("#ticket").offset({top:valor}) ;
		} else {
			$("#ticket").offset({top:1115});
		}
		
		console.log(valor);
		//$("#ticket").offset({top:1180});
		$("#ticket").offset({top: valor});

*/
	});	


//copiar en todos... 
   function ConsultarMora(chassis){ 
      var mora; 

      $.ajax( { method: "POST", url: "consulta.php", data : {vin : chassis , funcion: 'ConsultarMora' , sucursal: '' }, dataType: 'json' }) 
      .done(function( rs ) { 
        if ( rs ){ 
            mora = rs[0]['mora'];
            if (mora > 0 ){
              $("#mora").css("visibility","visible");
              $("#mora").html("<span class='badge'  style='font-size:16px;'><span class='glyphicon glyphicon-bell'></span> Cliente con " + mora + " dias de Mora </span>" );

            }else {
	          $("#mora").css("visibility","visible");
	          //$("#mora").css("background-color","#00a65a");
	          $("#mora").html("<span class='badge'  style='font-size:16px;'><span class='glyphicon glyphicon-ok'></span>  Cliente al Dia ! </span>" );

            } 
            console.log(mora); 
        } else {
          $("#mora").css("visibility","visible");
          //$("#mora").css("background-color","#00a65a");
          $("#mora").html("<span class='badge'  style='font-size:16px;'><span class='glyphicon glyphicon-ok'></span>  Cliente al Dia ! </span>" );

        }
      }) 
      .fail(function(jqxhr, textStatus, error) {
        console.log('error en la consulta de mora..  ' + error );
	      $("#mora").css("visibility","visible");
	      //$("#mora").css("background-color","#00a65a");
	      $("#mora").html("<span class='badge'  style='font-size:16px;'><span class='glyphicon glyphicon-ok'></span>  Cliente al Dia ! </span>" );

      });
      
    }

</script>	
</html>
