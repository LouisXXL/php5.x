<?php
if(!empty($_POST['cb'])){
	foreach($_POST['cb'] as $selected){
		echo $selected."</br>";
}
}

?>

