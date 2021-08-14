<?php
session_start();
if(isset($_SESSION['email']))
{
											$con=mysqli_connect("127.0.0.1","root","","login1");
											if(!$con)
											{
												echo " database not connected"."<br><br>";
											}
											$email=$_SESSION['email'];
											$result=$con->query("select * from users where email='$email'") or die($mysqli_error);
	  while($row=$result->fetch_assoc()):
			?><h1 align="center">Welcome to <?php echo $row['first']." ".$row['last'];?></h1>
			<?php
		endwhile;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>CODIET</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- fevicon -->
	<link rel="icon" href="images/fevicon.png" type="image/gif" />
	<!-- bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
	<script
	src="https://kit.fontawesome.com/64d58efce2.js"
	crossorigin="anonymous"
	></script>
</head>
<body>
	<header>
		<!-- header inner -->
		<div class="header-top">
			<div class="header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
							<div class="full">
								<div class="center-desk">
									<div class="logo">
										<a href="#"><img src="images/logo.png" alt="#" /></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
							 <div class="menu-area">
								<div class="limit-box">
									<nav class="main-menu ">
										<ul class="menu-area-main">
											<li class="#"> <a href="main.php">Home</a> </li>
											<li> <a href="profile.php">Profile</a> </li>
											<li> <a href="#about">About</a> </li>
											<li> <a href="logout.php">Logout</a> </li>
										 <li> <a href="#"><img src="icon/icon_b.png" alt="#" /></a></li>
										 </ul>
									 </nav>
								 </div>
							 </div>
							</div>

							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
								<div class="text-bg">
								 <H1>THE CODIET</H1>
									<h2>Your Diet Plan Expert</h2><br><br>
									<div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
										 <div class="menu-area">
											<div class="limit-box">
												<div class="panels-container">
													<div class="panel left-panel">
														<div class="content">
												</div>
											 </div>
										 </div>
										</div>
								</div>
							</div>
					 </div>
				 </div>
			 </div>
		 </div>

		 <div class="container-fluid h-100 bg-light text-dark">
		 		<div class="row justify-content-center align-items-center">
		 				<h1>Diet Plan for Symptoms</h1>
		 		</div>
		 		<br>
				<!-- Multi Select Dropbox -->
				<form method="POST" action="notify.php">
                <div class="form-group" align="center">
									<h3 style="color:red; font-style: italic;">"COVID-19",   Cold,   Cough,   Head Ache,   Throat Pain</h3><br>
										<div class="form-group">
								        <button type="submit" class="btn btn-warning btn-block" name="submit">Click Here To get Diet Plan Regularly</button>
								    </div>
                </div>
					</form>
		 </div>

		 <section id="about">
		 <div class="map height-400">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3824.797832036907!2d80.58253431469076!3d16.536300988593915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35ee4a4ef7f55d%3A0x9f29a806f12d4795!2sAndhra%20Hospitals!5e0!3m2!1sen!2sin!4v1584868813286!5m2!1sen!2sin" width="100%" height="350" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
				</div>
		</section>
</body>
</html>
<?php
}
else
	{
		header("location:login.html");
	}
?>
