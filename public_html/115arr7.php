<?php
$a=[11,33,55,88];
print_r($a);
echo "</br>";
$b=[22,44,66,88];
print_r($b);
echo "</br>";
$c=array_unique(array_merge($a,$b));
print_r($c);
echo "</br>";

sort($c);
print_r($c);
echo "</br>";

rsort($c);
print_r($c);

echo "</br>";




?>
