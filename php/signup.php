<?php
	require "fajlkezeles.php";

	$fiokok = loadUsers("../users.txt");

	$hibak = [];
	$siker = FALSE;

	if (isset($_POST["signup"])) {
		$felhasznalonev = "";
		$email = "";
		$email2 = "";
		$jelszo = "";
		$jelszo2 = "";
		$eletkor = "";
		$nem = NULL;
		$evszakok = NULL;
		// FELHASZNALONEV
		if (!isset($_POST["felhasznalonev"]) || trim($_POST["felhasznalonev"]) === "") {
			$hibak[] = "A felhasználónév megadása kötelező!";
		} else {
			$felhasznalonev = $_POST["felhasznalonev"];
			if(strlen($felhasznalonev) < 3 || strlen($felhasznalonev) > 20) {
				$hibak[] = "A felhasználónév hossza nem megfelelő! [3, 20]";
			}
			if(preg_match("/^[a-zA-Z0-9_]*$/", $felhasznalonev) != 1) {
				$hibak[] = "A felhasználónév csak a következő karaktereket tartalmazhatja: a-z, A-Z, 0-9, _";
			}
			foreach ($fiokok as $fiok) {
				if ($fiok["felhasznalonev"] === $felhasznalonev) {
					$hibak[] = "A felhasználónév már foglalt!";
				}
			}
		}
		// EMAIL
		if (!isset($_POST["email"]) || trim($_POST["email"]) === "" ) {
			$hibak[] = "Az email cím megadása kötelező!";
		} else {
			$email = $_POST["email"];
			if(!preg_match("/^[0-9a-zA-Z\.-]+@([0-9a-z-]+\.)+[a-z]{2,4}$/", $email)) {
				$hibak[] = "Az email cím formátuma helytelen!";
			}
			foreach ($fiokok as $fiok) {
				if ($fiok["email"] === $email) {
					$hibak[] = "Az email cím már foglalt!";
				}
			}
		}
		// EMAIL 2
		if (!isset($_POST["email2"]) || trim($_POST["email2"]) === "" ) {
			$hibak[] = "Az ellenőrző email cím megadása kötelező!";
		} else {
			$email2 = $_POST["email2"];
			if($email2 !== $email) {
				$hibak[] = "Az email címnek egyeznie kell az ellenőző email címmel!";
			}
		}
		// JELSZO
		if (!isset($_POST["jelszo"]) || trim($_POST["jelszo"]) === "" ) {
			$hibak[] = "A jelszó megadása kötelező!";
		} else {
			$jelszo = $_POST["jelszo"];
			if(strlen($jelszo) < 8 || strlen($jelszo) > 20) {
				$hibak[] = "A jelszó hossza nem megfelelő! [8, 20]";
			}
			if (preg_match("/^[a-zA-z0-9_]*$/", $jelszo) != 1) {
				$hibak[] = "A jelszó csak a következő karaktereket tartalmazhatja: a-z, A-z, 0-9, _";
			}
		}
		// JELSZO 2
		if (!isset($_POST["jelszo2"]) || trim($_POST["jelszo2"]) === "") {
			$hibak[] = "Az ellenőrző jelszó megadása kötelező!";
		} else {
			$jelszo2 = $_POST["jelszo2"];
			if($jelszo !== $jelszo2) {
				$hibak[] = "A jelszó és az ellenőrző jelszó nem egyezik!";
			}
		}
		// ELETKOR
		if (!isset($_POST["eletkor"]) || trim($_POST["eletkor"]) === "") {
			$hibak[] = "Az életkor megadása kötelező!";
		} else {
			$eletkor = $_POST["eletkor"];
			if($eletkor < 18) {
				$hibak[] = "Csak 18 éves kortól lehet regisztrálni!";
			}
		}
		// NEM
		if (!isset($_POST["nem"]) || trim($_POST["nem"]) === "") {
			$hibak[] = "A nem megadása kötelező!";
		} else {
			$nem = $_POST["nem"];
		}
		// EVSZAKOK
		if (!isset($_POST["evszakok"]) || count($_POST["evszakok"]) < 1) {
			$hibak[] = "Legalább 1 evszakot kötelező kiválasztani!";
		}
		else {
			$evszakok = $_POST["evszakok"];
		}
		// ADATMENTES
		if (count($hibak) === 0) {
			$fiokok[] = ["felhasznalonev" => strtolower($felhasznalonev), "email" => $email, "jelszo" => $jelszo, "eletkor" => $eletkor, "nem" => $nem, "evszakok" => $evszakok];
			saveUsers("../users.txt", $fiokok);
			$siker = TRUE;
		} else {
			$siker = FALSE;
		}
	}
?>

<?php
	if(isset($_GET["jelszo"])) {
		echo $_GET["jelszo"];
	}
?>

<!DOCTYPE html>
<html lang="hu">
  <head>
    <title>Regisztráció</title>
    <meta charset="UTF-8"/>
  </head>
  <body>
    <form action="signup.php" method="POST">
      <label>Felhasználónév: <input type="text" name="felhasznalonev"/></label> <br/>
	  <label>Email cím: <input type="email" name="email"/></label> <br/>
	  <label>Email cím ismét: <input type="email" name="email2"/></label> <br/>
      <label>Jelszó: <input type="password" name="jelszo"/></label> <br/>
      <label>Jelszó ismét: <input type="password" name="jelszo2"/></label> <br/>
      <label>Életkor: <input type="number" name="eletkor"/></label> <br/>
      Nem:
      <label><input type="radio" name="nem" value="ferfi"/> Férfi</label>
      <label><input type="radio" name="nem" value="no"/> Nő</label>
      <label><input type="radio" name="nem" value="egyeb"/> Egyéb</label> <br/>
      Kedvelt évszak(ok):
      <label><input type="checkbox" name="evszakok[]" value="tavasz"/> Tavasz</label>
      <label><input type="checkbox" name="evszakok[]" value="nyar"/> Nyár</label>
      <label><input type="checkbox" name="evszakok[]" value="osz"/> Ősz</label>
      <label><input type="checkbox" name="evszakok[]" value="tel"/> Tél</label> <br/>
      <input type="submit" name="signup"/> <br/><br/>
    </form>
    <?php
		if ($siker) {
			header("Location: login.php");
		} else {
			foreach($hibak as $hiba) {
				echo $hiba . "<br />";
			}
		}
    ?>
  </body>
</html>