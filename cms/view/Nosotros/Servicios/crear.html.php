<div class="card-panel">
    <div class="container">
        <h5 class="header2">AGREGAR SERVICIO</h5>

        <!--Inicio rastro de miga-->
        <ol class="breadcrumbs">
            <li><a href="<?php echo addLib('index.php') ?>">Panel de control</a></li>
            <li><a href="<?php echo crearUrl("Nosotros","nosoros","listar") ?>">Listar servicios</a></li>
            <li class="active">Agregar imagen al banner</li>
        </ol>

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

        <form class="file-form-servicios" id="formServicios" data-action="<?php echo crearUrl("Nosotros","nosotros","agregarServicio", array('noVista' => 'noVista')) ?>" enctype="multipart/form-data"  method="post">
	        <div class="col s12 m6 l3" id="flight-card">
	        		        <div class="col s12 m6 l3" id="flight-card">
	        	<div class="row">
		            <div class="input-field col s12 m12 l12 xl2">
		            	<b><span>Archivo de imagen:</span></b>
		                 <div class="file-field input-field">
					      <div class="btn">
					      	<span>Seleccionar imagen</span>
					        <input type="file" name="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
		            </div>
	        	</div>
	        </div>

	            <div class="input-field col s12">
	            	<b>Titulo Servicio:</b>
	                <div class="input-field col s12">
	                    <textarea id="tituloServicios" name="tituloServicios" required=""></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Descripci&oacute;n Servicio:</b>
	                <div class="input-field col s12">
	                    <textarea id="descripcionServicios" name="descripcionServicios"></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
				    <b>¿Posicionar en el men&uacute; de navegaci&oacute;n?</b>
				    <select class="browser-default select" id="posicionMenu" name="posicionMenu">
				    		<option selected="">Seleccione una opcion.</option>
				    		<option value="Si">Si</option>
				      		<option value="No">No</option>
				    </select>
				 </div>
				 <br>
	            <div class="input-field col s12" id="inputNavegacion" style="display: none;">
				    <b>Men&uacute; navegaci&oacute;n</b>
				    <select class="browser-default select" id="menuNavegacion" name="menuNavegacion">
				    	<option value="" selected="">Seleccione una opcion.</option>
				    	<?php foreach($consultaMenuNavegacion as $menuNavegacion) { ?>
				    		<option value="<?php echo $menuNavegacion['id_menu']; ?>"><?php echo $menuNavegacion['descripcion']; ?></option>
				    	<?php } ?>
				    </select>
				</div>
	            <br>
	            <div class="input-field col s12">
				    <b>Estado del servicio</b>
				    <select class="browser-default select" id="estadoServicios" name="estadoServicios">
				    		<option selected="">Seleccione una opcion.</option>
				    		<option value="activo">Activo</option>
				      		<option value="inactivo">Inactivo</option>
				    </select>
				 </div>

	        </div>
	        <br><br>
	        <!--------------------DIV ROW BOTON CREAR ------------------------------------------->
                    <div class="row">
                        <div class="col s12">
                            <button name="action" type="submit" class="btn teal waves-effect waves-light right animated infinite rubberBand btn_submit_file_servicios">Crear
                                <i class="mdi-content-add left"></i>
                            </button>
                        </div>
                    </div>
        </form>
    </div>
</div>

<script type="text/javascript">
	
		editor = CKEDITOR.replace("tituloServicios");
		CKFinder.setupCKEditor(editor, '../web/CKFinder')

		descripcion = CKEDITOR.replace("descripcionServicios");
		CKFinder.setupCKEditor(descripcion, '../web/CKFinder')

</script>
