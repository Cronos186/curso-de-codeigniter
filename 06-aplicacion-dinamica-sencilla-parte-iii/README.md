<h2>Aplicación Dinámica Sencilla (Parte III)</h2>
<p>
	Finalizamos nuestra aplicación dinámica sencilla. Ahora nos ocupamos de brindar un mecanismo para mostrar los detalles o información completa de cada artículo. Para conseguirlo necesitamos crear un enlace en la vista <code>index.php</code> utilizando para ello el <code>helper URL</code> y el <code>helper Text</code>, los cuales cargamos en nuestro <code>autoload.php</code>. También es necesario crear la ruta correspondiente en el archivo <code>routes.php</code>.
</p>
<p>
	Desarrollamos tres versiones diferentes para la consulta de los detalles del artículo:
</p>
<ol>
	<li>Mediante el ID del artículo</li>
	<li>Mediante el nombre del artículo</li>
	<li>Mediante la URL del artículo (método recomendado)</li>
</ol>
<p>
	Para la versión de consulta mediante la URL, necesitamos también crear un ruta diferente en nuestro <code>routes.php</code> así como un campo nuevo en la base de datos.
</p>
<p>
	En el repositorio se encuentra la carpeta <code>config</code> que posee los archivos <code>autoload.php</code> y <code>routes.php</code> configurados de la misma manera que en el video. En la carpeta <code>controllers</code> se encuentra el controlador <code>home.php</code>. La carpeta <code>models</code> posee el modelo <code>articulos_model.php</code>. Finalmente en la carpeta <code>views</code> se encuentran la vista <code>index.php</code> y <code>detalle.php</code>.
</p>
<p>
	<b>Nota:</b> Tanto el controlador, como el modelo, la vistas y el archivo de ruteo poseen comentarios con los códigos alternativos utilizados.
</p>