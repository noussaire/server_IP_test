
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewreport" content="width=device-width, initial-scale=1.0">
	<title>
    testeur de serveur
	</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="cover.css" />
</head>
<body>

<?php

if (isset($_POST['NOP'])) {
    echo 'WELCOM';
    
}
else {
    echo "notFound.php";
}



?>







<form method="POST">
<a class="btn btn-md text-center" name="NOP">GET STARTED</a>
</form>
				
			</div>
		</div>
	</div>
</body>
</html>