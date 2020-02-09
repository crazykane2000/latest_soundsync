<?php session_start();
	session_destroy();
	session_unset();
	header('Location:index.php?choice=error&value=Session Closed, please Login  Again.');
	exit();
 ?>