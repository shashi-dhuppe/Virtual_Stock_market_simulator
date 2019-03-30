<?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database
$selected = mysql_select_db("stock market",$con);
session_start();
$bid = $_POST['id'];
$no_of_shares= $_POST['u'];
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
									$name= $_SESSION['username'];
								}
$result_c3=mysql_query("SELECT balance 
						FROM users 
						WHERE name='".$name."'");
while ($row_c3 = mysql_fetch_assoc($result_c3))
	$c3= $row_c3['balance'];
$sql = mysql_query("SELECT *
					FROM company
					WHERE comp_id='".$bid."'");
while ($row = mysql_fetch_assoc($sql))
{
	$total 	= 0;
	$price=$row['price'];
	$total  = $no_of_shares * $price;
}
$bal=$c3-$total;
if($bal<0)
	{
	$message1 = "Not enough balance in the account!!";
	echo "<script type='text/javascript'>alert('$message1');</script>";
	header("location:buy_stocks.php");
	echo"</script>";
	}
else
	{
	mysql_query("INSERT INTO ".$name."(no_of_shares,buy_cost,comp_id,time,sold) VALUES ('".$no_of_shares."','".$price."','".$bid."','CURRENT_TIMESTAMP','0')");
	mysql_query("UPDATE users SET balance='".$bal."' WHERE name='".$name."'");
	header("location:view_stocks.php");
	}
?>