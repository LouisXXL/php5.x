<?php
header("Content-Type:text/html; charset=utf-8");
//$sql=$_POST['sql'];
$dsn="mysql:host=localhost;dbname=b10231034";
$dbh=new PDO ($dsn,'1410231034','impa34');
$dbh->exec("SET CHARACTER SET utf8");
//include_once "pdodb.php";
//$sql="select * from scores";
$a=$_POST['a'];
$stmt=$dbh->query('$a');/*
echo "<table border=1>";

while($row=$stmt->fetch()){
echo "<td>".$row['sno'] . "</td>";
echo "<td>".$row['name'] ."</td>";
echo "<td>".$row ['chi']. "</td>";
echo "<td>".$row['eng']."<br/> ";
echo "<td>".$row['math']."<br/> ";
echo "</tr>";
//echo "</br>";



}
echo "</table>";*/
echo "<table>";
$nf=$stmt->columncount();
echo "<tr>";
for($i=0;$i<$nf;$i++){
echo "<td>".$stmt->getColumnMeta($i)."</td>";

}
echo  "</table>";
$dbh=null;


?>