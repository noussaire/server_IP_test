<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

<form method="POST" >
<table >
<tr><td><label>URL</label></td><td><input type="text" name="url" ></td></tr>
<tr><td><label>IP ADRESSE</label></td><td><input type="text" name="ip" ></td></tr>
<tr><td colspan="2"><br><input name="ok" type="submit" value="Valider le serveure" ></td></tr>
</form>
</table>
<?php

if (isset($_POST['ok'])) {
   
        $db = new PDO('mysql:host=localhost;dbname=testt;charset=utf8', 'root', '');
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
            }
  if (isset($_POST['url'])) {
    $URL=$_POST['url'];
  }
  if (isset($_POST['ip'])) {
    $IP=$_POST['ip'];
  }
   
    $sql= "INSERT INTO serveur VALUES('$URL','$IP')";
    $db->exec($sql);
    
}
    ?>


</body>
</html>