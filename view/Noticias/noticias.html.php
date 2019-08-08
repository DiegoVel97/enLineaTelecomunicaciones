	<div class="headerNoticias col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<div class="fondoOscuro col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<h1>NOTICIAS</h1>
		</div>
	</div>
	<div class="cuerpoNoticias col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<div class="container">
			<div class="row">
				<?php foreach($noticias as $noticia) { ?>
					<div class="divNoticia col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
						<div class="imagenNoticia col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<?php $url_file = "../cms/web/media/img/Noticias/" . $noticia['image_notice']; ?>
							<img src="<?php echo addLib($url_file); ?>" width="100%">
						</div>
						<div class="textoNoticia col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<h4><?php echo strip_tags($noticia['title_notice']); ?></h4>
							<hr>
							<p align="justify"><?php echo strip_tags(substr($noticia['description_notice'], 0, 102))."(...)"; ?></p>
						</div>
						<div class="footerNoticia col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<div class="row">
								<div class="fechaNoticia col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
									<p><?php echo ($noticia['publicate_date_notice']); ?></p>
								</div>
								<a href="<?php echo crearUrl("Noticias","noticias","verNota", array("id" => $noticia['id'])); ?>">
									<div class="btnNoticia col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
										<button class="btn btn-success btn-sm">Ver mas</button>
									</div>
								</a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>