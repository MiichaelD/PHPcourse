<?php		// 3 marzo 2013
require_once 'products.php';
require_once 'functions.php';

//imprime recursivamente los valores del arreglo products
//echo '<pre>' . print_r($products, true) . '<pre>';

$db 		= connectDb();
$rows		= 0;

foreach($products as $product)
{
	$id 	= $product['id'];
	$name 	= $product['name'];
	
	//SQL INJECTION - read!
	$query 	= "INSERT IGNORE INTO products (id, name) VALUES ($id, \"$name\")";
	
	//imprimimos las queries
	echo $query . '<br />';
	
	//insertamos en la bd seleccionada por la conexion.
	if ( mysql_query($query, $db) )
	{
		$rows++;
	}else{
		echo  mysql_error() ; 	
	}
}

echo 'Registrados = ' . $rows;

?>