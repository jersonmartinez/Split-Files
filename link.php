<?php
	ini_set('display_errors', 1);
    error_reporting(-1);

	function joinFile($dirname, $type){
		#Se inicializa la variable iteradora.
		$i = 1;

		#Se obtienen los datos de la variable global GET
		$File = $_SERVER['DOCUMENT_ROOT']."/Split-Files/".$_GET['dirname']."/".$_GET['dirname'];
		$PathFile = "";
		
		#Se recorren los ficheros que existan.
		while (is_file($File.$i.".".$_GET['type'])){
			echo "<b>File found:</b> ".$File.$i.".".$_GET['type']."<br/>";

			#Se une el contenido de los ficheros encontrados.
			$PathFile .= file_get_contents($File.$i.".".$_GET['type']);
			$i++;
		}

		#Se crea un sólo fichero con el contenido de los ficheros encontrados.
		file_put_contents($_SERVER['DOCUMENT_ROOT']."/Split-Files/".$_GET['dirname']."_final.".$_GET['type'], $PathFile);
		echo "Finished...";
	}

	#Verificación de los parámetros de la variable global GET
	if (isset($_GET))
		if (!empty($_GET['dirname']) && is_dir($_GET['dirname']))
			if (!empty($_GET['type']))
				#Parámetro 1: Nombre del directorio, Parámetro 2: Extensión de los ficheros
				joinFile($_GET['dirname'], $_GET['type']);
			else
				echo "Enter the filetype: link.php?dirname=".$_GET['dirname']."&type=pdf";
		else
			echo "Enter the name directory: link.php?dirname=directory&type=pdf";
	else
		echo "URL type GET not found.";
?>