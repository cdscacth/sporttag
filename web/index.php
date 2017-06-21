<?php
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_name("Sporttag");
      session_start();
   
      $Benutzername = $_POST['Benutzername'];
      $Kennwort = md5($_POST['Kennwort']);
   
      $_SESSION['login'] = false;
      $_SESSION['gruppenleiter'] = false;
      $_SESSION['stationsleiter'] = false;
   
      mysql_connect("localhost", "sporttag", "sporttag@cdsc") or die ('Error: ' . mysql_error());
   
      $res_benutzer_gr = mysql_db_query("sporttag", "select * from benutzer_gr where Benutzername='$Benutzername' and Kennwort='$Kennwort'") or die ('Error: ' . mysql_error());
      if (mysql_num_rows($res_benutzer_gr) == 1) {
         $_SESSION['id'] = mysql_result($res_benutzer_gr, 0, "ID");
         $_SESSION['vorname'] = mysql_result($res_benutzer_gr, 0, "Vorname");
         $_SESSION['nachname'] = mysql_result($res_benutzer_gr, 0, "Nachname");
         $_SESSION['grnr'] = mysql_result($res_benutzer_gr, 0, "Grnr");
         $_SESSION['login'] = true;
         $_SESSION['gruppenleiter'] = true;
         header('Location: kontoinfo_gr.php');
         exit;
      }

      $res_benutzer_st = mysql_db_query("sporttag", "select * from benutzer_st where Benutzername='$Benutzername' and Kennwort='$Kennwort'") or die ('Error: ' . mysql_error());
      if (mysql_num_rows($res_benutzer_st) == 1) {
         $_SESSION['id'] = mysql_result($res_benutzer_st, 0, "ID");
         $_SESSION['vorname'] = mysql_result($res_benutzer_st, 0, "Vorname");
         $_SESSION['nachname'] = mysql_result($res_benutzer_st, 0, "Nachname");
         $_SESSION['stnr'] = mysql_result($res_benutzer_st, 0, "Stnr");
         $_SESSION['login'] = true;
         $_SESSION['stationsleiter'] = true;
         header('Location: kontoinfo_st.php');
         exit;
      }

      mysql_close() or die ('Error: ' . mysql_error());
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
   <head>
      <title>Sporttag: Anmeldung</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
      <link rel="stylesheet" type="text/css" href="style.css" />
   </head>
   <body>
      <h1 align="center">Sporttag 2016: Anmeldung</h1>
      <?php
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_SESSION['login'] == false) {
               echo "<h3 align='center' style='color: red;'>Falscher Benutzername und/oder falsches Kennwort</h3>";
            }
         }
      ?>
      <form action="index.php" method="post">
         <table align="center">
            <tr>
               <td align="right">Benutzername:</td>
               <td><input type="text" name="Benutzername" class="intext" /></td>
            </tr>
            <tr>
               <td align="right">Kennwort:</td>
               <td><input type="password" name="Kennwort" class="intext" /></td>
            </tr>
            <tr>
               <td></td>
               <td><input type="submit" value="Einloggen" /></td>
            </tr>
         </table>
      </form>
   </body>
</html>