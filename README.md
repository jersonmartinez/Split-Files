# Cortar y Unir Archivos

Proyecto web para cortar y unir ficheros o archivos de cualquier extensión o formato.

## Introducción
Existen ficheros o archivos que los procesadores y gestores de datos, debido a su gran longitud y limitación de recursos del equipo, es difícil procesarlos.

De la misma manera en que existen grandes cantidades de datos alojados en un mismo fichero, también las hay en muchos pequeños ficheros que se pueden resumir en menos o bien, en un sólo fichero.

## Problemática
Los ficheros son muy pesados para que un equipo con recursos limitados pueda procesarlo debidamente y este responda de una forma no tan atinada a la esperada y provoque algún desborde de memoria y por ende, caiga en combate.

### Figure el siguiente escenario
Se necesita realizar pruebas a un formulario de acceso, como el habitual login de los sitios webs, aplicando un ataque de fuerza bruta con algún algoritmo escrito en el lenguaje de preferencia, donde este utilizará un diccionario para descubrir la contraseña de algún usuario o correo electrónico registrado en el sistema víctima. La metodología es la lógica, tomará alguna palabra y la irá probando haciendo el ataque al servidor. 

En situaciones, estos ataques fracasan por las limitantes de recursos del ordenador.

Lo que le acabo de comentar, solamente es un ejemplo del montón donde se pueden utilizar diccionarios, tomando a este como un fichero pesado, que podría ser dividido en varias partes, para luego ser analizados uno por uno y así lograr terminarlo.

Además de cortarlos, si ha desechado el fichero original, podrá volverlo a unir o juntar en un sólo fichero.

### Prerrequisitos
Para utilizar este proyecto deberá tener instalado el siguiente servicio y herramienta.

```
1- Apache 2		|		NGinx
2- PHP 4.3.0 		| >  superiores
3- Git			| Descargar el paquete del proyecto.
```
Para no complicarse pueden instalar algún gestor de paquetes como WAMP(Windows), LAMPP (Linux) o XAMPP (Todas las plataformas).

### Instalación
En caso de GNU / Linux. 
```
git clone https://github.com/SideMasterGM/Split-Files.git /var/www/html/Split-Files
```

En caso de Windows, con XAMPP.
```
git clone https://github.com/SideMasterGM/Split-Files.git C:/xampp/htdocs/Split-Files
```

## Modo de Uso
No existen formularios elaborados, sólo el algoritmo, por lo tanto la información se pasa por parámetros utilizando la variable global GET.

### Cortar archivos o ficheros
Seleccione el archivo a cortar, cópielo en la raíz del proyecto y luego ejecute el proyecto en el navegador de la siguiente manera.

* **Parámetros** - *file=complete_document.pdf, parts=3* - [split.php]
```
https://127.0.0.1/Split-Files/split.php?file=complete_document.pdf&parts=3
```

```
split.php 	= Script que ejecuta el algoritmo de cortado.
file  		= Ruta del fichero o archivo a cortar.
parts 		= Número de partes a ser cortado.
```
Se creará un directorio con el nombre del archivo donde guardará las partes asignadas, todo en el proyecto raíz.

### Unir archivos o ficheros
Los ficheros que se desean unir deben estar escritos con el mismo nombre del directorio, obviamente, se tendrá que enumerar esos ficheros, ejemplo: document/document1.pdf, document/document2.pdf, etc.

* **Parámetros** - *dirname=complete_document, type=pdf* - [link.php]
```
https://127.0.0.1/Split-Files/link.php?dirname=complete_document&type=pdf
```

```
link.php 	= Script que ejecuta el algoritmo para unir.
dirname		= Ruta del directorio donde se encuentran los ficheros a unir.
type 		= La extensión o formato de los archivos a unir.
```
Se creará un el fichero único en la raíz del proyecto, con el nombre del directorio más la palabra "final" en este, ejemplo: complete_document_final.pdf.

Esta acción se puede hacer con cualquier fichero, con cualquier formato, no se preocupen si los ficheros multimedia que son acortados no funcionan individualmente, es normal, no pueden ejecutarse porque tienen cabeceras que las necesitan los demás, pero claro, si se vuelve a unir, todo funcionará con normalidad. Los ficheros de tipo texto, si podrán ser ejecutados con toda normalidad.

## Authors

* **Jerson A. Martínez M.** - *Ing. Telemática (Redes, Telecomunicaciones y Desarrollo de Software)* - [LinkedIn]
https://www.linkedin.com/in/jersonmartinezsm/

* **Side Master** - *Formador en YouTube | Canal de contenido variado sobre Informática (Shell Script, Programación, Hacking, Networking, etc.)* - [Channel 1]

https://www.youtube.com/user/sidemastersupremo/

* **Core Stack** - *Formador en YouTube | Canal de contenido variado sobre Informática (Shell Script, Programación, Hacking, Networking, etc.)* - [Channel 2]

https://www.youtube.com/user/gvideosmtutorialesgm