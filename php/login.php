<?php

if (!empty($_POST)) {

    function get_infos($file)
    {
        return explode(";", fgets($file));
    }

    $filename = "users.txt";
    $file = fopen($filename, "r");

    if (isset($_POST['login']) && isset($_POST['mdp'])) {
        if (strlen($_POST['mdp']) >= 8) {
            $infos = get_infos($file);
            if (password_verify($_POST['mdp'], $infos[1]) && $_POST['login'] == $infos[0]) // on peut avoir qu'un seul compte connecté en même temps
            {
                echo '<div class="ReponseBonne">Vous êtes connecté</div>';
            } else {
                echo '<div class="ReponseMauvaise">Vérifier votre mot de passe ou votre identifiant</div>';
            }

        } else {
            echo '<div class="ReponseMauvaise">Mot de passe trop court</div>';
        }

    }
    fclose($file);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/InscriptionLoginStyle.css">
	<title>Login</title>
</head>
<body >

<div class="fondform">
	<div class="bordure">
		<h1  class="titre"> Connexion à l'espace membre  </h1>

	    <form action="" method="post">

			<p>
				<label for="login" > </label></br>
				<input type="text" name="login" id="login" placeholder="Votre login" value="<?php if (isset($_POST['login'])) {
    echo $_POST['login'];
}
?>" required>
			</p>

			<p>
				<label for="login"> </label></br>
				<input class="password" type="password" name="mdp" id="mdp" placeholder="Votre mot de passe" value="<?php if (isset($_POST['mdp'])) {
    echo $_POST['mdp'];
}
?>" required>
			</p>

			<p>
				<input lass="sub" type="submit" name="connexion" id="connexion" value="Se connecter"/>
			</p>
		</form>
	</div>
</div>
</body>
</html>