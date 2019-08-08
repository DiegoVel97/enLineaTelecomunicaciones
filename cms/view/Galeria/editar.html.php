

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

        <form class="file-form-banner-edicion" id="formBannerEdicion" data-action="<?php echo crearUrl("Banner","galeria","postEdicion", array('noVista' => 'noVista', 'id' => $consultaBanner['id'])) ?>" enctype="multipart/form-data"  method="post">
	        <div class="col s12 m6 l3" id="flight-card"> 

	       		<input type="hidden" name="valorFotoBD" value="<?php echo $consultaBanner['imagen']; ?>">
	       		<div class="col s12 m6 l3" id="flight-card">
	        	<div class="row">
		            <div class="input-field col s12 m12 l12 xl2">
		            	
		            	<b><span>Archivo de imagen:</span></b>
		                 <div class="file-field input-field">
					      <div class="btn">
					      	<span>Seleccionar imagen</span>
					        <input type="file" name="file" >
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
		            </div>
	        	</div>
	        </div>

	            <div class="input-field col s12">
	            	<b>Titulo Banner:</b>
	                <div class="input-field col s12">
	                    <textarea id="tituloBanner" name="tituloBanner" required=""><?php echo $consultaBanner['titulo']; ?></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Descripci&oacute;n Banner:</b>
	                <div class="input-field col s12">
	                    <textarea id="descripcionBanner" name="descripcionBanner"><?php echo $consultaBanner['descripcion']; ?></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Descripci&oacute;n Boton:</b>
	                <div class="input-field col s12">
	                    <textarea id="descripcionBoton" name="descripcionBoton"><?php echo $consultaBanner['descripcion_boton']; ?></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Hipervinculo/Link del Boton</b>
	                <div class="input-field col s12">
	                   <input type="text" name="linkBoton"  value="<?php echo $consultaBanner['hipervinculo_boton']; ?>">
	                </div>
	            </div>
	            <br>
	            <br>
	            <div class="input-field col s12">
	            	<b>Fecha publicaci&oacute;n</b>
	                <div class="input-field col s12">
	                   <input type="date" id="fechaPublicacion" name="fechaPublicacion"  value="<?php echo $consultaBanner['fecha_publicacion']; ?>">
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Fecha Espiraci&oacute;n</b>
	                <div class="input-field col s12">
	                   <input type="date" id="fechaExpiracion" name="fechaExpiracion" value="<?php echo $consultaBanner['fecha_expiracion']; ?>">
	                </div>
	            </div>
	            <div class="input-field col s12">
				    <b>Estado banner</b>
				    <select class="browser-default select" id="estadoBanner" name="estadoBanner">
				    		<option selected="">Seleccione una opcion.</option>
				    		<?php if($consultaBanner['estado'] == 'activo'){ ?>

				    		<option value="activo" selected="">Activo</option>
				      		<option value="inactivo">Inactivo</option>
				    		<?php }else{ ?> 

				    		<option value="activo">Activo</option>
				      		<option value="inactivo">Inactivo</option>
				    		<?php } ?>
				    </select>
				 </div>
	              

	        </div>
	        <br><br>
	        <!--------------------DIV ROW BOTON CREAR ------------------------------------------->
                    <div class="row">
                        <div class="col s12">
                            <button name="action" type="submit" class="btn teal waves-effect waves-light right animated infinite rubberBand btn_submit_file_banner_edicion">Crear
                                <i class="mdi-content-add left"></i>
                            </button>
                        </div>
                    </div>
        </form>
 
<script type="text/javascript">
	CKEDITOR.replace("tituloBanner");
	CKEDITOR.replace("descripcionBanner");
	CKEDITOR.replace("descripcionBoton");

	/* BANNER EDICION */

       $(".file-form-banner-edicion").on('submit', function () {
        $('.btn_submit_file_banner_edicion').prop('disabled', true);
        var url = $("#formBannerEdicion").attr("data-action");

        var parametros = {
                    "tituloBanner" : CKEDITOR.instances['tituloBanner'].getData(),
                    "descripcionBanner" : CKEDITOR.instances['descripcionBanner'].getData(),
                    "descripcionBoton" : CKEDITOR.instances['descripcionBoton'].getData(),                    
                    "linkBoton" : $("#linkBoton").val(),
                    "fechaPublicacion" : $("#fechaPublicacion").val(),
                    "fechaExpiracion" : $("#fechaExpiracion").val(),
                    "estadoBanner" : $("#estadoBanner").val()

            };

        var options = {
            url: url,
            data: parametros,
            success: function (response) {
                var respuesta = $.parseJSON(response);
                if (respuesta.accion === true) {
                    Materialize.toast(respuesta.mensajes, 1500, 'rounded col green');
                    window.setTimeout("location.href='" + respuesta.redirect + "'", 1500);
                } else {
                    $('#cont_errors_ajax').html(respuesta.mensajes);
                    $('#cont_errors_ajax').css('display', 'block');
                    $('.btn_submit_file_banner_edicion').prop('disabled', false);
                    $('.modal-content').animate({scrollTop: $('#cont_errors_ajax').position().top}, 'slow');
                }
            }
        };//options

        $(this).ajaxSubmit(options);
        return false;
    });

</script>
