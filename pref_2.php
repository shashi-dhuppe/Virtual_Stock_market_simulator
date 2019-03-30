 <?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database
$selected = mysql_select_db("stock market",$con);
session_start();
$radioVal = $_POST["radio"];
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
									$name= $_SESSION['username'];
								}
mysql_query("UPDATE login SET pref='".$radioVal."' WHERE username='".$name."'");
header("location:index2.php");
?>