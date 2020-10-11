<?php
function sumMax($arr){
    sort($arr);
  return $arr[count($arr)-1]+$arr[count($arr)-2];
}
$arr1 = [1,2,3,8,4,9,5,6,7];
echo sumMax($arr1);