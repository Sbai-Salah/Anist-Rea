<?php
   include 'loginSystem.php';
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>AnistRea</title>
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <!-- bootstrap cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
      <!-- style -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
      <!-- custom css file link  -->
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <!-- header section starts  -->
      <header class="header">
         <!-- <a href="#" class="logo"> <i class="fas fa-laptop-medical"></i> AnistRea </a> -->
         <a href="#" class="logo"> <img src="image/logo_avatar.png" style="width:12%"> AnistRea </a>
         <nav class="navbar" class="btn">
            <a href="#home" class="btn">home</a>
            <a href="#about" class="btn">about</a>
            <?php
               if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                   echo '<a href="Dashboard/index.php" class="btn">Dashboard</a>';
                   echo '<a href="logOut.php" class="btn">Log out</a>';
                   echo '
                   <ul class="navbar-nav align-items-center d-none d-md-flex">
                       <li class="nav-item dropdown">
                           <a class="avatr_icon nav-link pr-0" href="profil.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <div class="media align-items-center">
                                   <span class="avatar avatar-sm rounded-circle">';
                                    
                                    if($_SESSION["sexe"]==="male") echo '<img alt="Image placeholder" src="image/maleAvatar.png">';
                                    elseif($_SESSION["sexe"]==="female") echo '<img alt="Image placeholder" src="image/femaleAvatar.png">';
                                    
                                   echo '</span>
                                   <div class="media-body ml-2 d-none d-lg-block">
                                   <span class="profilAvatarName mb-0 text-sm font-weight-bold">'.$_SESSION["prenom"].' '.$_SESSION["nom"].'</span>
                                   </div>
                               </div>
                           </a>
                       </li>
                   </ul>
                   ';
               }else{
                   echo '<a href="sign-in.php" class="btn logIn" id="logIn">Sign in</a>';
                   echo '<a href="sign-up.php" class="btn">sign Up</a>';
               }
               ?>
         </nav>
         <div id="menu-btn" class="fas fa-bars"></div>
      </header>
      <!-- header section ends -->
      <!-- ------------------------------------------------------------------------ -->
      <!-- home section starts  -->
      <section class="home" id="home">
         <!-- home image -->
         <div class="image">
            <?php
               if( !(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
                  echo '<img src="image/home-img.svg" alt="">';
               }else{
                  echo '<img src="image/home_img2.svg" alt="">';
               }
               ?>
         </div>
         <!-- content -->
         <div class="content">
            <h3>Anesthésie réanimation</h3>
            <p>La santé est le support de notre vie, l'oublier c'est ôter l'essence à notre survie!</p>
            <?php
               if( !(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
                  echo  '<div class="text-box">
                           <a href="#createAccount" class="btn btn-white btn-animate">Créer un compte</a>
                        </div>';
               }
               ?>
         </div>
      </section>
      <!-- home section ends -->
      <!-- about section starts  -->
      <section class="features" id="about">
         <h1 class="heading"> our <span>features</span> </h1>
         <div class="box-container">
            <div class="box">
               <img src="image/features1.png" alt="">
               <h3>Facile à etuliser</h3>
               <p id="chefs">une interface simple qui facilite le deroulement de votre travail....</p>
               <input class="bttn" id="chefsBtn" type="button" value="Read More" >
            </div>
            <div class="box">
               <img src="image/features2.jpg" alt="">
               <h3>base données des patients</h3>
               <p id="freeDelivery">Enregistrer toutes les données relative à vos patients,</p>
               <input class="bttn" id="freeDeliveryBtn" type="button" value="Read More" >
            </div>
            <div class="box">
               <img src="image/features3.jpg" alt="">
               <h3>meilleur controle</h3>
               <p id="payment">Contrôle ciblé en réanimation.,</p>
               <input class="bttn" id="paymentBtn" type="button" value="Read More">
            </div>
         </div>
      </section>
      <!-- create account section end------------------ -->
      <footer class="footer-section">
         <div class="container">
            <div class="footer-cta pt-5 pb-5">
               <div class="row">
                  <div class="col-xl-4 col-md-4 mb-30">
                     <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                           <h4>Trouvez nous</h4>
                           <span>Ensao, Oujda, Maroc</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-4 mb-30">
                     <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                           <h4>Appelez-nous</h4>
                           <span>+2125 0011223344</span>
                           <br>
                           <span>+2125 0011223345</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-4 mb-30">
                     <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                           <h4>E-mail</h4>
                           <span>AnistRea@info.com</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-content pt-5 pb-5">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 mb-50">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="index.php"><img src="image/logo_bg.png" class="img-fluid" alt="logo" style="width:20%;"></a>
                        </div>
                        <div class="footer-text">
                           <p>Une Interface Simple Qui Facilite Le Deroulement De Votre Travail. Enregistrez Toutes Les Données Relative À Vos Patients, Notre Platforme Vous Assure Un Contrôle Ciblé En Réanimation .</p>
                        </div>
                        <div class="footer-social-icon" id="contact">
                           <span>suivez nous</span>
                           <a href="https://www.facebook.com" target="blank"><i class="fab fa-facebook-f facebook-bg"></i></a>
                           <a href="https://www.twitter.com" target="blank"><i class="fab fa-twitter twitter-bg"></i></a>
                           <a href="https://www.instagram.com" target="blank"><i class="fab fa-instagram instagram-bg"></i></a>
                           <a href="https://www.google.com" target="blank"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                     <div class="footer-widget">
                        <div class="footer-widget-heading">
                           <h3>Liens</h3>
                        </div>
                        <ul>
                           <li><a href="#home">Home</a></li>
                           <li><a href="#about">about</a></li>
                           <li><a href="#about">services</a></li>
                           <li><a href="#contact">Contact</a></li>
                           <?php
                           if( !(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
                              echo '
                                 <li><a href="sign-up.php">Créer un compte</a></li>
                                 <li><a href="sign-in.php">se connecter</a></li>
                              ';
                           }
                           ?>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                     <div class="footer-widget">
                        <div class="footer-widget-heading">
                           <h3>S'abonner</h3>
                        </div>
                        <div class="footer-text mb-25">
                           <p>N'oubliez pas d'envoyez nous un email.</p>
                        </div>
                        <div class="subscribe-form">
                           <form action="#">
                              <input type="text" placeholder="Email Address">
                              <button><i class="fab fa-telegram-plane"></i></button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright-area">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                     <div class="copyright-text">
                        <p>Copyright &copy; 2022, All Right Reserved <a href="index.php">AnistRea</a></p>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                     <div class="footer-menu">
                        <ul>
                           <li><a href="#home">Home</a></li>
                           <li><a href="#about">à propos</a></li>
                           <?php
                           if( !(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)){
                              echo '
                                 <li><a href="sign-up.php">Créer un compte</a></li>
                                 <li><a href="sign-in.php">se connecter</a></li>
                              ';
                           }
                           ?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script src="script.js"></script>
   </body>
</html>