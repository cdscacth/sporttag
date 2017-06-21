<?php
    include('auth.php');
    if ($_SESSION['stationsleiter'] == false) {
        header('Location: eingabe_gr.php');
    }
    
    $stnr = $_SESSION['stnr'];

    mysql_connect("localhost", "sporttag", "sporttag@cdsc") or die ('Error: ' . mysql_error());
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $i = 1;
        while ($i <= 9) {
            $sta = $_POST[$i];
            mysql_query("UPDATE sporttag.ergebnis_st SET Station$stnr = '$sta' WHERE ergebnis_st.Grnr = $i;") or die ('Error: ' . mysql_error());
            $i++;
        }
    }
    
    $res_ergebnis_st = mysql_db_query("sporttag", "SELECT Station$stnr FROM ergebnis_st") or die ('Error: ' . mysql_error());
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Sporttag: Punkte eintragen</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
                <li><b class="current">Punkte eintragen</b></li>
                <li><a href="stationeninf.php">Stationsbeschreibung</a></li>
                <li><a href="zeitplan_st.php">Zeitplan</a></li>
                <li><a href="ergebnis.php">Ergebnisse</a></li>
                <li><a href="logout.php">Abmelden</a></li>
            </ul>
    </div>
        <div class="icon-menu">
                <img class="icon-hamburger" src="hamburger.png">
            Menü
        </div>
        <h1 align="center">Sporttag 2016: Punkte eintragen</h1>
        <h2 align="center"><?php echo 'Station: ' . $stnr; ?></h2>
        <table align="center">
            <form action="eingabe_st.php" method="post">
                <?php
                    $res_st_zeitplan = mysql_db_query("sporttag", "SELECT * FROM st_zeitplan WHERE Stnr='$stnr'") or die ('Error: ' . mysql_error());
                    $res_benutzer_gr = mysql_db_query("sporttag", "SELECT Vorname, Nachname FROM benutzer_gr") or die ('Error: ' . mysql_error());
            
                    $i = 1;
                    while ($i <= 9) {
                        $grunum = mysql_result($res_st_zeitplan, 0, "$i");
                        $gruname = mysql_result($res_benutzer_gr, $grunum-1, "Vorname") . " " . mysql_result($res_benutzer_gr, $grunum-1, "Nachname");
                        echo '<tr><td align="center">Gruppe <b>' . $grunum . '</b>: ' . $gruname . '<br></td></tr><tr><td align="center"><input type="number" value=' . mysql_result($res_ergebnis_st, $grunum-1) . ' name=' . $grunum . '><br><br></td></tr>';
                        $i++;
                    }
                ?>
                <tr>
                    <td align="center"><input type="submit" value="OK" name="submit" class="OK"></td>
                </tr>
            </form>
        </table>
        <script src="jquery-2.1.4.min.js"></script>
        <script src="app.js"></script>
    </body>
</html>