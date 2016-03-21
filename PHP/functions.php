<?php
define ('HOST','localhost');
define ('USERNAME','pma');
define ('PASSWORD','');
define ('DBNAME','GLOFT');



function connectDb(){
     $db = mysql_connect(HOST, USERNAME, PASSWORD);
     if( $db ){
		mysql_select_db(DBNAME);
		echo 'connectado <br />';
		/*($row=mysql_fetch_assoc(mysql_query("select * from products ",$db)));
		echo $row['name'];
		*/return $db;
     }
	 else{
		echo 'false <br />';
		return false;
	 }
}



function getProducts($category = 0){
	global $db;
	
	if($category == 0){
		$query 	= "select * from products order by name";	
	}
	else{
		$query 	= "select * from products where category = {$category} order by name";	
	}
		
	$result = mysql_query ($query, $db);
	$output = '';
	
	while($row=(mysql_fetch_assoc($result))){
			$output .= '<li>';
			$output .= '<div class="productimg">';
			$output .= '<img src="http://media01.gameloft.com/products/' .$row['id'] .'/default/wap/android/artwork/'.$row['id'].'.jpg" />';
			$output .= '</div>';
			
			$output .= '<div class="productdata">';
			$output .= '<a href="#"> ' .$row['name'] .' </a>';
			$output .= '</div>';
			$output .= '<div class="clear"> </div>';
			$output .= '</li>';
	}
	return $output;
}
?>