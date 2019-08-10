
<!-- DESARROLLO Y PROGRAMACION: World Web Design Colombia
NOMBRE PROGRAMADOR: Diego Fernando Velez
CONTACTO: diegofernando9705@gmail.com-->

<!DOCTYPE html>

<html lang="zxx">

<head>
  <title><?php echo NOMBRE_APLICATIVO." | ".NOMBRE_COMPLETO_APLICATIVO ?></title>
  
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8" />
  <meta name="keywords" content="Outdoor Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);ª
    }
  </script>
  <!--// Meta tag Keywords -->

  <!-- Custom-Files -->
  <link rel="stylesheet" href="<?php echo addLib('template/css/bootstrap.css'); ?>">
  <!-- Bootstrap-Core-CSS -->
  <link href="<?php echo addLib('template/css/JiSlider.css'); ?>" rel="stylesheet">
  <link href="<?php echo addLib('template/css/stylePersonalizado.css'); ?>" rel="stylesheet">

  <!-- //banner-slider -->
  <link rel="stylesheet" href="<?php echo addLib('template/css/style.css'); ?>" type="text/css" media="all" />
  <!-- Style-CSS -->
  <link rel="stylesheet" href="<?php echo addLib('template/css/fontawesome-all.css'); ?>">
  <!-- Font-Awesome-Icons-CSS -->
  <!-- //Custom-Files -->
<!-- CKEDITOR -->
  <script type="text/javascript" src="<?php echo addLib('js/ckeditor/ckeditor.js') ?>"></script>
  <script type="text/javascript" src="<?php echo addLib('js/ckfinder/ckfinder.js') ?>"></script>

  <!-- //Web-Fonts -->
  
</head>

<body>
  <div class="alert-error" style="position: fixed; z-index: 1000; background-color: red; color: white; border-radius: 20px 20px 20px 20px; top:120px; padding: 10px 10px; right: 20px; display: none;">
    <p style="color: white;">Uno o mas campos en el formulario se encuentran vacios.</p>
  </div>
   <div class="alert-error-insercion" style="position: fixed; z-index: 1000; background-color: red; color: white; border-radius: 20px 20px 20px 20px; top:120px; padding: 10px 10px; right: 20px; display: none;">
    <p style="color: white;">No se registro el formulario, por favor intenta de nuevo m&aacute;s tarde.</p>
  </div>
  <!-- header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="<?php echo addLib(''); ?>">

        <img src="<?php foreach (headerLogo() as $logo){ echo addLibHeader("web/media/img/Header/".$logo['imagen']); } ?>" class="logoEnlinea" alt="" >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup"
          aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar-toggle " id="navbarNavAltMarkup">
        <ul class="navbar-nav mx-xl-auto">
          <li>
            <a class="nav-link text-uppercase active" href="<?php echo addLib(''); ?>">Inicio</a>
          </li>
          <li>
            <a class="nav-link text-uppercase" href="<?php echo crearUrl('nosotros','nosotros','nosotros'); ?>">Nosotros</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link text-uppercase dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">Nuestros servicios
              <i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-menu second mt-2" style="display: none;">
              <a class="dropdown-item scroll" href="#services">Internet Dedicado y/o Banda Ancha según sus necesidades</a>
              <a class="dropdown-item" href="faqs.html">Conectividad entre sedes</a>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item scroll" href="#feedback">Configuración de redes LAN</a>
              <a class="dropdown-item" href="gallery.html">Solución inalámbrica para uso exterior (outdoor) y/o Interior (indoor)</a>
              <a class="dropdown-item" href="single.html">Venta y alquiler de equipos Networking</a>
              <a class="dropdown-item" href="single.html">Soporte técnico para redes LAN y WAN</a>

            </div>
          </li>
          <li>
            <a class="nav-link text-uppercase" href="<?php echo crearUrl('noticias','noticias','noticias'); ?>">Noticias</a>
          </li>
          <li>
            <a class="nav-link text-uppercase" href="<?php echo crearUrl('contacto','contacto','contacto'); ?>">Contactanos</a>
          </li>
        </ul>
        <!--
        <div class="top-info text-lg-right text-center mt-lg-0 mt-3">
          <ul class="list-unstyled">
            <li class="text-white mr-xl-4 mr-2 ml-xl-0 ml-lg-5">+ 12345678099</li>
            <li class="number-phone">
              <a class="request text-uppercase font-weight-bold text-white" href="#">Have any Quastions?</a>
            </li>
          </ul>
        </div>-->
      </div>
    </nav>
  </header>
  <!-- //header -->
 
