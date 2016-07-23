<?php
/*header("Content-Type:text/html; charset=utf-8");
$dsn="mysql:host=localhost;dbname=b10231034";
$dbh=new PDO ($dsn,'1410231034','impa34');
$dbh->exec("SET CHARACTER SET utf8");
*/

include_once "pdodb.php";
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$sql="insert into SalaryDB values('$a',$b,'$c',$d)";

$count =$dbh->exec($sql);
echo "$count"."筆 已經新增";

$dbh=null;

?>

