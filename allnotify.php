<?php
  $con=mysqli_connect("127.0.0.1","root","","login1");
  if(!$con)
  {
    echo " database not connected"."<br><br>";
  }
  else
  {
    $result=$con->query("select * from users") or die($mysqli_error);
    $emailarr=array();
  while($row=$result->fetch_assoc()):
    $emailarr[]=$row['email'];
  endwhile;

  $result2=$con->query("select diet from diet") or die($mysqli_error);
  $diet=array();
  while($row2=mysqli_fetch_array($result2)):
    $diet[]=$row2['diet'];
  endwhile;

    $result1 = $con->query("select count(1) from users") or die($mysqli_error);
    $row1 = mysqli_fetch_array($result1);
    $total = $row1[0];

$subject = "CODEIT diet plan";
  #date and posix_times
  date_default_timezone_set("Asia/Kolkata");
  $day=date("l");
  $time=date("h:a");
for($i=0;$i<$total;$i++)
{
  $email=$emailarr[$i];
  #Sunday
    if($day=='Sunday')
    {
      if($time== '08:am')
      {
      $body=$diet[0];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='10:am')
      {
      $body=$diet[1];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='12:pm')
      {
      $body=$diet[2];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='05:pm')
      {
      $body=$diet[3];
      $mail=mail($email, $subject, $body);
      }

      else if($time== '08:pm')
      {
      $body=$diet[4];
      $mail=mail($email, $subject, $body);
      }
    }
    #Monday
    else if($day=='Monday')
    {
      if($time== '08:am')
      {
      $body=$diet[5];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='10:am')
      {
      $body=$diet[6];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='12:pm')
      {
      $body=$diet[7];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='05:pm')
      {
      $body=$diet[8];
      $mail=mail($email, $subject, $body);
      }

      else if($time== '08:pm')
      {
      $body=$diet[9];
      $mail=mail($email, $subject, $body);
      }
    }
  #tuesday
    else if($day=='Tuesday')
    {
      if($time== '08:am')
      {
      $body=$diet[10];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='10:am')
      {
      $body=$diet[11];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='12:pm')
      {
      $body=$diet[12];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='05:pm')
      {
      $body=$diet[13];
      $mail=mail($email, $subject, $body);
      }

      else if($time== '08:pm')
      {
      $body=$diet[14];
      $mail=mail($email, $subject, $body);
      }
    }
  #wednesday
    else if($day=='Wednesday')
    {
      if($time== '08:am')
      {
      $body=$diet[15];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='10:am')
      {
      $body=$diet[16];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='12:pm')
      {
      $body=$diet[17];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='05:pm')
      {
      $body=$diet[18];
      $mail=mail($email, $subject, $body);
      }

      else if($time== '08:pm')
      {
      $body=$diet[19];
      $mail=mail($email, $subject, $body);
      }
    }
  #Thursday
    else if($day=='Thursday')
    {
      if($time== '08:am')
      {
      $body=$diet[20];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='10:am')
      {
      $body=$diet[21];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='12:pm')
      {
      $body=$diet[22];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='05:pm')
      {
      $body=$diet[23];
      $mail=mail($email, $subject, $body);
      }

      else if($time== '08:pm')
      {
      $body=$diet[24];
      $mail=mail($email, $subject, $body);
      }
    }
  #Friday
    else if($day=='Friday')
    {
      if($time== '08:am')
      {
      $body=$diet[25];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='10:am')
      {
      $body=$diet[26];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='12:pm')
      {
      $body=$diet[27];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='05:pm')
      {
      $body=$diet[28];
      $mail=mail($email, $subject, $body);
      }

      else if($time== '08:pm')
      {
      $body=$diet[29];
      $mail=mail($email, $subject, $body);
      }
    }
  #Saturday
    else if($day=='Saturday')
    {
      if($time== '08:am')
      {
      $body=$diet[30];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='10:am')
      {
      $body=$diet[31];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='12:pm')
      {
      $body=$diet[32];
      $mail=mail($email, $subject, $body);
      }

      else if($time=='05:pm')
      {
      $body=$diet[33];
      $mail=mail($email, $subject, $body);
      }

      else if($time== '08:pm')
      {
      $body=$diet[34];
      $mail=mail($email, $subject, $body);
      }
    }
     else
     {
        echo '<script>alert("Failed to send email");
        window.location.href="index.html";</script>';
    }
  }
}
?>
