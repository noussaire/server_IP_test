<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
<form class="border shadow p-3 rounded" style="width: 450px;
" method="POST">
<h1 class="text-center p-3">SING UP</h1>
  <div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom">
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-1">
    <label for="password" class="form-label">SELECT USER TYPE:</label>
  </div>
  <select class="form-select mb-3" 
          aria-label="Default select example" 
          name="role">
  <option selected value="USER">USER</option>
  <option value="ADMINE">ADMINE</option>
  </select>
  
  <button type="submit" class="btn btn-primary" name="jo">Submit</button>
</form>
</div>
<?php

if (isset($_POST['jo'])) {
    
    $db = new PDO('mysql:host=localhost;dbname=testser;charset=utf8', 'root', '');
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
        }
  
  if (isset($_POST['nom'])) {
    $nom=$_POST['nom'];
  }
  if (isset($_POST['prenom'])) {
    $prenom=$_POST['prenom'];
  }
  if (isset($_POST['username'])) {
    $username=$_POST['username'];
  }
  if (isset($_POST['password'])) {
    $password=$_POST['password'];
  }
  if (isset($_POST['role'])) {
    $role=$_POST['role'];
  }

    $sql= "INSERT INTO client VALUES(NULL,'$nom','$prenom','$role','$username','$password')";
    $db->exec($sql);
 
  header("location:LOGING.php");
}
    ?>
    
</body>
</html>