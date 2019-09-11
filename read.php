<?php
    $file = fopen ("Assets\Scripts\file_1.txt", "r");
	echo fread ($file, filesize(Assets\Scripts\file_1.txt))
	fclose($file);
	}
?>