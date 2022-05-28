<?php
include '../../../loginSystem.php';

$id_patient = $_SESSION["id_patient"];

// insertion de AL :

$conn = mysqli_connect("localhost", "root", "", "anistrea");
$number = count($_POST["ARP"]);
if($number > 0){
   for($i=0; $i<$number; $i++){
         if(trim($_POST["ARP"][$i] != '')){
            $ar_pneumologue = $_POST["ARP"][$i];

            $sql1 = "SELECT * FROM ar_pneumologues WHERE id_patient=$id_patient AND ar_pneumologue='$ar_pneumologue'";
            $result1 = mysqli_query($conn, $sql1);

            if(!(mysqli_num_rows($result1) > 0)){
               $sql2 = "INSERT INTO ar_pneumologues(ar_pneumologue,ar_hopital,id_patient) VALUES('".mysqli_real_escape_string($conn, $_POST["ARP"][$i])."','".mysqli_real_escape_string($conn, $_POST["ARPH"][$i])."',$id_patient)";
               mysqli_query($conn, $sql2);
            }
         } 
   }
}