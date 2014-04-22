<?php 
include("head.php");
include("menu.php");

include("../controller/funcionesController.php");

$populares=getCancionesPopulares();
$recomendadas=getCancionesAdmin();
var_dump($_POST);
//controler canciones con las funciones
//ejecutar funciones y pintar resultados

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
			<div class="cdrround">
			  <h2 align="justify">Canciones Recomendadas</h2>
			  <p align="justify">CARGAR CANCIONES PAGINA PRINCIPAL</p>
			  <p><a class="btn btn-default" href="view/cancionesRecomendadas.php">Ver más &raquo;</a></p>
			 </div>
        </div>
        <div class="col-lg-4">
			<div class="cdrround">
				<h3 align="justify">Canciones populares</h3>
				<div class="row">
				  <div class="col-lg-12 col-md-6">
				  <form method="post" id="frm_musicPopular" >
				<!-- inicia for --->
					<div class="input-group">
					  <span class="input-group-addon">
						<input type="checkbox" value="idcancion1" class="chk_popular" name="cancionck">
					  </span>
					  <input type="text" value="cancionname1" readonly class="form-control">
					</div><!-- /input-group -->
					<div class="input-group">
					  <span class="input-group-addon">
						<input type="checkbox" value="idcancion2" class="chk_popular" name="cancionck">
					  </span>
					  <input type="text" value="cancionname2" readonly class="form-control">
					</div><!-- /input-group -->
				<!-- fin for -->
						<div class="btn-group">
							<button id="btn_popularbuy" type="button" class="btn btn-default">Comprar</button>
						</div>
						<input type="hidden" name="checkedPopular" id="checkedPopular">
					</form>
				  </div><!-- /.col-lg-12 -->
				</div><!-- /.row -->
			</div>
       </div>
        <div class="col-lg-4">
			<div class="cdrround">
				<h2 align="justify">Más Información</h2>
				<p align="justify">
				<ul type="disk"> 
				<li>Acerca de la pagina
				<li>Términos y Condiciones
				<li>Membresías
				</ul></p>
				<p><a class="btn btn-default" href="view/masInformacion.php">Ver más&raquo;</a></p>
			</div>
        </div>
      </div>
	</div> <!-- /container -->

<?php 
include("footer.php");
?>
      