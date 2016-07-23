<?php

$a=$_POST['a'];
$b=$_POST['b'];

//b10231034

header("Content-Type:text/html; charset=utf-8");
$dsn="mysql:host=localhost;dbname=$a";
$dbh=new PDO ($dsn,'1410231034','impa34');
$dbh->exec("SET CHARACTER SET utf8");
//u2388650_test
/*$name=$_POST['a'];
$age=$_POST['b'];
$address=$_POST['c'];
$salary=$_POST['d'];

//select * from SalaryDB
$sql="insert into SalaryDB(name,age,address,salary)values('$name','$age','$address','$salary')";*/
$stmt=$dbh->prepare($b);
$stmt->execute();

$rows=$stmt->rowCount();
if($rows==0){
echo "沒能查出數據";
}                                 
/*else{
/*echo "總共紀錄條數".$stmt->rowCount()."<br/>";
echo "總欄位數".$stmt->columnCount()."<br/>";
echo "欄位資訊";
for($i=0;$i<$stmt->columnCount();$i++){
print_r($stmt->getColumnMeta($i));
}*/
/*echo "<br/>";
echo "獲取所有紀錄";
echo "<br/>";*/
while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
foreach($row as $k=>$v){
echo $k.$v."<br/>";
}
echo "<br/>";
}

/*
$count=$dbh->exec($sql);
echo $sql;
if(!$sql)
        echo "no";
        else
        echo "ok";*/
        $dbh=null;
?>