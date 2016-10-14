<?php
$firstname = $_POST['naam'];
$password = $_POST['ww'];
$phone = $_POST['telefoon'];
$email = $_POST['email'];
$submit = $_POST['subm'];

if($firstname==""||$password==""||$phone==""||$email==""){
    header("location: formdynamisch.php?error=\"1\" ");
}else{
    echo "Uw gebruikersnaam: ".$firstname."<br>";
    echo "Uw wachtwoord: ".$password."<br>";
    echo "Uw telefoonnummer: ".$phone."<br>";
    echo "Uw Email: ".$email."<br>";
}
?>
<br><br>
<a href="formdynamisch.php" style="text-decoration: none;">Ga terug</a>
