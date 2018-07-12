<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="sstyle.css">
</head>
<body>
     <div class="box">
           <h2>Admin Login</h2>
           <h3 class="error">
           <?php
           if(isset($_GET["error"])){
           echo "<span style='color:red'>".$_GET["error"]."</span>";
           }
           else if(isset($_GET["login"])){
           echo "<span style='color:red'>".$_GET["login"]."</span>";
           }
           ?>
           </h3>
           <form action="admin_validation.php" method="post">
           	   <div class="inputBox">
           	   	<input type="text" name="uname" required="" value="">
           	   	<label>Username</label>
           	   </div>
           	   <div class="inputBox">
           	   	<input type="password" name="pass" required="" value="">
           	   	<label>Password</label>
               </div>
                <input type="checkbox" checked="checked" name="remember" > Remember Me
                <br>
           	   	<input type="submit" name="" value="Login">
           </form>
     </div>
</body>
</html>