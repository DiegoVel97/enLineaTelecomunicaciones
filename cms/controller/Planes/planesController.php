<?php

include_once ('../model/Noticias/noticiasModel.php');

class planesController {
	
	function agregar(){
		include_once("../view/Planes/crear.html.php");
	}


	function postAgregarPlan(){
		print_r($_POST);
	}
}