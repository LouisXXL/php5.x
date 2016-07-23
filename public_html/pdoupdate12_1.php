<?php
/*header("Content-Type:text/html; charset=utf-8");
$dsn="mysql:host=localhost;dbname=b10231034";
$dbh=new PDO ($dsn,'1410231034','impa34');
$dbh->exec("SET CHARACTER SET utf8");
*/

include_once "pdodb.php";
$z=$_POST['z'];
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$sql="UPDATE SalaryDB SET name='$a',age=$b,address='$c',salary=$d WHERE name ='$z' ";

$count =$dbh->exec($sql);
echo "$count"."筆 已經修改.";

$dbh=null;

?>

