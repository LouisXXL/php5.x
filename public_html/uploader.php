<?php
header("Content-Type:text/html; charset=utf-8");
if($_FILES['uploadedfile']['error'] > 0)
{
		print "error??";
		
}
elseif (isset($_FILES["uploadedfile"])) {
   
   
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 


if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
 {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
	echo "<br/>";
}
 else
 {
    echo "There was an error uploading the file, please try again!";
}

   echo "上傳檔案資訊: <hr/>";
   echo "檔案名稱: ".$_FILES["uploadedfile"]["name"]."<br/>";
   echo "暫存檔名: ".$_FILES["uploadedfile"]["tmp_name"]."<br/>";
   echo "檔案尺寸: ".$_FILES["uploadedfile"]["size"]."<br/>";
   echo "檔案種類: ".$_FILES["uploadedfile"]["type"];
   echo "<hr/>";
   //echo "ok";

}

?>