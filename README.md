# Archivos del curso de CodeIgniter

En este repositorio podrás encontrar todos los archivos utilizados en el [Curso de CodeIgniter](http://todoprogramacion.com.ve/cursos/codeigniter) al cual podrás acceder haciendo clic al enlace anterior.

Todos los archivos utilizados en los videos se irán publicando en directorios enumerados con su respectivo nombre para que sean de fácil acceso a todos los participantes del curso.

Dentro de cada directorio encontrarás un archivo `README.md` con la descripción de los archivos contenidos en tal carpeta.

Para otros tutoriales y artículos accede a mi sitio web http://todoprogramacion.com.ve

## Problemas frecuentes

### No funcionan las URL's

Si al intentar llamar a tus URL's recibes un error 404 es debido a que no has colocado el archivo `.htaccess` en el root de tu proyecto.

Si no deseas colocarlo agrega `index.php` en la URL de tu proyecto de la siguiente manera `http://proyecto.com/index.php/controlador/metodo/parametros`.

Puedes encontrar el archivo `.htaccess` en el directorio (02-primeros-pasos)[https://github.com/eborio/curso-de-codeigniter/02-primeros-pasos]

### El navegador muestra un error y se visualiza el código PHP

Si puedes apreciar un mensaje similar a este

- `Message: Cannot modify header information - headers already sent by`

Y observas todo el código PHP de tu controlador en la salida del navegador es porque estás utilizando las etiquetas cortas de PHP `<?` las cuales no están soportadas por las versiones actuales de PHP. Siempre utiliza las etiquetas largas `<?php` para evitar este problema.