<?php 
include("head.php");
include("menu.php");
?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 align="center">DESCARGA MUSICA ONLINE</h1>
        <p align="center"> En esta página usted puede encontrar sus canciones 
		favoritas,comprar dicha canción y descargarla.</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2 align="justify">Canciones Recomendadas</h2>
          <p align="justify">CARGAR CANCIONES PAGINA PRINCIPAL</p>
          <p><a class="btn btn-default" href="cancionesRecomendadas.php">Ver más &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2 align="justify">Canciones populares</h2>
          <p align="justify">CARGAR CANCIONES MAS COMPRADAS</p>
          <p><a class="btn btn-default" href="cancionesPopulares.php">Ver más &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2 align="justify">Más Información</h2>
          <p align="justify">
		  <ul type="disk"> 
		  <li>Acerca de la pagina
		  <li>Términos y Condiciones
		  <li>Membresías
		  </ul></p>
          <p><a class="btn btn-default" href="membresias.php">Ver más&raquo;</a></p>
        </div>
      </div>
	</div> <!-- /container -->

<?php 
include("footer.php");
?>
      