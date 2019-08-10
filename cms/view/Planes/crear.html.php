<div class="card-panel">
    <div class="container">
        <h5 class="header2">AGREGAR PLANES Y TARIFAS</h5>

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
        
        <form class="file-form-planes" id="formPlanes" data-action="<?php echo crearUrl("Planes","planes","postAgregarPlan", array('noVista' => 'noVista')) ?>" method="post">
	        <div class="col s12 m6 l3" id="flight-card">
	            <div class="input-field col s12">
	            	<b>Titulo plan:</b>
	                <div class="input-field col s12">
	                    <textarea id="tituloPlan" name="tituloPlan" required=""></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Valor del plan:</b>
	                <div class="input-field col s12">
	                    <textarea id="valorPlan" name="valorPlan"></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Descripci&oacute;n del plan (mensual, anual o d&iacute;a)</b>
	                <div class="input-field col s12">
	                    <textarea id="descripcionPlanMeses" name="descripcionPlanMeses"></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Descripci&oacute;n del plan: (separa por una coma ',' cada item de la descripci&oacute;n)</b>
	                <div class="input-field col s12">
	                    <textarea id="descripcionPlan" name="descripcionPlan"></textarea>
	                </div>
	            </div>
	              

	        </div>
	        <br><br>
	       <div class="row">
                        <div class="col s12">
                            <button name="action" type="submit" class="btn teal waves-effect waves-light right animated infinite rubberBand btn_submit_file_planes">Crear
                                <i class="mdi-content-add left"></i>
                            </button>
                        </div>
                    </div>
        </form>
    </div>
</div>

<script type="text/javascript">

/*	CKEDITOR.replace("tituloPlan");
	CKEDITOR.replace("valorPlan");

	CKEDITOR.replace("descripcionPlan");
	CKEDITOR.replace("descripcionPlanMeses");
*/
	
</script>
