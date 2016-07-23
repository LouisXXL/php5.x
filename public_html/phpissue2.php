<?
$ca=$_POST["va"];
$cb=$_POST["vb"];
	if($ca<$cb)
	{	
		echo "A為".$ca."</br>";
		echo "B為".$cb."</br>";
		echo "B比較大";
	}
	else
	{
		echo "A為".$ca."</br>";
		echo "B為".$cb."</br>";
		echo "A比較大";
	
	}
	
?>