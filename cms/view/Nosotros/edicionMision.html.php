<div class="col s12 m12 l6">
    <div class="card-panel">
        <h5>EDICI&Oacute;N MISI&Oacute;N</h5>
        <ol class="breadcrumbs"> 
            <li><a href="<?php echo addLib('') ?>">Panel de control</a></li> 
            <li><a href="#">Nosotros</a></li> 
            <li><a href="#">Nosotros</a></li> 
            <li class="active">Visi&oacute;n</li> 
        </ol>

        <div id="card-alert" class="card teal">
            <div class="card-content white-text">
                <p><i class="mdi-action-info-outline"></i> A cotinuaci&oacute;n podr&aacute; editar el contenido de Nosotros del sitio web.</p>
            </div>
            <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>	
        </div>
		<form class="form" id="formMision" data-action="<?php echo crearUrl("nosotros","nosotros","edicionMision", array('noVista' => 'noVista')) ?>" method="post">
	        <div class="col s12 m6 l3" id="flight-card">
	            <div class="input-field col s12">
	            	<b>Titulo misi&oacute;n:</b>
	                <div class="input-field col s12">
	                    <textarea id="tituloMision" name="tituloMision"><?php echo $query['title_page']; ?></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Descripci&oacute;n misi&oacute;n:</b>
	                <div class="input-field col s12">
	                    <textarea id="descripcionMision" name="descripcionMision"><?php echo $query['description_page']; ?></textarea>
	                </div>
	            </div>
	        </div>
	        <br><br>
	        <center>
	       	 	<input class="waves-effect waves-light btn" type="button" id="actualizarMision" name="" value="Actualizar">	        	
	        </center>
        </form>
        	        
    </div>
</div>
<script type="text/javascript">
	CKEDITOR.replace("tituloMision");
	CKEDITOR.replace("descripcionMision");
</script>

