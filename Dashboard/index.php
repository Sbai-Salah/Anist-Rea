<?php
include '../loginSystem.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logo.png">
  <link rel="icon" type="image/png" href="./assets/img/logo.png">
  <title>
    AnistRea
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">

  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="./assets/img/logo_circle.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-2 font-weight-bold text-white">AnistRea</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <!-- dashboard  -->
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <!-- patients -->
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Patients & Activités</span>
          </a>
        </li>
        <!-- notes -->
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/notifications.php">
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
          <a class="nav-link text-white " href="./pages/Ajouter_patient.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Patient</span>
          </a>
        </li>
        <!-- Ajouter Activité -->
        <li class="nav-item">
          <a class="nav-link text-white " href="./pages/Ajouter_activite.php">
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
          <a class="nav-link text-white " href="../index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">home</i>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
        <!-- profil -->
        <li class="nav-item">
          <a class="nav-link text-white " href="../profil.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profil</span>
          </a>
        </li>
        <!-- log out -->
        <li class="nav-item">
          <a class="nav-link text-white " href="../logOut.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

          <!-- navbar ul -->
          <ul class="navbar-nav  justify-content-end">
            <!-- navbar icon -->
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <!-- parametres icon -->
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

    <?php
      $id_anesthesiste = $_SESSION["id_anesthesiste"];
      $currentDate = date_create(date("Y-m-d"));
      $ThisYear = intval($currentDate->format("Y"));
      $ThisMounth = intval($currentDate->format("m"));
      $ThisDay = intval($currentDate->format("d"));
      $nbrJoursMoisPrecedent = cal_days_in_month(CAL_GREGORIAN,$ThisMounth-1,$ThisYear);
      // today and the day before :
        if($ThisDay!==1){
          $resultCountToday = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth AND DAY(dateHospitalisation)=DAY(CURRENT_DATE) AND id_anesthesiste=$id_anesthesiste;"));
          $resultCountDayBefore = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth AND DAY(dateHospitalisation)=DAY(CURRENT_DATE)-1 AND id_anesthesiste=$id_anesthesiste;"));
        }elseif($ThisDay===1 && $ThisMounth!==1){
          $resultCountToday = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth AND DAY(dateHospitalisation)=DAY(CURRENT_DATE) AND id_anesthesiste=$id_anesthesiste;"));
          $resultCountDayBefore = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth-1 AND DAY(dateHospitalisation)=DAY(CURRENT_DATE)+$nbrJoursMoisPrecedent AND id_anesthesiste=$id_anesthesiste;"));
        }elseif($ThisDay===1 && $ThisMounth===1){
          $resultCountToday = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth AND DAY(dateHospitalisation)=DAY(CURRENT_DATE) AND id_anesthesiste=$id_anesthesiste;"));
          $resultCountDayBefore = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear-1 AND MONTH(dateHospitalisation)=$ThisMounth+11 AND DAY(dateHospitalisation)=DAY(CURRENT_DATE)+$nbrJoursMoisPrecedent AND id_anesthesiste=$id_anesthesiste;"));
        }
      // diffrence 
      $diffrenceBetweenDays = $resultCountToday-$resultCountDayBefore;
    ?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">hotel</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Au jourd'hui</p>
                <h4 class="mb-0"><?php echo $resultCountToday; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <?php
                if($diffrenceBetweenDays>=0){
                  echo '<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+'.$diffrenceBetweenDays.'</span> patients que la veille</p>';
                }else{
                  echo '<p class="mb-0"><span class="text-danger text-sm font-weight-bolder">'.$diffrenceBetweenDays.'</span> patients que la veille</p>';
                }
              ?>
            </div>
          </div>
        </div>

        <?php
          $id_anesthesiste = $_SESSION["id_anesthesiste"];
          $currentDate = date_create(date("Y-m-d"));
          $ThisYear = intval($currentDate->format("Y"));
          $ThisMounth = intval($currentDate->format("m"));
          $ThisDay = intval($currentDate->format("d"));
          $nbrJoursMoisPrecedent = cal_days_in_month(CAL_GREGORIAN,$ThisMounth-1,$ThisYear);

            // This Week :
            if($ThisDay>7){
              $resultCountWeek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth AND DAY(dateHospitalisation)>DAY(CURRENT_DATE)-7 AND id_anesthesiste=$id_anesthesiste;"));
            }elseif($ThisDay<=7 && $ThisMounth!==1){
              $resultCountWeek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth-1 AND DAY(dateHospitalisation)>DAY(CURRENT_DATE)+$nbrJoursMoisPrecedent+$ThisDay-7 AND id_anesthesiste=$id_anesthesiste;"));
            }elseif($ThisDay<=7 && $ThisMounth===1){
              $resultCountWeek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear-1 AND MONTH(dateHospitalisation)=$ThisMounth+11 AND DAY(dateHospitalisation)>DAY(CURRENT_DATE)+$nbrJoursMoisPrecedent+$ThisDay-7 AND id_anesthesiste=$id_anesthesiste;"));
            }
            // Last Week :
            if($ThisDay>14){
              $resultCounLasttWeek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth AND id_anesthesiste=$id_anesthesiste AND DAY(dateHospitalisation)<DAY(CURRENT_DATE)-7 AND DAY(dateHospitalisation)>DAY(CURRENT_DATE)-14;"));
            }elseif($ThisDay<=14 && $ThisMounth!==1){
              $resultCounLasttWeek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth-1 AND id_anesthesiste=$id_anesthesiste AND DAY(dateHospitalisation)<DAY(CURRENT_DATE)+$nbrJoursMoisPrecedent+$ThisDay-7 AND DAY(dateHospitalisation)>DAY(CURRENT_DATE)+$nbrJoursMoisPrecedent+$ThisDay-14;"));
            }elseif($ThisDay<=14 && $ThisMounth===1){
              $resultCounLasttWeek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear-1 AND MONTH(dateHospitalisation)=$ThisMounth+11 AND id_anesthesiste=$id_anesthesiste AND DAY(dateHospitalisation)<DAY(CURRENT_DATE)+$nbrJoursMoisPrecedent+$ThisDay-7 AND DAY(dateHospitalisation)>DAY(CURRENT_DATE)+$nbrJoursMoisPrecedent+$ThisDay-14;"));
            }
          // diffrence 
          $diffrenceBetweenWeeks = $resultCountWeek-$resultCounLasttWeek;
        ?>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">hotel</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Sette Semaine</p>
                <h4 class="mb-0"><?php echo $resultCountWeek; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <?php
                if($diffrenceBetweenWeeks>=0){
                  echo '<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+'.$diffrenceBetweenWeeks.'</span> que dernière sem</p>';
                }else{
                  echo '<p class="mb-0"><span class="text-danger text-sm font-weight-bolder">'.$diffrenceBetweenWeeks.'</span> que dernière sem</p>';
                }
              ?>
            </div>
          </div>
        </div>
        
        <?php
          $id_anesthesiste = $_SESSION["id_anesthesiste"];
          $currentDate = date_create(date("Y-m-d"));
          $ThisYear = intval($currentDate->format("Y"));
          $ThisMounth = intval($currentDate->format("m"));

          // This Month and the Month before :
            if($ThisMounth!==1){
              $resultCountMonth = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth  AND id_anesthesiste=$id_anesthesiste;"));
              $resultCountMonthBefore = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth-1 AND id_anesthesiste=$id_anesthesiste;"));
            }elseif($ThisMounth===1){
              $resultCountMonth = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth AND id_anesthesiste=$id_anesthesiste;"));
              $resultCountMonthBefore = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear-1 AND MONTH(dateHospitalisation)=$ThisMounth+11 AND id_anesthesiste=$id_anesthesiste;"));
            }
          // diffrence 
          $diffrenceBetweenMonths = $resultCountMonth-$resultCountMonthBefore;
        ?>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">hotel</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Ce mois</p>
                <h4 class="mb-0"><?php echo $resultCountMonth; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <?php
                if($diffrenceBetweenMonths>=0){
                  echo '<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+'.$diffrenceBetweenMonths.'</span> que le mois passé</p>';
                }else{
                  echo '<p class="mb-0"><span class="text-danger text-sm font-weight-bolder">'.$diffrenceBetweenMonths.'</span> que le mois passé</p>';
                }
              ?>
            </div>
          </div>
        </div>

        <?php
          $id_anesthesiste = $_SESSION["id_anesthesiste"];
          $currentDate = date_create(date("Y-m-d"));
          $ThisYear = intval($currentDate->format("Y"));
          $ThisMounth = intval($currentDate->format("m"));

          // Activites This Month and the Month before :
            if($ThisMounth!==1){
              $AresultCountMonth = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM activites HAVING YEAR(dateDebut)=$ThisYear AND MONTH(dateDebut)=$ThisMounth  AND id_anesthesiste=$id_anesthesiste;"));
              $AresultCountMonthBefore = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM activites HAVING YEAR(dateDebut)=$ThisYear AND MONTH(dateDebut)=$ThisMounth-1 AND id_anesthesiste=$id_anesthesiste;"));
            }elseif($ThisMounth===1){
              $AresultCountMonth = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM activites HAVING YEAR(dateDebut)=$ThisYear AND MONTH(dateDebut)=$ThisMounth AND id_anesthesiste=$id_anesthesiste;"));
              $AresultCountMonthBefore = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM activites HAVING YEAR(dateDebut)=$ThisYear-1 AND MONTH(dateDebut)=$ThisMounth+11 AND id_anesthesiste=$id_anesthesiste;"));
            }
          // diffrence 
          $AdiffrenceBetweenMonths = $AresultCountMonth-$AresultCountMonthBefore;
        ?>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">medical_information</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Service Medical</p>
                <h4 class="mb-0"><?php echo $AresultCountMonth ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <?php
                if($AdiffrenceBetweenMonths>=0){
                  echo '<p class="mb-0"><span class="text-success text-sm font-weight-bolder">+'.$AdiffrenceBetweenMonths.'</span> que le mois passé</p>';
                }else{
                  echo '<p class="mb-0"><span class="text-danger text-sm font-weight-bolder">'.$AdiffrenceBetweenMonths.'</span> que le mois passé</p>';
                }
              ?>
            </div>
          </div>
        </div>
      </div>

      <!-- chart 1 -------------------------------------------- -->
      <div class="row mt-4">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Nombre des patients</h6>
              <p class="text-sm ">Statistiques de semaine</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> variation quotidienne </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 "> Nombre des patients </h6>
              <p class="text-sm "> (<span class="font-weight-bolder"><?php echo $diffrenceBetweenMonths ?></span>) Statistiques de mois. </p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> variation mensuele </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Services Medicals </h6>
              <p class="text-sm ">Statistiques de semaine</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">derniere mis à jours : mardi</p>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="row mb-4">
        <!-- table des patients -->
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Derniers Patients Hospitalisés </h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1"><?php echo $resultCountWeek; ?></span> Cette Semaine
                  </p>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nom</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">prenom</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date de Hospitalisation</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">progression traitement</th>
                    </tr>
                  </thead>

                  <tbody>

                    <!-- patient -->
                    <?php
                    $id_anesthesiste = intval($_SESSION["id_anesthesiste"]);
                    $sqlSelectPatients = "SELECT * FROM patient WHERE id_anesthesiste	= $id_anesthesiste ORDER BY dateHospitalisation DESC LIMIT 0, 10;";
                    $resultSelectPatients = mysqli_query($conn, $sqlSelectPatients);

                    if ($resultSelectPatients = $conn->query($sqlSelectPatients)) {
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
                            <!-- photo -->
                            <div>
                              <img src="./assets/img/patient.jpg" class="avatar avatar-sm me-3" alt="xd">
                            </div>
                            <!-- nom -->
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">'.$row["nom"].'</h6>
                            </div>
                          </div>
                        </td>
                        <!-- prenom -->
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold">'.$row["prenom"].'</span>
                        </td>
                        <!-- date -->
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold">'.$row["dateHospitalisation"].'</span>
                        </td>

                        <!-- progression de traitement -->
                        <td class="align-middle">
                          <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">'.$row["progression"].'%</span>
                              </div>
                            </div>
                            <div class="progress">
                            ';
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

        <!-- les activitées -->

        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Vos Dernieres Activitées</h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                <span class="font-weight-bold">24%</span> Ce Mois
              </p>
            </div>
            <div class="card-body p-3">
              <div class="timeline timeline-one-side">
                <?php
                  $sqlRequest = "SELECT * FROM activites WHERE id_anesthesiste=$id_anesthesiste ORDER BY id_activite DESC LIMIT 0, 10";
                  $sqlResult = mysqli_query($conn,$sqlRequest);
                  if(mysqli_num_rows($sqlResult) > 0){
                    while($row = $sqlResult->fetch_assoc()){
                      echo '
                      <div class="timeline-block mb-3">
                        <span class="timeline-step">';
                        if($row["progression"]<=20){
                          echo'<i class="material-icons text-danger text-gradient">notifications</i>';
                        }elseif($row["progression"]>20 && $row["progression"]<50){
                          echo'<i class="material-icons text-warning text-gradient">notifications</i>';
                        }elseif($row["progression"]>=50 && $row["progression"]<80){
                          echo'<i class="material-icons text-info text-gradient">notifications</i>';
                        }elseif($row["progression"]>=80){
                          echo'<i class="material-icons text-success text-gradient">notifications</i>';
                        }
                      echo '
                        </span>
                        <div class="timeline-content">
                          <h6 class="text-dark text-sm font-weight-bold mb-0">'.$row["activite"].'</h6>
                          <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">'.$row["dateFin"].'</p>
                        </div>
                      </div>
                      ';
                    }
                  }
                ?>
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
        <a class="btn btn-outline-dark w-100" href="../profil.php">Editer votre Profil</a>
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
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>

  <?php
      $id_anesthesiste = $_SESSION["id_anesthesiste"];
      $currentDate = date_create(date("Y-m-d"));
      $ThisYear = intval($currentDate->format("Y"));
      $ThisMounth = intval($currentDate->format("m"));
      $ThisDay = intval($currentDate->format("d"));
      // nombre de jours du mois precedent:
      $nbrJoursMoisPrecedent = cal_days_in_month(CAL_GREGORIAN,$ThisMounth-1,$ThisYear);



      // statistiques patient de semaine :
      $NbrPatientDay = array();
      for($i=0;$i<7;$i++){

        if($ThisDay-$i<=0 && $ThisMounth!==1){
          $NbrPatientDay[$i] = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth-1 AND DAY(dateHospitalisation)=DAY(CURRENT_DATE)+$nbrJoursMoisPrecedent-$i AND id_anesthesiste=$id_anesthesiste;"));
        }elseif($ThisDay-$i<=0 && $ThisMounth===1){
          $NbrPatientDay[$i] = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear-1 AND MONTH(dateHospitalisation)=$ThisMounth+11 AND DAY(dateHospitalisation)=DAY(CURRENT_DATE)+$nbrJoursMoisPrecedent-$i AND id_anesthesiste=$id_anesthesiste;"));
        }elseif($ThisDay-$i>0){
          $NbrPatientDay[$i] = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient HAVING YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth AND DAY(dateHospitalisation)=DAY(CURRENT_DATE)-$i AND id_anesthesiste=$id_anesthesiste;"));
        }
      }
      // statistiques patient de mois :
      $NbrPatientMonth = array();
      for($i=0;$i<9;$i++){
        if(($ThisMounth-$i) > 0){
          $NbrPatientMonth[$i] = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient WHERE id_anesthesiste=$id_anesthesiste HAVING  YEAR(dateHospitalisation)=$ThisYear AND MONTH(dateHospitalisation)=$ThisMounth-$i;"));
        }elseif(($ThisMounth-$i) <= 0){
          $NbrPatientMonth[$i] = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM patient WHERE id_anesthesiste=$id_anesthesiste HAVING YEAR(dateHospitalisation)=$ThisYear-1 AND MONTH(dateHospitalisation)=$ThisMounth+12-$i;"));
        }
      }

      // statistiques activités de mois 
      $NbrActiviteMonth = array();
      for($i=0;$i<9;$i++){
        if(($ThisMounth-$i) > 0){
          echo $ThisMounth-$i;
          $NbrActiviteMonth[$i] = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM activites WHERE id_anesthesiste=$id_anesthesiste HAVING  YEAR(dateDebut)=$ThisYear AND MONTH(dateDebut)=$ThisMounth-$i;"));
        }elseif(($ThisMounth-$i) <= 0){
          $NbrActiviteMonth[$i] = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM activites WHERE id_anesthesiste=$id_anesthesiste HAVING YEAR(dateDebut)=$ThisYear-1 AND MONTH(dateDebut)=$ThisMounth+12-$i;"));
        }
      }


      // weekList
      $WeekDays = ["L", "M", "M", "J", "V", "S", "D"];
      $NewWeekDaysFormat = array();
      $todayIndex = date("w")-1;
      for($i=$todayIndex;$i>=0;$i--){
          array_unshift($NewWeekDaysFormat,$WeekDays[$i]);
      }
      for($i=count($WeekDays)-1;$i>$todayIndex;$i--){
          array_unshift($NewWeekDaysFormat,$WeekDays[$i]);
      }

      // mountList
      $MonthList = ["Jan", "Fev", "Mar", "Avr", "Mai", "Juin", "Jui", "Aout", "Sep","Oct","Nov","Dec"];
      $NewMonthListFormat = array();
      $ThisMonthIndex = intval(date("m"));
      for($i=$ThisMonthIndex;$i>=0;$i--){
          array_unshift($NewMonthListFormat,$MonthList[$i]);
      }
      for($i=count($MonthList)-1;$i>=$ThisMonthIndex;$i--){
          array_unshift($NewMonthListFormat,$MonthList[$i]);
      }
    ?>

  <script>
    
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        
        labels: [<?php echo '"'.$NewWeekDaysFormat[0].'","'.$NewWeekDaysFormat[1].'","'.$NewWeekDaysFormat[2].'","'.$NewWeekDaysFormat[3].'","'.$NewWeekDaysFormat[4].'","'.$NewWeekDaysFormat[5].'","'.$NewWeekDaysFormat[6].'"'; ?>],
        datasets: [{
          label: "Patient",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          // data: [0, 2, 3, 3, 1, 2, 2],
          data: [ <?php echo $NbrPatientDay[6].','.$NbrPatientDay[5].','.$NbrPatientDay[4].','.$NbrPatientDay[3].','.$NbrPatientDay[2].','.$NbrPatientDay[1].','.$NbrPatientDay[0];?>],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");
    
    new Chart(ctx2, {
      type: "line",
      data: {
        labels: [<?php echo '"'.$NewMonthListFormat[3].'","'.$NewMonthListFormat[4].'","'.$NewMonthListFormat[5].'","'.$NewMonthListFormat[6].'","'.$NewMonthListFormat[7].'","'.$NewMonthListFormat[8].'","'.$NewMonthListFormat[9].'","'.$NewMonthListFormat[10].'","'.$NewMonthListFormat[11].'"'; ?>],
        datasets: [{
          label: "Patient",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [ <?php echo $NbrPatientMonth[8].','.$NbrPatientMonth[7].','.$NbrPatientMonth[6].','.$NbrPatientMonth[5].','.$NbrPatientMonth[4].','.$NbrPatientMonth[3].','.$NbrPatientMonth[2].','.$NbrPatientMonth[1].','.$NbrPatientMonth[0];?>],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: [<?php echo '"'.$NewMonthListFormat[3].'","'.$NewMonthListFormat[4].'","'.$NewMonthListFormat[5].'","'.$NewMonthListFormat[6].'","'.$NewMonthListFormat[7].'","'.$NewMonthListFormat[8].'","'.$NewMonthListFormat[9].'","'.$NewMonthListFormat[10].'","'.$NewMonthListFormat[11].'"'; ?>],
        datasets: [{
          label: "Patient",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [<?php echo $NbrActiviteMonth[8].','.$NbrActiviteMonth[7].','.$NbrActiviteMonth[6].','.$NbrActiviteMonth[5].','.$NbrActiviteMonth[4].','.$NbrActiviteMonth[3].','.$NbrActiviteMonth[2].','.$NbrActiviteMonth[1].','.$NbrActiviteMonth[0];?>],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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
  <script src="./assets/js/material-dashboard.min.js?v=3.0.2"></script>
</body>

</html>