 
    <div class="container">
        <h5 class="header2">EDICI&Oacute;N NOTICIA</h5>
    </div>
    <hr>
    <br>
    <form class="form" id="formEdicionNoticia" data-action="<?php echo crearUrl("Noticias","noticias","edicionNoticia", array('noVista' => 'noVista', 'id' => $consultaNoticia['id'])) ?>" enctype="multipart/form-data" method="post">
	        <div class="col s12 m6 l3" id="flight-card">
	            <div class="input-field col s12">
	            	<b>Titulo noticia:</b>
	                <div class="input-field col s12">
	                    <textarea id="tituloNoticia" name="tituloNoticia"><?php echo $consultaNoticia['title_notice']; ?></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Descripci&oacute;n noticia:</b>
	                <div class="input-field col s12">
	                    <textarea id="descripcionNoticia" name="descripcionNoticia"><?php echo $consultaNoticia['description_notice']; ?></textarea>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Fecha publicaci&oacute;n</b>
	                <div class="input-field col s12">
	                   <input type="date" id="fechaPublicacion" name="fechaPublicacion" class="datepicker" value="<?php echo $consultaNoticia['publicate_date_notice']; ?>">
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Fecha Espiraci&oacute;n</b>
	                <div class="input-field col s12">
	                   <input type="date" id="fechaExpiracion" name="fechaExpiracion" class="datepicker" value="<?php echo $consultaNoticia['expirate_date_notice']; ?>">
	                </div>
	            </div>
	            <div class="input-field col s12">
				    <b>Estado noticia</b>
				    <select class="browser-default select" id="estadoNoticia" name="estadoNoticia">
				    	<?php if($consultaNoticia['estado_notice'] == 'activo'){ ?>
				    		<option value="activo" selected="">Activo</option>
				      		<option value="inactivo">Inactivo</option>
				    	<?php }else{ ?>
				    		<option value="activo" >Activo</option>
				      		<option value="inactivo" selected="">Inactivo</option>
				    	<?php } ?>
				    </select>
				 </div>
	              

	        </div>
	        <br><br>
	        <center>
	       	 	<input class="waves-effect waves-light btn" type="button" id="editarNoticiaForm" name="" value="Actualizar">	        	
	        </center>
        </form>

<script type="text/javascript">
	CKEDITOR.replace("tituloNoticia");
	CKEDITOR.replace("descripcionNoticia");
</script>

