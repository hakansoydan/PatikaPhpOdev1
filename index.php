<?php
// Php Üçgen Yazdırma Ödevi
$j=0;
function ucgen($sayi){
    for($i=0; $i<$sayi; $i++){
       
    $j= 0;
        while ($j <= $sayi) {
             $j++;
        if($i>=$j){
         echo  " * ";
         
        }
    }
    echo "<br>";
    }
}

ucgen(30);
echo "<br>";
ucgen(20);

?>