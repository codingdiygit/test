<?php
$username = $_POST['username'];
$password = $_POST['password'];
	
if($username=="admin" && $password=="admin")
{
	echo "usernmae :".$username;
	echo "<br/>";
	echo "password :".$password;
	echo "<br/>";
	echo "login success";
}else{
	echo "login failed";
}
?>