<?
include_once('Smarty.class.php');
class MySmarty extends Smarty{
 public function __construct(){
  parent:: __construct();
  $this->template_dir = './templates/';
  $this->compile_dir = './templates_c/';
  $this->config_dir = './configs/';
  $this->cache_dir = './cache/';
 }
}
?>

