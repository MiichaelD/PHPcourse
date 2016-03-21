<?php
	
	$valid_extension = array('jpg','png','gif'); 
	$path = $_SERVER['DOCUMENT_ROOT'].'/GLOFT' ;
	if(!empty($_GET['g']) && is_dir($path. '/' .$_GET['g']))
  			$path = $path .'/' .$_GET['g'];
	if(!empty($_GET['g'])){//obtener el nuevo directorio
		$gallery_path = $path ;//. '/' . $_GET['g'];
	}

	echo '<pre>'. print_r($_FILES,true) .'</pre>';
	
	if(file_exists($path))
	{
		if(!empty($_FILES)){
			if($_FILES['file']['error'] == 0){
				if(in_array(strtolower(pathinfo($_FILES['file']['name'],PATHINFO_EXTENSION)),$valid_extension)){
					if(is_dir($gallery_path) && move_uploaded_file($_FILES['file']['tmp_name'], $gallery_path.'/'.$_FILES['file']['name'])){
					}
					else{
						echo "Error uploading file";	
					}
				}
			}	
		}
		
		$dirs = scandir($path);	
		//imprimir los archivos dentro del directorio
		echo '<pre>' . print_r($dirs,true) . '</pre>';
		
		foreach($dirs as $d){
			if(is_dir($path.'/'.$d) && $d[0]!='.')
				if(!empty($_GET['g']))
					echo '<pre><a href="gallery.php?g='.$_GET['g'].'/'.$d.'">'.ucfirst($d).'</a></pre>';
				else
					echo '<pre><a href="gallery.php?g='.$d.'">'.ucfirst($d).'</a></pre>';
		}
		if(!empty($_GET['g'])){
			if(file_exists($gallery_path) && $_GET['g']{0} != '.')
			{
				$files = scandir($gallery_path);
					foreach($files as $f){
						//checar que sea archivo y de extension valida
						if(is_file($gallery_path . '/' . $f) && in_array(strtolower(pathinfo($f,PATHINFO_EXTENSION)),$valid_extension)){
							$relative_path = pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_DIRNAME).'/'.$_GET['g'].'/' ;
							echo '<a href="'. $relative_path .  $f . '" >';
							echo '<br /><img height = 480 width = 640 src="'. $relative_path .  $f . '" />';
							echo '</a>';
						}
					}
			}
		}
	}
?>

<?php if(isset($_GET['g'])): ?>

<form method="post" action="<?= $_SERVER['PHP_SELF'] .'?'.  $_SERVER['QUERY_STRING']?>" enctype = "multipart/form-data">

	<input type="file" name="file" />
    <input type="submit" value="Upload" />
</form>
<?php endif; ?>