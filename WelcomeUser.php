<?php include("conn.php");  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome User</title>
</head>
<body>
	<?php	
	if(!empty($_SESSION["user"]))
	{ 
		$email = $_SESSION["user"];
		$name = strtoupper(strtok($email, '@')); 

	?>
	<center><h1>Welcome to the user site</h1></center>
	<center><h2><font color = "sky blue">Hello <?php echo $name ?></font> </h2></center><br>

	<h3>View Details</h3>	
    <form action="viewdetails.php" >
    	   	<button> View </button>
    </form><br>
    <h3>Update Details</h3>	
    <form action="updatedetails.php" >
    	   	<button> Update </button>
    </form><br>

    <center>
    <form action="logout.php">
    	<button> Logout </button>
    </form></center>

	<?php } 
else
{
	@header("location:login.php");
}
?>
	

</body>
</html>