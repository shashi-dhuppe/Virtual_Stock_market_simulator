<?php
//setting header to json
header(&aposContentType:application/json&apos);
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database
$selected = mysql_select_db("stock market",$con);
$query = sprintf("SELECT d_no,high,low,open FROM appl");
//execute query
$result = $con->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
//$con->close();

//now print the data
print json_encode($data);