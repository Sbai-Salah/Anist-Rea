<?php
include '../../../loginSystem.php';

$id_patient = $_SESSION["id_patient"];

// insertion de AL :

$conn = mysqli_connect("localhost", "root", "", "anistrea");
$number = count($_POST["AL"]);
if($number > 0){
   for($i=0; $i<$number; $i++){
         if(trim($_POST["AL"][$i] != '')){
            $allergie = $_POST["AL"][$i];

            $sql1 = "SELECT * FROM allergies WHERE id_patient=$id_patient AND allergie='$allergie'";
            $result1 = mysqli_query($conn, $sql1);

            if(!(mysqli_num_rows($result1) > 0)){
               $sql2 = "INSERT INTO allergies(allergie,reaction,id_patient) VALUES('".mysqli_real_escape_string($conn, $_POST["AL"][$i])."','".mysqli_real_escape_string($conn, $_POST["ALR"][$i])."',$id_patient)";
               mysqli_query($conn, $sql2);
            }
         } 
   }
}