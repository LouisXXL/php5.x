<?php
//header("Content-Type:text/html; charset=utf-8");
error_reporting(0);
$a=$_POST["a"];
/*foreach($a as $run)
{
        echo "你輸入的是".$run."</br>";
}*/
 //$input = array_reverse($a);
//echo $input;
    //  var_dump($input);
$output = explode(" ", $a);
echo "輸入的值</br>";
echo $output[0]."</br>",$output[1]."</br>",$output[2]."</br>",$output[3]."</br>",$output[4]."</br>",$output[5]."</br>",$output[6]."</br>",$output[7]."</br>",$output[8]."</br>",$output[9]."</br>",$output[10]."</br>";
 
 $max = max($output);
 echo "你輸入的值最大的是</br>";
 echo $max."</br>";     
 $min=min($output);
  echo "你輸入的值最小的是</br>";
 echo $min."</br>";     
 
 $dog=array_sum($output);
 $cat = count($output);
 $bird=$dog/$cat;
echo"平均是</br>".$bird;
 ?>