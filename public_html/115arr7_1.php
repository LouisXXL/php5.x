<?php
$arr=[[11,33,55,88],[22,44,66,88]];
print_r($arr);
echo "<br/>";

foreach($arr as $row)

{
	echo $row[0],$row[1],$row[2],$row[3]."<br/>";
	list($a,$b,$c,$d)=$row;
	echo $a,$b,$c,$d;
	echo "<br/>";
}

?>
