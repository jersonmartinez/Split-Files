<?php
	// function Link($dirname){
	// 	$PathFile = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Split-Files/complete_document/complete_document1.pdf");
	// 	$PathFile .= file_get_contents($_SERVER['DOCUMENT_ROOT']."/Split-Files/complete_document/complete_document2.pdf");
	// 	$PathFile .= file_get_contents($_SERVER['DOCUMENT_ROOT']."/Split-Files/complete_document/complete_document3.pdf");

	// 	file_put_contents($_SERVER['DOCUMENT_ROOT']."/Split-Files/complete_document_final.pdf", $PathFile);
	// }

	if (isset($_GET)){
		if (!empty($_GET['dirname']) && is_dir($_GET['dirname'])){
			if (!empty($_GET['type'])){

				$i = 1;
				$File = $_SERVER['DOCUMENT_ROOT']."/Split-Files/".$_GET['dirname']."/".$_GET['dirname'];
				$PathFile = "";
				
				while (is_file($File.$i.".".$_GET['type'])){
					echo "<b>File found:</b> ".$File.$i.".".$_GET['type']."<br/>";
					$PathFile .= file_get_contents($File.$i.".".$_GET['type']);
					$i++;
				}

				file_put_contents($_SERVER['DOCUMENT_ROOT']."/Split-Files/".$_GET['dirname']."_final.".$_GET['type'], $PathFile);
				echo "Finished...";
			} else {
				echo "Enter the filetype: link.php?dirname=".$_GET['dirname']."&type=pdf";
			}
		} else {
			echo "Enter the name directory: link.php?dirname=directory&type=pdf";
		}
	} else {
		echo "URL type GET not found.";
	}
?>