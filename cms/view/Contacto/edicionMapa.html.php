<div class="card-panel">
    <div class="container">
        <h5 class="header2">EDICION MAPA SECCION CONTACTANOS</h5>

        <!--Inicio rastro de miga-->
        <ol class="breadcrumbs">
            <li><a href="<?php echo addLib('index.php') ?>">Panel de control</a></li>
            <li class="active">Listado contacto</li>
        </ol>

        <!--Inicio mensaje de campos obligatorios-->
        <div id="card-alert" class="card teal">
            <div class="card-content white-text">
                <p><i class="mdi-action-info-outline"></i> IMPORTANTE : A continuaci&oacute;n podr&aacute; editar el mapa que se muestra en la seccion de contacto del sitio web.</p>
            </div>
            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>

        <!--Fin mensaje de campos obligatorios-->
        <form class="col s12" id="updateMapa" data-action="<?php echo crearUrl("Contacto","contacto","updateMapa", array('noVista')) ?>" method="post">
        	<div class="row">
	            <div class="input-field col s6">
	            	<b>Codigo mapa:</b><br><br>
	                <textarea id="inputMapa" name="inputMapa" style="height: 200px;"><?php echo $contacto['descripcion']; ?></textarea>
	            </div>
	            <div class="input-field col s6">
	            	<b>Mapa actual</b><br><br>
	            	<?php echo $contacto['descripcion']; ?>
	            </div>
        	</div>
        </form>
        <br><br>
        <center>
        	<input type="button"  class="waves-light teal btn"  id="btnUpdateMapa" value="Actualizar Mapa">
       	</center>
    </div>
</div>