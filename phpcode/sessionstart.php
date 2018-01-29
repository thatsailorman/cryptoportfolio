<? session_start();?>
<?php if(!isset($_SESSION['adminuser'])){
	header("location:login.html");
}?>