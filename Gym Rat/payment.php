<?php 
session_start();

if (!isset($_SESSION['username'])) //Nu este conectat niciun utilizator
    header("Location: index.php");

if (isset($_POST['submit'])) 
{
	$_SESSION['adress'] = $_POST['adresa'];
	$_SESSION['phone_number'] = $_POST['telefon'];
	header("Location: payment_confirmation.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Trimitere Comanda</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p> <center>
				<img src="Images/Picture2.png" alt="Imagine cu logo GymRat"
				width="190" 
				height=auto>
				</center>
			</p>
			
			<br>
			
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Trimitere comandă</p>
			<?php echo "<h2>Nume destinatar: <b>" . $_SESSION['username'] . "</b></h2><h4><br><br>Introduceți adresa și numărul de telefon:</h4><br>"; ?>
			<div class="input-group">
				<input type="text" placeholder="Adresa" name="adresa" required>
			</div>
			
			<div class="input-group">
				<input type="tel" placeholder="Numar de telefon de forma: 07xx xxx xxx" name = "telefon" required pattern="[0-9]{4} [0-9]{3} [0-9]{3}" maxlength="12">
			</div>
			
			<div class="input-group">
				<button name="submit" class="btn">Confirmați comanda!</button>
			</div>
			
			<p class="login-register-text"><center><a href="index.php">Anulați comanda.</a></center></p>
		</form>
	</div>
</body>
</html>