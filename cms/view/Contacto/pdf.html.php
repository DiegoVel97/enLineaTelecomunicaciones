<?php 


 $dompdf = new DOMPDF();
 $codigoHTML = "<html><head><style>body { font-family: 'Helvetica'; } table {border-collapse: collapse;border-spacing: 0;} table.striped > tbody > tr:nth-child(odd){background-color: #f2f2f2;} table.striped > tbody > tr > td { border-radius: 0px;}thead {text-align:center; border-bottom: 1px solid #d0d0d0;}td, th {padding: 15px 5px;display: table-cell;text-align: left;vertical-align: middle;border-radius: 2px;} table, th, td {border: none;}table {width: 100%;display: table;}</style></head><body><center><h3>REPORTE DE FORMULARIO CONTACTANOS - ".$contacto['nombre']."</h3></center><center><p><b>Fecha de reporte:</b>&nbsp;".date('d-m-Y')." / <b>Usuario responsable del reporte: </b>&nbsp;".$_SESSION['login']['per_nombre']."".$_SESSION['login']['per_apellido']."</p><hr><center><img src'https://www.econectia.com/uploads/noticias/1703/imagenes/Sin-t%C3%ADtulo-2.jpg' width='100%'><table class='striped'><thead><tr><th>ID</th><th>Nombre</th><th>Direcci&oacute;n</th><th>Correo electronico</th><th>Mensaje</th></tr></head><tbody><tr><td>".$contacto['id']."</td><td>".$contacto['nombre']."</td><td>".$contacto['direccion']."</td><td>".$contacto['email']."</td><td>".$contacto['mensaje']."</td></tr></tbody>";

        $dompdf->set_paper("A4", "landscape");
        $dompdf->load_html(utf8_encode($codigoHTML));


        ini_set("memory_limit", "128M");
        $dompdf->render();
        ob_end_clean();
        $dompdf->stream("formulario_contactanos.pdf");

?>