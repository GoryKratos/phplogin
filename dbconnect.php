<?php
	$username=$_POST["username"];
	$created= date('d-m-y h:i:s');
	$last_signIn=date('d-m-y h:i:s');
	
	$conn=mysqli_connect("localhost","'root","super","userinfo"); 
	if ($conn){
		$sql="select * from user_session where username like'$username'";
		$result=mysqli_query($con,$sql);
		if($result==true){
		 echo "Connected....";
		 $sql1="update user_session set last_signin='$last_signIn' where usernmane like '$username'"
		}
		else if($result==false){
			
		}
	}
?>