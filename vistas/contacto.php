<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link type="text/css" rel="stylesheet" href="../css/estilo.css"/>
    <link rel="icon" type="image/x-icon" href="../favicon.ico" />
</head>
<body>
	<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <header>
    	<div class="navbar-fixed">
	    	<nav>
				<div class="nav-wrapper  light-blue darken-2">
					<a href="#" class="brand-logo">Tienda On-Line</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
					    <li><a href="../index.php">Inicio</a></li>
					    <li><a href="articulos.php">Articulos</a></li>
					    <li><a href="contacto.php">Contacto</a></li>
                        <li><a href="carrito.php"><i class="material-icons">shopping_cart</i></a></li>
					</ul>
					<ul id="mobile-demo" class="side-nav">
					    <li><a href="../index.php">Inicio</a></li>
					    <li><a href="articulos.php">Articulos</a></li>
					    <li><a href="contacto.php">Contacto</a></li>
                        <li><a href="carrito.php"><i class="material-icons">shopping_cart</i></a></li>
					</ul>
				</div>
			</nav>
    	</div>
   
    </header>
    <section class="container">
        <div class="col s12">
            <h3 class="center-align">Contacto</h3>
            <p>Para cualquier consulta puedes contactar a través del formulario</p>
            <div class="row">
                <form class="col s12" id="formContacto" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input placeholder="Escribe tu nombre" id="nombre" name="nombre" type="text" class="validate" required>
                            <label for="nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">description</i>
                            <input placeholder="Escribe un asunto" id="asunto" name="asunto" type="text" class="validate" required>
                            <label for="asunto">Asunto</label>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input placeholder="Escribe tu correo" id="email" name="email" type="email" class="validate" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
                            <label for="email" data-error="No válido">Correo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea id="mensaje" name="mensaje" class="materialize-textarea"length="120" required></textarea>
                            <label for="mensaje">Mensaje</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light red darken-2" type="submit" name="limpiar">Limpiar
                                <i class="material-icons right">delete</i>
                            </button>
                            <button class="btn waves-effect waves-light" type="submit" id="enviar" name="enviar">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- Modal Structure -->
          <div id="modal1" class="modal">
            <div class="modal-content">
              <h4>Correo enviado</h4>
              <p>Le contestaremos lo antes posible </p>
            </div>
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
                    <li><a class="grey-text text-lighten-3" href="../index.php">Inicio</a></li>
                    <li><a class="grey-text text-lighten-3" href="articulos.php">Articulos</a></li>
                    <li><a class="grey-text text-lighten-3" href="contacto.php">Contacto</a></li>
                </ul>
            </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container" id="resultado">
                © 2015 Copyright Jesús de Serdio
                <a class="grey-text text-lighten-4 right" href="www.jspsoluciones.es">JSP Soluciones</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="../js/controladorContacto.js"></script>     
</body>
</html>