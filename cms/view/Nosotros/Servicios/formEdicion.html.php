
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

        <form class="file-form-servicios-edicion" id="formServiciosEdicion" data-action="<?php echo crearUrl("Nosotros","nosotros","updateServicio", array('noVista' => 'noVista', 'id' => $servicio['slug'])) ?>" enctype="multipart/form-data"  method="post">
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
	                    <textarea id="tituloServicios" name="tituloServicios" required=""><?php echo $servicio['titulo_servicio']; ?></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Descripci&oacute;n Servicio:</b>
	                <div class="input-field col s12">
	                    <textarea id="descripcionServicios" name="descripcionServicios"><?php echo $servicio['descripcion_servicio']; ?></textarea>
	                </div>
	            </div>
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
				    	<?php foreach($consultaMenuNavegacion as $menuNavegacion) { 
				    			if($servicio['posicion_menu'] == $menuNavegacion['id_menu']) { ?>
				    					<option value="<?php echo $menuNavegacion['id_menu']; ?>" selected=""><?php echo $menuNavegacion['descripcion']; ?></option>
				    			<?php }else{ ?>
				    				<option value="<?php echo $menuNavegacion['id_menu']; ?>" selected=""><?php echo $menuNavegacion['descripcion']; ?></option>
				    			<?php } ?>
				    	<?php } ?>
				    </select>
				</div>
	            <br>

	            <div class="input-field col s12">
				    <b>Estado del servicio</b>
				    <select class="browser-default select" id="estadoServicios" name="estadoServicios">
				    		<option >Seleccione una opcion.</option>
				    		<?php if($servicio['estado_servicio'] == "activo") {?>
				    			<option value="activo" selected="">Activo</option>
				      			<option value="inactivo">Inactivo</option>
				    		<?php }else{ ?>
				    			<option value="activo">Activo</option>
				      			<option value="inactivo" selected="">Inactivo</option>
				    		<?php } ?>
				    </select>
				 </div>

	        </div>
	        <br><br>
	        <!--------------------DIV ROW BOTON CREAR ------------------------------------------->
                    <div class="row">
                        <div class="col s12">
                            <button name="action" type="submit" class="btn teal waves-effect waves-light right animated infinite rubberBand btn_submit_file_servicios_edicion">Crear
                                <i class="mdi-content-add left"></i>
                            </button>
                        </div>
                    </div>
        </form>


<script type="text/javascript">
	
		editor = CKEDITOR.replace("tituloServicios");
		CKFinder.setupCKEditor(editor, '../web/CKFinder')

		descripcion = CKEDITOR.replace("descripcionServicios");
		CKFinder.setupCKEditor(descripcion, '../web/CKFinder')

    /* BANNER CREAR*/
      $(".file-form-servicios-edicion").on('submit', function () {
        

        $('.btn_submit_file_servicios_edicion').prop('disabled', true);
        var url = $("#formServiciosEdicion").attr("data-action");
        var parametros = {
                    "tituloServicios" : CKEDITOR.instances['tituloServicios'].getData(),
                    "descripcionServicios" : CKEDITOR.instances['descripcionServicios'].getData(),
                    "estadoBanner" : $("#estadoBanner").val(),
                    "posicionMenu" : $("#posicionMenu").val(),
                    "menuNavegacion" : $("#menuNavegacion").val()
            };

        var options = {
            url: url,
            data: parametros,
            success: function (response) {
                          alert(response);
                var respuesta = $.parseJSON(response);

                if (respuesta.accion === true) {
                    Materialize.toast(respuesta.mensajes, 1500, 'rounded col green');
                    window.setTimeout("location.href='" + respuesta.redirect + "'", 1500);
                } else {
                    $('#cont_errors_ajax').html(respuesta.mensajes);
                    $('#cont_errors_ajax').css('display', 'block');
                    $('.btn_submit_file_servicios').prop('disabled', false);
                    $('.modal-content').animate({scrollTop: $('#cont_errors_ajax').position().top}, 'slow');
                }
            }
        };//options

        $(this).ajaxSubmit(options);
        return false;
    });
</script>
