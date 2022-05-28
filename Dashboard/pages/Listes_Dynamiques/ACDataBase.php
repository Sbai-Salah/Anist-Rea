<?php
include '../../../loginSystem.php';

$id_patient = $_SESSION["id_patient"];

// insertion de AC :

$conn = mysqli_connect("localhost", "root", "", "anistrea");
$number = count($_POST["AC"]);
if($number > 0){
   for($i=0; $i<$number; $i++){
         if(trim($_POST["AC"][$i] != '')){
            $chirurgie = $_POST["AC"][$i];

            $sql1 = "SELECT * FROM antécédents_chirurgicaux WHERE id_patient=$id_patient AND chirurgie='$chirurgie'";
            $result1 = mysqli_query($conn, $sql1);

            if(!(mysqli_num_rows($result1) > 0)){
               $sql2 = "INSERT INTO antécédents_chirurgicaux(chirurgie,id_patient) VALUES('".mysqli_real_escape_string($conn, $_POST["AC"][$i])."',$id_patient)"; 
               mysqli_query($conn, $sql2);
            }
         } 
   }
}