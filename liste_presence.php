<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Liste de présence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="projetAWS.css">
    <script src="main.js"></script>
</head>
<body>
    <form action="" method="POST">
        <label for=""> Nom : </label>
        <input type="text" name="nom">

        <label for=""> Prénoms : </label>
        <input type="text" name="prenom">

        <label for=""> Numéro : </label>
        <input type="text" name="numero">

        <label for=""> Adresse : </label>
        <input type="text" name="adresse">

        <input type="submit" value="ENVOYER" name="envoyer">
    </form>

    <?php
        $con = mysqli_connect('localhost','root','');
        if(!$con){
            echo"La connexion a échoué";
        }if(!mysqli_select_db($con,'fromdonnees'))
            {
                echo"La connexion a échoué";
            }if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['numero']) AND isset($_POST['adresse']) AND isset($_POST['envoyer'])){
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $numero = $_POST['numero'];
                $adresse = $_POST['adresse'];
                //echo $nom ;
                
                $sql= "INSERT INTO users(nom,prenom,numero,adresse) VALUES ('$nom','$prenom','$numero','$adresse')";
                if(!mysqli_query($con,$sql)) {
                    echo "Nous attendons les informations  ";
            } else{
                echo "Les informations ont été saisies";
            }
        }
    ?>
</body>
</html>