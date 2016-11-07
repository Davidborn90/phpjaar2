<?php
$username = $_POST['naam'];
$password = $_POST['ww'];
$submit = $_POST['subm'];
$user["user1"] = "password1";
$user["didado"]= "wwgvd";
$user["admin"] = "admin";
$user["dick"] = "admin123";



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