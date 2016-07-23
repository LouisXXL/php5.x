<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>My Add Page</title>
</head>
<body>

<?
        
$a = $_POST["va"];
        
$b = $_POST["vb"];
        
$c = $a + $b;
        
echo " $a+$b=$c <br />";

$t=gettype($a);
echo $t;

?>

<body>

</body>

</html>


