<?php
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
   
?>