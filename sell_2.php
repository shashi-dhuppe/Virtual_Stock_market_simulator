<?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database
$selected = mysql_select_db("stock market",$con);
session_start();
$sid = $_GET['id'];
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
									$name= $_SESSION['username'];
								}
$result_c3=mysql_query("SELECT balance 
						FROM users 
						WHERE name='".$name."'");
while ($row_c3 = mysql_fetch_assoc($result_c3))
	$c3= $row_c3['balance'];
$sql = mysql_query("SELECT sid,no_of_shares, buy_cost,comp_id,comp_name,price
					FROM ".$name."
					NATURAL JOIN company
					WHERE ".$name.".sid='".$sid."'");
while ($row = mysql_fetch_assoc($sql))
{
	$total 	= 0;
	$total  = $row['no_of_shares'] * $row['price'];
}
$c3=$c3+$total;
mysql_query("UPDATE users SET balance='$c3' WHERE name='".$name."'");
mysql_query("UPDATE ".$name." SET sold='1' WHERE sid='".$sid."'");
$uname=$name.'buy';
mysql_query("INSERT INTO ".$uname."(no_of_shares,sell_cost,comp_id,time) VALUES ('".$no_of_shares."','".$price."','".$sid."','CURRENT_TIMESTAMP')");
header("location:view_stocks.php");
?>