<?php

$conn = mysqli_connect("localhost", "root", "","anistrea");

// CreateAccount :
if( isset($_POST["sauvgarder"]) ){

    function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $nom = validate($_POST['nom']);
    $prenom = validate($_POST['prenom']);
    $email = validate($_POST['email']);
    $CIN = validate($_POST['CIN']);
    $telephone = validate($_POST['telephone']);
    $hopital = validate($_POST['hopital']);
    $experience = $_POST['experience'];
    // information supplaimentaire :
    $adresse = validate($_POST['adresse']);
    $ville = validate($_POST['ville']);
    $pays = validate($_POST['pays']);
    $codePostal = validate($_POST['codePostal']);
    $aboutMe = $_POST['aboutMe'];
    // change password
    if(isset($_POST['oldPassword']) && $_POST['oldPassword']!="") $oldPassword = $_POST['oldPassword'];
    if(isset($_POST['newPassword']) && $_POST['oldPassword']!="") $newPassword = $_POST['newPassword'];
    if(isset($_POST['RepeatNewPassword']) && $_POST['oldPassword']!="") $RepeatNewPassword = $_POST['RepeatNewPassword'];


    //modifier les informations dans la base de données
    session_start();
    $id_anesthesiste = $_SESSION["id_anesthesiste"];
    
    $actualPasswordSQL = mysqli_query($conn,"SELECT password FROM anesthesiste WHERE id_anesthesiste=$id_anesthesiste;");
    while($row = $actualPasswordSQL->fetch_assoc()){
        $actualPassword = $row["password"];
    }
        
    if($_POST['oldPassword']!="" && $_POST['newPassword']!="" && $_POST['RepeatNewPassword']!=""){
        $oldPassword = md5($oldPassword);
        if($oldPassword === $actualPassword){
            if($newPassword === $RepeatNewPassword){
                $newPassword = md5($newPassword);
                $sql = "UPDATE anesthesiste SET
                nom = '$nom',
                prenom = '$prenom',
                email = '$email',
                CIN = '$CIN',
                telephone = '$telephone',
                hopital = '$hopital',
                experience = '$experience',
                adresse = '$adresse',
                ville = '$ville',
                pays = '$pays',
                codePostal = '$codePostal',
                password = '$newPassword',
                aboutMe = '$aboutMe' WHERE id_anesthesiste = $id_anesthesiste;";
                
                $result = mysqli_query($conn, $sql);

                if( $result ) {
                    // modification des valeurs de variables de session :
                        $_SESSION["nom"] = $nom;
                        $_SESSION["prenom"] = $prenom;
                        $_SESSION["CIN"] = $CIN;
                        $_SESSION["email"] = $email;
                        $_SESSION["telephone"] = $telephone;
                        $_SESSION["hopital"] = $hopital;
                        $_SESSION["experience"] = $experience;
                        $_SESSION["password"] = $password;
                        // information supplementaire 
                        $_SESSION["adresse"] = $adresse;
                        $_SESSION["ville"] = $ville;
                        $_SESSION["pays"] = $pays;
                        $_SESSION["codePostal"] = $codePostal;
                        $_SESSION["aboutMe"] = $aboutMe;


                    header("Location: profil.php?success= informations modifiées et sauvgardées avec succèes !");
                    exit();
                }else{
                    header("Location: profil.php?error= Echec de sauvgarde... Veuillez Réssayez ! ");
                    exit();
                }
            }else{
                header("Location: profil.php?error=The confirmation password does not match");
	            exit();
            }
        }else{
            header("Location: profil.php?error=The password does not match");
	        exit();
        }
        
	}else{

        $sql = "UPDATE anesthesiste SET 
        nom = '$nom',
        prenom = '$prenom',
        email = '$email',
        CIN = '$CIN',
        telephone = '$telephone',
        hopital = '$hopital',
        experience = '$experience',
        adresse = '$adresse',
        ville = '$ville',
        pays = '$pays',
        codePostal = '$codePostal',
        aboutMe = '$aboutMe' WHERE id_anesthesiste = $id_anesthesiste;";
        
        $result = mysqli_query($conn, $sql);

        if( $result ) {
            // modification des valeurs de variables de session :
                $_SESSION["nom"] = $nom;
                $_SESSION["prenom"] = $prenom;
                $_SESSION["CIN"] = $CIN;
                $_SESSION["email"] = $email;
                $_SESSION["telephone"] = $telephone;
                $_SESSION["hopital"] = $hopital;
                $_SESSION["experience"] = $experience;
                $_SESSION["password"] = $password;
                // information supplementaire 
                $_SESSION["adresse"] = $adresse;
                $_SESSION["ville"] = $ville;
                $_SESSION["pays"] = $pays;
                $_SESSION["codePostal"] = $codePostal;
                $_SESSION["aboutMe"] = $aboutMe;


            header("Location: profil.php?success= informations modifiées et sauvgardées avec succèes !");
            exit();
        }else{
            header("Location: profil.php?error= Echec de sauvgarde... Veuillez Réssayez ! ");
            exit();
        }

    }
}
