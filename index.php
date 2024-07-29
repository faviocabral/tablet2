<?php  
  function get_ip(){
    //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
      {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
      }
    //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
      {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
    //whether ip is from remote address
    else
      {
        $ip_address = $_SERVER['REMOTE_ADDR'];
      }
    echo $ip_address;
  }
/*
$input = "mistersapo";
$encrypted = encryptIt( $input );
$decrypted = decryptIt( $encrypted );

//echo $encrypted . ' ' . $decrypted;

function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}

*/

?>

<!DOCTYPE html> 
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="mobile-web-app-capable" content="yes"> 
    <meta name="viewport" content="width=device-width, user-scalable=no" /> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 

    <title>GOROSTIAGA</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> 
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css"> 
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
	<link type="text/css" href="sweetalert2/dist/sweetalert2.min.css" rel="stylesheet"> 
	
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

  <link rel="stylesheet" href="plugins/toast/toastr.min.css">

  <link rel="stylesheet" href="plugins/material-date-time-picker/bootstrap-material-datetimepicker.css">



	
	<style>
		.text-white    { color:white;   }
		.text-rojo     { color:#d9534f; }
		.text-azul     { color:#d9534f; }
		.text-celeste  { color:#d9534f; }
		.text-verde    { color:#d9534f; }
		.text-amarillo { color:#f0ad4e; }

    .borde-rojo     {  border:3px solid #d9534f; }

		/*xs telefonos*/
		/*sm tablets  */
		/* md desktop */
		/* lg large desktop */
		.negrita { 
			font-weight:bold; 
			background-color:red;
			font-size:15px;
		}

		@keyframes rotate360 { to { transform: rotate(360deg); } }
		@keyframes rotate360_2 { to { transform: rotate(-360deg); } }
		
		.fa-cogs, .fa-cog:nth-child(1), .fa-cog:nth-child(2) { animation: 8s rotate360 infinite linear; }
		.fa-cog { animation: 9s rotate360_2 infinite linear; }

.thumb {
    height: 75px;
    border: 1px solid #777;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin: 10px 5px 0 0;
  }

/*para modificar el calendario de fecha prometida */
.dtp > .dtp-content {
  max-width:450px;
  max-height:700px;
}

.dtp{
  font-size:18px;
}

/*fin calendario fecha prometida */
#PlanPlus3::-webkit-scrollbar {
  display: none;
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
  <body class="sidebar-mini skin-red sidebar-collapse" >
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>GT</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>GOROSTIAGA</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">1</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">1 Mensajes</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <!-- User Image -->
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>
                            Soporte
                            <small><i class="fa fa-clock-o"></i> 1 dia</small>
                          </h4>
                          <!-- The message -->
                          <p>Teclado no funciona ?</p>
                        </a>
                      </li><!-- end message -->
                    </ul><!-- /.menu -->
                  </li>
                  <li class="footer"><a href="#">Ver todos</a></li>
                </ul>
              </li><!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">1</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">10 Notificaciones</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 2 Actualizaciones del sistema
                        </a>
                      </li><!-- end notification -->
                    </ul>
                  </li>
                  <li class="footer"><a href="#">Ver todos</a></li>
                </ul>
              </li>
              <!-- Tasks Menu -->
              <li class="dropdown tasks-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">1</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">1 Tareas</li>
                  <li>
                    <!-- Inner menu: contains the tasks -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <!-- Task title and progress text -->
                          <h3>
                            Llamar cliente
                            <small class="pull-right">0%</small>
                          </h3>
                          <!-- The progress bar -->
                          <div class="progress xs">
                            <!-- Change the css width attribute to simulate progress -->
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">0% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">Ver todos los pendientes</a>
                  </li>
                </ul>
              </li>
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Asesor 1</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    <p>
                      Asesor 1
                      <small>Asesor Servicios</small>
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
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" id="MenuMain">

        </section>
        <!-- /.sidebar -->
      </aside>

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
        <section class="content" style="padding:0px;">

          <!-- Your Page Content Here -->
      <div class="col-md-0"> 
        <div class="box" style="margin-bottom:5px;"> 
        <center>
            <div class="btn-group btn-group-justified" style="height: 80px;">
              <a href="#" class="btn btn-danger" style="font-size: 30px;" onclick="setSucursal(this)" id="servicio" base="agenda2" name="servicio"><strong>SUCURSAL 1</strong></a>
              <!-- <a href="#" class="btn btn-default" onclick="setSucursal(this)" id="MPY" base="mpy" name ="MPY"><strong>MPY</strong></a> -->
            </div> 
          </center>
        </div> 
      </div> 

			<div class="col-md-0">
				<div class="box" style="margin-bottom:5px;">
						<!-- inicio del setp -->
						<br>
						<div class="col-md-0" id="LineaTiempo">
							<center><h3><i style="position:relative;"><i class="fa fa-cog" aria-hidden="true" style="font-size:18px; position:relative; top:6px; left:3px;"></i><i class="fa fa-cog" aria-hidden="true" style="font-size:18px; position:absolute; top:-5px; left:3px;"></i><i class="fa fa-cog" aria-hidden="true" style="font-size:30px;"></i></i>&nbsp;ESTATUS OT</h3></center><br>

              <div class="container-fluid" style="padding-left: 1px; padding-right: 1px; margin-right:5px; margin-left:5px; ">
                <div class="progress" style="height:50px; width:100% ;">
                <!-- Ejemplo de listo 
                  <div class="progress-bar progress-bar-info" role="progressbar" style="width:33%" onclick="swal('Esta en el Proceso de Recepcion ','','info');">Recepcion<h3 style="margin-top:1px;"><span class="glyphicon glyphicon-ok"></span></h3></div>
                --> 

                <!-- ejemplo de en proceso 
                  <div class="progress-bar " role="progressbar" style="width:0.5%; background-color:white;"></div>
                  <div class="progress-bar progress-bar-success active" role="progressbar" style="width:25%">Taller<h3 style="margin-top:1px;"><span class="glyphicon glyphicon-cog" style=" animation: 9s rotate360 infinite linear;"></span></h3></div>
                -->
                  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:25%">Recepcion<h3 style="margin-top:1px;" onclick="swal('En Proceso ','','info');"><span class="glyphicon glyphicon-cog" style=" animation: 9s rotate360 infinite linear;"></span></h3></div>

                  <div class="progress-bar " role="progressbar" style="width:0.5%; background-color:white;"></div>
                  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%">Taller<h3 style="margin-top:1px;"><span class="glyphicon glyphicon-exclamation-sign" ></span></h3></div>
                  <div class="progress-bar " role="progressbar" style="width:0.5%; background-color:white;"></div>
                  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%">Lavado<h3 style="margin-top:1px;"><span class="glyphicon glyphicon-exclamation-sign" ></span></h3></div>
                  <div class="progress-bar " role="progressbar" style="width:0.5%; background-color:white;"></div>
                  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:23.5%">Listo<h3 style="margin-top:1px;"><span class="glyphicon glyphicon-exclamation-sign" ></span></h3></div>

                </div>
              </div>

				</div>
			</div>


      <div class="col-md-0">
        <div class="box box-primary">
          <div class="box-header with-border">
            <div id="BoxAsesor" class="container-fluid" onclick="Asesor()"><center><h1 style="margin-top: 1px;"><i class="fa fa-user"></i><strong><p id="Asesor" codigo="0">Asesor ?</p></strong></h1></center></div>
          </div>  
        </div>      
      </div>	

			<div class="col-md-0">
				<div class="box box-primary">
					<div class="box-header with-border">

            <div class="col-md-0 pull-right" >

              <a class="btn btn-app" onclick="ConsultarTurnos()" ><i class="fa fa-calendar"></i>Turnos</a>
              <a class="btn btn-app" id="NuevaOrden" onclick="NuevaOrden()" ><i class="fa fa-plus-circle"></i>Nuevo</a>
              <a class="btn btn-app" onclick="ConsultarOt()" ><i class="fa fa-search-plus"></i>Consultar</a>
              <a class="btn btn-app" onclick="ImprimirOt()" ><i class="fa fa-print"></i>Imprimir OT</a>
              <a class="btn btn-app" onclick="SacarFotos()" accept="image/*" type="fyle" ><i class="fa fa-camera"></i>Fotos</a>

            </div>

					
						<div class="col-md-0 pull-left" ><h3><i class="fa fa-car text-red" style="font-size:36px;" pull-left></i>&nbsp;&nbsp;LLAMADA SERVICIOS</h3></div>
					</div>
					<form class="form-horizontal" id="form1" action="" data-toggle="validator" >
						<div class="box-body">
							<div class="row">
								<div class="col-md-3">
								<div class="box box-success box-solid">
									<div class="box-body">	
										<h4 class="box-title"><i class="fa fa-gear text-green"></i>&nbsp;&nbsp;OT: &nbsp;&nbsp;&nbsp;<span id="campanha" onclick="Campaña('')"></span></h4>
										<div class="form-group "> <div class="col-sm-12"><label class=" control-label">Nro LLamada:</label></div> <div class="col-sm-12"><input type="text" id="NroLlamada"  name="NroLlamada" class="form-control lock" placeholder="" ></div></div>
										<div class="form-group "> <div class="col-sm-12"><label class=" control-label">Nro Documento:</label></div> <div class="col-sm-12"><input type="text" id="NroDocumento"  name="NroDocumento" class="form-control lock" placeholder="" ></div></div>
                    <div class="form-group"> <div class="col-sm-12"><label class=" control-label">Nro de OT:</label></div> <div class="col-sm-12"><input type="number" id="NroOt" name="NroOt" class="form-control " placeholder="" value = "0"></div></div>

										<div class="form-group"> 
											<div class="col-sm-12"><label class=" control-label">Fechas:</label></div>	
											<div class="col-sm-12"> <div class="input-group"><div class="input-group-btn"> <button type="button" class="btn btn-info"><i class="fa fa-calendar">&nbsp;Venta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></button> </div> <input type="text" id="FechaVenta" class="form-control lock" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask=""  placeholder="DD/MM/YYYY HH:SS"> </div></div>
											<div class="col-sm-12"> <div class="input-group"><div class="input-group-btn"> <button type="button" class="btn btn-success"><i class="fa fa-calendar">&nbsp;Apertura</i></button> </div> <input type="text" id="FechaApertura" name="FechaApertura" class="form-control lock" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask=""  placeholder="DD/MM/YYYY HH:SS"> </div></div>
                      <div class="col-sm-12"> <div class="input-group"><div class="input-group-btn"> <button type="button" class="btn btn-danger"><i class="fa fa-calendar">&nbsp;Cierre  &nbsp;&nbsp;&nbsp;</i></button> </div> <input type="text" id="FechaCierre" name="FechaCierre" class="form-control lock" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" placeholder="DD/MM/YYYY HH:SS"> </div></div>
                      <div class="col-sm-12"> <div class="input-group"><div class="input-group-btn"> <button type="button" class="btn btn-warning"><i class="fa fa-calendar">&nbsp;Prometida  &nbsp;&nbsp;&nbsp;</i></button> </div> <input type="text" id="FechaPrometida" name="FechaPrometida" class="form-control datepicker " data-provide="datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" placeholder="DD/MM/YYYY HH:SS"> </div></div>
										</div>

										<div class="form-group"> <div class="col-sm-12"><label class=" control-label">Estado:</label></div> 
											<div class="col-sm-12">
											<select class="form-control lock" id="OtEstado" name="OtEstado">
												<option value="-3">Abierto</option>
												<option value="2">Impreso</option>
												<option value="3">Distribuido</option>
												<option value="5">Concluido</option>
												<option value="-1">Cerrado</option>
												<option value="1">Cancelado</option>
											</select>
											</div>
										</div>
									</div>
								</div>
								</div>
								<div class="col-md-9">
								<div class="box box-warning box-solid">
									<div class="box-body">
										<h4>
                        <i class="fa fa-user text-yellow"></i>
                        &nbsp;&nbsp; CLIENTE: &nbsp; 
                        <a href="#" onclick="ActualizarCliente()"><i class="fa fa-refresh text-green pull-right" style="font-size:46px;"></i></a>
                        <a id="NuevoCliente" href="#" onclick="NuevoCliente()" >
                        <i class="fa fa-spinner fa-spin fa-2x fa-fw" style="color:#f39c12 !important; visibility: hidden;" id="spinnerMora"></i>
                        <span class="sr-only">Loading...</span>
                        <i class="fa fa-plus-circle text-green pull-right" style="font-size:46px;"></i></a>
                    </h4>
                    <span id="mora" class="badge" style="background-color: #dd4b39; font-size: 20px; visibility: hidden; padding:6px;"></span> 
                    <span id="PlanPlus3" class="badge" style=" scrollbar-width: thin; background-color: #dd4b39; font-size: 20px; visibility: hidden; display:block;overflow:auto; padding:6px; text-align:left; margin-top:5px;"></span> 

                    <div class="from-group">
                    <h3 style="display:block;">
                      <span class="label label-warning" style="padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-phone-square" aria-hidden="true"></i> Tel: <input type="text" class="text-black" style="border-radius: 5px; margin-bottom:12px;" id="contacto_cliente" name="contacto_cliente" placeholder="___-___-___"></span>
                      <span class="label label-warning" style="padding-top: 10px; padding-bottom: 10px;"><i class="fa fa-envelope" aria-hidden="true"></i> Email: <input type="text" class="text-black" style="border-radius: 5px;" id="contacto_email" name="contacto_email" placeholder="____________@_______.com"></span>
                    </h3>
                    </div>
										<div class="form-group"> <div class="col-sm-12"><label class=" control-label">Cliente:</label></div> <div class="col-sm-3"> <div class="input-group"><div class="input-group-btn" > <button type="button" class="btn btn-warning" onclick="ConsultarCliente();"><i class="fa fa-search-plus">&nbsp;&nbsp;</i></button> </div> <input type="text" class="form-control lock" placeholder="" id="CodigoCliente" name="CodigoCliente"></div></div> <div class="col-sm-9"><input type="text" class="form-control lock" placeholder="" id="NombreCliente" name="NombreCliente"></div> </div>
										<div class="form-group"> <div class="col-sm-12"><label class=" control-label">Telefono:</label></div> <div class="col-sm-12"><input type="text" id="Telefono" name="telefono" class="form-control lock" placeholder="" ></div></div>
                    <div class="form-group"> <div class="col-sm-12"><label class=" control-label">Chassis:</label></div> <div class="col-sm-12"><input type="text" id="Chassis" name="Chassis" class="form-control lock" placeholder="" ></div></div>
                    <div class="form-group"> <div class="col-sm-12"><label class=" control-label">Nro Serie:</label></div> <div class="col-sm-12"><input type="text" id="NroSerie" name="NroSerie" class="form-control lock" placeholder="" ><input type="text" id="NroSerie2" name="NroSerie2" class="form-control lock" placeholder="" ></div></div>
										<div class="form-group"> <div class="col-sm-12"><label class=" control-label">Vehiculo:</label></div> <div class="col-sm-12"><input type="text" id="Vehiculo" name="vehiculo" class="form-control lock" placeholder="" ></div></div>
										<div class="form-group"> <div class="col-sm-12"><label class=" control-label">Chapa:</label></div> <div class="col-sm-12"><input type="text" id="Chapa" name="Chapa" class="form-control text-uppercase" placeholder=""></div></div>

										<div class="form-group"> <div class="col-sm-12"><label class=" control-label">Identificador/Color:</label></div> <div class="col-sm-12"><div class="input-group"><div class="input-group-btn" > <button type="button" class="btn btn-warning"><i class="fa fa-search-plus">&nbsp;&nbsp;</i></button> </div><input type="text" id="Identificador" name="Identificador" class="form-control" placeholder=""></div></div></div>

                    <div class="form-group"> <div class="col-sm-12"><label class=" control-label">Kilometraje:</label></div> <div class="col-sm-12"><input type="number" id="Kilometraje" name="Kilometraje" class="form-control " placeholder=""></div></div>

									</div>
								</div>
								</div>	
							</div>
							<div class="box box-danger box-solid">
								<div class="box-body">	
									<h4><i class="fa fa-wrench text-red"></i>&nbsp;&nbsp;DATOS DEL SERVICIO:</h4>
									<div class="form-group"> <div class="col-sm-3"><label class=" control-label">Tipo Servicio:</label></div>
										<div class="col-sm-12">
											<select class="form-control" id="TipoServicio" name="TipoServicio">
												<option value="1">Cargo Cliente</option>
												<option value="2">Pre-Enrega</option>
												<option value="3">Garantia</option>
												<option value="4">Rep. Usado Vta.</option>
												<option value="5">Promocion</option>
												<option value="6">Uso Taller</option>
												<option value="7">Service en Casa</option>
											</select>
										</div>
									</div>
									<div class="form-group"> <div class="col-sm-3"><label class=" control-label">Tipo Llamada:</label></div> 
										<div class="col-sm-12">
											<select class="form-control" id="TipoLlamada" name="TipoLlamada">
												<option value="1">Service Express</option> 
												<option value="2">Reingreso p/ Reclamo</option> 
												<option value="3">Servicio/Reparación</option> 
												<option value="4">Reparaciones Mayores</option> 
												<option value="5">Cliente en espera</option> 
												<option value="6">Otros</option> 
												<option value="7">Campaña</option> 
												<option value="8">Pre entrega</option> 
												<option value="9">Garantía</option>	
											</select>
										</div>
									</div>

                  <div class="form-group"> <div class="col-sm-12"><label class=" control-label">Motivo: (max 250 Caracteres) <span id="lengthMotivo">0</span>/250 </label></div> <div class="col-sm-12"> <textarea class="form-control text-uppercase" rows="3" placeholder="Enter..." id="Motivo" name="Motivo" x-webkit-speech=""  lang="es" maxlength="250"></textarea> </div></div>
									<div class="form-group"> <div class="col-sm-12"><label class=" control-label">Comentario:</label></div> <div class="col-sm-12"> <textarea class="form-control text-uppercase" rows="3" placeholder="Enter..." id="PedidoCliente" name="PedidoCliente"></textarea> </div></div>
									<div class="form-group"> <div class="col-sm-12"><label class=" control-label">LTS:</label></div> <div class="col-sm-3"> <div class="input-group"><div class="input-group-btn"> <button type="button" class="btn btn-warning" onclick="ConsultarLts()"><i class="fa fa-search-plus">&nbsp;&nbsp;</i></button> </div> <input type="text" id="LtsCodigo" name="LtsCodigo" class="form-control lock" placeholder="" ></div></div> <div class="col-sm-9"><input type="text" id="LtsNombre" name="LtsNombre" class="form-control lock" placeholder="" ></div> </div>
									<div class="form-group"> <div class="col-sm-12"><label class=" control-label">Detalle del Vehiculo:</label></div> <div class="col-sm-12"> <textarea class="form-control text-uppercase" rows="3" placeholder="Enter..." id="Detalle_Vehiculo" name="DetalleVehiculo"></textarea> </div></div>

									<div class="form-group"> <div class="col-sm-12"><label class=" control-label">Vehiculo:</label> <a id="EditarImagen" onclick="EditarImagen();" ><i class="fa fa-paint-brush text-green pull-right" style="font-size:36px;"></i> </a><a id="RefreshImagen" onclick="ImagenOt(2);" ><i class="fa fa-refresh text-green pull-right" style="font-size:36px; margin-right: 10px;"></i> </a> </div> <div class="col-sm-12"> <center> <div id="detalle_vehiculo"> <img src="vehiculo2.png" class="img-responsive"> </div></center> </div> </div>

									<div class="form-group"> <div class="col-sm-12"><label class=" control-label">Combustible:</label> </div> <div class="col-sm-12"> <center> <div id="fuelMeterDiv" ></div> <br><br> <div id="fuelSliderDiv" ></div> </center> </div> </div>
									<div class="form-group"> 
										<div class="col-sm-12"><label class=" control-label">Accesorios del Vehiculo:</label></div>
										<div class="col-sm-12 botonera" >
										  <div class="btn-group btn-group-justified" >
											<a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Herramientas"><i style="font-size:24px;" class="fa fa-wrench" aria-hidden="true"></i><br>Herramientas</a>
											<a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="RuedaAuxilio"><i style="font-size:24px;" class="fa fa-life-ring" aria-hidden="true"></i><br>Rueda Auxilio</a>
											<a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Gato"><i style="font-size:24px;" class="fa fa-upload" aria-hidden="true"></i><br>Gato</a>
										  </div>                                                                                 
										  <div class="btn-group btn-group-justified">                                            
											<a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Extintor"><i style="font-size:24px;" class="fa fa-fire-extinguisher" aria-hidden="true"></i><br>Extintor</a>
											<a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Tazas"><i style="font-size:24px;" class="fa fa-circle-o-notch" aria-hidden="true"></i><br>Tazas</a>
											<a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Baliza"><i style="font-size:24px;" class="fa fa-exclamation-triangle" aria-hidden="true"></i><br>Baliza</a>
										  </div>                                                                                 
										  <div class="btn-group btn-group-justified">                                            
											<a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Encendedor"><i style="font-size:24px;" class="fa fa-fire" aria-hidden="true"></i><br>Encendedor</a>
											<a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Parabrisa"><i style="font-size:24px;" class="fa fa-calendar-o" aria-hidden="true"></i><br>Parabrisa</a>
											<a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Radio"><i style="font-size:24px;" class="fa fa-volume-down" aria-hidden="true"></i><br>Radio</a>
										  </div>                                                                                 
										  <div class="btn-group btn-group-justified">                                            
											<a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Antena"><i style="font-size:24px;" class="fa fa-flag-o" aria-hidden="true"></i><br>Antena</a>
											<a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Llavero"><i style="font-size:24px;" class="fa fa-wifi" aria-hidden="true"></i><br>Llavero</a>
											<a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="CortaCorriente"><i style="font-size:24px;" class="fa fa-chain-broken" aria-hidden="true"></i><br>Corta Corriente</a>
										  </div>                                                                                 

                      <div class="btn-group btn-group-justified">                                            
                      <a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Documento"><i style="font-size:24px;" class="fa fa-paste" aria-hidden="true"></i><br>Documento</a>
                      <a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Manual"><i style="font-size:24px;" class="fa fa-th-list" aria-hidden="true"></i><br>Manual</a>
                      <a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="ObjetosValor"><i style="font-size:24px;" class="fa fa-dollar" aria-hidden="true"></i><br>Objetos Valor</a>
                      </div>

                      <div class="btn-group btn-group-justified"> 
                      <a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Acople"><i style="font-size:24px;" class="fa fa-rss" aria-hidden="true"></i><br>Acople</a>
                      <a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Alarma"><i style="font-size:24px;" class="fa fa-user-secret" aria-hidden="true"></i><br>Alarma</a>
                      <a class="btn btn-default" onclick="$(this).toggleClass('btn-success text-white'); SetObservacion(this);" id="Alfombra"><i style="font-size:24px;" class="fa fa-building" aria-hidden="true"></i><br>Alfombra</a>
                      </div>

										</div>
									</div>
                  <div class="form-group"><div class="col-sm-12"> <textarea class="form-control lock hide" row="10" placeholder="Enter..." id="Observacion" name="Observacion" ></textarea> </div></div>
                  <div class="form-group"><div class="col-sm-12"> <textarea class="form-control lock hide" row="10" placeholder="Enter..." id="Combustible" name="Combustible" >0</textarea> </div></div>
                  <div class="form-group"> <div class="col-sm-12"><label class=" control-label">Observacion:</label></div> <div class="col-sm-12"> <textarea class="form-control" row="10" placeholder="Enter..." id="Observacion2" name="Observacion2" ></textarea> </div></div>
                  <div class="form-group"> <div class="col-sm-12"><label class=" control-label">Costo Servicio:</label></div> <div class="col-sm-12"><input type="text" id="costoServicio" name="costoServicio" class="form-control " placeholder=""></div></div>
                  <div class="form-group"> <div class="col-sm-12"><label class=" control-label">Lavado:</label></div> <div class="col-sm-12"> <input class="form-check-input" style="width: 30px; height: 30px;" type="checkbox" checked name="lavado" id="lavado" value="si"> </div></div>
								</div>	
							</div>	
							
						</div>
						<div class="box-footer">
							<button type="button" class="btn btn-lg btn-success pull-right" id="aceptar" onclick="Grabar(1);">Aceptar</button>
							<button type="button" class="btn btn-lg btn-danger pull-right" id="cancelar" onclick="ResetForm();">Cancelar</button>
						</div>
						
					</form>
				</div>
		  </div>
		  
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->



      <div class="control-sidebar-bg"></div>
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

  <script src="plugins/toast/toastr.min.js"></script>


  <link href='http://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/material.min.js"></script>
  <script type="text/javascript" src="https://rawgit.com/FezVrasta/bootstrap-material-design/master/dist/js/material.min.js"></script>
  <script type="text/javascript" src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>  
  <script src="plugins/material-date-time-picker/bootstrap-material-datetimepicker.js"></script>

  <!-- Include the HTMl2Canvas library -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

  <script src="plugins/input-mask/jquery.inputmask.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

	<script type="text/javascript">

    $(document).ready(function(){

      String.prototype.includes = function (str) {
        return this.indexOf(str) !== -1;
        }

        $('#MenuMain ').load("menu.html " , function(){
            console.log("se agrego el menu principal..");
        });

        $('#lavado').on('change',(e)=>{
          if(e.target.checked){
            $('#lavado').val('SI')
          }else{
            $('#lavado').val('NO')
          }
        })



        toastr.options.closeMethod       = 'fadeOut';
        toastr.options.closeDuration     = 500;
        toastr.options.closeEasing       = 'swing';
        toastr.options.closeButton       = true;
        toastr.options.preventDuplicates = true;
        toastr.options.timeOut           = 2500; // How long the toast will display without user interaction
        toastr.options.extendedTimeOut   = 500; // How long the toast will display after a user hovers over it
        toastr.options.positionClass     = 'toast-top-right'; // How long the toast will display after a user hovers over it
        toastr.options.progressBar       = true;

        //controlar que sucursal esta activo 
        if(localStorage.sucursal ){
           $("a[onClick='setSucursal(this)']").css("font-size", "14px");
           $("a[onClick='setSucursal(this)']").css("color", "black");
           $("a[onClick='setSucursal(this)']").removeClass("btn btn-danger");
           $("a[onClick='setSucursal(this)']").addClass("btn btn-default");

			if(localStorage.sucursal == 'MRA KIA'){
			   $("#" + 'MRAKIA').css("font-size", "30px");
			   $("#" + 'MRAKIA').css("color", "white");
			   $("#" + 'MRAKIA').removeClass("btn btn-default");
			   $("#" + 'MRAKIA').addClass("btn btn-danger");

			}else if(localStorage.sucursal == 'MRA FCA'){
			   $("#" + 'MRAFCA').css("font-size", "30px");
			   $("#" + 'MRAFCA').css("color", "white");
			   $("#" + 'MRAFCA').removeClass("btn btn-default");
			   $("#" + 'MRAFCA').addClass("btn btn-danger");
				
			}else if(localStorage.sucursal == 'MRA MPY'){
			   $("#" + 'MRAMPY').css("font-size", "30px");
			   $("#" + 'MRAMPY').css("color", "white");
			   $("#" + 'MRAMPY').removeClass("btn btn-default");
			   $("#" + 'MRAMPY').addClass("btn btn-danger");
				   
			}else{
			   $("#" + localStorage.sucursal).css("font-size", "30px");
			   $("#" + localStorage.sucursal).css("color", "white");
			   $("#" + localStorage.sucursal).removeClass("btn btn-default");
			   $("#" + localStorage.sucursal).addClass("btn btn-danger");
			}

        }else{
          localStorage.setItem("sucursal","ALIDER"); //por defecto fca 
        }

        //controlar si esta seteado el asesor 
        if(localStorage.asesor ){ 
          var asesor = JSON.parse(localStorage.asesor); 
          console.log(asesor); 
          $("#Asesor").text( asesor.nombre ); 
          $("#Asesor").attr('codigo', asesor.codigo ); 
          $("#BoxAsesor").addClass('text-success'); 

        }

        //en caso de actualizar la pagina actualizar alguno datos .-
        
        localStorage.campanha = 'NO';
        /*
        $('.datepicker').datepicker({
           //showButtonPanel: true,
           title: "FECHA PROMETIDA",
            dateFormat: "yy-mm-dd",
            todayBtn: true,
            todayHighlight: true,
            beforeShow: function(){    
                   $(".ui-datepicker").css('font-size', 24) 
            }
        });
*/
        
        $('.datepicker').bootstrapMaterialDatePicker(
          { 
            format : 'DD/MM/YYYY HH:mm', 
            lang: 'es', 
            weekStart : 1, 
            minDate : new Date()
          });

         //$(".datepicker").datetimepicker();


    });

    function setSucursal(elem){
      console.log( $(elem).text());

      /*
      if ( $(elem).hasClass("btn-danger") == false ){
        pinSucursal($(elem).attr('name'),  $(elem).attr("id") , $(elem).attr("base")) ;
      }
    */
      var id = $(elem).attr("id");
      if(id == 'MRAKIA'){
        localStorage.setItem("sucursal", 'MRA KIA');
      }else if(id == 'MRAFCA'){
        localStorage.setItem("sucursal", 'MRA FCA');
      }else if(id == 'MRAMPY'){
        localStorage.setItem("sucursal", 'MRA MPY');
      }else{
        localStorage.setItem("sucursal", $(elem).attr("id"));
      }
        localStorage.setItem("base", $(elem).attr("base") );
        localStorage.removeItem("asesor");
        $("#Asesor").text('Asesor ?');
        $("#Asesor").attr("codigo", "0");
        $("a[onClick='setSucursal(this)']").css("font-size", "14px");
        $("a[onClick='setSucursal(this)']").css("color", "black");
        $("a[onClick='setSucursal(this)']").removeClass("btn btn-danger");
        $("a[onClick='setSucursal(this)']").addClass("btn btn-default");

			 $("#" + id).css("font-size", "30px");
			 $("#" + id).css("color", "white");
			 $("#" + id).removeClass("btn btn-default");
			 $("#" + id).addClass("btn btn-danger");


/*
          localStorage.setItem("sucursal", $(elem).attr("id") );
          localStorage.setItem("base", $(elem).attr("base") );

         $("a[onClick='setSucursal(this)']").css("font-size", "14px");
         $("a[onClick='setSucursal(this)']").css("color", "black");
         $("a[onClick='setSucursal(this)']").removeClass("btn btn-danger");
         $("a[onClick='setSucursal(this)']").addClass("btn btn-default");

         $(elem).css("font-size", "30px");
         $(elem).css("color", "white");
         $(elem).addClass("btn btn-danger");
*/
    }


    function pinSucursal(sucursal_nombre, sucursal_id, base){

      swal({
        title: '', 
        html: 
              ' <div class="containeaaar"> ' +
              '<style>'+
              ''+
              ' .pin { font-size:30px; font-family:Arial Black; height:80px; color:#5f5f5f; position:relative; width:100%;bottom:-20px;} ' +
              '</style>'+
              '     <div class="row"> ' +
              '       <center><h1 style="color:black; margin-top:0px; margin-bottom:0px;" id="titleSucursal" sucursal_id="'+ sucursal_id +'" base="'+ base +'" ><strong>' + sucursal_nombre + '</strong></h1></center> ' +
              '       <center><h3 style="color:#5f5f5f; margin-top:5px;" id="titlePin" ><strong>PIN SUCURSAL</strong></h3></center> ' +
              '     </div>  ' +
              '     <div class="row"> ' +
              '       <center>  ' +
              '         <div id="my_pin">'+
              '           <i class="fa fa-circle-o pin2" style="font-size:36px;color:#5f5f5f;" id="p1" valor=""></i> ' +
              '           <i class="fa fa-circle-o pin2" style="font-size:36px;color:#5f5f5f;" id="p2" valor=""></i> ' +
              '           <i class="fa fa-circle-o pin2" style="font-size:36px;color:#5f5f5f;" id="p3" valor=""></i> ' +
              '           <i class="fa fa-circle-o pin2" style="font-size:36px;color:#5f5f5f;" id="p4" valor=""></i> ' +
              '         </div>'+
              '       </center> ' +
              '     </div>  ' +
              '     <br>'+
              '     <div class="row" id="pin"> ' +
              '       <div class="btn-group btn-group-justified"> ' +
              '         <a href="#" class="btn btn-default pin" onClick="setPin(this)">1</a> ' +
              '         <a href="#" class="btn btn-default pin" onClick="setPin(this)">2</a> ' +
              '         <a href="#" class="btn btn-default pin" onClick="setPin(this)">3</a> ' +
              '       </div>  ' +
              '       <div class="btn-group btn-group-justified"> ' +
              '         <a href="#" class="btn btn-default pin" onClick="setPin(this)">4</a> ' +
              '         <a href="#" class="btn btn-default pin" onClick="setPin(this)">5</a> ' +
              '         <a href="#" class="btn btn-default pin" onClick="setPin(this)">6</a> ' +
              '       </div>  ' +
              '       <div class="btn-group btn-group-justified"> ' +
              '         <a href="#" class="btn btn-default pin" onClick="setPin(this)">7</a> ' +
              '         <a href="#" class="btn btn-default pin" onClick="setPin(this)">8</a> ' +
              '         <a href="#" class="btn btn-default pin" onClick="setPin(this)">9</a> ' +
              '       </div>  ' +
              '       <div class="btn-group btn-group-justified"> ' +
              '         <a href="#" class="btn btn-default pin"></a>  ' +
              '         <a href="#" class="btn btn-default pin" onClick="setPin(this)">0</a> ' +
              '         <a href="#" class="btn btn-default pin" onClick="setPin(this)">Borrar</a>  ' +
              '       </div>  ' +
              ' </div>  ', 
        allowOutsideClick: false,
        showCloseButton: true,
        showCancelButton: false,
        showConfirmButton: false,//,
        width: '500px'
        //confirmButtonText:'<i class="fa fa-thumbs-up" ></i> Listo!',
        //cancelButtonText:'Cancelar'
      }).then(function () {
        //
      });

    }

    function setPin(elem){ 
      var valor = $(elem).text();
      var pin = 0, sucursal_nombre ="", sucursal_id ="", base="";
      if ( valor == 'Borrar'){
        resetPin();
      } else {
        if( $("#p1").attr("valor").length == 0 ){ 
          $("#p1").attr("valor" , valor ); 
          $("#p1").removeClass("fa fa-circle-o");
          $("#p1").addClass("fa fa-circle");
        } else if($("#p2").attr("valor").length == 0 ){ 
          $("#p2").attr("valor" , valor ); 
          $("#p2").removeClass("fa fa-circle-o");
          $("#p2").addClass("fa fa-circle");

        } else if($("#p3").attr("valor").length == 0 ){ 
          $("#p3").attr("valor" , valor ); 
          $("#p3").removeClass("fa fa-circle-o");
          $("#p3").addClass("fa fa-circle");

        } else if($("#p4").attr("valor").length == 0 ){ 
          $("#p4").attr("valor" , valor );
          $("#p4").removeClass("fa fa-circle-o");
          $("#p4").addClass("fa fa-circle");
          pin = $("#p1").attr("valor") + $("#p2").attr("valor") + $("#p3").attr("valor") + $("#p4").attr("valor");
          sucursal_nombre = $("#titleSucursal").text();
          sucursal_id = $("#titleSucursal").attr("sucursal_id");
          base = $(" #titleSucursal").attr("base");
          console.log(pin);
          console.log( sucursal_nombre);
          console.log(sucursal_id);
          console.log(base);
          controlPin(sucursal_nombre, sucursal_id, base, pin);
          
        } 
      } 
    }

    function resetPin(){
        $(".pin2").removeClass("fa-circle");
        $(".pin2").addClass("fa-circle-o");
        $(".pin2").attr("valor", "");
        $(".pin2").css("color", "#5f5f5f");
        $("#titlePin").css("color", "#5f5f5f");
        $("#titlePin").text("PIN SUCURSAL");

    }

    function controlPin(sucursal, id, base , pin ){
      var pinfca = 1111;
      var pinmpy = 1212;
      var pinmini= 1414;
      var pinkiaVictoria = 1616;
      var pinkiaChoferes = 1818;
      var pinNissan = 2020;
      var pinMraKia = 2021;
      var pinMraFca = 2022;
      var pinMraMpy = 2023;
      var pinCde    = 2030;
      var retorno = 0 ;

      if (sucursal == 'FCA' && pinfca == pin ){
        retorno = 1 ;
      }else if (sucursal == 'MPY' && pinmpy == pin ){ 
        retorno = 1;
      }else if (sucursal == 'MINI/MOTO' && pinmini == pin ){
        retorno = 1;
      }else if (sucursal == 'KIA VICTORIA' && pinkiaVictoria == pin ){
        retorno = 1;
      }else if (sucursal == 'KIA CHOFERES' && pinkiaChoferes == pin ){
        retorno = 1;
      }else if (sucursal == 'NISSAN' && pinNissan == pin ){
        retorno = 1;
      }else if (sucursal == 'KIA MRA' && pinMraKia == pin ){
        retorno = 1;
      }else if (sucursal == 'MRA FCA' && pinMraFca == pin ){
        retorno = 1;
      }else if (sucursal == 'MRA MPY' && pinMraMpy == pin ){
        retorno = 1;
      }else {
          $(".pin2").css("color", "#dd4b39");
          $("#titlePin").css("color", "#dd4b39");
          $("#titlePin").text("Pin Incorrecto");
          navigator.vibrate(200);
          setTimeout(function(){ 
            $("#my_pin").effect( "bounce" , "slow", function(){
              setTimeout(function(){ resetPin() }, 300);  
            }); 
          }, 200);
        }
        if (retorno == 1 ){
          swal.disableButtons();
          $("#pin").effect("blind"); // oculta el teclado cuando ingreso el codigo correcto.
          $(".pin2").css("color", "#3c763d");
          $("#titlePin").css("color", "#3c763d");
          $("#titleSucursal").css("color", "#3c763d");
          $("#titlePin").text("Pin Correcto");

          navigator.vibrate(200);
          setTimeout(function(){ 
            $("#my_pin").effect( "bounce" , "slow", function(){
              setTimeout(function(){ resetPin() 

			  if(id == 'MRAKIA'){
				localStorage.setItem("sucursal", 'MRA KIA');
			  }else if(id == 'MRAFCA'){
				localStorage.setItem("sucursal", 'MRA FCA');
			  }else if(id == 'MRAMPY'){
				localStorage.setItem("sucursal", 'MRA MPY');
			  }else{
				localStorage.setItem("sucursal", id);
			  }
              localStorage.setItem("base", base );
              localStorage.removeItem("asesor");
             $("#Asesor").text('Asesor ?');
             $("#Asesor").attr("codigo", "0");
             $("a[onClick='setSucursal(this)']").css("font-size", "14px");
             $("a[onClick='setSucursal(this)']").css("color", "black");
             $("a[onClick='setSucursal(this)']").removeClass("btn btn-danger");
             $("a[onClick='setSucursal(this)']").addClass("btn btn-default");

			 $("#" + id).css("font-size", "30px");
			 $("#" + id).css("color", "white");
			 $("#" + id).removeClass("btn btn-default");
			 $("#" + id).addClass("btn btn-danger");
             swal.close();

              }, 300);  
            }); 
          }, 400);

        }
        return retorno;
    }


		function EditarImagen(){
			//fco modal para dibujar el vehiculo
			swal({
			  title: 'Inspeccionar Vehiculo',
			  html:
				'<div class="btn-group btn-group-justified">'+ 
          '<a href="#simple_sketch" id="auto" class="btn btn-default" onclick="AgregarImagen(1); Focus(1);"> <i class="fa fa-car"></i> </a> '+
          '<a href="#simple_sketch" id="camioneta" class="btn btn-default" onclick="AgregarImagen(2);Focus(2)"> <i class="fa fa-truck"></i> </a>'+
					'<a href="#simple_sketch" id="guardar_imagen" class="btn btn-default" onclick="GuardarImagen();"> <i class="fa fa-save"></i> </a> '+
				'</div> '+
				'<div class="container-fluid"><div class="row"><canvas id="simple_sketch" style="border: 1px solid gray; width:100%; height:310px; background-attachment: fixed; background-position: center; background-repeat: no-repeat; overflow:inherit;" ></canvas></div></div>' +
				'<textarea row="5" placeholder="Detalles..." class="pull-left" style="width:100%;" id="DetalleMsg" ></textarea>',
			  allowOutsideClick: false,
			  showCloseButton: true,
			  showCancelButton: true,
			  showConfirmButton: false,
			  //confirmButtonText:'<i class="fa fa-thumbs-up" ></i> Listo!',
			  cancelButtonText:'Cancelar'
			});
		};
			
		//fco activa el modo escritura sobre la imagen de la verificacion del vehiculo !!!
		function AgregarImagen(item){
			$('#simple_sketch').jqScribble();
      //$("#simple_sketch").data("jqScribble").update({brush: CrossBrush});      
			//$("#simple_sketch").data("jqScribble").update({brushSize: 4});
			if (item == 1) //auto 
			{
				var img = 'vehiculo2.png';
				$("#simple_sketch").data("jqScribble").update({backgroundImage: img});
        //$("#simple_sketch").css("height", "310");        
		  }else if (item == 2 ) //camioneta 
      {
        var img = 'vehiculo4.png'; 
        $("#simple_sketch").data("jqScribble").update({backgroundImage: img});
        //$("#simple_sketch").css("height", "310");
      }else if (item == 3 ) //moto 
      { 
        var img = 'vehiculo6.jpg'; 
        $("#simple_sketch").data("jqScribble").update({backgroundImage: img}); 
        //$("#simple_sketch").css("height", "400");
      }else if (item == 4 ) //moto 
      { 
        var img = 'vehiculo5.jpeg'; 
        $("#simple_sketch").data("jqScribble").update({backgroundImage: img}); 
        //$("#simple_sketch").css("height", "400");
      } 
		} 
		
		function BorrarImagen(){
			$("#simple_sketch").data("jqScribble").clear();
		};

    function GuardarImagen(){

      $("#simple_sketch").data("jqScribble").save(function(imageData)
      {
        $.post('jqScribble/image_save.php', {imagedata: imageData, asesor: $("#Asesor").text().trim() }, function(response)
        {
          $('#detalle_vehiculo').empty(); 
          $('#detalle_vehiculo').append(response); 
          $('#detalle_vehiculo > img').addClass('img-responsive'); 
        }); 
      }); 

      $('#Detalle_Vehiculo').val($('#DetalleMsg').val()); 
      swal( 
          'Detalle Guardado !', 
          '', 
          'success' 
        ) 
    } 

    function GuardarImagen2(OT){ 
      //para guardar imagen del combustible 
      html2canvas(document.getElementById("fuelMeterDiv"), { 
        onrendered: function(canvas) { 
          var imageData = canvas.toDataURL("image/png"); 
          console.log('ingreso para modificar el combustible');
          console.log(imageData); 
          $.post( window.origin + '/imagenes/image_save3.php', {imagedata: imageData , Nombre: OT }, function(response) 
          { 
            $('div#fuelSliderDiv').slider({value:0}); //el slider del medidor combustible esta linea se activo en la funcion guardarimagen2 
            $("div#fuelMeterDiv").dynameter({value:0}); //% combustible esta linea se activo en la funcion guardarimagen2 
           console.log(response); 
          }); 
        } 
      }); 
    }

    function ImagenOt(evento){ 
      console.log( $('#detalle_vehiculo > img').attr('src') ); 
      var NroLlamada = $("#NroLlamada").val(); 
      //var imageData = $('#detalle_vehiculo > img').attr('src'); 
      var asesor_ = $("#Asesor").text().trim(); 
        $.post( window.origin + '/imagenes/image_save2.php', { OT: NroLlamada , EVENTO: evento, asesor: asesor_ }, function(response){ 
          if (evento == 2 ){ 
            console.log(response); 
            $('#detalle_vehiculo').empty(); //http://192.168.10.54/tablet/vehiculo2.png
            $('#detalle_vehiculo').append(response); 
            //$('#detalle_vehiculo > img').addClass('img-responsive');
          } 
          console.log('ingreso para guardar la imagen ?????');
          console.log(response ); 
        }); 
    } 

    //para guardar la imagen que creo el asesor con el codigo de ot 
    function ImagenOt2(ot){ 
      var NroLlamada = ot; 
      var evento = 1; // 1 es para guardar la imagen con el nro de ot.
      var asesor_ = $("#Asesor").text().trim(); 
        $.post( window.origin + '/imagenes/image_save2.php', { OT: NroLlamada, EVENTO: evento, asesor: asesor_ }, function(response){ 
          console.log('ingreso para guardar la imagen jajajaja '); 
          console.log(response ); 
        }); 
    }     

		//fco para la el modal de la imagen pinta en verde el boton focus !!!
		function Focus(id){
			if (id == 1 ){ 
        $('#auto').addClass('btn-success text-white'); 
        $('#camioneta').removeClass('btn-success text-white'); 
        $('#moto').removeClass('btn-success text-white'); 
        $('#auto2').removeClass('btn-success text-white'); 
      }
      if (id == 2 ){ 
        $('#camioneta').addClass('btn-success text-white'); 
        $('#auto').removeClass('btn-success text-white'); 
        $('#moto').removeClass('btn-success text-white'); 
        $('#auto2').removeClass('btn-success text-white'); 
      }
      if (id == 3 ){ 
        $('#moto').addClass('btn-success text-white'); 
        $('#camioneta').removeClass('btn-success text-white'); 
        $('#auto').removeClass('btn-success text-white'); 
        $('#auto2').removeClass('btn-success text-white'); 
      }
      if (id == 4 ){ 
        $('#auto2').addClass('btn-success text-white'); 
        $('#camioneta').removeClass('btn-success text-white'); 
        $('#auto').removeClass('btn-success text-white'); 
        $('#moto').removeClass('btn-success text-white'); 
      }
		}
		
		//fco para ver el nivel de combustible 
		var $myFuelGauge;
		$( function () {
			// Initialize score meter and slider.
			$myFuelMeter = $("div#fuelMeterDiv").dynameter({
				width: 200,
				label: 'Combustible',
				value: 0,
				min: 0,
				max: 100,
				unit: '%',
				regions: {
					0: 'error',
					4: 'warn',
					6: 'normal'
				}
			});
			$('div#fuelSliderDiv').slider({
				min: 0,
				max: 100,
				value: 0,
				step: 2,
				disabled: false,
				slide: function (evt, ui) { 
					$myFuelMeter.changeValue((ui.value).toFixed(0)); 
          //para registrar nivel de combustible 
          var inicio; 
          if (ui.value < 10 ){ 
            inicio = 15; 
          }else if(ui.value == 100 ) { 
            inicio = 17; 
          }else{ 
            inicio = 16; 
          }
          //$("#Combustible").html( ui.value ); 
          $("#Combustible").val( ui.value ); 
				} 
			}); 
		});	
		
		function ResetForm(){
		$("#aceptar").attr("onclick","Grabar(1)");
			//fco nueva orden //aqui se resetea todo .. 
			$("form")[0].reset();
			//$('div#fuelSliderDiv').slider({value:0}); //el slider del medidor combustible esta linea se activo en la funcion guardarimagen2 
			//$("div#fuelMeterDiv").dynameter({value:0});	//% combustible esta linea se activo en la funcion guardarimagen2 
			$("#detalle_vehiculo > img").attr("src","vehiculo2.png"); //nueva imagen 
      $("a").removeClass("btn-success text-white");
      $("#Observacion").html("");
      $("#mora").css("visibility","hidden");
      $("#PlanPlus3").css('visibility', 'hidden');
      $("#mora").html("" ); 
      $("#campanha").html("" ); 
      localStorage.campanha = 'NO';
      localStorage.removeItem("listado-campaña");
      //localStorage.localStorage.removeItem("listado-campaña");
			BloquearCampos(0);//0 desbloquea los campos 
      //$('#NroOt').focus();
      Estatus(1);
		}
		
		function NuevaOrden(){ 

      if ( $("#NroLlamada").val().length > 0 ){ 
  			swal({
  				title: 'Nueva Orden?',
  				text: "Se perderan los datos si lo hubiere!",
  				type: 'warning',
  				showCancelButton: true,
  				confirmButtonColor: '#3085d6',
  				cancelButtonColor: '#d33',
  				confirmButtonText: 'Aceptar', 
          allowOutsideClick: false
  			}).then(function () {
  				ResetForm();
  				ConsultarCliente();
  			})
  			return "";
       }else{
          ResetForm();
          ConsultarCliente();
       } 
		}
		
		//consultas a la base de datos 
		function ConsultarOt(){
			ResetForm();//fco refresca el form 
			//console.log( $('#form1').serialize() ); //fco esta funcionalidad es para llevar todos los campos del form e insertar en la misma manera como la consulta en forma automatizada no se codifica por campo 
			swal({
				title: 'Ingrese Nro OT ',
				input: 'number',
				showCancelButton: true, 
				showLoaderOnConfirm: true, 
				inputValidator: function (value) {
				return new Promise(function (resolve, reject) {
					if (value) {
						resolve()
					} else {
						reject('Ingrese un valor valido !')
					}
				})
				}
			}).then(function (result){
        swal({
              title:'Espere...',
              html: '<span class="glyphicon glyphicon-cog" style=" animation: 2s rotate360 infinite linear; font-size:100px;"></span>',
              showConfirmButton:false,
              allowOutsideClick:false
        });

        var sucu = localStorage.sucursal;
        sucu = sucu.toLowerCase();

				//fco ajax consultar datos!!!
				$.ajax( { method: "POST", url: "consulta.php", data : { NroOt : result , funcion: 'ConsultarOt' , sucursal: sucu }, dataType: 'json'})
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

            console.log(rs.length); 
            rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
              var callid = Object.keys(rs2), id = 0 , campo; //fco captura los nombres de los campos 
              Object.keys(rs2).forEach(function(key) {  //fco recorre los campos con sus valores 
                campo = "#" + callid[id], id++; //fco esta linea es para asignar automaticamente con el campo del form -> $(#campo).val(rs2[key]) //este apartado asigna al form 
                $(campo).val(rs2[key]); 
              }); //fco este forEach trae los datos de cada campo de la consulta php ver archivo consulta.php 
              id = 0;
            });

						//fco mensaje de exito 
						swal({
							type: 'success',
							html: 'Consulta exitosa' 
            }).then(function(result){
              var chassis = $("#Chassis").val();
              var chassis2 = $("#Chassis").val().slice(-17);

              consultarVinConProblemas(chassis)
              ConsultarMora(chassis);
              ConsultarPlanPlus(chassis);
              ConsultarPlanMini($("#Chassis").val());
              Campaña(chassis2);
            });

            if(rs[0]['lavado'] == 'SI'){
              $("#lavado").attr( 'checked', 'checked' )
            }else if(rs[0]['lavado'] == 'NO'){
              $("#lavado").removeAttr('checked')
            }


						$("#PedidoCliente").height($('#PedidoCliente')[0].scrollHeight );
						$("#Motivo").height($('#Motivo')[0].scrollHeight );
						$("#Detalle_Vehiculo").height($('#Detalle_Vehiculo')[0].scrollHeight );
						$("#Observacion").height($('#Observacion')[0].scrollHeight );
						BloquearCampos(1); //1 bloquea
            ImagenOt(2);

            console.log($('#OtEstado').find(":selected").text() );
            if ($('#OtEstado').find(":selected").text() != 'Cerrado'){
              Estatus(2);//taller 
            }else if ($('#OtEstado').find(":selected").text() == 'Cerrado' ){
              Estatus(4);//cerrado 
            }

            //fco consultar si marco combustible y accesorios 
            if ( $("#PedidoCliente").val().indexOf("#combustible") >= 0 ){ 
              //var inicio = $("#PedidoCliente").val().indexOf("#combustible") , valor ; 
              var inicio = $("#PedidoCliente").val().indexOf("#combustible"); 
              $("#Observacion").html( $("#PedidoCliente").val().substr( inicio, $("#PedidoCliente").val().length ) );
              valor= $("#PedidoCliente").val().substr(inicio + 13, 3); 
              $('div#fuelSliderDiv').slider({ value: Number( valor ) }); 
              $("div#fuelMeterDiv").dynameter({ value: Number( valor ) }); 
              //console.log("tiene combustible: " + $("#PedidoCliente").val().substr(inicio + 13 , 3) ); 

            }else {
              console.log("no tiene"); 

            } 

            valor= $("#Combustible").val(); 
            console.log("trae el valor del combustible ", valor);
            $('div#fuelSliderDiv').slider({ value: Number( valor ) }); 
            $("div#fuelMeterDiv").dynameter({ value: Number( valor ) }); 

            var fin, campo; 
            inicio= $("#PedidoCliente").val().indexOf("#", inicio + 1 ); 
            while( inicio > 0 ){ 
              fin = $("#PedidoCliente").val().indexOf("#", inicio + 1 ) ; 

              if ( $("#PedidoCliente").val().substr(inicio, fin - inicio ).length > 0 ){
                campo = $.trim( $("#PedidoCliente").val().substr(inicio, fin - inicio )) ;
                console.log('linea: ' + campo ); 
                $( campo ).addClass( "btn-success text-white" );
              } 
              if (fin > 0 ) {
                inicio = fin;
              }else{
                inicio = fin +1;
              }
            } 
            $("#cancelar").prop("disabled", false);//habilitar el boton cancelar
            $("#aceptar").prop("disabled", false);//habilitar el boton cancelar
            $("#aceptar").attr("onclick","Grabar(2)");

            //solo modificar si el estado de la ot esta abierta 
            if ( $('#OtEstado').find(":selected").val() != -1 ){ 
              $("#PedidoCliente").prop('disabled',false); 
              $("#Motivo").prop('disabled',false); 
              $("#TipoLlamada").prop('disabled',false); 
              $("#TipoServicio").prop('disabled',false); 
              $("#Chapa").prop('disabled',false); 
              $("div#fuelSliderDiv" ).slider( "option", "disabled", false ); // fco para desbloquear 

            } 

					}	
					else{ //fco no existen registros !!!
						swal({
							type: 'warning',
							html: 'No existen registros !!!' 
						}).then(function(){
							ConsultarOt();
						});
					}
				})
				
				//fco Error en la consulta 
				.fail(function(jqxhr, textStatus, error) {
					var err = textStatus + ", " + error;
					console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 
					swal({
						type: 'error',
						html: 'Error en la consulta<br>' + err
					});
				})
			});

		}

    async function ActualizarCliente(){
      let box = `
      <div class="box box-success box-solid">
        <div class="box-body">

          <i class="fa fa-refresh fa-spin fa-3x" id="updSpin" style="position: absolute;z-index: 3; margin-left:-30px; margin-top:50px; visibility:hidden;"></i>

          <form onSubmit="event.preventDefault(); handleSubmit(this)">
          <!-- Titulo  -->  
          <div class="row">
            <div class="col-sm-12">
              <h4 class="box-title pull-left"><i class="fa fa-user text-green"></i> Datos </h4>
            </div>
          </div> 

          <!-- telefono 1  -->  
          <div class="col-sm-12" style="margin-top:5px;">
            <div class="input-group">
              <div class="input-group-btn">
                <button type="button" class="btn btn-success" style="width:100px;">
                  <i class="fa fa-phone">&nbsp;&nbsp;Telefono 1:</i>
                </button>
              </div>
              <input type="text" id="phone1" name="phone1" class="form-control" placeholder="Nro telefono 1... " autocomplete="off" >
            </div>
          </div>

          <!-- telefono 2  -->  
          <div class="col-sm-12" style="margin-top:5px;">
            <div class="input-group">
              <div class="input-group-btn">
                <button type="button" class="btn btn-success" style="width:100px;">
                  <i class="fa fa-phone">&nbsp;&nbsp;Telefono 2:</i>
                </button>
              </div>
              <input type="text" id="phone2" name="phone2" class="form-control" placeholder="Nro telefono 2... " autocomplete="off" >
            </div>
          </div> 

          <!-- mail -->  
          <div class="col-sm-12" style="margin-top:5px;">
            <div class="input-group">
              <div class="input-group-btn">
                <button type="button" class="btn btn-success" style="width:100px; text-align:right;">
                  <i class="fa fa-envelope">&nbsp;&nbsp;Mail:</i>
                </button>
              </div>
              <input type="mail" id="emailAddress" name="emailAddress" class="form-control" placeholder="Mail... " autocomplete="off">
            </div>
          </div> 

          <!-- send -->  
          <div class="col-sm-12" style="margin-top:5px;">
            <div class="row text-right mr-3">

                <button type="submit" class="btn btn-success" style="margin-right:15px;">
                  <i class="fa fa-refresh"></i> Actualizar 
                </button>
            </div>
          </div> 

        </div>  
      </div>
      `;
      let base = localStorage.getItem("base")
      if(base === 'garden'){ base = 'gasa'}

      if($("#CodigoCliente").val().length > 0 ){

        swal({
          title: 'ACTUALIZAR CLIENTE',
          html: box,
          showCancelButton: true, 
          showConfirmButton: true, 
          showLoaderOnConfirm: false, 
          allowOutsideClick: false, 
        })
        //$("#updSpin").css("visibility", "visible") 

        setTimeout(async ()=>{ 
          $("#phone1").focus() 
          let origen = (window.origin.includes('crm') || window.origin.includes('ngrok')? window.origin : 'http://192.168.10.80:3011') 
          await fetch(`${origen}/${base}/sap/2/${$("#CodigoCliente").val()}`) 
          .then(response => response.json()) 
          .then(data => { 
            let item = data['OCRD'][0]['row'][0] 

            console.log(item) 
            $("#phone1").val(typeof item['Phone1'][0] === 'object' ? '' : item['Phone1'][0] ) 
            $("#phone2").val(typeof item['Phone2'][0] === 'object' ? '' : item['Phone2'][0] ) 
            $("#emailAddress").val(typeof item['E_Mail'][0] === 'object' ? '' : item['E_Mail'][0]) 
            $("#updSpin").css("visibility", "hidden") 
          }) 

        }, 200) 

      }else{ 
        swal({ 
            type: 'warning', 
            html: 'No existe ningun cliente para actualizar los datos... <br> Busque primero un cliente con el boton Nuevo !!! ' 
        })
      }

    }
    async function handleSubmit(){
      let base = localStorage.getItem("base")
      if(base === 'garden'){ base = 'gasa'}

      $("#updSpin").css("visibility", "visible")
      const data = new FormData(event.target);
      const value = Object.fromEntries(data.entries());
      console.log(value);

/*
      //verificar si los campos tienen valores vacios 
      let res = Object.values(value).filter(( item, i)  => item.trim().length === 0 && i !== 1 )
      if(res.length > 0 ){
        $("#updSpin").css("visibility", "hidden")
        alert('No puede Actualizar valores vacios !')
        return 
      }
*/

      let jsonValue = { fields: value }
      console.log(jsonValue)
      //configuraionces de envio de post put patch 
      const options = {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify( jsonValue )
      };

      // Petición HTTP
      let origen = (window.origin.includes('crm') || window.origin.includes('ngrok')? window.origin : 'http://192.168.10.80:3011') 
      await fetch(`${origen}/${base}/sap/2/where/${$("#CodigoCliente").val()}`, options)
        .then(response => response.text())
        .then(data => JSON.parse( data) )
        .then(data => {
          console.log('valores de data ', data )
          $("#updSpin").css("visibility", "hidden")
          if(data['statusCode'] !== 200 ){
            alert(data['message']);
            return 
          }

          //si no hubo problema 
          alert(data['message']);
      });
    }

async	function NuevoCliente(){
      //<div class="box box-warning box-solid">                  <div class="box-body">  
      $("#nuevo-cliente").remove()
      swal({
          title:'Nuevo Cliente', 
          html: '<div class="box box-success box-solid">'+
                  '<div class="box-body">'+
                    //campo de busqueda
                    '<div class="row">'+
                    '<div class="col-sm-12">'+
                      '<h4 class="box-title pull-left"><i class="fa fa-tachometer text-green"></i>&nbsp;&nbsp;PASO 1 - VEHICULO</h4>'+
                    '</div>'+
                    '</div>'+
                    '<div class="col-sm-12">'+
                      '<div class="input-group">'+
                        '<div class="input-group-btn">'+
                          '<button type="button" class="btn btn-success" style="width:100px;">'+
                            '<i class="fa fa-gears">&nbsp;&nbsp;Buscar:</i>'+
                          '</button>'+
                        '</div>'+
                        '<input type="text" id="b_Buscar" name="b_Buscar" class="form-control lock" placeholder="" onchange="ConsultarVehiculo();">'+
                      '</div>'+
                    '</div>'+
                    //Chassis Vehiculo
                    '<div class="col-sm-12" style="margin-top:5px;">'+
                      '<div class="input-group">'+
                        '<div class="input-group-btn">'+
                          '<button type="button" class="btn btn-success" style="width:100px;">'+
                            '<i class="fa fa-gears">&nbsp;&nbsp;Chassis:</i>'+
                          '</button>'+
                        '</div>'+
                        '<input type="text" id="b_Chassis" name="b_Chassis" class="form-control lock" placeholder="" disabled>'+
                      '</div>'+
                    '</div>'+
                    //Nro serie Vehiculo
                    '<div class="col-sm-12" style="margin-top:5px;">'+
                      '<div class="input-group">'+
                        '<div class="input-group-btn">'+
                          '<button type="button" class="btn btn-success" style="width:100px;">'+
                            '<i class="fa fa-gears">&nbsp;&nbsp;Nro Serie:</i>'+
                          '</button>'+
                        '</div>'+
                        '<input type="text" id="b_NroSerie" name="b_NroSerie" class="form-control lock" placeholder="" disabled>'+
                      '</div>'+
                    '</div>'+
                    //Vehiculo Vehiculo
                    '<div class="col-sm-12" style="margin-top:5px;">'+
                      '<div class="input-group">'+
                        '<div class="input-group-btn">'+
                          '<button type="button" class="btn btn-success" style="width:100px;">'+
                            '<i class="fa fa-car">&nbsp;&nbsp;Vehiculo:</i>'+
                          '</button>'+
                        '</div>'+
                        '<input type="text" id="b_Vehiculo" name="b_Vehiculo" class="form-control lock" placeholder="" disabled >'+
                      '</div>'+
                    '</div>'+
                    //
                    //Vehiculo Vehiculo
                    '<div class="col-sm-12" style="margin-top:5px;">'+
                    '<span id="help1" class="label label-danger pull-left"></span><input id="Consultar" type="button" value="Consultar" class="btn btn-default pull-right" onclick="ConsultarVehiculo();">'+
                    '</div>'+
                  '</div>'+
                '</div>'+

                //BOX DE CLIENTE 
                '<div class="box box-warning box-solid">'+
                '<form id="formCliente" action >'+

                '<div class="box-body">'+
                '<div class="row">'+
                '<div class="col-sm-12">'+
                  '<h4 class="box-title pull-left"><i class="fa fa-tachometer text-yellow"></i>&nbsp;&nbsp;PASO 2 - CLIENTE</h4>'+
                '</div>'+
                '</div>'+

                '<div class="col-sm-12">'+
                  '<ul class="nav nav-tabs">'+
                    '<li class="active"><a data-toggle="tab" href="#home" onclick="$(&#39;#b_Buscar2&#39;).focus()">Buscar</a></li>'+
                    '<li><a data-toggle="tab" href="#menu1">Datos</a></li>'+
                  '</ul>'+
                '</div>'+  

                '<div class="tab-content">'+

                   '<div id="home" class="tab-pane fade in active">'+
                    '<div class="col-sm-12" style="margin-top:10px;">'+
                      //'<div class="input-group">'+
                        //'<div class="input-group-btn">'+
                          //'<button type="button" class="btn btn-warning" >'+
                            //'<i class="fa fa-search-plus"></i>'+
                          //'</button>'+
                        //'</div>'+
                        '<input style="width:100%;" type="text" id="b_Buscar2" name="b_Buscar2" class="form-control" placeholder="Nombre .. Cedula.. " onchange="ConsultarCliente2();" disabled >'+
                      //'</div>'+
                    '</div>'+
                    '<div class="col-sm-12" style="margin-top:5px;">'+
                      '<div class="panel panel-default" style="min-height:110px; max-height:300px; margin-bottom:0px; overflow-y: auto;">'+
                      '<ul class="list-group" id="Resultado" ></ul>'+
                      '</div>'+
                    '</div>'+

                    '<div class="col-sm-12" style="margin-top:5px;">'+
                    '<span id="help2" class="label label-danger pull-left"></span>'+
                    '<input id="Consultar2" type="button" value="Consultar" class="btn btn-default pull-right" onclick="ConsultarCliente2();" disabled>'+
                    '<input id="Nuevo" type="button" value="Nuevo" class="btn btn-success pull-right" onclick="NuevoCliente2();" style="margin-right:10px; width:22%;" disabled>'+
                   '</div>'+

                  '</div>'+
                  '<div id="menu1" class="tab-pane fade">'+
                    //codigo de cliente
                    '<div class="col-xs-12" style="margin-top:10px;">'+
                      '<div class="input-group">'+
                        '<div class="input-group-btn">'+
                          '<button type="button" class="btn btn-warning" style="width:100px;">'+
                            '<i class="fa fa-gears">&nbsp;&nbsp;Codigo:</i>'+
                          '</button>'+
                        '</div>'+
                        '<input type="text" id="Codigo" name="Codigo" class="form-control lock" placeholder="" disabled>'+
                      '</div>'+
                    '</div>'+

                    //nombre de cliente
                    '<div class="col-sm-12" style="margin-top:5px;">'+
                      '<div class="input-group">'+
                        '<div class="input-group-btn">'+
                          '<button type="button" class="btn btn-warning" style="width:100px;">'+
                            '<i class="fa fa-user">&nbsp;&nbsp;Nombre:</i>'+
                          '</button>'+
                        '</div>'+
                        '<input type="text" id="Nombre" name="Nombre" class="form-control lock b_campo text-uppercase" placeholder="">'+
                      '</div>'+
                    '</div>'+
                      //Ruc del cliente
                    '<div class="col-sm-12" style="margin-top:5px;">'+
                      '<div class="input-group">'+
                        '<div class="input-group-btn">'+
                          '<button type="button" class="btn btn-warning" style="width:100px;">'+
                            '<i class="fa fa-credit-card">&nbsp;&nbsp;Ruc/CI:</i>'+
                          '</button>'+
                        '</div>'+
                        '<input type="text" id="Ruc" name="Ruc" class="form-control lock b_campo" placeholder="">'+
                      '</div>'+
                    '</div>'+
                      //Telefono
                      '<div class="col-sm-12" style="margin-top:5px;">'+
                      '<div class="input-group">'+
                        '<div class="input-group-btn">'+
                          '<button type="button" class="btn btn-warning" style="width:100px;">'+
                            '<i class="fa fa-phone">&nbsp;&nbsp;Telefono:</i>'+
                          '</button>'+
                        '</div>'+
                        '<input type="text" id="Telefono1" name="Telefono1" class="form-control lock b_campo" placeholder="">'+
                      '</div>'+
                    '</div>'+
                      //Correo
                      '<div class="col-sm-12" style="margin-top:5px;">'+
                      '<div class="input-group">'+
                        '<div class="input-group-btn">'+
                          '<button type="button" class="btn btn-warning" style="width:100px;">'+
                            '<i class="fa fa-envelope">&nbsp;&nbsp;Correo:</i>'+
                          '</button>'+
                        '</div>'+
                        '<input type="text" id="Correo" name="Correo" class="form-control lock b_campo" placeholder="">'+
                      '</div>'+
                    '</div>'+
                      //Direccion 
                    '<div class="col-sm-12" style="margin-top:5px;">'+
                      '<div class="input-group">'+
                        '<div class="input-group-btn">'+
                          '<button type="button" class="btn btn-warning" style="width:100px;">'+
                            '<i class="fa fa-map-marker">&nbsp;&nbsp;Direccion:</i>'+
                          '</button>'+
                        '</div>'+
                        '<input type="text" id="Direccion" name="Direccion" class="form-control lock b_campo" placeholder="">'+
                      '</div>'+
                        '<span id="help3" class=" label label-danger pull-left" style="margin-top:5px; overflow-wrap: break-word; width:410px;"></span>'+
                        '<span id="help4" class=" label label-danger pull-left" style="margin-top:5px; overflow-wrap: break-word; width:410px;"></span>'+
                    '</div>'+
                   '</div>'+ 

                 '</div>'+ 

                  '<div class="col-sm-12" style="margin-top:5px;">'+
                    '<div id="spinnerTarjetaCliente" class="progress" style="margin-bottom:1px; height:25px; visibility:hidden;"> <div class="progress-bar progress-bar-striped progress-bar-warning active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; font-size:18px; font-weight:bold;">Guardando Datos...</div> </div>'+
                    '</div>'+ 
                  '<div class="col-sm-12" style="margin-top:5px;">'+
                    '<div id="mensajeError" class="progress" style="margin-bottom:1px; height:25px; visibility:hidden;"> <div id="mensajeBarra" class="progress-bar progress-bar-danger active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; font-size:18px; font-weight:bold;"></div> </div>'+
                    '</div>'+ 

                '</div>'+
                  '</form>'+
                '</div>',
          showCancelButton: true,
          showConfirmButton: true,
          showLoaderOnConfirm: false,
          allowOutsideClick: false, 
          preConfirm: async function(){
            console.log($("#Nombre").val().length)
            console.log($("#Ruc").val().length)
            console.log($("#Telefono1").val().length)
            console.log($("#Direccion").val().length)
            if($("#Nombre").val().length == 0 || $("#Ruc").val().length == 0 || $("#Telefono1").val().length == 0 || $("#Correo").val().length == 0 ){ // || $("#Direccion").val().length == 0){
            //if($("#Nombre").val().length == 0 || $("#Ruc").val().length == 0){ // || $("#Direccion").val().length == 0){
              $( "#help4" ).text( "Ingrese algun valor !!!" ).show().fadeOut( 2000 );
              $( "#mensajeError" ).css("visibility", "visible");
              $( "#mensajeError > div" ).text("Verifique los datos Nombre Ruc y Telefono y correo !!").show().fadeOut( 4000 ); 
              // return false 
            }
            //else{ 
              $( "#help3" ).text( "Insertando... " ).show().fadeOut( 4000 ); 
              $(".b_campo").prop('disabled', false);  //habilitar campo para la carga de nuevo cliente
              $("#Codigo").prop('disabled', false);  //habilitar campo para la carga de nuevo cliente
              console.log($("#formCliente").serialize()); 
              var result = $("#formCliente").serialize(); 
              var b_chassis = $("#b_Chassis").val();
              var b_NroSerie = $("#b_NroSerie").val();
              var b_vehiculo = $("#b_Vehiculo").val();

              $(".b_campo").prop('disabled', true);  //habilitar campo para la carga de nuevo cliente
              $("#Codigo").prop('disabled', true);  //habilitar campo para la carga de nuevo cliente

              console.log(b_chassis);
              console.log(b_NroSerie);
              console.log(b_vehiculo);
              var sucu = localStorage.sucursal;
              sucu = sucu.toLowerCase(); 
              $("#spinnerTarjetaCliente").css("visibility","visible");

              
              if($("#Codigo").val().length === 0 ){//nuevo cliente 
                var sapCliente = {
                  fields: {
                    CardCode : 'C'+ $("#Ruc").val().trim(),
                    CardName : $("#Nombre").val().toUpperCase().trim(),
                    Phone1 : $("#Telefono1").val().trim(),
                    Phone2 : $("#Telefono1").val().trim(),
                    Cellular : $("#Telefono1").val().trim(),
                    EmailAddress : $("#Correo").val().trim(),
                    Address : $("#Direccion").val().trim(),
                    FederalTaxID : $("#Ruc").val().trim(),
                    AdditionalID : 'CC'
                  },
                  userFields: {
                    U_profesion: "247"
                  }
                }
                try {
                 await fetch(`http://192.168.10.80:3011/${localStorage.getItem('base')=== 'garden'?'gasa': localStorage.getItem('base')}/sap/2`, {
                    method: 'POST',
                    headers: {
                      'Accept': 'application/json, text/plain, */*',
                      'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(sapCliente)
                  })
                  .then(res => res.json())
                  .then(res => {
                    $("#spinnerTarjetaCliente").css("visibility","hidden");
                    if(res.status === 'error'){
                      alert('hubo un problema al crear nuevo Cliente !!! ' + res.message )
                      return 
                    }
                    console.log(res)
                    alert('Cliente Nuevo Registrado !!! ')
                  })
                } catch (error) {
                  $("#spinnerTarjetaCliente").css("visibility","hidden");
                  console.log(error);
                  alert('hubo un problema al crear nuevo Cliente !!! ')
                  return 
                }
              }
              var sapTarjetaEquipo = {
                fields: {
                  CustomerCode : $("#Codigo").val().length === 0? 'C'+$("#Ruc").val().trim() : $("#Codigo").val() , // si es nuevo cliente entonces enviar codigo de ruc o ci 
                  CustomerName : $("#Nombre").val(), 
                  ItemCode     : $("#b_Chassis").val(), 
                  ManufacturerSerialNum : $("#b_NroSerie").val().slice(0,17), 
                  InternalSerialNum  : $("#b_NroSerie").val(), 
                  ItemDescription    : $("#b_Vehiculo").val(), 
                  StatusOfSerialNumber  : "0", 
                },
                userFields: { }
              }
              console.log('datos de la tarjeta equipo', sapTarjetaEquipo)
              try {
                await fetch(`http://192.168.10.80:3011/${localStorage.getItem('base')=== 'garden'?'gasa': localStorage.getItem('base')}/sap/176`, {
                  method: 'POST',
                  headers: {
                    'Accept': 'application/json, text/plain, */*',
                    'Content-Type': 'application/json'
                  },
                  body: JSON.stringify(sapTarjetaEquipo)
                })
                .then(res => res.json())
                .then(res => {
                  $("#spinnerTarjetaCliente").css("visibility","hidden");
                  if(res.status === 'error'){
                    alert('hubo un problema al vincular con el nuevo cliente !!! ' + res.message)
                    return 
                  }
                  console.log(res)
                  alert('Vehiculo vinculado !!! ')
                })
                .catch((e)=>{
                  $("#spinnerTarjetaCliente").css("visibility","hidden");
                  console.log(e)
                  alert('hubo un problema al vincular con el nuevo cliente !!! ')
                  return 
                })
                 
              } catch (error) {
                $("#spinnerTarjetaCliente").css("visibility","hidden");
                console.log(error);
                alert('hubo un problema al vincular con el nuevo cliente !!! ')
                return 
              }

////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
              $.ajax( { method: "POST", url: "insertar.php", 
                        data : { 
                                  data : result,
                                  funcion: 'NuevoCliente', 
                                  chassis: b_chassis,
                                  NroSerie: b_NroSerie,
                                  vehiculo: b_vehiculo, 
                                  sucursal: sucu
                                },
                        dataType: 'html'
                      }
                    )

              //fco exito en la consulta 
              .done(function(rs) { 
                //console.log( rs );//fco para ver en la consola de la web 
                if (rs ){ 
                  //fco consulta automatizada se debe poner el mismo nombre del form como los campos del sql para que funcione auto 
                  console.log(rs); 
                  if (rs.indexOf("Error") > 0 ){
                    $( "#help4" ).text( rs ).show().fadeOut( 8000 );
                    $( "#mensajeError" ).css("visibility", "visible");
                    $( "#mensajeError > div" ).text(rs); 
                  }else{
                    swal.disableConfirmButton();
                    $("#Codigo").val(rs);
                    $( "#help4" ).text( "Registros Grabados Correctamente !!!" ).show().fadeOut( 15000 );
                    $( "#mensajeError" ).css("visibility", "visible");
                    $( "#mensajeBarra" ).addClass("progress-bar-success");
                    $( "#mensajeError > div" ).text("Datos grabados Correctamente...");

                    setTimeout(function(){ swal.close(); }, 3000); 
                  }

                } 
                else{ //fco no existen registros !!!
                  console.log("no trae nada");
                }
                $("#spinnerTarjetaCliente").css("visibility","hidden");

              })
              //fco Error en la consulta 
              .fail(function(jqxhr, textStatus, error) {
                var err = textStatus + ", " + error;
                console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 
                //$( "#help4" ).text( err ).show().fadeOut( 8000 );
                $( "#mensajeError" ).css("visibility", "visible");
                $( "#mensajeError > div" ).text(err);

               $("#spinnerTarjetaCliente").css("visibility","hidden");

              })
*/              
////////////////////////////////////////////////////////////////////////////////////////////////////////




             //swal.close();

            //}
          }
      });
      swal.disableConfirmButton();
      //$("#b_Buscar").focus();
      $(".b_campo").prop('disabled', true);  
		}
		
		function ConsultarCliente(){
			swal({
				title: ' <button id="superboton" class="btn btn-success" style="border-radius:50%;"><i class="fa fa-plus " style="font-size:36px;"></i></button> Buscar Cliente o Vehiculo',
				//title: 'Buscar Cliente o Vehiculo  <a id="NuevoCliente" href="#" onclick="NuevoCliente()"><i class="fa fa-plus-circle text-green pull-right" style="font-size:50px;"></i></a>',

				html: 
          //'<div class="row input-lg"><input type="text" id="BuscarCliente" style="width:100%;" onchange="MostrarCliente();" ></div>'+
            //Direccion 
          '<div class="col-sm-12" style="margin-top:5px;">'+
            '<div class="input-group">'+
              '<div class="input-group-btn">'+
                '<input type="text" id="BuscarCliente" name="BuscarCliente" class="form-control lock" placeholder="" onchange="MostrarCliente();" style="width:100%;">'+
                /*'<button type="button" class="btn btn-default" onclick="MostrarCliente();" >'+
                  '<i class="fa fa-search">&nbsp;&nbsp;</i>'+
                '</button>'+*/
              '</div>'+
            '</div>'+
          '</div>'+
          //
          //Direccion 
        '<div class="col-sm-12" style="margin-top:5px;">'+
            //'<div class="input-group">'+
              //'<div class="input-group-btn">'+
                '<div class="panel panel-default" id="Resultado" style="font-size:12px; text-align:left; width:100%;"></div>'+
                '<span id="help1" class="label label-danger pull-left">'+
              //'</div>'+
          //'</div>'+
        '</div>',

				//'<div class="box">'+
				//'	<div class="panel panel-default" id="Resultado" style="font-size:12px; text-align:left;"></div>'+
        //' </div>'+
				//'</div>',
				showCancelButton: true,
				showConfirmButton: true,
        confirmButtonText: 'buscar',
				allowOutsideClick: false, 
        //closeOnConfirm: false,
        preConfirm: ()=>{
          if($("#BuscarCliente").val().length == 0 ){
             swal.showValidationError("Ingrese valor")
             //resolve()
          }else {
            showLoaderOnConfirm: true,
            swal.resetValidationError()
          }
        }, 
        onClose: ()=>{ $("#nuevo-cliente").remove() }
			}).then((result)=>{ console.log('datos del swal ', result) })

      $("#superboton").on('click', ()=> NuevoCliente() )
      setTimeout(function(){ 
        $("#BuscarCliente").focus();
        document.getElementById("BuscarCliente").focus();
      }, 200);

      // if( $('div.swal2-modal').find('button[id="nuevo-cliente"]').length === 0 ){
      //   $("div.swal2-modal").append('<button type="button" onclick="NuevoCliente()" id="nuevo-cliente" class=" swal2-styled btn-info">Nuevo Cliente</button>')
      // } else{
      //   $("#nuevo-cliente").remove()
      //   $("div.swal2-modal").append('<button type="button" onclick="NuevoCliente()" id="nuevo-cliente" class=" swal2-styled btn-info">Nuevo Cliente</button>')
      // }

		}

		function AsignarCliente(el){
        var chassis = $(el).attr('id'); 
        var cliente = $(el).attr('data-cliente'); 
        var sucu = localStorage.sucursal;
        sucu = sucu.toLowerCase(); 

				$.ajax( { method: "POST", url: "consulta.php", data : { Chassis : chassis , Cliente : cliente , funcion: 'AsignarCliente', sucursal: sucu }, dataType: 'json'})
				//fco exito en la consulta 
				.done(function(rs) {
					console.log( rs ); //fco para ver en la consola de la web 
					if (rs ){
						//fco consulta automatizada se debe poner el mismo nombre del form como los campos del sql para que funcione auto 
/*						var callid = Object.keys(rs) , id = 0 , campo ; //fco esta linea obtiene el nombre de los campos 

						Object.keys(rs).forEach(function(key) { 
							campo = "#" + callid[id]; id++; 
							$(campo).val(rs[key]);
              console.log(rs[key]);
						}); //fco este forEach trae los datos de cada campo de la consulta php ver archivo consulta.php 
*/
            var id = 0 , campo , chassis2;
            rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
              var callid = Object.keys(rs2) ; //fco captura los nombres de los campos 
              Object.keys(rs2).forEach(function(key) { //fco recorre los campos con sus valores 
                campo = "#" + callid[id] , id++; //fco esta linea es para asignar automaticamente con el campo del form -> $(#campo).val(rs2[key]) //este apartado asigna al form 
                chassis2 = rs2['Chassis']; 
                $(campo).val(rs2[key]); 
              }); //fco este forEach trae los datos de cada campo de la consulta php ver archivo consulta.php 
              id = 0;
            });

            $("#nuevo-cliente").remove()
						//fco mensaje de exito 
						swal({
							type: 'success' ,
							html: 'Consulta exitosa' 
						}).then(function(e){
              var mora = ConsultarMora(chassis2); 
              consultarVinConProblemas(chassis2)              
              ConsultarPlanPlus(chassis2);
              ConsultarPlanMini(chassis2);
              consultarEncuesta(chassis2);
              console.log('cliente tiene mora ????  ' + mora );
              if (mora > 0 ){
                swal({
                  type: 'warning',
                  html: 'Cliente con mora de ' + mora + ' dias !!!' 
                }).then(function(){
                  Campaña(chassis2);
                });
              }else {
                 Campaña(chassis2);
              }

            });
        
					}	
					else{ //fco no existen registros !!!
						swal({
							type: 'warning',
							html: 'No existen registros !!!' 
						}).then(function(){
							ConsultarCliente();
						});
					}
				})
				
				//fco Error en la consulta 
				.fail(function(jqxhr, textStatus, error) {
					var err = textStatus + ", " + error;
					console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 
					swal({
						type: 'error',
						html: 'Error en la consulta<br>' + err
					});
				})
		}

    function ConsultarPlanPlus(chassis){
      chassis = chassis.slice();
      var sucu = localStorage.sucursal;
      sucu = sucu.toLowerCase(); 
      console.log('chassis para el plan plus... ', chassis);
      $.ajax( { method: "POST", url: "consulta.php", data : {vin : chassis , funcion: 'ConsultarPlanPlus' , sucursal: sucu }, dataType: 'json' }) 
      .done(function( rs ) { 
        if ( rs ){ 
            if (rs.length > 0 ){
             
              console.log( rs[0]['planPlus'] );
              if(rs[0]['planPlus'] > 0 ){
                console.log("datos para controlar Plan PLus...  ", rs);
                let timer = setInterval(function(){
                  if( $(".swal2-modal").hasClass('swal2-hide') ){
                    swal({
                      type: 'info',
                      html: `<h3 style="font-weight:bold;">Cliente con Plan Plus 3</h3>  <br><br> ${rs[0]['vigencia']} /36 meses antiguedad <br> Mantenimiento gratuito hasta 100.000km o 3 años,<br> lo que se cumpla primero <br><br> <span class="label-warning rounded" style="border-radius:5px; padding:3px;">Cliente al dia para el otorgamiento</span>`
                    });
                    clearInterval(timer)
                  }
                }, 1000 ) 

                $("#PlanPlus3").css('visibility', 'visible');
                $("#PlanPlus3").html('<i class="fa fa-bell" aria-hidden="true"></i> Plan Plus 3 ( '+ rs[0]['vigencia']  +'/36 meses) Mantenimiento gratuito hasta 100.000km o 3 años');
              }
            }
        }
      })
      .fail(function(jqxhr, textStatus, error) {
        console.log('error en la consulta de plan plus..  ' + error );
      });
    }

    async function ConsultarPlanMini(chassis){
      chassis = chassis.slice();

      //consultamos si tiene servicio gratuito segun memo 110-2022 ventas del 2023 en adelante 
      let fd = new FormData();
      fd.append("vin", chassis)
      fd.append("funcion", "ConsultarPlanMini2023");
      fd.append("sucursal", "alider");
      const res = await fetch(`/consulta.php`, {method: 'POST', body: fd})
      let datos = await res.json()
      if(datos.length > 0 ){
        console.log('vigencia mini 2023 ', datos)
        swal({
              type: datos[0]['vigenciaMes'] > 36 ? 'error' :'success',
              html: 'Promocion Mini ventas 2023' +
                    '<br>Garantia extendida - Servicio Gratuito ' + 
                    `${(datos[0]['vigenciaMes'] > 36 )? '<i class="fa fa-times text-danger fa-lg" aria-hidden="true"></i>': '<i class="fa fa-check text-success fa-lg" aria-hidden="true"></i>'}<br><br>` +
                    'Vigencia 3 años sin Limite kilometraje <br>'+
                    datos[0]['vigenciaMes'] + '/36 meses'
            });

        return 
      } 
      console.log('paso por aqui.... ')
      console.log('ver datos mini 2023 ', datos )

      var sucu = localStorage.sucursal;
      sucu = sucu.toLowerCase(); 
      console.log('chassis para el plan plus... ', chassis);
      $.ajax( { method: "POST", url: "consulta.php", data : {vin : chassis , funcion: 'ConsultarPlanMini' , sucursal: sucu }, dataType: 'json' }) 
      .done(function( rs ) { 
        if ( rs ){ 
            if (rs.length > 0 ){
              console.log( rs[0]['planMini'] );
                console.log("datos para controlar Plan Mini...  ", rs);
                let timer = setInterval(function(){
                  if( $(".swal2-modal").hasClass('swal2-hide') ){
                    swal({
                      type: 'info',
                      html: 'Cliente Mini con '+ rs[0]['planMini'] +
                            '<br>Servicio Gratuito '+
                            `${(rs[0]['vigencia'] > 12  )? '<i class="fa fa-times text-danger fa-lg" aria-hidden="true"></i>': '<i class="fa fa-check text-success fa-lg" aria-hidden="true"></i>'} <br><br>`+
                            rs[0]['vigencia'] + '/12 meses <br>'+
                            'Vigencia 1 año o 20.000km <br>'+
                            'Garantia 2 años sin Limite kilometraje <br>'
                    });
                    clearInterval(timer)
                  }
                },1000) 
                $("#PlanPlus3").css('visibility', 'visible');
                $("#PlanPlus3").html('Mini '+ rs[0]['planMini'] +' ( '+ rs[0]['vigencia']  +'/12 meses)');
            }
        }
      })
      .fail(function(jqxhr, textStatus, error) {
        console.log('error en la consulta de plan plus..  ' + error );
      });
    }

  function consultarEncuesta(vin){
    var sucu = localStorage.getItem('sucursal');
    $.ajax( { method: "POST", url: "consulta.php", data : {vin : vin , funcion: 'consultarEncuesta' , sucursal: sucu }, dataType: 'json' }) 
      .done(function( rs ){
        console.log('datos de la encuesta del taller ' , rs)
        var msg = `
        <ul class="list-group">
          <li class="list-group-item active"><strong>DATOS DE LA ULTIMA ENCUESTA</strong></li>
          <li class="list-group-item" style="text-align:left;"><strong>Asesor: </strong> ${rs[0]['asesor']}</li>
          <li class="list-group-item" style="text-align:left;"><strong>Nor Orden: </strong> ${rs[0]['nroOrden']}</li>
          <li class="list-group-item" style="text-align:left;"><strong>Calificacion: </strong> ${rs[0]['recomiendaTaller']}</li>
          <li class="list-group-item" style="text-align:left;"><strong>Comentario: </strong> ${rs[0]['comentarioEstadiaTaller']}</li>
          <li class="list-group-item" style="text-align:left;"><strong>Comentario Negativo: </strong> ${rs[0]['comentarioNegativoEtiqueta']}</li>
        </ul>         
        `
        swal({
          //type: 'warning',
          html: msg,
          width: '100%'
        });

      })
  }

  function consultarVinConProblemas(vin){
    //pedido de stellantis - 2024-01-10
    if( '98861115YJK157682' === vin.slice(-17) ){
      swal({
        type: 'warning',
        html: `
              <span class="label label-danger" style="font-size:24px;">CHASIS ADULTERADO</span> 
              <br><br>
              <span class="label label-danger" style="font-size:24px;">NO RECIBIR</span>
              <br><br>
              <span class="label label-default" style="font-size:24px;">${vin.slice(-17)}</span> 
              `,
        //width: '80%'
      });
    }

  }


   function ConsultarMora(chassis){ 
      $("#spinnerMora").css("visibility", "visible");
      var mora; 
      var sucu = localStorage.sucursal;
      chassis = chassis.slice();
      sucu = sucu.toLowerCase(); 
      $.ajax( { method: "POST", url: "consulta.php", data : {vin : chassis , funcion: 'ConsultarMora' , sucursal: sucu }, dataType: 'json' }) 
      .done(function( rs ) { 
        $("#spinnerMora").css("visibility", "hidden");
        console.log("datos para controlar mora ", rs);
        var mensaje = "";
        if ( rs ){ 
            //if (mora > 0 ){
            if (rs.length > 0 ){
			          mora = rs[0]['mora'];
                if(Number(mora) > 0 ){

                  // if(rs[0]['plan_familiar3'] == 'si'){
                  //   mensaje = 'Cliente con ' + mora + ' dias de Mora <br> <h2> <span class="label label-danger"> Tiene Plan Plus 3 Service Basico Gratuito !!! </span></h2>';
                  // }else{
                  //   //mensaje = 'Cliente con ' + mora + ' dias de Mora <br> <h2> <span class="label label-danger"> Tiene Plan Plus 3 Service Basico Gratuito !!! </span></h2>';
                  //   mensaje = 'Cliente con ' + mora + ' dias de Mora !!!';
                  // }
                  mensaje = 'Cliente con ' + mora + ' dias de Mora !!!';
                
                let timer = setInterval(function(){
                  if( $(".swal2-modal").hasClass('swal2-hide') ){
                    swal({
                      type: 'warning',
                      html: mensaje,
                      width: '100%'
                    });
                    clearInterval(timer);
                  } 
                }, 1000)

                $("#mora").css("visibility","visible");
                $("#mora").css("background-color","#dd4b39");
                // if(rs[0]['plan_familiar3'] == 'si'){
                //   $("#mora").html("<i class='fa fa-bell' aria-hidden='true'></i> Vehiculo con " + mora + " dias de Mora Tiene Plan Plus 3 Service Basico Gratuito" );
                // }else{
                //   $("#mora").html("<i class='fa fa-bell' aria-hidden='true'></i> Vehiculo con " + mora + " dias de Mora" );
                // }
                $("#mora").html("<i class='fa fa-bell' aria-hidden='true'></i> Vehiculo con " + mora + " dias de Mora" );

              } else{
                $("#mora").css("visibility","visible");
                $("#mora").css("background-color","#00a65a");
                $("#mora").html("<i class='fa fa-check-circle' aria-hidden='true'></i> Vehiculo al Dia !" );

              }


            }else {
              $("#mora").css("visibility","visible");
              $("#mora").css("background-color","#00a65a");
              $("#mora").html("<i class='fa fa-check-circle' aria-hidden='true'></i> Vehiculo al Dia !" );

            } 
        }else {
          $("#mora").css("visibility","visible");
          $("#mora").css("background-color","#00a65a");
          $("#mora").html("<i class='fa fa-check-circle' aria-hidden='true'></i> Cliente al Dia !" );
        } 
      })
      .fail(function(jqxhr, textStatus, error) {
        console.log('error en la consulta de mora..  ' + error );
        $("#spinnerMora").css("visibility", "hidden");
      });
      
    }


		function MostrarCliente(){ //fco esta funcion esta relacionada a consultar clientes cuando se crea una nueva orden 
			//fco ajax consultar datos!!!
			result = $('#BuscarCliente').val();
      $('#Resultado > *').remove();
 
      var buscando = '<div class="progress"> <div class="progress-bar progress-bar-striped active opacity-75" role="progressbar" style="width:100%">Buscando... <span id="contador"></span> </div> </div>'

      $('#Resultado').append(buscando);

			if (result == ''){
				$('#Resultado > *').remove();
			}else {	
        var sucu = localStorage.sucursal;
        sucu = sucu.toLowerCase();  

				$.ajax( { method: "POST", url: "consulta.php", data : {CodigoCliente : result , funcion: 'ConsultarCliente' , sucursal: sucu }, dataType: 'json'})
				//fco exito en la consulta 
				.done(function(rs) {
					console.log( rs );//fco para ver en la consola de la web 
					if (rs.length > 0 ){
            rs = rs.map(item=> item['0'].replaceAll('@', '"'))
						//fco consulta automatizada se debe poner el mismo nombre del form como los campos del sql para que funcione auto 
						var id = 0 , campo; //fco esta linea obtiene el nombre de los campos 
						$('#Resultado > *').remove(); //fco vacia el body de la tabla 
						// rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
						// 	var callid = Object.keys(rs2); //fco captura los nombres de los campos 
						// 	Object.keys(rs2).forEach(function(key) { //fco recorre los campos con sus valores 
						// 		campo = "#" + callid[id] , id++; //fco esta linea es para asignar automaticamente con el campo del form -> $(#campo).val(rs2[key]) //este apartado asigna al form 
						// 		$('#Resultado').append(rs2[key]);
						// 	}); //fco este forEach trae los datos de cada campo de la consulta php ver archivo consulta.php 
						// 	id = 0;
						// });

            rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
              var callid = Object.keys(rs2); //fco captura los nombres de los campos 
              Object.keys(rs2).forEach(function(key) {  //fco recorre los campos con sus valores 
                if(key === '0'){
                  campo = "#" + callid[id] , id++; 
                  html = rs2[key];
                  //html = html.replace(/@/g, '"');
                  console.log('html ', html)
                  $('#Resultado').append(html);
                }
              }); //fco este forEach trae los datos de cada campo de la consulta php ver archivo consulta.php 
              id = 0;
            });

						if ( $('#BuscarCliente').val().length == 0 ){$('#Resultado > *').remove(); } //fco para prevenir que no quede nada colgado
						//console.log($('#BuscarCliente').val().length);
					}	
					else{ //fco no existen registros !!!
						$('#Resultado > *').remove();
            $( "#help1" ).text( "No existen registros !!!" ).show().fadeOut( 4000 );
            $("#BuscarCliente").focus();
					}
          
				})
				//fco Error en la consulta 
				.fail(function(jqxhr, textStatus, error) {
          
          $('#Resultado > *').remove();
					var err = textStatus + ", " + error;
					console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 
					swal({
						type: 'error',
						html: 'Error en la consulta Ajax <br>' + err
					});
				})
			}
		}	

    function ConsultarCliente2(){

      $(".b_campo").prop('disabled', true); //habilitar campo para la carga de nuevo cliente
      $('#Codigo').val('');
      $('#Nombre').val('');
      $('#Ruc').val('');
      $('#Telefono1').val('');
      $('#Direccion').val('');
      $('#Correo').val('');
      swal.disableConfirmButton();
    if ( $.trim( $( "#b_Buscar2").val()) === "") {
        $( "#help2" ).text( "Ingrese algun valor !!!" ).show().fadeOut( 4000 );
        $("#b_Buscar2").focus();
        $('#Resultado').html('');
        return;
      } 
      result = $('#b_Buscar2').val();
      if (result == ''){
        $('#Resultado > *').remove();
      }else { 
        var sucu = localStorage.sucursal;
        sucu = sucu.toLowerCase(); 

        $.ajax( { method: "POST", url: "consulta.php", data : {CodigoCliente : result , funcion: 'ConsultarCliente2', sucursal: sucu }, dataType: 'json'})
        //fco exito en la consulta 
        .done(function(rs) {
          console.log( rs );//fco para ver en la consola de la web 
          if (rs ){
            //fco consulta automatizada se debe poner el mismo nombre del form como los campos del sql para que funcione auto 
            var id = 0 , campo , html = ""; //fco esta linea obtiene el nombre de los campos 
            $('#Resultado > *').remove(); //fco vacia el body de la tabla 
            rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
              console.log(rs['Codigo']);
              html += '<li class=@list-group-item bg-warning@ style=@font-size:20px; width:100%; text-align:left; @ data-correo=@'+rs2['correo']+'@ data-codigo=@'+rs2['Codigo']+'@ data-nombre=@'+rs2['Nombre']+'@ data-telefono1=@'+rs2['Telefono1']+'@ data-direccion=@'+rs2['Direccion']+'@ data-ruc=@'+rs2['Ruc']+'@ onclick=@setcliente(this)@ ><span class=@glyphicon glyphicon-user@></span>&nbsp; <span>'+ rs2['Nombre'] +' - '+ rs2['Ruc'] +'</span></li>' + '\n';
            }); 
            html = html.replace(/@/g, '"'); //cambiar el @ por las comillas 
            $('#Resultado').append( html );

            if ( $('#BuscarCliente').val().length == 0 ){$('#Resultado > *').remove(); } //fco para prevenir que no quede nada colgado
            //console.log($('#BuscarCliente').val().length);
          } 
          else{ //fco no existen registros !!!
            $('#Resultado > *').remove();
            $( "#help2" ).text( "No existen registros !!!" ).show().fadeOut( 4000 );
            $("#b_Buscar2").focus();
          }
        })
        //fco Error en la consulta 
        .fail(function(jqxhr, textStatus, error) {
            $('#Resultado > *').remove();
            $( "#help2" ).text( "Error al consultar registros !!!" ).show().fadeOut( 4000 );
            $("#b_Buscar2").focus();

          /*
          var err = textStatus + ", " + error;
          console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 
          swal({
            type: 'error',
            html: 'Error en la consulta Ajax <br>' + err
          });
          */
        })
      }
    }

  function setcliente (elemento) {
    console.log($(elemento).attr('data-codigo'));
    $('#Codigo').val( $(elemento).attr('data-codigo'));
    $('#Nombre').val( $(elemento).attr('data-nombre'));
    $('#Ruc').val( $(elemento).attr('data-ruc'));
    $('#Telefono1').val( $(elemento).attr('data-telefono1'));
    $('#Direccion').val( $(elemento).attr('data-direccion'));
    $('#Correo').val( $(elemento).attr('data-correo'));
    $("#Resultado > * ").removeClass("bg-yellow");
    $(elemento).addClass("bg-yellow");
    swal.enableConfirmButton();//habilitar boton de confirmacion tarjeta cliente.
  }

  function NuevoCliente2(){

    $('#Codigo').val('');
    $('#Nombre').val('');
    $('#Ruc').val('');
    $('#Telefono1').val('');
    $('#Direccion').val('');
    $('#Correo').val('');
    $("#Resultado").html('');

    swal.enableConfirmButton();//habilitar boton de confirmacion tarjeta cliente.
    $(".b_campo").prop('disabled', false);  //habilitar campo para la carga de nuevo cliente
    $("#Consultar").prop('disabled', true);  //habilitar campo para la carga de nuevo cliente
    $("#b_Buscar").prop('disabled', true);  //habilitar campo para la carga de nuevo cliente
    $("a[href='#menu1']").click();
    $("#Nombre").focus();// setear este campo

  } 
		function ConsultarTurnos(){

			//fco consultar el listado de turnos del dia 	
			swal({
				title: '<h3>Turnos del Dia</h3>',
				html:
          '<div class="col-xs-12" style="padding:0px;">'+
          ' <div class="input-group">'+
          '  <input id="buscar" type="text" class="form-control" name="buscar" placeholder="Buscar cliente... ">'+
          '  <div class="input-group-btn">'+
          '    <a class="btn btn-success" onclick="BuscarTurno(1)" type="button">'+
          '      &nbsp;&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;'+
          '    </a>'+

          //'    <a class="btn btn-default" onclick="BuscarTurno(2)">'+ 
          //  '      &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;&nbsp;'+
          '    </a>'+

          '  </div>'+

          ' </div>'+
          '</div>'+
          '<br><br>'+
          '<div class="col-xs-12" style="padding:0px;">'+
          '  <ul class="nav nav-tabs">'+
          '    <li class="active"><a data-toggle="tab" href="#menu1">Turno Mañana</a></li>'+
          '    <li><a data-toggle="tab" href="#menu2">Turno Tarde</a></li>'+
          '  </ul>'+
            '<div class="tab-content">'+
            '  <div id="menu1" class="tab-pane fade in active">'+ 

      					'<div class="col-xs-3" style="padding:0px;">'+
      					'	<ul class="nav nav-tabs tabs-left">'+
      					'		<li class="active"><a class="text-muted" href="#730" data-toggle="tab" aria-expanded="true" >07:30</a></li>'+
      					'		<li class=""      ><a class="text-muted" href="#745" data-toggle="tab" aria-expanded="false">07:45</a></li>'+
      					'		<li class=""      ><a class="text-muted" href="#80" data-toggle="tab" aria-expanded="false">08:00</a></li>'+
      					'		<li class=""      ><a class="text-muted" href="#815" data-toggle="tab" aria-expanded="false">08:15</a></li>'+
      					'		<li class=""	  ><a class="text-muted" href="#830" data-toggle="tab" aria-expanded="true" >08:30</a></li>'+
      					'		<li class=""      ><a class="text-muted" href="#845" data-toggle="tab" aria-expanded="false">08:45</a></li>'+
      					'		<li class=""      ><a class="text-muted" href="#90" data-toggle="tab" aria-expanded="false">09:00</a></li>'+
      					'		<li class=""      ><a class="text-muted" href="#915" data-toggle="tab" aria-expanded="false">09:15</a></li>'+
      					'		<li class=""      ><a class="text-muted" href="#930" data-toggle="tab" aria-expanded="false">09:30</a></li>'+
      					'		<li class=""      ><a class="text-muted" href="#945" data-toggle="tab" aria-expanded="false">09:45</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#100" data-toggle="tab" aria-expanded="false">10:00</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1015" data-toggle="tab" aria-expanded="false">10:15</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1030" data-toggle="tab" aria-expanded="false">10:30</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1045" data-toggle="tab" aria-expanded="false">10:45</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#110" data-toggle="tab" aria-expanded="false">11:00</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1115" data-toggle="tab" aria-expanded="false">11:15</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1130" data-toggle="tab" aria-expanded="false">11:30</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1145" data-toggle="tab" aria-expanded="false">11:45</a></li>'+
      					'	</ul>'+
      					'</div>'+

      					'<div class="col-xs-9"  style="padding:5px;">'+
      					'	<div class="tab-content" id="resultado">'+
      					'		<div class="tab-pane active" id="730">	<div class="panel panel-default" style="font-size:14px; text-align:left;"> 	</div>	</div>'+
      					'		<div class="tab-pane " id="745">	<div class="panel panel-default" style="font-size:14px; text-align:left;"> 	</div>	</div>'+
      					'		<div class="tab-pane " id="80" >	<div class="panel panel-default" style="font-size:14px; text-align:left;"> 	</div>	</div>'+
      					'		<div class="tab-pane " id="815">	<div class="panel panel-default" style="font-size:14px; text-align:left;"> 	</div>	</div>'+
      					'		<div class="tab-pane " id="830">	<div class="panel panel-default" style="font-size:14px; text-align:left;"> 	</div>	</div>'+
      					'		<div class="tab-pane " id="845">	<div class="panel panel-default" style="font-size:14px; text-align:left;"> 	</div>	</div>'+
      					'		<div class="tab-pane " id="90" >	<div class="panel panel-default" style="font-size:14px; text-align:left;"> 	</div>	</div>'+
      					'		<div class="tab-pane " id="915">	<div class="panel panel-default" style="font-size:14px; text-align:left;"> 	</div>	</div>'+
      					'		<div class="tab-pane " id="930">	<div class="panel panel-default" style="font-size:14px; text-align:left;"> 	</div>	</div>'+
      					'		<div class="tab-pane " id="945">	<div class="panel panel-default" style="font-size:14px; text-align:left;"> 	</div>	</div>'+
                '   <div class="tab-pane " id="100"> <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="1015"> <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="1030"> <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="1045"> <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="110">  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="1115">  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="1130">  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="1145">  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
      					'	</div>'+
    					  '</div>'+

               '</div>' +
            '  <div id="menu2" class="tab-pane fade in">'+ 

                '<div class="col-xs-3" style="padding:0px;">'+
                ' <ul class="nav nav-tabs tabs-left">'+
                '   <li class="active"><a class="text-muted" href="#130" data-toggle="tab" aria-expanded="true" >13:00</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1315" data-toggle="tab" aria-expanded="false">13:15</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1330" data-toggle="tab" aria-expanded="false">13:30</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1345" data-toggle="tab" aria-expanded="false">13:45</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#140" data-toggle="tab" aria-expanded="false">14:00</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1415" data-toggle="tab" aria-expanded="false">14:15</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1430" data-toggle="tab" aria-expanded="false">14:30</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1445" data-toggle="tab" aria-expanded="false">14:45</a></li>'+
                '   <li class=""    ><a class="text-muted" href="#150" data-toggle="tab" aria-expanded="true" >15:00</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1515" data-toggle="tab" aria-expanded="false">15:15</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1530" data-toggle="tab" aria-expanded="false">15:30</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1545" data-toggle="tab" aria-expanded="false">15:45</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#160" data-toggle="tab" aria-expanded="false">16:00</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1615" data-toggle="tab" aria-expanded="false">16:15</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1630" data-toggle="tab" aria-expanded="false">16:30</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1645" data-toggle="tab" aria-expanded="false">16:45</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#170" data-toggle="tab" aria-expanded="false">17:00</a></li>'+
                '   <li class=""      ><a class="text-muted" href="#1730" data-toggle="tab" aria-expanded="false">17:30</a></li>'+
                ' </ul>'+
                '</div>'+

                '<div class="col-xs-9"  style="padding:5px;">'+
                ' <div class="tab-content" id="resultado">'+
                '   <div class="tab-pane active" id="130">  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="1330">  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="140" >  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="1430">  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="150">  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="1530">  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="160" >  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="1630">  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="170">  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                '   <div class="tab-pane " id="1730">  <div class="panel panel-default" style="font-size:14px; text-align:left;">  </div>  </div>'+
                ' </div>'+
                '</div>'+

               '</div>'+ 

              '</div>'+


          '</div>',
				allowOutsideClick: false, 
				showCloseButton: true, 
				showConfirmButton: false, 
				confirmButtonText:'Aceptar', 
				cancelButtonText:'Cancelar' 
			}); 
			MostrarTurnos();	

		}
		
		function MostrarTurnos(){ 
      var sucu = localStorage.sucursal; 
      sucu = sucu.toLowerCase(); 

			//window.navigator.vibrate(200);//fco si es mobil al abrir hace vibrar el telefono o tablet 
			$.ajax( { method: "POST", url: "consulta.php", data : { funcion: 'ConsultarTurnos' , sucursal: sucu }, dataType: 'json'}) 
			.done(function(rs) { 
				console.log( rs );//fco para ver en la consola de la web 
				if (rs ){ 
					//fco consulta automatizada se debe poner el mismo nombre del form como los campos del sql para que funcione auto 
					var id = 0 , campo; //fco esta linea obtiene el nombre de los campos 
					rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
						//console.log( rs2['hora'] + " - "  + rs2['html']);
						$('#'+ rs2['hora'] +' > div' ).append(rs2['html']);
            $("a[href='#"+ rs2['hora'] +"']").css('color','#428bca')
						//if ($("a[href='#"+ rs2['hora'] +"']").css('color').length > 0 ){ $("a[href='#"+ rs2['hora'] +"']").css('color','#428bca') } //fco pone en negrita 
					});
				}
				else{ //fco no existen registros !!! 
					swal({
						type: 'error',
						html: 'No existen Registros !!!'
					});
				}
				
			})
			//fco Error en la consulta 
			.fail(function(jqxhr, textStatus, error) {
				var err = textStatus + ", " + error;
				console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 
				swal({
					type: 'error',
					html: 'Error en la consulta Ajax <br>' + err
				});
			})

		}

    function SetTurnosContactar(id){
      $.ajax( { method: "POST", url: "consulta.php", data : { funcion: 'SetTurnosContactar', turno: id }, dataType: 'html'})
      //fco exito en la consulta 
      .done(function(rs) { 
        console.log( rs );//fco para ver en la consola de la web 
        if (rs.indexOf("Exito") >= 0 ){
          //fco consulta automatizada se debe poner el mismo nombre del form como los campos del sql para que funcione auto 
          toastr.success('Registro grabado !!!');

          swal({
            type: 'success',
            html: 'Registros Grabados !!!'
          });

        }
        else{ //fco no existen registros !!! 
          toastr.error('Error al grabar los datos !!!');

          swal({
            type: 'error',
            html: 'No existen Registros !!!'
          });
        }

      })
      //fco Error en la consulta 
      .fail(function(jqxhr, textStatus, error) {
        var err = textStatus + ", " + error;
        console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 
        swal({
          type: 'error',
          html: 'Error en la consulta Ajax <br>' + err
        });
      })

    }

    function SetTurnos(id){

      /*
        estado de turnos 
        1 - Atender
        2 - Llamado
        3 - Espera
      */
      var sucu = localStorage.sucursal; 
      sucu = sucu.toLowerCase(); 
      alert(sucu)
      $.ajax( { method: "POST", url: "consulta.php", data : { funcion: 'SetTurnos', turno: id , sucursal:sucu }, dataType: 'html'})
      //fco exito en la consulta 
      .done(function(rs) {
        console.log( rs );//fco para ver en la consola de la web 
        if (rs.indexOf("Exito") >= 0 ){
          //fco consulta automatizada se debe poner el mismo nombre del form como los campos del sql para que funcione auto 
          toastr.success('Registro grabado !!!');

          /*swal({
            type: 'success',
            html: 'Registros Grabados !!!'
          });*/

          if ( $("#NroLlamada").val().length == 0 ){ 
            $("#Motivo").val( $("." + id + " span:nth-child(2)").text() ); 
            $("#PedidoCliente").val( $("." + id + " span:nth-child(6)").text() ); 
            var t_nombre = $("#tnombre_" + id).text(); 
            t_nombre = t_nombre.trim(); 
            var pos = t_nombre.indexOf(" "); 
            if(pos < 0 ){ 
              pos = t_nombre.length; 
            } 
            var str = t_nombre.substr(0, pos ); 
            var pos2 = t_nombre.indexOf(" ", pos +1 ); 
            if (pos2 < 0 ){ 
              var str2 = t_nombre.substr(pos, t_nombre.length ); 
            }else { 
              var str2 = t_nombre.substr(pos, pos2); 
            } 
            t_nombre = str2 + ' ' + str; 
            ///t_nombre = t_nombre.trim();
            console.log( $( "#tnombre_" + id ).text() ); 

            $("#PedidoCliente").focus(); 
            ConsultarCliente(); 
            $("#BuscarCliente").val( t_nombre ); 
            $("#BuscarCliente").trigger("onchange"); 
            toastr.info('Datos copiados a la Ot !!!'); 
          }else {
            swal({
              type: 'info', 
              title:'No se pueden copiar sobre datos ya guardados !'
            });

          }

        }
        else{ //fco no existen registros !!! 
          toastr.error('Error al grabar los datos !!!');

          /*swal({
            type: 'error',
            html: 'No existen Registros !!!'
          });*/
        }

      })
      //fco Error en la consulta 
      .fail(function(jqxhr, textStatus, error) {
        var err = textStatus + ", " + error;
        console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 
        swal({
          type: 'error',
          html: 'Error en la consulta Ajax <br>' + err
        });
      })
      
    }

    function BuscarTurno(id){
      /*
      1 buscar cliente dentro de turnos 
      2 reset de campo de busqueda.. 
      */

      if (id == 1 ){
        texto = $("#buscar").val();
        //var resultado = $("#resultado > div:contains('" + texto + "')") ;
        var resultado = $("#resultado:contains(" + texto + ")" ) ;
        console.log( resultado ) ;

      }else {
        $("#buscar").val(""); 
      }
/*
      if (texto.length == 0 ){
        $("#" + id + " tbody tr").show();
      }else{
        $("#" + id + " tbody tr").not(':contains("'+ texto +'")').hide();
      }
      $('#cant-filas').html($('#'+ id +' >tbody >tr:visible').length);
      console.log(id);
      console.log( $('#'+ id +' >tbody >tr:visible').length);
*/
    }

		function ConsultarLts(){
			swal({
				title: 'Service',
				html: 
					'<div class="btn-group btn-group-justified">'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>1.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>5.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>10.000 km </a>'+
					'</div>'+
					'<div class="btn-group btn-group-justified">'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>15.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>20.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>25.000 km </a>'+
					'</div>'+
					'<div class="btn-group btn-group-justified">'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>30.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>35.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>40.000 km </a>'+
					'</div>'+
					'<div class="btn-group btn-group-justified">'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>45.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>50.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>55.000 km </a>'+
					'</div>'+
					'<div class="btn-group btn-group-justified">'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>60.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>65.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>70.000 km </a>'+
					'</div>'+
					'<div class="btn-group btn-group-justified">'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>75.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>80.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>85.000 km </a>'+
					'</div>'+
					'<div class="btn-group btn-group-justified">'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>90.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>95.000 km </a>'+
					'<a class="btn btn-default" onclick=""><i style="font-size:24px;" class="fa fa-dashboard" aria-hidden="true"></i><br>100.000 km </a>'+
					'</div>'
				, 
				allowOutsideClick: false,
				showCloseButton: true,
				showCancelButton: true,
				showConfirmButton: false,
				confirmButtonText:'<i class="fa fa-thumbs-up" ></i> Listo!',
				cancelButtonText:'Cancelar'
			});
		}

		function ConsultarColor(){
			swal({
				title: 'Buscar Color ',
				html: 
				'<div class="row input-lg"> <input type="text" id="BuscarColor" style="width:100%;" onkeyup="MostrarColor();" ></div>'+
				'<div class="list-group" id="Resultado" style="max-height:400px; overflow-y:scroll; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.25); border-radius: 5px;">'+
				'</div>'+
				'</div>',
				showCancelButton: true,
				showLoaderOnConfirm: true,
				allowOutsideClick: false
			})
		}

		function MostrarColor(){
			//fco ajax consultar datos!!!
			result = $('#BuscarColor').val();
			if (result == ''){
				$('#Resultado > *').remove();
			}else {	
				$.ajax( { method: "POST", url: "consulta.php", data : {Color : result , funcion: 'ConsultarColor' }, dataType: 'json'})
				//fco exito en la consulta 
				.done(function(rs) {
					//console.log( rs );//fco para ver en la consola de la web 
					if (rs ){
						//fco consulta automatizada se debe poner el mismo nombre del form como los campos del sql para que funcione auto 
						var id = 0 , campo; //fco esta linea obtiene el nombre de los campos 
						$('#Resultado > *').remove(); //fco vacia el body de la tabla 
						rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
							var callid = Object.keys(rs2); //fco captura los nombres de los campos 
							Object.keys(rs2).forEach(function(key) {  //fco recorre los campos con sus valores 
								campo = "#" + callid[id] , id++; //fco esta linea es para asignar automaticamente con el campo del form -> $(#campo).val(rs2[key]) //este apartado asigna al form 
								$('#Resultado').append(rs2[key]);
							}); //fco este forEach trae los datos de cada campo de la consulta php ver archivo consulta.php 
							id = 0;
						});
						if ( $('#BuscarColor').val().length == 0 ){$('#Resultado > *').remove(); } //fco para prevenir que no quede nada colgado
						console.log($('#BuscarColor').val().length);
					}	
					else{ //fco no existen registros !!!
						$('#Resultado > *').remove();
					}
				})
				//fco Error en la consulta 
				.fail(function(jqxhr, textStatus, error) {
					var err = textStatus + ", " + error;
					console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 
					swal({
						type: 'error',
						html: 'Error en la consulta Ajax <br>' + err
					});
				})
			}
		}

		function AsignarColor(el){
			var result = $(el).attr("id"); 
			$("#Identificador").val(result);
			swal({
				type: 'success' ,
				html: 'Consulta exitosa' 
			});
		}
		
		function AsignarLts(){
			
		}
		
		function SetObservacion(objeto){
			var valor = $(objeto).attr('id'); 
			if ( $("#Observacion").html().indexOf(valor) >= 0 ){
				 $("#Observacion").html($("#Observacion").html().replace(" #"+valor,""));
			}else{
				$("#Observacion").html( $('#Observacion').html() +" #"+ valor );
			} 
		}

		//fco configuraciones al cargar la pagina como nuevo 
		$(".lock").attr('disabled', true); 

		function BloquearCampos(activo) { 
      let externo = 0 
      if(window.origin.includes('ngrok')){
        externo = 1 
      }
			//fco esta funcion realiza todo el bloqueo de campos y desbloqueo cuando se recupera o se quiera cargar nueva orden 
      if (activo == 1){ //fco bloquear 
        $('form').find('input:not(.lock), textarea:not(.lock), button, select:not(.lock)').prop('disabled',true); //esta linea sirve para bloquear todos los campos 
        $('#FechaPrometida').prop('disabled',false);
        $(".botonera > div > a").prop("onclick", null); 
        $("#NuevoCliente").prop("onclick", null)
        //$("#EditarImagen").prop("onclick", null)
        if(externo == 0 ){$( "div#fuelSliderDiv" ).slider( "option", "disabled", true ); } 
      }else if (activo == 2){ //fco bloquear 
        $('form').find('input, textarea, button, select').prop('disabled',true); //esta linea sirve para bloquear todos los campos 
        $(".botonera > div > a").prop("onclick", null); 
        $("#NuevoCliente").prop("onclick", null)
        //$("#EditarImagen").prop("onclick", null)
        
        if(externo == 0 ){$( "div#fuelSliderDiv" ).slider( "option", "disabled", true );} 
			}else{ //fco desbloquear 
				$('form').find('input:not(.lock), textarea:not(.lock), button, select:not(.lock)').prop('disabled',false); 
				$(".botonera > div > a").attr("onclick" ,"$(this).toggleClass('btn-success text-white'); SetObservacion(this);" ); //este texto que contiene el onclick esta en la etiqueta 
				if(externo == 0 ){ $( "div#fuelSliderDiv" ).slider( "option", "disabled", false );} // fco para desbloquear 
				$("#NuevoCliente").attr("onclick", "NuevoCliente()")
				$("#EditarImagen").attr("onclick", "EditarImagen()")
			}
		}

		$("#form1").submit(function(event){
			event.preventDefault();
		})

		
		function Grabar(evento){
      console.log($("#form1").serialize());

      //controles antes de grabar 
      if( $("#Asesor").text() == 'Asesor ?' ){
        swal({
          type:'info',
          title:'Debe ingresar Asesor !!'
        }).then(function () {
          $("#Asesor").focus();
          Asesor();
        });
        return ;

      }else if ($("#NroOt").val().length == 0 ){
        /*
        swal({
          type:'info',
          title:'Debe ingresar Nro Ot !!'
        }).then(function () {
          $("#NroOt").focus();
        });
        return ;
        */

      }else if ($("#FechaPrometida").val().trim().length == 0 && localStorage.sucursal == 'ALIDER' ){
        
        swal({
          type:'info',
          title:'Debe ingresar la Fecha Prometida !!'
        }).then(function () {
          $("#FechaPrometida").focus();
        });
        return ;

      }else if ($("#Chapa").val().trim().length < 6 ){
        
        swal({
          type:'info',
          title:'Debe ingresar Nro Chapa !!'
        }).then(function () {
          $("#Chapa").focus();
        });
        return ;

      }else if ($("#Identificador").val().trim().length == 0 ){
        
        swal({
          type:'info',
          title:'Debe ingresar Nro de Cono !!'
        }).then(function () {
          $("#Identificador").focus();
        });
        return ;

      }else if ($("#CodigoCliente").val().length == 0 ){

        swal({
          type:'info',
          title:'Debe ingresar datos del cliente !!'
        }).then(function () {
          $("#CodigoCliente").focus();
          ConsultarCliente();
        });
        return ;

      }else if (isNaN( parseInt($("#Kilometraje").val().trim())) || parseInt($("#Kilometraje").val().trim()) == 0 ){
        swal({
          type:'info',
          title:'Debe ingresar Kilometraje valido !!'
        }).then(function () {
          $("#Kilometraje").focus();
        });
        return ;

      }else if ($("#Motivo").val().trim().length == 0 ){

        swal({
          type:'info',
          title:'Debe ingresar Motivo !!'
        }).then(function () {
          $("#Motivo").focus();
        });
        $("#Motivo").focus();
        return ;
      }

      $("#aceptar").prop("disabled", false);//habilitar el boton cancelar

      swal({
            title:'Espere...',
            html: '<span class="glyphicon glyphicon-cog" style=" animation: 2s rotate360 infinite linear; font-size:100px;"></span>'+
               '<div class="box">'+
               ' <div class="panel panel-default" style="font-size:12px; text-align:left;">'+
               '<table class="table table-hover" id="res-buscador"></table>'+
               '</div>'          ,
            showConfirmButton:false,
            allowOutsideClick:false, 
            showCancelButton: true 
            //cancelButtonText: 'Cancelar'
      });

      var abm; 
      if (evento == 1 ){ 
        abm = 'NuevaOrden'; 
      }else if (evento == 2 ){
        abm = 'ModificarOrden'; 
      }

      $('form').find('input, textarea, button, select').prop('disabled',false); //esto se hace por que el serialize no toma campos deshabilitados 
      var testLavado = $("form").serialize()

			console.log($("form").serialize()); 
			result = decodeURIComponent($("form").serialize()); 
      if(!testLavado.includes('lavado')){
        result +=  '&lavado=no';
      }

      /* agregar campos que no estan en el form serial */
      result +=  '&Asesor=' + $('#Asesor').attr('codigo'); // codigo de asesor 
      result +=  '&NombreAsesor=' + $('#Asesor').text().trim(); // Nombre de asesor 
      result +=  '&IpCliente=' + '<?php get_ip(); ?>'; // Nombre de asesor 
      result +=  '&campanha=' + localStorage.campanha; // Nombre de asesor 
      if(localStorage.getItem("listado-campaña")){
        result+= '&listadoCampanhas=' + localStorage.getItem('listado-campaña');
      }
      console.log(result); 
      
      $('form').find('input, textarea, button, select').prop('disabled',true); 
      $('form').find('input:not(.lock), textarea:not(.lock), button, select:not(.lock)').prop('disabled',false ); 


			if (result == ''){  
				console.log("no trae nada");
			}else {	

        var sucu = localStorage.sucursal; 
        sucu = sucu.toLowerCase(); 
        var serieDoc , sucuCod, entidad;

          //para asignar serie y sucursal 
          if(sucu == 'alider' ){//fca 
            serieDoc  = 718;
            sucuCod   = 'ALIDER';
            entidad   = 'gasa';
          }else if(sucu == 'abay-fca' ) {//mpy
            serieDoc  = 718;
            sucuCod   = 'AVAY';
            entidad   = 'gasa';
          }else if(sucu == 'mpy' ) {//mpy
            serieDoc  = 17;
            sucuCod   = 'ALIDER';
            entidad   = 'mpy';
          }else if( sucu == 'abay-mpy') {//mpy
            serieDoc  = 17;
            sucuCod   = 'AVAY';
            entidad   = 'mpy';
          }else if(sucu == 'victoria' ){//kia la victoria 
            serieDoc = 715;
            sucuCod  = 'VICTORIA';
            entidad   = 'gasa';
          }else if(sucu == 'abay-kia'){//kia la victoria 
            serieDoc = 715;
            sucuCod  = 'AVAY';
            entidad   = 'gasa';
          }else if(sucu == 'mra kia'){//kia la victoria 
            serieDoc = 715;
            sucuCod  = 'MRA KIA';
            entidad   = 'gasa';
          }else if(sucu == 'mra fca'){//MRA FCA 
            serieDoc = 718;
            sucuCod  = 'MRA FCA';
            entidad   = 'gasa';
          }else if(sucu == 'mra mpy'){//MRA MPY
            serieDoc = 17;
            sucuCod  = 'MRA MPY';
            entidad   = 'mpy';
          }else if(sucu == 'choferes'){//kia choferes 
            serieDoc = 715;
            sucuCod  = 'CHOFERES';
            entidad   = 'gasa';
          }else if(sucu == 'mini-moto'){//kia choferes 
            serieDoc = 718;	//734;
            sucuCod  = 'Mini-moto';
            entidad   = 'gasa';
          }else if(sucu == 'abay-moto'){//kia choferes 
            serieDoc = 718;	//734;
            sucuCod  = 'AVAY';
            entidad   = 'gasa';
          }else if(sucu == '003'){//nissan fdo  
            serieDoc = 7;
            sucuCod  = '003';
            entidad   = 'nissan';
          }else if(sucu == '002'){//nissan fdo  
            serieDoc = 7;
            sucuCod  = '002';
            entidad   = 'nissan';
          }else if(sucu == '004'){//nissan fdo  
            serieDoc = 1;
            sucuCod  = '004';
            entidad   = 'nissan';
          }else if(sucu == '005' ){//nissan fdo  
            serieDoc = 7;
            sucuCod  = '005';
            entidad   = 'nissan';
          }else if(sucu == '016' || sucu == 'abay-nissan' ){//nissan fdo  
            serieDoc = 7;
            sucuCod  = '016';
            entidad   = 'nissan';
          }else if(sucu == '001'){//nissan fdo  
            serieDoc = 7;
            sucuCod  = '001';
            entidad   = 'nissan';
          }else if(sucu == 'cde'){//nissan fdo  
            serieDoc = 4;
            sucuCod  = 'GARDEN';
            entidad   = 'cde';
          }

          var sap = {
              "fields": {
                "Status": $("#OtEstado").val(),
                "CustomerCode": $("#CodigoCliente").val(),
                "CustomerName": $("#NombreCliente").val(),
                "ItemCode": $("#Chassis").val(),
                "InternalSerialNum": $("#NroSerie").val(),
                "ManufacturerSerialNum": $("#NroSerie2").val(),
                "ItemDescription": $("#Vehiculo").val(),
                "Street": $("#Chapa").val(),
                "Room": $("#Identificador").val(),
                "Subject": $("#Motivo").val().toUpperCase(),
                "Description": $("#PedidoCliente").val().toUpperCase(),
                "Series": serieDoc,
                "AssigneeCode": $('#Asesor').attr('codigo'),
                "Location": "-1",
                "CallType": $("#TipoLlamada").val()

              },
              "userFields": {
                "U_KmEntrada": $("#Kilometraje").val(),
                "U_KmSalida": "0",
                "U_Tipo": $("#TipoServicio").val(),
                "U_NroOT": "0",
                "U_Sucursal": sucuCod
              }
            }  

          if(evento == 1 ){
            console.log(sap);
            var datos = JSON.stringify(sap);
            console.log(datos);
            let origen = (window.origin.includes('crm')? window.origin + '/sap-api/' : 'http://192.168.10.80:3011/')
            if( window.origin.includes('ngrok')  || window.origin.includes('slow-bugs')){ origen = 'https://0d4a-190-104-135-223.ngrok-free.app/' }
            var url = origen+entidad+'/sap/191'; 
            fetch(url, {
              method: 'POST',
              headers: {
                'Accept': 'application/json, text/plain, */*',
                'Content-Type': 'application/json'
              },
              body: datos
            })
            .then(res => res.json())
            .then(res => {
              console.log(res.status);
              console.log(res);
              if(res.status == 'error'){
                swal({ 
                      type: 'error', 
                        title: 'Atencion', 
                        html: res.message 
                    }); 
                return;
              }else{
                var origen = (window.origin.includes('crm') || window.origin.includes('ngrok') ? window.origin + '/tablet-app/insertar2.php' : window.origin +"/insertar2.php")
                $.ajax( { method: "POST", url: origen, data : {data : result , funcion: abm , sucursal : sucu , ot: res.data }, dataType: 'html'})
                .done(function(rs) {
                  console.log('paso por control... ');
                  console.log(rs);
                    RecuperarOt(rs); 
                    GuardarImagen2(rs); //guardar la imagen del combustible ... 
                    ImagenOt2(rs); // guardar con el nro de orden la imagen del auto ....
                    RecuperarOt(rs); 
                })
                .fail(function(jqxhr, textStatus, error) {
                  console.log(error);
                });
              }
            });

          }else{ //para actualizar la ot 
            // solo los campos de comentarios y pedido cliente actualiza  , agregar aqui el campo que se quiera actualizar.
            let updField = ['Subject', 'Description' , "Street" ]
            delete sap['userFields']
            Object.keys(sap['fields']).filter(key => !updField.includes(key) ).forEach(key=> delete sap['fields'][key])

            console.log(sap);
            //swal.close();
            var datos = JSON.stringify(sap);
            console.log(datos);

            let origen = (window.origin.includes('crm') || window.origin.includes('ngrok') ? window.origin + '/sap-api/' : 'http://192.168.10.80:3011/')
            if( window.origin.includes('ngrok') || window.origin.includes('slow-bugs') ){ origen = 'https://0d4a-190-104-135-223.ngrok-free.app/'}
            var url = origen+entidad+'/sap/191/where/'+$("#NroLlamada").val();
            fetch(url, {
              method: 'PUT',
              headers: {
                'Accept': 'application/json, text/plain, */*',
                'Content-Type': 'application/json'
              },
              body: datos
            })
            .then(res => res.json())
            .then(res => {
              console.log(res.status);
              console.log(res);
              if(res.status == 'error'){
                swal({ 
                      type: 'error', 
                        title: 'Atencion', 
                        html: res.message 
                    }); 
                return;
              }else{
                  RecuperarOt($("#NroLlamada").val() ); 
              }
            });

          } //fin control de eventos 

			}//fin verifica datos vacios 

		}//fin funcion grabar

    function RecuperarOt(result){ 
      ResetForm();//fco refresca el form  
        //fco ajax consultar datos!!! 
        //marilina
        var sucu = localStorage.sucursal;
        sucu = sucu.toLowerCase(); 

        $.ajax( { method: "POST", url: window.origin + "/consulta.php", data : { NroOt : result , funcion: 'ConsultarOt' , sucursal: sucu }, dataType: 'json'}) 

        //fco exito en la consulta 
        .done(function(rs) { 
          console.log( rs );//fco para ver en la consola de la web 
          if (rs ){ 
            //fco consulta automatizada se debe poner el mismo nombre del form como los campos del sql para que funcione auto 
            rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
              var callid = Object.keys(rs2), id = 0 , campo; //fco captura los nombres de los campos 
              Object.keys(rs2).forEach(function(key) {  //fco recorre los campos con sus valores 
                campo = "#" + callid[id] , id++; //fco esta linea es para asignar automaticamente con el campo del form -> $(#campo).val(rs2[key]) //este apartado asigna al form 
                $(campo).val(rs2[key]);
              }); //fco este forEach trae los datos de cada campo de la consulta php ver archivo consulta.php 
              id = 0;
            });
            //fco mensaje de exito 
            swal({ 
              type: 'success', 
              title: 'Registro Grabado ', 
              html: '<h1>Nro: ' + $('#NroLlamada').val() + ' !!!</h1>' 
            }).then( async function() {
              //solo caso de kia victoria 
              if(sucu === 'victoria'){
                localStorage.setItem('printer-asesor', 'si')
                localStorage.setItem('printer-taller', 'si')
                let grid = `
                <style>
                  .printer-in{ 
                    background:#00aaa0;
                    color:white;
                    box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2)  
                  }
                  .printer-out{ 
                    background:#ececec;
                    color:#9ba6a5;
                  }
                  .printer{
                      border-radius:5px; 
                      height:80px; 
                      display:flex; 
                      align-items:center; 
                      padding:15px; 
                      font-size:24px; 
                      font-weight:bold;
                      text-align:center;
                  }
                </style>

                <div class="row" style="display:flex; justify-content:center;">
                  <div class="col-sm-4 rounded " style=" display:flex; justify-content:center;align-items:center; height:100px;"> 
                    <div class="printer printer-in" id="printer-asesor" onclick="upPrinter(this)"> impresora <br> Asesor</div>
                  </div>
                  <div class="col-sm-4 rounded" style=" display:flex; justify-content:center;align-items:center; height:100px;" >
                    <div class="printer printer-in" id="printer-taller" onclick="upPrinter(this)"> impresora <br> Taller</div>
                  </div>
                </div>                
                `
                swal({
                      title:'Seleccione la impresora',
                      html: grid,
                      showConfirmButton:true,
                      allowOutsideClick:false, 
                      showCancelButton: true 
                      //cancelButtonText: 'Cancelar'
                }).then(async e=>{
                  swal({
                      title:'Imprimiendo Espere...',
                      html: '<span class="glyphicon glyphicon-cog" style=" animation: 2s rotate360 infinite linear; font-size:100px;"></span> <div><h4 id="print-status-asesor"></h4> <h4 id="print-status-taller"></h4> </div>',
                      showConfirmButton:false,
                      allowOutsideClick:false,
                      showCancelButton: true ,
                      onClose: ()=>{ ImprimirOt() } //caso que cancele su impresion y desea ver en pantalla                       
                      //cancelButtonText: 'Cancelar'
                  });

                  if(localStorage.getItem('printer-asesor') === 'si'){
                    await fetch(`http://192.168.10.54:3200/print/${$('#NroLlamada').val()}/1/1`) // por defecto le enviamos copia 1 el ultimo parametro
                    .then(response => response.json())
                    .then(data => {
                      $("#print-status-asesor").html('Impresion Asesor lista')
                      console.log('ya imprimio todo 1................')
                      if(localStorage.getItem('printer-taller') === 'no') alert('impresion Lista !!!!')

                        //if (!data.ok) alert('hubo problemas al imprimir !')
                    })
                    .catch(e => alert('hubo un error en la impresion '))
                  }

                  if(localStorage.getItem('printer-taller') === 'si'){
                    await fetch(`http://192.168.10.54:3200/print/${$('#NroLlamada').val()}/2/1`) // por defecto le enviamos copia 1 el ultimo parametro
                    .then(response => response.json())
                    .then(data => {
                      $("#print-status-taller").html('Impresion Taller lista')
                        console.log('ya imprimio todo 2................')
                        swal.close()
                        //if (!data.ok) alert('hubo problemas al imprimir !')
                        alert('impresion Lista !!!!')
                        ImprimirOt()
                    })
                    .catch(e => alert('hubo un error en la impresion '))
                  }
                  swal.close()                      
                })
            }else if( sucu === 'alider'){
              localStorage.setItem('copia-printer', 2)
              let grid = `
                <style>
                  .printer-in{ 
                    background:#00aaa0;
                    color:white;
                    box-shadow: 0 0 1px rgba(0,0,0,.125),0 1px 3px rgba(0,0,0,.2)  
                  }
                  .printer-out{ 
                    background:#ececec;
                    color:#9ba6a5;
                  }
                  .printer{
                      border-radius:5px; 
                      height:80px; 
                      display:flex; 
                      align-items:center; 
                      padding:15px; 
                      font-size:24px; 
                      font-weight:bold;
                      text-align:center;
                  }
                </style>

                <div class="row" style="display:flex; justify-content:center;">
                  <div class="col-sm-4 rounded " style=" display:flex; justify-content:center;align-items:center; height:100px;"> 
                    <div class="printer printer-out" id="printer-copia1" onclick="copiaPrinter(this)"> 1 <br> copia</div>
                  </div>
                  <div class="col-sm-4 rounded" style=" display:flex; justify-content:center;align-items:center; height:100px;" >
                    <div class="printer printer-in" id="printer-copia2" onclick="copiaPrinter(this)"> 2 <br> copias</div>
                  </div>
                </div>                
                `
                swal({
                      title:'Impresion Stellantis',
                      html: grid,
                      showConfirmButton:true,
                      allowOutsideClick:false, 
                      showCancelButton: true, 
                      onClose: ()=>{ ImprimirOt() } //caso que cancele su impresion y desea ver en pantalla 
                })
                .then(async e=>{
                  swal({
                      title:'Imprimiendo Espere...',
                      html: '<span class="glyphicon glyphicon-cog" style=" animation: 2s rotate360 infinite linear; font-size:100px;"></span> <div><h4 id="print-status-asesor"></h4> <h4 id="print-status-taller"></h4> </div>',
                      showConfirmButton:false,
                      allowOutsideClick:false,
                      showCancelButton: true 
                      //cancelButtonText: 'Cancelar'
                  });
                    let copias = Number( localStorage.getItem('printer-copia'))
                    await fetch(`http://192.168.10.54:3200/print/${$('#NroLlamada').val()}/3/${copias}`)
                    .then(response => response.json())
                    .then(data => {
                      console.log('ya imprimio todo 1................')
                      alert('impresion Lista !!!!')
                      ImprimirOt()                      
                        //if (!data.ok) alert('hubo problemas al imprimir !')
                    })
                    .catch(e => alert('hubo un error en la impresion '))
                })
                $(`#printer-copia2`).addClass('printer-in')

              //ImprimirOt();
            }else{
            ImprimirOt();
          }
        }); 

            $("#PedidoCliente").height($('#PedidoCliente')[0].scrollHeight ); 
            $("#Motivo").height($('#Motivo')[0].scrollHeight ); 
            $("#Detalle_Vehiculo").height($('#Detalle_Vehiculo')[0].scrollHeight ); 
            $("#Observacion").height($('#Observacion')[0].scrollHeight ); 
            BloquearCampos(2); //1 bloquea 
            //accesorios 
            if ( $("#Observacion").val().length > 0 ){ 

              var fin, campo; 
              inicio= $("#Observacion").val().indexOf("#", inicio + 1 ); 
              while( inicio > 0 ){ 
                fin = $("#Observacion").val().indexOf("#", inicio + 1 ); 

                if ( $("#Observacion").val().substr(inicio, fin - inicio ).length > 0 ){ 
                  campo = $.trim( $("#Observacion").val().substr(inicio, fin - inicio )); 
                  console.log('linea: ' + campo ); 
                  $( campo ).addClass( "btn-success text-white" ); 
                } 
                if (fin > 0 ) {
                  inicio = fin;
                }else{
                  inicio = fin +1;
                }
              } 
            } 

            //combustible  
              valor= $("#Combustible").val(); 
              console.log("trae el valor del combustible ", valor);
              $('div#fuelSliderDiv').slider({ value: Number( valor ) }); 
              $("div#fuelMeterDiv").dynameter({ value: Number( valor ) }); 
            Estatus(2);//taller 
            //ImagenOt(1);
            ImagenOt(2);
          }else{ //fco no existen registros !!! 
            
            swal({ 
              type: 'warning', 
              html: 'Error al recuperar registros !!!' 
            }); 
          }

        })
        //fco Error en la consulta 
        .fail(function(jqxhr, textStatus, error) {
          var err = textStatus + ", " + error;
          console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 

          swal({
            type: 'Error consulta',
            html: err
          });

        });

    }

    const upPrinter =(e)=>{//consulta si va a imprimir en ambas impresion solo para kia victoria 
      console.log(e.id)
      $(`#${e.id}`).toggleClass('printer-out')
      if($(`#${e.id}`).hasClass('printer-out')){ localStorage.setItem(e.id, 'no') }else{ localStorage.setItem(e.id, 'si')} 
    }


    const copiaPrinter =(e)=>{
      if(e.id === 'printer-copia1'){
        localStorage.setItem('printer-copia' , 1); 
        $(`#printer-copia1`).removeClass()
        $(`#printer-copia2`).removeClass()

        $(`#printer-copia1`).addClass('printer printer-in') 
        $(`#printer-copia2`).addClass('printer printer-out') 

      } 
      if(e.id === 'printer-copia2'){
        localStorage.setItem('printer-copia' , 2);
        $(`#printer-copia1`).removeClass()
        $(`#printer-copia2`).removeClass()

        $(`#printer-copia2`).addClass('printer printer-in') 
        $(`#printer-copia1`).addClass('printer printer-out') 
      } 
    }



    function ConsultarVehiculo(){
      console.log('ingreso para consultar vehiculo.. ');
      if ( $.trim( $( "#b_Buscar").val()) === "") {
        $( "#help1" ).text( "Ingrese algun valor !!!" ).show().fadeOut( 4000 );
        $("#b_Buscar").focus();
        return ;
      } else if ( $( "#b_Buscar").val().length < 6 ){
        $( "#help1" ).text( "Debe ingresar almenos 6 digitos para el Chassis !!!" ).show().fadeOut( 4000 );
        $("#b_Buscar").focus();
        return ;
      }
      console.log('consultando vehiculos....');
      var b_Chassis ="";
      $( "#help1" ).text( "Consultando... " ).show().fadeOut( 4000 );
      b_Chassis = $("#b_Buscar").val();
      var sucu = localStorage.sucursal;
      sucu = sucu.toLowerCase(); 
      console.log(sucu);
      //fco ajax consultar datos!!!
      $.ajax( { method: "POST", url: window.origin + "/consulta.php", data : { Chassis : b_Chassis , funcion: 'ConsultarVehiculo', sucursal: sucu }, dataType: 'json'})
      .done(function(rs){
        $( "#help1" ).text( "Consulta exitosa !! " ).show().fadeOut( 4000 );
        if(rs){
          console.log(rs);
            var id = 0 , campo; //fco esta linea obtiene el nombre de los campos 
            rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
              var callid = Object.keys(rs2); //fco captura los nombres de los campos 
              Object.keys(rs2).forEach(function(key) {  //fco recorre los campos con sus valores 
                campo = "#" + callid[id] , id++; //fco esta linea es para asignar automaticamente con el campo del form -> $(#campo).val(rs2[key]) //este apartado asigna al form 
                $(campo).val(rs2[key]);
              }); //fco este forEach trae los datos de cada campo de la consulta php ver archivo consulta.php 
              id = 0;
            });
            //swal.enableConfirmButton();//habilitar boton de confirmacion tarjeta cliente.
            //$(".b_campo").prop('disabled', false);  //habilitar campo para la carga de nuevo cliente
            $("#Consultar").prop('disabled', true);  //habilitar campo para la carga de nuevo cliente
            $("#b_Buscar").prop('disabled', true);  //habilitar campo para la carga de nuevo cliente

            $("#Consultar2").prop('disabled', false);  //habilitar campo para la carga de nuevo cliente
            $("#Nuevo").prop('disabled', false);  //habilitar campo para la carga de nuevo cliente
            $("#b_Buscar2").prop('disabled', false);  //habilitar campo para la carga de nuevo cliente

            $("#b_Buscar2").focus();// setear este campo

        }else {
          $( "#help1" ).text( "No existen registros !!!" ).show().fadeOut( 4000 );
        }
      })
      .fail(function(jqxhr, textStatus, error ){
          $( "#help1" ).text( "No existen registros !!!" ).show().fadeOut( 4000 );
      });
      //swal().close();

    }
	
    function SacarFotos(){


      //https://www.html5rocks.com/es/tutorials/file/dndfiles/  //fuente de como guardar imagen 
      var nroOt = $.trim( $( "#NroLlamada").val());
      if ( nroOt === "") { 
        swal({ 
          type: 'warning', 
          title:'No existe OT para relacionar las fotos !!!' 
        });
        return ;
        }
        var cuanta = 0;
        $.post('imagenes/image_save4.php', { OT: nroOt , EVENTO: 3 , FOTO: '' }, function(response){  

          if(response > 0 ){
            cuanta = response;
            console.log(response);
            $.post('imagenes/image_save4.php', { OT: nroOt , EVENTO: 2 , FOTO: '' }, function(response){  
              console.log(response);
              $("#list").html(response);
            });
          }
        });

        console.log(cuanta);

        swal({ 
          title:'Sacar Fotos', 
          html : '<input type="file" id="files" name="files[]" multiple style="display:none;"/>'+ 
                ' <div class="container-fluid" id="list" style="border: 1px solid #d9534f; border-radius:3px;  min-height:200px; padding:2px;"></div><br>'+ 
                '<div id="subida_botones"><a class="btn btn-app" id="agregar" onclick="guardarFoto()" style=" visibility:hidden;"><i class="fa fa-check" aria-hidden="true" style="font-size:30px;" ></i></a>'+ 
                '<a class="btn btn-app" onclick="IniciarFoto()" ><i class="fa fa-camera" style="font-size:30px;"></i></a>'+ 
                '<a class="btn btn-app" id="eliminar" onclick="EliminarFoto()" style=" visibility:hidden;"><i class="fa fa-times" aria-hidden="true" style="font-size:30px;" ></i></a></div>'+
                '<div class="container-fluid">'+
                '<div class="row"><div class="progress" id="subida" style="height:50px; margin-bottom:0px; display:none;"> <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; font-size:24px; padding-top:5px;  padding-bottom:5px;"><i class="fa fa-cloud-upload" aria-hidden="true"></i> <span><strong>Subiendo...</strong></span>  </div> </div>'+
                '<div class="row"><div class="progress" id="subida_ok" style="height:50px; margin-bottom:0px; display:none;"> <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; font-size:24px; padding-top:5px; padding-bottom:10px;"><i class="fa fa-check" aria-hidden="true"></i> <span><strong>Listo !! <span id="subida_msg"></span></strong></span> </div> </div>'+
                '</div>'+
                '<div class="container-fluid" style="display:none;" id="boxFoto"> <i class="fa fa-times" style="position:relative; float:right; font-size:100px;" onclick="cerrarFoto()" aria-hidden="true"></i> <img class="img-responsive" src="" alt="" id="foto" ondblclick="rotarFoto()"> </div>',
          onOpen: () => { 
            document.getElementById('files').addEventListener('change', handleFileSelect, false) 
          }, 
        allowOutsideClick: false, 
        showCloseButton: true, 
        showConfirmButton: false,
        width: '100%',       
        closeOnConfirm: false, //It does close the popup when I click on close button
        closeOnCancel: false,
        allowOutsideClick: false        

        }); 
        mostrarBotonesFoto();

/*
      var x = document.createElement("INPUT");
      x.setAttribute("type", "file");
      x.setAttribute("accept", "image/*");
      x.setAttribute("capture", "capture");
      x.click();
      console.log(x);
      alert(x);
*/
    }


  function getBase64Image(img) {
  //https://stackoverflow.com/questions/19183180/how-to-save-an-image-to-localstorage-and-display-it-on-the-next-page
  

      var canvas = document.createElement("canvas");
      canvas.width = img.width;
      canvas.height = img.height;

      var ctx = canvas.getContext("2d");
      ctx.drawImage(img, 0, 0);

      var dataURL = canvas.toDataURL("image/png");

      return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
  }

  function mostrarBotonesFoto(){
    var estadoOt = $("#OtEstado").children("option:selected").val();
    console.log('estado de la ot', estadoOt);
    if (estadoOt == '-1'){
      $("#subida_botones").css('display','none');
    }else {
      $("#subida_botones").css('display','block');
    }
  }

    function IniciarFoto(){
      $("#files").click();
    }

    function SeleccionarImagen(imagen){
      if($(imagen).hasClass('selected')  ){
        $(imagen).css('border', '1px solid #777');
        $(imagen).removeClass('selected');

      }else {
        $(imagen).css('border', 'solid 2px red');
        $(imagen).addClass('selected');
         $("#eliminar").removeAttr('style');
         //console.log( $(imagen).attr("src"));
      }
      if( $("img[class='thumb img-thumbnail selected']").length == 0 ){
         $("#eliminar").css('visibility', 'hidden');
      }
    }

    function EliminarFoto(){
      if( $("img[class='thumb img-thumbnail selected']").length > 0 ){
        $("img[class='thumb img-thumbnail selected']").remove();
        if($("img[class='thumb img-thumbnail selected']").length == 0 ){
          $("#eliminar").css('visibility', 'hidden');
          console.log($("img[class='thumb img-thumbnail selected']").length);
        }
      }else {
        $("#eliminar").removeAttr('style');
      }
      if ($("img[class='thumb img-thumbnail']").length > 0){
        $("#agregar").removeAttr('style');
      }else {
       $("#agregar").css('visibility', 'hidden');
     }
      
    }


    function mostrarFoto(img){
      console.log(img.src);
      $("#boxFoto").css('display', 'block');
      $("#foto").attr('src', img.src);

    }
    function cerrarFoto(){
      $("#boxFoto").css('display', 'none');      
    }

    function rotarFoto(){
      if (sessionStorage.grado) {
        sessionStorage.grado = Number(sessionStorage.grado) + 90;
      } else {
        sessionStorage.grado = 90;
      }      
      var degrees = Number(sessionStorage.grado);

        $('#foto').css({

          'transform': 'rotate(' + degrees + 'deg)',
          '-ms-transform': 'rotate(' + degrees + 'deg)',
          '-moz-transform': 'rotate(' + degrees + 'deg)',
          '-webkit-transform': 'rotate(' + degrees + 'deg)',
          '-o-transform': 'rotate(' + degrees + 'deg)'
        });

    }

    function guardarFoto(){

      var nroOt = $.trim( $( "#NroLlamada").val()); 
      if ( nroOt === "") { 
        swal({ 
          type: 'warning', 
          title:'No existe OT para relacionar las fotos !!!' 
        }); 
      }else{

        if( $("img[class='thumb img-thumbnail selected']").length > 0 ){
          //sapa
            //var fotos = [];
           //for (i = 0; i < $("img[class='thumb img-thumbnail selected']").length; i++) {
            $("#subida").css('display','block');
            $("#subida_botones").css('display','none');
            setTimeout(function(){ console.log('prueba de delay... '); }, 2000);
            var imgOk = 0 , imgError = 0 ;

          $.post('imagenes/image_save4.php', { OT: nroOt , EVENTO: 3 , FOTO: '' }, function(response1){  

            var cuanta = response1;
           for (i = 0; i < $("img[class='thumb img-thumbnail selected']").length; i++) {
              console.log( $("img[class='thumb img-thumbnail selected']")[i] ) ;
              //fotos.push( $("img[class='thumb img-thumbnail selected']")[i].src );

              var fotos = $("img[class='thumb img-thumbnail selected']")[i].src ;
              var evento = 1 ; //grabar .. 
              var nombre = nroOt + '_' + cuanta ; 
              cuanta++;
              console.log(nombre);
              $.post('imagenes/image_save4.php', { OT: nombre , EVENTO: evento , FOTO: fotos }, function(response){ 
                if (response == 'ok' ){
                  imgOk++; 
                  console.log(response); 
                }else {
                  imgError++;
                }
              });
            }

          });

            setTimeout(function(){ 
              $("#subida").css('display','none'); 
              var msg = "";
              if (imgOk > 0 ){
                msg = imgOk + ' Correctas !!! ';
              }else if (imgError > 0 ){
                msg = msg + imgError + ' Icorrectas !!! ';
              }
              $("#subida_ok").css('display','block'); 
              console.log(msg);
              $("#subida_msg").text(msg);
            }, 2000);
            //$("#subida").css('display','none');


        }else{
/*
          swal({ 
            type: 'warning', 
            title:'Seleccione las fotos que desea guardar !!!' 
          });
*/
        }
      } 

    }

