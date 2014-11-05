<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo;?></title>
</head>
<body>
	<h1>Aplicación Dinámica con CodeIgniter</h1>
	<?php foreach ($articulos as $item): ?>
		<h2>
			<?php 
			echo $item->nombre_articulo;

			// Mostrar datos devueltos por el modelo mediante result_array()
			// echo $item['nombre_articulo'];
			?>
		</h2>
		<strong>Fecha de Publicación:</strong> <?php echo $item->fecha_articulo;?>
		<p>
			<?php echo $item->contenido_articulo;?>
		</p>
		<hr>
	<?php endforeach;?>
</body>
</html>