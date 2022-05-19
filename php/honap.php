<?php
	$datum = new DateTime();
	$datum->setTimezone(new DateTimeZone("Europe/Budapest"));
	if($datum->format('m') >= "3" && $datum->format('m') <= "5")
		echo "Tavasz";
	else if($datum->format('m') >= "6" && $datum->format('m') <= "8")
		echo "Nyár";
	else if($datum->format('m') >= "9" && $datum->format('m') <= "11")
		echo "Ősz";
	else
		echo "Tél";
?>