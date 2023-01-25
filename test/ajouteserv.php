<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h2>nouveau serveur</h2><br>
<form method="POST" class="form-inline">
<table class="table">
<tr><td><label for="staticEmail2" class="sr-only">URL</label></td><td><input type="text" name="url" class="form-control" placeholder="URL" ></td></tr>
<tr><td><label for="staticEmail2" class="sr-only">IP ADRESSE</label></td><td><input type="text" name="ip" class="form-control" placeholder="IP"></td></tr>
<tr><td><label for="staticEmail2" class="sr-only">DESCRIPTION</label></td><td><input type="text" name="des" class="form-control" placeholder="DESCRIPTION"></td></tr>
</form>
</table>
<input name="ok" type="submit" value="Valider le serveure"  class="btn btn-primary mb-2" id="BT2">
<?php

if (isset($_POST['ok'])) {
    
    $db = new PDO('mysql:host=localhost;dbname=testser;charset=utf8', 'root', '');
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
        }
  
  if (isset($_POST['url'])) {
    $URL=$_POST['url'];
  }
  if (isset($_POST['ip'])) {
    $IP=$_POST['ip'];
  }
  if (isset($_POST['des'])) {
    $DISC=$_POST['des'];
  }

    $sql= "INSERT INTO serveur VALUES(NULL,'$URL','$IP','$DISC')";
    $db->exec($sql);
 
  header("location:IFOSERV.php");
}
    ?>


</body>
</html>