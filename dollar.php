<?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database
$selected = mysql_select_db("stock market",$con);
//selecting increase or decrease in rate
//$sql="SELECT price from dollar";
//$result=mysql_query($sql);
$p=$_POST['u'];
$result= mysql_query("SELECT price from dollar");
while ($row = mysql_fetch_assoc($result))
	{
		$result_old_ip=$row['price'];
	}
if(isset ($_POST['increase_btn']))
	{
		$pol=1;
		
		// change in the company stocks start
		
		//1
		$result=mysql_query("SELECT price FROM company WHERE tickr='APPL'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
		//$dummy=100;
		
		mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='APPL'");
		mysql_query("UPDATE company SET polarity='$pol', WHERE tickr='APPL'");
		
		//2
		
		$result=mysql_query("SELECT price FROM company WHERE tickr='TSLA'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
		mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='TSLA'");
		//	if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='TSLA'");
			//}
			//else {
				//mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='TSLA'");
			//}
		
		//3
		
		$result=mysql_query("SELECT price FROM company WHERE tickr='WHR'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='WHR'");
			//if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='WHR'");
			//}
			//else {
				//mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='WHR'");
			}
		
		//4
		$result=mysql_query("SELECT price FROM company WHERE tickr='FIT'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
		
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='FIT'");
			//if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FIT'");
			//}
			//else {
	//			mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FIT'");
		//	}
		
		//5
		$result=mysql_query("SELECT price FROM company WHERE tickr='ZOES'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ZOES'");
	//		if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ZOES'");
		//	}
		//	else {
			//	mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ZOES'");
			//}
			
		//6
		$result=mysql_query("SELECT price FROM company WHERE tickr='BLUESTARCO'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='BLUESTARCO'");
	//		if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BLUESTARCO'");
	//		}
		//	else {
			//	mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BLUESTARCO'");
		//	}
		
		//7
		
		$result=mysql_query("SELECT price FROM company WHERE tickr='HOG'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='HOG'");
	//		if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='HOG'");
	/*		}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='HOG'");
			}*/
			
		//8
		
		$result=mysql_query("SELECT price FROM company WHERE tickr='DUK'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='DUK'");
		//	if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='DUK'");
		/*	}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='DUK'");
			}*/
			
		//9
		
		$result=mysql_query("SELECT price FROM company WHERE tickr='LBRT'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='LBRT'");
	//		if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='LBRT'");
	/*		}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='LBRT'");
			}*/
			
		//10
		
		$result=mysql_query("SELECT price FROM company WHERE tickr='ONGC'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ONGC'");
		//	if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ONGC'");
	/*		}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ONGC'");
			}*/
			
		//11
		
		$result=mysql_query("SELECT price FROM company WHERE tickr='AES'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='AES'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AES'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AES'");
			}
			
			//12
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='NTPC'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='NTPC'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NTPC'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NTPC'");
			}
			
			//13
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='RPOWER'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
		
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='RPOWER'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='RPOWER'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='RPOWER'");
			}
			
			//14
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='NEE'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='NEE'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NEE'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NEE'");
			}
			
			//15
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='NFLX'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='NFLX'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NFLX'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NFLX'");
			}
			
			//16
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='FDX'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
		
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='FDX'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FDX'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FDX'");
			}
			
			//17
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='AMZN'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='AMZN'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AMZN'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AMZN'");
			}
			
			//18
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ASIANPAINT'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ASIANPAINT'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ASIANPAINT'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ASIANPAINT'");
			}
			
			//19
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ICICIBANK'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ICICIBANK'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ICICIBANK'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ICICIBANK'");
			}
			
			//20
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='VAKRANGEE'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='VAKRANGEE'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='VAKRANGEE'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='VAKRANGEE'");
			}
			
			//21
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='SBIN'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='SBIN'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SBIN'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SBIN'");
			}
			
			//22
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='JNJ'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='JNJ'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='JNJ'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='JNJ'");
			}
			
			//23
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='PFE'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
		
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='PFE'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='PFE'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='PFE'");
			}
			
			//24
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ALGN'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ALGN'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ALGN'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ALGN'");
			}
			
			//25
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ABBV'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ABBV'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ABBV'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ABBV'");
			}
			
			//26
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='CELG'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='CELG'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CELG'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CELG'");
			}
			
			//27
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='APOLLOHOSP'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='APOLLOHOSP'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='APOLLOHOSP'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='APOLLOHOSP'");
			}
			
			//28
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='FORTIS'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='FORTIS'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FORTIS'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FORTIS'");
			}
			
			//29
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='VOLTAS'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='VOLTAS'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='VOLTAS'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='VOLTAS'");
			}
			
			//30
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='CROMPTON'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='CROMPTON'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CROMPTON'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CROMPTON'");
			}
			
			//31
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='CUMMINSIND'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='CUMMINSIND'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CUMMINSIND'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CUMMINSIND'");
			}
			
			//32
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='SNA'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='SNA'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SNA'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SNA'");
			}
			
			//33
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='UTX'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='UTX'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='UTX'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='UTX'");
			}
			
			//34
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ROK'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ROK'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ROK'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ROK'");
			}
			
			//35
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='BA'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
		
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='BA'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BA'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BA'");
			}
			
			//36
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='BAC'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='BAC'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BAC'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BAC'");
			}
			
			//37
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='SYF'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='SYF'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SYF'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SYF'");
			}
			
			//38
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='AIG'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='AIG'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AIG'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AIG'");
			}
			
			//39
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='MS'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='MS'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='MS'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='MS'");
			}
			
			//40
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='JPM'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='JPM'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='JPM'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='JPM'");
			}
			
			//41
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='GDDY'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='GDDY'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GDDY'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GDDY'");
			}
			
			//42
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ORCL'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ORCL'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ORCL'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ORCL'");
			}
			
			//43
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ADSK'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ADSK'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ADSK'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ADSK'");
			}
			
			//44
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='NVDA'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='NVDA'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NVDA'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NVDA'");
			}
			
			//45
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='FB'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='FB'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FB'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FB'");
			}

			//46
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='MSFT'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);
		
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='MSFT'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='MSFT'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='MSFT'");
			}
			
			//47
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='INTC'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='INTC'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='INTC'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='INTC'");
			}
			
			//48
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='GOOGL'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip+($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='GOOGL'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GOOGL'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GOOGL'");
			}
	}
