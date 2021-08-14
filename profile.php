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
	  while($row1=$result->fetch_assoc()):
			?><h1 align="center">Welcome to <?php echo $row1['first']." ".$row1['last'];?></h1>
			<?php
		endwhile;
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<style>
      .blink {
        animation: blinker 0.9s linear infinite;
        color: #1c87c9;
        font-size: 30px;
        font-weight: bold;
        font-family: sans-serif;
      }
      @keyframes blinker {
        50% {
          opacity: 0;
        }
      }
    </style>

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
											<li> <a href="#Profile">Profile</a> </li>
											<li> <a href="logout.php">Logout</a> </li>
										 <li> <a href="#"><img src="icon/icon_b.png" alt="#" /></a></li>
										 </ul>
									 </nav>
								 </div>
							 </div>
							</div>
			 </div>
		 </div>
	 </div>
 </div>
</header>

		 <div class="container-fluid h-100 bg-light text-dark" id="Profile">
		 		<div class="row justify-content-center align-items-center">
		 				<h1 align="center" class="blink" style="color:green;font-size:28px;font-weight:bold;">Check Your Profile Details</h1>
						<br><br>
		 		</div>
		 		<br>
				<form method="POST" action="update.php">
                <div class="form-group" align="center">
										<div class="form-group">
											<div class="container">
												<?php $result=$con->query("select * from users where email='$email'") or die($mysqli_error);?>
											  <table class="table" id="profile">
													  <?php while($row=$result->fetch_assoc()): ?>
												<tr style="color:black;background-color:#FFFFE0;">
												<td>
													<div class="form-row">
														<div class="col form-group">
															<label>First name </label>
														  	<input type="text" class="form-control" value="<?php echo $row['first']?>" name="first" disabled>
														</div>
													</div>
												</td>
												<td>
													<div class="form-row">
														<div class="col form-group">
															<label>Last name </label>
																<input type="text" class="form-control" value="<?php echo $row['last']?>" name="last" disabled>
														</div>
													</div>
												</td><!-- form-group end.// -->
 													<!-- form-row end.// -->
													<td>
													<div class="form-group">
														<label>Email address</label>
														<input type="email" class="form-control" value="<?php echo $row['email'] ?>" name="email" disabled>
													</div> <!-- form-group end.// -->
												</td>
											</tr>

											<tr style="color:black;background-color:#FFFFE0">
												<td>
													<div class="form-group">
														<label>Gender</label>
														<input type="text" class="form-control" value="<?php echo $row['gender'] ?>" name="gender" disabled>
													</div>
												</td>

													<td>
													<div class="form-group">
														<label>Date of Birth</label>
														<input type="date" class="form-control"  value="<?php echo $row['dob'] ?>" name="dob" disabled>
													</div>
												</td>

												<td>
												<div class="form-group">
													<label>Phone Number</label>
													<input type="text" class="form-control" value="<?php echo $row['phone'] ?>" name="phone" disabled>
												</div>
											</td>
											</tr>

											<tr style="color:black;background-color:#FFFFE0">
												<td>
													<div class="form-group">
											        <button type="button" class="btn btn-warning btn-block" name="back" onclick="location.href='main.php'"> Go Back  </button>
											    </div>

												</td>
											<td>
												<div class="form-group">
										        <button type="submit" class="btn btn-primary btn-block" name="submit" onclick="location.href='update.php'"> Edit Details  </button>
										    </div>
											</td>
											<td>
												<div class="form-group">
										        <button type="button" class="btn btn-danger btn-block" name="delete" onclick="location.href='delete.php'"> Delete Account </button>
										    </div>
											</td>
										</tr>
												<?php endwhile; ?>
											</table>
										</div>
								   </div>
                </div>
					</form>
		 </div>
</body>
</html>
<?php
}
else
	{
		header("location:login.html");
	}
?>
