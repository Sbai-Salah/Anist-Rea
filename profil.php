<?php
include 'loginSystem.php';
include 'modifyProfilInfo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="profil_style.css">
    <!-- style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- bootstrap cdn link  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css"> -->
    <title>Profil</title>
</head>

<body>

    <!-- main header -->
    <header class="mainHeader">

        <a href="#" class="logo"> <img src="image/logo_avatar.png" style="width:12%"> AnistRea </a>
        <nav class="navbar">
            <a href="index.php#home" class="bttn navlink">home</a>
            <a href="index.php#about" class="bttn navlink">about</a>
            <a href="Dashboard/index.php" class="bttn navlink">Dashboard</a>
            <a href="logOut.php" class="bttn navlink">Log out</a>

            <ul class="navbar-nav align-items-center d-none d-md-flex">
               <li class="nav-item dropdown">
                  <a class="avatr_icon nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <?php
                           if($_SESSION["sexe"]==="male") echo '<img alt="Image placeholder" src="image/maleAvatar.png">';
                           elseif($_SESSION["sexe"]==="female") echo '<img alt="Image placeholder" src="image/femaleAvatar.png">';
                        ?>
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                           <span class="profilAvatarName mb-0 text-sm font-weight-bold"><?php echo $_SESSION["prenom"].' '.$_SESSION["nom"]; ?></span>
                        </div>
                     </div>
                  </a>
               </li>
            </ul>

        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

   <div class="main-content">
      <!-- Top navbar -->
      <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
         <div class="container-fluid">

            <!-- User -->
            <ul class="account_avatar navbar-nav align-items-center d-none d-md-flex">
               <li class="nav-item dropdown">
                  <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <div class="media align-items-center">
                        <span class="avatar-sm avatar rounded-circle">
                        <?php
                           if($_SESSION["sexe"]==="male") echo '<img alt="Image placeholder" src="image/maleAvatar.png">';
                           elseif($_SESSION["sexe"]==="female") echo '<img alt="Image placeholder" src="image/femaleAvatar.png">';
                        ?>
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            <!-- nom d'etulisateur -->
                           <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                        </div>
                     </div>
                  </a>
               </li>
            </ul>

         </div>
      </nav>

      <!-- Header -->
      <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(http://localhost/anistrea/image/nurses_bg2.jpg); background-size: cover; background-position: center top;">
         <!-- Mask -->
         <span class="mask bg-gradient-default opacity-8"></span>
         <!-- Header container -->
         <div class="container-fluid d-flex align-items-center">
            <div class="row">
               <div class="col-lg-7 col-md-10">
                  <h1 class="display-2 text-white">Bonjour <?php echo $_SESSION["prenom"];?> !</h1>
                  <p class="text-white mt-0 mb-5">Ceci est votre page de profil. Vous pouvez modifier vos données personnelles, gérer et poursuivre les statistiques de vos tâches assignées.</p>
                  <a href="#EditAccount" class="btn btn-info">Modifier profile</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Page content -->
      <div class="container-fluid mt--7">
         <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
               <div class="card card-profile shadow">
                  <div class="row justify-content-center">
                     <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                           <a href="#">
                           <?php
                              if($_SESSION["sexe"]==="male") echo '<img class="rounded-circle" alt="Image placeholder" src="image/maleAvatar.png">';
                              elseif($_SESSION["sexe"]==="female") echo '<img class="rounded-circle" alt="Image placeholder" src="image/femaleAvatar.png">';
                           ?>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                     <div class="d-flex justify-content-between">
                        <a href="Dashboard/pages/notifications.php" class="btn btn-sm btn-info mr-4">Notes</a>
                        <a href="Dashboard/pages/tables.php" class="btn btn-sm btn-default float-right">Listes</a>
                     </div>
                  </div>
                  <?php
                     $id_anesthesiste = $_SESSION["id_anesthesiste"];
                     // aujourd'hui
                     $sqlCountToday = "SELECT * FROM patient WHERE dateHospitalisation=CURRENT_DATE AND id_anesthesiste=$id_anesthesiste;";
                     $resultCountToday = mysqli_query($conn,$sqlCountToday);
                     // cette semaine
                     $sqlCountWeek = "SELECT * FROM patient WHERE id_anesthesiste=$id_anesthesiste HAVING dateHospitalisation>date(CURRENT_DATE-7);";
                     $resultCountWeek = mysqli_query($conn,$sqlCountWeek);
                     // ce mois
                     $currentDate = date_create(date("Y-m-d"));
                     $ThisYear = intval($currentDate->format("Y"));
                     $ThisMounth = intval($currentDate->format("m"));
                     $sqlCountMounth = "SELECT * FROM patient WHERE id_anesthesiste=$id_anesthesiste HAVING  YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth;";
                     $resultCountMounth = mysqli_query($conn,$sqlCountMounth);
                  ?>
                  <div class="card-body pt-0 pt-md-4">
                     <div class="row">
                        <div class="col">
                           <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                              <div>
                                 <span class="heading"><?php echo mysqli_num_rows($resultCountToday);?></span>
                                 <span class="description">Patients <br>(aujourd'hui)</span>
                              </div>
                              <div>
                                 <span class="heading"><?php echo mysqli_num_rows($resultCountWeek); ?></span>
                                 <span class="description">Patients <br>(cette semaine)</span>
                              </div>
                              <div>
                                 <span class="heading"><?php echo mysqli_num_rows($resultCountMounth); ?></span>
                                 <span class="description">Patients <br>(Ce mois)</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="text-center">
                        <h3>
                        <?php echo $_SESSION["nom"].'<span class="font-weight-light"> '. $_SESSION["prenom"] .'</span>';?>
                        </h3>
                        <div class="h5 font-weight-300">
                           <i class="ni location_pin mr-2"></i><?php echo  $_SESSION["ville"].",".$_SESSION["hopital"];?></h1>
                        </div>
                        <div class="h5 mt-4">
                           <i class="ni business_briefcase-24 mr-2"></i>Created by mSI
                        </div>
                        <div>
                           <i class="ni education_hat mr-2"></i>AnistRea Platfome officielle
                        </div>
                        <hr class="my-4">
                        <p class="showMoreContent">Une Interface Simple Qui Facilite Le Deroulement De Votre Travail <span id="dots">...</span><span id="moreContent">Enregistrez Toutes Les Données Relative à vos Patients, notre platforme vous assure un Contrôle Ciblé En Réanimation .</span></p>
                        <a href="#ShowMore" id="showMorebtn">Show more</a>
                     </div>
                  </div>
               </div>
            </div>
            <div style="margin-bottom:20px" class="col-xl-8 order-xl-1" id="EditAccount">
               <div class="card bg-secondary shadow">
                  <div class="card-header bg-white border-0">
                     <div class="row align-items-center">
                        <div class="col-8">
                           <h3 class="mb-0">Mon compte</h3>
                        </div>
                        <div class="col-4 text-right">
                           <a href="profil.php" class="btn btn-sm btn-primary">Actualiser</a>
                        </div>
                     </div>
                  </div>
                  <div class="card-body" >

                     <!-- modify profil information form-->
                     <form action="modifyProfilInfo.php" method="post">

                        <?php
                           if ( isset($_GET['error']) ){
                              echo '<p class="error" style="color:#A94442">'. $_GET["error"] .'</p>';
                           }
                           if ( isset($_GET['success']) ) {
                              echo '<p class="success" style="color:#40754C">'. $_GET['success'] .'</p>';
                           }      
                        ?>
                        
                        <h6 class="heading-small text-muted mb-4">Informations d'étulisateur</h6>
                        <div class="pl-lg-4">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="form-group focused">
                                    <label class="form-control-label" for="input-username">nom</label>
                                    <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="nom" name="nom" value=<?php echo $_SESSION["nom"];?>>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label class="form-control-label" for="input-email">Prénom</label>
                                    <input type="text" id="input-email" class="form-control form-control-alternative" placeholder="prenom" name="prenom" value=<?php echo $_SESSION["prenom"];?>>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group">
                                    <label class="form-control-label" for="input-email">Email</label>
                                    <input type="email" id="input-email" class="form-control form-control-alternative" placeholder="email@example.com" name="email" value=<?php echo $_SESSION["email"];?>>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="form-group focused">
                                    <label class="form-control-label" for="input-first-name">CIN</label>
                                    <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="Code D'identité nationale" name="CIN" value=<?php echo $_SESSION["CIN"];?>>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group focused">
                                    <label class="form-control-label" for="input-last-name">Téléphone</label>
                                    <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="+212" name="telephone" value=<?php echo $_SESSION["telephone"];?>>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group focused">
                                    <label class="form-control-label" for="input-last-name">Hopital</label>
                                    <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="hopital" name="hopital" value="<?php echo $_SESSION["hopital"];?>" >
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="form-group focused">
                                    <label class="form-control-label" for="input-last-name">Durée d'experience</label>
                                    <input type="number" id="input-last-name" class="form-control form-control-alternative" placeholder="Durée d'experience" name="experience" value="<?php echo $_SESSION["experience"];?>">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr class="my-4">
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">informations de Contact <span style="text-transform:capitalize;">(supplementaires)</span></h6>
                        <div class="pl-lg-4">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-group focused">
                                    <label class="form-control-label" for="input-address">Addresse</label>
                                    <input type="text" id="input-address" class="form-control form-control-alternative" placeholder="addresse" name="adresse" value="<?php echo $_SESSION["adresse"];?>">
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="form-group focused">
                                    <label class="form-control-label" for="input-city">Ville</label>
                                    <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="ville" name="ville" value="<?php echo $_SESSION["ville"];?>">
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="form-group focused">
                                    <label class="form-control-label" for="input-country">Pays</label>
                                    <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Pays" name="pays" value="<?php echo $_SESSION["pays"];?>">
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="form-group">
                                    <label class="form-control-label" for="input-country">code postal</label>
                                    <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="code postal" name="codePostal" value="<?php echo $_SESSION["codePostal"];?>">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr class="my-4">
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4"> Changer Votre Mot De Passe</h6>
                        <div class="pl-lg-4">
                           <div class="row">
                              <div class="col-lg-4">
                                 <div class="form-group focused">
                                    <label class="form-control-label" for="input-city">mot de passe actuel</label>
                                    <input type="password" id="input-city" class="form-control form-control-alternative" placeholder="*********" name="oldPassword" value="">
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="form-group focused">
                                    <label class="form-control-label" for="input-country">nouveau mot de passe</label>
                                    <input type="password" id="input-country" class="form-control form-control-alternative" placeholder="*********" name="newPassword" value="">
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="form-group">
                                    <label class="form-control-label" for="input-country">confirmer mot de passe</label>
                                    <input type="password" id="input-postal-code" class="form-control form-control-alternative" placeholder="*********" name="RepeatNewPassword" value="">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <hr class="my-4">
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">À propos de moi</h6>
                        <div class="pl-lg-4">
                           <div class="form-group focused">
                              <label>À propos de moi</label>
                              <textarea rows="4" class="form-control form-control-alternative" placeholder="description simple de votre parcours, travail..." name="aboutMe" value=""><?php echo $_SESSION["aboutMe"];?></textarea>
                           </div>
                        </div>
                        <!-- submit button -->
                        <div class="col-4" style="margin-left: 40%;">
                           <button type="submit" class="btn btn-sm btn-primary" style="font-size: .9rem;" name="sauvgarder" >Sauvegarder  <i class="fas fa-save"></i></button>
                        </div>
                     </form>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
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
                            <li><a href="index.php#home">Home</a></li>
                            <li><a href="index.php#about">about</a></li>
                            <li><a href="index.php#about">services</a></li>
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
                         <div class="footer-text mb-25" id="contact">
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
                            <li><a href="index.php#home">Home</a></li>
                            <li><a href="index.php#about">about</a></li>
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
</body>
<script src="profilScript.js"></script>
</html>