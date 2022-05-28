<?php
include '../../../loginSystem.php';

// insertion de AM20
$id_patient = $_SESSION["id_patient"];

$conn = mysqli_connect("localhost", "root", "", "anistrea");
$number = count($_POST["AM20"]);
if($number > 0){
   for($i=0; $i<$number; $i++){
         if(trim($_POST["AM20"][$i] != '')){
            $maladie = $_POST["AM20"][$i];

            $sql1 = "SELECT * FROM am_maladies WHERE id_patient=$id_patient AND maladie='$maladie'";
            $result1 = mysqli_query($conn, $sql1);

            if(!(mysqli_num_rows($result1) > 0)){
               $sql2 = "INSERT INTO am_maladies(maladie,id_patient) VALUES('".mysqli_real_escape_string($conn, $_POST["AM20"][$i])."',$id_patient)"; 
               mysqli_query($conn, $sql2);
            }
         } 
   }
}

?>