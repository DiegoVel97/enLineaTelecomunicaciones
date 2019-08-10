<?php

include_once ('../model/Contacto/contactoModel.php');

class contactoController {
	function listar(){
		$objContacto = new contactoModel();

		$query = "SELECT * FROM pag_contacto";
		$consultaContacto = $objContacto->select($query);

		  //aqui empieza el paginado
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('Contacto', 'contacto', 'listar');

        $paginado = new Paginado($consultaContacto, $pagina, $url);
        $consultaContacto = $paginado->getDatos();

		$objContacto->cerrar();

		include_once('../view/Contacto/consulta.html.php');
	}


	function buscarAjax(){
		$objContacto = new contactoModel();

        $buscarContacto = $_POST['busquedaContacto'];

        $sql = "SELECT * FROM pag_contacto WHERE nombre LIKE '%" . $buscarContacto . "%' or telefono LIKE '%" . $buscarContacto . "%' or email LIKE '%" . $buscarContacto . "%' ORDER BY id ASC ";
        $consultaContacto = $objContacto->select($sql);


        //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('Noticias', 'noticias', 'listar');

        $paginado = new Paginado($consultaContacto, $pagina, $url);
        
        $consultaContacto = $paginado->getDatos();


        $objContacto->cerrar();

        include_once("../view/Contacto/listar.html.php");
	}

	function exportPdf(){
		$objContacto = new contactoModel();
		
		$query = "SELECT * FROM pag_contacto";
		$contactos = $objContacto->select($query);
		
		
		$objContacto->cerrar();

        require_once("../lib/pdf/dompdf_config.inc.php");
        include_once("../view/Contacto/excel.html.php");
       
	}


	function mapa(){
		$objContacto = new contactoModel();

		$query = "SELECT * FROM pag_mapa WHERE id = '1'";
		$contacto = $objContacto->find($query);		
		
		$objContacto->cerrar();
        include_once("../view/Contacto/edicionMapa.html.php");
	}

	function updateMapa(){
		$objContacto = new contactoModel();

		$mapa = $_POST['mapa'];

		$sql = "UPDATE pag_mapa SET descripcion = '$mapa' WHERE id = '1'";
		$update = $objContacto->update($sql);

		if($update){
			echo 1;
		}

	}
}