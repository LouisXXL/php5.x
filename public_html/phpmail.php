<?php
	//mail函式發送一封信
	/*$to="s1410231034@nutc.edu.tw";
　	$subject="mail test";
　	$message="be nice";
　	$headers="From: Heart<s1410231034@nutc.edu.tw> \r\n";
　	mail($to,$subject,$message,$headers);　//調用 mail() 函式將此封信件發送出去
		$msg="Rabbit";
		mail($to,$subject,$message,$headers);*/
		$to=$_POST['b'];
		$subject=$_POST['c'];
		$message=$_POST['message'];
		$from    = $_POST['a'];
		//$to      = '收件者Email';
		//$subject = '標題';
		//$message = '信件內文';
		$headers = "From: $from\r\n".
           "Reply-To: $from\r\n".
           "Return-Path: $from\r\n";
		$parameter = "-f$from"; 

		//$headers=$_POST['b'];
		//建立郵件標頭
		//$header="From: $ \nReply-To: $from \n";
		//$header .= “Reply-To: heart<s1410231034@nutc.edu.tw>\r\n";
		//$header .= “Return-Path: heart<s1410231034@nutc.edu.tw>\r\n";
		
		if(strpos($to, '@')!=true)
			{
			echo "收件人mail格式錯誤<br/>";
			}
		elseif(mail($to,$subject,$message,$headers,$from))
			{
			echo "成功!<br/>";
			}
			
		else{
			echo "失敗!<br/>";
			}
		$msg=" ";
		


?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>訊息</title>
</head>
<body>
<h1>
<?=$msg?>
</h1>
</body>
</html>
