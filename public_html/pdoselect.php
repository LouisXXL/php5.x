<?php
/*$dsn="mysql:host=localhost;dbname=b10231034";
$dbh=new PDO ($dsn,'1410231034','impa34');
$dbh->exec("SET CHARACTER SET utf8");*/
include_once "pdodb.php";
$sql="select * from SalaryDB";

$stmt=$dbh->query($sql);
echo "<table border=1>";

while($row=$stmt->fetch()){
echo "<td>".$row['name'] . "</td>";
echo "<td>".$row['age'] ."</td>";
echo "<td>".$row ['address']. "</td>";
echo "<td>".$row['salary']."<br/> ";
echo "</tr>";
//echo "</br>";



}
echo "</table>";
$dbh=null;


?>