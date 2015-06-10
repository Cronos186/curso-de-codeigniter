# Aplicación Dinámica Sencilla (Parte III)

Finalizamos nuestra aplicación dinámica sencilla. Ahora nos ocupamos de brindar un mecanismo para mostrar los detalles o información completa de cada artículo. Para conseguirlo necesitamos crear un enlace en la vista <code>index.php</code> utilizando para ello el <code>helper URL</code> y el <code>helper Text</code>, los cuales cargamos en nuestro <code>autoload.php</code>. También es necesario crear la ruta correspondiente en el archivo <code>routes.php</code>.

Desarrollamos tres versiones diferentes para la consulta de los detalles del artículo:
<ol>
	<li>Mediante el ID del artículo</li>
	<li>Mediante el nombre del artículo</li>
	<li>Mediante la URL del artículo (método recomendado)</li>
</ol>

Para la versión de consulta mediante la URL, necesitamos también crear un ruta diferente en nuestro <code>routes.php</code> así como un campo nuevo en la base de datos.

## Directorios del repositorio

<code>config</code>: posee los archivos <code>autoload.php</code> y <code>routes.php</code> configurados de la misma manera que en el video.

<code>controllers</code>: contiene el controlador <code>home.php</code>.

<code>models</code>: posee el modelo <code>articulos_model.php</code>.

<code>views</code>: contiene las vistas <code>index.php</code> y <code>detalle.php</code>.

<b>Nota:</b> Tanto el controlador, como el modelo, la vistas y el archivo de ruteo poseen comentarios con los códigos alternativos utilizados.