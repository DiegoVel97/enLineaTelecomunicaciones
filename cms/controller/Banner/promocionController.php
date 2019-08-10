<?php

include_once('../model/Galeria/galeriaModel.php');

class promocionController{
	function update(){
        $objHeader = new bannerModel();

        $sql = "SELECT * FROM pag_promocion WHERE id = '1'";
        $consultaPromocion = $objHeader->find($sql);

        $objHeader->cerrar();

		include_once("../view/Galeria/cambiarPromocion.html.php");
	}

    function postEdicionImagen(){
        $objHeader = new bannerModel();

            $imagenNombre = $_FILES['archivo']['name'];
            $ruta = $_FILES['archivo']['tmp_name'];

            //Capturo la ruta donde guardare la Imagen
            $rutaydoc = getDocumentRoot() . "/web/media/img/Promocion/" . $imagenNombre;

            if ($ruta <> "") {
                if (move_uploaded_file($ruta, $rutaydoc)) {         
                    $sql = "UPDATE pag_promocion SET url = '$imagenNombre', imagen = 'Si', solo_texto = 'No', descripcion_texto = 'No registra', estado = 'activo' WHERE id = '1'";
                    $update = $objHeader->update($sql);       
                }
            } else {
                $rutaydoc = NULL;
            }

        $objHeader->cerrar();
        redirect(crearUrl("Banner","promocion","update"));
    }

    function postEdicionTexto(){
        $objHeader = new bannerModel();

        $texto = $_POST['texto'];

        $sql = "UPDATE pag_promocion SET imagen = 'No', solo_texto = 'Si', descripcion_texto = '$texto', estado = 'activo' WHERE id = '1'";
            $update = $objHeader->update($sql); 

        $objHeader->cerrar();

        redirect(crearUrl("Banner","promocion","update"));
    }

    function cambioTexto($parametros){
        $objHeader = new bannerModel();
        
        if($parametros[1] == "cambiarATexto"){
            $sql = "UPDATE pag_promocion SET imagen = 'No', solo_texto = 'Si', estado = 'activo' WHERE id = '1'";
            $update = $objHeader->update($sql); 
        }

        if($parametros[1] == "cambiarAImagen"){
            $sql = "UPDATE pag_promocion SET imagen = 'Si', solo_texto = 'No', estado = 'activo' WHERE id = '1'";
            $update = $objHeader->update($sql);   
        }

        $objHeader->cerrar();

        redirect(crearUrl("Banner","promocion","update"));

    }

}