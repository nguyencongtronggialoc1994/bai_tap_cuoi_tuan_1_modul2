<?php
function conCho($arr)
{
    $n = count($arr) / 3;
    $arrNew = [];
    for ($i = 0; $i < (count($arr) / 3); $i++) {
        for ($j = 0; $j < 3; $j++) {
            array_push($arrNew, $arr[$j * $n + $i]);
        }
    }
    return $arrNew;
}
$arr1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
$arrNew1 = conCho($arr1);
foreach ($arrNew1 as $value){
    echo $value.",";
}

?>
