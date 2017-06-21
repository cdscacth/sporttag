<?php
	session_name("Sporttag");
	session_start();

	if ($_SESSION['login'] == false) {
		header('Location: index.php');
		exit;
	}
?>