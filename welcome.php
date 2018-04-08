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
<p><h2>Hi !!</h2></p>
<?php
session_start();
echo "Welcome ".$_SESSION['email'];
?>
<p>
<form method = "post" action="logout.php">
<input type="submit" name="logout" value="Logout"></td></tr>
</form>
</div>
</body>
</html>