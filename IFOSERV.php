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
	$del="DELETE FROM serveur WHERE id = $id";
	$nb=$db->exec($del);
	if ($nb==1) {
		echo "";
	}
}

	$sel="SELECT * FROM serveur ";
	$result= $db->query($sel);

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
      <div class="me-auto p-2 bd-highlight"><h2>LES SERVEURE</div>
      <div class="p-2 bd-highlight" >
     
    <form action="http://localhost/test/ajouteserv.php">
      <?php



	?>
        <button type="submit" class="btn btn-secondary";>+</button>
    </form>
      
  
      </div>
</div>



<br>
<br>
<div >

<table class="table" >
<thead class="table-light">
<tr>
    <th>ID</th>
    <th>URL</th>
    <th>IP</th>
    <th>DESCRIPTION</th>
    <td>Action</td>
</tr>
</thead>
	<?php
	while($tabEmploye=$result->fetch()){
    
?>
<tbody>
<tr>
<td><?=$tabEmploye['id']?></td>
<td><?=$tabEmploye['URL']?></td>
<td><?=$tabEmploye['IP']?></td>
<td><?=$tabEmploye['DESC']?></td>
<td> <a href="infoserv.php?ide=<?=$tabEmploye['id']?>" class="btn btn-info">aficher</a>&nbsp;&nbsp;
     <a href="IFOSERV.php?ide=<?=$tabEmploye['id']?>" class="btn btn-danger">supprime</a>&nbsp;&nbsp;
</td>
</tr>
</tbody>



<?php
}

	?>


</table>
</div>
<div class="input-group mb-3" >
<form method="POST">
<br><input name="CHECK" type="submit" value="CHEack" class="btn btn-outline-primary" id="BT">
</form>
</div>
<?php
    if (isset($_POST['CHECK'])) {
        header("location:pingG.php");


    }

	?>
</body>
</html>