elseif (isset ($_POST['decrease_btn']))
	{
		
		
		$pol=0;
		//$result_old_ip=$result_old_ip-($p/100*$result_old_ip);
		
		//1
		
		$result=mysql_query("SELECT price FROM company WHERE tickr='APPL'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
		
		mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='APPL'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='APPL'");
			}
		else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='APPL'");
		}
		
		//2
		
		$result=mysql_query("SELECT price FROM company WHERE tickr='TSLA'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

		mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='TSLA'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='TSLA'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='TSLA'");
			}
			
			//3
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='WHR'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='WHR'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='WHR'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='WHR'");
			}
			
			//4
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='FIT'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='FIT'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FIT'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FIT'");
			}
			
			//5
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ZOES'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ZOES'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ZOES'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ZOES'");
			}
			
			//6
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='BLUESTARCO'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='BLUESTARCO'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BLUESTARCO'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BLUESTARCO'");
			}
			
			//7
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='HOG'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='HOG'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='HOG'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='HOG'");
			}
			
			//8
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='DUK'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='DUK'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='DUK'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='DUK'");
			}
			
			//9
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='LBRT'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='LBRT'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='LBRT'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='LBRT'");
			}
			
			//10
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ONGC'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ONGC'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ONGC'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ONGC'");
			}
			
			//11
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='AES'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='AES'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AES'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AES'");
			}
			
			//12
			$result=mysql_query("SELECT price FROM company WHERE tickr='NTPC'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='NTPC'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NTPC'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NTPC'");
			}
			
			//13
			$result=mysql_query("SELECT price FROM company WHERE tickr='RPOWER'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='RPOWER'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='RPOWER'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='RPOWER'");
			}
			
			//14
			$result=mysql_query("SELECT price FROM company WHERE tickr='NEE'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='NEE'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NEE'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NEE'");
			}
			
			//15
			$result=mysql_query("SELECT price FROM company WHERE tickr='NFLX'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='NFLX'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NFLX'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NFLX'");
			}
			//16
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='FDX'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='FDX'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FDX'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FDX'");
			}
			
			//17
			$result=mysql_query("SELECT price FROM company WHERE tickr='AMZN'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='AMZN'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AMZN'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AMZN'");
			}
			
			//18
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ASIANPAINT'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ASIANPAINT'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ASIANPAINT'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ASIANPAINT'");
			}
			
			//19
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ICICIBANK'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ICICIBANK'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ICICIBANK'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ICICIBANK'");
			}
			//20
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='VAKRANGEE'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='VAKRANGEE'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='VAKRANGEE'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='VAKRANGEE'");
			}
			
			//21
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='SBIN'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='SBIN'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SBIN'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SBIN'");
			}
			
			//22
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='JNJ'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='JNJ'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='JNJ'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='JNJ'");
			}
			
			//23
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='PFE'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
		
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='PFE'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='PFE'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='PFE'");
			}
			
			//24
			$result=mysql_query("SELECT price FROM company WHERE tickr='ALGN'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ALGN'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ALGN'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ALGN'");
			}
			
			//25
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ABBV'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
		
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ABBV'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ABBV'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ABBV'");
			}
			
			//26
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='CELG'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='CELG'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CELG'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CELG'");
			}
			
			//27
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='APOLLOHOSP'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='APOLLOHOSP'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='APOLLOHOSP'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='APOLLOHOSP'");
			}
			
			//28
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='FORTIS'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='FORTIS'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FORTIS'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FORTIS'");
			}
			
			//29
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='VOLTAS'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='VOLTAS'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='VOLTAS'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='VOLTAS'");
			}
			
			//30
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='CROMPTON'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='CROMPTON'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CROMPTON'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CROMPTON'");
			}
			
			//31
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='CUMMINSIND'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='CUMMINSIND'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CUMMINSIND'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='CUMMINSIND'");
			}
			
			//32
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='SNA'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='SNA'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SNA'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SNA'");
			}
			
			//33
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='UTX'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='UTX'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='UTX'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='UTX'");
			}
			
			//34
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ROK'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ROK'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ROK'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ROK'");
			}
			
			//35
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='BA'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='BA'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BA'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BA'");
			}
			
			//36
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='BAC'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='BAC'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BAC'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='BAC'");
			}
			
			//37
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='SYF'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='SYF'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SYF'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='SYF'");
			}
			
			//38
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='AIG'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);
			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='AIG'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AIG'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='AIG'");
			}
			
			//39
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='MS'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='MS'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='MS'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='MS'");
			}
			
			//40
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='JPM'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='JPM'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='JPM'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='JPM'");
			}
			//41
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='GDDY'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='GDDY'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GDDY'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GDDY'");
			}
			
			//42
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ORCL'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ORCL'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ORCL'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ORCL'");
			}
			
			//43
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='ADSK'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='ADSK'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ADSK'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='ADSK'");
			}
			
			//44
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='NVDA'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='NVDA'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NVDA'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='NVDA'");
			}
			
			//45
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='FB'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='FB'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FB'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='FB'");
			}
			
			//46
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='MSFT'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='MSFT'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='MSFT'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='MSFT'");
			}
			
			//47
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='INTC'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='INTC'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='INTC'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='INTC'");
			}
			
			//48
			
			$result=mysql_query("SELECT price FROM company WHERE tickr='GOOGL'");
		while ($row = mysql_fetch_assoc($result))
	{
		$result_new_ip=$row['price'];
	}
		$result_new_ip=$result_new_ip-($p/100*$result_new_ip);

			mysql_query("UPDATE company SET price='$result_new_ip' WHERE tickr='GOOGL'");
			if ($pol==1) {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GOOGL'");
			}
			else {
				mysql_query("UPDATE company SET polarity='$pol' WHERE tickr='GOOGL'");
			}
	}
$res=mysql_query("UPDATE dollar SET price=$result_new_ip");
mysql_query($res);
header("location:admin_home.php");
?>