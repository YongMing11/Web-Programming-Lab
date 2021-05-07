<?php 
    // $uname = $_POST["uName"];
    // $email = $_POST["email"];
    // $password = $_POST["password"];
    // $rpassword = $_POST["rpassword"];
    
    // $fakeDB = fopen('javamember.txt','a');
    // $user = $uname.','.$email.','.$password.','.$rpassword."\n";
    // fwrite($fakeDB, $user);
    // fclose($fakeDB);
    // header("Location: profile.php?action=login_success");
    
    if(isset($_POST['submit'])){
        $uname = $_POST["uName"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $rpassword = $_POST["rpassword"];

        require_once 'includes/dbh.inc.php';
        require_once 'includes/functions.inc.php';

        if(emptyInputSignup($uname,$email,$password,$rpassword) !== false){
            header("location: signup.php?error=emptyinput");
            exit();
        }
        if(invalidUid($uname) !== false){
            header("location: signup.php?error=invaliduid");
            exit();
        }
        if(invalidEmail($email) !== false){
            header("location: signup.php?error=invalidemail");
            exit();
        }
        if(pwdMatch($password,$rpassword) !== false){
            header("location: signup.php?error=passwordsdontmatch");
            exit();
        }
        if(uidExists($conn,$uname,$email) !== false){
            header("location: signup.php?error=usernametaken");
            exit();
        }

        createUser($conn, $uname, $email,$password)
        echo 'It works';
    }else{
        header("location: signup.php");
    }
