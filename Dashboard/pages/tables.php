<?php
include '../../loginSystem.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo.png">
  <link rel="icon" type="image/png" href="../assets/img/logo.png">
  <title>
    AnistRea
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="../index.php">
        <img src="../assets/img/logo_circle.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-2 font-weight-bold text-white">AnistRea</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Patients & Activités</span>
          </a>
        </li>
        <!-- notes -->
        <li class="nav-item">
          <a class="nav-link text-white " href="notifications.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notes</span>
          </a>
        </li>
        <!-- Ajouter -->
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Ajouter</h6>
        </li>
        <!-- Ajouter patients -->
        <li class="nav-item">
          <a class="nav-link text-white " href="Ajouter_patient.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Patient</span>
          </a>
        </li>
        <!-- Ajouter Activité -->
        <li class="nav-item">
          <a class="nav-link text-white " href="Ajouter_activite.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Activité</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Pages</h6>
        </li>

        <!-- home -->
        <li class="nav-item">
          <a class="nav-link text-white " href="../../index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">home</i>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
        <!-- profil -->
        <li class="nav-item">
          <a class="nav-link text-white " href="../../profil.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profil</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="../../logOut.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
          </a>
        </li>

      </ul>
    </div>

  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Patients</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Patients</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav  justify-content-end">
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>

            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Patients</h6>
            </div>
              <!-- recherche patient -->
              <br>
              <form action="" method="post">
                  <!-- input -->
                  <div class="ms-md-auto pe-md-3 d-flex">
                    <div class="input-group input-group-outline">
                        <label class="form-label">Nom Patient...</label>
                        <input type="text" title="Rechercher Un Patient" class="form-control" name="patientSearch" value="" required>
                    </div>
                  </div>
                  <!-- Search patient -->
                  <button style="display:none" type="submit" name="search">Search</button>
              </form>
              <br>
              <?php
                  $id_anesthesiste = intval($_SESSION["id_anesthesiste"]);
                  
                  if(isset($_POST["search"])){
                    $patientSearch = $_POST["patientSearch"];
                    $sqlSearch = "SELECT * FROM anistrea.patient WHERE nom LIKE '%$patientSearch%' OR prenom LIKE '%$patientSearch%'";
                    $resultsqlSearch = mysqli_query($conn, $sqlSearch);
                  
                      if(mysqli_num_rows($resultsqlSearch)>0){
                        echo ' 
                          <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                              <table class="table align-items-center mb-0">
                                <thead>
                                  <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom & Prénom</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">age/sexe</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Situation </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date de Hospitalisation</th>
                                    <th class="text-secondary opacity-7"></th>
                                  </tr>
                                </thead>
                                
                                <tbody>
                          <style>
                          .abtn:hover{
                            color:white;
                          }
                          </style> ';
                      }else{
                        echo'pas de patient avec ce nom !';
                      }
                      
                      while($row = $resultsqlSearch->fetch_assoc()){
                  
                        if($row["etatReanimation"] === "Pré Chirurgie"){
                          $background = "secondary";
                        }elseif($row["etatReanimation"] === "En Réanimation"){
                          $background = "info";
                        }elseif($row["etatReanimation"] === "Post Chirurgie"){
                          $background = "success";
                        }
                        echo '
                            <tr>
                              <td>
                                <div class="d-flex px-2 py-1">
                                  <div>
                                    <img src="../assets/img/patient.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                  </div>
                                  <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">'.$row["nom"].' '.$row["prenom"].'</h6>
                                    <p class="text-xs text-secondary mb-0">Dossier: '.$row["numeroDossier"].'</p>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <p class="text-xs font-weight-bold mb-0">'.$row["age"].' ans</p>
                                <p class="text-xs text-secondary mb-0">'.$row["sexe"].'</p>
                              </td>
                              <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-'.$background.'">'.$row["etatReanimation"].'</span>
                              </td>
                              <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">'.$row["dateHospitalisation"].'</span>
                              </td>
                              <td class="align-middle">
                                
                                <a href="Modifier_Patient.php?id='.$row["id_patient"].'" class="bg-gradient-warning mb-0 badge abtn" data-toggle="tooltip" data-original-title="Edit user">
                                  Détails
                                </a>
                                |
                                <a href="Delete_Patient_Activite.php?id_patient='.$row["id_patient"].'" class="bg-gradient-danger mb-0 badge abtn" data-toggle="tooltip" data-original-title="Edit user">
                                  Supprimer
                                </a>
                  
                              </td>
                            </tr>
                        ';
                      }
                        if(mysqli_num_rows($resultsqlSearch)>0){
                          echo '
                              </tbody>
                  
                              </table>
                            </div>
                          </div>
                          <hr>
                          ';
                        }
                  }
                  ?>
            </div>
            <style>
              .error {
                text-align: center;
                  background: #F2DEDE;
                  color: #A94442;
                  padding: 10px;
                  width: 95%;
                  border-radius: 5px;
                  margin: 20px auto;
              }
              .success {
                text-align: center;
                  background: #D4EDDA;
                  color: #40754C;
                  padding: 10px;
                  width: 95%;
                  border-radius: 5px;
                  margin: 20px auto;
              }
            </style>
            <?php
                if ( isset($_GET['Patientsuccess']) ) {
                  echo '<p class="success">'. $_GET['Patientsuccess'] .'</p>';
                }
                if ( isset($_GET['Patienterror']) ) {
                  echo '<p class="error">'. $_GET['Patienterror'] .'</p>';
                }     
            ?>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom & Prénom</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">age/sexe</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Situation </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date de Hospitalisation</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>

                  <tbody>
                    <style>
                      .abtn:hover{
                        color:white;
                      }
                      </style>
                    <?php

                    $id_anesthesiste = intval($_SESSION["id_anesthesiste"]);
                    $sqlSelectPatients = "SELECT * FROM patient WHERE id_anesthesiste	= $id_anesthesiste ORDER BY dateHospitalisation DESC;";
                    $resultSelectPatients = mysqli_query($conn, $sqlSelectPatients);
                
                    while($row = $resultSelectPatients->fetch_assoc()){
                      
                      if($row["etatReanimation"] === "Pré Chirurgie"){
                        $background = "secondary";
                      }elseif($row["etatReanimation"] === "En Réanimation"){
                        $background = "info";
                      }elseif($row["etatReanimation"] === "Post Chirurgie"){
                        $background = "success";
                      }
                      
                      
                      echo '
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/patient.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">'.$row["nom"].' '.$row["prenom"].'</h6>
                              <p class="text-xs text-secondary mb-0">Dossier: '.$row["numeroDossier"].'</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="text-xs font-weight-bold mb-0">'.$row["age"].' ans</p>
                          <p class="text-xs text-secondary mb-0">'.$row["sexe"].'</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="badge badge-sm bg-gradient-'.$background.'">'.$row["etatReanimation"].'</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">'.$row["dateHospitalisation"].'</span>
                        </td>
                        <td class="align-middle">
                          
                          <a href="Modifier_Patient.php?id='.$row["id_patient"].'" class="bg-gradient-warning mb-0 badge abtn" data-toggle="tooltip" data-original-title="Edit user">
                            Détails
                          </a>
                          |
                          <a href="Delete_Patient_Activite.php?id_patient='.$row["id_patient"].'" class="bg-gradient-danger mb-0 badge abtn" data-toggle="tooltip" data-original-title="Edit user">
                            Supprimer
                          </a>

                        </td>
                      </tr>
                      ';
                    }

                    ?>

                  </tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- activités medicales -->
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">activités medicales</h6>
              </div>
            </div>
            <?php
                if ( isset($_GET['Activitesuccess']) ) {
                  echo '<p class="success">'. $_GET['Activitesuccess'] .'</p>';
                }
                if ( isset($_GET['Activiterror']) ) {
                  echo '<p class="error">'. $_GET['Activiterror'] .'</p>';
                }       
            ?>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">activité</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">date début</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Statut</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Pregression</th>
                      <th></th>
                    </tr>
                  </thead>
                  
                  <tbody>

                    <?php
                      $sqlRequest = "SELECT * FROM activites WHERE id_anesthesiste=$id_anesthesiste ORDER BY id_activite DESC";
                      $sqlResult = mysqli_query($conn,$sqlRequest);
                      if(mysqli_num_rows($sqlResult) > 0){
                        while($row = $sqlResult->fetch_assoc()){
                          echo '
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div>
                                  <img src="../assets/img/activity_logo.jpg" class="avatar avatar-sm rounded-circle me-2" alt="activite">
                                </div>
                                <div class="my-auto">
                                  <h6 class="mb-0 text-sm">'.$row["activite"].'</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-sm font-weight-bold mb-0">'.$row["dateDebut"].'</p>
                            </td>
                            <td>
                              <span class="text-xs font-weight-bold">'.$row["statutActivite"].'</span>
                            </td>

                            <td class="align-middle text-center">
                              <div class="d-flex align-items-center justify-content-center">
                                <span class="me-2 text-xs font-weight-bold">'.$row["progression"].'%</span>
                                <div>
                                  <div class="progress">';
                                    if($row["progression"]<=20){
                                      echo'<div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="'.$row["progression"].'" aria-valuemin="0" aria-valuemax="100" style="width: '.$row["progression"].'%;"></div>';
                                    }elseif($row["progression"]>20 && $row["progression"]<50){
                                      echo'<div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="'.$row["progression"].'" aria-valuemin="0" aria-valuemax="100" style="width: '.$row["progression"].'%;"></div>';
                                    }elseif($row["progression"]>=50 && $row["progression"]<80){
                                      echo'<div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="'.$row["progression"].'" aria-valuemin="0" aria-valuemax="100" style="width: '.$row["progression"].'%;"></div>';
                                    }elseif($row["progression"]>=80){
                                      echo'<div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="'.$row["progression"].'" aria-valuemin="0" aria-valuemax="100" style="width: '.$row["progression"].'%;"></div>';
                                    }
                                  
                                  echo '     
                                  </div>
                                </div>
                              </div>
                            </td>
                          
                            <td class="align-middle">

                              <a href="Modifier_activite.php?id_activite='.$row["id_activite"].'" class="bg-gradient-warning mb-0 badge abtn" data-toggle="tooltip" data-original-title="Edit user">
                              Détails
                              </a>
                              |
                              <a href="Delete_Patient_Activite.php?id_activite='.$row["id_activite"].'" class="bg-gradient-danger mb-0 badge abtn" data-toggle="tooltip" data-original-title="Edit user">
                                Supprimer
                              </a>

                            </td>
                          </tr>
                          ';
                        }
                      }
                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- footer -->
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with SMSIS by
                <a href="#" class="font-weight-bold">AnistRea</a>.
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

  <!-- parametres -->
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configurateur d'interface UI</h5>
          <p>options dashboard</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Couleurs de Sidebar</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>


        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixé</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Clair / Sombre</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="../../profil.php">Editer votre Profil</a>
        <div class="w-100 text-center">
          <a class="github-button" href="#" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Mersi pour votre partage !</h6>
          <a href="https://twitter.com" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>




  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>