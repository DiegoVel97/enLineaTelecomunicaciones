<?php

include_once ('../model/Noticias/noticiasModel.php');

class noticiasController {


	function crear(){
        include_once("../view/Noticias/crear.html.php");
	}

	function listar(){
		$objNoticia = new noticiasModel();

		$query = "SELECT * FROM pag_noticias";
		$consultaNoticia = $objNoticia->select($query);

		  //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('Noticias', 'noticias', 'listar');

        $paginado = new Paginado($consultaNoticia, $pagina, $url);
        
        $consultaNoticia = $paginado->getDatos();

		$objNoticia->cerrar();

		include_once('../view/Noticias/consulta.html.php');
	}

	function crearNoticia(){
		$objNoticia = new noticiasModel();

		$img = "logo-enlinea-comunicaciones.jpeg";
		$titulo = $_POST['tituloNoticia'];
		$descripcion = $_POST['descripcionNoticia'];
		$fechaPublicacion = $_POST['fechaPublicacion'];
		$fechaExpiracion = $_POST['fechaExpiracion'];
		$estadoNoticia = $_POST['estadoNoticia'];

		$sql = "INSERT INTO pag_noticias (title_notice,description_notice,publicate_date_notice,expirate_date_notice,image_notice,estado_notice) VALUES('$titulo','$descripcion','$fechaPublicacion','$fechaExpiracion','$img','activo')";
		$insercion = $objNoticia->insertar($sql);

		if($insercion){
			echo 1;
		}else{
			echo 0;
		}
	}

	function buscarAjax(){
		$objNoticia = new noticiasModel();

        $buscarNoticia = $_POST['busquedaNoticia'];

        $sql = "SELECT * FROM pag_noticias WHERE title_notice LIKE '%" . $buscarNoticia . "%' or id LIKE '%" . $buscarNoticia . "%' ORDER BY id ASC ";
        $consultaNoticia = $objNoticia->select($sql);


        //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('Noticias', 'noticias', 'listar');

        $paginado = new Paginado($consultaNoticia, $pagina, $url);
        
        $consultaNoticia = $paginado->getDatos();


        $objNoticia->cerrar();

        include_once("../view/Noticias/listar.html.php");
	}

	function editar($parametros = false){
		$objNoticia = new noticiasModel();

		$id = $parametros[1];

		$sql = "SELECT * FROM pag_noticias WHERE id = '$id'";
        $consultaNoticia = $objNoticia->find($sql);
        
        
        $objNoticia->cerrar();
        include_once("../view/Noticias/formEdicion.html.php");
	}

	function edicionNoticia($parametros = false){
		$objNoticia = new noticiasModel();

		$id = $parametros[1];
		$titulo = $_POST['tituloNoticia'];
		$descripcion = $_POST['descripcionNoticia'];
		$fechaPublicacion = $_POST['fechaPublicacion'];
		$fechaExpiracion = $_POST['fechaExpiracion'];
		$estadoNoticia = $_POST['estadoNoticia'];

		$sqlUpdate = "UPDATE pag_noticias SET title_notice = '$titulo', description_notice = '$descripcion', publicate_date_notice = '$fechaPublicacion', expirate_date_notice = '$fechaExpiracion', estado_notice = '$estadoNoticia' WHERE id = '$id'";
		$query = $objNoticia->update($sqlUpdate);
		
		echo 1;
	}

	function editarFoto($parametros = false){
		$objNoticia = new noticiasModel();

		$id = $parametros[1];

		$sql = "SELECT * FROM pag_noticias WHERE id = '$id'";
        $consultaNoticia = $objNoticia->find($sql);
        
        
        $objNoticia->cerrar();

        include_once("../view/Noticias/formEdicionFoto.html.php");
	}

	function updateFoto($parametros = false){
        $bien = array();

        $id = $parametros[1];

		$objNoticia = new noticiasModel();

        $foto = $_FILES['file']['name'];

        //Hago un explode para capturar la extension de IMAGEN
        $extFoto = explode(".", $_FILES['file']['name']);
        
        if($extFoto[1] == 'png' OR $extFoto[1] == 'jpg' OR $extFoto[1] == 'jpeg'){
			
			$ruta = $_FILES['file']['tmp_name'];
            $rutaydoc = getDocumentRoot() . "/web/media/img/Noticias/" . $foto;

            //Capturo la ruta donde guardare la Imagen
            if ($ruta <> "") {
                if (move_uploaded_file($ruta, $rutaydoc)) {
             		 $bien[]="Actualizacion exitosa!";
             		 setErrores($bien);

						$sqlUpdate = "UPDATE pag_noticias SET image_notice = '$foto' WHERE id = '$id'";
						$query = $objNoticia->update($sqlUpdate);	


                }
            } else {
                $rutaydoc = NULL;
            }
            

        }else{
        }
        redirect(crearUrl("Noticias", "noticias", "listar"));
        

	}

	function detalle($parametros = false){
		$objNoticia = new noticiasModel();

		$id = $parametros[1];

		$sql = "SELECT * FROM pag_noticias WHERE id = '$id'";
		$consultaNoticia = $objNoticia->find($sql);

		$objNoticia->cerrar();

		include_once("../view/Noticias/detalle.html.php");
	} 

}