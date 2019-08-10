<?php

include_once ('../model/Planes/planesModel.php');

class planesController {
	
	function agregar(){
		include_once("../view/Planes/crear.html.php");
	}


	function postAgregarPlan(){
		$objPlanes = new planesModel();


		$titulo = $_POST['tituloPlan'];
		$valor = $_POST['valorPlan'];
		$descripcionTiempo = $_POST['descripcionPlanMeses'];
		$descripcion = $_POST['descripcionPlan'];

		$sql_insercion = "INSERT INTO pag_plan (titulo_plan, valor_plan, descripcion_del_plan_tiempo, descripcion_plan, estado_plan) VALUES ('$titulo','$valor','$descripcionTiempo','$descripcion', 'activo')";
		$insercion = $objPlanes->insertar($sql_insercion);

		echo getRespuestaAccion('listar');
	}

	function listar(){
		$objPlanes = new planesModel();

		$query = "SELECT * FROM pag_plan";
		$consultaPlanes = $objPlanes->select($query);

		  //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('Planes', 'planes', 'listar');

        $paginado = new Paginado($consultaPlanes, $pagina, $url);
        
        $consultaPlanes = $paginado->getDatos();

		$objPlanes->cerrar();


		include_once("../view/Planes/consulta.html.php");
	}


	function buscarAjax(){
		$objPlanes = new planesModel();

        $buscarPlan = $_POST['busquedaPlan'];

        $query = "SELECT * FROM pag_plan WHERE titulo_plan LIKE '%" . $buscarPlan . "%' or descripcion_del_plan_tiempo LIKE '%" . $buscarPlan . "%' OR descripcion_plan LIKE '%" . $buscarPlan . "%' ORDER BY id ASC ";
		$consultaPlanes = $objPlanes->select($query);

		  //aqui empieza el paginado       
        $pagina = (isset($_REQUEST['pagina']) ? $_REQUEST['pagina'] : 1);
        $url = crearUrl('Planes', 'planes', 'listar');

        $paginado = new Paginado($consultaPlanes, $pagina, $url);
        
        $consultaPlanes = $paginado->getDatos();

		$objPlanes->cerrar();


		include_once("../view/Planes/listar.html.php");
	}

	function eliminarPlan($parametros){
		$objPlanes = new planesModel();

		$id = $parametros[1];
		$sql_delete = "DELETE FROM pag_plan WHERE id = $id";
		$delete = $objPlanes->delete($sql_delete);

		if(isset($delete)){
			echo true;
		}else{
			echo false;
		}
	}
}