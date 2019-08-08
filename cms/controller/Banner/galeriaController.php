<?php

include_once('../model/Galeria/galeriaModel.php');

class GaleriaController{
	function crear(){
		include_once("../view/Galeria/agregarImagen.html.php");
	}

	function postAgregarImagen(){
		
		$objBanner = new bannerModel();

		$errores = array();	

		/*VALIDACION FORM CREAR */

		if (!isset($_FILES['file']) or $_FILES['file'] == "") {
            $errores[] = "El <code>Archivo de imagen</code> no puede quedar vacio.";
        }else{
        	
        }

        if (!isset($_POST['tituloBanner']) or $_POST['tituloBanner'] == "") {
            $errores[] = "El <code><b>titulo del Banner</b></code> no debe quedar vacio.";
        }

        if (!isset($_POST['descripcionBanner']) or $_POST['descripcionBanner'] == "") {
            $errores[] = "La <code><b>descripci&oacute;n del Banner</b></code> no debe quedar vacio.";
        }

        if (!isset($_POST['descripcionBoton']) or $_POST['descripcionBoton'] == "") {
            $errores[] = "La <code><b>descripci&oacute;n del Boton</b></code> no debe quedar vacio.";
        }

        if (!isset($_POST['linkBoton']) or $_POST['linkBoton'] == "") {
            $errores[] = "El <code><b>Hipervinculo del Boton</b></code> del Banner no debe quedar vacio.";
        }

        if (!isset($_POST['fechaPublicacion']) or $_POST['fechaPublicacion'] == "") {
            $errores[] = "La <code><b>Fecha de publicaci&oacute;n</b></code> del Banner no debe quedar vacio.";
        }

        if (!isset($_POST['fechaExpiracion']) or $_POST['fechaExpiracion'] == "") {
            $errores[] = "La <code><b>Fecha de Expiraci&oacute;n</b></code> del Banner no debe quedar vacio.";
        }

        if ($_POST['fechaPublicacion'] > $_POST['fechaExpiracion']) {
            $errores[] = "La <code><b>Fecha de Publicacion&oacute;n NO debe ser MAYOR</b></code> a la fecha de expiraci&oacute;n.";
        }

		if (!isset($_POST['estadoBanner']) or $_POST['estadoBanner'] == "") {
            $errores[] = "El <code><b>estado del Banner</b></code> del Banner no debe quedar vacio.";
        }        

        //EXTENSION DE LA IMAGEN

        if (count($errores) > 0) {
            setErrores($errores);
        }else{

        	$titulo = $_POST['tituloBanner'];
        	$descripcion = $_POST['descripcionBanner'];
        	$descripcionBoton = $_POST['descripcionBoton'];
        	$hipervinculo = $_POST['linkBoton'];
        	$fechaPublicacion = $_POST['fechaPublicacion'];
        	$fechaExpiracion = $_POST['fechaExpiracion'];
        	$estadoBanner = $_POST['estadoBanner'];


        	// FOTO BANNER
            $nombreFoto = $_FILES['file']['name'];
            $ruta = $_FILES['file']['tmp_name'];
            //Capturo la ruta donde guardare la Imagen
            $rutaydoc = getDocumentRoot() . "/web/media/img/Galeria/" . $nombreFoto;
            if ($ruta <> "") {
                if (move_uploaded_file($ruta, $rutaydoc)) {
             		$insercion = "INSERT INTO pag_banner (titulo,descripcion,descripcion_boton,fecha_publicacion,fecha_expiracion,hipervinculo_boton,imagen,estado) VALUES ('$titulo','$descripcion','$descripcionBoton','$fechaPublicacion','$fechaExpiracion','$hipervinculo','$nombreFoto','$estadoBanner')";
             		$sql = $objBanner->insertar($insercion);
                }
            }
		}


        $objBanner->cerrar();

        echo getRespuestaAccion('crear');
	}


	function listar(){
		$objBanner = new  bannerModel();

		$query = "SELECT * FROM pag_banner";
		$consultaBanner = $objBanner->select($query);

		  //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('Banner', 'galeria', 'listar');

        $paginado = new Paginado($consultaBanner, $pagina, $url);
        
        $consultaBanner = $paginado->getDatos();

		$objBanner->cerrar();

		include_once('../view/Galeria/consulta.html.php');
	}


	function buscarAjax(){
		$objBanner = new bannerModel();

        $buscarImagen = $_POST['buscarImagen'];

        $sql = "SELECT * FROM pag_banner WHERE titulo LIKE '%" . $buscarImagen . "%' or descripcion LIKE '%" . $buscarImagen . "%' ORDER BY id ASC ";
        $consultaBanner = $objBanner->select($sql);


        //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('Banner', 'galeria', 'listar');

        $paginado = new Paginado($consultaBanner, $pagina, $url);
        
        $consultaBanner = $paginado->getDatos();


        $objBanner->cerrar();

        include_once("../view/Galeria/listar.html.php");
	}


	function editar($parametros = false){
		$objBanner = new bannerModel();

        $id = $parametros[1];
        $sql = "SELECT * FROM pag_banner WHERE id = '$id'";
        $consultaBanner = $objBanner->find($sql);

        $objBanner->cerrar();
        include_once("../view/Galeria/editar.html.php");

	}

