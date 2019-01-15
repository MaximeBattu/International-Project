<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/styleQcm.css">
    <title>Document</title>
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
						<li><a href="qcm.php"><p>Rois 3</p></a></li>
					</ul>
				</li>
                
                <li><a href="../html/Informations.html"><p>Informations</p></a></li>
    
                <li><a href="qcm.php"><p>QCM</p></a></li>
            </ul>
        </nav>
    

    <h1>Test de connaissance</h1>

    <form id="Test" action="qcm.php" method="post">
    	<div>
	    	<label>L’objet provenant du pillage de Soissons que Clovis 1er souhaitait offrir à l'évêque de Reims était-il un vase ?
			</label>

	    	<p>
	    		<label for="q1Oui">Vrai : </label>
	    		<input type="radio" name="q1" id="q1Oui" value="1"><br>
	    		<label for="q1Non">Faux : </label>
	    		<input type="radio" name="q1" id="q1Non" value="0">
	    	</p>
    	</div>

    	<div>
	    	<label> A la mort de Clovis, seul l'aîné de ses fils, Thierry, hérite du titre de roi.
			</label>

	    	<p>
	    		<label for="q2Oui">Vrai : </label>
	    		<input type="radio" name="q2" id="q2Oui" value="0"><br>
	    		<label for="q2Non">Faux : </label>
	    		<input type="radio" name="q2" id="q2Non" value="1">
	    	</p>
    	</div>

    	<div>
	    	<label> Louis XIV a régné pendant 72 ans sur le peuple francais.
			</label>

	    	<p>
	    		<label for="q3Oui">Vrai : </label>
	    		<input type="radio" name="q3" id="q3Oui" value="1"><br>
	    		<label for="q3Non">Faux : </label>
	    		<input type="radio" name="q3" id="q3Non" value="0">
	    	</p>
    	</div>

    	<div>
	    	<label> Louis XIV a toujours été fidèle à sa compagne.</label>

	    	<p>
	    		<label for="q4Oui">Vrai : </label>
	    		<input type="radio" name="q4" id="q4Oui" value="0"><br>
	    		<label for="q4Non">Faux : </label>
	    		<input type="radio" name="q4" id="q4Non" value="1">
	    	</p>
    	</div>

    	<div>
	    	<label>L’édit de Nantes est un traité retirant quasiment toute liberté aux protestants.
			</label>

	    	<p>
	    		<label for="q5Oui">Vrai : </label>
	    		<input type="radio" name="q5" id="q5Oui" value="0"><br>
	    		<label for="q5Non">Faux : </label>
	    		<input type="radio" name="q5" id="q5Non" value="1">
	    	</p>
    	</div>

    	<div>
	    	<label>Quel roi n'a jamais existé ?
			</label>

			<select name="selection" id="selection">
				<option value="0">Choisir une option</option>
				<option value="0">Clovis 1er</option>
				<option value="0">Louis XV</option>
				<option value="0">Dagobert 1er</option>
				<option value="1">Dreyfus V</option>
			</select>
    	</div>

    	<input type="submit" name="validate" id="validate" value="Terminer">
    </form>

<hr>

    <?php 

    	if (!empty($_POST)) {
    		include_once("treat.php");
    	}

     ?>

    <footer>
        <p>&copy; Copyright 2019</p>
    </footer>


</body>
</html>