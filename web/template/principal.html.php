<style type="text/css">
  .loader-page {
    position: fixed;
    z-index: 25000;
    background: rgba(0,0,0,0.4);
    left: 0px;
    top: 0px;
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition:all .3s ease;
  }
  .loader-page::before {
    content: "";
    position: absolute;
    border: 2px solid rgb(50, 150, 176);
    width: 60px;
    height: 60px;
    border-radius: 50%;
    box-sizing: border-box;
    border-left: 2px solid white;
    border-top: 2px solid green;
    animation: rotarload 1s linear infinite;
    transform: rotate(0deg);
  }
  @keyframes rotarload {
      0%   {transform: rotate(0deg)}
      100% {transform: rotate(360deg)}
  }
  .loader-page::after {
    content: "";
    position: absolute;
    border: 2px solid rgba(50, 150, 176,.5);
    width: 60px;
    height: 60px;
    border-radius: 50%;
    box-sizing: border-box;
    border-left: 2px solid rgba(50, 150, 176, 0);
    border-top: 2px solid rgba(50, 150, 176, 0);
    animation: rotarload 1s ease-out infinite;
    transform: rotate(0deg);
  }
</style>
    <!-- banner slider-->
 <div class="loader-page"></div>
 <div class="sepracacion"></div>
    <div class="banner-silder">
        <div id="JiSlider" class="jislider">
            <ul>
                <?php foreach(banner() as $slider) { ?>
                <li>

                    <?php $url_file = "../cms/web/media/img/Galeria/" . $slider['imagen']; ?>
                    <div class="">
                    <img src="<?php echo addLib($url_file); ?>" width="100%" class="imagenesCarousel">
                        <div class="bs-slider-overlay">
                            <div class="container">
                                <!-- Slide Text Layer -->
                                <div class="w3l-slide-text">
                                    <p class="aos-init aos-animate" data-aos="fade-down"><?php echo strip_tags($slider['descripcion']); ?></p>
                                    <h3 data-animation="animated zoomInRight"><?php echo strip_tags($slider['titulo']); ?></h3>
                                    <a href="<?php echo $slider['hipervinculo_boton']; ?>" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down"><?php echo strip_tags($slider['descripcion_boton']); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>
            </ul>
        </div>
    </div>
    <!-- //banner slider -->

<!-- services -->
    <div class="services text-center pb-5" id="services" style="background-color:   #E8E8E8; box-shadow: 200px;">
        <div class="container pb-xl-5 pb-lg-3">
            <br><br>
            <h3 class="tittle text-center text-uppercase text-dark font-weight-bold mb-sm-5 mb-4">Nuestros servicios</h3>
            <hr>
            <div class="row box2">
                <div class="col-sm-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <center>
                        <img src="<?php echo addLib('template/images/servicio_uno.png'); ?>" id="nubeNueva">
                    </center>
                    <br>
                    <h4>Cobertura y conexión todo el tiempo.</h4>
                    <br>
                    <p>Tenemos la infraestructura, tecnología y la experiencia para darte una conexión a Internet de calidad, sin caídas ni cortes.</p>
                </div>
                <div class="col-sm-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <center>
                        <img src="<?php echo addLib('template/images/servicio_dos.png'); ?>" id="nubeComputing">
                    </center>
                    <br>
                    <h4>Cobertura y conexión todo el tiempo.</h4>
                    <br>
                    <p>Tenemos la infraestructura, tecnología y la experiencia para darte una conexión a Internet de calidad, sin caídas ni cortes.</p>
                </div>
                
                <div class="col-sm-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <center>
                        <img src="<?php echo addLib('template/images/servicio_tres.png'); ?>" id="router">
                    </center>
                    <br>
                    <h4>Atención al cliente personalizada.</h4>
                    <br>
                    <p>No te preocupes por nada técnico, nosotros nos encargamos de todo, solo debes encender tu router y listo!</p>

                </div>
                <div class="col-sm-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <center>
                        <img src="<?php echo addLib('template/images/servicio_cuatro.png'); ?>" id="wireless">
                    </center>
                    <br>
                    <h4>Internet de alta velocidades.</h4>
                    <br>
<p>Sin importar el lugar en que te encuentres, llegamos con Internet a cualquier finca, parcela o municipio con la misma velocidad de la ciudad.</p>
                </div>
            </div>
            
        </div>
    </div>
    <!-- //services -->
                
    <!-- banner bottom -->
    <div class="row contenedorForm col-12 col-sm-12 col-md-12 col-lg-12">
       <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <center>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="z-index: 99999;">
                    <?php foreach(pag_promocion() as $promocion) { ?>
                        <?php if($promocion['imagen'] == "Si"){  ?>
                                <?php $url_file = "../cms/web/media/img/Promocion/".$promocion['url']; ?>
                                 <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="z-index: 99999;">

                            <img src="<?php echo addLib($url_file); ?>" alt="" width="100%">
                            </div>
                            <div class="imagen col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12">
                    <img src="<?php echo addLib('template/images/mensajeUno.png'); ?>" alt=" " class="mjeDos" id="mjeDos"/>
                    <img src="<?php echo addLib('template/images/mensajeDos.png'); ?>" alt=" "  class="mjeUno" id="mjeUno"/>
                    <img src="<?php echo addLib('template/images/tuerca.png'); ?>" alt=" " class="tuerca" id="tuerca"/>

                    <img src="<?php echo addLib('template/images/llamando.png'); ?>" alt=" " class="asesores" id="asesores" />
                    <img src="<?php echo addLib('template/images/fondoEscritorio.png'); ?>" alt=" " class="fondoEscritorio" id="fondoEscritorio" />
                    <img src="<?php echo addLib('template/images/fondoLlamando.png'); ?>" alt=" " class="fondoLLamando" id="fondoLLamando" />
                </div>
                        <?php }else{ ?>
                            <div class="" style="position: relative; position: relative; margin-top: 30px;">
                                <?php echo $promocion['descripcion_texto']; ?>
                            </div>
                            <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12">
                    <img src="<?php echo addLib('template/images/mensajeUno.png'); ?>" alt=" " class="mjeDos" id="mjeDos"/>
                    <img src="<?php echo addLib('template/images/mensajeDos.png'); ?>" alt=" "  class="mjeUno" id="mjeUno"/>
                    <img src="<?php echo addLib('template/images/tuerca.png'); ?>" alt=" " class="tuerca" id="tuerca"/>

                    <img src="<?php echo addLib('template/images/llamando.png'); ?>" alt=" " class="asesores" id="asesores" />
                    <img src="<?php echo addLib('template/images/fondoEscritorio.png'); ?>" alt=" " class="fondoEscritorio" id="fondoEscritorio" />
                    <img src="<?php echo addLib('template/images/fondoLlamando.png'); ?>" alt=" " class="fondoLLamando" id="fondoLLamando" />
                </div>
                            
                        <?php } } ?>
                </div>



                </center>
                 
        </div>
        <div id="formularioContacto" class="formularioContacto col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="z-index: 100000;">
            <br><br>
                <center>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <?php $url_file = "../cms/web/media/img/Header/logo-enlinea-comunicaciones.jpeg"; ?>
                    <img src="<?php echo addLib($url_file); ?>" alt="" width="100%">
                </div></center>
                <br><br>
            <form class="file-form-banner" id="formBanner" data-action="<?php echo crearUrl("Contacto","contacto","registro", array('noVista' => 'noVista')) ?>" enctype="multipart/form-data"  method="post">


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
    </div>

    <!-- //banner bottom -->

    

   

    <!-- feedback -->
    <section class="news py-5" id="feedback">
        <div class="container py-xl-5 py-lg-3" style="background-color: rgba(0,0,0,0.40); align-content: center; text-align: center;">
            <h3 class="tittle text-center text-uppercase text-white font-weight-bold mb-sm-5 mb-4">PLANES Y TARIFAS</h3>
            <hr>

            <div class="owl-carousel owl-theme" style="border-top:1px solid white;">
                <?php 

                foreach(plan() as $plan) { 

                 $explode = explode(',', $plan['descripcion_plan']);
                 $total = count($explode);
                    ?>
                
                <div class="item planUno" id="planUno" style="margin-top: 40px; background-color: white; border-radius: 12px 12px;">
                    <div class="titulo col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background-color: #F0F0F0;">
                        <p style="font-size:20px; padding-top:10px; padding-bottom:10px; font-weight:bold; color: #1159FF;"><?php echo $plan["titulo_plan"]; ?></p>
                    </div>
                    <div class="precio">
                        <p style="font-size:50px; font-weight:bold; color: #1159FF;"><?php echo $plan['valor_plan']; ?></p>
                         <i style="margin-top: -20px;"><?php echo $plan["descripcion_del_plan_tiempo"]; ?></i>
                    </div>
                    <div class="descripcionPlan" style="padding: 10px 19px; font-size: 12px; color: black; align-content: left; text-align: left;">
                        <table class="table  table-striped">
                            <tbody>
                            <?php for($i=1;$i<$total; $i++){ ?> 

                                <tr>
                                    <td>
                                        <?php echo $explode[$i]; ?>
                                    </td>
                                </tr>

                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php } ?>




            </div>
        </div>
        <!-- <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-uppercase text-white font-weight-bold mb-sm-5 mb-4">Noticias recientes</h3>
            <div class="owl-carousel owl-theme">

                <?php /* foreach(noticias() as $noticia) { ?>
                <div class="item">
                    <div class="">
                                <?php $url_file = "../cms/web/media/img/Noticias/" . $noticia['image_notice']; ?>
                            <img src="<?php echo addLib($url_file); ?>" width="100%">
                            </div>
                    <div class="feedback-info bg-white py-5 px-4">

                        <h4 class="mb-2"><?php echo strip_tags(substr($noticia['title_notice'], 0, 110))."(...)"; ?>
                        </h4>
                        <p><?php echo strip_tags(substr($noticia['description_notice'], 0, 102))."(...)"; ?></p>
                        <div class="feedback-grids mt-4">
                            
                            <div class="feedback-img-info">
                                <a href="<?php echo crearUrl("Noticias","noticias","verNota", array("id" => $noticia['id'])); ?>">
                                    <div class="btnNoticia col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                        <button class="btn btn-success btn-sm">Ver mas</button>
                                    </div>
                                </a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            <?php } */ ?>
                




            </div>
        </div>-->
    </section>

    <!-- middle section two -->
    <div class="middle-agile-2 py-5">
        <div class="py-xl-5 py-lg-3">

                     <h3 class="tittle text-center text-uppercase text-dark font-weight-bold mb-sm-5 mb-4">Test de velocidad</h3>
            <div class="d-flex t-in">

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-info-sec p-0">
                    <iframe src="http://openspeedtest.com/Get-widget.php" width="100%" scrolling="no" height="490px" frameborder="0" style="margin-top: 0%;">
                    </iframe>

                </div>

            </div>
        </div>
    </div>
    <!-- //middle section two -->
    <!-- //feedback -->

    <!-- subscribe --
    <div class="subscribe-info-w3l text-center py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center text-uppercase text-dark font-weight-bold mb-sm-4 mb-3">
                Subscribe & Save</h3>
            <p class="mb-md-5 mb-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                laudantium, totam rem aperiam Sed
                ut perspiciatis unde omnis iste natus error sit.</p>
            <form action="#" method="post">
                <input type="email" name="email" placeholder="Enter your Email..." required="">
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <!-- //subscribe -->

    <!-- flicker --
    <div class="flicker">
        <ul id="flexiselDemo1">
            <li>
                <div class="flicker_grid-agile">
                    <img src="<?php /* echo addLib('template/images/g1.jpg'); ?>" alt=" " class="img-fluid" />
                </div>
            </li>
            <li>
                <div class="flicker_grid-agile">
                    <img src="<?php echo addLib('template/images/g2.jpg'); ?>" alt=" " class="img-fluid" />
                </div>
            </li>
            <li>
                <div class="flicker_grid-agile">
                    <img src="<?php echo addLib('template/images/g3.jpg'); ?>" alt=" " class="img-fluid" />
                </div>
            </li>
            <li>
                <div class="flicker_grid-agile">
                    <img src="<?php echo addLib('template/images/g8.jpg'); ?>" alt=" " class="img-fluid" />
                </div>
            </li>
            <li>
                <div class="flicker_grid-agile">
                    <img src="<?php echo addLib('template/images/g5.jpg'); ?>" alt=" " class="img-fluid" />
                </div>
            </li>
            <li>
                <div class="flicker_grid-agile">
                    <img src="<?php echo addLib('template/images/g6.jpg'); ?>" alt=" " class="img-fluid" />
                </div>
            </li>
            <li>
                <div class="flicker_grid-agile">
                    <img src="<?php echo addLib('template/images/g7.jpg'); ?>" alt=" " class="img-fluid" />
                </div>
            </li>
            <li>
                <div class="flicker_grid-agile">
                    <img src="<?php echo addLib('template/images/g4.jpg'); */ ?>" alt=" " class="img-fluid" />
                </div>
            </li>
        </ul>
    </div>
    <!-- //flicker -->
     <!-- middle section -->
    <div class="middle-w3l text-center">
        <div class="container" style="padding-top: 3%;">
            <h3 class="tittle text-center text-uppercase text-white font-weight-bold mb-sm-4 mb-3 mt-4">
                 DENUNCIA A LAS LINEAS DE ATENCIÓN EN PREVENCIÓN SOBRE LA PORNOGRAFIA INFANTIL!</h3>
           <div class="row">
               <div class="teprotejo col-md-3">
                   <a href="http://www.teprotejo.org/" target="_blank">
                        <img src="<?php echo addLib('template/images/autoridad_te_protejo.png'); ?>" style="width: 250px;">
                    </a>
               </div>
               <div class="fiscalia col-md-3">
                   <a href="https://www.fiscalia.gov.co/" target="_blank">
                        <img src="<?php echo addLib('template/images/autoridad_fiscalia.png'); ?>" style="width: 180px;">
                    </a>
               </div>
               <div class="policia col-md-3">
                    <a href="https://www.policia.gov.co/" target="_blank">
                       <img src="<?php echo addLib('template/images/autoridad_policia.png'); ?>" style="width: 180px;">
                    </a>
               </div>
               <div class="icbf col-md-3">
                   <a href="https://www.icbf.gov.co/" target="_blank">
                            <img src="<?php echo addLib('template/images/autoridad_icbf.png'); ?>" style="width: 180px;">
                    </a>
               </div>
             
           </div>
        </div>
    </div>
    <!-- //middle section -->
