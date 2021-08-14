<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

$con=mysqli_connect("127.0.0.1","root","","login1");
if(!$con)
	{
		echo " database not connected"."<br><br>";
	}
	else if(isset($_POST['submit']))
		{
			if(empty($_POST['email']) || empty($_POST['password']))
				{
					?>
					<center>
					<h2><?php echo $_POST['email']; echo "<br>"."Invalid User";?></h2><br>
					<a href="login.html" align="center"><input type="button" name="login" value="Back"></a>
					</center>
					<?php
				}
			else
				{
					$query=mysqli_query($con,"select * from users where email='$email' AND password='$password'")or die(mysqli_error());
					if(mysqli_fetch_assoc($query))
						{
							$_SESSION['email']=$email;
							header('location:main.php');
						}
					else
						{
							echo '<script type="text/javascript">
    									alert("Invalid Login Credentials\n Please Enter Correct Credentials");
    									window.location.href = "login.html";
										</script>';
						}
				}
		}
	else
		{
			echo "Form Not Submitted";
		}
?>
