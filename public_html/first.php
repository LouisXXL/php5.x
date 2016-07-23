<?php

require "../MySmarty.php";
$tpl=new MySMarty();
$tpl ->assign("title","測試用的網頁標題");
$tpl->assign("content","MySmarty test:測試用的網頁內容");
$tpl->display ('first.tpl');
?>