<?php
function checkage($a){
    if($a <4 ){
        $p = 0;
    }
    if($a >3 && $a<13 || $a>65){
        $p=5;
    }
    return $p;
}
?>

    <form action="busreis.php" method="get">
        Leeftijd <input type="number" name="a"><br>
        <input type="submit" name="OK">
    </form>
<?php
$p = checkage($_GET["a"]);
echo"de reis kost: ".$p." euro";
?>

