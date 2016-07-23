<?php
$count=(int)file_get_contents('countphp.txt');

$count++;

file_put_contents('countphp.txt',$count);

echo $count;

?>

