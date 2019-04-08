<?php 
$server = "localhost";
$user = "root";
$password = "";
$dbname = "master";

$con = mysqli_connect($server,$user,$password,$dbname);

if($con){
	echo 'connection successfull'.'<br>';
}

$fname=$_POST['student_fname'];
$lname=$_POST['student_lname'];
$email=$_POST['student_email'];
$ctc_no=$_POST['student_ctc'];
$address=$_POST['student_address'];
$age=$_POST['student_age'];
$dob=$_POST['student_dob'];
$sapid=$_POST['student_sapid'];
$mentorid=$_POST['student_mentor_id'];
$course=$_POST['student_course'];
$year=$_POST['student_year'];
$stream=$_POST['student_stream'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$p_fname=$_POST['p_fname'];
$p_lname=$_POST['p_lname'];
$p_email=$_POST['p_email'];
$p_ctc=$_POST['p_ctc'];
$p_relation=$_POST['p_relation'];

$sql="insert into student_personal values('$sapid','$fname','$lname','$email','$ctc_no','$address',$age,'$gender','$dob','$p_fname','$p_lname','$p_email','$p_ctc','$p_relation')";
$sql1="insert into student_acad_details values('$sapid','$mentorid','$course','$year','$stream','$password')";
if (mysqli_num_rows(mysqli_query($con,"select * from student_acad_details where sapid='$sapid'"))>0) 
{
		die('User Already Exist');
		echo(file_get_contents("login.html"));
}
else
{
	$result = mysqli_query($con,$sql);
	$result1 = mysqli_query($con,$sql1);
	if($result && $result1) {
		
		echo "Signup Successfull";	
	}
	else{
		echo "Signup Unsuccessfull";
	}
}
?>