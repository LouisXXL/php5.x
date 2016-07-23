<?php
include "pdodb.php";
include "../MySmarty.php";

$sql="select * from scores";
$stmt=$dbh->query($sql);
//$rows=array();
/*while($row=$stmt->fetch()){
$rows[]=$row;
}98*/

$rows=$stmt->fetchall();

$smarty=new MySmarty();
$smarty->assign('list',$rows);
$smarty->display('mysql_2016_1_8_table.tpl');


?>