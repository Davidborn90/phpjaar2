
<form action = "dynamisch.php "method="post">
    <input type="text" name="naam" placeholder="Voornaam"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="number" name="telefoon" placeholder="Telefoon"><br>
    <input type="password" name="ww" placeholder="Wachtwoord"><br>
    <input type="submit" name="subm"><br>

    <?php
    if ($_GET['error']) {
        echo "<p style='color:red;'>Vul alle velden in en probeer opnieuw</p>";
    }
    ?>
</form>
