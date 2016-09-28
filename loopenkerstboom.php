<style>
    *{text-align: center;}
</style>
<?php
$x = 5;
$y=0;

$row =10;


while($y<$x){
    echo"$y";
    $y++;
}
?>
<br>
<?php
for($i=0;$i<$row;$i++){
    for($o=0;$o<$i;$o++){
        echo "*";
    }
    echo"<br>";
}
?>
