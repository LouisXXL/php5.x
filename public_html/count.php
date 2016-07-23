<?php
$count = intval(file_get_contents("count.txt"));
 
if (!isset($_COOKIE['visitor'])) {
    $count++;
    $fp = fopen("count.txt", "w");
    flock($fp, LOCK_EX);   // do an exclusive lock
    fwrite($fp, $count);
    flock($fp, LOCK_UN);   // release the lock
    fclose($fp);
    setcookie("visitor", 1, time()+3600);
}
echo "累積拜訪人數	" . $count."個人";
?>
