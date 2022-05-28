<?php
include '../../loginSystem.php';

$conn = mysqli_connect("localhost", "root", "","anistrea");

// id patient
$id_patient = $_GET["id"];
$_SESSION["id_patient"] = $_GET["id"];


// ModifierPatient :
if( isset($_POST["Sauvgarder"]) ){

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
    echo $progression;
    $id_anesthesiste = intval($_SESSION["id_anesthesiste"]);
    // contact data
    $nomContact = validate($_POST['nomContact']);
    $prenomContact = validate($_POST['prenomContact']);
    $telephoneContact = validate($_POST['telephoneContact']);

   // calcul age :
   $aujourdhui = date("Y-m-d");
   $age = date_diff(date_create($DateNaissance), date_create($aujourdhui));
   $age = $age->format('%y');


   $patientQuery = "UPDATE patient SET
   nom = '$nom',
   prenom = '$prenom',
   CIN = '$CIN',
   DateNaissance = '$DateNaissance',
   age = '$age',
   sexe = '$sexe',
   situationFamiliale = '$situationFamiliale',
   email = '$email',
   telephone = '$telephone',
   adresseRue = '$adresseRue',
   ville = '$ville',
   province = '$province',
   zipCode = '$zipCode',
   etatReanimation = '$etatReanimation',
   nomContact = '$nomContact',
   prenomContact = '$prenomContact',
   telephoneContact = '$telephoneContact',
   dateHospitalisation = '$dateHospitalisation',
   numeroDossier = '$numeroDossier',
   progression = $progression
   WHERE id_patient =  $id_patient;";
   
   $patientResult = mysqli_query($conn, $patientQuery);

   if ($patientResult !== 0) {
      header("Location: Submitted_Modify_Patient.php?id=$id_patient");
      exit();
   }
}










// sauvgarderQPA : ---------------------------------------------------------------------------------------------------

