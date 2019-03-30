<?php
//$con=mysqli_connect('localhost','root','')or die("cannot connect to server");

//$sel=mysqli_select_db('stock market',$con)or die("cannot connect to database");
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
/*connection with database
$selected = mysql_select_db("stock market",$con);

$cotick=mysql_real_escape_string(htmlentities($_POST['tick']));
$res="DROP TABLE $cotick";
mysql_query($res);
$result="DELETE from company where tickr='$cotick'";
mysql_query($result);
header("location:admin_home.html");
*/
?>
<body>

	<?php
		
	echo "successful";
	
/*	echo exec('python C:\Users\Gaurav Nale\AppData\Local\Programs\Python\Python36-32 tp.py');
	exec("C:\xampp\htdocs\BeProject\Python\Python36-32 tp.py");
	$output=null;
	echo exec('python tp.py');
	*/
	//print $return ;
	//*/
	$command=escapeshellcmd('python C:\xampp\htdocs\BeProject\Python\Python36-32\tp.py');
	$output=shell_exec($command);
	echo $output;
	?>
</body>