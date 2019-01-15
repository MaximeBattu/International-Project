<?php 

	$nb_rep = 6;
	$nb_brep = 0;

	foreach ($_POST as $question => $reponse) {
		if (isset($question) and $question != "validate") {
			if ($reponse) {
				$nb_brep += 1;
			}
		}
	}

	$pourcentage = round(($nb_brep / $nb_rep) * 100, 2);

	echo "<div class='Reponse'>";

	if ($nb_brep < 3) {
		echo "<p style='color: red'>Ratio : ".$nb_brep." / ".$nb_rep."<br>";
		echo "Pourcentage  : ".$pourcentage."%<br>
		C'est pas ouf...</p>";
	} else {
		echo "<p style='color: green'>Ratio : ".$nb_brep." / ".$nb_rep."<br>";
		echo "Pourcentage  : ".$pourcentage."%<br>
		Bien joué !!!</p>";
	}

	echo "</div>";

 ?>
