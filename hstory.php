<!DOCTYPE html>
<html lang="en">
<head>
  <title>Change Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> 
<body>
	<div class="col-md-3">
	</div>
	<div class="col-md-9">
	<form action="newco.php" method="post" class="form-horizontal">
		<head><h2>New Company</h2></head>
		<div>
			<input type="text" name="cname" placeholder="Enter name of company" required>
		</div><br>
		<div>
			<input type="text" name="ctick" placeholder="Enter company ticker" required>
		</div>
		<!--input type="submit" name="submit2" value="generate table"class="btn-save" onClick="myFunction()"
		<script>
			function myFunction() {
				alert("Table generated");
			}
		</script>-->
		<div data-toggle="tooltip" title=" The price at which a security first trades upon the opening of an exchange on a given trading day" data-placement="left">
			<h3>Open Value</h3>
		</div>
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip(); 
			});
		</script>
		<div>
			<input type="integer" name="omin" required  placeholder="Enter minimum open value"> &nbsp &nbsp
			<input type="integer" name="omax" required placeholder="Enter maximum open value">
		</div>
		<head>
		<div data-toggle="tooltip" title="Today's high is the highest price at which a stock traded during the course of the day" data-placement="left">
			<h3>High value</h3>
		</div>
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip(); 
			});
		</script>
		<div>
			<input type="integer" name="hmin" required  placeholder="Enter minimum high value"> &nbsp &nbsp
			<input type="integer" name="hmax" required placeholder="Enter maximum high value">
		</div>
		<div data-toggle="tooltip" title="Today's low is the lowest price at which a stock traded during the course of the day" data-placement="left"><h3>Low Value</h3></div>
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip(); 
			});
		</script>
		<div>
			<input type="integer" name="lmin" required  placeholder="Enter minimum low value"> &nbsp &nbsp
			<input type="integer" name="lmax" required placeholder="Enter maximum low value">
		</div>
		<div data-toggle="tooltip" title="The last price at which a stock trades during a regular trading session." data-placement="left">
			<h3>Close Value</h3>
		</div>
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip(); 
			});
		</script>
		<div>
			<input type="integer" name="cmin" required  placeholder="Enter minimum close value"> &nbsp &nbsp
			<input type="integer" name="cmax" required placeholder="Enter maximum close value">
		</div>
		<div data-toggle="tooltip" title="It is a stock's closing price on any given day of trading that occurred at any time prior to the next day's open." data-placement="left">
			<h3>Adjclose Value</h3>
		</div>
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip(); 
			});
		</script>
		<div>
			<input type="integer" name="amin" placeholder="Enter minimum adjclose value" required> &nbsp &nbsp
			<input type="integer" name="amax" placeholder="Enter maximum adjclose value" required>
		</div>
		<div data-toggle="tooltip" title="the number of shares or contracts traded in a security or an entire market during a given period of time." data-placement="left">
			<h3>Volume</h3>
		</div>
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip(); 
			});
		</script>
		<div>
			<input type="integer" name="vmin" placeholder="Enter minimum volume" required> &nbsp &nbsp
			<input type="integer" name="vmax" placeholder="Enter maximum volume" required>
		</div>
		<div data-toggle="tooltip" title="Number of days data has to be generated for" data-placement="left">
			<h3>Number of days</h3>
		</div>
		<script>
			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip(); 
			});
		</script>
		<div>
			<input type="integer" name="num" placeholder="Enter number of days" required>
		</div><br><br>
		<input type="submit" name="submit" value="Add stock" class="btn btn-primary" onClick="myFunction(this)">
	</form>
	</div>
</body>	
</html>
		
	
		
		