if( isset($_POST["sauvgarderQPA"]) ){

   function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
   }
   // questionnaire_pré_anesthesique
   $DateIntervention = validate($_POST['DateIntervention']);
   $lieuIntervention = validate($_POST['lieuIntervention']);
   $poids = validate($_POST['poids']);
   $taille = validate($_POST['taille']);
   $QRPNom = validate($_POST['QRPNom']);
   $QRPPrenom = validate($_POST['QRPPrenom']);
   // id_patient
   $id_patient = $_GET["id"];
  
   $QPAQuery = "SELECT * FROM questionnaire_pré_anesthesique WHERE id_patient=$id_patient;";
   $QPAResult = mysqli_query($conn, $QPAQuery);

   if (mysqli_num_rows($QPAResult) > 0){
      $QPAUpdateQuery = "UPDATE questionnaire_pré_anesthesique SET DateIntervention='$DateIntervention', lieuIntervention='$lieuIntervention', poids='$poids', taille='$taille', QRPNom='$QRPNom', QRPPrenom='$QRPPrenom' WHERE id_patient=$id_patient;";
      $QPAUpdateResult = mysqli_query($conn, $QPAUpdateQuery);
   }else{
      $QPAInsertQuery = "INSERT INTO questionnaire_pré_anesthesique(DateIntervention,lieuIntervention,poids,taille,QRPNom,QRPPrenom,id_patient) VALUES('$DateIntervention','$lieuIntervention','$poids','$taille','$QRPNom','$QRPPrenom','$id_patient') ;";
      $QPAInsertResult = mysqli_query($conn, $QPAInsertQuery);
   }




   // antécédents_médicaux --------------------------------------------------------------------------------

   $AM = array();
   for($i=1;$i<20;$i++){
      $AM[$i-1] = validate($_POST['AM'.$i]);
   }

   // insertion 
   $id_patient = $_GET["id"];
  
   $AMQuery = "SELECT * FROM antécédents_médicaux WHERE id_patient=$id_patient;";
   $AMResult = mysqli_query($conn, $AMQuery);

   if (mysqli_num_rows($AMResult) > 0){
      $AMUpdateQuery = "UPDATE antécédents_médicaux SET AM1='$AM[0]', AM2='$AM[1]', AM3='$AM[2]', AM4='$AM[3]', AM5='$AM[4]', AM6='$AM[5]', AM7='$AM[6]', AM8='$AM[7]', AM9='$AM[8]', AM10='$AM[9]', AM11='$AM[10]', AM12='$AM[11]', AM13='$AM[12]', AM14='$AM[13]', AM15='$AM[14]', AM16='$AM[15]', AM17='$AM[16]', AM18='$AM[17]', AM19='$AM[18]'  WHERE id_patient=$id_patient;";
      $AMUpdateResult = mysqli_query($conn, $AMUpdateQuery);
   }else{
      $AMInsertQuery = "INSERT INTO antécédents_médicaux(AM1,AM2,AM3,AM4,AM5,AM6,AM7,AM8,AM9,AM10,AM11,AM12,AM13,AM14,AM15,AM16,AM17,AM18,AM19,id_patient) VALUES('$AM[0]','$AM[1]','$AM[2]','$AM[3]','$AM[4]','$AM[5]','$AM[6]','$AM[7]','$AM[8]','$AM[9]','$AM[10]','$AM[11]','$AM[12]','$AM[13]','$AM[14]','$AM[15]','$AM[16]','$AM[17]','$AM[18]',$id_patient) ;";
      $AMInsertResult = mysqli_query($conn, $AMInsertQuery);

   }



   // antécédents_anesthésiques -----------------------------------------------------------------------------------
   $AA = array();
   for($i=1;$i<6;$i++){
      $AA[$i-1] = validate($_POST['AA'.$i]);
   }

   // insertion 
   $id_patient = $_GET["id"];
  
   $AAQuery = "SELECT * FROM antécédents_anesthésiques WHERE id_patient=$id_patient;";
   $AAResult = mysqli_query($conn, $AAQuery);

   if (mysqli_num_rows($AAResult) > 0){
      $AAUpdateQuery = "UPDATE antécédents_anesthésiques SET AA1='$AA[0]', AA2='$AA[1]', AA3='$AA[2]', AA4='$AA[3]', AA5='$AA[4]' WHERE id_patient=$id_patient;";
      $AAUpdateResult = mysqli_query($conn, $AAUpdateQuery);
   }else{
      $AAInsertQuery = "INSERT INTO antécédents_anesthésiques(AA1,AA2,AA3,AA4,AA5,id_patient) VALUES('$AA[0]','$AA[1]','$AA[2]','$AA[3]','$AA[4]',$id_patient)";
      $AAInsertResult = mysqli_query($conn, $AAInsertQuery);
   }


   // anamnèse_cardiovasculaire -----------------------------------------------------------------------------------
   $ANC = array();
   for($i=1;$i<6;$i++){
      $ANC[$i-1] = validate($_POST['ANC'.$i]);
   }

   // insertion 
   $id_patient = $_GET["id"];
  
   $ANCQuery = "SELECT * FROM anamnèse_cardiovasculaire WHERE id_patient=$id_patient;";
   $ANCResult = mysqli_query($conn, $ANCQuery);

   if (mysqli_num_rows($ANCResult) > 0){
      $ANCUpdateQuery = "UPDATE anamnèse_cardiovasculaire SET ANC1='$ANC[0]', ANC2='$ANC[1]', ANC3='$ANC[2]', ANC4='$ANC[3]', ANC5='$ANC[4]' WHERE id_patient=$id_patient;";
      $ANCUpdateResult = mysqli_query($conn, $ANCUpdateQuery);
   }else{
      $ANCInsertQuery = "INSERT INTO anamnèse_cardiovasculaire(ANC1,ANC2,ANC3,ANC4,ANC5,id_patient) VALUES('$ANC[0]','$ANC[1]','$ANC[2]','$ANC[3]','$ANC[4]',$id_patient)";
      $ANCInsertResult = mysqli_query($conn, $ANCInsertQuery);
   }


   // anamnèse_respiratoire -----------------------------------------------------------------------------------
   $ANR1 = validate($_POST["ANR1"]);
   $ANR2 = validate($_POST["ANR2"]);
   $ANR3Quantite = validate($_POST["ANR3Quantite"]);
   $ANR3Duree = validate($_POST["ANR3Duree"]);
   $ANR4Cigarette = validate($_POST["ANR4Cigarette"]);
   $ANR4Nbr = validate($_POST["ANR4Nbr"]);
   $ANR4Age = validate($_POST["ANR4Age"]);


   // insertion 
   $id_patient = $_GET["id"];
  
   $ANRQuery = "SELECT * FROM anamnèse_respiratoire WHERE id_patient=$id_patient;";
   $ANRResult = mysqli_query($conn, $ANRQuery);

   if (mysqli_num_rows($ANRResult) > 0){
      $ANRUpdateQuery = "UPDATE anamnèse_respiratoire SET ANR1='$ANR1', ANR2='$ANR2', ANR3Quantite='$ANR3Quantite', ANR3Duree='$ANR3Duree', ANR4Cigarette='$ANR4Cigarette', ANR4Nbr='$ANR4Nbr', ANR4Age='$ANR4Age' WHERE id_patient=$id_patient;";
      $ANRUpdateResult = mysqli_query($conn, $ANRUpdateQuery);
   }else{
      $ANRInsertQuery = "INSERT INTO anamnèse_respiratoire(ANR1,ANR2,ANR3Quantite,ANR3Duree,ANR4Cigarette,ANR4Nbr,ANR4Age,id_patient) VALUES('$ANR1','$ANR2','$ANR3Quantite','$ANR3Duree','$ANR4Cigarette','$ANR4Nbr','$ANR4Age',$id_patient)";
      $ANRInsertResult = mysqli_query($conn, $ANRInsertQuery);
   }


   // anamnèse_digestive_nutritionnelle -----------------------------------------------------------------------------------
   $ADN1 = validate($_POST["ADN1"]);
   $ADN2PoidsPerdus = validate($_POST["ADN2PoidsPerdus"]);
   $ADN2Duree = validate($_POST["ADN2Duree"]);
   $ADN3 = validate($_POST["ADN3"]);


   // insertion 
   $id_patient = $_GET["id"];
  
   $ANRQuery = "SELECT * FROM anamnèse_digestive_nutritionnelle WHERE id_patient=$id_patient;";
   $ANRResult = mysqli_query($conn, $ANRQuery);

   if (mysqli_num_rows($ANRResult) > 0){
      $ANRUpdateQuery = "UPDATE anamnèse_digestive_nutritionnelle SET ADN1='$ADN1', ADN2PoidsPerdus='$ADN2PoidsPerdus', ADN2Duree='$ADN2Duree', ADN3='$ADN3' WHERE id_patient=$id_patient;";
      $ANRUpdateResult = mysqli_query($conn, $ANRUpdateQuery);
   }else{
      $ANRInsertQuery = "INSERT INTO anamnèse_digestive_nutritionnelle(ADN1,ADN2PoidsPerdus,ADN2Duree,ADN3,id_patient) VALUES('$ADN1','$ADN2PoidsPerdus','$ADN2Duree','$ADN3',$id_patient)";
      $ANRInsertResult = mysqli_query($conn, $ANRInsertQuery);
   }

}

