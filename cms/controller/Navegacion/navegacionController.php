<?php

include_once ('../model/Navegacion/navegacionModel.php');

class navegacionController {
	function listar(){
		$objNavegacion = new navegacionModel();

		$sql = "SELECT * FROM pag_menu_navegacion";
		$busquedaNavegacion = $objNavegacion->select($sql);


		$sqlSubNavegacion = "SELECT * FROM pag_sub_menu,pag_menu_navegacion WHERE pag_sub_menu.id_menu_principal=pag_menu_navegacion.id_menu";
		$busquedaSubNavegacion = $objNavegacion->select($sqlSubNavegacion);


		$objNavegacion->cerrar();

		include_once("../view/Navegacion/listar.html.php");
	}

	function update(){
		$objNavegacion = new navegacionModel();

		$errores = array();

		/*VALIDACION MENU PRINCIPAL*/

		$inputMenu1 = $_POST['inputMenu1'];
		$inputMenu2 = $_POST['inputMenu2'];
		$inputMenu3 = $_POST['inputMenu3'];
		$inputMenu4 = $_POST['inputMenu4'];
		$inputMenu5 = $_POST['inputMenu5'];

		if (!isset($_POST['inputMenu1']) or $_POST['inputMenu1'] == "") {
            $errores[] = "La opci&oacute;n <code><b>1 -Inicio-</b></code> del men&uacute; principal no puede quedar vacio.";
        }

		if (!isset($_POST['inputMenu2']) or $_POST['inputMenu2'] == "") {
            $errores[] = "La opci&oacute;n <code><b>2 -NOSOTROS-</b></code> del men&uacute; principal no puede quedar vacio.";
        }

        if (!isset($_POST['inputMenu3']) or $_POST['inputMenu3'] == "") {
            $errores[] = "La opci&oacute;n <code><b>3 -NUESTROS SERVICIOS-</b></code> del men&uacute; principal no puede quedar vacio.";
        }

        if (!isset($_POST['inputMenu4']) or $_POST['inputMenu4'] == "") {
            $errores[] = "La opci&oacute;n <code><b>4 -NOTICIAS-</b></code> del men&uacute; principal no puede quedar vacio.";
        }

        if (!isset($_POST['inputMenu5']) or $_POST['inputMenu5'] == "") {
            $errores[] = "La opci&oacute;n <code><b>5 -CONTACTANOS-</b></code> del men&uacute; principal no puede quedar vacio.";
        }

		/* - SUB MENU NAVEGACION */



        if (!isset($_POST['inputSub1']) or $_POST['inputSub1'] == "") {
            $errores[] = "La opci&oacute;n 1 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }


        if (!isset($_POST['hrefInputSub1']) or $_POST['hrefInputSub1'] == "") {
            $errores[] = "El <code>Hipervinculo</code> de la opci&oacute;n 1 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }


        if (!isset($_POST['estadoSub1']) or $_POST['estadoSub1'] == "") {
            $errores[] = "El <code>Estado</code> de la opci&oacute;n 1 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }



        if (!isset($_POST['inputSub2']) or $_POST['inputSub2'] == "") {
            $errores[] = "La opci&oacute;n 2 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }

        if (!isset($_POST['hrefInputSub2']) or $_POST['hrefInputSub2'] == "") {
            $errores[] = "El <code>Hipervinculo</code> de la opci&oacute;n 2 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }

        if (!isset($_POST['estadoSub2']) or $_POST['estadoSub2'] == "") {
            $errores[] = "El <code>Estado</code> de la opci&oacute;n 2 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }





        if (!isset($_POST['inputSub3']) or $_POST['inputSub3'] == "") {
            $errores[] = "La opci&oacute;n 3 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }


        if (!isset($_POST['hrefInputSub3']) or $_POST['hrefInputSub3'] == "") {
            $errores[] = "El <code>Hipervinculo</code> de la opci&oacute;n 3 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }

        if (!isset($_POST['estadoSub3']) or $_POST['estadoSub3'] == "") {
            $errores[] = "El <code>Estado</code> de la opci&oacute;n 3 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }


		



        if (!isset($_POST['inputSub4']) or $_POST['inputSub4'] == "") {
            $errores[] = "La opci&oacute;n 4 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }


        if (!isset($_POST['hrefInputSub4']) or $_POST['hrefInputSub4'] == "") {
            $errores[] = "El <code>Hipervinculo</code> de la opci&oacute;n 4 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }

        if (!isset($_POST['estadoSub4']) or $_POST['estadoSub4'] == "") {
            $errores[] = "El <code>Estado</code> de la opci&oacute;n 4 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }



		

        if (!isset($_POST['inputSub5']) or $_POST['inputSub5'] == "") {
            $errores[] = "La opci&oacute;n 5 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }


        if (!isset($_POST['hrefInputSub5']) or $_POST['hrefInputSub5'] == "") {
            $errores[] = "El <code>Hipervinculo</code> de la opci&oacute;n 5 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }

        if (!isset($_POST['estadoSub5']) or $_POST['estadoSub5'] == "") {
            $errores[] = "El <code>Estado</code> de la opci&oacute;n 5 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }





        if (!isset($_POST['inputSub6']) or $_POST['inputSub6'] == "") {
            $errores[] = "La opci&oacute;n 6 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }

        if (!isset($_POST['hrefInputSub6']) or $_POST['hrefInputSub6'] == "") {
            $errores[] = "El <code>Hipervinculo</code> de la opci&oacute;n 6 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }

        if (!isset($_POST['estadoSub6']) or $_POST['estadoSub6'] == "") {
            $errores[] = "El <code>Estado</code> de la opci&oacute;n 6 del <code><b>Sub menu</b></code> del men&uacute; principal no puede quedar vacio.";
        }



 
        if (count($errores) > 0) {
            setErrores($errores);
        }else{


        $inputSub1 = $_POST['inputSub1'];
        $hrefInputSub1 = $_POST['hrefInputSub1'];
        $estadoSub1 = $_POST['estadoSub1'];

        if (!isset($_POST['menu_principal_sub1']) or $_POST['menu_principal_sub1'] == "") {
            $menu_principal_sub1 = $_POST['opcionMenu1'];
        }else{
            $menu_principal_sub1 = $_POST['menu_principal_sub1'];
        }

        $sql1 = "UPDATE pag_sub_menu SET descripcion_sub = '$inputSub1', href_sub = '$hrefInputSub1', id_menu_principal = '$menu_principal_sub1', estado_sub = '$estadoSub1' WHERE id_sub='1'";
            $consulta = $objNavegacion->update($sql1);




        $inputSub2 = $_POST['inputSub2'];
        $hrefInputSub2 = $_POST['hrefInputSub2'];
        $estadoSub2 = $_POST['estadoSub2'];

        if (!isset($_POST['menu_principal_sub2']) or $_POST['menu_principal_sub2'] == "") {
            $menu_principal_sub2 = $_POST['opcionMenu2'];
        }else{
            $menu_principal_sub2 = $_POST['menu_principal_sub2'];
        }

        $sql2 = "UPDATE pag_sub_menu SET descripcion_sub = '$inputSub2', href_sub = '$hrefInputSub2', id_menu_principal = '$menu_principal_sub2', estado_sub = '$estadoSub2' WHERE id_sub='2'";
        $consulta2 = $objNavegacion->update($sql2);




        $inputSub3 = $_POST['inputSub3'];
        $hrefInputSub3 = $_POST['hrefInputSub3'];
        $estadoSub3 = $_POST['estadoSub3'];

        if (!isset($_POST['menu_principal_sub3']) or $_POST['menu_principal_sub3'] == "") {
            $menu_principal_sub3 = $_POST['opcionMenu3'];
        }else{
            $menu_principal_sub3 = $_POST['menu_principal_sub3'];
        }

        $sql3 = "UPDATE pag_sub_menu SET descripcion_sub = '$inputSub3', href_sub = '$hrefInputSub3', id_menu_principal = '$menu_principal_sub3', estado_sub = '$estadoSub3' WHERE id_sub='3'";
        $consulta3 = $objNavegacion->update($sql3);




        $inputSub4 = $_POST['inputSub4'];
        $hrefInputSub4 = $_POST['hrefInputSub4'];
        $estadoSub4 = $_POST['estadoSub4'];

        if (!isset($_POST['menu_principal_sub4']) or $_POST['menu_principal_sub4'] == "") {
            $menu_principal_sub4 = $_POST['opcionMenu4'];
        }else{
            $menu_principal_sub4 = $_POST['menu_principal_sub4'];
        }

        $sql4 = "UPDATE pag_sub_menu SET descripcion_sub = '$inputSub4', href_sub = '$hrefInputSub4', id_menu_principal = '$menu_principal_sub4', estado_sub = '$estadoSub4' WHERE id_sub='4'";
        $consulta4 = $objNavegacion->update($sql4);




        $inputSub5 = $_POST['inputSub5'];
        $hrefInputSub5 = $_POST['hrefInputSub5'];
        $estadoSub5 = $_POST['estadoSub5'];

        if (!isset($_POST['menu_principal_sub5']) or $_POST['menu_principal_sub5'] == "") {
            $menu_principal_sub5 = $_POST['opcionMenu5'];
        }else{
            $menu_principal_sub5 = $_POST['menu_principal_sub5'];
        }

        $sql5 = "UPDATE pag_sub_menu SET descripcion_sub = '$inputSub5', href_sub = '$hrefInputSub5', id_menu_principal = '$menu_principal_sub5', estado_sub = '$estadoSub5' WHERE id_sub='5'";
        $consulta5 = $objNavegacion->update($sql5);




        $inputSub6 = $_POST['inputSub6'];
        $hrefInputSub6 = $_POST['hrefInputSub6'];
        $estadoSub6 = $_POST['estadoSub6'];

        if (!isset($_POST['menu_principal_sub6']) or $_POST['menu_principal_sub6'] == "") {
            $menu_principal_sub6 = $_POST['opcionMenu6'];
        }else{
            $menu_principal_sub6 = $_POST['menu_principal_sub6'];
        }

        $sql6 = "UPDATE pag_sub_menu SET descripcion_sub = '$inputSub6', href_sub = '$hrefInputSub6', id_menu_principal = '$menu_principal_sub6', estado_sub = '$estadoSub6' WHERE id_sub='6'";
        $consulta6 = $objNavegacion->update($sql6);




        }


        $objNavegacion->cerrar();

        echo getRespuestaAccion('listar');
	}
}