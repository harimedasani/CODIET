<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<?php
          $con=mysqli_connect("127.0.0.1","root","","login1");
          if(!$con)
          {
            echo " database not connected"."<br><br>";
          }
          if(isset($_POST['submit']))
          {
            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $date=$_POST['dob'];
            $phone=$_POST['phone'];
            $gender=$_POST['gender'];

            $sql="insert into users(first,last,email,password,gender,dob,phone) values('$first_name','$last_name','$email','$password','$gender','$date','$phone')";

            $query=mysqli_query($con,$sql);
            if($query)
            {
                  $subject="Welcome to CODIET";
                  $body="Thank you for registering in codiet. We will send your diet plan accordingly";
                  $mail=mail($email, $subject, $body);
                  if($mail)
                  {
                    echo '<script type="text/javascript">
                    				alert("You Have Successfully Registered in CODIET Diet Plan Expert Website .\n Thank you\n ~Team CODIET");
                    				window.location.href = "login.html";
                    			</script>';
                  }
                  else
                  {
                    echo '<script type="text/javascript">
                    				alert("Sorry for inconvenience\n We regret to inform you that your data is not registered in our database.\n Thank you for your support\n ~Team CODIET");
                    				window.location.href = "register.html";
                    			</script>';
                  }
                }
                else
                {
                  echo '<script type="text/javascript">
                          alert("Failed to Register your data.\n Sorry for inconvenience \n Thank you for your support\n ~Team CODIET");
                          window.location.href = "register.html";
                        </script>';
                }
              }
            else
            {
              echo '<div class="container">
                      <div class="page-header">
                        <h3>Failed to register data</h3>
                        <a href="register.html" align="center"><input type="button" name="Back" value="Back"></a>
                      </div>
                    </div>';
            }
        ?>
