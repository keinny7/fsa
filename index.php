<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FSA </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="view/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="view/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="view/assets/css/slicknav.css">
            <link rel="stylesheet" href="view/assets/css/animate.min.css">
            <link rel="stylesheet" href="view/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="view/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="view/assets/css/themify-icons.css">
            <link rel="stylesheet" href="view/assets/css/slick.css">
            <link rel="stylesheet" href="view/assets/css/nice-select.css">
            <link rel="stylesheet" href="view/assets/css/style.css">
   </head> 

   <body class="body-bg">
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="view/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="header-wrapper d-flex flex-wrap align-items-center justify-content-between">
                <!-- Logo -->
                <div class="logo">
                    <a href="?vista=main"><img src="view/assets/img/logo/logo.png" alt=""></a>
                </div>
                <!-- Main-menu -->
                <div class="main-menu d-none d-lg-block">
                    <nav>
                        <ul id="navigation">                                                     
                        <!-- Inicio
                            Noticas
                            Tsumes
                            Asociaciones y clubes
                            Galeria
                            Torneos
                            Elaces de Interés
                            Nosotros

                            <li><a href="blog.html">Noticias</a>
                                <ul class="submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    .... <li><a href="single-blog.html">Blog Details</a></li>
                                </ul>
                            </li>
                         -->                                                                          
                            <li><a href="?vista=main">Inicio</a></li>
                            <li><a href="?vista=noticias">Noticias</a>                             
                            </li>
                            <li><a href="?vista=Tsumes">Tsumes</a>                             
                            </li>
                            
                            
                            <li><a href="?vista=gellary">Galeria</a></li>
                            
                            <li><a href="?vista=Torneos">Torneos</a>
                                
                            </li>
                            
                            <li><a href="?vista=about">Nosotros</a></li>
                            <li><a href="#">Enlaces de Interés</a></li>
                        </ul>
                    </nav>
                </div>          
                <!-- Header-btn -->
                <div class="d-none d-xl-block">
                    <a href="?vista=contact" class="btn btn2">Contáctanos</a>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main> 
    
    <?php

        if(isset($_POST['btnIniciar'])){


        //valida el inicio de sesión
        $validar = $usuario->validarU($_POST['txtUsuario'], $_POST['txtClave']);
        if($validar == true){
            $_SESSION['sesion_iniciada'] = true;
            $datos = $usuario->datosUsuario($_POST['txtUsuario'], $_POST['txtClave']);
            // nombre de usuario es nombre real
            $_SESSION['nombreUsuario'] = $datos['NombreCompleto'];
            // el usuario es el nickname
            $_SESSION['usuario'] = $datos['Usuario'];
            // el rol es el rol :V (si es administrativo, de comité o usuario común)
            $_SESSION['rol'] = $datos['IdRol'];
            $_SESSION['correo'] = $datos['Correo'];
            include_once "vista/home.php";
        }else{
            $error = "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span>
            </button>
            <strong>Error al iniciar sesión</strong> Usuario y/o contraseña incorrecta.
            </div>";
            include_once "vista/vlogin.php";
            }
        }

        //retorna las páginas pedidas
        require_once "core/router.php";
        $router = new Router();

        if(isset($_GET["vista"]))
        {
            $router->returnView($_GET["vista"]);
        }else{
            $router->returnView("main");
        }

    ?>

    </main>
   <footer>
        <div class="footer-area fix">
            <!-- Footer Caption -->
            <div class="footer-caption wow fadeInRight" data-wow-delay=".6s">
                <div class="footer-tittle">
                    <h3>Federación Americana<br> de Shogi</h3>
                </div>
                <div class="footer-menu ">
                    <div class="single-menu">
                        <div class="single-menu1">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Contáctanos</h4>
                                    <div class="footer-pera">
                                        <p> (+56) 933-204-806 contacto@fsa.com </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-menu2">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Enlaces</h4>
                                    <ul>
                                        <li><a href="#">Inicio</a></li>
                                        <li><a href="#"> Torneos</a></li>
                                        <li><a href="#"> F.S.A </a></li>
                                        <li><a href="#">Contáctanos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-menu3">
                            <div class="single-footer-caption">
                                <div class="footer-tittle">
                                    <h4>Social</h4>
                                    <!-- Social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fas fa-globe"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright pt-40">
                    <p><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></p>
                </div>
            </div>
        </div>
   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./view/assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./view/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./view/assets/js/popper.min.js"></script>
        <script src="./view/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./view/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./view/assets/js/owl.carousel.min.js"></script>
        <script src="./view/assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./view/assets/js/wow.min.js"></script>
		<script src="./view/assets/js/animated.headline.js"></script>
        <script src="./view/assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./view/assets/js/jquery.scrollUp.min.js"></script>
        <script src="./view/assets/js/jquery.nice-select.min.js"></script>
		<script src="./view/assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./view/assets/js/contact.js"></script>
        <script src="./view/assets/js/jquery.form.js"></script>
        <script src="./view/assets/js/jquery.validate.min.js"></script>
        <script src="./view/assets/js/mail-script.js"></script>
        <script src="./view/assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./view/assets/js/plugins.js"></script>
        <script src="./view/assets/js/main.js"></script>
        
    </body>
</html>