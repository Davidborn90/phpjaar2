<?php
$username = $_POST['naam'];
$password = $_POST['ww'];
$submit = $_POST['subm'];
$user["user1"] = "password1";
$user["didado"]= "ww123ww";
$user["admin"] = "administrator96";
$user["david"] = "admin123";



foreach($user as $use => $pass) {
    if ($use==$username && $pass == $password) {
        header("location: user.php?user=\"1\" ");
        die();
    } else {
        header("location: formlogin.php?error=\"1\" ");
    }
}




?>
<br><br>
<a href="formlogin.php" style="text-decoration: none;">Ga terug</a>