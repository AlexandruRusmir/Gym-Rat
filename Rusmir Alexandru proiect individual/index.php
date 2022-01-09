<?php 
include_once 'create.php'; //Crearea bazei de date si a tabelului in caz ca nu exista

include 'config.php'; //Conexiune la baza de date

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) //Daca cineva s-a logat deja si a inchis tab-ul
	header("Location: store.php");


if (isset($_POST['submit'])) 
{
	$email = $_POST['email'];
	$password = $_POST['password'];
	if($email=='admin@admin' && $password=='admin')
		header("Location: admin_page.php");
	
	
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	
	if ($result->num_rows > 0) 
	{
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: store.php");
	} 
	else 
		echo "<script>alert('E-mailul sau parola greșită!')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p> <center>
				<img src="Images/Picture1.png" alt="Imagine cu logo GymRat"
				width="190" 
				height=auto>
				</center>
			</p>
			
			<br>
			
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Autentificare:</p>
			
			<div class="input-group">
				<input type="email" placeholder="E-mailul" name="email" value="<?php echo $email; ?>" required>
			</div>
			
			<div class="input-group">
				<input type="password" placeholder="Parola" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			
			<div class="input-group">
				<button name="submit" class="btn">Autentificați-vă</button>
			</div>
			
			<p class="login-register-text">Nu aveți un cont? <a href="register.php">Înregistrați-vă aici</a>.</p>
		</form>
	</div>
</body>
</html>