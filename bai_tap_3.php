<?php
function subtotalMin($arr)
{
    sort($arr);
    $min = $arr[1] - $arr[0];
    for ($i = 2; $i < count($arr); $i++) {
      if (($arr[$i]-$arr[$i-1])<$min){
          $min = $arr[$i]-$arr[$i-1];
      }
    }
    for ($j=1;$j<count($arr);$j++){
        if ($min == ($arr[$j]-$arr[$j-1])){
            echo "(".$arr[$j].",".$arr[$j-1].")";
        }
    }
    return $min;
}
$arr1 = [1,3,5,7,9,8];
echo subtotalMin($arr1);