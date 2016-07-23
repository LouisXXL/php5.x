<?
$ce=$_POST["va"];
//$cf=32+(9*$ce)/5;
//echo $ce;
/*foreach($ce as $manu)
 {
echo $manu;
}*/
$myallsport = implode(",",$ce);
echo "你輸入的值為</br>".$myallsport."</br>";
//echo "反轉後</br>";
$max = max($myallsport);
echo $max."</br>";
$min = min($ce);
echo $min."</br>";

?>