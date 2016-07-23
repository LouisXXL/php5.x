<?
include "mymath.php";

	$n=$_POST["va"];
	$obj=new bMyMath();
	$sum=$obj->addn($n);
	echo $sum;
	
	

?>
