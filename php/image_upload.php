<?php
	$str = "";
	if(isset($_FILES["pic"])) {
		$cel_utvonal = "user_imgs/" . $_FILES["pic"]["name"];
		if (move_uploaded_file($_FILES["pic"]["tmp_name"], $cel_utvonal)) {
			$str = "A fájl feltöltésre került!";
		} else {
			$str = "Hiba történt a fájl feltöltése során!";
		}
	}
?>

<hr />
<article>
	<p>
		Mint bejelentkezett felhasználó fel tudsz tölteni képet az adatbázisunkba.<br />
		Kérlek, tölts fel egy évszakkal kapcsolatos képet, ha időd engedi.<br />
		Ezeket a képeket mi elmentjük és év végén a legjobb képekből kiállítást szervezünk<br />
		(erről több információt év vége felé adunk).
	</p>
	<form action="index.php" method="POST" enctype="multipart/form-data">
		<label for="file-upload">Kép:</label>
		<input type="file" id="file-upload" name="pic"/> <br/>
		<input type="submit" name="upload-button" value="Feltöltés"/>
	</form>
	<?php echo $str; ?>
</article>
