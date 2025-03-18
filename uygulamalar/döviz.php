<?php

$kur = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");
foreach ($kur->Currency AS $Cur) {
    if($Cur["Kod"] == "USD"){
        $usdAlıs = $Cur->ForexBuying;
        $usdSatıs = $Cur->ForexSelling;
    }
    if($Cur["Kod"] == "NOK"){
        $nokAlıs = $Cur->ForexBuying;
        $nokSatıs = $Cur->ForexSelling;
    }
}

?>

<b>USD ALIŞ: </b><?php echo $usdAlıs ?> <br>
<b>USD SATIŞ: </b><?php echo $usdSatıs ?> <br>
<hr>
<b>NOK ALIŞ: </b><?php echo $nokAlıs ?> <br>
<b>NOK SATIŞ: </b><?php echo $nokSatıs ?> <br>
