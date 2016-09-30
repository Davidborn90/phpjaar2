<?php
$clubs["spartelkuikens"] = 25;
$clubs["waterbuffels"]=32;
$clubs["plonsemdrin"]=11;
$clubs["Bommetje"]=23;
echo"<table border='1'>";

foreach($clubs as $club => $waarde){
    echo"<tr>";
    echo "<td>".$club."</td><td> ".$waarde."</td><td>";
    for($i=0;$i<$waarde;$i++){
        if($i%5==4){
            echo"<img src='img/zwemclub.png' style='\height:50px;width:50px'>";
        }
    }
    echo"</tr></td>";
}
