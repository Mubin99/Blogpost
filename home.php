<?php
session_start();
if(isset($_SESSION['Username']) && $_SESSION['Password']){
	//header('Location:index.php');
	echo 'okey';
}
else{
	//echo 'okey';
	header('Location:index.php');
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<form method="Post">
		<fieldset align="center">
			<legend>Home</legend>
			
				<button type="submit" name="Button" formaction="cpost.php">Create Post</button><br>
				<br>
				<br>
				<button type="submit" name="btm" formaction="vpost.php">View Post</button>
				<br>
				<br>
				<br>
				<button type="submit" name="button" formaction="logout.php">Logout</button>
			
		</fieldset>
	</form>
</body>
</html>