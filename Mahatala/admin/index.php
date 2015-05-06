<!DOCTYPE html>


<html>
<head>
	<title>Dash Board</title>
</head>
<body>
	<?php
			$data["Admin"]="me";
			if($data["Admin"]=="me"){
				header("location:adminpage/");
			}
			else{
				header("location:index.php");
			}

	?>
</body>
</html>