<?php include("conn.php");  
if(empty($_SESSION["admin"]) && empty($_SESSION["user"]))
{ 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<center><h1>Welcome To My Website</h1><br><h3><font color = "red">Thank You For Visiting My Website</h3></font></center><br><br><br>
<p><h4>Don't have an account?&nbsp;&nbsp;<a href="registration.php"><button>Register</button></a><br><br>
Already have an account?&nbsp;&nbsp;<a href="login.php"><button>Login</button></a></h4><br><br><br><br>
</body>
</html>
<?php
} 
else if(!empty($_SESSION["admin"]))
	@header("location:WelcomeAdmin.php");
else
	@header("location:WelcomeUser.php");	
?>

