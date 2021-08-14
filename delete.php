<?php
session_start();
if(isset($_SESSION['email']))
{
$mysqli=new mysqli("127.0.0.1","root","","login1") or die(mysqli_error($mysqli));
$email=$_SESSION['email'];
if($mysqli)
{
$sql=$mysqli->query("delete from users where email='$email'") or die($mysqli_error());
if($sql)
{
	$subject="Your CODIET Account Deleted";
	$body="Your CODIET Account is deleted successfully. You won't get any further Email Notifications from us.";
	$mail=mail($email, $subject, $body);
	echo '<script type="text/javascript">
						alert("Your Account Deleted Successfully\n Please Create New Acount To Login Again");
						window.location.href = "index.html";
					</script>';
}
else
{
	echo '<script>alert("Failed to delete your account");
						window.location.href = "profile.php";
				</script>';
}
}
}
else
{
	header("location:index.html");
}
?>
