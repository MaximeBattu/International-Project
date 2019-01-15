<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/Dstyle.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title></title>
</head>
<body>

	<header>
		<div > <a href="login.php" id="log"> Login  </a> </div>
		<div > <a href="inscription.php" id="inscr"> Inscription </a> </div>
	</header>

	<nav class="menu">
		<ul>
			<li><a href="../index.html"><p>Accueil</p></a></li>
			
			<li id="rois"><p>Les Rois</p>
				<ul id="menurois">
					<li><a href="dynastie.php"><p>Les Dynasties</p></a></li>
					<li><a href="rois.html"><p>Rois 1</p></a></li>
					<li><a href=""><p>Rois 2</p></a></li>
					<li><a href=""><p>Rois 3</p></a></li>
				</ul>
			</li>
			
			<li><a href="../html/Informations.html"><p>Informations</p></a></li>

			<li><a href="qcm.php"><p>QCM</p></a></li>
		</ul>
	</nav>

	<section class="contenue">

		<article id="DM">
			<a href=""><img src="../img/croix.png"></a>
			frise Mérovingiens
		</article>

		<article id="DC">
			<a href=""><img src="../img/croix.png"></a>
			frise Carolingiens
		</article>

		<article id="DCA">
			<a href=""><img src="../img/croix.png"></a>
			frise Capétiens
		</article>

		<article id="DV">
			<a href=""><img src="../img/croix.png"></a>
			frise Valois
		</article>

		<article id="DB">
			<a href=""><img src="../img/croix.png"></a>
			frise Bourbons
		</article>
		
		<a href="#DM" class="lien">
			<div title="Voir la frise chronologique des Mérovingiens">
				 <span class ="nomdynastie"> Mérovingiens</span> | 481 à 751 | <span class ="nbrois">33</span> rois
			</div>
		</a>

		<a href="#DC" class="lien"> 
			<div title="Voir la frise chronologique des Carolingiens">
				<span class ="nomdynastie">Carolingiens</span> | 752 à 987 | <span class ="nbrois">14</span> rois
			</div>
		</a>

		<a href="#DCA" class="lien">
			<div title="Voir la frise chronologique des Capétiens">
				<span class ="nomdynastie">Capétiens</span> | 987 à 1328 | <span class ="nbrois">15</span> rois
			</div>
		</a>

		<a href="#DV" class="lien">
			<div title="Voir la frise chronologique des Valois">
				<span class ="nomdynastie">Valois</span> | 1328 à 1589 | <span class ="nbrois">13</span> rois
			</div>
		</a>

		<a href="#DB" class="lien">
			<div title="Voir la frise chronologique des Bourbons">
				<span class ="nomdynastie">Bourbons</span> | 1589 à 1792 | <span class ="nbrois">6</span> rois
			</div>
		</a>

	</section>

	<footer>
		<p>&copy; Copyright 2019</p>
	</footer>

</body>
</html>