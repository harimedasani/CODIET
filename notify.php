<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<?php
session_start();
if(isset($_SESSION['email']))
{
if(isset($_POST['submit']))
{
  $con=mysqli_connect("127.0.0.1","root","","login1");
  if(!$con)
  {
    echo " database not connected"."<br><br>";
  }
  else
  {
    $email=$_SESSION['email'];
    $subject="You Have Enabled CODIET Notifications";
  	$body="You have Successfully enabled notifications in CODIET Website. We will send your diet plan accordingly";
  	$mail=mail($email, $subject, $body);
    echo '<script type="text/javascript">
    				alert("Thank you for contacting us we will send you the diet plan to your Registered Mail according to diet plan.\n Thank you\n ~Team CODIET");
    				window.location.href = "main.php";
    			</script>';
  }
}
else
{
  echo '<script>alert("failed to send notification")';
}
}
else
{
	header("location:login.html");
}
?>
