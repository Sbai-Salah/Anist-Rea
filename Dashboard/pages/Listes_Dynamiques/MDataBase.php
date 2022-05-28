<?php
include '../../../loginSystem.php';

$id_patient = $_SESSION["id_patient"];

// insertion de M :

$conn = mysqli_connect("localhost", "root", "", "anistrea");
$number = count($_POST["M"]);
if($number > 0){
   for($i=0; $i<$number; $i++){
         if(trim($_POST["M"][$i] != '')){
            $medicament = $_POST["M"][$i];

            $sql1 = "SELECT * FROM medicaments WHERE id_patient=$id_patient AND medicament='$medicament'";
            $result1 = mysqli_query($conn, $sql1);

            if(!(mysqli_num_rows($result1) > 0)){
               $sql2 = "INSERT INTO medicaments(medicament,dosage,nbrFoisParJour,id_patient) VALUES('".mysqli_real_escape_string($conn, $_POST["M"][$i])."','".mysqli_real_escape_string($conn, $_POST["MD"][$i])."','".mysqli_real_escape_string($conn, $_POST["MNFPJ"][$i])."',$id_patient)";
               mysqli_query($conn, $sql2);
            }
         } 
   }
}