<!doctype html>
<html>
    <head> 
        <title>  Liste des Participants   </title>
    </head>
    <body>
        <?php
        	$con = mysqli_connect('localhost','root','');
	        if(!$con){
	            echo"La connexion a échoué";
	        }
	        if(!mysqli_select_db($con,'fromdonnees')){
	            echo"La connexion a réussie";
	        }

	        $requete="SELECT * from users ";
	        $result=$con->query($requete);

	        if(!$result){
	        	echo" Il ya probleme";
	        } else {
	        	?>
	        	<h1> Tous les participants </h1>
	        	<table>
	        		<tr>
	        			<th> Nom </th>
	        			<th> Prenom </th>
	        			<th> Numéro </th>
	        			<th> Adresse </th>
	        		</tr>
	        		<?php

	        		while($ligne=$result->fetch(PDO::FETCH_NUM)){
	        			echo "<tr>";
	        			foreach ($ligne as $key => $valeur) {
	        				echo"<td>$valeur</td>";
	        			}
	        			echo "</tr>";
	        		}
	        		?>

	        	</table>
	        	<?php
	        	$result->closeCursor();
	        }
        ?>
    </body>

</html>