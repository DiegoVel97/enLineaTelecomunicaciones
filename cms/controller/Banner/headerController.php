<?php

include_once('../model/Galeria/galeriaModel.php');

class headerController{
	function update(){
		$objHeader = new bannerModel();

		$sql = "SELECT * FROM pag_header WHERE id = '1'";
		$consultaHeader = $objHeader->find($sql);

		$objHeader->cerrar();

		include_once("../view/Galeria/Header/updateImgLogo.html.php");
	}

	function postEdicionImagen(){
		$objHeader = new bannerModel();

			$imagenNombre = $_FILES['archivo']['name'];
            $ruta = $_FILES['archivo']['tmp_name'];

            //Capturo la ruta donde guardare la Imagen
            $rutaydoc = getDocumentRoot() . "/web/media/img/Header/" . $imagenNombre;

            if ($ruta <> "") {
                if (move_uploaded_file($ruta, $rutaydoc)) { 		
					$sql = "UPDATE pag_header SET imagen = '$imagenNombre'";
					$update = $objHeader->update($sql);       
                }
            } else {
                $rutaydoc = NULL;
            }

		$objHeader->cerrar();
		redirect(crearUrl("Banner","header","update"));
	}
}