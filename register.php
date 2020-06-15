<?php
require "dbconnect.php";
$username=$_GET["username"];
$created= date('d-m-y h:i:s');
$last_signIn=date('d-m-y h:i:s');
 
$sql= "select * from user_session where username= '$username'";
$restult=mysqli_query($con,$sql);
if($result==true){
$status="exists";
}
else{
	$sql="insert into user_session values('$username','$created','$last_signIn',true";  
	if (mysqli_query($con,$sql){
		$status="ok";
	}
	else{
		$status="error";
	}
}

echo json_encode(array("response"=>$status));
mysqli_close($con);
?>