<?php 
session_start()

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="./styl.css">

</head>
<body>
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Hello World.</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
		Curabitur et est sed felis aliquet sollicitudin</p>
		</div>
	</div>
	
	
		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account? <a href="newlogin.php">Creat Your Account</a> it takes less than a minute</p>
        <form  method="POST">
		 <div class="inputs">
			<input type="text" placeholder="user name" name="usernamme">
			<br>
			<input type="password" placeholder="password" name="passwword">
		 </div>
			
			<br><br>
			
		   <div class="remember-me--forget-password">
				
	<label>
		<input type="checkbox" name="item" checked/>
		<span class="text-checkbox">Remember me</span>
	</label>
		   </div>
			
			<br>
			<input name="LOG" type="submit" value="LOGING" class="btn btn-outline-primary" >
        </form>
	    </div>
  
	
</div>

<?php
if (isset($_POST['LOG'])) {
    if (isset($_POST['usernamme'])) {
        $USER=$_POST['usernamme'];
      }
      if (isset($_POST['passwword'])) {
        $PAS=$_POST['passwword'];
      }
    
   

  $db = new PDO('mysql:host=localhost;dbname=testser;charset=utf8', 'root', '');
  if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
      }
	$sel="SELECT * FROM client";
	$result= $db->query($sel);
    while($tabclient=$result->fetch()){
        $_SESSION['username']=$tabclient['username'];
        $_SESSION['password']=$tabclient['password'];
        $_SESSION['role']=$tabclient['role'];


      if ( $_SESSION['username']===$USER && $_SESSION['password']===$PAS) {
        if ($_SESSION['role']==='ADMINE') {
            header("location:ajouteserv.php");
        }
        else {
        header("location:IFOSERV.php");
      }
      }
    }
}
?>

</body>
</html>
