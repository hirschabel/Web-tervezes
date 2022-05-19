<?php
	session_start();
	session_unset();
	session_destroy();
	header("Location: /Projekt_2/index.php");
?>