<?php
    include "../../loginSystem.php";

    if(isset($_GET["id_patient"])){
        $id_patient = intval($_GET["id_patient"]);

        $sqlresultPatientInfo1 = mysqli_query($conn,"DELETE FROM ac_cardiologues WHERE id_patient=$id_patient;");
        $sqlresultPatientInfo2 = mysqli_query($conn,"DELETE FROM allergies WHERE id_patient=$id_patient;");
        $sqlresultPatientInfo3 = mysqli_query($conn,"DELETE FROM anamnèse_cardiovasculaire WHERE id_patient=$id_patient;");
        $sqlresultPatientInfo4 = mysqli_query($conn,"DELETE FROM am_maladies WHERE id_patient=$id_patient;");
        $sqlresultPatientInfo5 = mysqli_query($conn,"DELETE FROM anamnèse_digestive_nutritionnelle WHERE id_patient=$id_patient;");
        $sqlresultPatientInfo6 = mysqli_query($conn,"DELETE FROM anamnèse_respiratoire WHERE id_patient=$id_patient;");
        $sqlresultPatientInfo7 = mysqli_query($conn,"DELETE FROM antécédents_anesthésiques WHERE id_patient=$id_patient;");
        $sqlresultPatientInfo8 = mysqli_query($conn,"DELETE FROM antécédents_chirurgicaux WHERE id_patient=$id_patient;");
        $sqlresultPatientInfo9 = mysqli_query($conn,"DELETE FROM antécédents_médicaux WHERE id_patient=$id_patient;");
        $sqlresultPatientInfo10 = mysqli_query($conn,"DELETE FROM medicaments WHERE id_patient=$id_patient;");
        $sqlresultPatientInfo11 = mysqli_query($conn,"DELETE FROM questionnaire_pré_anesthesique WHERE id_patient=$id_patient;");
        $sqlresultPatientInfo12 = mysqli_query($conn,"DELETE FROM ar_pneumologues WHERE id_patient=$id_patient;");
        $sqlresultPatientInfo13 = mysqli_query($conn,"DELETE FROM toxiques WHERE id_patient=$id_patient;");
        
        $sqlDeletePatient = "DELETE FROM patient WHERE id_patient = $id_patient;";
        $sqlresultPatient = mysqli_query($conn,$sqlDeletePatient);
        
        if( $sqlresultPatient ) {
            header("Location: tables.php?Patientsuccess= patient supprimé avec succèes !");
            exit();
        }else{
            header("Location: tables.php?Patienterror= Echec de sauvgarde... Veuillez Réssayez ! ");
            exit();
        }
    }


    if(isset($_GET["id_activite"])){
        $id_activite = intval($_GET["id_activite"]);
        $sqlDeleteActivite = "DELETE FROM activites WHERE id_activite = $id_activite;";
        $sqlresultActivite = mysqli_query($conn,$sqlDeleteActivite);
        if( $sqlresultActivite ) {
            header("Location: tables.php?Activitesuccess= activité supprimé avec succèes !");
            exit();
        }else{
            header("Location: tables.php?Activiterror= Echec de sauvgarde... Veuillez Réssayez ! ");
            exit();
        }
    }

?>