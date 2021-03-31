<html>
	<head><title> INFO  </title> </head>
	<body>
		<?php 
		  $name = $_POST["NAMEBOX"];
		  $class = $_POST["CLASSBOX"];
		  $uni = $_POST["UNIBOX"];
		  
		  print ("<br> Hello, $name");
		  print ("<br> You are studying at $class, $uni");
		  print ("<br> Your hobbies are: ");
		  if(isset($_POST["gaming"]) && $_POST["gaming"] == "gaming")
		  {
		      print("<br>     Gaming");
		  }
		  if(isset($_POST["running"]) && $_POST["running"] == "running")
		  {
		      print("<br>     Running");
		  }
		  if(isset($_POST["singing"]) && $_POST["singing"] == "singing")
		  {
		      print("<br>     Singing");
		  }
		?>
	</body>
</html>