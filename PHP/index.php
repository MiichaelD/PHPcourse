<?php

require_once ('functions.php');
$db 	= connectDb();

$categories = array(
    0 => 'Select a Category',
	1 => 'Arcade',
	2 => 'Adventure',
	3 => 'Sports',
	4 => 'Action',
	5 => 'Puzzle'
);

?>


<!DOCTYPE html>
<html>
	<head>
		<title>HD+ Products</title>
        <link rel="stylesheet" href="style.css"/>
        <script src="php/jquery-1.9.1.min.js"></script>
        <script>
		//que queremos que pase cunado se cargue la pagina
			$(document).ready(function(){
				$('#categories').change(function(){
					var category = $(this).val();
					alert(category);
					
					var url = 'ajax.php?cat=' + category;
					$.get(url, function(data) {
							$('#product-list').empty().append(data);
						});
					});
					
				});
        </script>
	</head>
	<body>
	    <center>
        <select id="categories">
        	<?php 
				foreach($categories as $key => $value){
					echo '<option value="'. $key . '">'. $value . '</option>
					';
				}
			?>
        </select>
		<?php
			$html = getProducts();

			if(!empty($html)){
				echo '<ul id="product-list">';
				echo $html;
				echo '</ul>';	
			}
			else{
				echo 'No Data :(';
			}
		?>
        </center>
	</body>
</html>