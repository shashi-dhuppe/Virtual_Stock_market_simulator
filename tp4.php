 <?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database
$selected = mysql_select_db("stock market",$con);
session_start();
//sql = mysql_query('SELECT d_no,high
	//				FROM appl');
?>
<html>
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1252">
<TITLE>Make Line Charts from MySQL Table Data</TITLE>
<meta name="description" content="Make Line Charts from MySQL Table Data">
<meta name="keywords" content="Make Line Charts from MySQL Table Data,View MySQL Table Data as Line Charts,chart MySQL Table Data,php,javascript, dhtml, DHTML">
<STYLE TYPE="text/css">
BODY {margin-left:0; margin-right:0; margin-top:0;text-align:left;}
p, li, td {font:13px Verdana; color:black;text-align:left}
h1 {font:bold 28px Verdana; color:black;text-align:center}
h2 {font:bold 24px Verdana;text-align:center}
h3 {font:bold 15px Verdana;}
#myid {position:absolute;left:10px;top:117px;height:380px;border: solid 1px #000;}
#myform {position:absolute;left:50px;top:20px}
#label {position:absolute;left:400px;top:550px;}
.bDiv {
width: 76px;
border: none;
background-color: transparent;
font-size: 11px;
font-weight: bold;
font-family: verdana;
color: #000;
padding: 5px;
overflow:hidden
}
</STYLE>
</head>
<body>

<div id='myform'>
<center><h1>Make Line Charts from MySQL Table Data</h1></center>
<!--form action='tp4.php' method='post' name='sendname'>
<center><input type='text' name='table' id='whattable' size='35' maxlength='40' value=''>
<input type='submit' value='Get chart data' name='flag'></center></form></div-->

<?php
$month=array();
$amount=array();
$table="abbv";//$_POST['table'];
$t=$table;
if(strlen($table) > 0){
/*$exists = mysql_query("SHOW '$table' LIKE '$table'") or die(mysql_error());
$num_rows = mysql_num_rows($exists);
if($num_rows>0){
*/$sql=mysql_query("SELECT d_no,high FROM $table LIMIT 30");
if(mysql_num_rows($sql)>0){
unset($table);

while($row = mysql_fetch_array($sql)){
$m=htmlentities(stripslashes($row['d_no']), ENT_QUOTES);
$a=htmlentities(stripslashes($row['high']), ENT_QUOTES);
array_push ($amount, $a);
array_push ($month, $m);
}
$biggest=max($amount);

mysql_close();}}
//else{echo '<script language="javascript">alert("No such table.");window.location="make-line-charts-from-mysql-table-data.php";</script>;';}
//}
?>

<script language="javascript">
var xa, xb, ya, yb, x, y; var addtopage = "";

function goodline(xa, xb, ya, yb) {
var lengthofline = Math.sqrt((xa-xb)*(xa-xb)+(ya-yb)*(ya-yb));
for(var i=0; i<lengthofline; i++){
x=Math.round(xa+(xb-xa)*i/lengthofline);
y=Math.round(ya+(yb-ya)*i/lengthofline);
addtopage += "<div style='position:absolute;left:"+x+"px;top:"+y+"px;background-color:#a4a4a4;width:4px;height:4px;font-size:1px'></div>";}
addtopage += "<div style='position:absolute;left:"+xx[q]+"px;top:117px;'><IMG SRC='vert.gif' WIDTH=2 HEIGHT=380 BORDER=0></div>";
document.body.innerHTML += addtopage;}

var m = <?php echo json_encode($month); ?>;
var a = <?php echo json_encode($amount); ?>;
var b = <?php echo json_encode($biggest); ?>;
var t = <?php echo json_encode($t); ?>;
var r=b/350;var xx = new Array();var yy = new Array();
var ll=(b.toString()).length;
var factor=Math.pow(10,-1*(ll-1));
var num=(Math.floor(b*factor)/factor);
var fac=Math.pow(10,ll-1);
var firstint=num/fac;
var dd=num/b;
var o=Math.round((350*dd)/firstint); //497y start then go up (y less) for each tic
for (var i=firstint;i>0;i--){
var divTag = document.createElement("div");
divTag.id="a" + i;
divTag.style.marginLeft = 10+"px";
divTag.style.position = "absolute";
divTag.style.top = (497-o*(firstint-(firstint-i)))+"px";
divTag.style.height = 2+"px";
divTag.innerHTML = "<IMG SRC='hor.gif' WIDTH='"+(a.length*80)+"' HEIGHT='2' BORDER='0'>";
document.body.appendChild(divTag);
}

if (a.length > 0 && m.length > 0) {

for (var i=0;i<a.length;i++){q=i;
xx[i]=i*78+59;
yy[i]=497-(a[i]/r);
if(i>0){goodline(xx[i-1], xx[i], yy[i-1], yy[i]);}else{addtopage += "<div style='position:absolute;left:"+xx[q]+"px;top:117px;'><IMG SRC='vert.gif' WIDTH=2 HEIGHT=380 BORDER=0></div>";}
}

for (var i=0;i<a.length;i++){
var divTag = document.createElement("div");
divTag.id="b" + i;
divTag.setAttribute("align", "center");
divTag.style.marginLeft = (i*78+20)+"px";
divTag.style.position = "absolute";
divTag.style.top = 500+"px";
divTag.style.height = 22+"px";
divTag.className = "bDiv";
divTag.innerHTML = m[i];
document.body.appendChild(divTag);
}

for (var i=0;i<a.length;i++){
var divTag = document.createElement("div");
divTag.id="c" + i;
divTag.setAttribute("align", "center");
divTag.style.marginLeft = (i*78+20)+"px";
divTag.style.position = "absolute";
divTag.style.top = (470-(a[i]/r))+"px";
divTag.style.height = 22+"px";
divTag.className = "bDiv";
divTag.innerHTML = a[i];
document.body.appendChild(divTag);
}
document.write("<div id='label'><h1>"+t+"</h1></div><div id='myid' style='min-width:"+(a.length*80)+"px; width:"+(a.length*80)+"px'> </div>");
}
</script>

</body>
</html>