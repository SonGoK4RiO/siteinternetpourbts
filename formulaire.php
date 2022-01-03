<?php
    session_start();

    /*
    
nom
prenom
mail
adresse
user_message

     */

    

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        require("Configuration.php");
        echo "<p>commande executée</p>";
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $adresse = $_POST['adresse'];
        $user_message = $_POST['user_message'];
        echo "$nom, $prenom, $mail, $adresse, $user_message";
        echo "<p>commande executée</p>";
        $sql = "INSERT INTO commandes (nom, prenom, mail, adresse, message) VALUES ('$nom','$prenom','$mail','$adresse','$user_message')";
        echo "<p>commande executée</p>";
        if ($link->query($sql) === TRUE)
        {
            header("location: index.php");
            echo "<p>commande executée</p>";
        }else{
            echo "<p>error " . $link->error . "</p>";
            echo "<p>commande executée</p>";
        }

    }

?>



<html>
<head>
    <meta charset="utf-8">
    <title>Formulaire</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <header class="main-head">
        <nav>
            <ul>
            <li class=".main-head"><a href="index.php"><img src="/Images/presentationdeco/NEW-logo.jpg" alt=""></a></li>
                <li><a href="Presentation-licence.php">Présentation de la licence</a></li>
                <li><a href="Presentation-des-personnages.php">Présentation des personnages</a></li>
                <li><a href="Des-meilleurs-joueurs-du-mondes.php">Des meilleurs joueurs du monde</a></li>
                <li><a href="https://www.smashbros.com/fr_FR/" target="blank"> Site officiel du jeu </a></li>
                <li><a href="formulaire.php"> Achat jeu </a></li>
                <li><a href="login.php"> Inscription Connexion </a></li>
            </ul>
        </nav>

    </header>    
  <br><br><br>
    <img src="/Images/presentationdeco/SSB5.jpg" id="imgctrgame"> 
    <h2 class="textForm"> <u> Commande </u> </h2> <br>
   
    <center>
    <form method="post" action="formulaire.php">
        <div id="color-id" class="champ">
            <label for="name">Entrez votre Nom : </label>
            <input type="text" id="pseudo" name="nom" required><br><br>

            <label for="name">Entrez votre prénom : </label>
            <input type="text" id="pseudo" name="prenom" required><br><br>

            <label for="name">Entrez votre boite mail : </label>
            <input type="text" id="pseudo" name="mail" required><br><br>
            
            <label for="msg"><p style="font-size: 30;">Adressse et commune</p></label>
            <textarea id="msg" name="adresse" required rows="7" cols="50" class="msg"></textarea><br><br>

            <label for="msg"><p style="font-size: 30;">Commentaire (falcutatif)</p></label>
            <textarea id="msg" name="user_message" rows="8" cols="80" class="msg"></textarea>
            <br><br>
         
            <input type="submit" value="Commander le jeu"><br><br>
        </center>
               </div>
    </form>

    <center>
    <footer>
        <nav class="main-head">
          <ul>
              <li> <h3 class="pdiv2" id="taille"> @copyright-Megueddem2021</h3> </li>
          </ul>
        </nav>
    </footer>
</center>

</body>
</html>