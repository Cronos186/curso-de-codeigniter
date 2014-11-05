<h2>Aplicación Dinámica Sencilla (Parte II)</h2>
<p>
	Continuamos desarrollando nuestra aplicación dinámica sencilla. Creamos el controlador <code>home.php</code> que se encargará de procesar las solicitudes de la aplicación. También debemos configurar que sea el controlador por defecto en el archivo <code>routes.php</code>.
</p>
<p>
	Por otra parte creamos el modelo para interactuar con la base de datos, en específico <code>articulos_model.php</code> y dentro de el ubicamos el método <code>lista_articulos()</code> que obtendrá el listado completo de los artículos. Este modelo es instanciado o llamado dentro del controlador <code>home.php</code> donde también vimos la forma de cambiar el nombre de objeto del modelo a uno diferente. Lógicamente para ello debemos cargar la librería <code>database</code> lo cual hacemos en el archivo <code>routes.php</code>.
</p>
<p>
	Finalmente enviamos los datos de manera dinámica a la vista <code>index.php</code> y hacemos un <code>foreach</code> dentro de ella para mostrarlos.
</p>
<p>
	En el repositorio se encuentra la carpeta <code>config</code> que posee los archivos <code>autoload.php</code> y <code>routes.php</code> configurados de la misma manera que en el video. En la carpeta <code>controllers</code> se encuentra el controlador <code>home.php</code>. La carpeta <code>models</code> posee el modelo <code>articulos_model.php</code>. Finalmente en la carpeta <code>views</code> se encuentra la vista <code>index.php</code> utilizada para mostrar el listado de artículos obtenida desde la base de datos.
</p>