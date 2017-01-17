<!DOCTYPE HTML>
<html>
<head>

    <?php
include"autos.php";
$autolijst = new autoarray();
$autos = $autolijst ->getList();
$select = array();
foreach($autos as $auto){
    $merken[] = $auto->getBrand();
}
$merken = array_unique($merken);
?>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <table>
    <thead style="text-align:center"> zoeken</thead>
    <tr>
        <td>Minimumprijs</td>
        <td>Maximumprijs</td>
    </tr>
    <tr>
        <td><input type="number" name="min"></td>
        <td><input type="number" name="max"></td>
    </tr>
    <tr>
        <td colspan="2">
            <select name="carmerk">
                <option value="alle merken">Alle Merken</option>
                <?php
                foreach($merken as $merk){
                    ?>
                    <option name="<?php echo $merk;?>"><?php echo $merk; ?></option>
                <?php
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="subm" value="zoeken">
        </td>
    </tr>
</form>
</table>
<?php
if(isset($_GET["subm"])) {
    $minprijs = 0;
    $maxprijs = PHP_INT_MAX;
    if (!$_GET["min"] == "") {
        $minprijs = $_GET["min"];
    }
    if (!$_GET["max"] == "") {
        $maxprijs = $_GET["max"];
    }
    foreach ($autos as $auto) {
        if ($_GET["carmerk"] == "alle merken") {
            if ($auto->getPrijs() >= $minprijs && $auto->getPrijs() <= $maxprijs) {
                $select[] = $auto;
            }
        } else {
            $merk = $_GET["carmerk"];
            if ($auto->getPrijs() >= $minprijs && $auto->getPrijs() <= $maxprijs && $auto->getBrand() == $merk) {
                $select[] = $auto;
            }
        }
    }
}
else {
    $select = $autos;
}
    foreach ($select as $auto) {
        ?>
        <div>
            <table class="car">
                <tr>
                    <td>
                        <img src="<?php echo $auto->getFoto() ?>" style="width:50px; height: 50px; ">
                    </td>
                    <td>
                        <p><?php echo $auto->getBrand() . " " . $auto->getModel() . "<br>" . $auto->getPrijsFormat() ?></p>
                    </td>
                </tr>
            </table>
        </div>
        <?php
    }
?>


</body>
</html>