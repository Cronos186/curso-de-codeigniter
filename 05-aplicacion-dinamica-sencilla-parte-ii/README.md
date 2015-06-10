# Aplicación Dinámica Sencilla (Parte II)

Continuamos desarrollando nuestra aplicación. Creamos el controlador <code>home.php</code> que se encargará de procesar las solicitudes de la aplicación. También debemos configurar que sea el controlador por defecto en el archivo <code>routes.php</code>.

Por otra parte creamos el modelo para interactuar con la base de datos, en específico <code>articulos_model.php</code> y dentro de el ubicamos el método <code>lista_articulos()</code> que obtendrá el listado completo de los artículos.

Este modelo es instanciado o llamado dentro del controlador <code>home.php</code> donde también vimos la forma de cambiar el nombre de objeto del modelo a uno diferente. Lógicamente para ello debemos cargar la librería <code>database</code> lo cual hacemos en el archivo <code>routes.php</code>.

Finalmente enviamos los datos de manera dinámica a la vista <code>index.php</code> y hacemos un <code>foreach</code> dentro de ella para mostrarlos.

## Directorios del repositorio

<code>config</code>: posee los archivos <code>autoload.php</code> y <code>routes.php</code> configurados de la misma manera que en el video.

<code>controllers</code>: contiene el controlador <code>home.php</code>.

<code>models</code>: posee el modelo <code>articulos_model.php</code>.

<code>views</code>: contiene la vista <code>index.php</code> utilizada para mostrar el listado de artículos obtenida desde la base de datos.

Finalmente se incluye el archivo <code>.htaccess</code>.

<b>Nota:</b> Tanto el controlador, como el modelo y la vista poseen comentarios con los códigos alternativos utilizados.