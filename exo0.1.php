<?php
function moyenne($notes){
    $n = count($notes);
    $moyenne =0;
    for ($i=0;$i<$n;$i++){
        $moyenne =$notes[$i] + $moyenne;
    }
    return $moyenne/$n;
}

$tab = array(10,12,14);
echo moyenne($tab);
?>