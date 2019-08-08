 
    <div class="container">
        <h5 class="header2">DETALLE NOTICIA</h5>
    </div>
    <hr>
    <br>
   
	        <div class="col s12 m6 l3" id="flight-card">
	        	<div class="input-field col s12">
	            	<b>Imagen:</b>
	                <div class="input-field col s12">
	                    <img src="<?php echo addLib("media/img/Noticias/".$consultaNoticia['image_notice']); ?>" width="100%">
	                </div>
	            </div>

	            <div class="input-field col s12">
	            	<b>Titulo noticia:</b>
	                <div class="input-field col s12">
	                    <?php echo $consultaNoticia['title_notice']; ?>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Descripci&oacute;n noticia:</b>
	                <div class="input-field col s12">
	                	<?php echo $consultaNoticia['description_notice']; ?>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Fecha publicaci&oacute;n</b>
	                	<?php echo $consultaNoticia['publicate_date_notice']; ?>
	                </div>
	            </div>
	            <br>
	            <div class="input-field col s12">
	            	<b>Fecha Espiraci&oacute;n</b>
	                   <?php echo $consultaNoticia['expirate_date_notice']; ?>
	                
	            </div>
	            <div class="input-field col s12">
				    <b>Estado noticia</b>
				    	<?php echo $consultaNoticia['estado_notice']; ?>
				 </div>
	              

	        </div>
<script type="text/javascript">
	CKEDITOR.replace("tituloNoticia");
	CKEDITOR.replace("descripcionNoticia");
</script>

