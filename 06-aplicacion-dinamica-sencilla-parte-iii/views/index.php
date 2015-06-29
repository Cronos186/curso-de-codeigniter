<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo;?></title>
</head>
<body>
	<h1>Aplicación Dinámica con CodeIgniter</h1>
	<?php 
	foreach ($articulos as $item) {

		// Genera la URL con el ID del articulo
		// $url = 'articulo/' . $item->id_articulo . '/';
		
		// Genera la URL sin el ID del articulo
		// $url = 'articulo/';
		// $url .= url_title(convert_accented_characters($item->nombre_articulo), '-', TRUE);
		?>
		<h3>
			<?php 
			echo anchor('articulo/'. $item->url_articulo, $item->nombre_articulo);

			// Generla la URL del articulo mediante el nombre
			// echo anchor($url, $item->nombre_articulo);

			// Mostrar datos devueltos por el modelo mediante result_array()
			// echo $item['nombre_articulo'];
			?>
		</h3>
		<strong>Fecha de Publicación:</strong> <?php echo $item->fecha_articulo;?>
		<p>
			<?php echo $item->contenido_articulo;?>
		</p>
		<hr>
		<?php 
	}
	?>
</body>
</html>