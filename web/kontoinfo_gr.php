<?php
  include('auth.php');
  if ($_SESSION['gruppenleiter'] == false) {
	header('Location: kontoinfo_st.php');
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<title>Sporttag: Übersicht</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
  <div class="menu">
			<div class="close">
				<img class="icon-close" src="close.png">
				Schliessen
			 </div>
			<ul>
				<li><b class="current">Übersicht</b></li>
				<li><a href="eingabe_gr.php">Punkte eintragen</a></li>
				<li><a href="gruppeninf.php">Schüler in dieser Gruppe</a></li>
				<li><a href="zeitplan_gr.php">Zeitplan</a></li>
				<li><a href="ergebnis.php">Ergebnisse</a></li>
				<li><a href="logout.php">Abmelden</a></li>
			</ul>
	</div>
		<div class="icon-menu">
				<img class="icon-hamburger" src="hamburger.png">
			Menü
		</div>
	<h1 align="center">Sporttag 2016: Übersicht</h1>
	<p align="center">
	  <?php
		echo "Du bist als Gruppenleiter <b>" . $_SESSION['vorname'] .  " " . $_SESSION['nachname'] . " </b>von <b>Gruppe " . $_SESSION['grnr'] . " </b>angemeldet.<p>";
	  ?>
	</p>
	<script src="jquery-2.1.4.min.js"></script>
		<script src="app.js"></script>
  </body>
</html>