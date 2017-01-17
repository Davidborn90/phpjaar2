<?php
$tijden["9:15"]="mevr. pieters";
$tijden["9:30"]="";
$tijden["9:45"]="mr. dikzak";
$tijden["10:00"]="mevr. stikiedikinmybals";
$tijden["10:15"]="";
$tijden["10:30"]="";
$tijden["10:45"]="mr. hoi";
$tijden["11:00"]="mr. dipshit";
$tijden["11:15"]="mevr. choksondik";
$tijden["11:30"]="";
$tijden["11:45"]="mr. dikinass";
$tijden["12:00"]="";
echo"<table border = '1'>";
foreach($tijden as $tijd => $waarde){
    echo"<tr>";
    if ($waarde==""){
        echo"<td>".$tijd."</td><td>Geen afspraak.</td>";
    }
    else {
        echo "<td>" . $tijd . "</td><td>" . $waarde . "</td>";
    }
    echo "</tr>";
}
echo"</table>";
?>