<?php
session_start();
include ('connection.php');
if (count($_POST)>0) {

  

    $sql="UPDATE student set fname='".$_POST['fname']."', lname='".$_POST['lname']."', password='".$_POST['password']."', contact='".$_POST['contact']."', dob='".$_POST['dob']."' WHERE sid='".$_POST['sid']."'";
      if (mysqli_query($conn, $sql)) {
      header('location:user_dashboard.php');
      }
      else{
      header('location:user_dashboard.php');
      }
  // }

    // $update_image = $oldimage;

    $sql="UPDATE student set fname='".$_POST['fname']."', lname='".$_POST['lname']."', password='".$_POST['password']."', contact='".$_POST['contact']."', dob='".$_POST['dob']."' WHERE sid='".$_POST['sid']."'";
      if (mysqli_query($conn, $sql)) {
      header('location:user_dashboard.php');
      }
      else{
      header('location:user_dashboard.php');
      }
  }
$recod= "SELECT * from student WHERE sid='".$_GET['sid']."'";
$x=(mysqli_query($conn, $recod));
$row=mysqli_fetch_array($x);

?>

<!DOCTYPE html>
<html>
<head>
<title>DATA UPDATE</title>
<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/jpg" href="images/icon.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Latest compiled and minified CSS  "SELECT * FROM signup INNER JOIN finance_entry ON signup.sapid=finance_entry.sapid WHERE signup.sapid='$sapid'";      -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<section class="form-register">
	 <div class="container">
   <button type="button" onclick="home();" class="btn btn-info">Back</button>  
	 	<h2>Update Profile</h2>
		<form action="" method="POST" class="form" enctype="multipart/form-data" onsubmit="return validation()">
              <div class="row">
                <div class="col-sm-6">

                 

                  <label for="sid">Sid</label>
                  <span id="sid" class="required"></span><br>
                  <input type="text" id="sid" name ="sid" placeholder="enter sid" value="<?php echo $row["sid"];?>" readonly><br><br>

                  <label for="fname">First Name</label>
                  <span id="FName" class="required"></span><br>
                  <input type="text" id="fname" name ="fname" placeholder="enter first name" value="<?php echo $row["fname"];?>"><br><br>

                  <label for="lname">Last Name</label>
                  <span id="LName" class="required"></span><br>
                  <input type="text" id="lname" name ="lname" placeholder="enter last name" value="<?php echo $row["lname"];?>"><br><br>

                  <label for="dob">Date of Birth</label>
                  <span id="Datebirth" class="required"></span><br>
                  <input type = "date" id="dob"  name="dob" placeholder = "enter date of birth" value="<?php echo $row["dob"];?>"><br><br>

                  
                </div>
                <div class="col-sm-6">
                  <!-- <label for="email">Email</label>
                  <span id="Email" class="required"></span><br>
                  <input type = "email" id="email" name="email" placeholder = "enter email" value="<?php echo $row["email"];?>"><br><br> -->

                  <label for="password">Password</label>
                  <span id="Password" class="required"></span><br>
                  <input type="password" id="password" name ="password" placeholder="enter password" value="<?php echo $row["password"];?>"><br><br>

                  <label for="contact">Contact</label>
                  <span id="Contact" class="required"></span><br>
                  <input type = "text" id="contact" name="contact" placeholder = "enter contact" value="<?php echo $row["contact"];?>"><br><br>


                  <input type="submit" name="submit" value="Update">

                </div>
              </div>
            </form>
            </div>
        </section>


</body>
<script>
function home()
{
  window.location.href = "user_dashboard.php";
}

</script>
</html>