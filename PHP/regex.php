<?php
	error_reporting(0);
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$valid = false;
		switch($_POST['type']){
		case '1':
			//No funciona el match con escapes
			//$regex = '/^([0-9]{4})\-|\/([0-9]){1,2}\-|\/([0-9]){2}$/';
			$regex = '/^([0-9]{4})-([0-9]{1,2})-([0-9]{2})$/';
			if (($valid = preg_match($regex, $_POST['data'], $match))){
				echo print_r($match,true);
				$valid = checkdate($match[2], $match[3], $match[1]);
			}
			break;
		case '2':
			$regex = '/^([0-9]){3} ([0-9]){3} ([0-9]){4}$/';
			$valid = preg_match($regex, $_POST['data'],$match);
			break;
		case '3':
			$regex = '/^(.){6,30}(@)(.){5,30}$/';
			$valid = preg_match($regex, $_POST['data'],$match);
			break;
		}
		if($valid){
			echo '<p>Valido</p>';
		}
		else
			echo '<p>Invalido</p>';
	}
	
	//echo print_r($_POST,true);
?>

<form method="post">
	<fieldset>
    	<legend>REGEX</legend>
    	<p>
        	<input type="text" name="data" value="<?= $_POST['data'] ?>"/>
             
             <select name="type">
             	<option value="1" <?php if($_POST['type'] == 1) echo "selected='selected'"?>>Fecha</option>
                <option value="2" <?php if($_POST['type'] == 2) echo "selected='selected'"?>>Telefono</option>
                <option value="3" <?php if($_POST['type'] == 3) echo "selected='selected'"?>>e-mail</option>                
             </select>
        </p>
        <p>
        	<input type="submit" value="Validar" />
        </p>
    </fieldset>
</form>