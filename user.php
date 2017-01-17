<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 1-11-2016
 * Time: 10:47
 */
if (isset($_GET['username'.'password'])){
    if ($_GET["user"]){
        echo"welkom gebruiker";
    }
}
else{
    echo"<p style='color:red; font-family: Calibri;'>U moet eerst inloggen om deze pagina te zien</p>";
}