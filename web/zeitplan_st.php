<?php
  include('auth.php');
  if ($_SESSION['stationsleiter'] == false) {
    header('Location: zeitplan_gr.php');
  }

  mysql_connect("localhost", "sporttag", "sporttag@cdsc") or die ('Error: ' . mysql_error());
  
  $stnr = $_SESSION['stnr'];
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
        <li><a href="stationeninf.php">Stationsbeschreibung</a></li>
        <li><b class="current">Zeitplan</b></li>
        <li><a href="ergebnis.php">Ergebnisse</a></li>
        <li><a href="logout.php">Abmelden</a></li>
      </ul>
  </div>
  <div class="icon-menu">
                <img class="icon-hamburger" src="hamburger.png">
            Menü
        </div>
    <h1 align="center">Sporttag 2016: Zeitplan</h1>
    <h2 align="center">
    <?php
      echo 'Station: ', $_SESSION['stnr'];
    ?>
    </h2>
    <table align="center">
        <tr>
          <th class="tableborder">Gruppe</th>
          <th class="tableborder">Leiter</th>
          <th class="tableborder">Zeit</th> 
        </tr>
        <tr>
          <?php
            $res_st_zeitplan = mysql_db_query("sporttag", "SELECT * FROM st_zeitplan WHERE Stnr='$stnr'") or die ('Error: ' . mysql_error());
            $res_benutzer_gr = mysql_db_query("sporttag", "SELECT Vorname, Nachname FROM benutzer_gr") or die ('Error: ' . mysql_error());

            $i = 1;
            while ($i <= 3) {
              $grunum = mysql_result($res_st_zeitplan, 0, "$i");
              $gruname = mysql_result($res_benutzer_gr, $grunum-1, "Vorname") . " " . mysql_result($res_benutzer_gr, $grunum-1, "Nachname");
              echo '<th class="tableborder">' . $grunum . '</th><td align="center" class="tableborder">' . $gruname . '</td><td align="center" class="tableborder">';
              switch ($i) {
                case 1:
                  echo "8:20 - 8:35";
                  break;
                case 2:
                  echo "8:40 - 8:55";
                  break;
                case 3:
                  echo "9:00 - 9:15";
                  break;
              }
              echo "</td></tr>";
              $i++;              
            }

            echo '<tr><th class="tableborder">-</th><td align=center class="tableborder">PAUSE</td><td align=center class="tableborder">9:15 - 9:30</td></tr>';
            
            while ($i <= 6) {
              $grunum = mysql_result($res_st_zeitplan, 0, "$i");
              $gruname = mysql_result($res_benutzer_gr, $grunum-1, "Vorname") . " " . mysql_result($res_benutzer_gr, $grunum-1, "Nachname");
              echo '<th class="tableborder">' . $grunum . '</th><td align="center" class="tableborder">' . $gruname . '</td><td align="center" class="tableborder">';
              switch ($i) {
                case 4:
                  echo "9:35 - 9:50";
                  break;
                case 5:
                  echo "9:55 - 10:10";
                  break;
                case 6:
                  echo "10:15 - 10:30";
                  break;
              }
              echo "</td></tr>";
              $i++;              
            }

            echo '<tr><th class="tableborder">-</th><td align=center class="tableborder">PAUSE</td><td align=center class="tableborder">10:30 - 10:45</td></tr>';
            

            while ($i <= 9) {
              $grunum = mysql_result($res_st_zeitplan, 0, "$i");
              $gruname = mysql_result($res_benutzer_gr, $grunum-1, "Vorname") . " " . mysql_result($res_benutzer_gr, $grunum-1, "Nachname");
              echo '<th class="tableborder">' . $grunum . '</th><td align="center" class="tableborder">' . $gruname . '</td><td align="center" class="tableborder">';
              switch ($i) {
                case 7:
                  echo "10:50 - 11:05";
                  break;
                case 8:
                  echo "11:10 - 11:25";
                  break;
                case 9:
                  echo "11:30 - 11:45";
                  break;
              }
              echo "</td></tr>";
              $i++;              
            }
            echo '<tr><th class="tableborder">-</th><td align=center class="tableborder">MITTAGSPAUSE</td><td align=center class="tableborder">11:45 - 13:05</td></tr>';
            
          ?>
        </tr>
    </table>
    <script src="jquery-2.1.4.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>