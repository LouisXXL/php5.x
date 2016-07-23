<?php
/*$dsn="mysql:host=localhost;dbname=b10231034";
$dbh=new PDO ($dsn,'1410231034','impa34');
$dbh->exec("SET CHARACTER SET utf8");*/
include_once "pdodb.php";
$a=$_POST['a'];

$sql="select * from scores where sno='$a' ";

$stmt=$dbh->query($sql);
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
echo "</table>";
$dbh=null;


?>