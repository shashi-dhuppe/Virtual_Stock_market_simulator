<?php


/*$firstname=stripcslashes($firstname);
$lastname=stripcslashes($lastname);
$username=stripcslashes($username);
$password=stripcslashes($password);
$firstname=mysql_real_escape_string($username);
$lastname=mysql_real_escape_string($lastname);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);
*/
$con=mysql_connect("localhost","root","") or die("Failed to connect to mysql:".mysql_error());
$db=mysql_select_db("stock market",$con) or die("Failed to connect to mysql:".mysql_error());

/*if((!$username) or (!$password))
{
	header("Location:signup.htm");
	exit();
}*/

//$firstname=strtolower($_POST['firstname']) ;
//$lastname=strtolower($_POST['lastname']);
$username=strtolower($_POST['uname']);
$password=$_POST['pwd'];
$cpassword=$_POST['cpwd'];
$eid=$_POST['email'];

//$res=mysql_query("INSERT INTO login(username,password,eid) VALUES ('$username','$password','$eid')") or die("could not execute".mysql_error());
if(!empty($username))
{
	$res=mysql_query("select * from login where username='$username'") or die("could not execute".mysql_error());
	$row=mysql_fetch_array($res);
	if(!$row)
	{
		if ( $password== $cpassword)
		{
		$res=mysql_query("INSERT INTO login (username,password,eid) VALUES ('$username','$password','$eid')") or die("could not execute".mysql_error());
		
		mysql_query("CREATE TABLE ".$username."
  (sid   INT      AUTO_INCREMENT     NOT NULL,
   no_of_shares  INT     NOT NULL,
   buy_cost  double     NOT NULL,
   comp_id  INT     NOT NULL,
   time  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
   sold   INT     NOT NULL,
   PRIMARY KEY (sid))");
		
		$txt1=$username.'buy';
mysql_query("CREATE TABLE $txt1
  (sid   INT      AUTO_INCREMENT     NOT NULL,
   no_of_shares  INT     NOT NULL,
   sell_cost  double     NOT NULL,
   comp_id  INT     NOT NULL,
   time  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (sid))");
		
		mysql_query("INSERT INTO users (name,balance) VALUES ('".$username."','10000')");
		
			if($res)
			{
				
				//header("Location:signin1.php");
				echo "<script type='text/javascript'>alert('Registration Successful!!!! Please Login Again');";
				echo 'window.location.href="/BeProject/index.html";';
				echo"</script>";
				
				exit();
			}
		}
		else 
		{
			echo "<script type='text/javascript'>alert('Passwords do not match!! Try Again');";
			echo 'window.location.href="/BeProject/signup.html";';
			echo"</script>";	
		}
	
	}
	else
	{
		echo "<script type='text/javascript'>alert('Sorry!! User already Exists....Try again');";
		echo 'window.location.href="/BeProject/index.html";';
		echo "</script>";
	}
}
if((!$username) or (!$password))
{
	header("Location:/BeProject/index.html");
	exit();
}
mysql_close($con);
?>