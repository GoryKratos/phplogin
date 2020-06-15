<?php
require "dbconnection.php";

$username=$_GET["username"];
$last_signIn=date('d-m-y h:i:s');
$sql="select * from user_session where username='$username'";
$result=mysqli_query($con,$sql);
if(!mysqli_num_rows($result)>0){
	$status="failed";
	echo json_encode(array("response"=>$status,"username"=>$username));
}
else{
	$sql1="update user_session set last_signin='$last_signIn'";
	mysqli_query($con,$sql);
	$row=mysqli_fetch_assoc($result);
	$username=$row['name'];
	$status="ok";
	echo json_encode(array("response"=>$status,"username"=>$username));
}
mysqli_close($con);
?>

