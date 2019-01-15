<?php

if (!empty($_POST)) {
	include_once("inscription.php");		
}	

function inscription($filename, $username, $password) {
	$file = fopen($filename, "w");

	$hash = password_hash($password, PASSWORD_DEFAULT);

	$chain = $username.";".$hash;

	fwrite($file, $chain);
	fclose($file);
}

function validationPassword ($password) { //==> fonction qui retourne un boolean | pour vérifier saisie utilisateur
	return preg_match("/[0-9]/", $password) && preg_match("/[A-Z]/", $password) &&
		preg_match("/[a-z]/", $password);
}

$filename = "users.txt";
$password = $_POST['mdp'];

if(isset($_POST['inscription']))
{
	if (strlen($password) >= 8) //and strlen($_POST["mdpbis"]) >= 8 ==> inutile de le mettre là, car on vérifie la condition en-dessous
	{
		if(validationPassword($password))
		{
			 if($password == $_POST["mdpbis"]) //==> vérification que les deux mots de passe soient identiques
			{
				echo '<div class="ReponseBonne">Les saisies sont valides</div>';
				inscription($filename, $_POST['login'], $password);
			}
			else
				echo '<div class="ReponseMauvaise">Les deux mot de passes ne correspondent pas</div>';
		}
		else
			echo '<div class="ReponseMauvaise">Il faut au moin un caractere de ponctuation et un caractere numerique</div>';
	}
	else
		echo '<div class="ReponseMauvaise">Mot de passe trop court</div>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/InscriptionLoginStyle.css">
	<title>Login</title>
</head>
<body>
<div class="fondform">
	<div class="bordure">
		<h1 class="titre"> Inscription à l'espace membre </h1> 

	    <form action="inscription.php" method="post">
			
			<p> 
				<label for="login"> </label></br>
				<input type="text" name="login" id="login" placeholder="Votre login" value="<?php if (isset($_POST['login'])) echo $_POST['login']; ?>" required>
			</p>
			
			<p>
				<label for="mdp"> </label></br>
					<p id="commentaire">Au moins 8 caractères dont au moins 1 chiffre<p>
				</br>
				<input class="password" type="password" name="mdp" id="mdp" placeholder="Votre mot de passe" value="<?php if (isset($_POST['mdp'])) echo $_POST['mdp']; ?>" required>
			</p>
			
			<p>
				<label for="mdp"> </label></br>
				<input class="password" type="password" name="mdpbis" id="mdpbis" placeholder="Verification de votre mot de passe" value="<?php if (isset($_POST['mdpbis'])) echo $_POST['mdpbis']; ?>" required>
			</p>
			
			<p>
				<input class="sub" type="submit" name="inscription" id="inscription" value="S'inscrire"/>
			</p>
		</form>
	</div>
	
</div>

</body>
</html>