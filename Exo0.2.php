<?php
function mediane($tab){
    $n = count($tab);
    if (($n % 2) == 0){
      return ($tab[$n/2]+ $tab[($n/2)+1])/2;
    }
    else{
     return $tab[$n/2];
    }
}
$salaires = array(1500,1600,1700,1800,2000,2200,3300,4000,4500);
$salaires1 = array(1500,1500,1700,1800,2000,2200,3300,4500);
sort($salaires);
sort($salaires1);
print_r($salaires1);
print_r($salaires);
echo mediane($salaires),"\n";
echo mediane($salaires1);
?>