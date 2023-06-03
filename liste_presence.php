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
                padding : 0px;
                margin : 0px; 
            }
            fieldset{
                margin-top: 70px;
                width: 27%;
                background-color: #318CE7;
                box-shadow: 5px 5px 20px 1px 1px rgb(85,85,85);
                border: 0px;
                padding-left: 10px;
                border-radius: 10px 10px 10px;
                color:white ;
                height: 430px;
            }
            td{
                letter-spacing: 1px;
            }
            h1{
                font-family:andalus ;
                letter-spacing: 3px;
                text-align: center;
                color:white;

            }
            hr{
                border: 5px solid white;
                border-radius: 10px;
                width: 50%;
            }
            ul li{
                margin-left: 20px;
                color: white;
            }
            #submit{
               margin:20px 35px;
               color: #318CE7;
               background-color: white;
               width: 80%;
               font-size: 17px;
               border-radius: 20px;
               border: 1px solid white; 
               padding: 10px;
            }
            #submit:hover{
                color: white ;
                background-color: #318CE7;
            }
            input{
                font-size: 16px;
                border: none;
                outline: non;
                background: none;
                border-bottom: 1px solid white;
                color: white;
                width: 100%;
            }

            
        </style>
    </head>
    <body>
        <center>
            
        <fieldset style="width:50%;">
            <form action="" method="POST">
                <h1> Enregistrez - vous en tant que participant </h1>
                <hr>
                <table>
                    <tr>
                        <td>
                            Nom :
                        </td>
                        <td>
                            <input type="text" name="nom"><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Prénoms :
                        </td>
                        <td>
                            <input type="text" name="prenom"><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Numéros :
                        </td>
                        <td>
                            <input type="tel" name="numero"><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Adresse :
                        </td>
                        <td>
                            <input type="text" name="adresse"><br><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" id="submit" value="ENVOYER" name="envoyer">
                        </td>
                    </tr>
                    
                </table> 
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
        </fieldset>
        </center>

        
        <center> <p> <a href="essaie.php"> Afficher la liste des participants </a></p> </center>
    </body>
</html>