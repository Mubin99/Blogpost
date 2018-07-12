<?php
session_start();
if(isset($_SESSION['admin'])){
	echo "Okey";
}
else{
	header("Location:admin_login.php?error=first Login");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="delete_data.php" method="post">
	<h1 align="center">Welcome Admin
		<?php
		if($_GET['admin_name']){
			echo $_GET['admin_name'];
		}
		?>
	</h1>
	<h2>Username:</h2>
	<?php
	$xml = simplexml_load_file("uinfo.xml") or die("The file is not here");
    //$ar = array();
    foreach($xml->children() as $child){
	
    	echo $child->username;
    	echo "<br>";
    }
	//echo '<br>';
	?>

	<h2>Delete A User</h2>
	<input type="text" name="dlt_user">
	<input type="submit" name="" value="Delete"> <br>
	
	<button type="submit" name="button" formaction="logout_admin.php">Logout</button>
	
</body>
</html>