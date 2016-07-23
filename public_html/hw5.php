<?php
header("Content-Type:text/html; charset=utf-8");
$a=$_POST['a'];
$b=$_POST['b'];
$sum=0;
for($a;$a<=$b;$a++)
	{
		
		if($a%6==0&&$a%15==0)
		{
			echo $a." "."</br>";
			$sum+=1;
			
		}
	
	}
echo "共有".$sum."個";
?>