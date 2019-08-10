<div class="card-panel">
    <div class="container">
        <h5 class="header2">CAMBIO DE IMAGEN DE LA PROMOCI&Oacute;N</h5>

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
<?php if ($consultaPromocion['imagen'] == "Si") { ?>
	<form  action="<?php echo crearUrl("Banner","promocion","cambioTexto", array('noVista' => 'noVista', 'valor' => 'cambiarATexto')) ?>" enctype="multipart/form-data"  method="post">
        	<div class="row">
		        	<div class="col s12">
		        		<button name="action" type="submit" class="btn teal waves-effect waves-light right animated infinite rubberBand">Cambiar a texto
		        		<i class="mdi-navigation-refresh left"></i>
		        		</button>
		        	</div>
                </div>
        </form>

        <form  action="<?php echo crearUrl("Banner","promocion","postEdicionImagen", array('noVista' => 'noVista')) ?>" enctype="multipart/form-data"  method="post">
	        <div class="col s12 m6 l3" id="flight-card">
		        <div class="col s12 m6 l3" id="flight-card">
		        	<div class="row">
		        		<div class="input-field col s12 m12 l12 xl2">
		        			<b><span>Imagen actual:</span></b><br>
			                 <?php $url_file = "media/img/Promocion/" . $consultaPromocion['url']; ?>
                                            <img src="<?php echo addLib($url_file); ?>" width="350px">
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
		        </div>
		        <br>
		        <div class="row">
		        	<div class="col s12">
		        		<button name="action" type="submit" class="btn teal waves-effect waves-light right animated infinite rubberBand">Actualizar
		        		<i class="mdi-navigation-refresh left"></i>
		        		</button>
		        	</div>
                </div>
		    </div>
		</form>

<?php }else{  ?>
		<!-- SI ES TEXTO -->
		<form  action="<?php echo crearUrl("Banner","promocion","cambioTexto", array('noVista' => 'noVista', 'valor' => 'cambiarAImagen')) ?>" enctype="multipart/form-data"  method="post">
        	<div class="row">
		        	<div class="col s12">
		        		<button name="action" type="submit" class="btn teal waves-effect waves-light right animated infinite rubberBand">Cambiar a imagen
		        		<i class="mdi-navigation-refresh left"></i>
		        		</button>
		        	</div>
                </div>
        </form>

		<form  action="<?php echo crearUrl("Banner","promocion","postEdicionTexto", array('noVista' => 'noVista')) ?>" method="post">
	        <div class="col s12 m6 l3" id="flight-card">
		        <div class="col s12 m6 l3" id="flight-card">
		        	<div class="row">
		        		<b><span>Texto actual:</span></b><br>
		        			<textarea id="texto" name="texto"><?php echo $consultaPromocion['descripcion_texto']; ?></textarea>
		        	</div>
		        </div>
		        <br>
		        <div class="row">
		        	<div class="col s12">
		        		<button name="action" type="submit" class="btn teal waves-effect waves-light right animated infinite rubberBand">Actualizar
		        		<i class="mdi-navigation-refresh left"></i>
		        		</button>
		        	</div>
                </div>
		    </div>
		</form>
<?php } ?>

	</div>
</div>



<script type="text/javascript">
	CKEDITOR.replace("texto");
</script>