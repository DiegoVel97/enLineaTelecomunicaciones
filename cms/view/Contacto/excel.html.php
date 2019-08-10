<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "reporte-contactos".date("d-m-Y").".xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

?>
<br><br><br><br>
<table style="border:1px solid black; padding-top: 20px; margin-left: 20px;">
		<thead >
			<tr >
				<th style="background-color:#04D304; color: white; border:1px solid black; padding: 5px 5px 5px 5px;">
					<br>NOMBRE<br><br>
				</th>
				<th style="background-color:#04D304; color: white; border:1px solid black; padding: 5px 5px 5px 5px;">
					TELEFONO
				</th>
				<th style="background-color:#04D304; color: white; border:1px solid black; padding: 5px 5px 5px 5px;">
					DIRECCION
				</th>
				<th style="background-color:#04D304; color: white; border:1px solid black; padding: 5px 5px 5px 5px;">
					CORREO
				</th>
				<th style="background-color:#04D304; color: white; border:1px solid black; padding: 5px 5px 5px 5px;">
					MENSAJE
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($contactos as $contacto) { ?>
				<tr>
					<td style="border:1px solid black;">
						<br><?php echo $contacto['nombre']; ?><br><br>	
					</td>
					<td style="border:1px solid black;">
						<br><?php echo $contacto['telefono']; ?><br><br>
					</td>
					<td style="border:1px solid black;">
						<br><?php echo $contacto['direccion']; ?><br><br>	
					</td>
					<td style="border:1px solid black;">
						<br><?php echo $contacto['email']; ?><br><br>	
					</td>
					<td style="border:1px solid black;">
						<br><?php echo $contacto['mensaje']; ?><br><br>	
					</td>
				</tr>
			<?php } ?>
		</tbody>
</table>