<?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database
$selected = mysql_select_db("stock market",$con);
?>
<?php
/*date_default_timezone_set("Asia/Kolkata");
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l") . "<br>";
echo "The time is " . date("h:i:sa")."<br>";
$datetime1 = new DateTime('2016-11-30 03:55:06');//start time
$datetime2 = new DateTime('2016-11-30 11:55:06');//end time
$interval = $datetime1->diff($datetime2);
echo $interval->format('%Y years %m months %d days %H hours %i minutes %s seconds')."<br>";
$current_date = date("Y-m-d H:i:s");
//mysql_query("INSERT INTO date SET date = CURRENT_TIMESTAMP");
$sql=mysql_query("SELECT *
			FROM date 
			WHERE date >= DATE_SUB(NOW(),INTERVAL 2 HOUR)
			ORDER BY date DESC");
while ($row_c3 = mysql_fetch_assoc($sql))
{	$price= $row_c3['date'];
					 echo $price."<br>";
}*/
$name="name";
$uname=$name.'buy';
echo $uname;
?>