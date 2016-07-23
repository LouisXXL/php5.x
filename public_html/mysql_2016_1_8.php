<?php
include "pdodb.php";
include "../MySmarty.php";

$sql="select * from scores";
$stmt=$dbh->query($sql);
$rows=array();
while($row=$stmt->fetch()){
$rows[]=$row;
}

$smarty=new MySmarty();
$smarty->assign('list',$rows);
$smarty->display('mysql_2016_1_8.tpl');


?>