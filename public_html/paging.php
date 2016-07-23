
<html>
<body>
<?php
include "Pager.php";
include "pdodb.php";
$sql="select * from scores";
$stmt=$dbh->query($sql);
$rows=$stmt->fetchall(PDO::FETCH_ASSOC);

$params=array('mode'=>'Sliding',
						'perPage'=>5,
						'delta'=>2,
						'itemData'=>$rows,
						'prevImg'=>'上頁',
						'nextImg'=>'下頁');
$pager=@Pager::factory($params);
$pager_data=$pager->GetPageData();

echo "<center><h1>查詢結果</h1><hr/>";
echo '<table border="1">';
foreach($pager_data as $row)

{
echo "<tr>";
echo '<td width="10%">'.$row["sno"]."</td>";
echo '<td width="10%">'.$row["name"]."</td>";
echo '<td width="10%">'.$row["chi"]."</td>";
echo '<td width="10%">'.$row["eng"]."</td>";
echo '<td width="10%">'.$row["math"]."</td>";
echo "</tr>";

}

echo "</table> <br/>";
echo $pager ->links;
echo "</center>";
?>
						</body>