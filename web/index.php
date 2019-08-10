<?php


/* DESARROLLO Y PROGRAMACION: World Web Design Colombia
NOMBRE PROGRAMADOR: Diego Fernando Velez
CONTACTO: diegofernando9705@gmail.com*/


session_start();

include_once("../lib/php/helper.php");
include_once("../lib/php/global.php");
include_once("../lib/php/PaginadoClass.php");

if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] == "/recordar") {
    
    include_once('templates/adminMaterialize/recordarPass/header.html.php');
    include_once('templates/adminMaterialize/recordarPass/recordarPass.html.php');
    include_once('templates/adminMaterialize/recordarPass/footer.html.php');

} elseif (!isset($_SERVER['PATH_INFO'])) {
        include_once('template/header.html.php');
        include_once('template/principal.html.php');
        include_once('template/footer.html.php');
    } else {

        $cadena = explode("/", $_SERVER['PATH_INFO']);
        $modulo = ucwords($cadena[1]);
        $controller = $cadena[2];

        $accion = $cadena[3];

        if (!isset($cadena[4]) || $cadena[4] != "noVista") {
            include_once('template/header.html.php');
            echo "<div class='row'>";
        }

        $count = 4;
        while (isset($cadena[$count])) {
            $parametros[] = $cadena[$count];
            $count++;
        }

        $pathController = "../controller/" . $modulo . "/" . $controller . "Controller.php";

        $controllerClass = ucwords($controller) . "Controller";

        include_once($pathController);

        
        $objController = new $controllerClass();

        if (!isset($parametros)) {
            $objController->$accion();
        } else {
            $objController->$accion($parametros);
        }

        if (!isset($cadena[4]) || $cadena[4] != "noVista") {
            echo "</div>";
            include_once('template/footer.html.php');
        }
    }

?>