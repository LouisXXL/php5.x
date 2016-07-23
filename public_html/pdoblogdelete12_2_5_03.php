<?php
/*header("Content-Type:text/html; charset=utf-8");
$dsn="mysql:host=localhost;dbname=b10231034";
$dbh=new PDO ($dsn,'1410231034','impa34');
$dbh->exec("SET CHARACTER SET utf8");
*/

include_once "pdodb.php";

//$a=$_POST['a'];


$sql="delete from blog where name='5566' ";

$count =$dbh->exec($sql);
echo "$count"."筆 已經刪除.";

$dbh=null;

?>