	function postEdicion($parametros = false){
		$objBanner = new bannerModel();

		$errores = array();	

		/*VALIDACION FORM CREAR */

		

        if (!isset($_POST['tituloBanner']) or $_POST['tituloBanner'] == "") {
            $errores[] = "El <code><b>titulo del Banner</b></code> no debe quedar vacio.";
        }

        if (!isset($_POST['descripcionBanner']) or $_POST['descripcionBanner'] == "") {
            $errores[] = "La <code><b>descripci&oacute;n del Banner</b></code> no debe quedar vacio.";
        }

        if (!isset($_POST['descripcionBoton']) or $_POST['descripcionBoton'] == "") {
            $errores[] = "La <code><b>descripci&oacute;n del Boton</b></code> no debe quedar vacio.";
        }

        if (!isset($_POST['linkBoton']) or $_POST['linkBoton'] == "") {
            $errores[] = "El <code><b>Hipervinculo del Boton</b></code> del Banner no debe quedar vacio.";
        }

        if (!isset($_POST['fechaPublicacion']) or $_POST['fechaPublicacion'] == "") {
            $errores[] = "La <code><b>Fecha de publicaci&oacute;n</b></code> del Banner no debe quedar vacio.";
        }

        if (!isset($_POST['fechaExpiracion']) or $_POST['fechaExpiracion'] == "") {
            $errores[] = "La <code><b>Fecha de Expiraci&oacute;n</b></code> del Banner no debe quedar vacio.";
        }

        if ($_POST['fechaPublicacion'] > $_POST['fechaExpiracion']) {
            $errores[] = "La <code><b>Fecha de Publicacion&oacute;n NO debe ser MAYOR</b></code> a la fecha de expiraci&oacute;n.";
        }

		if (!isset($_POST['estadoBanner']) or $_POST['estadoBanner'] == "") {
            $errores[] = "El <code><b>estado del Banner</b></code> del Banner no debe quedar vacio.";
        }        

        //EXTENSION DE LA IMAGEN

        if (count($errores) > 0) {
            setErrores($errores);
        }else{
        	$id = $parametros[1];
        	$titulo = $_POST['tituloBanner'];
        	$descripcion = $_POST['descripcionBanner'];
        	$descripcionBoton = $_POST['descripcionBoton'];
        	$hipervinculo = $_POST['linkBoton'];
        	$fechaPublicacion = $_POST['fechaPublicacion'];
        	$fechaExpiracion = $_POST['fechaExpiracion'];
        	$estadoBanner = $_POST['estadoBanner'];



        	if (!isset($_FILES['file']) or $_FILES['file'] == "") {
            	$update = "UPDATE pag_banner SET 
            			   titulo = '$titulo',
            			   descripcion = '$descripcion',
            			   descripcion_boton = '$descripcionBoton',
            			   fecha_publicacion = '$fechaPublicacion',
            			   fecha_expiracion = '$fechaExpiracion',
            			   hipervinculo_boton = '$hipervinculo',
            			   estado = '$estadoBanner' WHERE id = '$id'";
            	$sql = $objBanner->update($update);
	        }else{
	        	$extensionImagen = explode(".", $_FILES['file']['name']);

		        if($extensionImagen[1] == 'jpg' OR $extensionImagen[1] == 'jpeg' OR $extensionImagen[1] == 'png'){
		            	// FOTO BANNER
			            $nombreFoto = $_FILES['file']['name'];
			            $ruta = $_FILES['file']['tmp_name'];
			            //Capturo la ruta donde guardare la Imagen
			            $rutaydoc = getDocumentRoot() . "/web/media/img/Galeria/" . $nombreFoto;
			            if ($ruta <> "") {
			                if (move_uploaded_file($ruta, $rutaydoc)) {
			             		$updateFoto =  "UPDATE pag_banner SET 
					            			   titulo = '$titulo',
					            			   descripcion = '$descripcion',
					            			   descripcion_boton = '$descripcionBoton',
					            			   fecha_publicacion = '$fechaPublicacion',
					            			   fecha_expiracion = '$fechaExpiracion',
					            			   hipervinculo_boton = '$hipervinculo',
					            			   imagen = '$nombreFoto',
					            			   estado = '$estadoBanner' WHERE id = '$id'";
			             		$sql = $objBanner->update($updateFoto);
			                }
			            }
		        }else{
		        	
		            $errores[] = "La <code><b>Imagen del banner</b></code> debe ser con <code>extensi&oacute;n</code> jpg, jpeg o png.";

		        }//CIERRE VALIDACION EXTENSION
	        }

		}//CIERRE VALIDACION DE ERRORES

		$objBanner->cerrar();
		 echo getRespuestaAccion('listar');
	}//CIERRE DE FUNCION


	function detalle($parametros = false){
		$objBanner = new bannerModel();

		$id = $parametros[1];

		$sql = "SELECT * FROM pag_banner WHERE id = '$id'";
		$consultaBanner = $objBanner->find($sql);

		$objBanner->cerrar();

		include_once("../view/Galeria/detalle.html.php");
	}
}