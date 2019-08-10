<?php

include_once ('../model/Nosotros/nosotrosModel.php');

class nosotrosController {

	function mision(){
		$objNosotros = new nosotrosModel();

		$sql = "SELECT * FROM pag_mision";
		$query = $objNosotros->find($sql);

		include_once("../view/Nosotros/edicionMision.html.php");
	}

	function edicionMision(){
		$objNosotros = new nosotrosModel();

		$title = $_POST['tituloMision'];
		$description = $_POST['descripcionMision'];

		$sqlUpdate = "UPDATE pag_mision SET title_page = '$title', description_page = '$description' WHERE id = '1'";
		$query = $objNosotros->update($sqlUpdate);

		if($query){
			echo 1;
		}

	}


	function vision(){
		$objNosotros = new nosotrosModel();

		$sql = "SELECT * FROM pag_vision";
		$query = $objNosotros->find($sql);

		include_once("../view/Nosotros/edicionVision.html.php");
	}

	function edicionVision(){
		$objNosotros = new nosotrosModel();

		$title = $_POST['tituloVision'];
		$description = $_POST['descripcionVision'];

		$sqlUpdate = "UPDATE pag_vision SET title_page = '$title', description_page = '$description' WHERE id = '1'";
		$query = $objNosotros->update($sqlUpdate);

		if($query){
			echo 1;
		}

	}


	function nosotros(){
		$objNosotros = new nosotrosModel();

		$sql = "SELECT * FROM pag_nosotros";
		$query = $objNosotros->find($sql);

		include_once("../view/Nosotros/edicionNosotros.html.php");
	}

	function edicionNosotros(){
		$objNosotros = new nosotrosModel();

		$title = $_POST['tituloNosotros'];
		$description = $_POST['descripcionNosotros'];

		$sqlUpdate = "UPDATE pag_nosotros SET title_page = '$title', description_page = '$description' WHERE id = '1'";
		$query = $objNosotros->update($sqlUpdate);

		if($query){
			echo 1;
		}

	}


	function servicios(){
		$objNosotros = new nosotrosModel();

		$sqlMenu = "SELECT * FROM pag_menu_navegacion";
		$consultaMenuNavegacion = $objNosotros->select($sqlMenu);

		$objNosotros->cerrar();

		include_once("../view/Nosotros/Servicios/crear.html.php");
	}

	function agregarServicio(){
		$objNosotros = new nosotrosModel();

		$errores = array();

		if (!isset($_FILES['file']) or $_FILES['file'] == "") {
            $errores[] = "El <code>Archivo de imagen</code> no puede quedar vacio.";
        }

         if (!isset($_POST['tituloServicios']) or $_POST['tituloServicios'] == "") {
            $errores[] = "El <code><b>titulo del Banner</b></code> no debe quedar vacio.";
        }

        if (!isset($_POST['descripcionServicios']) or $_POST['descripcionServicios'] == "") {
            $errores[] = "La <code><b>descripci&oacute;n del Servicios</b></code> no debe quedar vacio.";
        }

        if (!isset($_POST['estadoServicios']) or $_POST['estadoServicios'] == "") {
            $errores[] = "El <code><b>estado del Servicio</b></code> del Banner no debe quedar vacio.";
        }

        if($_POST['posicionMenu'] == "Si"){
        	if (!isset($_POST['menuNavegacion']) or $_POST['menuNavegacion'] == "") {
            	$errores[] = "Por favor seleccione <code><b>Men&uacute; de navegaci&oacute;n</b></code> para este servicio.";
        	}else{
        		$menuNavegacion = $_POST['menuNavegacion'];
        	}
        }else{
        	$menuNavegacion = "null";
        }

         if (count($errores) > 0) {
            setErrores($errores);
        }else{

			$titulo = $_POST['tituloServicios'];
			
			$descripcion = $_POST['descripcionServicios'];
			$estado = $_POST['estadoServicios'];

        	// FOTO SERVICIO
            $nombreFoto = $_FILES['file']['name'];
            $ruta = $_FILES['file']['tmp_name'];
            //Capturo la ruta donde guardare la Imagen
            $rutaydoc = getDocumentRoot() . "/web/media/img/Servicios/" . $nombreFoto;
            if ($ruta <> "") {
                if (move_uploaded_file($ruta, $rutaydoc)) {

                	$sql_servicios = "INSERT INTO pag_servicios (titulo_servicios,descripcion_servicio,imagen_servicio,aparece_header,estado_servicio) VALUES('$titulo','$descripcion','$nombreFoto','$menuNavegacion','$estado')";
        			$insercion_servicios = $objNosotros->insertar($sql_servicios);
        			
        			if($_POST['posicionMenu'] == "Si"){

        				$tituloMenu = strip_tags($_POST['tituloServicios']);
        				$menuNavegacion = $_POST['menuNavegacion'];

        				$sql_menu_navegacion = "INSERT INTO pag_sub_menu (descripcion_sub,href_sub,id_menu_principal,estado_sub) VALUES('$tituloMenu','href','$menuNavegacion','activo')";
        				$insercion_menu = $objNosotros->insertar($sql_menu_navegacion);

        			}

                }
            }



        	
        }

        echo getRespuestaAccion('listar');

	}


