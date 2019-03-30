<?php
include_once 'connect_db.php';
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$position=$_POST['position'];
switch($position){
case 'Admin':
$result=mysql_query("SELECT admin_id, username FROM admin WHERE username='$username' AND password='$password'");
$row=mysql_fetch_array($result);
if($row>0){
session_start();
$_SESSION['admin_id']=$row[0];
$_SESSION['username']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin.php");
}else{
	echo "<script type='text/javascript'>alert('Invalid login....Try Again!!!');</script>";
//$message="<font color=red>Invalid login Try Again</font>";
	
}
break;
case 'user':
$result=mysql_query("SELECT user_id, first,last,username FROM user WHERE username='$username' AND password='$password'");
$row=mysql_fetch_array($result);
if($row>0){
session_start();
//$_SESSION['pharmacist_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
/*$_SESSION['staff_id']=$row[3];*/
$_SESSION['username']=$row[3];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/userfp.php");
}else{
	 echo "<script type='text/javascript'>alert('Invalid login....Try Again!!!');</script>";
	//message="<font color=red>Invalid login Try Again</font>";

}
break;
/*case 'Cashier':
$result=mysql_query("SELECT cashier_id, first_name,last_name,username FROM cashier WHERE username='$username' AND password='$password'");
$row=mysql_fetch_array($result);
if($row>0){
session_start();
$_SESSION['cashier_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
/*$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[3];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/cashier.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Manager':
$result=mysql_query("SELECT manager_id, first_name,last_name,username FROM manager WHERE username='$username' AND password='$password'");
$row=mysql_fetch_array($result);
if($row>0){
session_start();
$_SESSION['manager_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
/*$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[3];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/manager.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;*/
}}
echo <<<LOGIN
<!DOCTYPE html>
<html>
<head>
<title> Bookstore</title>
<link rel="stylesheet" type="text/css" href="css/signin.css">

</head>
<body>

<div class="container">
	<img src="img/signin1.png">
	<br>
	<br>
	$message
	<form action="signin1.php" method="post">
		<div>
    			<input id="name" name="username" placeholder="Username" required=""  type="text"> 
		</div>
		<br>
		<div>
			<input id="name" name="password" placeholder="Password" required=""  type="password"> 
		</div>
		<div><select name="position">
		<option>--Select position--</option>
			<option>Admin</option>
			<option>user</option>
			<!--option>Cashier</option>
			<option>Manager</option-->
			</select>
		</div>
		<input type="submit" name="submit" value="SignIn" class="btn-signin">
		
	</form>
	<form action="signup.htm">
		<input type="submit" name="submit2" value="SignUp"class="btn-signup">
	</form>
		
</div>
</body>
</html>
LOGIN;
?>