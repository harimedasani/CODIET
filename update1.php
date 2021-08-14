<section id="update">
	<div>
		<?php
		$con=mysqli_connect('127.0.0.1','root','','login1');

		$email=$_POST['email'];
		$first=$_POST['first'];
		$last=$_POST['last'];
		$dob=$_POST['dob'];
		$phone=$_POST['phone'];
		$gender=$_POST['gender'];
		if(!$con)
		{
			echo "<script>alert(db not connected)</script>";
		}
		if(isset($_POST['submit']))
		{
		$sqlo="update users set first='$first' where email='$email'";
		$sqlm="update users set last='$last' where email='$email'";
		$sqln="update users set gender='$gender' where email='$email'";
		$sqli="update users set dob='$dob' where email='$email'";
		$sqlj="update users set phone='$phone' where email='$email'";

		$queryo=mysqli_query($con,$sqlo);
		$querym=mysqli_query($con,$sqlm);
		$queryn=mysqli_query($con,$sqln);
		$queryi=mysqli_query($con,$sqli);
		$queryj=mysqli_query($con,$sqlj);

		if($queryo and $querym and $queryn and $queryi and $queryj)
		{
			echo '<script type="text/javascript">
							alert("Your details are Updated\n Thank You For Joining Us\n ~Team CODIET");
							window.location.href = "profile.php";
						</script>';
		}
		else
		{
			echo '<script>alert("Failed to Update Data")</script>';
		}
		}
		else
		{
			header("location:profile.php");
		}
		?>
	</div>
</section>