	function listar(){
		$objNosotros = new  nosotrosModel();

		$query = "SELECT * FROM pag_servicios";
		$consultaServicios = $objNosotros->select($query);

		  //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('Nosotros', 'nosotros', 'listar');

        $paginado = new Paginado($consultaServicios, $pagina, $url);
        
        $consultaBanner = $paginado->getDatos();

		$objNosotros->cerrar();

		include_once('../view/Nosotros/Servicios/consulta.html.php');
	}

	function buscarAjax(){
		$objNosotros = new nosotrosModel();

        $buscarServicio = $_POST['buscarServicio'];

        $sql = "SELECT * FROM pag_servicios WHERE titulo_servicios LIKE '%" . $buscarServicio . "%' or descripcion_servicio LIKE '%" . $buscarServicio . "%' ORDER BY id ASC ";
        $consultaServicios = $objNosotros->select($sql);


        //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('Nosotros', 'nosotros', 'listar');

        $paginado = new Paginado($consultaServicios, $pagina, $url);
        
        $consultaServicios = $paginado->getDatos();


        $objNosotros->cerrar();

        include_once("../view/Nosotros/Servicios/listar.html.php");
	}

	function edicionServicio($parametros = false){
		$objNosotros = new nosotrosModel();

		$sqlMenu = "SELECT * FROM pag_menu_navegacion";
		$consultaMenuNavegacion = $objNosotros->select($sqlMenu);


		$id = $parametros[1];
		$sql = "SELECT * FROM pag_servicios WHERE id = '$id'";
		$servicio = $objNosotros->find($sql);

		$objNosotros->cerrar();

		include_once("../view/Nosotros/Servicios/formEdicion.html.php");
	}

	function updateServicio($parametros = false){
		$objNosotros = new nosotrosModel();

		$errores = array();
		$id = $parametros[1];

         if (!isset($_POST['tituloServicios']) or $_POST['tituloServicios'] == "") {
            $errores[] = "El <code><b>titulo del Banner</b></code> no debe quedar vacio.";
        }

        if (!isset($_POST['descripcionServicios']) or $_POST['descripcionServicios'] == "") {
            $errores[] = "La <code><b>descripci&oacute;n del Servicios</b></code> no debe quedar vacio.";
        }

        if (!isset($_POST['estadoServicios']) or $_POST['estadoServicios'] == "") {
            $errores[] = "El <code><b>estado del Servicio</b></code> del Banner no debe quedar vacio.";
        }

        if($_POST['posicionMenu'] == "Si"){
        	if (!isset($_POST['menuNavegacion']) or $_POST['menuNavegacion'] == "") {
            	$errores[] = "Por favor seleccione <code><b>Men&uacute; de navegaci&oacute;n</b></code> para este servicio.";
        	}else{
        		$menuNavegacion = $_POST['menuNavegacion'];
        	}
        }else{
        	$menuNavegacion = "null";
        }

         if (count($errores) > 0) {
            setErrores($errores);
        }else{
        	
        	if(isset($_FILES['file']['name'])){


        		$titulo = $_POST['tituloServicios'];
				$descripcion = $_POST['descripcionServicios'];
				$estado = $_POST['estadoServicios'];
				$posicionMenu = $_POST['posicionMenu'];
	        	// FOTO SERVICIO
	            $nombreFoto = $_FILES['file']['name'];
	            $ruta = $_FILES['file']['tmp_name'];
		        
		            //Capturo la ruta donde guardare la Imagen
		            $rutaydoc = getDocumentRoot() . "/web/media/img/Servicios/" . $nombreFoto;
		            if ($ruta <> "") {
		                if (move_uploaded_file($ruta, $rutaydoc)) {
		                	$sql_update = "UPDATE pag_servicios SET titulo_servicios='$titulo', descripcion_servicio='$descripcion',imagen_servicio='$nombreFoto',aparece_header='$posicionMenu', estado_servicio='$estado' WHERE id = '$id'";
		                	$update_servicio = $objNosotros->update($sql_update);
		                }
		            }	
			}else{


        		$titulo = $_POST['tituloServicios'];
				$descripcion = $_POST['descripcionServicios'];
				$estado = $_POST['estadoServicios'];
				$posicionMenu = $_POST['posicionMenu'];
	        	
		                	$sql_update = "UPDATE pag_servicios SET titulo_servicios='$titulo', descripcion_servicio='$descripcion',aparece_header='$posicionMenu', estado_servicio='$estado' WHERE id = '$id'";
		                	$update_servicio = $objNosotros->update($sql_update);
		             
			}

        }

        echo getRespuestaAccion('listar');
	}

	function detalle($parametros = false){
		$objNosotros =  new nosotrosModel();

		$id = $parametros[1];
		$sql = "SELECT * FROM pag_servicios WHERE id = '$id'";
		$servicio = $objNosotros->find($sql);

		$objNosotros->cerrar();

		include_once("../view/Nosotros/Servicios/detalle.html.php");
	}



}