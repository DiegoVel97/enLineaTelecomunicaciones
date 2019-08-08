<?php

include_once('../model/Noticias/noticiasModel.php');

class noticiasController {

    function noticias() {
    	$objNoticia = new noticiasModel();

    	$sql = "SELECT * FROM pag_noticias";
    	$noticias = $objNoticia->select($sql);

    	$objNoticia->cerrar();

        include_once("../view/Noticias/noticias.html.php");
    }

    function verNota($parametros = false){
    	$objNoticia = new noticiasModel();

    	$id = $parametros[0];
    	$sql = "SELECT * FROM pag_noticias WHERE id = '$id'";
    	$noticia = $objNoticia->find($sql);

    	$sql = "SELECT * FROM pag_noticias";
    	$noticias = $objNoticia->select($sql);

    	$objNoticia->cerrar();

        include_once("../view/Noticias/nota.html.php");
    }
}

