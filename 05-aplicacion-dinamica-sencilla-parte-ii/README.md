# Aplicación Dinámica Sencilla (Parte II)

Continuamos desarrollando nuestra aplicación. Creamos el controlador `home.php` que se encargará de procesar las solicitudes de la aplicación. También debemos configurar que sea el controlador por defecto en el archivo `routes.php`.

Por otra parte creamos el modelo para interactuar con la base de datos, en específico `articulos_model.php` y dentro de el ubicamos el método `lista_articulos()` que obtendrá el listado completo de los artículos.

Este modelo es instanciado o llamado dentro del controlador `home.php` donde también vimos la forma de cambiar el nombre de objeto del modelo a uno diferente. Lógicamente para ello debemos cargar la librería `database` lo cual hacemos en el archivo `routes.php`.

Finalmente enviamos los datos de manera dinámica a la vista `index.php` y hacemos un `foreach` dentro de ella para mostrarlos.

## Directorios del repositorio

`config`: posee los archivos `autoload.php` y `routes.php` configurados de la misma manera que en el video.

`controllers`: contiene el controlador `home.php`.

`models`: posee el modelo `articulos_model.php`.

`views`: contiene la vista `index.php` utilizada para mostrar el listado de artículos obtenida desde la base de datos.

Finalmente se incluye el archivo `.htaccess`.

**Nota:** Tanto el controlador, como el modelo y la vista poseen comentarios con los códigos alternativos utilizados.