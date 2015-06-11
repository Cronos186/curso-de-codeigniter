# Aplicación Dinámica Sencilla (Parte III)

Finalizamos nuestra aplicación dinámica sencilla. Ahora nos ocupamos de brindar un mecanismo para mostrar los detalles o información completa de cada artículo. Para conseguirlo necesitamos crear un enlace en la vista `index.php` utilizando para ello el `helper URL` y el `helper Text`, los cuales cargamos en nuestro `autoload.php`. También es necesario crear la ruta correspondiente en el archivo `routes.php`.

Desarrollamos tres versiones diferentes para la consulta de los detalles del artículo:

-Mediante el ID del artículo
-Mediante el nombre del artículo
-Mediante la URL del artículo (método recomendado)

Para la versión de consulta mediante la URL, necesitamos también crear un ruta diferente en nuestro `routes.php` así como un campo nuevo en la base de datos.

## Directorios del repositorio

`config`: posee los archivos `autoload.php` y `routes.php` configurados de la misma manera que en el video.

`controllers`: contiene el controlador `home.php`.

`models`: posee el modelo `articulos_model.php`.

`views`: contiene las vistas `index.php` y `detalle.php`.

**Nota:** Tanto el controlador, como el modelo, la vistas y el archivo de ruteo poseen comentarios con los códigos alternativos utilizados.