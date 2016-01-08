<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tienda On-Line</title>
	<link rel="shortcut icon"  href="img/favicon.ico" />
	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="css/estilo.css"/>
</head>
<body>
	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <header>
    	<div class="navbar-fixed">
	    	<nav>
				<div class="nav-wrapper  light-blue darken-2">
					<a href="#" class="brand-logo">Tienda On-Line</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
					    <li><a href="#">Inicio</a></li>
					    <li><a href="vistas/articulos.php">Articulos</a></li>
					    <li><a href="vistas/contacto.php">Contacto</a></li>
					    <li><a href="vistas/carrito.php"><i class=" material-icons">shopping_cart</i></a></li>
					</ul>
					<ul id="mobile-demo" class="side-nav">
					    <li><a href="#">Inicio</a></li>
					    <li><a href="vistas/articulos.php">Articulos</a></li>
					    <li><a href="vistas/contacto.php">Contacto</a></li>
					    <li><a href="vistas/carrito.php"><i class="material-icons">shopping_cart</i></a></li>
					</ul>
				</div>
			</nav>
    	</div>
    </header>
    <section class="container">
	    <div class="col s12 background-head">
		    <br/>
		    <br/>
		    <h1 class="center-align">Tienda On-Line</h1>
		    <br/>
		    <h5 class="center-align white-text">Compra lo que deseas en cualquier momento</h5>
		    <br/>
	    </div>
	    <div class="row">
	    	<div class="col s12 m4" id="oferta">
	    		<?php
	    		require_once('controlador/gestionProducto.php');
	    		mostrarProducto()
	    		?>
	    		
	    	</div>
	    	<div class="col s12 m8">
	    		<h3 class="center-align">Bienvenido a nuestra tienda</h3>
	    		<p>
	    			Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
	    			Alias quam reiciendis voluptatem, asperiores facere, 
	    			ullam quibusdam fuga est consequuntur minima molestiae nisi 
	    			temporibus culpa vitae autem dolore ab, perspiciatis tempore?
	    		</p>
	    		
	    	</div>
	    </div>
	    <!-- Modal Structure -->
        <div id="modal1" class="modal">
            
           
            <div class="modal-footer">
             	 <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
            </div>
        </div>
    	
    </section>
    <footer class="page-footer grey darken-2">
        <div class="container">
            <div class="row">
              	<div class="col l6 s12">
                	<h5 class="white-text">Tienda On-Line</h5>
                	<p class="grey-text text-lighten-4">Proyecto desarrollado en PHP, JQuery, Ajax y Materialize.</p>
              	</div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  	<li><a class="grey-text text-lighten-3" href="index.php">Inicio</a></li>
                  	<li><a class="grey-text text-lighten-3" href="vistas/articulos.php">Articulos</a></li>
                  	<li><a class="grey-text text-lighten-3" href="vistas/contacto.php">Contacto</a></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="footer-copyright">
          	<div class="container">
            	© 2015 Copyright Jesús de Serdio
            	<a class="grey-text text-lighten-4 right" href="www.jspsoluciones.es">JSP Soluciones</a>
            </div>
        </div>
    </footer>
	<script type="text/javascript" src="js/controladorIndex.js"></script>  
</body>
</html>
