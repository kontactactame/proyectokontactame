<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KontactameMexiquense</title>
    <!-- Bootstrap Styles-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{asset('assets/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('assets/css/custom-styles.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Kontactame Mexiquense</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong>KONTACTAME</strong></a>
				
		<div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
            </div>

            
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Perfil<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="altaperfil">Altas</a>
                            </li>
                            <li>
                                <a href="#">Bajas</a>
                            </li>
                            <li>
                                <a href="#">Modificaciones<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="reporteperfil">Consultas</a>
                                    </li>
                                    <li>
                                        <a href="#">Bajas</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
								
								
								

                            </li>
							
							
                    
                </ul>
				
				<li>
                        <a href="#"><i class="fa fa-sitemap"></i> Postulante<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="altapostulantei">Altas</a>
                            </li>
                            <li>
                                <a href="#">Bajas</a>
                            </li>
                            <li>
                                <a href="#">Modificaciones<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="reportepostulantei">Consultas</a>
                                    </li>
                                    <li>
                                        <a href="#">Bajas</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
								
								
								

                            </li>
                        </ul>
                    </li>
					
					
					<li>
                        <a href="#"><i class="fa fa-sitemap"></i> Usuarios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="altausuarioi">Altas</a>
                            </li>
                            <li>
                                <a href="#">Bajas</a>
                            </li>
							<li>
                                <a href="#">Consultas</a>
                            </li>
                            
                        </ul>
                    </li>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                             <small>Bienvenido</small>
                        </h1>
						
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
	
		
			
		
             <!--aqui van yield -->
             @yield('contenido')
			 
				
				
              
				
					</div>		
				</div> 	
                <!-- /. ROW  -->

	   
				
				
				
               
                <!-- /. ROW  -->
			
		
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	 
    <!-- Metis Menu Js -->
    <script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
    <!-- Morris Chart Js -->
    <script src="{{asset('assets/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('assets/js/morris/morris.js')}}"></script>
	
	
	<script src="{{asset('assets/js/easypiechart.js')}}"></script>
	<script src="{{asset('assets/js/easypiechart-data.js')}}"></script>
	
	 <script src="{{asset('assets/js/Lightweight-Chart/jquery.chart.js')}}"></script>
	
    <!-- Custom Js -->
    <script src="{{asset('assets/js/custom-scripts.js')}}"></script>

      <script>
    
      </script>

</body>

</html>