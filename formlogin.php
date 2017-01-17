
<form action = "loginenadmin.php"method="post">
    <input type="text" name="naam" placeholder="Voornaam"><br>
    <input type="password" name="ww" placeholder="Wachtwoord"><br>
    <input type="submit" name="subm"><br>
    
    <p>Usernames/passwords<br>
        user: password1<br>
        didado: ww123ww<br>
        admin: administrator96<br>
        david: admin123</p>
    <?php
    if ($_GET['error']) {
        echo "<p style='color:red;font-family: Calibri'>U heeft een incorrecte gebruikersnaam of wachtwoord ingevuld</p>";
    }
    ?>
</form>
