<form action="tablegen.php" method="post">
		<head><h2>New Company</h2></head>
		
		<div>
			<input type="text" name="cname" required=""  placeholder="Enter name of company">
		</div>
		
		
		<div>
			<input type="text" name="ctick" required=""  placeholder="company ticker">
		</div>
		
	<input type="submit" name="submit2" value="generate table"class="btn-save" onClick="myFunction()">
	
	<script>
	function myFunction() {
		alert("Table generated");
	}
	</script>
</form>