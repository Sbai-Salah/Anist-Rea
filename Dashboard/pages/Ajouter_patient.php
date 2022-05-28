<?php
include '../../loginSystem.php';

$conn = mysqli_connect("localhost", "root", "","anistrea");
// ajouter patient :
if( isset($_POST["ajouter"]) ){

    function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
    // patient data
    $nom = validate($_POST['nom']);
    $prenom = validate($_POST['prenom']);
    $CIN = validate($_POST['CIN']);
    $DateNaissance = validate($_POST['DateNaissance']);
    $sexe = validate($_POST['sexe']);
    $situationFamiliale = validate($_POST['situationFamiliale']);
    $email = validate($_POST['email']);
    $telephone = validate($_POST['telephone']);
    $adresseRue = validate($_POST['adresseRue']);
    $ville = $_POST['ville'];
    $province = validate($_POST['province']);
    $zipCode = validate($_POST['zipCode']);
    $etatReanimation = validate($_POST['etatReanimation']);
    $dateHospitalisation = validate($_POST['dateHospitalisation']);
    $numeroDossier = validate($_POST['numeroDossier']);
    $progression = validate($_POST['progression']);
    $id_anesthesiste = intval($_SESSION["id_anesthesiste"]);
    // contact data
    $nomContact = validate($_POST['nomContact']);
    $prenomContact = validate($_POST['prenomContact']);
    $telephoneContact = validate($_POST['telephoneContact']);

   // calcul age :
   $aujourdhui = date("Y-m-d");
   $age = date_diff(date_create($DateNaissance), date_create($aujourdhui));
   $age = $age->format('%y');

    $patientQuery = "INSERT INTO patient(nom,prenom,CIN,DateNaissance,age,sexe,situationFamiliale,email,telephone,adresseRue,ville,province,zipCode,etatReanimation,nomContact,prenomContact,telephoneContact,dateHospitalisation,numeroDossier,progression,id_anesthesiste)
    VALUES('$nom','$prenom','$CIN','$DateNaissance','$age','$sexe','$situationFamiliale','$email','$telephone','$adresseRue','$ville','$province','$zipCode','$etatReanimation','$nomContact','$prenomContact','$telephoneContact','$dateHospitalisation','$numeroDossier','$progression','$id_anesthesiste');";
    $patientResult = mysqli_query($conn, $patientQuery);

    if ($patientResult !== 0) {
        header("Location: Submitted_Add_Patient.php");
     exit();
   }else {
           header("Location: Submitted_Add_Patient.php");
        exit();
   }

}
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
          <a class="nav-link text-white" href="../pages/tables.php">
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
          <a class="nav-link text-white active bg-gradient-primary" href="./pages/Ajouter_patient.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Ajouter Patient</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Ajouter Patients</h6>
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
                <h6 class="text-white text-capitalize ps-3">Ajouter Un Patient</h6>
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

              <style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
              <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?"/>
              <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.32582" />
              <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.32582" />

              <!-- style and script -->
              <link rel="stylesheet" href="form.css">
              <script src="form.js"></script>

              <form class="jotform-form" action="" method="post" name="ajouterPatient" id="221017784288562" accept-charset="utf-8" autocomplete="on">
                
                <div role="main" class="form-all">
                    <ul class="form-section page-section">
                      <li id="cid_1" class="form-input-wide" data-type="control_head">
                          <div class="form-header-group  header-large">
                            <div class="header-text httac htvam">
                                <h1 id="header_1" class="form-header" data-component="header">
                                  <img src="/anistrea/Dashboard/pages/patient.jpg" style="width: 50px;float: left;" alt="">
                                  Ajouter un Patient
                                </h1>
                            </div>
                          </div>
                      </li>
                      <!-- nom et prenom -->
                      <li class="form-line form-line-column form-col-1" data-type="control_fullname" id="id_3">
                          <label class="form-label form-label-top form-label-auto" id="label_3" for="first_3"> Nom et Prenom </label>
                          <div id="cid_3" class="form-input-wide" data-layout="full">
                            <div data-wrapper-react="true">
                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                <!-- nom -->
                                <input type="text" id="first_3" name="nom" class="form-textbox" data-defaultvalue="" autoComplete="section-input_3 given-name" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" required/>
                                <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Nom </label>
                                </span>
                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                                <!-- prenom -->
                                <input type="text" id="last_3" name="prenom" class="form-textbox" data-defaultvalue="" autoComplete="section-input_3 family-name" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" required/>
                                <label class="form-sub-label" for="last_3" id="sublabel_3_last" style="min-height:13px" aria-hidden="false"> Prenom </label>
                                </span>
                            </div>
                          </div>
                      </li>

                      <!-- code d'identité nationale -->
                      <li class="form-line form-line-column form-col-2" data-type="control_textbox" id="id_13">
                          <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13"> Code d'identité nationale (CIN)</label>
                          <div id="cid_13" class="form-input-wide" data-layout="half">
                            <input type="text" id="input_13" name="CIN" data-type="input-textbox" class="form-textbox" style="width:100%" value=""/>
                          </div>
                      </li>

                      <!-- Date de Naissance -->
                      <li class="form-line form-line-column form-col-3" data-type="control_datetime" id="id_8">
                          <label class="form-label form-label-top form-label-auto" id="label_8" for="lite_mode_8"> Date de Naissance </label>
                          <div id="cid_8" class="form-input-wide" data-layout="half">
                            <div data-wrapper-react="true">
                                <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="text" name="DateNaissance" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_8" size="12" data-maxlength="12" maxLength="12" data-age="" value="" data-format="yyyymmdd" data-seperator="-" placeholder="YYYY-MM-DD" autoComplete="section-input_8 off" aria-labelledby="label_8 sublabel_8_litemode" required/>
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
                                <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_0" name="sexe" value="Female" />
                                <label id="label_input_9_0" for="input_9_0"> Female </label>
                                </span>
                                <span class="form-radio-item">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" aria-describedby="label_9" class="form-radio" id="input_9_1" name="sexe" value="Male" />
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
                                <input type="radio" name="situationFamiliale" aria-describedby="label_23" class="form-radio" id="input_23_0" value="Marié" />
                                <label id="label_input_23_0" for="input_23_0"> Marié </label>
                                </span>
                                <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" name="situationFamiliale" aria-describedby="label_23" class="form-radio" id="input_23_1" value="Célibataire" />
                                <label id="label_input_23_1" for="input_23_1"> Célibataire </label>
                                </span>
                                <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" name="situationFamiliale" aria-describedby="label_23" class="form-radio" id="input_23_2" value="divorcé" />
                                <label id="label_input_23_2" for="input_23_2"> divorcé </label> 
                                </span>
                                <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" name="situationFamiliale" aria-describedby="label_23" class="form-radio" id="input_23_3" value="Veuve" />
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
                            <input type="email" id="input_4" name="email" class="form-textbox validate[Email]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_4 sublabel_input_4"/>
                            <label class="form-sub-label" for="input_4" id="sublabel_input_4" style="min-height:13px" aria-hidden="false"> exemple@exemple.com </label>
                            </span>
                          </div>
                      </li>

                      <!-- Telephone -->
                      <li class="form-line form-line-column form-col-6" data-type="control_phone" id="id_5">
                          <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5_full"> Telephone </label>
                          <div id="cid_5" class="form-input-wide" data-layout="half">
                            <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="tel" name="telephone" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue="" autoComplete="section-input_5 tel-national" style="width:310px" data-masked="true" value="" placeholder="+212" data-component="phone" aria-labelledby="label_5 sublabel_5_masked" required/>
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
                                  <input type="text" id="input_6_addr_line1" name="adresseRue" class="form-textbox form-address-line" data-defaultvalue="" autoComplete="section-input_6 address-line1" value="" data-component="address_line_1" aria-labelledby="label_6 sublabel_6_addr_line1" required />
                                  <label class="form-sub-label" for="input_6_addr_line1" id="sublabel_6_addr_line1" style="min-height:13px" aria-hidden="false"> Addresse Rue </label>
                                  </span>
                                  </span>
                                </div>
                                <!--Ville / Region / Province -->
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                  <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                                  <span class="form-sub-label-container" style="vertical-align:top">
                                  <input type="text" id="input_6_city" name="ville" class="form-textbox form-address-city" data-defaultvalue="" autoComplete="section-input_6 address-level2" value="" data-component="city" aria-labelledby="label_6 sublabel_6_city" required />
                                  <label class="form-sub-label" for="input_6_city" id="sublabel_6_city" style="min-height:13px" aria-hidden="false"> Ville </label>
                                  </span>
                                  </span>
                                  <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                                  <span class="form-sub-label-container" style="vertical-align:top">
                                  <input type="text" id="input_6_state" name="province" class="form-textbox form-address-state" data-defaultvalue="" autoComplete="section-input_6 address-level1" value="" data-component="state" aria-labelledby="label_6 sublabel_6_state" required />
                                  <label class="form-sub-label" for="input_6_state" id="sublabel_6_state" style="min-height:13px" aria-hidden="false"> Region / Province </label>
                                  </span>
                                  </span>
                                </div>
                                <!-- Postale / Zip Code -->
                                <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
                                  <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                                  <span class="form-sub-label-container" style="vertical-align:top">
                                  <input type="text" id="input_6_postal" name="zipCode" class="form-textbox form-address-postal" data-defaultvalue="" autoComplete="section-input_6 postal-code" value="" data-component="zip" aria-labelledby="label_6 sublabel_6_postal" required />
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
                                <input type="radio" id="PréChirurgie" name="etatReanimation" class="form-radio" value="Pré Chirurgie" />
                                <label for="PréChirurgie"> Pré Chirurgie </label>
                                </span>
                                <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" id="EnRéanimation" name="etatReanimation" class="form-radio" value="En Réanimation" />
                                <label for="EnRéanimation"> En Réanimation </label>
                                </span>
                                <span class="form-radio-item" style="clear:left">
                                <span class="dragger-item">
                                </span>
                                <input type="radio" id="PostChirurgie" name="etatReanimation" class="form-radio" value="Post Chirurgie" />
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
                                <input type="text" id="first_3" name="nomContact" class="form-textbox" data-defaultvalue="" autoComplete="section-input_3 given-name" size="10" value="" data-component="first" aria-labelledby="label_3 sublabel_3_first" required/>
                                <label class="form-sub-label" for="first_3" id="sublabel_3_first" style="min-height:13px" aria-hidden="false"> Nom </label>
                                </span>
                                <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                                <input type="text" id="last_3" name="prenomContact" class="form-textbox" data-defaultvalue="" autoComplete="section-input_3 family-name" size="15" value="" data-component="last" aria-labelledby="label_3 sublabel_3_last" required/>
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
                            <input type="tel" name="telephoneContact" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue="" autoComplete="section-input_5 tel-national" style="width:310px" data-masked="true" value="" placeholder="+212" data-component="phone" aria-labelledby="label_5 sublabel_5_masked" required/>
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
                                <input type="text" name="dateHospitalisation" class="form-textbox validate[limitDate, validateLiteDate]" id="lite_mode_8" size="12" data-maxlength="12" maxLength="12" data-age="" value="" data-format="yyyymmdd" data-seperator="-" placeholder="YYYY-MM-DD" autoComplete="section-input_8 off" aria-labelledby="label_8 sublabel_8_litemode" required/>
                                <img class="newDefaultTheme-dateIcon icon-liteMode" alt="Pick a Date" id="input_8_pick" src="https://cdn.jotfor.ms/images/calendar.png" data-component="datetime" aria-hidden="true" data-allow-time="No" data-version="v2" />
                                <label class="form-sub-label" for="lite_mode_8" id="sublabel_8_litemode" style="min-height:13px" aria-hidden="false"> Date </label>
                                </span>
                            </div>
                          </div>
                      </li>

                      <!-- Numero Dossier -->
                      <li class="form-line form-line-column form-col-5" data-type="control_email" id="id_4">
                          <label class="form-label form-label-top form-label-auto" id="label_4" for="numeroDossier"> Numero Dossier </label>
                          <div id="cid_4" class="form-input-wide" data-layout="half">
                            <span class="form-sub-label-container" style="vertical-align:top">
                            <input type="text" id="numeroDossier" name="numeroDossier" class="form-textbox validate[Email]" data-defaultvalue="" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_4 sublabel_input_4"/>
                            <label class="form-sub-label" for="numeroDossier" id="sublabel_numeroDossier" style="min-height:13px" aria-hidden="false"> Dossier Medical </label>
                            </span>
                          </div>
                      </li>

                      <!-- progression -->
                      <label class="form-label form-label-top" id="progression" for="progression"> Progression de Traitement </label>
                          <div id="cid_13" class="form-input-wide">
                            <input type="range" id="progression" name="progression" value="" min="0" max="100" step="10" class="form-textbox" style="width:70%;" size="310" value=""/>
                          </div>
                          <label class="form-sub-label" for="progression" style="min-height:13px" aria-hidden="false"> (0% = traitement pas encore commencé. 100% = traitement finie.) </label>

                      <!-- Ajouter -->
                      <li class="form-line" data-type="control_button" id="id_2">
                          <div id="cid_2" class="form-input-wide" data-layout="full">
                            <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
                                <button id="input_2" type="submit" name="ajouter" class="form-submit-button form-submit-button-book_blue2 submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">
                                Ajouter
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