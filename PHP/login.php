<?php
	error_reporting(0);
	session_start();
	
	//echo 'password: '.md5('1234');
	//base64_encode / base64_decode , .'#@$ERT'
	
	$default_pass = sha1('1234'.'#@$ERT');//password to login
	
	//echo '<pre>' . print_r($_POST, true) . '</pre></br></br>';
	
	//verificar que el request es por medio de POST 
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		//si pass tiene valor:
		if(!empty($_POST['pass'])){
			
			$password = sha1($_POST['pass'].'#@$ERT');
			
			if($default_pass == $password){
				echo 'login successfull </br>';
				//creamos cookies con la informacion
				$_SESSION['logged'] = 'YES';
				$_SESSION['name'] = $_POST['email'];					
			}
			else 
				echo 'login failed</br>';
		}
	}	
?>

<?php if($_SESSION['logged'] == 'YES'): ?>
<a href="logout.php"> Logout</a>
	
<?php else: ?>


<html>

<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
	<fieldset>
	    <legend>Login</legend>
        <p>
	        <label> Email: <input type="text" name= "email" /></label>
        </p>
        <p>
    	    <label> Password: <input type="password" name= "pass" /></label>
        </p>
        <p>
    	    <input type="submit" name= "login" />
        </p>
   </fieldset>
</form>
</html>

<?php endif; ?>