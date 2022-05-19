<?php
session_start();
$page = "";
function showMenu($pageString) {
	global $page;
	$page = $pageString;
	?>
	<nav>
	<ul>
		<?php if($page == "index") {?>
			<li><a class="active" href="/Projekt_2/index.php">Évszakok</a></li>
		<?php } else { ?>
			<li><a href="/Projekt_2/index.php">Évszakok</a></li>
		<?php } ?>

		<?php if($page == "nyar") {?>
			<li><a class="active" href="/Projekt_2/php/evszakok/nyar.php">Nyár</a></li>
		<?php } else { ?>
			<li><a href="/Projekt_2/php/evszakok/nyar.php">Nyár</a></li>
		<?php } ?>

		<?php if($page == "osz") {?>
			<li><a class="active" href="/Projekt_2/php/evszakok/osz.php">Ősz</a></li>
		<?php } else { ?>
			<li><a href="/Projekt_2/php/evszakok/osz.php">Ősz</a></li>
		<?php } ?>

		<?php global $page; if($page == "tel") {?>
			<li><a class="active" href="/Projekt_2/php/evszakok/tel.php">Tél</a></li>
		<?php } else { ?>
			<li><a href="/Projekt_2/php/evszakok/tel.php">Tél</a></li>
		<?php } ?>

		<?php if($page == "tavasz") {?>
			<li><a class="active" href="/Projekt_2/php/evszakok/tavasz.php">Tavasz</a></li>
		<?php } else { ?>
			<li><a href="/Projekt_2/php/evszakok/tavasz.php">Tavasz</a></li>
		<?php } ?>

		<?php if (isset($_SESSION["user"])) { ?>
			<li style="float: right;"><a href="/Projekt_2/php/logout.php">Kijelentkezés</a></li>
		<?php } else { ?>
			<li style="float: right;"><a href="/Projekt_2/php/login.php">Bejelentkezés</a></li>
			<li style="float: right;"><a href="/Projekt_2/php/signup.php">Regisztráció</a></li>
		<?php } ?>
	</ul>
</nav>
<?php
}
?>