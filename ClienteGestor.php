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
        <section class="content" style="padding:0px;" id="contenedor">
          <!-- Your Page Content Here -->

			<div class="col-md-0">
				<div class="box box-primary">
					<div class="box-header with-border">


					
						<div class="col-md-0 pull-left" ><h3><i class="fa fa-car text-red" style="font-size:36px;" pull-left></i>&nbsp;&nbsp;CLIENTE POR GESTOR</h3></div>
					</div>
					<form class="form-horizontal" id="form1" action = "javascript:Consultar()" method="post" data-toggle="validator" >
						<div class="box-body">
							<div class="row">

								<div class="col-md-12">
								<div class="box box-success box-solid">
									<div class="box-body">	
										<h4 class="box-title"><i class="fa fa-gear text-green"></i>&nbsp;&nbsp;FILTROS:</h4>

                    <div class="form-group"> <div class="col-sm-12"><label class=" control-label">CLIENTE CI:</label></div> <div class="col-sm-12"><input type="text" id="cliente" name="cliente" class="form-control " placeholder="" ><span id="help1" class="label label-danger"></span></div></div>
                      
                      <div class="col-md-0 pull-left" >
                        <a class="btn btn-app" onclick="Cancelar()" ><i class="fa fa-refresh"></i>Cancelar</a>
                        <a class="btn btn-app" onclick="Consultar()" ><i class="fa fa-search-plus"></i>Consultar</a>
                      </div>

                      <div class="col-md-4 pull-left" style="text-align: center;" id="mensaje">
                      </div>
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

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Clientes en espera</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cliente 1</h4>
                    <p> Servicio express </p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Clientes Atendidos</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Servicio express
                    <span class="label label-danger pull-right">20%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">Configuraciones</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
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
      $("#vin").focus();
    }

    function Consultar() {
      $("#resultados").html(''); 
      $("#mensaje").html('');
      $("#contenedor").append('<center><div class="loader"><i class="fa fa-futbol-o text-danger" aria-hidden="true" style="margin-top:30%; font-size:20px;"></i></div></center>');
        if ( $.trim( $( "#vin").val()) === "" && $.trim( $( "#cliente").val()) === "" ) {
          $( "#help1" ).text( "Ingrese algun valor !!!" ).show().fadeOut( 5000 );
          $( "#help2" ).text( "Ingrese algun valor !!!" ).show().fadeOut( 5000 );
          $("#contenedor").find("center").remove();
          return;
        }

        var cliente = $("#cliente").val();
        var vehiculo = $("#vin").val();
        if ( $.trim(cliente) === ""){ cliente = vehiculo}else{vehiculo = cliente }
        $.ajax( { method: "POST", url: "consulta.php", data : {cliente : cliente , funcion: 'ClienteGestor' }, dataType: 'json'})
        //fco exito en la consulta 
        .done(function(rs) {
          var body   = '<tbody>';
          var head = '<thead><tr style="background-color:#d9534f; color:white;">';  
          //console.log(rs);
          if ( rs == null ) {
            $("#contenedor").find("center").remove();
            swal({
              type: 'warning',
              html: 'No existen Datos !!! '
            });
            return ;
          }

          rs.forEach( function ( rs2 ){ //fco recorre la lista de resultados por cada  objeto[](campos[])
                columnas = Object.keys(rs2); //fco captura las columnas 
                body += '<tr>'; //fco este comando es el standar se personalizo el codigo 
              Object.keys(rs2).forEach(function(key) {  //fco recorre los campos con sus valores 
                  //body += '<td>' + rs2[key] + '</td>'; 
                  
                  if ( key == 'ITEM' && rs2[key].indexOf("/") > 0 ){
                    body += '<tr style="background-color:#777; color:white; cursor:pointer" data-toggle="collapse" data-target=".'+ rs2["CODIGO_VEH"] +'">';
                  }else if(key == 'ITEM') {
                    body += '<tr class="collapse '+ rs2["CODIGO_VEH"] +'">';
                  }
                   
                  /* 
                  if ( key == 'CUOTA_GS' || key == 'CUOTA_USD' || key == 'PAGO_GS'|| key == 'PAGO_USD' ){
                    body += '<td>' + Number(rs2[key]).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,').replace('.00','') + '</td>';
                  }else{

                      body += '<td>' + rs2[key] + '</td>';
                  }
                  */
                  
                  if (key == 'MORA' && rs2[key] > 0 ){
                   body += '<td>' + 0 + '</td>'; 
                   $("#mensaje").html('<div class="callout callout-success"><h4><i class=" icon fa fa-user"></i> Cliente sin Mora</h4></div>');
                  }else {
                    if ( key == 'ITEM' && rs2[key].indexOf("/") > 0 ){
                      if (rs2["ITEM"] == '1/1'){
                        body += '<td>' + rs2[key] + '</td>'; 
                      }else {
                        body += '<td><i class="fa fa-arrow-circle-down" aria-hidden="true"></i> ' + rs2[key] + '</td>'; 
                      }
                    }else {
                      body += '<td>' + rs2[key] + '</td>'; 
                   }
                   $("#mensaje").html('<div class="callout callout-danger"><h4><i class=" icon fa fa-user"></i> Cliente con Mora</h4></div>');
                  }
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
          var err = textStatus + ", " + error;
          console.log( "Error Ajax: " + err );//fco para ver en la consola de la web 
          $("#contenedor").find("center").remove();          
        });
    }


</script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
