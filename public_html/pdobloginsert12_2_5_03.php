<?php
/*header("Content-Type:text/html; charset=utf-8");
$dsn="mysql:host=localhost;dbname=b10231034";
$dbh=new PDO ($dsn,'1410231034','impa34');
$dbh->exec("SET CHARACTER SET utf8");
*/

include_once "pdodb.php";
$sex=$_POST['sex'];
$name=$_POST['a'];
$email=$_POST['b'];
$Suggest=$_POST['c'];
$ip=$_SERVER["REMOTE_ADDR"];
$clinet=$_SERVER["HTTP_USER_AGENT"];

if(($name=="") || ($email=="") )
	echo "Error!";
else{
$sql="insert into blog(name,sex,email,Suggest,ip,clinet) values('$name','$sex','$email','$Suggest','$ip','$clinet')";

$count =$dbh->exec($sql);
echo "$count"."筆 已經新增";
}
$dbh=null;

?>

