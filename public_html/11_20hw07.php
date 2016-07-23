<?php
$str=$_POST["vn"];
$arr=preg_split('/,/',$str);
$n=count($arr);
echo $n."<br/>";

$s=array_sum($arr);
$avg=$s/$n;
echo $avg."<br/>";

sort($arr);
$min=$arr[0];
$max=$arr[$n-1];
echo "min=$min<br/>"."max=$max<br/>";

?>