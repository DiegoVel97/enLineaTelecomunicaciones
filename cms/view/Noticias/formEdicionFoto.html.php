 
    <div class="container">
        <h5 class="header2">EDICI&Oacute;N FOTOGRAFIA</h5>
    </div>
    <hr>
    <br>
    <form class="form" id="formEdicionFoto" action="<?php echo crearUrl("Noticias","noticias","updateFoto", array('noVista' => 'noVista', 'id' => $consultaNoticia['id'])) ?>" enctype="multipart/form-data" method="post">
	        <div class="col s12 m6 l3" id="flight-card">
	        	<div class="row">
		        	<div class="input-field col s4 m4 l4 xl4">
		            	<b><span>Archivo de imagen:</span></b>
		            	<img src="<?php echo addLib("media/img/Noticias/".$consultaNoticia['image_notice']); ?>" width="100%">
		            </div>
		            <div class="input-field col s8 m8 l8 xl8">
		                 <div class="file-field input-field">
					      <div class="btn">
					      	<span>Archivo de imagen</span>
					        <input type="file" name="file">
					      </div>
					      <div class="file-path-wrapper">
					        <input class="file-path validate" type="text">
					      </div>
					    </div>
		            </div>
	        	</div>
	        </div>

	        <br><br>
	        <center>
	       	 	<input class="waves-effect waves-light btn" type="submit" name="" value="Actualizar foto">	        	
	        </center>
        </form>

<script type="text/javascript">
	CKEDITOR.replace("tituloNoticia");
	CKEDITOR.replace("descripcionNoticia");
</script>

