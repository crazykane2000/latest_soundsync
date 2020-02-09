<?php 
	//print_r($_FILES);
	echo move_uploaded_file($_FILES['file']['tmp_name'], "tracks/".$_FILES['file']['name']);
?> 


