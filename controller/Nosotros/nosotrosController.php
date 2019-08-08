<?php

include_once('../model/Nosotros/nosotrosModel.php');

class nosotrosController {

    function nosotros() {
    	$objNosotros = new nosotrosModel();

		$sql = "SELECT * FROM pag_nosotros";
		$queryNosotros = $objNosotros->find($sql);


		$sqlVision = "SELECT * FROM pag_vision";
		$queryVision = $objNosotros->find($sqlVision);


		$sqlMision = "SELECT * FROM pag_mision";
		$queryMision = $objNosotros->find($sqlMision);

        include_once("../view/Nosotros/nosotros.html.php");
    }
}

