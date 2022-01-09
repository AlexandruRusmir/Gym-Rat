<?php 
include 'config.php';

session_start();

if (!isset($_SESSION['username'])) //Nu este conectat niciun utilizator
    header("Location: index.php");

if (isset($_POST['submit'])) 
{
	$username = $_SESSION['username'];
	$adress = $_SESSION['adress'];
	$phone = $_SESSION['phone_number'];
	$sql = "INSERT INTO orders (username, adress, phone)
					VALUES ('$username', '$adress', '$phone')";
					
			$result = mysqli_query($conn, $sql);
			
			if ($result) 
			{
				echo "<script>alert('Comanda a fost plasata!');window.location.href = 'store.php';</script>";
				$username = "";
				$email = "";
			} 
			else 
				echo "<script>alert('A aparut o eroare!');window.location.href = 'store.php';</script>";
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Confirmare comanda</title>
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
			
			<p class="login-text" style="font-size: 1.8rem; font-weight: 800;">Acestea sunt datele dumneavoastră?</p>
			<?php echo "<br><br><h2>Nume destinatar: <b>" . $_SESSION['username'] . "<br>"; ?>
			<?php echo "Adresa: <b>" . $_SESSION['adress'] . "<br>"; ?>
			<?php echo "Contact: <b>" . $_SESSION['phone_number'] . "<br></h2><br>"; ?>
			<div class="input-group">
				<button name="submit" class="btn">Trimiteți comanda!</button>
			</div>
			
			<p class="login-register-text"><center><a href="index.php">Anulați comanda.</a></center></p>
		</form>
	</div>
</body>
</html>