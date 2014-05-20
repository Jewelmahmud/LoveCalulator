<html>
	<head>
		<title>This is a simple love clculator</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link href='http://fonts.googleapis.com/css?family=Fascinate+Inline' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Allan' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="main fix">
			<h2 id="id">Calculate your Love Using this App</h2>
			<div class="form_area fix">
				<form action="lovecalc.php" method="POST">
				<input type="text" name="name_one" placeholder="Your Name"><br>
				<input type="text" name="name_two" placeholder="Your Love Name">
				<input type="submit" value="Calculate"><br><br>
			</div>
			<div class="result_area">
			<?php 
				
				if(isset(POST['name_one'])&&isset(POST['name_two'])){
					$string_one = $_POST["name_one"]; 
					$string_two = $_POST["name_two"];
					
					if (!empty(POST['name_one'])!empty['name_tow']){
				
						similar_text($string_one, $string_two, $result);
						echo "You Two Love each other in Percentage: <br><br><span>".$result."%</span>";
					}else{
						echo "Please fill up the Name box first";
					}
				
				}
			?>
			</div>
		</div>

	</body>
</html>
