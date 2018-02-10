<?php
	$PathFile = file_get_contents($_SERVER['DOCUMENT_ROOT']."/splitfile/Document/Document1.pdf");
	$PathFile .= file_get_contents($_SERVER['DOCUMENT_ROOT']."/splitfile/Document/Document2.pdf");

	file_put_contents($_SERVER['DOCUMENT_ROOT']."/splitfile/document_completo.pdf", $PathFile);

?>