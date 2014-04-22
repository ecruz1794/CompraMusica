<?php
include("../lib/sesion.php");
$ingreso = existeSesion();

?>

	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Inicio</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
			
			<?php if(!$ingreso){?>
              <a href="#" class="dropdown-toggle" style="display: true" data-toggle="dropdown">Ingresar <b class="caret"></b></a>
              <ul class="dropdown-menu">
				<form class="navbar-form navbar-right"  method = "post" action="../controller/userController.php">
					<input type="hidden" name="action" value = 0> 
					<div class="form-group">
						<input type="text" placeholder="Cuenta" class="form-control" name="cuenta">
						<li class="divider"></li>
					</div>
					<div class="form-group">
					  <input type="password" placeholder="Clave" class="form-control" name="password">
					  <li class="divider"></li>
					</div>
					<li><a href="#">¿Olvido su contraseña?</a></li>
					<button type="submit" class="btn btn-success">Enviar</button>
				 </form>
                <li class="divider"></li>
              </ul>
			  </li>
			  
			  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nuevo Miembro <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <form class="navbar-form navbar-right" method = "post" action="../controller/userController.php">
				<input type="hidden" name="action" value = 1> 
					<div class="form-group">
					  <input type="text" placeholder="Nombre" class="form-control" name="nombre">
					  <li class="divider"></li>
					</div>
					<div class="form-group">
					  <input type="text" placeholder="Email" class="form-control" name="email">
					  <li class="divider"></li>
					</div>
					<div class="form-group">
					  <input id="cuenta" name="cuenta" type="text" placeholder="Cuenta" class="form-control">
					  <li class="divider"></li>
					</div>
					<div class="form-group">
					  <input id="clave" name="clave" type="password" placeholder="Clave" class="form-control">
					  <li class="divider"></li>
					</div>
					<button type="submit" class="btn btn-success">Enviar</button>
				 </form>
                <li class="divider"></li>
              </ul>
            </li>
			<?php }else{ ?>
				<li><a style="display: true" href="cuentaUsuario.php">Mi Cuenta (<?php echo $_SESSION["name"]?>)</a></li>
				<li class="divider"></li>
				<li><a i style="display: true" href="historialCompras.php">Historial Compras</a></li>
				<li class="divider"></li>
				<li><a  style="display: true" href="../controller/userController.php?option=logout">Salir</a></li>
				<li class="divider"></li>
			<?php } ?>
			  
          </ul>
          <form class="navbar-form navbar-right" action="resultadoBusqueda.php" >
            <div class="form-group">
              <input type="text" id="Buscar" value="Búsqueda Canciones" name="Buscar" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Buscar</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>