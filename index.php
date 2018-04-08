<!DOCTYPE html>
<html>
<head>
	<title>Login Process Demo</title>
</head>

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
<body>
<div class="positionmine">
 <table cellpadding="5" cellspacing="10" align="center">
 	<h1>Login Here :<h1>
 	<form method="post" action="validate.php">
 		<tr><th>Email:</th><td><input type="text" id="email" name="email"></td></tr>
 		<tr><th>Password:</th><td><input type="password" id="pass" name="password"></td></tr>
 		<tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr>
 		<tr><td colspan="2" align="right"><input type="submit" name="login" value="Login"></td></tr>
 	</form>
 </table>
</body>
</html>

<?php
	if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
		$email = $_COOKIE['email'];
		$pass  = $_COOKIE['pass'];
		//echo $email;
		echo "<script>
			//alert('$email') 
			document.getElementById('email').value = '$email' ;
			document.getElementById('pass').value = '$pass' ;
		</script>"
		?>

		<?php
	}
?>