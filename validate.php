<?php ob_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Process Demo</title>
</head>
<body>
<style>
div.positionmine{
	width: 960px;
	padding-top: 100px;
	padding-bottom: auto;
	padding-left: auto;
	padding-right: auto;
	margin-right: auto;
	margin-left: auto;
	text-align: center;
}	
</style>
<div class="positionmine">

<?php
	
	$myemail = "rahul108sk@gmail.com";
	$mypass = "12345678"; 

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass = $_POST['password'];

		if($email == $myemail and $pass == $mypass ){
			session_start();
			if(isset($_POST['remember'])){
				setcookie('email',$email, time()+60*60*7);
				setcookie('pass',$pass, time()+60*60*7); 
			}
			$_SESSION['email'] = $email ;
			header("location: welcome.php");
		}
		else{
				echo " <br>Email or Password is invalid.</br>";
				?><!DOCTYPE html>
				<html>
				<body>
				Click here to <a href='index.php'>Try Again</a>
				</body>
				</html>
				<?php   
			}
	}
	else{
			header("location: index.php"); 
		}

?>

</div>
</body>
</html>