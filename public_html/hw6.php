<?php
error_reporting(0);
//header("Content-Type:text/html; charset=utf-8");
$a=$_POST["a"];
/*foreach($a as $run)
{
        echo "你輸入的是".$run."</br>";
}*/
 //$input = array_reverse($a);
//echo $input;
    //  var_dump($input);
$output = explode(" ", $a);
echo "反轉後</br>";

echo $output[10]." ",$output[9]." ",$output[8]." ",$output[7]." ",$output[6]." ",$output[5]." ",$output[4]." ",$output[3]." ",$output[2]." ",$output[1]." ",$output[0]." ";      
?>