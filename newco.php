<?php
//$con=mysqli_connect('localhost','root','')or die("cannot connect to server");

//$sel=mysqli_select_db('stock market',$con)or die("cannot connect to database");
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database
$selected = mysql_select_db("stock market",$con);

$coname=($_POST['cname']);
$cotick=mysql_real_escape_string(htmlentities($_POST['ctick']));

$res="CREATE TABLE $cotick
  (d_no   INT      AUTO_INCREMENT     NOT NULL,
   open  double     NOT NULL,
   high  double     NOT NULL,
   low  double     NOT NULL,
   close  double     NOT NULL,
   adjclose   double     NOT NULL,
   volume  double     NOT NULL,   
   PRIMARY KEY (d_no))";
   
   mysql_query($res);



//$coname=($_POST['cname']);
//$cotick=($_POST['ctick']);

/*mysql_query( "CREATE TABLE'".$cotick."'(
   d_no   INT      AUTO INCREMENT     NOT NULL,
   open  double     NOT NULL,
   high  double     NOT NULL,
   low  double     NOT NULL,
   close  double     NOT NULL,
   adjclose   double     NOT NULL,
   volume  double     NOT NULL,   
   PRIMARY KEY (d_no))");*/


$omn=($_POST['omin']);
$omx=($_POST['omax']);
$hmn=($_POST['hmin']);
$hmx=($_POST['hmax']);
$lmn=($_POST['lmin']);
$lmx=($_POST['lmax']);
$cmn=($_POST['cmin']);
$cmx=($_POST['cmax']);
$amn=($_POST['amin']);
$amx=($_POST['amax']);
$vmn=($_POST['vmin']);
$vmx=($_POST['vmax']);
$no=($_POST['num']);
if ($omn > $omx)
{
	// This is in the PHP file and sends a Javascript alert to the client
	$message1 = "Minimum open value should be smaller than maximum value!!";
	echo "<script type='text/javascript'>alert('$message1');</script>";
}
elseif ($hmn > $hmx)
{
	// This is in the PHP file and sends a Javascript alert to the client
	$message2 = "Minimum high value should be smaller than maximum value!!";
	echo "<script type='text/javascript'>alert('$message2');</script>";
}
elseif ($lmn > $lmx)
{
	// This is in the PHP file and sends a Javascript alert to the client
	$message3 = "Minimum low value should be smaller than maximum value!!";
	echo "<script type='text/javascript'>alert('$message3');</script>";
}
elseif ($cmn > $cmx)
{
	// This is in the PHP file and sends a Javascript alert to the client
	$message4 = "Minimum close value should be smaller than maximum value!!";
	echo "<script type='text/javascript'>alert('$message4');</script>";
}
elseif ($amn > $amx)
{
	// This is in the PHP file and sends a Javascript alert to the client
	$message5 = "Minimum adjoint close value should be smaller than maximum value!!";
	echo "<script type='text/javascript'>alert('$message5');</script>";
}
elseif ($vmn > $vmx)
{
	// This is in the PHP file and sends a Javascript alert to the client
	$message6 = "Minimum volume value should be smaller than maximum value!!";
	echo "<script type='text/javascript'>alert('$message6');</script>";
}
else 
{
	 echo "<script type='text/javascript'>alert('Company successfully added!!');</script>";
}

//settype($v, "integer");
//settype($v, "integer");
//settype($v, "float");
for ($x = 0; $x < $no; $x++) {
	
$o = (mt_rand($omn,$omx) / $omx)*($omx-$omn)+$omn; 
$h = (mt_rand($hmn,$hmx) / $hmx)*($hmx-$hmn)+$hmn;
$l = (mt_rand($lmn,$lmx) / $lmx)*($lmx-$lmn)+$lmn;
$c = (mt_rand($cmn,$cmx) / $cmx)*($cmx-$cmn)+$cmn;
$a = (mt_rand($amn,$amx) / $amx)*($amx-$amn)+$amn;
$v = (mt_rand($vmn,$vmx) / $vmx)*($vmx-$vmn)+$vmn;

mysql_query("INSERT INTO $cotick (open,high,low,close,adjclose,volume) VALUES ('$o','$h','$l','$c','$a','$v')") or die("could not execute".mysql_error());
//settype($v, "float");
//echo $omn;
//echo $omx;
//echo $v+'\n';

/*echo $o;
echo '<br></br>';
echo $h;
echo '<br></br>';
echo $l;
echo '<br></br>';
echo $c;
echo '<br></br>';
echo $a;
echo '<br></br>';
echo $v;
echo '<br></br>';
echo '******************';
echo '<br></br>';
*/
}
mysql_query("INSERT INTO company (tickr,comp_name,domain) VALUES ('$cotick','$coname','as')") or die ("could not execute".mysql_error());

header("location:admin_home.php");

?>