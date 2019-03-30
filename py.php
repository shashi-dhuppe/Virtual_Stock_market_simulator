<?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
/*connection with database*/
$selected = mysql_select_db("stock market",$con);

ini_set('max_execution_time',1000);

$myfile = fopen("input.txt", "wr") or die("Unable to open file!");
$txt = $_POST['news']; 
fwrite($myfile, $txt);
fclose($myfile);
$file = 'news.txt';
$current = file_get_contents($file);
$txt1=$_POST['news'];
$replace = $current. "\r\n". $txt1;
file_put_contents($file,str_replace($current, $replace, file_get_contents($file)));

exec('python C:\xampp\htdocs\domaintrain_copy.py ');
$command=escapeshellcmd('Python C:\xampp\htdocs\BeProject\domaintrain_copy.py');
shell_exec($command);

exec('python C:\xampp\htdocs\defi.py ');
$command1=escapeshellcmd('Python C:\xampp\htdocs\BeProject\defi.py');
shell_exec($command1);
header("location:add_news.php");

?>    
	