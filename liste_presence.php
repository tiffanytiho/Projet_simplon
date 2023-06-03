<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Formulaire de présence</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="main.js"></script>

        <style type="text/css">
           body
            {
                display: flex;
                flex-direction:column;
                justify-content:center;
                align-items:center ;
            }
            form
            {
                display:grid;
                padding:2em; 
            }
            form input, label
            {
                margin:0,2em;
                padding:0,2em;
            }
        </style>
    </head>
    <body>
        <h1> Enregistrez - vous en tant que participant </h1>
        <form action="" method="POST">
            <label for="" class="form"> Nom : </label>
            <input type="text" name="nom">

            <label for="" class="form"> Prénoms : </label>
            <input type="text" name="prenom">

            <label for="" class="form"> Numéro : </label>
            <input type="text" name="numero">

            <label for="" class="form"> Adresse : </label>
            <input type="text" name="adresse">

            <input type="submit" value="ENVOYER" name="envoyer" class="boton">
        </form>

        <?php
            $con = mysqli_connect('localhost','root','');
            if(!$con){
                echo"La connexion a échoué";
            }
            if(!mysqli_select_db($con,'fromdonnees'))
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
                        echo "La requete non execute  ";
                } else{
                    echo "Nous attendons votre saisie ou" ;
                    echo "<br> Le numéro a été mal saisi ";
                }
            }
        ?>
        <p> <a href="essaie.php"> Afficher la liste des participants </a></p>
    </body>
</html>