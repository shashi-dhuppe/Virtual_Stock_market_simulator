<?php
$con= mysql_connect('localhost','root','');
if(!$con){
die('could not connect'.mysql_error());
}
//connection with database
$selected = mysql_select_db("stock market",$con);
session_start();
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Whirlpool Corporation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 35px;
    right: 15px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	#bord {
    border: 1px solid;
    padding: 10px;
    }
	#bord:hover {
	box-shadow: 5px 10px 18px #888888;
}
.green {
	color:green;
}

.red {
	color:red;

  </style>
   <script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: ""
		},
		toolTip:{   
			content: "{name}: {y}"      
		},
		axisX:{
			gridColor: "Silver",
			includeZero: true
		},
		axisY: {
			includeZero: false
		},
		data: [
		{        
			type: "line",
			showInLegend: true,
			name: "High",
			dataPoints: [
				{ x: new Date(2017,0,3), y: 1495 },
				{ x: new Date(2017,1,3), y: 1532 },
				{ x: new Date(2017,2,3), y: 1618 },
				{ x: new Date(2017,3,3), y: 1596 },
				{ x: new Date(2017,4,3), y: 1560 },
				{ x: new Date(2017,5,3), y: 1532 },
				{ x: new Date(2017,6,3), y: 1570 },
				{ x: new Date(2017,7,3), y: 1545 },
				{ x: new Date(2017,8,3), y: 1510 },
				{ x: new Date(2017,9,3), y: 1525 }
			]
				
		},
		{        
			type: "line",
			showInLegend: true,
			name: "Low",
			dataPoints: [
				{ x: new Date(2017,0,3), y: 1313 },
				{ x: new Date(2017,1,3), y: 1405 },
				{ x: new Date(2017,2,3), y: 1486 },
				{ x: new Date(2017,3,3), y: 1510 },
				{ x: new Date(2017,4,3), y: 1475 },
				{ x: new Date(2017,5,3), y: 1450 },
				{ x: new Date(2017,6,3), y: 1490 },
				{ x: new Date(2017,7,3), y: 1520 },
				{ x: new Date(2017,8,3), y: 1460 },
				{ x: new Date(2017,9,3), y: 1395},
			]
		}
		]         
	});
	chart.render();
}
  </script>
  <script src="graph.js">
  </script>

</head>

<body>
<div id="mySidenav" class="sidenav">
	<br><br>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <center><img src="user.png" width="100" height="100"></center>
  
  <a href="chart.php">Your account</a>
  <!--a href="#">Services</a-->
  <a href="pref.php">Preference</a>
  <a href="logout.php">Logout</a>
