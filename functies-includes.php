<?php
include "Includes/header.php";

function convertfahrenheit($c){
    $f = $c*1.8+32;
    if ($c>0) {
        echo $c . " graden celsius is " . $f . "graden fahrenheit";
    }else{
        echo"voer een temperatuur in celsius in om te converteren";
    }
}

function doordrie($i){
    $y=$i%3;
    if ($i > 0) {
        if ($y == 0) {
            echo "<br>ja " . $i . " is deelbaar door 3.";
        } else {
            echo "<br>nee " . $i . " is niet deelbaar door 3.";
        }
    }
    else
    {
        echo "<br>Voer een getal in om te delen door 3";
    }
}

function rev($s){
    if ($s == ""){
        echo"<br>voer een woord in om om te draaien";
    }
    else {
        echo "<br>".strrev($s);
    }
}
?>
<form action="functies-includes.php" method="get">
    <input type="number" name="deg"><br>
    <?php
    convertfahrenheit($_GET["deg"]);
    ?>
<br><br><br>
    <input type="number" name="n">
<?php
doordrie($_GET["n"]);
?>

    <br><br><br><br>
        <input type="text" name="string">
<?php
rev($_GET["string"]);
?>
    <br>
    <input type = "submit" name = "submit">
<br><br><br>
    </form>
<?php
include "Includes/footer.php";
?>
