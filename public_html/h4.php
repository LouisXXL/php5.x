<?
function addn($n){
	$s=0;
	for($i=0;$i<=$n;$i++){
	$s=$s+$i;
	}
	return $s;
	}
	$n=100;
	$sum=addn($n);
	echo $sum;
	

?>
