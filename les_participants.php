<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
        body
        {
            display: flex;
            flex-direction:column;
            justify-content:center;
            align-items:center ;
        }
	</style>
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
			/*echo'<table>';*/
	?>

	<table class="deco">
		<tr>
			<td> Nom </td>
			<td> Prénoms </td>
			<td> Numéro </td>
			<td> Adresse </td>
		</tr>
		<?php
			while ( $ligne = $formulaire->fetch()) 
			{
				/*
				echo "<pre>";
				var_dump($ligne);
				echo "</pre>";*/
				?>
				<tr>
					<td> <?php echo $ligne["nom"]?> </td>
					<td> <?php echo $ligne["prenom"]?> </td>
					<td> <?php echo $ligne["numero"]?> </td>
					<td> <?php echo $ligne["adresse"]?> </td>
				</tr>
			<?php } ?>
	</table>
	
	<!--while($ligne = $formulaire->fetch()){
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
	echo'</table>';-->
</html>