<?php
     session_name("Sporttag");
     session_start();
     session_destroy();
     header('Location: index.php');
?>