
<form action = "loginenadmin.php"method="post">
    <input type="text" name="naam" placeholder="Voornaam"><br>
    <input type="password" name="ww" placeholder="Wachtwoord"><br>
    <input type="submit" name="subm"><br>

    <?php
    if ($_GET['error']) {
        echo "<p style='color:red;font-family: Calibri'>U heeft een incorrecte gebruikersnaam of wachtwoord ingevuld</p>";
    }
    ?>
</form>
