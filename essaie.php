<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1> La liste des participants </h1></center>
</body>
<?php
	try{
		$con= new PDO("mysql:host=localhost;dbname=fromdonnees;port=3306;charset=utf8",'root','');
	}catch(Exception $e) {
		echo 'Erreur de connexion :'. $e->getMessage();
	}
	$formulaire = $con->query('SELECT * from users');
	echo'<table>';
	while($ligne = $formulaire->fetch()){
		echo '<tr>';
			echo'<td>';
				echo $ligne['nom'];
			echo'</td>';

			echo'<td>';
				echo $ligne['prenom'];
			echo'</td>';

			echo'<td>';
				echo $ligne['numero'];
			echo'</td>';

			echo'<td>';
				echo $ligne['adresse'];
			echo'</td>';
		echo '</tr>';
	}
	echo'</table>';
?>
</html>