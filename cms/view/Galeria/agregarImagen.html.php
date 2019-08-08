<div class="card-panel">
    <div class="container">
        <h5 class="header2">AGREGAR IMAGEN AL BANNER</h5>

        <!--Inicio rastro de miga-->
        <ol class="breadcrumbs">
            <li><a href="<?php echo addLib('index.php') ?>">Panel de control</a></li>
            <li><a href="<?php echo crearUrl("Banners","Banners","crear") ?>">Agregar imagen al banner</a></li>
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

        <form class="file-form-banner" id="formBanner" data-action="<?php echo crearUrl("Banner","galeria","postAgregarImagen", array('noVista' => 'noVista')) ?>" enctype="multipart/form-data"  method="post">
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
	            	<b>Titulo Banner:</b>
	                <div class="input-field col s12">
	                    <textarea id="tituloBanner" name="tituloBanner" required=""></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Descripci&oacute;n Banner:</b>
	                <div class="input-field col s12">
	                    <textarea id="descripcionBanner" name="descripcionBanner"></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Descripci&oacute;n Boton:</b>
	                <div class="input-field col s12">
	                    <textarea id="descripcionBoton" name="descripcionBoton"></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Hipervinculo/Link del Boton</b>
	                <div class="input-field col s12">
	                   <input type="text" name="linkBoton"  value="">
	                </div>
	            </div>
	            <br>
	            <br>
	            <div class="input-field col s12">
	            	<b>Fecha publicaci&oacute;n</b>
	                <div class="input-field col s12">
	                   <input type="date" id="fechaPublicacion" name="fechaPublicacion"  value="">
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Fecha Espiraci&oacute;n</b>
	                <div class="input-field col s12">
	                   <input type="date" id="fechaExpiracion" name="fechaExpiracion" value="">
	                </div>
	            </div>
	            <div class="input-field col s12">
				    <b>Estado banner</b>
				    <select class="browser-default select" id="estadoBanner" name="estadoBanner">
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
                            <button name="action" type="submit" class="btn teal waves-effect waves-light right animated infinite rubberBand btn_submit_file_banner">Crear
                                <i class="mdi-content-add left"></i>
                            </button>
                        </div>
                    </div>
        </form>
    </div>
</div>

<script type="text/javascript">
	CKEDITOR.replace("tituloBanner");
	CKEDITOR.replace("descripcionBanner");
	CKEDITOR.replace("descripcionBoton");

</script>
