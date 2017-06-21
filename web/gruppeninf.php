<?php
  include('auth.php');
  if ($_SESSION['gruppenleiter'] == false) {
    header('Location: stationeninf.php');
  }

  mysql_connect("localhost", "sporttag", "sporttag@cdsc") or die ('Error: ' . mysql_error());
  mysql_select_db("gr_schueler");

  $grnr = $_SESSION['grnr'];

  $res = mysql_db_query("sporttag", "select * from gr_schueler where Gruppe='$grnr'");
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    while(($row = mysql_fetch_array($res))) {
      $val = $_POST[$row['ID']];
      $id = $row['ID'];
      mysql_query("UPDATE sporttag.gr_schueler SET ist_da = '$val' WHERE gr_schueler.ID = $id;") or die ('Error updating database');
    }
  }
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
                <li><a href="kontoinfo_gr.php">Übersicht</a></li>
                <li><a href="eingabe_gr.php">Punkte eintragen</a></li>
                <li><b class="current">Schüler in dieser Gruppe</b></li>
                <li><a href="zeitplan_gr.php">Zeitplan</a></li>
                <li><a href="ergebnis.php">Ergebnisse</a></li>
                <li><a href="logout.php">Abmelden</a></li>
            </ul>
    </div>
        <div class="icon-menu">
                <img class="icon-hamburger" src="hamburger.png">
            Menü
        </div>
    <h1 align="center">Sporttag 2016: Schüler in dieser Gruppe</h1>
    <h2 align="center">
    <?php
      echo 'Gruppe: ', $_SESSION['grnr'];
    ?>
    </h2>
    <form action="gruppeninf.php" method="post" align="center">
    <table align="center">
      <tr>
        <th class="tableborder">Name</th>
        <th class="tableborder">Klasse</th>
        <th class="tableborder">Ist da?</th>
        <?php
          $res = mysql_db_query("sporttag", "select * from gr_schueler where Gruppe='$grnr'");
          while(($row = mysql_fetch_array($res))) {
        ?>
      <tr>
        <td align="center" class="tableborder"><?php echo $row['Name'] ?></td>
        <td align="center" class="tableborder"><?php echo $row['Klasse'] ?></td>
        <td class="tableborder">
          <?php 
            echo '<input type="radio" class="radio" value=1 name=';
            echo $row["ID"]; 
            if ($row['ist_da'] === "1") { 
              echo ' checked > Ja'; 
            } else { 
              echo '> Ja'; 
            }
            echo '<br><input type="radio" class="radio" value=0 name=';
            echo $row["ID"];
            if ($row['ist_da'] === "0") { 
              echo ' checked > Nein'; 
            } else { 
              echo '> Nein'; 
            }
            ?>
        </td>
      </tr>
      <?php
        }
      ?>
      <tr>
        <td colspan="3" align="center" class="tableborder"><input type="submit" value="OK" name="submit" class="OK"></td>
      </tr>
    </table>
    </form>
          <script src="jquery-2.1.4.min.js"></script>
        <script src="app.js"></script>
  </body>
</html>