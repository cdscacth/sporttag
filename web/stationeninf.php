<?php
  include('auth.php');
  if ($_SESSION['stationsleiter'] == false) {
    header('Location: gruppeninf.php');
  }

  mysql_connect("localhost", "sporttag", "sporttag@cdsc") or die ('Error: ' . mysql_error());
  mysql_select_db("st_beschreibung");
  
  $stnr = $_SESSION['stnr'];

  $res = mysql_db_query("sporttag", "select * from st_beschreibung where Stnr='$stnr'");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Sporttag: Informationen</title>
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
        <li><a href="kontoinfo_st.php">Übersicht</a></li>
        <li><a href="eingabe_st.php">Punkte eintragen</a></li>
        <li><b class="current">Stationsbeschreibung</b></li>
        <li><a href="zeitplan_st.php">Zeitplan</a></li>
        <li><a href="ergebnis.php">Ergebnisse</a></li>
        <li><a href="logout.php">Abmelden</a></li>
      </ul>
  </div>
  <div class="icon-menu">
                <img class="icon-hamburger" src="hamburger.png">
            Menü
        </div>
    <h1 align="center">Sporttag 2016: Informationen</h1>
    <h2 align="center">
    <?php
      echo 'Station: ', $_SESSION['stnr'];
    ?>
    </h2>
    <h3 align="center">Stationsbeschreibung</h3>
    <table align="center">
      <tr>
        <td align="center" class="tableborder">Name</td>
        <td align="center" class="tableborder"><?php echo mysql_result($res, 0, "Name") ?></td>
      </tr>
      <tr>
        <td align="center" class="tableborder">Ort</td>
        <td align="center" class="tableborder"><?php echo mysql_result($res, 0, "Ort") ?></td>
      </tr>
      <tr>
        <td align="center" class="tableborder">Material</td>
        <td align="center" class="tableborder"><?php echo mysql_result($res, 0, "Material") ?></td>
      </tr>
      <tr>
        <td align="center" class="tableborder">Aufbau</td>
        <td align="center" class="tableborder"><?php echo mysql_result($res, 0, "Aufbau") ?></td>
      </tr>
      <tr>
        <td align="center" class="tableborder">Spielerklärung</td>
        <td align="center" class="tableborder"><?php echo mysql_result($res, 0, "Spielerklaerung") ?></td>
      </tr>
      <tr>
        <td align="center" class="tableborder">Punktebestimmung</td>
        <td align="center" class="tableborder"><?php echo mysql_result($res, 0, "Punktebestimmung") ?></td>
      </tr>
      <tr>
        <td align="center" class="tableborder">Weitere Infos</td>
        <td align="center" class="tableborder"><?php echo mysql_result($res, 0, "Infos") ?></td>
      </tr>
    </table>   
    <?php
    	if ($_SESSION['stnr'] == 1) {
    		?>
    		    	<h3 align="center">Begriffe</h3>
    	<table align="center">
      <tr>
        <th align="center" class="tableborder">Nr.</td>
        <th align="center" class="tableborder">Begriff</td>
      </tr>
      <?php
    		$resgr = mysql_query("SELECT * FROM livingpics");
    		while (($rowgr = mysql_fetch_array($resgr))) {

    ?>

      <tr>
        <td align="center" class="tableborder"><?php echo $rowgr['Nr']; ?></td>
        <td align="center" class="tableborder"><?php echo $rowgr['Begriff']; ?></td>
      </tr>
   	<?php
   			}
   			echo "</table>";
    	}
    ?>

    <?php
    	if ($_SESSION['stnr'] == 9) {
    		?>
    		    	<h3 align="center">Liste mit Gegenständen</h3>
    	<table align="center">
      <tr>
        <th align="center" class="tableborder">Nr.</td>
        <th align="center" class="tableborder">Gegenstand</td>
      </tr>
      <?php
    		$resgr = mysql_query("SELECT * FROM gegenst");
    		while (($rowgr = mysql_fetch_array($resgr))) {

    ?>

      <tr>
        <td align="center" class="tableborder"><?php echo $rowgr['Nr']; ?></td>
        <td align="center" class="tableborder"><?php echo $rowgr['Gegenst']; ?></td>
      </tr>
   	<?php
   			}
   			echo "</table>";
    	}
    ?>
    <script src="jquery-2.1.4.min.js"></script>
        <script src="app.js"></script>
  </body>
</html>