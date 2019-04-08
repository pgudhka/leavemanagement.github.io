<?php 
	$server="localhost";
	$user="root";
	$pass="";
	$dbname="master";
	$con=mysqli_connect($server,$user,$pass,$dbname);
	if(!$con)
	{
		die('Connection unsuccessfull');
	}
	$username=$_POST['teacher_username'];
	$password=$_POST['teacher_password'];

	$sql="select * from teacher_login_details where username='$username' && password='$password'";
	$result=mysqli_query($con,$sql);
	$count=mysqli_num_rows($result);
	if ($count==1) {
		echo "LOGIN SUCCESSFULL";
	}
	else
	{
		die('Username Password Doesnot Match');
	}
 ?>