</div>
<div id="main">
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<!--<a href="#"><img src="logo.jpg" width="100" height="60"></a> -->
			<a class="navbar-brand" href="#">Stock Market</a>
		</div>
		<ul class="nav navbar-nav">
			<!--<li>
				<a href="#demo1" data-toggle="collapse" onclick="myFunction(this)">
					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>
				</a>
			</li>-->
			<li class="active"><a href="index2.php">Home</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Finance
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="jpm.php">JP Morgan</a></li>
					<li><a href="ms.php">Morgan Stanley</a></li>
					<li><a href="aig.php">American International Group Inc.</a></li>
					<li><a href="syf.php">Synchrony Financial</a></li>
					<li><a href="bac.php">Bank Of America Corp.</a></li>
					<li><a href="key.php">KeyCorp</a></li>
					<li><a href="gs.php">Goldman Sachs Group Inc.</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Consumer Goods
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="apple.php">Apple Inc.</a></li>
					<li><a href="tsla.php">Tesla</a></li>
					<li><a href="whr.php">Whirlpool Corporation</a></li>
					<li><a href="fit.php">Fitbit Inc.</a></li>
					<li><a href="zoes.php">Zoe's Kitchen Inc.</a></li>
					<li><a href="bluestar.php">Blue Star Ltd.</a></li>
					<li><a href="hog.php">Harley-Davidson Inc.</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Healthcare
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="jnj.php">Johnson & Johnson</a></li>
					<li><a href="#">Pfizer Inc.</a></li>
					<li><a href="#">Align Technology, Inc.</a></li>
					<li><a href="#">AbbVie Inc</a></li>
					<li><a href="#">Celgene Corporation</a></li>
					<li><a href="#">Apollo Hospitals Enterprise Limited</a></li>
					<li><a href="#">Fortis Healthcare Limited</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Industrial Goods
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">The Boeing Company</a></li>
					<li><a href="#">Rockwell Automation</a></li>
					<li><a href="#">United Technologies Corporation</a></li>
					<li><a href="#">Snap-on Incorporated</a></li>
					<li><a href="#">Cummins India Ltd</a></li>
					<li><a href="#">Crompton Greaves Consumer Electricals Ltd</a></li>
					<li><a href="#">Voltas Limited</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="Netflix Inc.php">Netflix, Inc.</a></li>
					<li><a href="#">FedEx</a></li>
					<li><a href="#">Amazon.com, Inc</a></li>
					<li><a href="#">Asian Paints Ltd</a></li>
					<li><a href="#">ICICI BANK LTD</a></li>
					<li><a href="#">Vakrangee Ltd.</a></li>
					<li><a href="#">State Bank Of India</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Technology
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Alphabet Inc</a></li>
					<li><a href="#">Intel Corporation</a></li>
					<li><a href="#">Microsoft Corporation</a></li>
					<li><a href="#">Facebook, Inc. Common Stock</a></li>
					<li><a href="#">NVIDIA Corporation</a></li>
					<li><a href="#">Autodesk, Inc.</a></li>
					<li><a href="#">Oracle Corporation</a></li>
					<li><a href="#">Godadday Inc</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Utilities
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Duke Energy Corp.</a></li>
					<li><a href="#">Liberty Oilfield Services Inc</a></li>
					<li><a href="#">Oil & Natural Gas Corporation</a></li>
					<li><a href="#">AES Corp</a></li>
					<li><a href="#">NTPC Limited</a></li>
					<li><a href="#">Reliance Power Ltd</a></li>
					<li><a href="#">NextEra Energy Inc.</a></li>
				</ul>
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<!--	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="caret"></span> Hello,!</a>
		<ul class="dropdown-menu">
          <li><a href="#">PORTFOLIO </a></li>
		  <li><a href="#">ACCOUNT </a></li>
		  <li><a href="#">SETTINGS </a></li>
		  <li><a href="index.html">LOGOUT</a></li>
		</ul>	
	  </li>-->
			<li><span style="font-size:30px;cursor:pointer" onclick="openNav()"> 
			<?php
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		echo '<span style="color:grey;"> ' . $_SESSION['username'] . '!';
	} else {
		echo "Please log in first to see this page.";
		header("location:index.html");
	}
	?>
			<span class="glyphicon glyphicon-user" style="color:white"></span>
	</span>
		</li>
		</ul>
	</div>
	</nav>
	<br><br><br>
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		<h1>Whirlpool Corporation</h1>
		<h3>Consumer Goods Company</h3>
		<p align="justify">The Whirlpool Corporation is an American multinational manufacturer and marketer of home appliances, headquartered in Benton Charter Township, Michigan, 
		United States, near Benton Harbor, Michigan. The Fortune 500 company has annual revenue of approximately $21 billion, 100,000 employees, and more than 70 manufacturing and 
		technology research centers around the world. The company markets Whirlpool, Maytag, KitchenAid, Jenn-Air, Amana, Gladiator GarageWorks, Inglis, Estate, Brastemp, Bauknecht,
		Indesit, and Consul. Whirlpool Corporation is the world's largest home appliance maker. Their website also mentions Hotpoint, Diqua, Affresh, Acros, and Yummly brands.</p>
		<div class="box" id="bord">
				<h2>Whirlpool Corporation</h2>
				
				<?php
					$result_c3=mysql_query("SELECT price 
									FROM company 
									WHERE tickr='whr'");
						while ($row_c3 = mysql_fetch_assoc($result_c3))
						$price= $row_c3['price'];
					?>WHR=<?php echo $price?>
			
				<?php 
				$result_c3=mysql_query("SELECT polarity 
									FROM company 
									WHERE tickr='whr'");
						while ($row_c3 = mysql_fetch_assoc($result_c3))
						$pol= $row_c3['polarity'];
				 if ($pol==0) {	 ?>
				 <span class="glyphicon glyphicon-triangle-bottom red"></span> &nbsp &nbsp &nbsp &nbsp
				 <?php }  ?>
				 <?php 
				 if ($pol==1) { ?> 
				 <span class="glyphicon glyphicon-triangle-top green"></span>&nbsp &nbsp &nbsp &nbsp
                 <?php }  ?>
				
				<br><br><br>
				<div id="chartContainer" style="height: 300px; width: 100%;">
				</div><br>
				<?php
					$result_c3=mysql_query("SELECT AVG(high) 
									FROM whr"); 
						while ($row_c3 = mysql_fetch_assoc($result_c3))
							$high=$row_c3['AVG(high)'];
				?>
				<h4>High Value: <?php echo $high;?></h4>
				<?php
					$result_c3=mysql_query("SELECT AVG(low) 
									FROM whr"); 
						while ($row_c3 = mysql_fetch_assoc($result_c3))
							$low=$row_c3['AVG(low)'];
				?>
				<h4>Low Value: <?php echo $low;?></h4>
				<?php
					$result_c3=mysql_query("SELECT AVG(open) 
									FROM whr"); 
						while ($row_c3 = mysql_fetch_assoc($result_c3))
							$open=$row_c3['AVG(open)'];
				?>
				<h4>Open Value: <?php echo $open;?></h4>
				<?php
					$result_c3=mysql_query("SELECT AVG(close) 
									FROM whr"); 
						while ($row_c3 = mysql_fetch_assoc($result_c3))
							$close=$row_c3['AVG(close)'];
				?>
				<h4>Close Value: <?php echo $close;?></h4>
				<?php
					$result_c3=mysql_query("SELECT AVG(adjclose) 
									FROM whr"); 
						while ($row_c3 = mysql_fetch_assoc($result_c3))
							$adjclose=$row_c3['AVG(adjclose)'];
				?>
				<h4>Adjoint Close Value: <?php echo $adjclose;?></h4>
				<?php
					$result_c3=mysql_query("SELECT AVG(volume) 
									FROM whr"); 
						while ($row_c3 = mysql_fetch_assoc($result_c3))
							$vol=$row_c3['AVG(volume)'];
				?>
				<h4>Volume: <?php echo $vol;?></h4>
		</div>
	</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
</body>
</html>