<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Accueil</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <header class="main-head"> 
        <nav>
            <li class=".main-head"><a href="index.php"><img src="/Images/presentationdeco/NEW-logo.jpg" alt=""></a></li>
          <ul>
              <li><a href="Présentation-licence.php">Présentation de la licence</a></li>
              <li><a href="Présentation-des-personnages.php">Présentation des personnages</a></li>
              <li><a href="Des-meilleurs-joueurs-du-mondes.php">Des meilleurs joueurs du monde</a></li>
              <li><a href="https://www.smashbros.com/fr_FR/" target="blank"> Site officiel du jeu </a></li>
              <li><a href="formulaire.php"> Achat jeu </a></li>
              <?php
                    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
                        echo "<li><a href=\"\"> ". $_SESSION['username'] ."</a></li>";
                        
                    }else{
                        echo "<li><a href=\"login.php\"> Inscription / Connexion </a></li>";
                    }
              ?>
              
          </ul>
        </nav>
  
  
  </header>
  <br><br><br>
  <center>
	<u> <h2 class="pdiv"> Super Smash Bros </u> </h2> 
</center>
<br><br><br>
<center>
    <id class="video">
        <iframe width="1000" height="650" src="https://www.youtube-nocookie.com/embed/gvv7dDAadv0?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </center>
</body>
<br>
<footer class="main-head">
    <nav>
      <ul>
          <li> <h3 class="pdiv2"> @copyright-Megueddem2021</h3> </li>
      </ul>
    </nav>
</footer>
</html>