<?php
  include('auth.php');
  mysql_connect("localhost", "sporttag", "sporttag@cdsc");
  mysql_select_db("sporttag");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
  <head>
    <title>Sporttag: Ergebnisse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="refresh" content="5">
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
  <div class="menu">
      <div class="close">
        <img class="icon-close" src="close.png">
        Schliessen
       </div>
      <ul>
      <?php 
      	if ($_SESSION['stationsleiter'] == false) {
        	echo '<li><a href="kontoinfo_gr.php">Übersicht</a></li>';
        	echo '<li><a href="eingabe_gr.php">Punkte eintragen</a></li>';
        	echo '<li><a href="gruppeninf.php">Schüler in dieser Gruppe</a></li>';
        	echo '<li><a href="zeitplan_gr.php">Zeitplan</a></li>';
        	echo '<li><b class="current">Ergebnisse</b></li>';
        	echo '<li><a href="logout.php">Abmelden</a></li>';
    	} else {
    		echo '<li><a href="kontoinfo_st.php">Übersicht</a></li>';
        	echo '<li><a href="eingabe_st.php">Punkte eintragen</a></li>';
        	echo '<li><a href="stationeninf.php">Schüler in dieser Gruppe</a></li>';
        	echo '<li><a href="zeitplan_st.php">Zeitplan</a></li>';
        	echo '<li><b class="current">Ergebnisse</b></li>';
        	echo '<li><a href="logout.php">Abmelden</a></li>';
    	}
      ?>
      </ul>
  </div>
  <div class="icon-menu">
                <img class="icon-hamburger" src="hamburger.png">
            Menü
        </div>
    <h1 align="center">Sporttag 2016: Ergebnisse</h1>
    <table align="center">
      <tr>
        <th class="tableborder" class="tableborder">Gruppe</td>
        <?php
          $i = 1;
          while ($i <= 9) {
            echo '<th class="tableborder" class="tableborder">Station<br>' . $i . '</th>';
            $i++;
          }
        ?>
      </tr>
      <tr>
        <?php
          $resgr = mysql_query("SELECT * FROM ergebnis_gr");
          $ressta = mysql_query("SELECT Station1 FROM ergebnis_st");
          $resstb = mysql_query("SELECT Station2 FROM ergebnis_st");
          $resstc = mysql_query("SELECT Station3 FROM ergebnis_st");
          $resstd = mysql_query("SELECT Station4 FROM ergebnis_st");
          $resste = mysql_query("SELECT Station5 FROM ergebnis_st");
          $resstf = mysql_query("SELECT Station6 FROM ergebnis_st");
          $resstg = mysql_query("SELECT Station7 FROM ergebnis_st");
          $ressth = mysql_query("SELECT Station8 FROM ergebnis_st");
          $ressti = mysql_query("SELECT Station9 FROM ergebnis_st");
                    
          while(($rowgr = mysql_fetch_array($resgr)) && ($rowsta = mysql_fetch_array($ressta)) && ($rowstb = mysql_fetch_array($resstb)) && ($rowstc = mysql_fetch_array($resstc)) && ($rowstd = mysql_fetch_array($resstd)) && ($rowste = mysql_fetch_array($resste)) && ($rowstf = mysql_fetch_array($resstf)) && ($rowstg = mysql_fetch_array($resstg)) && ($rowsth = mysql_fetch_array($ressth)) && ($rowsti = mysql_fetch_array($ressti)) ) {
        ?>
      <tr>
        <th class="tableborder"><?php echo $rowgr['Grnr'] ?></th>
        <td align="center" class="tableborder"><?php if ($rowsta['Station1'] == $rowgr['Station1']) {echo $rowgr['Station1'];} else { echo "-*"; }?></td>
        <td align="center" class="tableborder"><?php if ($rowstb['Station2'] == $rowgr['Station2']) {echo $rowgr['Station2'];} else { echo "-*"; }?></td>
        <td align="center" class="tableborder"><?php if ($rowstc['Station3'] == $rowgr['Station3']) {echo $rowgr['Station3'];} else { echo "-*"; }?></td>
        <td align="center" class="tableborder"><?php if ($rowstd['Station4'] == $rowgr['Station4']) {echo $rowgr['Station4'];} else { echo "-*"; }?></td>
        <td align="center" class="tableborder"><?php if ($rowste['Station5'] == $rowgr['Station5']) {echo $rowgr['Station5'];} else { echo "-*"; }?></td>
        <td align="center" class="tableborder"><?php if ($rowstf['Station6'] == $rowgr['Station6']) {echo $rowgr['Station6'];} else { echo "-*"; }?></td>
        <td align="center" class="tableborder"><?php if ($rowstg['Station7'] == $rowgr['Station7']) {echo $rowgr['Station7'];} else { echo "-*"; }?></td>
        <td align="center" class="tableborder"><?php if ($rowsth['Station8'] == $rowgr['Station8']) {echo $rowgr['Station8'];} else { echo "-*"; }?></td>
        <td align="center" class="tableborder"><?php if ($rowsti['Station9'] == $rowgr['Station9']) {echo $rowgr['Station9'];} else { echo "-*"; }?></td>
      </tr>
        <?php
          }
        ?>
    </table>
    <p align="center">* Falls "-" erscheint, sind die eingetragenen Werte der Stations- und Gruppenleiter nicht gleich. Entweder hat einer der Beiden nicht eingetragen oder beide Leiter sind sich uneinig.</p>
    <?php
      $res_st_beschreibung = mysql_query("SELECT Name FROM st_beschreibung");
    ?>
    <table align="center">
      <tr>
        <th class="tableborder">Nr.</th>
        <th class="tableborder">Name</th>
        <th class="tableborder">Rekord</th>
      </tr>
      <tr>
        <th class="tableborder">Station 1</th>
        <td align=center class="tableborder"><?php echo mysql_result($res_st_beschreibung, 0, "Name") ?></td>
        <td align=center class="tableborder">
                  <?php
                     $resa = mysql_query("SELECT Grnr, Station1 FROM ergebnis_gr WHERE Station1=(SELECT MAX(Station1) FROM ergebnis_gr);");
                     echo mysql_result($resa, 0, "Station1"), " (Gruppe ", mysql_result($resa, 0, "Grnr"), ")"
                  ?>
                </td>
      </tr>
      <tr>
                <th class="tableborder">Station 2</th>
                <td align=center class="tableborder"><?php echo mysql_result($res_st_beschreibung, 1, "Name") ?></td>
                <td align=center class="tableborder">
                  <?php
                     $resb = mysql_query("SELECT Grnr, Station2 FROM ergebnis_gr WHERE Station2=(SELECT MAX(Station2) FROM ergebnis_gr);");
                     echo mysql_result($resb, 0, "Station2"), " (Gruppe ", mysql_result($resb, 0, "Grnr"), ")"
                  ?>
                </td>
      </tr>
      <tr>
                <th class="tableborder">Station 3</th>
                <td align=center class="tableborder"><?php echo mysql_result($res_st_beschreibung, 2, "Name") ?></td>
                <td align=center class="tableborder">
                  <?php
                     $resc = mysql_query("SELECT Grnr, Station3 FROM ergebnis_gr WHERE Station3=(SELECT MAX(Station3) FROM ergebnis_gr);");
                     echo mysql_result($resc, 0, "Station3"), " (Gruppe ", mysql_result($resc, 0, "Grnr"), ")"
                  ?>
                </td>
      </tr>
      <tr>
                <th class="tableborder">Station 4</th>
                <td align=center class="tableborder"><?php echo mysql_result($res_st_beschreibung, 3, "Name") ?></td>
                <td align=center class="tableborder">
                  <?php
                     $resd = mysql_query("SELECT Grnr, Station4 FROM ergebnis_gr WHERE Station4=(SELECT MAX(Station4) FROM ergebnis_gr);");
                     echo mysql_result($resd, 0, "Station4"), " (Gruppe ", mysql_result($resd, 0, "Grnr"), ")"
                  ?>
                </td>
      </tr>
      <tr>
                <th class="tableborder">Station 5</th>
                <td align=center class="tableborder"><?php echo mysql_result($res_st_beschreibung, 4, "Name") ?></td>
                <td align=center class="tableborder">
                  <?php
                     $rese= mysql_query("SELECT Grnr, Station5 FROM ergebnis_gr WHERE Station5=(SELECT MAX(Station5) FROM ergebnis_gr);");
                     echo mysql_result($rese, 0, "Station5"), " (Gruppe ", mysql_result($rese, 0, "Grnr"), ")"
                  ?>
                </td>
      </tr>
      <tr>
                <th class="tableborder">Station 6</th>
                <td align=center class="tableborder"><?php echo mysql_result($res_st_beschreibung, 5, "Name") ?></td>
                <td align=center class="tableborder">
                  <?php
                     $resf = mysql_query("SELECT Grnr, Station6 FROM ergebnis_gr WHERE Station6=(SELECT MAX(Station6) FROM ergebnis_gr);");
                     echo mysql_result($resf, 0, "Station6"), " (Gruppe ", mysql_result($resf, 0, "Grnr"), ")"
                  ?>
                </td>
      </tr>
      <tr>
                <th class="tableborder">Station 7</th>
                <td align=center class="tableborder"><?php echo mysql_result($res_st_beschreibung, 6, "Name") ?></td>
                <td align=center class="tableborder">
                  <?php
                     $resg = mysql_query("SELECT Grnr, Station7 FROM ergebnis_gr WHERE Station7=(SELECT MAX(Station7) FROM ergebnis_gr);");
                     echo mysql_result($resg, 0, "Station7"), " (Gruppe ", mysql_result($resg, 0, "Grnr"), ")"
                  ?>
                </td>
      </tr>
      <tr>
                <th class="tableborder">Station 8</th>
                <td align=center class="tableborder"><?php echo mysql_result($res_st_beschreibung, 7, "Name") ?></td>
                <td align=center class="tableborder">
                  <?php
                     $resh = mysql_query("SELECT Grnr, Station8 FROM ergebnis_gr WHERE Station8=(SELECT MAX(Station8) FROM ergebnis_gr);");
                     echo mysql_result($resh, 0, "Station8"), " (Gruppe ", mysql_result($resh, 0, "Grnr"), ")"
                  ?>
                </td>
      </tr>
      <tr>
                <th class="tableborder">Station 9</th>
                <td align=center class="tableborder"><?php echo mysql_result($res_st_beschreibung, 8, "Name") ?></td>
                <td align=center class="tableborder">
                  <?php
                     $resi = mysql_query("SELECT Grnr, Station9 FROM ergebnis_gr WHERE Station9=(SELECT MAX(Station9) FROM ergebnis_gr);");
                     echo mysql_result($resi, 0, "Station9"), " (Gruppe ", mysql_result($resi, 0, "Grnr"), ")"
                  ?>
                </td>
      </tr>
        </table>
        <script src="jquery-2.1.4.min.js"></script>
    <script src="app.js"></script>
   </body>
</html>
