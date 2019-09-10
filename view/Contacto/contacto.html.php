	<div class="headerContacto col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<div class="fondoOscuro col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
			<h1>CONTACTANOS</h1>
		</div>
	</div>

        <!--Fin contenedor mensajes de error-->
	<div class="cuerpoNoticias col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
		<div class="container">
			<div class="row">
				<div class="formularioContacto col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<h5 class="what-title text-dark my-3">Formulario de contacto</h5>
					<hr>
					<form class="file-form-banner" id="formBanner" data-action="<?php echo crearUrl("Contacto","contacto","envioEmail", array('noVista' => 'noVista')) ?>" enctype="multipart/form-data"  method="post">


                        <div class="form-group">
                            <label>Nombre completo *</label>
                            <input class="form-control" type="text" name="name_complete" id="name_complete">
                        </div>

                        <div class="form-group">
                            <label>Tel&eacute;fono *</label>
                            <input class="form-control" type="text" name="phone_complete" id="phone_complete">
                        </div>

                        <div class="form-group">
                            <label>Direcci&oacute;n *</label>
                            <input class="form-control" type="text" name="address_complete" id="address_complete">
                        </div>

                        <div class="form-group">
                            <label>Email *</label>
                            <input class="form-control" type="email" name="email_complete" id="email_complete">
                        </div>

                        <div class="form-group">
                            <label>Mensaje *</label>
                            <textarea class="form-control" name="textarea_complete" id="textarea_complete"></textarea>
                        </div>

                                    <!--------------------DIV ROW BOTON CREAR ------------------------------------------->
                    <div class="row">
                        <div class="col s12">
                            <button name="action" type="button" class="btn teal waves-effect waves-light right animated infinite rubberBand btn_submit_file_banner">Crear
                                <i class="mdi-content-add left"></i>
                            </button>
                        </div>
                    </div>

                    </form>
				</div>
				<div class="mapaContacto col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<h5 class="what-title text-dark my-3">Nuestra ubicaci&oacute;n</h5>
					<hr>	
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.623684997869!2d-76.49884728521563!3d3.44136507534203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a700efb0b247%3A0x8e9be65ffa2c275c!2sCra.+23+%2352-23%2C+Cali%2C+Valle+del+Cauca!5e0!3m2!1ses-419!2sco!4v1563649316413!5m2!1ses-419!2sco" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>