<?php
    ini_set('display_errors', 1);
    error_reporting(-1);

	function splitFile($archivoOrigen, $cantidadPartes) {
	    /*Información que contiene información de la ruta del fichero (Array)*/
	    $PathFile = pathinfo($archivoOrigen);

	    /*Se crea un directorio con el mismo nombre del fichero, sólo en caso de que no exista*/
	    $pathDestino = $PathFile['dirname']."/".$PathFile['filename']."/";
	    if (!file_exists($pathDestino))
	        @mkdir($pathDestino, 0744);

	    /*Se apertura el fichero en modo lectura*/
	    $fileHandle = fopen($archivoOrigen, "r");

	    /*Se recorre la cantidad de partes en las que se dividirá el fichero*/
	    for ($nroParte = 1; $nroParte <= $cantidadPartes; $nroParte++) {

	        /*Se lee una parte del fichero*/
	        $filePart = fread($fileHandle, (filesize($archivoOrigen) / $cantidadPartes));

	        /*Se crea el fichero y se ejecuta*/
	        $filePartNew = fopen($pathDestino.$PathFile['filename'].$nroParte.".".$PathFile['extension'], 'w+');

	        /*Se hace un volcado de la información limite que extrajo del fichero original a la parte*/
	        fwrite($filePartNew, $filePart);

	        /*Se cierra la parte aperturada*/
	        fclose($filePartNew);
	    }

	    /*Se cierra el fichero original*/
	    fclose($fileHandle);
	}

	#Parámetro 1: Ruta del fichero a dividir, Parámetro 2: Cantidad de partes
	splitFile($_SERVER['DOCUMENT_ROOT']."/splitfile/Document.pdf", 2);