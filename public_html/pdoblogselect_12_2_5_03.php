<?php
/*$dsn="mysql:host=localhost;dbname=b10231034";
$dbh=new PDO ($dsn,'1410231034','impa34');
$dbh->exec("SET CHARACTER SET utf8");*/
include_once "pdodb.php";
$sql="select * from blog";

$stmt=$dbh->query($sql);


while($row=$stmt->fetch())
{
echo "你是來自於:".$row['ip'] . "<br/>";
echo "你使用的瀏覽器:".$row['clinet'] ."<br/>";
echo "你的姓名:".$row ['name']. "<br/>";
echo "性別:".$row['sex']."<br/> ";
echo "電子信箱:".$row['email']."<br/> ";
echo "你的留言:".$row['Suggest']."<br/> ";
echo "<hr/>";
//echo "</br>";



}

$dbh=null;


?>