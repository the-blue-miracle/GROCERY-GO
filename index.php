<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

        <title>GOCERY GO</title> 
        <link rel="icon" type="image/x-icon" href="./images/logo.png">
    </head>
    <body>

  
        <nav>

            <div class="navTop">

                <div class="navItem">

                    <img src="./images/Logo.png" width="250" alt="" name="logo">
                </div>

                <h1>GROCERY <span>GO</span></h1>

                <div class="socialMediaIcons">

                    <a href="#facebook"><i class="fa-brands fa-facebook"></i></a> &nbsp;
                    <a href="#instagram"><i class="fa-brands fa-instagram"></i></a> &nbsp;
                    <a href="#linkedin"><i class="fa-brands fa-linkedin-in"></i></a> &nbsp;
                    <a href="#youtube"><i class="fa-brands fa-youtube"></i></a>
                </div>
                
            </div>

            <div class="navbar">

                <a class="active" href="#home"><i class="fa fa-fw fa-home"></i> Accueil</a>

                
                <div class="dropdown">

                  <button class="dropbtn" href="#boulangerie" >Catégories <i class="fa fa-caret-down"></i></button>

                  <div id="myDropdown" class="dropdown-content">

                    <a href="#boulangerie">Boulangerie</a>
                    <a href="#produitsLaitiers">Produits laitiers</a>
                    <a href="#charcuterie">Charcuterie</a>
                    <a href="#epicerie">Epicerie</a>
                    <a href="#boissons">Boissons</a>
                    <a href="#patisserie">Pâtisserie</a>


                  </div>
                </div> 

                <a href="#magasins"><i class="fa-solid fa-store"></i> Nos magasins</a>
                <a href="#partenaires"><i class="fa-solid fa-handshake"></i> Nos partenaires</a>
                <a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
                <a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fa fa-fw fa-user"></i> Se connecter</a>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="./images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Nom d'utilisateur</b></label>
      <input type="text" placeholder="Entrer le nom d'utilisateur" name="uname" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrer le mot de passe" name="psw" required>
        
      <button type="submit">Se connecter</button>
      <label>
        <input type="checkbox" checked="checked" name="remember">  Se souvenir de moi
      </label>
    </div>

  </form>
</div>

        
<div class="search">
                    <form>
                      <div class="searchbar">
                        <input type="text" placeholder="Rechercher.." name="search" onkeyup="showResult(this.value)">
                        <div id="livesearch"></div>
                        <button type="submit"><i class="fa fa-search" style="color: white"></i></button>
                      </div>
                    </form>
                </div>
             </div>
        </nav>
        <br>

        <div class="slideshow-container">

          <div class="mySlides fade">
            <div class="numbertext">1 / 2</div>
            <img src="./images/1stPic.png" style="width:100%">
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext" style="color: black">2 / 2</div>
            <img src="./images/2ndpic.png" style="width:100%">
          </div>
          
          </div>
          <br>
          
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span>
          </div>
          <br><br><br><br>

          <h2 class="engagements-titre"><span>ENGAGEMENTS </span>GROCERY GO</h2>

          <div class="engagements">

            <div class="one">
              <img src="./images/engagement1.png">
              <h3>Mieux <span>manger</span></h3>
            </div>

            <div class="two">
              <img src="./images/engagement2.png">
              <h3>Mieux <span>vivre</span></h3>
            </div>

            <div class="three">
              <img src="./images/engagement3.png">
              <h3>Mieux <span>consommer</span></h3>
            </div>
      
          </div><br><br><br>

    
    <?php include './config/connexion.php';
    $result = mysqli_query($con, "SELECT * FROM products");
    while($row = mysqli_fetch_array($result)) {
      echo "

      <div class='row-md-4'>
            <div class='column'>
              <div class='card'>
                <img class='productImage' src='$row[image]' style='width:80%'></br></br>
                <h2 class='productTitle'>$row[nom]</h2></br>
                <p class='productPrice'>$row[prix]</p></br>
                <p><button class='buyButton'><i class='fa-solid fa-cart-shopping'></i> &nbsp; Ajouter au panier</button></p>
              </div> <br>
            </div>

      ";
    } ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


     <footer class="footer">
      <div class="container1">
        <div class="row1">

          <div class="footer-col">
            <h3>À propos</h3><br>
            <ul>
              <li><a href="#">Nos magasins</a></li>
              <li><a href="#">Nos partenaires</a></li>
              <li><a href="#">Recrutement</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <h3>Besoin d'aide ?</h3><br>
            <ul>
              <li><a href="#">Nous contacter</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>

          <div class="footer-col">
            <h3>Nos horaires</h3><br>
            <h4>Ouvert 7J/7</h4>
            <h4>De 9h00 à 23h00</h4>
          </div>

          <div class="footer-col">
            <h3>Rejoignez-nous sur :</h3><br>
            <div class="socialMediaIcons1">
              <a href="#facebook"><i class="fa-brands fa-facebook"></i></a> &nbsp;
                    <a href="#instagram"><i class="fa-brands fa-instagram"></i></a> &nbsp;
                    <a href="#linkedin"><i class="fa-brands fa-linkedin-in"></i></a> &nbsp;
                    <a href="#youtube"><i class="fa-brands fa-youtube"></i></a>
            </div>
          </div>

        </div>
      </div><br><br><br>

      <div class="last">
      <img class="icon" src="./images/Logo.png" width="90px">
      <p class="copyright">© Copyright 2023 - Grocery Go</p>
      </div>

     </footer>
 
        
        <script src="app.js"></script>
    </body>
</html>
