<?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database
$selected = mysql_select_db("stock market",$con);
$query=mysql_query("SELECT price from dollar");
$row = mysql_fetch_array($query);
$result_old_ip = $row['price'];
echo $result_old_ip;
/*$result = mysql_fetch_array($query);
while($row=mysql_fetch_assoc($result))
    {
        
    }*/

?>