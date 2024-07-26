<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GARDEN AUTOMOTORES</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
	
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	
	<!--mensajes-->
	<script src="sweetalert2/dist/sweetalert2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="sweetalert2/dist/sweetalert2.min.css">
	
	<!--box steps-->
	<link rel="stylesheet" type="text/css" href="steps/steps.css">

	<!--Editor de imagenes-->
	<link rel="stylesheet" type="text/css" href="picedit/css/font.css">
	<link rel="stylesheet" type="text/css" href="picedit/css/picedit.css">

	<!--Marcador de Combustible-->
	<link rel="stylesheet" type="text/css" href="Gauges-dynameter/css/jquery.dynameter.css">
	<link rel="stylesheet" type="text/css" href="Gauges-dynameter/css/index.css">
	<link rel="stylesheet" href="Gauges-dynameter/css/jquery-ui.css">	

	<!--Tabla tree grid-->
	<link rel="stylesheet" href="jquery-treegrid/jquery.treegrid.css">	

	<!--Tabla tree grid-->
	<link rel="stylesheet" href="bootstrap-vertical-tabs/bootstrap.vertical-tabs.css">	
	
	<style>
		.text-white    { color:white;   }
		.text-rojo     { color:#d9534f; }
		.text-azul     { color:#d9534f; }
		.text-celeste  { color:#d9534f; }
		.text-verde    { color:#d9534f; }
		.text-amarillo { color:#f0ad4e; }
		//xs telefonos
		//sm tablets 
		//md desktop
		//lg large desktop 
		.negrita { 
			font-weight:bold; 
			background-color:red;
			font-size:15px;
		}

		@keyframes rotate360 { to { transform: rotate(360deg); } }
		@keyframes rotate360_2 { to { transform: rotate(-360deg); } }
		
		.fa-cogs, .fa-cog:nth-child(1), .fa-cog:nth-child(2) { animation: 8s rotate360 infinite linear; }
		.fa-cog { animation: 9s rotate360_2 infinite linear; }
		#LineaTiempo{
			//overflow-x:hidden;
		}

  .loader {
    position: absolute;
    left: 50%;
    top:  50%;
    z-index: 1;
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 20px solid #d9534f;
    border-bottom: 20px solid #d9534f;
    width: 100px;
    height: 100px;
    -webkit-animation: spin 0.8s linear infinite;
    animation: spin 0.8s linear infinite;
  }

  .loader2 {
    position: absolute;
    left: 45%;
    top:  50%;
    z-index: 1;
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 20px solid #d9534f;
    border-bottom: 20px solid #d9534f;
    width: 50px;
    height: 50px;
    -webkit-animation: spin 0.8s linear infinite;
    animation: spin 0.8s linear infinite;
  }

  @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }

  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  
	</style>
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
 <!-- <body class="sidebar-mini skin-red fixed sidebar-collapse" onbeforeunload="return '' ">  este evento onbeforeunload evita recargar la pagina fco --> 
  <body class="sidebar-mini skin-red fixed sidebar-collapse" >
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>GT</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>GARDEN AUTOMOTORES</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
		  
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Usuario</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Usuario
                      <small>Consulta Estado</small>
                    </p>
                  </li>
				  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Bloquear</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Salir</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding:5px;">
         <!--fco se comento  <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> ABM</a></li>
            <li class="active">Nuevo</li>
          </ol>
        </section>  -->
		
        <!-- Main content -->
        <section class="content" style="padding:0px;" id="contenedor">
          <!-- Your Page Content Here -->

			<div class="col-md-0">
				<div class="box box-primary">
					<div class="box-header with-border">


					
						<div class="col-md-0 pull-left" ><h3><i class="fa fa-university text-red" style="font-size:36px;" pull-left></i>&nbsp;&nbsp;CONTROL DE INCENTIVOS</h3></div>
					</div>
					<form class="form-horizontal" id="form1" action="insertar.php" method="post" data-toggle="validator" >
						<div class="box-body">
							<div class="row">

								<div class="col-md-12">
								<div class="box box-success box-solid">
									<div class="box-body">	
										<h4 class="box-title"><i class="fa fa-gear text-green"></i>&nbsp;&nbsp;Registros:</h4>

                    <div class="form-group"> 
                      <div class="col-sm-12"><label class=" control-label">VIN:</label></div>
                      <div class="col-sm-12">
                        <div class="input-group">
                          <div class="input-group-btn"><button type="button" class="btn btn-warning" ><i class="fa fa-search-plus"></i></button>></div>
                          <input type="text" id="vin" name="vin" class="form-control " placeholder="" >
                        </div>
                        <span id="help1" class="label label-danger"></span>
                      </div>
                     
                    </div> 

                    <div class="col-md-0 pull-left" >
                      <a class="btn btn-app bg-red" onclick="Cancelar()" ><i class="fa fa-refresh"></i>Cancelar</a>
                      <a class="btn btn-app bg-green" onclick="Consultar()" ><i class="fa fa-search-plus"></i>Consultar</a>
                    </div>
                    <div class="col-md-4 pull-left" style="text-align: center;" id="mensaje"></div>
									</div>
								</div>	
								</div>

							</div>
							<div class="box box-danger box-solid">
								<div class="box-body table-responsive no-padding">	
									<h4><i class="fa fa-wrench text-red"></i>&nbsp;&nbsp;Resultado:</h4>
                  <table class="table table-hover" id="resultados">
                  </table>
								</div>	
							</div>	
							
						</div>
						<div class="box-footer">
						</div>
						
					</form>
				</div>
		  </div>
		  
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
	  
	  <div id="impresion" style="display:none; visibility:hidden;">
		<center>
		 <table style="border:1px solid black; border-collapse: collapse;">
			<caption style="background-color:#eee;">ESTADO DE CUENTA CLIENTE</caption>
			<thead style="border:1px solid black; border-collapse: collapse; height:30px; text-align:center;">
			  <tr>
				<th style="border:1px solid black; border-collapse: collapse; height:30px; text-align:center;">DOCUMENTO</th>
				<th style="border:1px solid black; border-collapse: collapse; height:30px; text-align:center;">CLIENTE</th>
				<th style="border:1px solid black; border-collapse: collapse; height:30px; text-align:center;">VIN</th>
				<th style="border:1px solid black; border-collapse: collapse; height:30px; text-align:center;">VEHICULO</th>
				<th style="border:1px solid black; border-collapse: collapse; height:30px; text-align:center;">ESTADO</th>
			  </tr>
			</thead>
			<tbody style="border:1px solid black; border-collapse: collapse; height:50px;">
			  <tr id="datos-impresion">
			  </tr>
			</tbody>
		  </table>	  
		</center> 
	  </div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

    <!-- Jquery Mobile -->
    <!--<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.js"></script>    -->
    <!--<script src="jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>-->

	<!--Editor imagenes -->	
	<script src="picedit/js/picedit.js"></script>
	<script src="jqScribble/jquery.jqscribble.js"></script>
	<script src="jqScribble/jqscribble.extrabrushes.js"></script>

	<!--skecth editor de imagenes-->
	<script src="picedit/js/sketch.js"></script>

	<!--convertidor de imagenes-->
	<script src="canvas2image/canvas2image.js"></script>
	<script src="canvas2image/html2canvas.js"></script>

	<!--Marcador de combustible-->
	<script src="Gauges-dynameter/js/jquery.dynameter.js"></script>
	<script src="Gauges-dynameter/js/jquery-ui.min.js"></script>	
	<script src="jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
	<script src="jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!--tabla treee grid-->
	<script src="jquery-treegrid/jquery.treegrid.bootstrap2.js"></script>
	<script src="jquery-treegrid/jquery.treegrid.bootstrap3.js"></script>
	<script src="jquery-treegrid/jquery.treegrid.js"></script>
	<script src="jquery-treegrid/jquery.treegrid.min.js"></script>

	
	<script type="text/javascript">
    $(document).ready(function(){
        $('#MenuMain ').load("menu.html " , function(){
            console.log("se agrego el menu principal..");
        });
    });

    function  Cancelar(){
      $("#resultados").html(''); 
      $("#mensaje").html('');
      $("#vin").val('');
      $("#vin-nombre").val('');
      $("#cliente").val('');
      $("#cliente-nombre").val('');
      $("#vin").focus();
    }

    function Consultar() {

      $("#resultados").html('');          
      // $( "#help1" ).text( "Ingrese algun valor !!!" ).show().fadeOut( 5000 );

      $("#mensaje").html('');
      $("#contenedor").append('<center><div class="loader"><i class="fa fa-futbol-o text-danger" aria-hidden="true" style="margin-top:30%; font-size:20px;"></i></div></center>');
        if ( $.trim( $( "#vin").val()) === "" ) {
          $( "#help1" ).text( "Ingrese algun valor !!!" ).show().fadeOut( 5000 );
          //$( "#help2" ).text( "Ingrese algun valor !!!" ).show().fadeOut( 5000 );
          $("#contenedor").find("center").remove();
          return;
        }


        var vehiculo = $("#vin").val();
        $.ajax( { method: "POST", url: "consulta.php", data : {vin: vehiculo , funcion: 'ventausados' }, dataType: 'json'})
        //fco exito en la consulta 
        .done(function(rs) {
          var body = '<tbody>';
          var head = '<thead><tr style="background-color:#d9534f; color:white;">';  
          console.log(rs);
          if ( rs == null ) {
            $("#contenedor").find("center").remove();
/*
            swal({
              type: 'warning',
              html: 'Cliente sin mora !!! '
            });
            $("#mensaje").html('<div style="cursor:pointer;" class="callout callout-success" onclick="ImprimirConstancia(0)"><h4><i class=" icon fa fa-user"></i> Cliente sin Mora &nbsp;&nbsp;&nbsp;&nbsp; <i class="icon fa fa-print pull-right"> Imprimir...</i></h4> </div>'); 
*/   

            return ;
          }
          var bandera = 0 ;  
          rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
              columnas = Object.keys(rs2); //fco captura las columnas 
              body += '<tr>'; //fco este comando es el standar se personalizo el codigo 
              Object.keys(rs2).forEach(function(key) {  //fco recorre los campos con sus valores 

                  body += '<td>' + rs2[key] + '</td>'; 

/*
                  if(key == 'MORA' && rs2[key] > 0 && bandera == 0 ){ 
                    $("#mensaje").html('<div class="callout callout-danger" onclick="ImprimirConstancia(1)"><h4><i class=" icon fa fa-user"></i> Cliente con Mora &nbsp;&nbsp;&nbsp;&nbsp; <i class="icon fa fa-print pull-right"> Imprimir...</i></h4></div>'); 
                    bandera = 1 
                  }else if (bandera == 0 ) { 
                    $("#mensaje").html('<div class="callout callout-success" onclick="ImprimirConstancia(0)"><h4><i class=" icon fa fa-user"></i> Cliente sin Mora &nbsp;&nbsp;&nbsp;&nbsp; <i class="icon fa fa-print pull-right"> Imprimir...</i></h4></div>'); 
                  }
*/

              }); 
                body += '</tr>';
           }); 

           columnas.forEach( function ( col ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
            head += '<th style="border: 1px solid white;text-align: center">' + col + '</th>';
            //console.log( head);
          });
           head += '</tr></thead>';

          $("#resultados").html( head + body);
            // console.log(tabla); 
            //console.log( rs );//fco para ver en la consola de la web 
          if (rs ){
            //fco consulta automatizada se debe poner el mismo nombre del form como los campos del sql para que funcione auto 
            //console.log( rs );
          } 
          else{ //fco no existen registros !!! 
            console.log("no trae nada"); 
          } 
          $("#contenedor").find("center").remove(); 
        }) 
        //fco Error en la consulta 
        .fail(function(jqxhr, textStatus, error) { 
          var err = textStatus + ", " + error ; 
          console.log( "Error Ajax: " + err ); //fco para ver en la consola de la web 
          $("#contenedor").find("center").remove(); 

        }); 
    }

    function ConsultarVin(evento){
      var titulo = '';
      if (evento == 1 ){ titulo = 'Vehiculo (VIN)' }else{ titulo = 'Cliente (CI)' }
      swal({
        title: 'Buscar ' +titulo+  ' ',
        html:  '<div class="row input-lg">'+
               '    <input class="form-control" type="text" placeholder="Enter..." id="BuscarVin" style="width:100%; height:100%;" onchange="MostrarVin(' + evento + ');" >'+
               '</div>'+
               //'<button type="button" class="btn btn-success btn-md btn-block" onclick="MostrarVin('+ evento +')">Buscar</button>'+
               '<div class="box">'+
               ' <div class="panel panel-default" style="font-size:12px; text-align:left;">'+
               '<table class="table table-hover" id="res-buscador"></table>'+
               '</div>'+
               '<div class="container" id="loader"></div>'+
               '</div>',
        showCancelButton: true,
        showConfirmButton: false,
        showLoaderOnConfirm: true,
        allowOutsideClick: false, 
        width:700
      });

    }

    function MostrarVin(evento){
      $("#loader").append('<center><div class="loader2"></div></center>');
      var vehiculo = '';
      var cliente  = '';

      if ( evento == 1 ){
        vehiculo = $("#BuscarVin").val();
        cliente  = '';
      }else {
        vehiculo = '';
        cliente  = $("#BuscarVin").val();
      }
      $.ajax( { method: "POST", url: "consulta.php", data : {cliente : cliente , vehiculo: vehiculo , funcion: 'MostrarVin' }, dataType: 'json'})
      //fco exito en la consulta 
      .done(function(rs) {

          var body = '<tbody>';
          var head = '<thead><tr style="background-color:#d9534f; color:white;">';  
          console.log(rs);
          if ( rs == null ) {
            $("#loader").find("center").remove();
            swal({
              type: 'warning',
              html: 'No existen Datos !!! '
            });
            return ;
          }

          rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
              columnas = Object.keys(rs2); //fco captura las columnas 
              body += '<tr onclick="AsignarVin(&#39;' + rs2["CLIENTE"] +'&#39; , &#39;'+ rs2["RUC"] +'&#39; , &#39;'+ rs2["VIN"] +'&#39; , &#39;'+ rs2["VEHICULO"]+ '&#39; )">'; //fco este comando es el standar se personalizo el codigo 
              Object.keys(rs2).forEach(function(key) {  //fco recorre los campos con sus valores 
                body += '<td>' + rs2[key] + '</td>'; 
              }); 
              body += '</tr>';
           }); 

          columnas.forEach( function ( col ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
            head += '<th style="border: 1px solid white;text-align: center">' + col + '</th>';
          });
          head += '</tr></thead>';

          $("#res-buscador").html( head + body);
          $("#loader").find("center").remove();
      });  

    }
    function AsignarVin(cliente , ruc , vin , vehiculo){
      $("#vin").val(vin);
      $("#vin-nombre").val(vehiculo);
      $("#cliente").val(ruc);
      $("#cliente-nombre").val(cliente);
      swal({
          title: 'Seleccion:',
          html: '<div class="container" style="text-align:left;"><kbd>Cliente: </kbd>  ' + cliente + '<br><br> <kbd>Vehiculo:</kbd> ' + vin + ' - ' + vehiculo + '</div>',
          width:700
        })
    }
	
	function ImprimirConstancia(valor){
		/*
			0 - sin mora 
			1 - con mora 
			
		*/
		var vin = $('#vin').val();
		var vehiculo = $('#vin-nombre').val();
		var documento = $('#cliente').val();
		var cliente = $('#cliente-nombre').val();
		var estado = ""
		if (valor == 0 ){
			estado = 'SIN MORA  ';
		}else {
			estado = 'CON MORA  ';
		}
		$('#datos-impresion').html(
									'<td style="border:1px solid black; border-collapse: collapse; height:30px; text-align:center;">'+ documento +'</td>' 
									+'<td style="border:1px solid black; border-collapse: collapse; height:30px; text-align:center;">'+ cliente +'</td>'
									+'<td style="border:1px solid black; border-collapse: collapse; height:30px; text-align:center;">'+ vin +'</td>' 
									+'<td style="border:1px solid black; border-collapse: collapse; height:30px; text-align:center;">'+ vehiculo +'</td>' 
									+'<td style="border:1px solid black; border-collapse: collapse; height:30px; text-align:center;">'+ estado +'</td>'
									);
		var impresion = $('#impresion').html();
		
		var myWindow = window.open("", "myWindow", "width=800,height=600");
		myWindow.document.write( '<br><br>' + impresion );
		myWindow.print();
	}

</script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
