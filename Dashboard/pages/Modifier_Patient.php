<?php

include 'PatientDataBase.php';
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
      <a class="navbar-brand m-0" href="#">
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
          <a class="nav-link text-white" href="Ajouter_patient.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Patient</span>
          </a>
        </li>
        <!-- Ajouter Activité -->
        <li class="nav-item">
          <a class="nav-link text-white" href="Ajouter_patient.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Patients & Activités</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Patients Détails</h6>
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


    <!-- Modifier un Patient -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Modifier le Patient</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">



              <!-- form --------------------------------------------------------------------------------------------- -->
              
              <script src="https://cdn01.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
              <script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.32582" type="text/javascript"></script>
              <script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.32582" type="text/javascript"></script>
              <script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.32582" type="text/javascript"></script>
              <script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.32582" type="text/javascript"></script>
              <script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
              <script src="https://js.jotform.com/vendor/postMessage.js?3.3.32582" type="text/javascript"></script>
              <script src="https://js.jotform.com/WidgetsServer.js?v=1649847781027" type="text/javascript"></script>
              <!-- Dynamically Add or Remove input fields -->
              <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

              <style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
              <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?"/>
              <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.32582" />
              <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.32582" />

              <!-- style and script -->
              <link rel="stylesheet" href="form.css">
              <script src="form.js"></script>

              <form class="jotform-form" action="" method="post" name="modifierPatient" id="221017784288562" accept-charset="utf-8" autocomplete="on">
                
                <div role="main" class="form-all">
                    <ul class="form-section page-section">
                      <li id="cid_1" class="form-input-wide" data-type="control_head">
                          <div class="form-header-group  header-large">

                            <div class="header-text httac htvam">
                                <h1 id="header_1" class="form-header" data-component="header">
                                  <img src="/anistrea/Dashboard/assets/img/modifierPatient.png" style="width: 70px;float: left;" alt="">
                                  Modifier le Patient
                                </h1>
                            </div>
                          </div>
                      </li>
                      <?php
                        $id = $_GET["id"];
                        $id_anesthesiste = intval($_SESSION["id_anesthesiste"]);
                        $sqlSelectPatientToModify = "SELECT * FROM patient WHERE id_anesthesiste	= $id_anesthesiste AND id_patient=$id;";
                        $resultSelectPatientToModify = mysqli_query($conn, $sqlSelectPatientToModify);
                        
                        if(mysqli_num_rows($resultSelectPatientToModify) > 0){
                          while($row = $resultSelectPatientToModify->fetch_assoc()){
                            $Nom = $row['nom'];
                            $Prenom = $row['prenom'];
                            $cIN = $row['CIN'];
                            $dateNaissance = $row['DateNaissance'];
                            $Sexe = $row['sexe'];
                            $SituationFamiliale = $row['situationFamiliale'];
                            $Email = $row['email'];
                            $Telephone = $row['telephone'];
                            $AdresseRue = $row['adresseRue'];
                            $Ville = $row['ville'];
                            $Province = $row['province'];
                            $ZipCode = $row['zipCode'];
                            $EtatReanimation = $row['etatReanimation'];
                            $DateHospitalisation = $row['dateHospitalisation'];
                            $NumeroDossier = $row['numeroDossier'];
                            $Progression = $row['progression'];
                            $NomContact = $row['nomContact'];
                            $PrenomContact = $row['prenomContact'];
                            $TelephoneContact = $row['telephoneContact'];
                            $Age = $row['age'];
                          }
                        }
                      ?>
                        
                        <!-- nom et prenom -->
                        <li class="form-line form-line-column form-col-1" data-type="control_fullname" id="id_3">
                            <label class="form-label form-label-top form-label-auto" id="label_3" for="first_3"> Nom et Prenom </label>
                            <div id="cid_3" class="form-input-wide" data-layout="full">
                              <div data-wrapper-react="true">
                                  <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                  <!-- nom -->
                                  <input type="text" id="first_3" name="nom" class="form-textbox" autoComplete="section-input_3 given-name" size="10" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $Nom;}else{echo "";}?>" data-component="first" aria-labelledby="label_3 sublabel_3_first" required/>
                                  <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Nom </label>
                                  </span>
                                  <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                                  <!-- prenom -->
                                  <input type="text" id="last_3" name="prenom" class="form-textbox" autoComplete="section-input_3 family-name" size="15" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $Prenom;}else{echo "";}?>" data-component="last" aria-labelledby="label_3 sublabel_3_last" required/>
                                  <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Prenom </label>
                                  </span>
                              </div>
                            </div>
                        </li>
  
                        <!-- code identité nationale -->
                        <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_13">
                            <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13"> Code Identité Nationale (CIN)</label>
                            <div id="cid_13" class="form-input-wide" data-layout="half">
                              <input type="text" id="input_13" name="CIN" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $cIN;}else{echo "";}?>" data-component="textbox" aria-labelledby="label_13" required/>
                            </div>
                        </li>
  
                        <!-- Date de Naissance -->
                        <li class="form-line form-line-column form-col-3" data-type="control_datetime" id="id_8">
                            <label class="form-label form-label-top form-label-auto" id="label_8" for="lite_mode_8"> Date de Naissance </label>
                            <div id="cid_8" class="form-input-wide" data-layout="half">
                              <div data-wrapper-react="true">
                                  <span class="form-sub-label-container" style="vertical-align:top">
                                  <input type="text" name="DateNaissance" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_8" size="12" data-maxlength="12" maxLength="12" data-age="" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $dateNaissance;}else{echo "";}?>" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="section-input_8 off" aria-labelledby="label_8 sublabel_8_litemode" required/>
                                  <img class="newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_8_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
                                  <label class="form-sub-label" for="lite_mode_8" id="sublabel_8_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
                                  </span>
                              </div>
                            </div>
                          </li>
  
                        <!-- Sexe -->
                        <li class="form-line form-line-column form-col-4" data-type="control_radio" id="id_9">
                            <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9"> Sexe </label>
                            <div id="cid_9" class="form-input-wide" data-layout="full">
                              <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_9" data-component="radio">
                                    <span class="form-radio-item">
                                    <span class="dragger-item">
                                    </span>
                                    <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_0" name="sexe" value="Female" <?php if(mysqli_num_rows($resultSelectPatientToModify)>0 && $Sexe==="Female"){echo "checked";}else{echo "";}?>/>
                                    <label id="label_input_9_0" for="input_9_0"> Female </label>
                                    </span>
                                    <span class="form-radio-item">
                                    <span class="dragger-item">
                                    </span>
                                    <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_1" name="sexe" value="Male" <?php if(mysqli_num_rows($resultSelectPatientToModify)>0 && $Sexe==="Male"){echo "checked";}else{echo "";}?>/>
                                    <label id="label_input_9_1" for="input_9_1"> Male </label>
                                    </span>
                              </div>
                            </div>
                        </li>
  
                        <!-- Situation Familiale -->
                        <li class="form-line" data-type="control_radio" id="id_23">
                            <label class="form-label form-label-top" id="label_23" for="input_23"> Situation Familiale </label>
                            <div id="cid_23" class="form-input-wide" data-layout="full">
                              <div class="form-single-column" role="group" aria-labelledby="label_23" data-component="radio">
                                <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" name="situationFamiliale" aria-describedby="label_23" class="form-radio" id="input_23_0" value="Marié" <?php if(mysqli_num_rows($resultSelectPatientToModify)>0 && $SituationFamiliale==="Marié"){echo "checked";}else{echo "";}?>/>
                                <label id="label_input_23_0" for="input_23_0"> Marié </label>
                                </span>
                                <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" name="situationFamiliale" aria-describedby="label_23" class="form-radio" id="input_23_1" value="Célibataire" <?php if(mysqli_num_rows($resultSelectPatientToModify)>0 && $SituationFamiliale==="Célibataire"){echo "checked";}else{echo "";}?>/>
                                <label id="label_input_23_1" for="input_23_1"> Célibataire </label>
                                </span>
                                <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" name="situationFamiliale" aria-describedby="label_23" class="form-radio" id="input_23_2" value="divorcé" <?php if(mysqli_num_rows($resultSelectPatientToModify)>0 && $SituationFamiliale==="divorcé"){echo "checked";}else{echo "";}?>/>
                                <label id="label_input_23_2" for="input_23_2"> divorcé </label> 
                                </span>
                                <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" name="situationFamiliale" aria-describedby="label_23" class="form-radio" id="input_23_3" value="Veuve" <?php if(mysqli_num_rows($resultSelectPatientToModify)>0 && $SituationFamiliale==="Veuve"){echo "checked";}else{echo "";}?>/>
                                <label id="label_input_23_0" for="input_23_3"> Veuve </label>
                                </span>
                              </div>
                            </div>
                        </li>
  
                        <!-- email -->
                        <li class="form-line form-line-column form-col-5" data-type="control_email" id="id_4">
                            <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4"> Email </label>
                            <div id="cid_4" class="form-input-wide" data-layout="half">
                              <span class="form-sub-label-container" style="vertical-align:top">
                              <input type="email" id="input_4" name="email" class="form-textbox validate[Email]" data-defaultvalue="" style="width:310px" size="310" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $Email;}else{echo "";}?>" data-component="email" aria-labelledby="label_4 sublabel_input_4"/>
                              <label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px" aria-hidden="false"> exemple@exemple.com </label>
                              </span>
                            </div>
                        </li>
  
                        <!-- Telephone -->
                        <li class="form-line form-line-column form-col-6" data-type="control_phone" id="id_5">
                            <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5_full"> Telephone </label>
                            <div id="cid_5" class="form-input-wide" data-layout="half">
                              <span class="form-sub-label-container" style="vertical-align:top">
                              <input type="tel" name="telephone" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue="" autoComplete="section-input_5 tel-national" style="width:310px" data-masked="true" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $Telephone;}else{echo "";}?>" placeholder="+212" data-component="phone" aria-labelledby="label_5 sublabel_5_masked" required/>
                              <label class="form-sub-label" for="input_5_full" id="sublabel_5_masked" style="min-height:13px" aria-hidden="false"> Entrer un numéro de téléphone valide. </label>
                              </span>
                            </div>
                        </li>
  
                        <!-- Addresse -->
                        <li class="form-line" data-type="control_address" id="id_6">
                            <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6_addr_line1"> Addresse </label>
                            <div id="cid_6" class="form-input-wide" data-layout="full">
                              <div summary="" class="form-address-table jsTest-addressField">
                                  
                                  <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                    <span class="form-address-line form-address-street-line jsTest-address-lineField">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="text" id="input_6_addr_line1" name="adresseRue" class="form-textbox form-address-line" data-defaultvalue="" autoComplete="section-input_6 address-line1" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $AdresseRue;}else{echo "";}?>" data-component="address_line_1" aria-labelledby="label_6 sublabel_6_addr_line1" required />
                                    <label class="form-sub-label" for="input_6_addr_line1" id="sublabel_6_addr_line1" style="min-height:13px" aria-hidden="false"> Addresse Rue </label>
                                    </span>
                                    </span>
                                  </div>
                                  <!--Ville / Region / Province -->
                                  <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                    <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="text" id="input_6_city" name="ville" class="form-textbox form-address-city" data-defaultvalue="" autoComplete="section-input_6 address-level2" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $Ville;}else{echo "";}?>" data-component="city" aria-labelledby="label_6 sublabel_6_city" required />
                                    <label class="form-sub-label" for="input_6_city" id="sublabel_6_city" style="min-height:13px" aria-hidden="false"> Ville </label>
                                    </span>
                                    </span>
                                    <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="text" id="input_6_state" name="province" class="form-textbox form-address-state" data-defaultvalue="" autoComplete="section-input_6 address-level1" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $Province;}else{echo "";}?>" data-component="state" aria-labelledby="label_6 sublabel_6_state" required />
                                    <label class="form-sub-label" for="input_6_state" id="sublabel_6_state" style="min-height:13px" aria-hidden="false"> Region / Province </label>
                                    </span>
                                    </span>
                                  </div>
                                  <!-- Postale / Zip Code -->
                                  <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                    <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                                    <span class="form-sub-label-container" style="vertical-align:top">
                                    <input type="text" id="input_6_postal" name="zipCode" class="form-textbox form-address-postal" data-defaultvalue="" autoComplete="section-input_6 postal-code" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $ZipCode;}else{echo "";}?>" data-component="zip" aria-labelledby="label_6 sublabel_6_postal" required />
                                    <label class="form-sub-label" for="input_6_postal" id="sublabel_6_postal" style="min-height:13px" aria-hidden="false"> Postale / Zip Code </label>
                                    </span>
                                    </span>
                                  </div>
                              </div>
                            </div>
                        </li>
  
                        <!-- Etat de Réanimation -->
                        <li class="form-line" data-type="control_radio" id="id_23">
                            <label class="form-label form-label-top" id="label_23" for="input_23"> Etat de Réanimation </label>
                            <div id="cid_23" class="form-input-wide" data-layout="full">
                              <div class="form-single-column" role="group" data-component="radio">
                                  <span class="form-radio-item" style="clear:left">
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="PréChirurgie" name="etatReanimation" class="form-radio" value="Pré Chirurgie" <?php if(mysqli_num_rows($resultSelectPatientToModify)>0 && $EtatReanimation==="Pré Chirurgie"){echo "checked";}else{echo "";}?>/>
                                  <label for="PréChirurgie"> Pré Chirurgie </label>
                                  </span>
                                  <span class="form-radio-item" style="clear:left">
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="EnRéanimation" name="etatReanimation" class="form-radio" value="En Réanimation" <?php if(mysqli_num_rows($resultSelectPatientToModify)>0 && $EtatReanimation==="En Réanimation"){echo "checked";}else{echo "";}?>/>
                                  <label for="EnRéanimation"> En Réanimation </label>
                                  </span>
                                  <span class="form-radio-item" style="clear:left">
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="PostChirurgie" name="etatReanimation" class="form-radio" value="Post Chirurgie" <?php if(mysqli_num_rows($resultSelectPatientToModify)>0 && $EtatReanimation==="Post Chirurgie"){echo "checked";}else{echo "";}?>/>
                                  <label for="PostChirurgie"> Post Chirurgie </label> 
                                  </span>
                              </div>
                            </div>
                        </li>
  
                        <!-- personne à contacter en cas d'urgence -->
                        <li class="form-line form-line-column form-col-1" data-type="control_fullname" id="id_3">
                            <label class="form-label form-label-top form-label-auto" id="label_3" for="first_3"> personne à contacter en cas d'urgence </label>
                            <div id="cid_3" class="form-input-wide" data-layout="full">
                              <div data-wrapper-react="true">
                                  <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                  <input type="text" id="first_3" name="nomContact" class="form-textbox" data-defaultvalue="" autoComplete="section-input_3 given-name" size="10" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $NomContact;}else{echo "";}?>" data-component="first" aria-labelledby="label_3 sublabel_3_first" required/>
                                  <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Nom </label>
                                  </span>
                                  <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                                  <input type="text" id="last_3" name="prenomContact" class="form-textbox" data-defaultvalue="" autoComplete="section-input_3 family-name" size="15" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $PrenomContact;}else{echo "";}?>" data-component="last" aria-labelledby="label_3 sublabel_3_last" required/>
                                  <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Prenom </label>
                                  </span>
                              </div>
                            </div>
                        </li>
                        
                        <!-- contactTelephone -->
                        <li class="form-line form-line-column form-col-6" data-type="control_phone" id="id_5">
                            <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5_full"> Telephone </label>
                            <div id="cid_5" class="form-input-wide" data-layout="half">
                              <span class="form-sub-label-container" style="vertical-align:top">
                              <input type="tel" name="telephoneContact" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue="" autoComplete="section-input_5 tel-national" style="width:310px" data-masked="true" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $TelephoneContact;}else{echo "";}?>" placeholder="+212" data-component="phone" aria-labelledby="label_5 sublabel_5_masked" required/>
                              <label class="form-sub-label" for="input_5_full" id="sublabel_5_masked" style="min-height:13px" aria-hidden="false"> s'il vous plaît entrer un numéro de téléphone valide. </label>
                              </span>
                            </div>
                        </li>
  
                        <!-- Date de Hospitalisation -->
                        <li class="form-line form-line-column form-col-3" data-type="control_datetime" id="id_8">
                            <label class="form-label form-label-top form-label-auto" id="label_8" for="lite_mode_8"> Date de Hospitalisation </label>
                            <div id="cid_8" class="form-input-wide" data-layout="half">
                              <div data-wrapper-react="true">
                                  <span class="form-sub-label-container" style="vertical-align:top">
                                  <input type="text" name="dateHospitalisation" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_8" size="12" data-maxlength="12" maxLength="12" data-age="" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $DateHospitalisation;}else{echo "";}?>" data-format="mmddyyyy" data-seperator="-" placeholder="MM-DD-YYYY" autoComplete="section-input_8 off" aria-labelledby="label_8 sublabel_8_litemode" required/>
                                  <img class="newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_8_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
                                  <label class="form-sub-label" for="lite_mode_8" id="sublabel_8_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
                                  </span>
                              </div>
                            </div>
                        </li>
  
                        <!-- Numero Dossier -->
                        <li class="form-line form-line-column form-col-5" data-type="control_email" id="id_4">
                            <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4"> Numero Dossier </label>
                            <div id="cid_4" class="form-input-wide" data-layout="half">
                              <span class="form-sub-label-container" style="vertical-align:top">
                              <input type="text" id="input_4" name="numeroDossier" class="form-textbox validate[Email]" data-defaultvalue="" style="width:310px" size="310" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $NumeroDossier;}else{echo "";}?>" data-component="email" aria-labelledby="label_4 sublabel_input_4"/>
                              <label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px" aria-hidden="false"> Dossier Medical </label>
                              </span>
                            </div>
                        </li>
                        
                        <!-- progression -->
                      <label class="form-label form-label-top" id="progression" for="progression"> Progression de Traitement </label>
                        <div id="cid_13" class="form-input-wide">
                          <input type="range" id="progression" name="progression" min="0" max="100" step="10" class="form-textbox" style="width:70%;" size="310" value="<?php if(mysqli_num_rows($resultSelectPatientToModify)>0){echo $Progression;}else{echo "";}?>"/>
                        </div>
                        <label class="form-sub-label" for="progression" style="min-height:13px" aria-hidden="false"> (0% = traitement pas encore commencé. 100% = traitement finie.) </label>

                      
                      <!-- Sauvgarder -->
                      <li class="form-line" data-type="control_button" id="id_2">
                          <div id="cid_2" class="form-input-wide" data-layout="full">
                            <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                                <button id="input_2" type="submit" name="Sauvgarder" class="form-submit-button form-submit-button-book_blue2 submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
                                Sauvgarder
                                </button>
                            </div>
                          </div>
                      </li>
                    </ul>

                </div>
                <script type="text/javascript">
                    var all_spc = document.querySelectorAll("form[id='221017784288562'] .si" + "mple" + "_spc");
                    for (var i = 0; i < all_spc.length; i++)
                    {
                    all_spc[i].value = "221017784288562-221017784288562";
                    }
                </script>
              </form>
              <script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.32582"></script>
              <script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.32582"></script>

              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- informations Pré Anesthesique -->
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Formulaire de Questionnaire Pré Anesthesique</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2" style="padding-top: 0rem;">
              <div class="table-responsive p-0">



              <!-- form --------------------------------------------------------------------------------------------- -->

              <form class="jotform-form" action="" method="post" name="QuestionnairePréAnesthesique" id="QuestionnairePréAnesthesique" accept-charset="utf-8" autocomplete="on">
                
                <!-- Questionnaire Preanesthesique -->
                <div role="main" class="form-all">
                    <ul class="form-section page-section">
                      <li id="cid_1" class="form-input-wide" data-type="control_head">
                          <div class="form-header-group  header-large" style="padding-bottom: 45px;">
                            <div class="header-text httac htvam">
                                <h1 id="header_1" class="form-header" data-component="header">
                                  <img src="/anistrea/Dashboard/assets/img/QPAicon.png" style="width: 80px;float: left;margin-bottom:5px;" alt="">
                                  Questionnaire Pré Anesthesique
                                </h1>
                            </div>
                          </div>
                      </li>
                      <!-- INTERVENTION PRÉVUE LE -->
                      <?php
                      $id_patient = $_GET["id"];
                      $QPAQuery = "SELECT * FROM questionnaire_pré_anesthesique WHERE id_patient=$id_patient;";
                      $QPAResult = mysqli_query($conn, $QPAQuery);

                      if(mysqli_num_rows($QPAResult) > 0){
                        while($row = $QPAResult->fetch_assoc()){
                          $DateIntervention = $row["DateIntervention"];
                          $lieuIntervention = $row['lieuIntervention'];
                          $poids = $row['poids'];
                          $taille = $row['taille'];
                          $QRPNom = $row['QRPNom'];
                          $QRPPrenom = $row['QRPPrenom'];
                        }
                      }
                      ?>

                      <li class="form-line form-line-column form-col-3" data-type="control_datetime" id="DateIntervention">
                          <label class="form-label form-label-top form-label-auto" id="label_8" for="DateIntervention"> INTERVENTION PRÉVUE LE </label>
                          <div id="cid_8" class="form-input-wide" data-layout="half">
                            <div data-wrapper-react="true">
                                <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" name="DateIntervention" value="<?php if(mysqli_num_rows($QPAResult)>0){echo $DateIntervention;}else{echo "";} ?>" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_8" size="12" data-maxlength="12" maxLength="12" data-age="" data-format="yyyymmdd" data-seperator="-" placeholder="YYYY-MM-DD">
                                <img class="newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_8_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
                                <label class="form-sub-label" for="lite_mode_8" id="sublabel_8_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
                                </span>
                            </div>
                          </div>
                      </li>
                      <!-- INTERVENTION PRÉVUE À  -->
                      <li class="form-line form-line-column form-col-5" data-type="control_email" id="id_4">
                          <label class="form-label form-label-top form-label-auto" id="label_4" for="input_4"> À </label>
                          <div id="cid_4" class="form-input-wide" data-layout="half">
                            <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" id="input_4" name="lieuIntervention" value="<?php if(mysqli_num_rows($QPAResult)>0){echo $lieuIntervention;}else{echo "";} ?>" placeholder="Lieu Intervention" class="form-textbox" style="width:310px" size="310" />
                            <label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px" aria-hidden="false"> Hopital </label>
                            </span>
                          </div>
                      </li>


                      <!-- Poids et Taille -->
                      <li class="form-line form-line-column form-col-1" data-type="control_fullname" id="id_3">
                          <label class="form-label form-label-top form-label-auto" id="label_3" for="first_3" style="text-transform:uppercase;"> Poids et Taille </label>
                          <div id="cid_3" class="form-input-wide" data-layout="full">
                            <div data-wrapper-react="true">
                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                <!-- poids -->
                                <input type="number" id="poids" name="poids" value="<?php if(mysqli_num_rows($QPAResult)>0){echo $poids;}else{echo "";} ?>" placeholder="Kg" class="form-textbox" size="20" data-component="first"/>
                                <label class="form-sub-label" for="poids" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Poids </label>
                                </span>
                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                                <!-- taille -->
                                <input type="number" id="taille" name="taille" value="<?php if(mysqli_num_rows($QPAResult)>0){echo $taille;}else{echo "";} ?>" placeholder="Cm" class="form-textbox" size="25" data-component="last"/>
                                <label class="form-sub-label" for="taille" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Taille </label>
                                </span>
                            </div>
                          </div>
                      </li>


                      <!-- Antécédents médicaux ---------------------------------------------------------------------------------------------------------------------------  -->
                      <?php
                        $id_patient = $_GET["id"];
                        $AMQuery = "SELECT * FROM antécédents_médicaux WHERE id_patient=$id_patient;";
                        $AMResult = mysqli_query($conn, $AMQuery);

                        if(mysqli_num_rows($AMResult) > 0){
                          while($row = $AMResult->fetch_assoc()){
                            $AM = array();
                            for($i=1;$i<21;$i++){
                              $AM[$i-1] = $row['AM'.$i];
                           }
                          }
                        }
                      ?>
                      
                      <li class="form-line" data-type="control_radio" id="AM">
                          <label class="form-label form-label-top" id="AM" for="AM" style="text-transform:uppercase;"> Antécédents Médicaux </label>

                          <label class="form-label form-label-top" id="AM1" for="AM1"> Avez-vous souffert ou souffrez-vous d’hypertension artérielle ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM1Oui" name="AM1" class="form-radio" value="Oui" <?php if(mysqli_num_rows($AMResult)>0 && $AM[0]==="Oui" ){echo "checked";}else{echo "";} ?>/>
                                  <label for="AM1Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM1Non" name="AM1" class="form-radio" value="Non" <?php if(mysqli_num_rows($AMResult)>0 && $AM[0]==="Non" ){echo "checked";}else{echo "";} ?>/>
                                  <label for="AM1Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM2" for="AM2"> Avez-vous souffert ou souffrez-vous d’angine de poitrine ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM2Oui" name="AM2" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[1]==="Oui" ){echo "checked";}else{echo "";}?> />
                                  <label for="AM2Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM2Non" name="AM2" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[1]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM2Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM3" for="AM3"> Avez-vous fait un infarctus cardiaque  ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM3Oui" name="AM3" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[2]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM3Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM3Non" name="AM3" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[2]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM3Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM4" for="AM4"> Avez-vous eu des troubles du rythme cardiaque ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM4Oui" name="AM4" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[3]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM4Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM4Non" name="AM4" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[3]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM4Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM5" for="AM5"> Avez-vous un pacemaker et / ou un défibrillateur ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM5Oui" name="AM5" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[4]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM5Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM5Non" name="AM5" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[4]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM5Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM6" for="AM6"> Avez-vous eu des phlébites ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM6Oui" name="AM6" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[5]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM6Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM6Non" name="AM6" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[5]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM6Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM7" for="AM7"> Avez-vous souffert ou souffrez-vous d’asthme ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM7Oui" name="AM7" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[6]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM7Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM7Non" name="AM7" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[6]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM7Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM8" for="AM8"> Avez-vous souffert ou souffrez-vous de bronchite chronique ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM8Oui" name="AM8" class="form-radio" value="Oui"  required <?php if(mysqli_num_rows($AMResult)>0 && $AM[7]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM8Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM8Non" name="AM8" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[7]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM8Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM9" for="AM9"> Avez-vous souffert ou souffrez-vous d’emphysème ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM9Oui" name="AM9" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[8]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM9Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM9Non" name="AM9" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[8]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM9Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM10" for="AM10"> Avez-vous souffert ou souffrez-vous d’embolie pulmonaire ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM10Oui" name="AM10" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[9]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM10Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM10Non" name="AM10" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[9]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM10Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM11" for="AM11"> Dormez-vous avec une Cpap pour un Syndrome d’Apnée Obstructive du Sommeil ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM11Oui" name="AM11" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[10]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM11Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM11Non" name="AM11" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[10]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM11Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM12" for="AM12"> Avez-vous (eu) une œsophagite ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM12Oui" name="AM12" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[11]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM12Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM12Non" name="AM12" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[11]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM12Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM13" for="AM13"> Avez-vous (eu) une hernie hiatale ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM13Oui" name="AM13" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[12]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM13Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM13Non" name="AM13" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[12]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM13Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM14" for="AM14"> Avez-vous eu une hépatite (jaunisse) ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM14Oui" name="AM14" class="form-radio" value="Oui"  required <?php if(mysqli_num_rows($AMResult)>0 && $AM[13]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM14Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM14Non" name="AM14" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[13]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM14Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top" id="AM15" for="AM15"> Si oui, laquelle ? </label>
                          <div id="cid_29" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM15A" name="AM15" class="form-radio" value="hépatite A" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[14]==="hépatite A" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM15A"> hépatite A </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM15B" name="AM15" class="form-radio" value="hépatite B" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[14]==="hépatite B" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM15B"> hépatite B </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM15C" name="AM15" class="form-radio" value="hépatite C" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[14]==="hépatite C" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM15C"> hépatite C </label>
                                  </span>
                            </div>
                          </div>

                          
                          <label class="form-label form-label-top" id="AM16" for="AM16"> Avez-vous eu un accident vasculaire cérébral ou un traumatisme crânien ?  </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM16Oui" name="AM16" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[15]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM16Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM16Non" name="AM16" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[15]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM16Non"> Non </label>
                                  </span>
                            </div>
                          </div>
                          <label class="form-label form-label-top form-label-auto" id="label_8" for="AM17"> Si Oui, quand ? </label>
                          <div id="cid_8" class="form-input-wide" data-layout="half">
                            <div data-wrapper-react="true">
                                <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" name="AM17" class="form-textbox validate[limitDate, validateLiteDate]" id="AM17" size="12" data-maxlength="12" maxLength="12" data-age="" value="<?php if(mysqli_num_rows($AMResult)>0){echo $AM[16];}else{echo "";}?>" data-format="yyyymmdd" data-seperator="-" placeholder="YYYY-MM-DD" autoComplete="section-input_8 off" aria-labelledby="label_8 sublabel_8_litemode"/>
                                <img class="newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_8_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2"/>
                                <label class="form-sub-label" for="lite_mode_8" id="sublabel_8_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
                                </span>
                            </div>
                          </div>

                          <label class="form-label form-label-top form-label-auto" id="AM18" for="input_19"> Avez-vous souffert ou souffrez-vous de : </label>
                          <div id="AM16" class="form-input-wide" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_19" data-component="checkbox">
                                <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_19" class="form-checkbox" id="input_19_0" name="AM18" value="diabète" <?php if(mysqli_num_rows($AMResult)>0 && $AM[17]==="diabète" ){echo "checked";}else{echo "";}?>/>
                                <label id="label_input_19_0" for="input_19_0"> diabète </label>
                                </span>
                                <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_19" class="form-checkbox" id="input_19_1" name="AM18" value="thyroïde" <?php if(mysqli_num_rows($AMResult)>0 && $AM[17]==="thyroïde" ){echo "checked";}else{echo "";}?>/>
                                <label id="label_input_19_1" for="input_19_1"> thyroïde </label>
                                </span>
                                <span class="form-checkbox-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_19" class="form-checkbox" id="input_19_2" name="AM18" value="dépression" <?php if(mysqli_num_rows($AMResult)>0 && $AM[17]==="dépression" ){echo "checked";}else{echo "";}?>/>
                                <label id="label_input_19_2" for="input_19_2"> dépression </label>
                                </span>
                                <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_19" class="form-checkbox" id="input_19_3" name="AM18" value="migraine" <?php if(mysqli_num_rows($AMResult)>0 && $AM[17]==="migraine" ){echo "checked";}else{echo "";}?>/>
                                <label id="label_input_19_3" for="input_19_3"> migraine </label>
                                </span>
                                <span class="form-checkbox-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_19" class="form-checkbox" id="input_19_4" name="AM18" value="épilepsie" <?php if(mysqli_num_rows($AMResult)>0 && $AM[17]==="épilepsie" ){echo "checked";}else{echo "";}?>/>
                                <label id="label_input_19_4" for="input_19_4"> épilepsie </label>
                                </span>
                                <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_19" class="form-checkbox" id="input_19_5" name="AM18" value="myopathie" <?php if(mysqli_num_rows($AMResult)>0 && $AM[17]==="myopathie" ){echo "checked";}else{echo "";}?>/>
                                <label id="label_input_19_5" for="input_19_5"> myopathie </label>
                                </span>
                            </div>
                          </div>


                          <label class="form-label form-label-top" id="AM19" for="AM19"> Avez-vous souffert ou souffre-vous d’autres maladies ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM19Oui" name="AM19" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[18]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM19Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AM19Non" name="AM19" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AMResult)>0 && $AM[18]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AM19Non"> Non </label>
                                  </span>
                            </div>
                          </div>
                          
                      </li>


                      <!-- Antécédents Anesthésiques -------------------------------------------------------------------------------------------------------------------------------------------- -->
                      
                      <?php
                        $id_patient = $_GET["id"];
                        $AAQuery = "SELECT * FROM antécédents_anesthésiques WHERE id_patient=$id_patient;";
                        $AAResult = mysqli_query($conn, $AAQuery);

                        if(mysqli_num_rows($AAResult) > 0){
                          while($row = $AAResult->fetch_assoc()){
                            $AA = array();
                            for($i=1;$i<6;$i++){
                              $AA[$i-1] = $row['AA'.$i];
                           }
                          }
                        }
                      ?>

                      <li class="form-line" data-type="control_radio" id="AA">
                        <label class="form-label form-label-top" id="AA" for="AA" style="text-transform:uppercase;"> Antécédents Anesthésiques </label>
                        <!-- AA1 -->
                        <label class="form-label form-label-top" id="AA1" for="AA1"> Un membre de votre famille a-t-il présenté un problème lors d’une anesthésie ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AA1Oui" name="AA1" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($AAResult)>0 && $AA[0]==="Oui" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AA1Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AA1Non" name="AA1" class="form-radio" value="Non" required <?php if(mysqli_num_rows($AAResult)>0 && $AA[0]==="Non" ){echo "checked";}else{echo "";}?>/>
                                  <label for="AA1Non"> Non </label>
                                  </span>
                            </div>
                          </div>
                          <!-- AA2 -->
                          <label class="form-label form-label-top form-label-auto" id="AA2" for="AA2"> Si Oui, lequel ? </label>
                            <div id="cid_15" class="form-input-wide" data-layout="full">
                              <span class="form-sub-label-container" style="vertical-align:top">
                                <textarea id="AA2" class="form-textarea" name="AA2" style="width:648px;height:120px" data-component="textarea" aria-labelledby="label_15 sublabel_input_15"><?php if(mysqli_num_rows($AAResult)>0){echo $AA[1];}else{echo "";}?></textarea>
                                <label class="form-sub-label" for="AA2" id="AA2" style="min-height:13px" aria-hidden="false"> Les un problème lors d’une anesthésie ... </label>
                              </span>
                            </div>
                          <!-- AA3 -->
                          <label class="form-label form-label-top" id="AA3" for="AA3"> Avez-vous déjà eu une anesthésie ? </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AA3Oui" name="AA3" class="form-radio" value="Oui" <?php if(mysqli_num_rows($AAResult)>0 && $AA[2]==="Oui" ){echo "checked";}?>/>
                                  <label for="AA3Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AA3Non" name="AA3" class="form-radio" value="Non" <?php if(mysqli_num_rows($AAResult)>0 && $AA[2]==="Non" ){echo "checked";}?>/>
                                  <label for="AA3Non"> Non </label>
                                  </span>
                            </div>
                          </div>
                          <!-- AA4 -->
                          <label class="form-label form-label-top" id="AA4" for="AA4"> Si Oui, Avez-vous eu des complications pendant ou après l’anesthésie ?  </label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AA4Oui" name="AA4" class="form-radio" value="Oui" <?php if(mysqli_num_rows($AAResult)>0 && $AA[3]==="Oui" ){echo "checked";}?>/>
                                  <label for="AA4Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="AA4Non" name="AA4" class="form-radio" value="Non" <?php if(mysqli_num_rows($AAResult)>0 && $AA[3]==="Non" ){echo "checked";}?>/>
                                  <label for="AA4Non"> Non </label>
                                  </span>
                            </div>
                          </div>
                          <!-- AA5 -->
                          <label class="form-label form-label-top form-label-auto" id="AA5" for="AA5"> Si Oui, lesquelles ? </label>
                            <div id="cid_15" class="form-input-wide" data-layout="full">
                              <span class="form-sub-label-container" style="vertical-align:top">
                                <textarea id="AA5" class="form-textarea" name="AA5" style="width:648px;height:120px" data-component="textarea" aria-labelledby="label_15 sublabel_input_15"><?php if(mysqli_num_rows($AAResult)>0){echo $AA[4];}else{echo "";}?></textarea>
                                <label class="form-sub-label" for="AA5" id="AA5" style="min-height:13px" aria-hidden="false"> Les complications pendant ou après l’anesthésie ... </label>
                              </span>
                            </div>

                      </li>

                      

                      <!-- Anamnèse cardiovasculaire -------------------------------------------------------------------------------------------------------------------- -->
                      
                      <?php
                        $id_patient = $_GET["id"];
                        $ANCQuery = "SELECT * FROM anamnèse_cardiovasculaire WHERE id_patient=$id_patient;";
                        $ANCResult = mysqli_query($conn, $ANCQuery);

                        if(mysqli_num_rows($ANCResult) > 0){
                          while($row = $ANCResult->fetch_assoc()){
                            $ANC = array();
                            for($i=1;$i<6;$i++){
                              $ANC[$i-1] = $row['ANC'.$i];
                           }
                          }
                        }
                      ?>

                      <li class="form-line" data-type="control_radio" id="ANC">
                        <label class="form-label form-label-top" id="ANC" for="ANC" style="text-transform:uppercase;"> Anamnèse cardiovasculaire </label>
                        <!-- ANC1 -->
                        <label class="form-label form-label-top" id="ANC1" for="ANC1"> Éprouvez-vous parfois une gêne ou une douleur dans la poitrine, le bras ou la mâchoire ?</label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ANC1Oui" name="ANC1" class="form-radio" value="Oui" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[0]==="Oui" ){echo "checked";}?>/>
                                  <label for="ANC1Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ANC1Non" name="ANC1" class="form-radio" value="Non" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[0]==="Non" ){echo "checked";}?>/>
                                  <label for="ANC1Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <!-- ANC2 -->
                          <label class="form-label form-label-top" id="ANC2" for="ANC2"> Êtes-vous facilement essoufflé(e) ?</label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ANC2Oui" name="ANC2" class="form-radio" value="Oui" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[1]==="Oui" ){echo "checked";}?>/>
                                  <label for="ANC2Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ANC2Non" name="ANC2" class="form-radio" value="Non" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[1]==="Non" ){echo "checked";}?>/>
                                  <label for="ANC2Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <!-- ANC3 -->
                          <label class="form-label form-label-top form-label-auto" id="ANC3" for="input_19"> Avez-vous souffert ou souffrez-vous de : </label>
                          <div id="ANC3" class="form-input-wide" data-layout="full">
                            <div class="form-multiple-column" data-columncount="2" role="group" aria-labelledby="label_19" data-component="checkbox">
                                <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_19" class="form-checkbox" id="input_19_00" name="ANC3" value="Randonnée" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[2]==="Randonnée" ){echo "checked";}?>/>
                                <label id="label_input_19_00" for="input_19_00"> Randonnée </label>
                                </span>
                                <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_19" class="form-checkbox" id="input_19_10" name="ANC3" value="Golf (5-9 METs)" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[2]==="Golf (5-9 METs)" ){echo "checked";}?>/>
                                <label id="label_input_19_10" for="input_19_10"> Golf (5-9 METs) </label>
                                </span>
                                <span class="form-checkbox-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_19" class="form-checkbox" id="input_19_20" name="ANC3" value="Natation" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[2]==="Natation" ){echo "checked";}?>/>
                                <label id="label_input_19_20" for="input_19_20"> Natation </label>
                                </span>
                                <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_19" class="form-checkbox" id="input_19_30" name="ANC3" value="Tennis" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[2]==="Tennis" ){echo "checked";}?>/>
                                <label id="label_input_19_30" for="input_19_30"> Tennis </label>
                                </span>
                                <span class="form-checkbox-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="checkbox" aria-describedby="label_19" class="form-checkbox" id="input_19_40" name="ANC3" value="Football (>10 METs)" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[2]==="Football (>10 METs)" ){echo "checked";}?>/>
                                <label id="label_input_19_40" for="input_19_40"> Football (>10 METs) </label>
                                </span>
                            </div>
                          </div>

                          <!-- ANC4 -->
                          <label class="form-label form-label-top" id="ANC4" for="ANC4"> Avez-vous des palpitations cardiaques ?</label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ANC4Oui" name="ANC4" class="form-radio" value="Oui" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[3]==="Oui" ){echo "checked";}?>/>
                                  <label for="ANC4Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ANC4Non" name="ANC4" class="form-radio" value="Non" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[3]==="Non" ){echo "checked";}?>/>
                                  <label for="ANC4Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <!-- ANC5 -->
                          <label class="form-label form-label-top" id="ANC5" for="ANC5"> Avez-vous des difficultés respiratoires durant la nuit ?</label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ANC5Oui" name="ANC5" class="form-radio" value="Oui" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[4]==="Oui" ){echo "checked";}?>/>
                                  <label for="ANC5Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ANC5Non" name="ANC5" class="form-radio" value="Non" <?php if(mysqli_num_rows($ANCResult)>0 && $ANC[4]==="Non" ){echo "checked";}?>/>
                                  <label for="ANC5Non"> Non </label>
                                  </span>
                            </div>
                          </div>
                      
                      </li> 



                      <!-- Anamnèse respiratoire -------------------------------------------------------------------------------------------------------------- -->
                      
                      <?php
                        $id_patient = $_GET["id"];
                        $ANRQuery = "SELECT * FROM anamnèse_respiratoire WHERE id_patient=$id_patient;";
                        $ANRResult = mysqli_query($conn, $ANRQuery);

                        if(mysqli_num_rows($ANRResult) > 0){
                          while($row = $ANRResult->fetch_assoc()){
                            $ANR1 = $row["ANR1"];
                            $ANR2 = $row["ANR2"];
                            $ANR3Quantite = $row["ANR3Quantite"];
                            $ANR3Duree = $row["ANR3Duree"];
                            $ANR4Cigarette = $row["ANR4Cigarette"];
                            $ANR4Nbr = $row["ANR4Nbr"];
                            $ANR4Age = $row["ANR4Age"];
                          }
                        }
                      ?>

                      <li class="form-line" data-type="control_radio" id="ANR">
                        <label class="form-label form-label-top" id="ANR" for="ANR" style="text-transform:uppercase;"> Anamnèse respiratoire </label>
                        
                        <!-- ANR1 -->
                        <label class="form-label form-label-top" id="ANR1" for="ANR1"> Toussez-vous actuellement ?</label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ANR1Oui" name="ANR1" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($ANRResult)>0 && $ANR1==="Oui" ){echo "checked";}?>/>
                                  <label for="ANR1Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ANR1Non" name="ANR1" class="form-radio" value="Non" required <?php if(mysqli_num_rows($ANRResult)>0 && $ANR1==="Non" ){echo "checked";}?>/>
                                  <label for="ANR1Non"> Non </label>
                                  </span>
                            </div>
                          </div>
                        
                          <!-- ANR2 -->
                          <label class="form-label form-label-top" id="ANR2" for="ANR2"> Expectorez-vous actuellement ?</label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ANR2Oui" name="ANR2" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($ANRResult)>0 && $ANR2==="Oui" ){echo "checked";}?>/>
                                  <label for="ANR2Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ANR2Non" name="ANR2" class="form-radio" value="Non" required <?php if(mysqli_num_rows($ANRResult)>0 && $ANR2==="Non" ){echo "checked";}?>/>
                                  <label for="ANR2Non"> Non </label>
                                  </span>
                            </div>
                          </div>

                          <!-- ANR3 -->
                          <label class="form-label form-label-top" id="َANR3" for="َANR3"> Êtes-vous sous oxygène ?</label>
                          <div class="container">
                            <div class="form-group">
                                <table class="table" id="dynamic_fieldANR3" style="margin-bottom:0;">
                                  <tr>
                                  <label class="form-label form-label-top" id="َANR3" for="َANR3"> Si Oui, Indiquez :</label>
                                    <td><input type="number" name="ANR3Quantite" value="<?php if(mysqli_num_rows($ANRResult)>0){echo $ANR3Quantite;}else{echo"";}?>" placeholder="Quantite(L)" class="form-textbox form-address-line" /></td>
                                    <td><input type="number" name="ANR3Duree" value="<?php if(mysqli_num_rows($ANRResult)>0){echo $ANR3Duree;}else{echo"";}?>" placeholder="Durée(H)" class="form-textbox form-address-line" /></td>
                                  </tr>
                                </table>
                            </div>
                          </div>

                          <!-- ANR4 -->
                          <label class="form-label form-label-top" id="ANR4" for="ANR4"> Fumez-vous ?</label>
                          <div class="container">
                            <div class="form-group">
                                <table class="table" id="dynamic_fieldANR4" style="margin-bottom:0;">
                                  <tr>
                                  <label class="form-label form-label-top" id="ANR4" for="َANR3"> Si Oui, Indiquez :</label>
                                    <td><input type="text" name="ANR4Cigarette" value="<?php if(mysqli_num_rows($ANRResult)>0){echo $ANR4Cigarette;}else{echo"";}?>" placeholder="Cigarette" class="form-textbox form-address-line" /></td>
                                    <td><input type="number" name="ANR4Nbr" value="<?php if(mysqli_num_rows($ANRResult)>0){echo $ANR4Nbr;}else{echo"";}?>" placeholder="Nbr/jour" class="form-textbox form-address-line" /></td>
                                    <td><input type="number" name="ANR4Age" value="<?php if(mysqli_num_rows($ANRResult)>0){echo $ANR4Age;}else{echo"";}?>" placeholder="depuis l'age" class="form-textbox form-address-line" /></td>
                                  </tr>
                                </table>
                            </div>
                          </div>

                      </li>



                      <!-- Anamnèse digestive et nutritionnelle -->

                      <?php
                        $id_patient = $_GET["id"];
                        $ADNQuery = "SELECT * FROM anamnèse_digestive_nutritionnelle WHERE id_patient=$id_patient;";
                        $ADNResult = mysqli_query($conn, $ADNQuery);

                        if(mysqli_num_rows($ADNResult) > 0){
                          while($row = $ADNResult->fetch_assoc()){
                            $ADN1 = $row["ADN1"];
                            $ADN2PoidsPerdus =$row["ADN2PoidsPerdus"];
                            $ADN2Duree = $row["ADN2Duree"];
                            $ADN3 = $row["ADN3"];
                          }
                        }
                      ?>

                      <li class="form-line" data-type="control_radio" id="ADN">
                        <label class="form-label form-label-top" id="ADN" for="ADN" style="text-transform:uppercase;"> Anamnèse digestive et nutritionnelle </label>
                      
                        <!-- ADN1 -->
                        <label class="form-label form-label-top" id="ADN1" for="ADN1"> Avez-vous perdu du poids ?</label>
                          <div id="cid_23" class="form-input-wide" data-layout="full">
                            <div class="form-single-column" role="group" data-component="radio">
                            <span class="form-radio-item" >
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ADN1Oui" name="ADN1" class="form-radio" value="Oui" required <?php if(mysqli_num_rows($ADNResult)>0 && $ADN1==="Oui" ){echo "checked";}?>/>
                                  <label for="ADN1Oui"> Oui </label>
                                  </span>
                                  <span class="form-radio-item" >
                                  <span class="dragger-item">
                                  </span>
                                  <input type="radio" id="ADN1Non" name="ADN1" class="form-radio" value="Non" required <?php if(mysqli_num_rows($ADNResult)>0 && $ADN1==="Non" ){echo "checked";}?>/>
                                  <label for="ADN1Non"> Non </label>
                                  </span>
                            </div>
                          </div>
                        
                          <!-- ADN2 -->
                          <label class="form-label form-label-top" id="ADN2" for="ADN2"> Si Oui, et Si la perte de poids n’était pas volontaire : </label>
                          <div class="container">
                            <div class="form-group">
                                <table class="table" id="dynamic_fieldADN2" style="margin-bottom:0;">
                                  <tr>
                                    <td><input type="number" name="ADN2PoidsPerdus" value="<?php if(mysqli_num_rows($ADNResult)>0){echo $ADN2PoidsPerdus;}else{echo"";}?>"  placeholder="Poids perdus(Kg)" class="form-textbox form-address-line" /></td>
                                    <td><input type="number" name="ADN2Duree" value="<?php if(mysqli_num_rows($ADNResult)>0){echo $ADN2Duree;}else{echo"";}?>"  placeholder="Durée(Jours)" class="form-textbox form-address-line" /></td>
                                  </tr>
                                </table>
                            </div>
                          </div>

                          <!-- ADN3 -->
                          <label class="form-label form-label-top" id="ADN3" for="ADN3"> Pouvez-vous estimer vos prises alimentaires sur la ligne ci-dessous en fonction de ce que vous mangiez AVANT votre perte de poids involontaire : </label>
                          <div id="cid_13" class="form-input-wide">
                            <input type="range" id="ADN3" name="ADN3" value="<?php if(mysqli_num_rows($ADNResult)>0){echo $ADN3;}else{echo"50";}?>" min="0" max="100" step="10" class="form-textbox" style="width:70%;" size="310" value=""/>
                          </div>
                          <label class="form-sub-label" for="ADN3" style="min-height:13px" aria-hidden="false"> (0% = je ne mange plus rien. 50% = je mange la moitié par rapport à avant. 100% = je mange normalement) </label>
                          
                      </li>

                      
                      <!-- QUESTIONNAIRE REMPLI PAR-->
                      <li class="form-line" data-type="control_radio" id="QRP">
                        <label class="form-label form-label-top" id="QRP" for="QRP" style="text-transform:uppercase;"> QUESTIONNAIRE REMPLI PAR </label>
                        <div id="QRP" class="form-input-wide" data-layout="full">
                            <div data-wrapper-react="true">
                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                <!-- nom -->
                                <input type="text" id="QRP" name="QRPNom" value="<?php if(mysqli_num_rows($QPAResult)>0){echo $QRPNom;}else{echo "";} ?>" class="form-textbox" size="10"/>
                                <label class="form-sub-label" for="QRP" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Nom </label>
                                </span>
                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                                <!-- prenom -->
                                <input type="text" id="QRP" name="QRPPrenom" value="<?php if(mysqli_num_rows($QPAResult)>0){echo $QRPPrenom;}else{echo "";} ?>" class="form-textbox" size="15"/>
                                <label class="form-sub-label" for="QRP" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Prenom </label>
                                </span>
                            </div>
                          </div>
                      </li>


                      <!-- Ajouter -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                      
                      <li class="form-line" data-type="control_button" id="sauvgarderQPA">
                          <div id="sauvgarderQPA" class="form-input-wide" data-layout="full">
                            <div data-align="auto" class="form-buttons-wrapper form-buttons-auto jsTest-button-wrapperField">
                                <button id="sauvgarderQPA" type="submit" name="sauvgarderQPA" class="form-submit-button form-submit-button-book_blue2 submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
                                Sauvgarder
                                </button>
                            </div>
                          </div>
                      </li>

                    </ul> 
                </div>
                <script type="text/javascript">
                    var all_spc = document.querySelectorAll("form[id='221017784288563'] .si" + "mple" + "_spc");
                    for (var i = 0; i < all_spc.length; i++)
                    {
                    all_spc[i].value = "221017784288563-221017784288563";
                    }
                </script>
              </form>

              <script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.32582"></script>
              <script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.32582"></script>
            </div>
          </div>
          
          <div class="card-body px-0 pb-2" style="padding-top: 0rem;">
            <div class="table-responsive p-0">
                <div role="main" class="form-all">
                  <ul class="form-section page-section" style="margin:20px;">

                      <li id="cid_1" class="form-input-wide" data-type="control_head">
                        <div class="form-header-group  header-large" style="padding-bottom: 45px;">
                            <div class="header-text httac htvam">
                              <h1 id="header_1" class="form-header" data-component="header">
                                  <img src="/anistrea/Dashboard/assets/img/QPAicon.png" style="width: 80px;float: left;margin-bottom:5px;" alt="">
                                  Questionnaire Pré Anesthesique (Listes Dynamique)
                              </h1>
                            </div>
                        </div>
                      </li>
                      
                      <!-- Maladies -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                      <?php
                        $id_patient = $_GET["id"];
                        $nombreLigneM = mysqli_query($conn,"SELECT * FROM am_maladies WHERE id_patient=$id_patient;");
                        $i1 = mysqli_num_rows($nombreLigneM);

                        for($j=0 ; $j<$i1 ; $j++){
                          if( isset($_POST['removeAM20'.$j])){
                            $id_maladie = intval($_POST['id_maladie'.$j]);
                            $deleteQuery = "DELETE FROM am_maladies WHERE id_maladie=$id_maladie;";
                            $deleteResult = mysqli_query($conn, $deleteQuery);
                          }
                        }
                      ?>  

                      <label style="padding-top:20px;text-transform:uppercase;"  class="form-label form-label-top" id="AC" for="AC"> Antécédents Médicaux </label>
                      <li id="cid_1" class="form-input-wide" data-type="control_head">
                        <!-- AM20 -->
                        <label class="form-label form-label-top form-label-auto" id="AM20" for="AM20">Avez-vous souffert ou souffre-vous d’autres maladies ? Si Oui, lesquelles ? </label> 
                        <div class="container">
                            <div class="form-group">
                              <form name="add_nameAM20" id="add_nameAM20" method="post" action="">
                                  <table class="table" id="dynamic_fieldAM20" style="margin-bottom:0;">
                                      <?php 
                                        $id_patient = $_GET["id"];
                                        $AM20Query = "SELECT * FROM am_maladies WHERE id_patient=$id_patient;";
                                        $AM20Result = mysqli_query($conn, $AM20Query);

                                        if(mysqli_num_rows($AM20Result) > 0){
                                          $i1 = 0;
                                          while($row = $AM20Result->fetch_assoc()){
                                            if($i1===0){
                                              echo '<tr id="row'.$i1.'">
                                                      <td><input type="text" name="AM20[]" value="'.$row["maladie"].'" placeholder="Maladie" class="form-textbox form-address-line"/></td>
                                                      <td><button type="submit" name="removeAM20'.$i1.'" id="'.$i1.'" class="btn btn-danger">X</button></td>
                                                      <td><button type="button" name="addAM20" id="addAM20" class="btn btn-info" style="background-color: #00668D">Ajouter</button></td></tr>
                                                      <input type="text" name="id_maladie'.$i1.'" value="'.$row["id_maladie"].'"style="display:none">
                                                    </tr>';
                                              $i1++;
                                            }else{
                                              echo '<tr id="row'.$i1.'">
                                                      <td><input type="text" value="'.$row["maladie"].'" name="AM20[]" placeholder="Opération" class="form-textbox form-address-line" /></td><td>
                                                      <input type="text" name="id_maladie'.$i1.'" value="'.$row["id_maladie"].'"style="display:none">
                                                      <button type="submit" name="removeAM20'.$i1.'" id="'.$i1.'" class="btn btn-danger">X</button></td>
                                                    </tr>';
                                              $i1++;
                                            }
                                          }
                                        }else{
                                          echo '<tr id="row'.$i1.'">
                                                    <td><input type="text" name="AM20[]" value="" placeholder="Maladie" class="form-textbox form-address-line"/></td>
                                                    <td><button type="button" name="addAM20" id="addAM20" class="btn btn-info" style="background-color: #00668D">Ajouter</button></td>
                                                </tr>';
                                        }
                                      ?>
                                  </table>
                                  <input type="button" name="submit" id="sauvgarderAM20" class="btn btn-info" value="sauvgarder" style="background-color: #00668D"/>  
                              </form>
                            </div>
                        </div>
                        <label class="form-sub-label" for="AM20" style="min-height:13px" aria-hidden="false"> Maladies </label>
                        <script>  
                            $(document).ready(function(){
                                var i=1;
                                $('#addAM20').click(function(){  
                                      i++;  
                                      $('#dynamic_fieldAM20').append('<tr id="row'+i+'"><td><input type="text" name="AM20[]" placeholder="Opération" class="form-textbox form-address-line" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removeAM20">X</button></td></tr>');  
                                });
                                $(document).on('click', '.btn_removeAM20', function(){  
                                      var button_id = $(this).attr("id");   
                                      $('#row'+button_id+'').remove();
                                });
                                $('#sauvgarderAM20').click(function(){           
                                      $.ajax({  
                                          url:"Listes_Dynamiques/AM20DataBase.php",  
                                          method:"POST",
                                          data:$('#add_nameAM20').serialize(),  
                                          success:function(data)
                                          {
                                            alert(data);
                                          }
                                      }); 
                                }); 
                            });
                        </script>
                        
                      </li>


                      <!-- Antécédents Chirurgicaux -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                      <?php
                          $id_patient = $_GET["id"];
                          $nombreLigneAC = mysqli_query($conn,"SELECT * FROM antécédents_chirurgicaux WHERE id_patient=$id_patient;");
                          $i2 = mysqli_num_rows($nombreLigneAC);

                          for($j=0 ; $j<$i2 ; $j++){
                            if( isset($_POST['removeAC'.$j])){
                              $id_chirurgie = intval($_POST['id_chirurgie'.$j]);
                              $deleteQuery = "DELETE FROM antécédents_chirurgicaux WHERE id_chirurgie=$id_chirurgie;";
                              $deleteResult = mysqli_query($conn, $deleteQuery);
                            }
                          }
                        ?>

                      <label style="padding-top:20px;text-transform:uppercase;"  class="form-label form-label-top" id="AC" for="AC"> Antécédents Chirurgicaux </label>
                      <li id="cid_1" class="form-input-wide" data-type="control_head">
                        <!-- AC -->
                        <label class="form-label form-label-top form-label-auto" id="AC" for="AC">Avez-vous déjà été opéré(e) ? Si Oui, détailler vos interventions : </label> 
                        <div class="container">
                            <div class="form-group">
                              <form name="add_nameAC" id="add_nameAC" method="post" action="">
                                  <table class="table" id="dynamic_fieldAC" style="margin-bottom:0;">
                                      <?php 
                                        $id_patient = $_GET["id"];
                                        $ACQuery = "SELECT * FROM antécédents_chirurgicaux WHERE id_patient=$id_patient;";
                                        $ACResult = mysqli_query($conn, $ACQuery);

                                        if(mysqli_num_rows($ACResult) > 0){
                                          $i2 = 0;
                                          while($row = $ACResult->fetch_assoc()){
                                            if($i2===0){
                                              echo '<tr id="row'.$i2.'">
                                                      <td><input type="text" name="AC[]" value="'.$row["chirurgie"].'" placeholder="Chirurgie" class="form-textbox form-address-line"/></td>
                                                      <td><button type="submit" name="removeAC'.$i2.'" id="'.$i2.'" class="btn btn-danger">X</button></td>
                                                      <td><button type="button" name="addAC" id="addAC" class="btn btn-info" style="background-color: #00668D">Ajouter</button></td>
                                                      <input type="text" name="id_chirurgie'.$i2.'" value="'.$row["id_chirurgie"].'"style="display:none">
                                                    </tr>';
                                              $i2++;
                                            }else{
                                              echo '<tr id="row'.$i2.'">
                                                      <td><input type="text" value="'.$row["chirurgie"].'" name="AC[]" placeholder="Opération" class="form-textbox form-address-line" /></td><td>
                                                      <input type="text" name="id_chirurgie" value="'.$row["id_chirurgie"].'"style="display:none">
                                                      <button type="submit" name="removeAC'.$i2.'" id="'.$i2.'" class="btn btn-danger">X</button></td>
                                                      <input type="text" name="id_chirurgie'.$i2.'" value="'.$row["id_chirurgie"].'"style="display:none">
                                                    </tr>';
                                              $i2++;
                                            }
                                          }
                                        }else{
                                          echo '<tr id="row'.$i2.'">
                                                  <td><input type="text" name="AC[]" value="" placeholder="Opération" class="form-textbox form-address-line"/></td>
                                                  <td><button type="button" name="addAC" id="addAC" class="btn btn-info" style="background-color: #00668D">Ajouter</button></td>
                                                </tr>';
                                        }
                                      ?>
                                  </table>
                                  <input type="button" name="submit" id="sauvgarderAC" class="btn btn-info" value="sauvgarder" style="background-color: #00668D"/>  
                              </form>
                            </div>
                        </div>
                        <label class="form-sub-label" for="AC" style="min-height:13px" aria-hidden="false"> chirurgies </label>
                        <script>  
                            $(document).ready(function(){
                                var i=1;
                                $('#addAC').click(function(){  
                                      i++;  
                                      $('#dynamic_fieldAC').append('<tr id="row'+i+'"><td><input type="text" name="AC[]" placeholder="Opération" class="form-textbox form-address-line" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removeAC">X</button></td></tr>');  
                                });
                                $(document).on('click', '.btn_removeAC', function(){  
                                      var button_id = $(this).attr("id");   
                                      $('#row'+button_id+'').remove();
                                });
                                $('#sauvgarderAC').click(function(){           
                                      $.ajax({  
                                          url:"Listes_Dynamiques/ACDataBase.php",  
                                          method:"POST",
                                          data:$('#add_nameAC').serialize(),  
                                          success:function(data)
                                          {
                                            alert(data);
                                          }
                                      }); 
                                }); 
                            });
                        </script>

                      </li>



                      <!-- ALLERGIES -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                      <?php
                        $id_patient = $_GET["id"];
                        $nombreLigneAL = mysqli_query($conn,"SELECT * FROM allergies WHERE id_patient=$id_patient;");
                        $i3 = mysqli_num_rows($nombreLigneAL);
                          
                        for($j=0 ; $j<$i3 ; $j++){
                          if( isset($_POST['removeAL'.$j])){
                            $id_allergie = intval($_POST['id_allergie'.$j]);
                            $deleteQuery = "DELETE FROM allergies WHERE id_allergie=$id_allergie;";
                            $deleteResult = mysqli_query($conn, $deleteQuery);
                          }
                        }
                      ?>

                      <label style="padding-top:20px;text-transform:uppercase;"  class="form-label form-label-top" id="AL" for="AL"> ALLERGIES </label>
                      <li id="cid_1" class="form-input-wide" data-type="control_head">
                        <!-- AL -->
                        <label class="form-label form-label-top form-label-auto" id="AL" for="AL">Avez-vous présenté une allergie et/ou intolérance ? Si Oui, lesquelles et avec quelle reaction ? </label> 
                        <div class="container">
                            <div class="form-group">
                              <form name="add_nameAL" id="add_nameAL" method="post" action="">
                                  <table class="table" id="dynamic_fieldAL" style="margin-bottom:0;">
                                      <?php
                                        $id_patient = $_GET["id"];
                                        $ALQuery = "SELECT * FROM allergies WHERE id_patient=$id_patient;";
                                        $ALResult = mysqli_query($conn, $ALQuery);

                                        if(mysqli_num_rows($ALResult) > 0){
                                          $i3 = 0;
                                          while($row = $ALResult->fetch_assoc()){
                                            if($i3===0){
                                              echo '<tr id="row'.$i3.'">
                                                      <td><input type="text" name="AL[]" value="'.$row["allergie"].'" placeholder="Allergie" class="form-textbox form-address-line" /></td>
                                                      <td><input type="text" name="ALR[]" value="'.$row["reaction"].'" placeholder="Réaction" class="form-textbox form-address-line" /></td>
                                                      <td><button type="submit" name="removeAL'.$i3.'" id="'.$i3.'" class="btn btn-danger">X</button></td>
                                                      <td><button type="button" name="addAL" id="addAL" class="btn btn-info" style="background-color: #00668D">Ajouter</button></td>
                                                      <input type="text" name="id_allergie'.$i3.'" value="'.$row["id_allergie"].'"style="display:none">
                                                    </tr>';
                                              $i3++;
                                            }else{
                                              echo  '<tr id="row'.$i3.'">
                                                      <td><input type="text" name="AL[]" value="'.$row["allergie"].'" placeholder="Allergies" class="form-textbox form-address-line" /></td>
                                                      <td><input type="text" name="ALR[]" value="'.$row["reaction"].'" placeholder="Réaction" class="form-textbox form-address-line" /></td>
                                                      <td><button type="submit" name="removeAL'.$i3.'" id="'.$i3.'" class="btn btn-danger">X</button></td>
                                                      <input type="text" name="id_allergie'.$i3.'" value="'.$row["id_allergie"].'"style="display:none">
                                                    </tr>';
                                              $i3++;
                                            }
                                          }
                                        }else{
                                          echo '<tr id="row'.$i3.'">
                                                  <td><input type="text" name="AL[]" value="" placeholder="Allergie" class="form-textbox form-address-line"/></td>
                                                  <td><input type="text" name="ALR[]" value="" placeholder="Réaction" class="form-textbox form-address-line" /></td>
                                                  <td><button type="button" name="addAL" id="addAL" class="btn btn-info" style="background-color: #00668D">Ajouter</button>
                                                </td>';
                                        }
                                      ?>
                                  </table>
                                  <input type="button" name="submit" id="sauvgarderAL" class="btn btn-info" value="sauvgarder" style="background-color: #00668D"/>  
                              </form>
                            </div>
                        </div>
                        <label class="form-sub-label" for="AL" style="min-height:13px" aria-hidden="false"> chirurgies </label>
                        <script>  
                            $(document).ready(function(){
                                var i=1;
                                $('#addAL').click(function(){  
                                      i++;  
                                      $('#dynamic_fieldAL').append('<tr id="row'+i+'"><td><input type="text" name="AL[]" value="" placeholder="Opération" class="form-textbox form-address-line" /></td><td><input type="text" name="ALR[]" value="" placeholder="Réaction" class="form-textbox form-address-line" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removeAL">X</button></td></tr>');  
                                });
                                $(document).on('click', '.btn_removeAL', function(){  
                                      var button_id = $(this).attr("id");   
                                      $('#row'+button_id+'').remove();
                                });
                                $('#sauvgarderAL').click(function(){          
                                      $.ajax({  
                                          url:"Listes_Dynamiques/ALDataBase.php",
                                          method:"POST",
                                          data:$('#add_nameAL').serialize(),  
                                          success:function(data)
                                          {
                                            alert(data);
                                          }
                                      }); 
                                }); 
                            });
                        </script>
                        
                      </li>





                      <!-- MÉDICAMENTS -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                      <?php
                        $id_patient = $_GET["id"];
                        $nombreLigneM = mysqli_query($conn,"SELECT * FROM medicaments WHERE id_patient=$id_patient;");
                        $i4 = mysqli_num_rows($nombreLigneM);

                        for($j=0 ; $j<$i4 ; $j++){
                          if( isset($_POST['removeM'.$j])){
                            $id_medicament = intval($_POST['id_medicament'.$j]);
                            $deleteQuery = "DELETE FROM medicaments WHERE id_medicament=$id_medicament;";
                            $deleteResult = mysqli_query($conn, $deleteQuery);
                          }
                        }
                      ?>

                      <label style="padding-top:20px;text-transform:uppercase;"  class="form-label form-label-top" id="M" for="M"> MÉDICAMENTS </label>
                      <li id="cid_1" class="form-input-wide" data-type="control_head">
                        <!-- M -->
                        <label class="form-label form-label-top form-label-auto" id="M" for="M"> Actuellement, prenez-vous des medicaments ?</label> 
                        <div class="container">
                            <div class="form-group">
                              <form name="add_nameM" id="add_nameM" method="post" action="">
                                  <table class="table" id="dynamic_fieldM" style="margin-bottom:0;">
                                      <?php
                                        $id_patient = $_GET["id"];
                                        $MQuery = "SELECT * FROM medicaments WHERE id_patient=$id_patient;";
                                        $MResult = mysqli_query($conn, $MQuery);

                                        if(mysqli_num_rows($MResult) > 0){
                                          $i4 = 0;
                                          while($row = $MResult->fetch_assoc()){
                                            if($i4===0){
                                              echo '<tr id="row'.$i4.'">
                                                      <td><input type="text" name="M[]" value="'.$row["medicament"].'" placeholder="Medicament" class="form-textbox form-address-line" /></td>
                                                      <td><input type="number" name="MD[]" value="'.$row["dosage"].'" placeholder="Dosage(mg)" class="form-textbox form-address-line" /></td>
                                                      <td><input type="number" name="MNFPJ[]" value="'.$row["nbrFoisParJour"].'" placeholder="Fois par jour" class="form-textbox form-address-line" /></td>
                                                      <td><button type="submit" name="removeM'.$i4.'" id="'.$i4.'" class="btn btn-danger">X</button></td>
                                                      <td><button type="button" name="addM" id="addM" class="btn btn-info" style="background-color: #00668D">Ajouter</button></td>
                                                      <input type="text" name="id_medicament'.$i4.'" value="'.$row["id_medicament"].'"style="display:none">
                                                    </tr>';
                                              $i4++;
                                            }else{
                                              echo '<tr id="row'.$i4.'">
                                                      <td><input type="text" name="M[]" value="'.$row["medicament"].'" placeholder="Medicament" class="form-textbox form-address-line" /></td>
                                                      <td><input type="number" name="MD[]" value="'.$row["dosage"].'" placeholder="Dosage(mg)" class="form-textbox form-address-line" /></td>
                                                      <td><input type="number" name="MNFPJ[]" value="'.$row["nbrFoisParJour"].'" placeholder="Fois par jour" class="form-textbox form-address-line" /></td>
                                                      <td><button type="submit" name="removeM'.$i4.'" id="'.$i4.'" class="btn btn-danger">X</button></td>
                                                      <input type="text" name="id_medicament'.$i4.'" value="'.$row["id_medicament"].'"style="display:none">
                                                    </tr>';
                                              $i4++;
                                            }
                                          }
                                        }else{
                                          echo '<tr id="row'.$i4.'">
                                                  <td><input type="text" name="M[]" value="" placeholder="Medicament" class="form-textbox form-address-line"/></td>
                                                  <td><input type="number" name="MD[]" value="" placeholder="Dosage(mg)" class="form-textbox form-address-line" /></td>
                                                  <td><input type="number" name="MNFPJ[]" value="" placeholder="Fois par jour" class="form-textbox form-address-line" /></td>
                                                  <td><button type="button" name="addM" id="addM" class="btn btn-info" style="background-color: #00668D">Ajouter</button></td>
                                                </tr>';
                                        }
                                      ?>
                                  </table>
                                  <input type="button" name="submit" id="sauvgarderM" class="btn btn-info" value="sauvgarder" style="background-color: #00668D"/>  
                              </form>
                            </div>
                        </div>
                        <label class="form-sub-label" for="M" style="min-height:13px" aria-hidden="false"> Médicaments </label>
                        <script>  
                            $(document).ready(function(){
                                var i=1;
                                $('#addM').click(function(){  
                                      i++;  
                                      $('#dynamic_fieldM').append('<tr id="row'+i+'"><td><input type="text" name="M[]" value="" placeholder="Medicament" class="form-textbox form-address-line" /></td><td><input type="number" name="MD[]" value="" placeholder="Dosage(mg)" class="form-textbox form-address-line" /></td><td><input type="number" name="MNFPJ[]" value="" placeholder="Fois par jour" class="form-textbox form-address-line" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removeM">X</button></td></tr>');  
                                });
                                $(document).on('click', '.btn_removeM', function(){  
                                      var button_id = $(this).attr("id");   
                                      $('#row'+button_id+'').remove();
                                });
                                $('#sauvgarderM').click(function(){          
                                      $.ajax({  
                                          url:"Listes_Dynamiques/MDataBase.php",
                                          method:"POST",
                                          data:$('#add_nameM').serialize(),  
                                          success:function(data)
                                          {
                                            alert(data);
                                          }
                                      }); 
                                }); 
                            });
                        </script>
                        
                      </li>



                      <!-- Toxique -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                      <?php
                        $id_patient = $_GET["id"];
                        $nombreLigneT = mysqli_query($conn,"SELECT * FROM toxiques WHERE id_patient=$id_patient;");
                        $i5 = mysqli_num_rows($nombreLigneT);
                        
                        for($j=0 ; $j<$i5 ; $j++){
                          if( isset($_POST['removeT'.$j])){
                            $id_toxique = intval($_POST['id_toxique'.$j]);
                            $deleteQuery = "DELETE FROM toxiques WHERE id_toxique=$id_toxique;";
                            $deleteResult = mysqli_query($conn, $deleteQuery);
                          }
                        }
                      ?>

                      <label style="padding-top:20px;text-transform:uppercase;"  class="form-label form-label-top" id="T" for="AL"> Toxique </label>
                      <li id="cid_1" class="form-input-wide" data-type="control_head">
                        <!-- T -->
                        <label class="form-label form-label-top form-label-auto" id="T" for="T"> Consommez-vous regulierement des boissons alcoolisees ?</label> 
                        <div class="container">
                            <div class="form-group">
                              <form name="add_nameT" id="add_nameT" method="post" action="">
                                  <table class="table" id="dynamic_fieldT" style="margin-bottom:0;">
                                      <?php
                                        $id_patient = $_GET["id"];
                                        $TQuery = "SELECT * FROM toxiques WHERE id_patient=$id_patient;";
                                        $TResult = mysqli_query($conn, $TQuery);

                                        if(mysqli_num_rows($TResult) > 0){
                                          $i5 = 0;
                                          while($row = $TResult->fetch_assoc()){
                                            if($i5===0){
                                              echo '<tr id="row'.$i5.'">
                                                      <td><input type="text" name="T[]" value="'.$row["boisson"].'" placeholder="Boisson" class="form-textbox form-address-line" /></td>
                                                      <td><input type="number" name="TQ[]" value="'.$row["quantite"].'" placeholder="Quantité(L)" class="form-textbox form-address-line" /></td>
                                                      <td><button type="submit" name="removeT'.$i5.'" id="'.$i5.'" class="btn btn-danger">X</button></td>
                                                      <td><button type="button" name="addT" id="addT" class="btn btn-info" style="background-color: #00668D">Ajouter</button></td>
                                                      <input type="text" name="id_toxique'.$i5.'" value="'.$row["id_toxique"].'"style="display:none">
                                                    </tr>';
                                              $i5++;
                                            }else{
                                              echo '<tr id="row'.$i5.'">
                                                      <td><input type="text" name="T[]" value="'.$row["boisson"].'" placeholder="Boisson" class="form-textbox form-address-line" /></td>
                                                      <td><input type="number" name="TQ[]" value="'.$row["quantite"].'" placeholder="Quantité(L)" class="form-textbox form-address-line" /></td>
                                                      <td><button type="submit" name="removeT'.$i5.'" id="'.$i5.'" class="btn btn-danger">X</button></td>
                                                      <input type="text" name="id_toxique'.$i5.'" value="'.$row["id_toxique"].'"style="display:none">
                                                    </tr>';
                                              $i5++;
                                            }
                                          }
                                        }else{
                                          echo '<tr id="row'.$i5.'">
                                                  <td><input type="text" name="T[]" value="" placeholder="Boisson" class="form-textbox form-address-line"/></td>
                                                  <td><input type="number" name="TQ[]" value="" placeholder="Quantité(L)" class="form-textbox form-address-line" /></td>
                                                  <td><button type="button" name="addT" id="addT" class="btn btn-info" style="background-color: #00668D">Ajouter</button>
                                                </td>';
                                        }
                                      ?>
                                  </table>
                                  <input type="button" name="submit" id="sauvgarderT" class="btn btn-info" value="sauvgarder" style="background-color: #00668D"/>  
                              </form>
                            </div>
                        </div>
                        <label class="form-sub-label" for="T" style="min-height:13px" aria-hidden="false"> Toxiques </label>
                        <script>  
                            $(document).ready(function(){
                                var i=1;
                                $('#addT').click(function(){  
                                      i++;  
                                      $('#dynamic_fieldT').append('<tr id="row'+i+'"><td><input type="text" name="T[]" value="" placeholder="Boisson" class="form-textbox form-address-line" /></td><td><input type="number" name="TQ[]" value="" placeholder="Quantité(L)" class="form-textbox form-address-line" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removeT">X</button></td></tr>');  
                                });
                                $(document).on('click', '.btn_removeT', function(){  
                                      var button_id = $(this).attr("id");   
                                      $('#row'+button_id+'').remove();
                                });
                                $('#sauvgarderT').click(function(){          
                                      $.ajax({  
                                          url:"Listes_Dynamiques/TDataBase.php",
                                          method:"POST",
                                          data:$('#add_nameT').serialize(),  
                                          success:function(data)
                                          {
                                            alert(data);
                                          }
                                      }); 
                                }); 
                            });
                        </script>
                        
                      </li>
                      




                      <!-- ANAMNÈSE CARDIOVASCULAIRE -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                            
                      <?php
                        $id_patient = $_GET["id"];
                        $nombreLigneANCC = mysqli_query($conn,"SELECT * FROM AC_cardiologues WHERE id_patient=$id_patient;");
                        $i6 = mysqli_num_rows($nombreLigneANCC);

                        for($j=0 ; $j<$i6 ; $j++){
                          if( isset($_POST['removeANCC'.$j])){
                            $id_AC_cardiologue = intval($_POST['id_AC_cardiologue'.$j]);
                            $deleteQuery = "DELETE FROM AC_cardiologues WHERE id_AC_cardiologue=$id_AC_cardiologue;";
                            $deleteResult = mysqli_query($conn, $deleteQuery);
                          }
                        }
                      ?>

                      <label style="padding-top:20px;text-transform:uppercase;"  class="form-label form-label-top" id="ANCC" for="ANCC"> ANAMNÈSE CARDIOVASCULAIRE </label>
                      <li id="cid_1" class="form-input-wide" data-type="control_head">
                        <!-- ANCC -->
                        <label class="form-label form-label-top form-label-auto" id="ANCC" for="ANCC">Avez-vous consulté un cardiologue durant ces 12 derniers mois ? </label> 
                        <div class="container">
                            <div class="form-group">
                              <form name="add_nameANCC" id="add_nameANCC" method="post" action="">
                                  <table class="table" id="dynamic_fieldANCC" style="margin-bottom:0;">
                                      <?php
                                        $id_patient = $_GET["id"];
                                        $ANCCQuery = "SELECT * FROM AC_cardiologues WHERE id_patient=$id_patient;";
                                        $ANCCResult = mysqli_query($conn, $ANCCQuery);

                                        if(mysqli_num_rows($ANCCResult) > 0){
                                          $i6 = 0;
                                          while($row = $ANCCResult->fetch_assoc()){
                                            if($i6===0){
                                              echo '<tr id="row'.$i6.'">
                                                      <td><input type="text" name="ANCC[]" value="'.$row["AC_cardiologue"].'" placeholder="Cardiologue" class="form-textbox form-address-line" /></td>
                                                      <td><input type="text" name="ANCCH[]" value="'.$row["AC_hopital"].'" placeholder="Hopital" class="form-textbox form-address-line" /></td>
                                                      <td><button type="submit" name="removeANCC'.$i6.'" id="'.$i6.'" class="btn btn-danger">X</button></td>
                                                      <td><button type="button" name="addANCC" id="addANCC" class="btn btn-info" style="background-color: #00668D">Ajouter</button></td>
                                                      <input type="text" name="id_AC_cardiologue'.$i6.'" value="'.$row["id_AC_cardiologue"].'"style="display:none">
                                                    </tr>';
                                              $i6++;
                                            }else{
                                              echo  '<tr id="row'.$i6.'">
                                                      <td><input type="text" name="ANCC[]" value="'.$row["AC_cardiologue"].'" placeholder="Cardiologue" class="form-textbox form-address-line" /></td>
                                                      <td><input type="text" name="ANCCH[]" value="'.$row["AC_hopital"].'" placeholder="Hopital" class="form-textbox form-address-line" /></td>
                                                      <td><button type="submit" name="removeANCC'.$i6.'" id="'.$i6.'" class="btn btn-danger">X</button></td>
                                                      <input type="text" name="id_AC_cardiologue'.$i6.'" value="'.$row["id_AC_cardiologue"].'"style="display:none">
                                                    </tr>';
                                              $i6++;
                                            }
                                          }
                                        }else{
                                          echo '<tr id="row'.$i6.'">
                                                  <td><input type="text" name="ANCC[]" value="" placeholder="Cardiologue" class="form-textbox form-address-line"/></td>
                                                  <td><input type="text" name="ANCCH[]" value="" placeholder="Hopital" class="form-textbox form-address-line" /></td>
                                                  <td><button type="button" name="addANCC" id="addANCC" class="btn btn-info" style="background-color: #00668D">Ajouter</button>
                                                </td>';
                                        }
                                      ?>
                                  </table>
                                  <input type="button" name="submit" id="sauvgarderANCC" class="btn btn-info" value="sauvgarder" style="background-color: #00668D"/>  
                              </form>
                            </div>
                        </div>
                        <label class="form-sub-label" for="ANCC" style="min-height:13px" aria-hidden="false"> Cardiologues </label>
                        <script>  
                            $(document).ready(function(){
                                var i=1;
                                $('#addANCC').click(function(){  
                                      i++;  
                                      $('#dynamic_fieldANCC').append('<tr id="row'+i+'"><td><input type="text" name="ANCC[]" value="" placeholder="Cardiologue" class="form-textbox form-address-line" /></td><td><input type="text" name="ANCCH[]" value="" placeholder="Hopital" class="form-textbox form-address-line" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removeANCC">X</button></td></tr>');  
                                });
                                $(document).on('click', '.btn_removeANCC', function(){  
                                      var button_id = $(this).attr("id");   
                                      $('#row'+button_id+'').remove();
                                });
                                $('#sauvgarderANCC').click(function(){          
                                      $.ajax({  
                                          url:"Listes_Dynamiques/ANCCDataBase.php",
                                          method:"POST",
                                          data:$('#add_nameANCC').serialize(),  
                                          success:function(data)
                                          {
                                            alert(data);
                                          }
                                      }); 
                                }); 
                            });
                        </script>
                        
                      </li>


                      <!-- ANAMNÈSE RESPIRATOIRE  -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                    
                      <?php
                        $id_patient = $_GET["id"];
                        $nombreLigneARP = mysqli_query($conn,"SELECT * FROM ar_pneumologues WHERE id_patient=$id_patient;");
                        $i7 = mysqli_num_rows($nombreLigneARP);

                        for($j=0 ; $j<$i7 ; $j++){
                          if( isset($_POST['removeARP'.$j])){
                            $id_ar_pneumologue = intval($_POST['id_ar_pneumologue'.$j]);
                            $deleteQuery = "DELETE FROM ar_pneumologues WHERE id_ar_pneumologue=$id_ar_pneumologue;";
                            $deleteResult = mysqli_query($conn, $deleteQuery);
                          }
                        }
                      ?>

                      <label style="padding-top:20px;text-transform:uppercase;"  class="form-label form-label-top" id="ARP" for="ARP"> ANAMNÈSE RESPIRATOIRE </label>
                      <li id="cid_1" class="form-input-wide" data-type="control_head">
                        <!-- ARP -->
                        <label class="form-label form-label-top form-label-auto" id="ARP" for="ARP">Avez-vous consulté un pneumologue durant ces 12 derniers mois ? </label> 
                        <div class="container">
                            <div class="form-group">
                              <form name="add_nameARP" id="add_nameARP" method="post" action="">
                                  <table class="table" id="dynamic_fieldARP" style="margin-bottom:0;">
                                      <?php
                                        $id_patient = $_GET["id"];
                                        $ARPQuery = "SELECT * FROM ar_pneumologues WHERE id_patient=$id_patient;";
                                        $ARPResult = mysqli_query($conn, $ARPQuery);

                                        if(mysqli_num_rows($ARPResult) > 0){
                                          $i7 = 0;
                                          while($row = $ARPResult->fetch_assoc()){
                                            if($i7===0){
                                              echo '<tr id="row'.$i7.'">
                                                      <td><input type="text" name="ARP[]" value="'.$row["ar_pneumologue"].'" placeholder="Pneumologue" class="form-textbox form-address-line" /></td>
                                                      <td><input type="text" name="ARPH[]" value="'.$row["ar_hopital"].'" placeholder="Hopital" class="form-textbox form-address-line" /></td>
                                                      <td><button type="submit" name="removeARP'.$i7.'" id="'.$i7.'" class="btn btn-danger">X</button></td>
                                                      <td><button type="button" name="addARP" id="addARP" class="btn btn-info" style="background-color: #00668D">Ajouter</button></td>
                                                      <input type="text" name="id_ar_pneumologue'.$i7.'" value="'.$row["id_ar_pneumologue"].'"style="display:none">
                                                    </tr>';
                                              $i7++;
                                            }else{
                                              echo  '<tr id="row'.$i7.'">
                                                      <td><input type="text" name="ARP[]" value="'.$row["ar_pneumologue"].'" placeholder="Pneumologue" class="form-textbox form-address-line" /></td>
                                                      <td><input type="text" name="ARPH[]" value="'.$row["ar_hopital"].'" placeholder="Hopital" class="form-textbox form-address-line" /></td>
                                                      <td><button type="submit" name="removeARP'.$i7.'" id="'.$i7.'" class="btn btn-danger">X</button></td>
                                                      <input type="text" name="id_ar_pneumologue'.$i7.'" value="'.$row["id_ar_pneumologue"].'"style="display:none">
                                                    </tr>';
                                              $i7++;
                                            }
                                          }
                                        }else{
                                          echo '<tr id="row'.$i7.'">
                                                  <td><input type="text" name="ARP[]" value="" placeholder="Pneumologue" class="form-textbox form-address-line"/></td>
                                                  <td><input type="text" name="ARPH[]" value="" placeholder="Hopital" class="form-textbox form-address-line" /></td>
                                                  <td><button type="button" name="addARP" id="addARP" class="btn btn-info" style="background-color: #00668D">Ajouter</button>
                                                </td>';
                                        }
                                      ?>
                                  </table>
                                  <input type="button" name="submit" id="sauvgarderARP" class="btn btn-info" value="sauvgarder" style="background-color: #00668D"/>  
                              </form>
                            </div>
                        </div>
                        <label class="form-sub-label" for="ARP" style="min-height:13px" aria-hidden="false"> Pneumologues </label>
                        <script>  
                            $(document).ready(function(){
                                var i=1;
                                $('#addARP').click(function(){  
                                      i++;  
                                      $('#dynamic_fieldARP').append('<tr id="row'+i+'"><td><input type="text" name="ARP[]" value="" placeholder="Pneumologue" class="form-textbox form-address-line" /></td><td><input type="text" name="ARPH[]" value="" placeholder="Hopital" class="form-textbox form-address-line" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_removeARP">X</button></td></tr>');  
                                });
                                $(document).on('click', '.btn_removeARP', function(){  
                                      var button_id = $(this).attr("id");   
                                      $('#row'+button_id+'').remove();
                                });
                                $('#sauvgarderARP').click(function(){          
                                      $.ajax({  
                                          url:"Listes_Dynamiques/ARPDataBase.php",
                                          method:"POST",
                                          data:$('#add_nameARP').serialize(),  
                                          success:function(data)
                                          {
                                            alert(data);
                                          }
                                      }); 
                                }); 
                            });
                        </script>
                        
                      </li>


                  </ul>
                </div>
                <script type="text/javascript">
                  var all_spc = document.querySelectorAll("form[id='221017784288563'] .si" + "mple" + "_spc");
                  for (var i = 0; i < all_spc.length; i++)
                  {
                  all_spc[i].value = "221017784288563-221017784288563";
                  }
                </script>
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