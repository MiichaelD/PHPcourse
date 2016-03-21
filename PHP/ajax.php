<?php
$headers = getallheaders();
//conocer si se esta llamando desde ajax, no desde la url
if($headers['X-Requested-With'] == 'XMLHttpRequest')
{
	if(!empty($_GET['cat']) && is_numeric($_GET['cat'])){
		require_once 'functions.php';
	
		$db = connectDb();
		
		echo getProducts($_GET['cat']);	
	}
}
?>