<?
Class bMyMath{
function addn($n){
	$s=0;
	for($i=0;$i<=$n;$i++){
	$s=$s+$i;
	}
	return $s;
	}
	}
	
	$n=100;
	$obj=new bMyMath();
	$sum=$obj->addn($n);
	echo $sum;
	

?>
