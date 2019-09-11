<?php
    $text1 = $_POST["Send"];
	
	if ($text1 != "")
	{
		$file = fopen ("file_1.txt", "a");
		fwrite ($file, $text1);
		fclose($file);
	}
?>
