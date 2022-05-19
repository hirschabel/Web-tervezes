<?php
	session_start();
    include "fajlkezeles.php";
    $fiokok = loadUsers("../users.txt");

    $uzenet = "";

    
    if (isset($_POST["login"])) {
      if (!isset($_POST["felhasznalonev"]) || !isset($_POST["jelszo"])) {
        $uzenet = "<strong>Hiba:</strong> Adj meg minden adatot!";
      } else {
        $felhasznalonev = strtolower($_POST["felhasznalonev"]);
        $jelszo = $_POST["jelszo"];

        $uzenet = "Sikertelen belépés! A belépési adatok nem megfelelők!";

        foreach ($fiokok as $fiok) {
			    if ($fiok["felhasznalonev"] === $felhasznalonev && $fiok["jelszo"] === $jelszo) {
			    	$uzenet = "Sikeres belépés!";
			    	$_SESSION["user"] = $fiok;
            header("Location: /Projekt_2/index.php");
			    	break;
			    }
        }
      }
    }
?>


<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Bejelentkezés</title>
    <meta charset="UTF-8"/>
  </head>
  <body>
    <form action="login.php" method="POST">
      <label>Felhasználónév: <input type="text" name="felhasznalonev"/></label> <br/>
      <label>Jelszó: <input type="password" name="jelszo"/></label> <br/>
      <input type="submit" name="login"/> <br/><br/>
    </form>
    <?php
        echo $uzenet;
    ?>
  </body>
</html>