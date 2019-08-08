<div class="card-panel">
    <div class="container">
        <h5 class="header2">CREAR NOTICIA</h5>

        <!--Inicio rastro de miga-->
        <ol class="breadcrumbs">
            <li><a href="<?php echo addLib('index.php') ?>">Panel de control</a></li>
            <li><a href="<?php echo crearUrl("noticias","noticias","crear") ?>">Crear nueva Noticia</a></li>
            <li class="active">Listar Noticia</li>
        </ol>

        <!--Inicio mensaje de campos obligatorios-->
        <div id="card-alert" class="card teal">
            <div class="card-content white-text">
                <p><i class="mdi-action-info-outline"></i> IMPORTANTE : A continuaci&oacute;n podr&aacute; crear una noticia. <code>Los campos marcados con asteriscos (*) son obligatorios </code>.</p>
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
        
        <form class="form" id="formCrearNoticia" data-action="<?php echo crearUrl("Noticias","noticias","crearNoticia", array('noVista' => 'noVista')) ?>" method="post">
	        <div class="col s12 m6 l3" id="flight-card">
	            <div class="input-field col s12">
	            	<b>Titulo noticia:</b>
	                <div class="input-field col s12">
	                    <textarea id="tituloNoticia" name="tituloNoticia" required=""></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Descripci&oacute;n noticia:</b>
	                <div class="input-field col s12">
	                    <textarea id="descripcionNoticia" name="descripcionNoticia"></textarea>
	                </div>
	            </div>
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
				    <b>Estado noticia</b>
				    <select class="browser-default select" id="estadoNoticia" name="estadoNoticia">
				    		<option value="0" selected="">Seleccione una opcion.</option>
				    		<option value="activo">Activo</option>
				      		<option value="inactivo">Inactivo</option>
				    </select>
				 </div>
	              

	        </div>
	        <br><br>
	        <center>
	       	 	<input class="waves-light teal btn" type="button" id="crearNoticia" value="Crear" >
	        </center>
        </form>
    </div>
</div>

<script type="text/javascript">
	CKEDITOR.replace("tituloNoticia");
	CKEDITOR.replace("descripcionNoticia");
</script>
