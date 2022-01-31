<?php

include ('connection.php');

if(isset($_POST['submit']))
{
$sid=$_POST['sid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$password=$_POST['password'];
$contact=$_POST['contact'];



		$sql="INSERT INTO student(`sid`, `fname`, `lname`, `password`, `contact`, `dob`) VALUES ('$sid', '$fname', '$lname','$password', '$contact', '$dob')";

		if(mysqli_query($conn, $sql)) {
			
			$subject = "Account Registration";
			$body = "Hi,".$fname." You are Registered Successfully";
			
			header('location:main.php?register');
		}
		else{

			//echo "Error";
			header('location:main.php?No_register');
		}
	}
?>