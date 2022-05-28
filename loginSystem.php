<?php

$conn = mysqli_connect("localhost", "root", "","anistrea");

// CreateAccount :
if( isset($_POST["CreateAccount"]) ){

    function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    $nom = validate($_POST['nom']);
    $prenom = validate($_POST['prenom']);
    $sexe = validate($_POST['sexe']);
    $email = validate($_POST['email']);
    $telephone = validate($_POST['telephone']);
    $password = validate($_POST['password']);
    $repeatPassword = validate($_POST['repeatPassword']);
    
    
    if($password !== $repeatPassword){
        header("Location: sign-up.php?error=The confirmation password  does not match&$email");
	    exit();
	}else{
        // hashing the password
        $password = md5($password);

	    $sql = "SELECT * FROM anesthesiste WHERE email ='$email'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) > 0) {
			header("Location: sign-up.php?error=The email is taken try another");
	        exit();
		}else{
           $query = "INSERT INTO anesthesiste(nom,prenom,sexe,email,telephone,password) VALUES('$nom','$prenom','$sexe','$email','$telephone','$password')";
           $result1 = mysqli_query($conn, $query);

           if ($result1 !== 0) {
           	 header("Location: sign-up.php?success=Your account has been created successfully...");
	         exit();
           }else {
	           	header("Location: sign-up.php?error=unknown error occurred!");
		        exit();
           }
		}
    }
}

// Log in : -------------------------------------------------------------------------------
session_start();

if( isset($_POST['LogIn'])){

    // remember me :
    if(isset($_POST['remember'])){
        setcookie('email',$loginEmail,time()+60*60*30);
    }

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $loginEmail = validate($_POST['loginEmail']);
    $loginPassword = validate($_POST['loginPassword']);

    if($_POST['loginEmail'] === '' | $_POST['loginPassword'] === ''){
        header("Location: sign-in.php?loginError=Invalid email or password !");
        exit();
    }else{
        $loginPassword = md5($loginPassword);

        $_SESSION["loginEmail"] = $loginEmail;
        $_SESSION["loginPassword"] = $loginPassword;
    
        $sql = "SELECT * FROM anesthesiste WHERE email ='$loginEmail' AND password ='$loginPassword';";
        $result = mysqli_query($conn, $sql);
    
        if(mysqli_num_rows($result)>0) {
            // logged in successfully
            $_SESSION["loggedin"] = true;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $_SESSION["id_anesthesiste"] = $row["id_anesthesiste"];
                $_SESSION["nom"] = $row["nom"];
                $_SESSION["prenom"] = $row["prenom"];
                $_SESSION["sexe"] = $row["sexe"];
                $_SESSION["CIN"] = $row["CIN"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["telephone"] = $row["telephone"];
                $_SESSION["hopital"] = $row["hopital"];
                $_SESSION["experience"] = $row["experience"];
                $_SESSION["password"] = $row["password"];
                // information supplementaire 
                $_SESSION["adresse"] = $row["adresse"];
                $_SESSION["ville"] = $row["ville"];
                $_SESSION["pays"] = $row["pays"];
                $_SESSION["codePostal"] = $row["codePostal"];
                $_SESSION["aboutMe"] = $row["aboutMe"];
            }

            header("Location: index.php");
            exit();
        }else{
            header("Location: sign-in.php?loginError=Invalid email or password !");
            exit();
        }
    }
    
}