<html>
<head>
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<?php
  $db = new PDO('mysql:host=localhost;dbname=testser;charset=utf8', 'root', '');
  if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
      }

$sel="SELECT * FROM serveur ";
  $result= $db->query($sel);
  ?>
<nav class="navbar navbar-expand-lg navbar-red bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SERVTST</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="IFOSERV.php">Home</a>
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

  <div>
    <br>
    <table class="table table-dark">
        <tr>
            <td scope="col">IP</td>
            <td scope="col">STATUE</td>
            <td scope="col">DATE</td>

        </tr>
        <?php
	       while($tabEmploye=$result->fetch()){
            $ip = $tabEmploye['IP'];
            $ping = exec("ping -n 1 $ip",$output,$status);
        ?>
        <tr>
        <td scope="row"><?=$tabEmploye['IP']?></td>
          
          <td><?php   if ($status==0) {
                echo '<p style=color:green>ONLINE</p>';
            }
            else{
                echo '<p style=color:red>OFFLINE</p>';
            } ?></td>
             <td><?php echo Date("j/m/Y") ?> <?php echo Date("H:i:s")?></td>
        </tr>
        <?php
           }
        ?>
    <table>
  </div>
  <?php
          header("Refresh:60"); 
        ?>
</body>


</html>