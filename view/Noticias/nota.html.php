	<div class="headerNoticias col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<div class="fondoOscuro col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<h1>NOTICIA</h1>
		</div>
	</div>
	<div class="cuerpoNosotros col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<div class="container">
			<div class="contenedorNoticia col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
				<div class="tituloNoticia col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<h4><?php echo $noticia['title_notice']; ?></h4>
				</div>
				<hr>
				<div class="imagenNoticia col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<?php $url_file = "../cms/web/media/img/Noticias/" . $noticia['image_notice']; ?>
					<center>
						<img src="<?php echo addLib($url_file); ?>" width="100%">
					</center>
				</div>
				<p align="right" style="margin-top: 5px; font-size: 12px;">
					<i>
						<?php echo ("(*) Foto tomada de internet. ".$noticia['publicate_date_notice']); ?>
					</i>
				</p>
				<br>
				<div class="cuerpoNoticia col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<p align="justify"><?php echo $noticia['description_notice']; ?></p>
				</div>
			</div>
			<div class="publicarRedesSociales col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<br>
				<hr>
				<br>
				<b>Compartir: </b><br><br>
				
				<a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo URL_ACTUAL; ?>', 'ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
                        <img src="<?php echo addLib("../cms/web/img/redes_sociales/facebook.png"); ?>" style="width: 40px;">
                    </a>

                <a href="javascript: void(0);" onclick="window.open('http://twitter.com/home?status=leyendo%20<?php echo URL_ACTUAL; ?>', 'ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" class="btwitter">
                       <img class="twitterCompartir" src="<?php echo addLib("../cms/web/img/redes_sociales/Twitter.png"); ?>" width="40px">
                </a>

                <a href="javascript: void(0);" onclick="window.open('https://api.whatsapp.com/send?text=<?php echo URL_ACTUAL; ?>', 'ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" class="btwitter">
                        <img class="whatsappCompartir" src="<?php echo addLib("../cms/web/img/redes_sociales/whatsapp.png"); ?>" width="40px">
                </a>
			</div>
		</div>
	</div>