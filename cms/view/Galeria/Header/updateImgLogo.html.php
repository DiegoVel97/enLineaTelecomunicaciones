<div class="card-panel">
    <div class="container">
        <h5 class="header2">CAMBIO DE IMAGEN DEL LOGO EN EL HEADER</h5>

        <BR>
        <!--Inicio mensaje de campos obligatorios-->
        <div id="card-alert" class="card teal">
            <div class="card-content white-text">
                <p><i class="mdi-action-info-outline"></i> IMPORTANTE : A continuaci&oacute;n podr&aacute; crear una Banner. <code>Los campos marcados con asteriscos (*) son obligatorios </code>.</p>
            </div>
            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <?php
        $errores = getErrores();
        if (!$errores == "") {
            ?>
            <div id="card-alert" class="card red">
                <div class="card-content white-text">
                    <p><i class="mdi-alert-error"></i> 
                        <?php echo $errores ?>
                    </p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        <?php }  ?>
         <!--Inicio contenedor mensajes de error-->
        <div class="card red">
            <div id="cont_errors_ajax" class="card-content white-text">
            </div>
        </div>
        <!--Fin contenedor mensajes de error-->

        <form  action="<?php echo crearUrl("Banner","header","postEdicionImagen", array('noVista' => 'noVista')) ?>" enctype="multipart/form-data"  method="post">
	        <div class="col s12 m6 l3" id="flight-card">
		        <div class="col s12 m6 l3" id="flight-card">
		        	<div class="row">
			            <div class="input-field col s12 m12 l12 xl2">
			            	<b><span>Imagen actual:</span></b><br>
			                 <?php $url_file = "media/img/Header/" . $consultaHeader['imagen']; ?>
                                            <img src="<?php echo addLib($url_file); ?>" width="350px">
			            </div>
		        	</div>

		        	<div class="row">
			            <div class="input-field col s12 m12 l12 xl2">
			            	<b><span>Archivo de imagen:</span></b>
			                 <div class="file-field input-field">
						      <div class="btn">
						      	<span>Seleccionar imagen</span>
						        <input type="file" name="archivo">
						      </div>
						      <div class="file-path-wrapper">
						        <input class="file-path validate" type="text">
						      </div>
						    </div>
			            </div>
		        	</div>
		        </div>
		        <div class="row">
		        	<div class="col s12">
		        		<button name="action" type="submit" class="btn teal waves-effect waves-light right animated infinite rubberBand">Crear
		        		<i class="mdi-content-add left"></i>
		        		</button>
		        	</div>
                </div>
		    </div>
		</form>
	</div>
</div>
