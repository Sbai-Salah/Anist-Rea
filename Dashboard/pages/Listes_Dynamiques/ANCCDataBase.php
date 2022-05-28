<?php
include '../../../loginSystem.php';

$id_patient = $_SESSION["id_patient"];

// insertion de AL :

$conn = mysqli_connect("localhost", "root", "", "anistrea");
$number = count($_POST["ANCC"]);
if($number > 0){
   for($i=0; $i<$number; $i++){
         if(trim($_POST["ANCC"][$i] != '')){
            $AC_cardiologue = $_POST["ANCC"][$i];

            $sql1 = "SELECT * FROM AC_cardiologues WHERE id_patient=$id_patient AND AC_cardiologue='$AC_cardiologue'";
            $result1 = mysqli_query($conn, $sql1);

            if(!(mysqli_num_rows($result1) > 0)){
               $sql2 = "INSERT INTO AC_cardiologues(AC_cardiologue,AC_hopital,id_patient) VALUES('".mysqli_real_escape_string($conn, $_POST["ANCC"][$i])."','".mysqli_real_escape_string($conn, $_POST["ANCCH"][$i])."',$id_patient)";
               mysqli_query($conn, $sql2);
            }
         } 
   }
}