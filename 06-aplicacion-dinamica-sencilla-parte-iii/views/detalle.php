<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo;?></title>
</head>
<body>
	<h3><?php echo $detalle->nombre_articulo; ?></h3>
	<strong>Fecha de Publicación:</strong> <?php echo $detalle->fecha_articulo;?>
	<p>
		<?php echo $detalle->contenido_articulo;?>
	</p>
</body>
</html>