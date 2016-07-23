<?PHP
header("Content-Type:text/html; charset=utf-8");
if($_FILES['uploadedfile']['error'] > 0)
{
		print "error??";
		
}
elseif (isset($_FILES["uploadedfile"])) {
   
   echo "上傳檔案資訊: <hr/>";
   echo "檔案名稱: ".$_FILES["uploadedfile"]["name"]."<br/>";
   echo "暫存檔名: ".$_FILES["uploadedfile"]["tmp_name"]."<br/>";
   echo "檔案尺寸: ".$_FILES["uploadedfile"]["size"]."<br/>";
   echo "檔案種類: ".$_FILES["uploadedfile"]["type"];
   echo "<hr/>";
   echo "ok";

}




?>