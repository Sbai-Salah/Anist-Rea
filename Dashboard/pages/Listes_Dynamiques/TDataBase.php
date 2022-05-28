<?php
include '../../../loginSystem.php';

$id_patient = $_SESSION["id_patient"];

// insertion de T :

$conn = mysqli_connect("localhost", "root", "", "anistrea");
$number = count($_POST["T"]);
if($number > 0){
   for($i=0; $i<$number; $i++){
         if(trim($_POST["T"][$i] != '')){
            $boisson = $_POST["T"][$i];

            $sql1 = "SELECT * FROM toxiques WHERE id_patient=$id_patient AND boisson='$boisson'";
            $result1 = mysqli_query($conn, $sql1);

            if(!(mysqli_num_rows($result1) > 0)){
               $sql2 = "INSERT INTO toxiques(boisson,quantite,id_patient) VALUES('".mysqli_real_escape_string($conn, $_POST["T"][$i])."','".mysqli_real_escape_string($conn, $_POST["TQ"][$i])."',$id_patient)"; 
               mysqli_query($conn, $sql2);
            }
         } 
   }
}