makeblob = function (dataURL) {
            var BASE64_MARKER = ';base64,';
            if (dataURL.indexOf(BASE64_MARKER) == -1) {
                var parts = dataURL.split(',');
                var contentType = parts[0].split(':')[1];
                var raw = decodeURIComponent(parts[1]);
                return new Blob([raw], { type: contentType });
            }
            var parts = dataURL.split(BASE64_MARKER);
            var contentType = parts[0].split(':')[1];
            var raw = window.atob(parts[1]);
            var rawLength = raw.length;

            var uInt8Array = new Uint8Array(rawLength);

            for (var i = 0; i < rawLength; ++i) {
                uInt8Array[i] = raw.charCodeAt(i);
            }

            return new Blob([uInt8Array], { type: contentType });
        }





  //document.getElementById('files').addEventListener('change', handleFileSelect, false);
  function handleFileSelect(evt){ 
    //https://www.html5rocks.com/es/tutorials/file/dndfiles/
      var files = evt.target.files; // FileList object

      // Loop through the FileList and render image files as thumbnails.
      for (var i = 0, f; f = files[i]; i++) {

        // Only process image files.
        if (!f.type.match('image.*')) {
          continue;
        }

        var reader = new FileReader();

        // Closure to capture the file information.
        reader.onload = (function(theFile) {

          return function(e) {
            // Render thumbnail.
            var span = document.createElement('span');
            span.innerHTML = ['<img class="thumb img-thumbnail" onclick="SeleccionarImagen(this);" style="margin-top:2px; margin-left:2px;" src="', e.target.result,
                              '" title="', escape(theFile.name), '"/>'].join('');
            document.getElementById('list').insertBefore(span, null);
            $("#agregar").removeAttr('style');
          };
        })(f);
        // Read in the image file as a data URL.
        reader.readAsDataURL(f);
      }
      console.log('ingreso para habilitar');
      console.log($("#list > img").length );
    }

    function ImprimirOt(){ 

      var nroOt = $.trim( $( "#NroLlamada").val()); 
      if ( nroOt === "") { 
        swal({ 
          type: 'warning', 
          title:'No existen datos para imprimir' 
        }); 
      }else{

        var sucursal = localStorage.sucursal; 
        sucursal = sucursal.toLowerCase(); 
        if ( sucursal == 'alider' ){ //solamente si es fca 
           swal({
              //type:'info',
              title:'Seleccione Formato Impresion ',
              html: '<div class="container-fluid">'+
                      '<br>'+
                      '<img src="logo-fca.jpg" onclick="imprimirFormato(1)"  class="img-thumbnail" alt="Formato FCA" width="200" height="120" style="margin-right:15px;"> '+
                      '<img src="logo_mini.jpeg" onclick="imprimirFormato(2)" class="img-thumbnail" alt="Formato Mini" width="200" height="80"> '+
                    '</div>', 
              allowOutsideClick: false, 
              showCloseButton: false, 
              showConfirmButton: false, 
              showCancelButton: true
            });

        }else if(sucursal == 'mini-moto'){
          window.open( window.origin + '/impresion6.php?NroOt=' + nroOt, '_blank'); 
        }else if(sucursal == 'mpy' || sucursal == 'mra mpy' || sucursal == 'abay-mpy'){
          window.open( window.origin + '/impresion4.php?NroOt=' + nroOt, '_blank'); 
        }else if(sucursal == '001' || sucursal == '002' || sucursal == '003' || sucursal == '004'|| sucursal == '005' || sucursal == 'abay-nissan'){
          window.open(window.origin + '/impresion5.php?NroOt=' + nroOt, '_blank'); 
        }else if(sucursal == 'cde' ){
          window.open( window.origin + '/impresioncde.php?NroOt=' + nroOt, '_blank'); 
        }else {
            window.open( window.origin + '/impresion2.php?NroOt=' + nroOt + '&sucursal=' + sucursal , '_blank'); 
        }
      }  

      /*
      swal({
            timer:5000,
            title:'Espere...',
            html: '<span class="glyphicon glyphicon-cog" style=" animation: 2s rotate360 infinite linear; font-size:100px;"></span>',
            showConfirmButton:false,
            allowOutsideClick:false
      });
      */

      //swal().close();
      //Estatus(4);
    }


    function imprimirFormato(formato){
      /*
            var sucursal = localStorage.sucursal; 
            sucursal = sucursal.toLowerCase(); 
            if ( sucursal == 'alider' ){ 

            } 

      */
      var nroOt = $.trim( $( "#NroLlamada").val());
      if (formato == 1 ){ //para fca 
        window.open('http://192.168.10.170:8089/impresion2.php?NroOt=' + nroOt, '_blank'); 

      }else if(formato == 2 ){//mini 
        window.open('http://192.168.10.170:8089/impresion3.php?NroOt=' + nroOt, '_blank'); 
      }
      swal.close();


    }


    function Estatus(estado){
      /*
        1 recepcion 
        2 taller 
        3 lavado
        4  listo 
      */
      var html = "";
      if (estado == 1 ){
                //proceso recepcion
        html =  '<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:25%" onclick="swal(@En Proceso @,@@,@info@);">Recepcion\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-cog" style=" animation: 9s rotate360 infinite linear;"></span>\n'+
                  '</h3>\n'+
                '</div>\n'+
                //divisoria del progress bar
                '<div class="progress-bar" role="progressbar" style="width:0.5%; background-color:white;"></div>\n'+
                //proceso taller 
                '<div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%" onclick="swal(@En Espera @,@@,@info@);">Taller\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-exclamation-sign" >\n'+
                    '</span>\n'+
                  '</h3>\n'+
                '</div>\n'+
                //divisoria del progress bar
                '<div class="progress-bar" role="progressbar" style="width:0.5%; background-color:white;"></div>\n'+
                //proceso Lavadero 
                '<div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%" onclick="swal(@En Espera @,@@,@info@);">Lavado\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-exclamation-sign" >\n'+
                    '</span>\n'+
                  '</h3>\n'+
                '</div>\n'+
                //divisoria del progress bar
                '<div class="progress-bar" role="progressbar" style="width:0.5%; background-color:white;"></div>\n'+
                //proceso Listo 
                '<div class="progress-bar progress-bar-danger" role="progressbar" style="width:23.5%" onclick="swal(@En Espera @,@@,@info@);">Listo\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-exclamation-sign" >\n'+
                    '</span>\n'+
                  '</h3>\n'+
                '</div>\n';

      }else if (estado == 2 ){//taller 
                //proceso recepcion
        html =  '<div class="progress-bar progress-bar-success" role="progressbar" style="width:25%">Recepcion\n'+
                  '<h3 style="margin-top:1px;" onclick="swal(@Terminado @,@@,@success@);">\n'+
                    '<span class="glyphicon glyphicon-ok" ></span>\n'+
                  '</h3>\n'+
                '</div>\n'+
                //divisoria del progress bar
                '<div class="progress-bar" role="progressbar" style="width:0.5%; background-color:white;"></div>\n'+
                //proceso taller 
                '<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:25%"onclick="swal(@En Proceso @,@@,@info@);">Taller\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-cog" style=" animation: 9s rotate360 infinite linear;">\n'+
                    '</span>\n'+
                  '</h3>\n'+
                '</div>\n'+
                //divisoria del progress bar
                '<div class="progress-bar" role="progressbar" style="width:0.5%; background-color:white;"></div>\n'+
                //proceso Lavadero 
                '<div class="progress-bar progress-bar-danger" role="progressbar" style="width:25%">Lavado\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-exclamation-sign" >\n'+
                    '</span>\n'+
                  '</h3>\n'+
                '</div>\n'+
                //divisoria del progress bar
                '<div class="progress-bar" role="progressbar" style="width:0.5%; background-color:white;"></div>\n'+
                //proceso Listo 
                '<div class="progress-bar progress-bar-danger" role="progressbar" style="width:23.5%">Listo\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-exclamation-sign" >\n'+
                    '</span>\n'+
                  '</h3>\n'+
                '</div>\n';

      }else if (estado == 3){//lavado
                //proceso recepcion
        html =  '<div class="progress-bar progress-bar-success" role="progressbar" style="width:25%" onclick="swal(@Terminado @,@@,@success@);">Recepcion\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-ok" ></span>\n'+
                  '</h3>\n'+
                '</div>\n'+
                //divisoria del progress bar
                '<div class="progress-bar" role="progressbar" style="width:0.5%; background-color:white;"></div>\n'+
                //proceso taller 
                '<div class="progress-bar progress-bar-success" role="progressbar" style="width:25%" onclick="swal(@Terminado @,@@,@success@);">Taller\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-ok">\n'+
                    '</span>\n'+
                  '</h3>\n'+
                '</div>\n'+
                //divisoria del progress bar
                '<div class="progress-bar" role="progressbar" style="width:0.5%; background-color:white;"></div>\n'+
                //proceso Lavadero 
                '<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:25%" onclick="swal(@En Proceso @,@@,@info@);">Lavado\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-cog" style=" animation: 9s rotate360 infinite linear;">\n'+
                    '</span>\n'+
                  '</h3>\n'+
                '</div>\n'+
                //divisoria del progress bar
                '<div class="progress-bar" role="progressbar" style="width:0.5%; background-color:white;"></div>\n'+
                //proceso Listo 
                '<div class="progress-bar progress-bar-danger" role="progressbar" style="width:23.5%" onclick="swal(@En Espera @,@@,@info@);">Listo\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-exclamation-sign" >\n'+
                    '</span>\n'+
                  '</h3>\n'+
                '</div>\n';

      }else if (estado == 4){//listo 

                //proceso recepcion
       html =  '<div class="progress-bar progress-bar-success" role="progressbar" style="width:25%"  onclick="swal(@Terminado @,@@,@success@);">Recepcion\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-ok" ></span>\n'+
                  '</h3>\n'+
                '</div>\n'+
                //divisoria del progress bar
                '<div class="progress-bar" role="progressbar" style="width:0.5%; background-color:white;"></div>\n'+
                //proceso taller 
                '<div class="progress-bar progress-bar-success" role="progressbar" style="width:25%"  onclick="swal(@Terminado @,@@,@success@);">Taller\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-ok">\n'+
                    '</span>\n'+
                  '</h3>\n'+
                '</div>\n'+
                //divisoria del progress bar
                '<div class="progress-bar" role="progressbar" style="width:0.5%; background-color:white;"></div>\n'+
                //proceso Lavadero 
                '<div class="progress-bar progress-bar-success" role="progressbar" style="width:25%"  onclick="swal(@Terminado @,@@,@success@);">Lavado\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-ok">\n'+
                    '</span>\n'+
                  '</h3>\n'+
                '</div>\n'+
                //divisoria del progress bar
                '<div class="progress-bar" role="progressbar" style="width:0.5%; background-color:white;"></div>\n'+
                //proceso Listo 
                '<div class="progress-bar progress-bar-success" role="progressbar" style="width:23.5%"  onclick="swal(@Terminado @,@@,@info@);">Listo\n'+
                  '<h3 style="margin-top:1px;">\n'+
                    '<span class="glyphicon glyphicon-ok" >\n'+
                    '</span>\n'+
                  '</h3>\n'+
                '</div>\n';

               //esta funcion convierte en string los @  list_colunmas  = list_colunmas.replace(/@/g, "'");
 
      }
      html = html.replace(/@/g, "'"); //cambiar el @ por las comillas 
      //console.log(html);
      $(".progress").html(html);

    }

    function CopiarDatos(id){
      //swal().close();
      if ( $("#NroLlamada").val().length == 0 ){
        $("#Motivo").val( $("." + id + " span:nth-child(2)").text() );
        $("#PedidoCliente").val( $("." + id + " span:nth-child(6)").text() );
        var t_nombre = $("#tnombre_" + id).text(); 
        t_nombre = t_nombre.trim();
        var pos = t_nombre.indexOf(" ");
        if(pos < 0 ){
          pos = t_nombre.length;  
        }
        var str = t_nombre.substr(0, pos );
        var pos2 = t_nombre.indexOf(" ", pos +1 );
        if (pos2 < 0 ){
          var str2 = t_nombre.substr(pos, t_nombre.length );
        }else {
          var str2 = t_nombre.substr(pos, pos2);
        }
        t_nombre = str2 + ' ' + str;
        ///t_nombre = t_nombre.trim();
        console.log( $("#tnombre_" + id).text() ); 
        swal({
          type: 'success', 
          title:'Datos copiados !'
        }).then(function () {
          $("#PedidoCliente").focus();
          ConsultarCliente();
          $("#BuscarCliente").val( t_nombre );
          $("#BuscarCliente").trigger("onchange");

        });
      }else {
        swal({
          type: 'info', 
          title:'No se pueden copiar sobre datos ya guardados !'
        });

      }

    }

    function Asesor(evento){ 
      console.log( '<?php get_ip(); ?>' ); 
      var sucu = localStorage.sucursal; 
      //fco ajax consultar datos!!!
      console.log(sucu);
      $.ajax( { method: "POST", url: "http://localhost:8080/tablet2/consulta.php", data : { funcion: 'Asesor' , sucursal : sucu }, dataType: 'json'})
      .done(function(rs){
        if(rs){
          var my_html = '<ul class="list-group">\n' , my_codigo, my_asesor; 
          console.log(rs);
            var id = 0 , campo; //fco esta linea obtiene el nombre de los campos 
            rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
              var callid = Object.keys(rs2); //fco captura los nombres de los campos 
              Object.keys(rs2).forEach(function(key) {  //fco recorre los campos con sus valores 
                my_codigo = rs2['codigo'];
                my_asesor = rs2['asesor'];
              }); //fco este forEach trae los datos de cada campo de la consulta php ver archivo consulta.php 
              my_html +=  '<li class="list-group-item" style="text-align:left;" onclick="SetAsesor(this)" codigo="' + my_codigo + '"><h2><i class="fa fa-user"></i> &nbsp;&nbsp;&nbsp;' + my_asesor + '</h2></li>';

            });
            my_html += '</ul>';
          swal({
            title:'Seleccionar Asesor !!',
            html: my_html, 
            showConfirmButton: false,
            showCancelButton: true
          });

        }else {
          swal({
            type: 'Error consulta',
            html: 'no existen registros de ASesores !!!'
          });
        }

      })
      .fail(function(jqxhr, textStatus, error ){
          var err = textStatus + ", " + error;
          console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 

          swal({
            type: 'Error consulta',
            html: err
          });

      });
      //swal().close();

    }
 function copiarCampa(ele){
      console.log('prueba de campaña.. ');
      $(ele).addClass('btn-success');
    }

    function Campaña(chassis){

      if (chassis.length == 0 ){
        chassis = $("#Chassis").val().slice(-17);
      }
      var sucu = localStorage.sucursal; 
      //fco ajax consultar datos!!!
      console.log('entro para consultar campaña .... ' , chassis );
      $.ajax( { method: "POST", url: "consulta.php", data : { funcion: 'ConsultaCampanha' , vin: chassis , sucursal: 'alider' }, dataType: 'json'})
      .done(function(rs){
        console.log("datos de la campaña", rs); 
        if(rs){
          if(rs.length ==0 ){
            return ;
          }
          var body = '<tbody>';
          var head = '<thead><tr style="background-color:#d9534f; color:white;">'; 
          var my_html = ''; 
          var estad0  = 0 ; 
            var id = 0 , campo; //fco esta linea obtiene el nombre de los campos 
            rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[]) 
              columnas = Object.keys(rs2); //fco captura los nombres de los campos 

              if($('#Motivo').val().indexOf(rs2["CODIGO"]) > 0 ){
                body += '<tr id="FILA'+ rs2["FILA"] +'" check="1" style="background-color:#D1F2EB;">';
              }else{
                body += '<tr id="FILA'+ rs2["FILA"] +'" check="0">';
              }

              Object.keys(rs2).forEach(function(key){ //fco recorre los campos con sus valores 
                if (key == 'MODELO'){
                    body += '<td>' + $("#Vehiculo").val() + '</td>'; 

                }else if (key == 'OT'){
                  body += '<td><span class="label label-success" style="font-size:20px; font-weight:bold;">' + rs2[key] +'</span></td>';
                }else if (key == 'ESTADO'){
                  if(rs2[key] == 'OPEN'){
                    body += '<td><span class="label label-danger">' + rs2[key] +'</span></td>';
                    estado = 1;
                  }else {
                    body += '<td><span class="label label-success">'+ rs2[key] +'</span></td>';
                    estado = 0;
                  }  
                }else {
                  body += '<td>' + rs2[key] + '</td>'; 
                }
                
              }); //fco este forEach trae los datos de cada campo de la consulta php ver archivo consulta.php 
              if(estado == 1 ){//open .. 
                //saco
                if($('#Motivo').val().indexOf(rs2["CODIGO"]) > 0 ){
                  body += '<td id="A'+ rs2["FILA"] +'"onclick="marcarCampanha('+ rs2["FILA"] +')" ><i class="fa fa-check-square fa-2x text-success" aria-hidden="true"></i></td>';// para copiar en el detalle los datos de la campaña 
                }else{
                  body += '<td id="A'+ rs2["FILA"] +'"onclick="marcarCampanha('+ rs2["FILA"] +')"><i class="fa fa-square-o fa-2x" aria-hidden="true"></i></td>';// para copiar en el detalle los datos de la campaña 
                }

              }else {
                body += '<td></td>';// para copiar en el detalle los datos de la campaña 
              }

              body += '</tr>'; 
            });

            columnas.forEach( function ( col ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
              if (col == 'FECHA'){
                head += '<th style="border: 1px solid white;text-align:center; min-width:120px;">' + col + '</th>';
              }else if (col == 'MODELO'){
                head += '<th style="border: 1px solid white;text-align:center; min-width:180px;">' + col + '</th>';
              }else {
                head += '<th style="border: 1px solid white;text-align: center">' + col + '</th>';
              }

            });
            head += '<th style="border: 1px solid white;text-align: center">#</th>';
            head += '</tr></thead>'; 
            my_html = '<div class="table-responsive"> <table class="table">' + head +  body + '</table>'; 
            //my_html += '<input type="button" onclick="realizarCampanha();" class="btn btn-info" disabled id="doCampanha" value="Realizar Campaña"></div>';
            let timer = setInterval(function(){
                  if( $(".swal2-modal").hasClass('swal2-hide') ){
                    swal({
                      title:'Vehiculo con Campaña !!',
                      html: my_html, 
                      showConfirmButton: false,
                      showCancelButton: true, 
                      allowOutsideClick: false,
                      cancelButtonText: 'Ok',
                      width: '100%'
                    });
                    clearInterval(timer)
                  }
                },1000)

            $("#campanha").html('<span class="badge" style="background-color: #dd4b39; font-size: 20px;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Vehiculo con Campaña !</span>');

            localStorage.campanha = 'SI';

        }else {
          console.log('no trae datos para la campaña... ... ');
          /*
          swal({
            type: 'Error consulta',
            html: 'no existen registros de ASesores !!!'
          });
          */
        }

      })
      .fail(function(jqxhr, textStatus, error ){
          var err = textStatus + ", " + error;
          console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 

          swal({
            type: 'Error consulta',
            html: err
          });

      });
      //swal().close();

    }

    function marcarCampanha(fila){
      //script para marcar las campañas a realizar y copiar en el campo motivo como detalle.. 
      if( $("#A"+ fila +" i" ).hasClass( "fa-square-o" ) ){
        $("#A" + fila).html('');
        $("#A" + fila).append('<i class="fa fa-check-square fa-2x text-success" aria-hidden="true"></i>');
        $('#FILA'+ fila ).attr('check', '1');
        $('#FILA'+ fila ).css("background-color", "#D1F2EB");
               
      }else{
        $('#FILA'+ fila ).attr('check', '0');
        $("#A" + fila).html('');
        $("#A" + fila).append('<i class="fa fa-square-o fa-2x" aria-hidden="true"></i>');
        $('#FILA'+ fila ).css("background-color", "white");

      }

      //sincronizar los datos 
      var filas = $('table tbody tr').length;
      var trabajos = "";
      //[0] = CODIGO CAMPAÑA.. 
      //[6] = DESCRIPCION DE LA CAMPAÑA..
      var listado = [];
      for (let index = 0; index < filas; index++) {
        fila = index +1;
        if( $('#FILA'+ fila ).attr('check') == '1' ){
          trabajos += ' cod campanha: ' + $('#FILA'+ fila +' td')[1].innerHTML + ' - '+ $('#FILA'+ fila +' td')[5].innerHTML ;
          trabajos = trabajos.trim();
          trabajos += ' || '
          listado.push({'cod': $('#FILA'+ fila +' td')[1].innerHTML , 'vin': $('#FILA'+ fila +' td')[2].innerHTML , 'marca': $('#FILA'+ fila +' td')[8].innerHTML });

        }
      }
      //esto nos servira para el vinculo de la ot.-
      localStorage.setItem("listado-campaña", JSON.stringify(listado));
      console.log( JSON.parse(localStorage.getItem("listado-campaña"))) ;
      $("#Motivo").val(trabajos);
      $("#lengthMotivo").text($("#Motivo").val().length);
      if($("#Motivo").val().length > 254 ){
        alert('Atencion, Se ha excedido el limite del campo -> Motivo <- ' + $("#Motivo").val().length + '/250')
        //$([document.documentElement, document.body]).animate({ scrollTop: $("#Motivo").offset().top }, 2500); 
      }
      $("#TipoServicio").val(3); //garantia 
      $("#TipoLlamada").val(7); //campaña 


    }


    function SetAsesor(elemento){
      var asesor = {
          nombre: $(elemento).text().trim(),
          codigo: $(elemento).attr('codigo')
      };
 
      console.log( $(elemento).text() );
      console.log( $(elemento).attr('codigo') );
      $("#Asesor").text( $(elemento).text()  );
      $("#Asesor").attr('codigo', $(elemento).attr('codigo') );
      $("#BoxAsesor").addClass('text-success');

      //store 
      localStorage.setItem("asesor", JSON.stringify(asesor));
      swal({ 
        type:'success',
        title: 'Asesor asignado !!!',
        html: '<strong><h1>' + $(elemento).text()  + '</h1></strong>'
      }).then(function () {
        $("#NroOt").focus();
        //ConsultarTurnos();
      });
    }

    $("#Motivo").keyup(function(){
      $("#lengthMotivo").text($(this).val().length);
      if($("#Motivo").val().length > 254 ){
        alert('Atencion, Se ha excedido el limite del campo -> Motivo <- ' + $("#Motivo").val().length + '/250')
      }
    });


</script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
