<?php 
    $uname = $_POST["uName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"];

    $fakeDB = fopen('javamember.txt','a');
    $user = $uname.','.$email.','.$password.','.$rpassword."\n";
    fwrite($fakeDB, $user);
    fclose($fakeDB);
    header("Location: profile.php?action=login_success");
?>