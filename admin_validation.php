
<?php
session_start();
$_SESSION['admin'] = '';

$admin_user = $_POST['uname'];
$admin_pass = $_POST['pass'];
//echo $admin_user;
//echo '<br>';
//echo $admin_pass;

include('xml_file_read.php');

if(isset($ar[$admin_user]) && $ar[$admin_user] == $admin_pass){
	$_SESSION['admin'] == "Okey";
	//echo "Welcome ";
	header('Location:admin_home.php?admin_name="'.$admin_user.'"');

}
else{
	echo "Invalid User id and Password";
	header('Location:admin_login.php?error=Invalid Admin');
}
?>


