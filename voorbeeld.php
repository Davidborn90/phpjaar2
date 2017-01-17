<?php
function keervijf($waarde){
    $uitkomst= $waarde * 5;
    echo"<br>" .$uitkomst;
}
?>

<form action = "voorbeeld.php">
    <input type="number" name = "waarde">
    <input type = "submit">
</form>
<?php
keervijf($_GET['waarde']);
