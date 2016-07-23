<?php
$arr=array(11,33,55,77);
echo $arr[2]."</br>";

$arr2=[11,33,55,77];
echo $arr2[3]."</br>";

echo "---------------------</br>";
$str="11,22,33,44,55";
$arr3=preg_split('/,/',$str);
print_r($arr3);
echo "</br>";
echo "$arr3[1] </br>";

$n=count($arr3);
echo $n ;

?>
