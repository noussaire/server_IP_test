<?php 
session_start()

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
	<title></title>
</head>
<body>
<?php
  $db = new PDO('mysql:host=localhost;dbname=testser;charset=utf8', 'root', '');
  if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
      }

	if (isset($_GET['ide'])) {
	$id=$_GET['ide'];
	$sel="SELECT * FROM serveur WHERE id = $id";
	$result= $db->query($sel);

}

	
?>
<!-- <nav class="navbar navbar-dark bg-mynav">
      <div class="container-fluid">
        <div class="me-auto p-2 bd-highlight"><h2>List des employes</div>
        <div >
         
        </div>
      </div>
</nav> -->
<nav class="navbar navbar-expand-lg navbar-red bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SERVTST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pingG.php">CHEAKE</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled">BB</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
<div class="container">
      <div class="d-flex bd-highlight mb-3">
      <div class="me-auto p-2 bd-highlight"><h2>LES INFORMATION</div>
      <div class="p-2 bd-highlight" >
     
    <form action="http://localhost/test/IFOSERV.php">
        <button type="submit" class="btn btn-secondary";>RETOUR</button>
    </form>
      
  
      </div>
</div>



<br>
<br>
<div >


<?php
	while($tabEmploye=$result->fetch()){
?>
<form method="POST" class="w3-container">
<h3>URL<h3><input class="w3-input" name="1"type="text" value="<?=$tabEmploye['URL']?>">
<h3>IP<h3><input class="w3-input" name="2" type="text" value="<?=$tabEmploye['IP']?>">
<h3>DESC<h3><input class="w3-input" name="3" type="text" value="<?=$tabEmploye['DESC']?>">

<div class="input-group mb-3" >
<br><input name="retour" type="submit" value="MODIFIER" class="btn btn-outline-primary" id="BT">
</div>
    </form>


<?php
}?>

    <?php
if (isset($_POST['retour'])) {
	$UL=$_POST['1'];
	$P=$_POST['2'];
    $DE=$_POST['3'];
     
$sql = "UPDATE serveur  SET IP='$P' WHERE id = $id";

if ($db->query($sql) === TRUE) {
  echo "Record updated successfully";

}
}


?>


</body>
</html>