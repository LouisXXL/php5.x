<?php
	//mail函式發送一封信
	/*$to="s1410231034@nutc.edu.tw";
　	$subject="mail test";
　	$message="be nice";
　	$headers="From: Heart<s1410231034@nutc.edu.tw> \r\n";
　	mail($to,$subject,$message,$headers);　//調用 mail() 函式將此封信件發送出去
		$msg="Rabbit";
		mail($to,$subject,$message,$headers);*/
		$to="s1410231034@nutc.edu.tw";
		$subject="mail test";
		$message="be nice";
		$headers="From: heart<s1410231034@nutc.edu.tw> \r\n";
		//$header .= “Reply-To: heart<s1410231034@nutc.edu.tw>\r\n";
		//$header .= “Return-Path: heart<s1410231034@nutc.edu.tw>\r\n";
		mail($to,$subject,$message,$headers);
		$msg="rabbit";
		


?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Add Page</title>
</head>
<body>
<h1>
<?=$msg?>
</h1>
</body>
</html>
