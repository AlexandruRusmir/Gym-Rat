<?php 

include 'config.php'; //Conexiune la baza de date

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) //Daca cineva s-a logat deja si a inchis tab-ul
    header("Location: index.php");


if (isset($_POST['submit'])) 
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if ($password == $cpassword) 
	{
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) 
		{
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
					
			$result = mysqli_query($conn, $sql);
			
			if ($result) 
			{
				echo "<script>alert('Contul de utilizator a fost creat!')</script>";
				/*$subject = "Contul dumneavostra";
				$message = "<b>This is HTML message.</b>";
				$message .= "<h1>This is headline.</h1>";
				$retval = mail ($email,$subject,$message);
         
				if( $retval == true ) 
					echo "<script>alert('Ați primit pe e-mail detaliile contului!')</script>";
				else 
					echo "<script>alert('Nu s-au putut trimite prin e-mail detaliile contului!')</script>";
				*/
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} 
			else 
				echo "<script>alert('A apărut o eroare!')</script>";
		}
		else 
			echo "<script>alert('Acest email este legat de un alt cont de utilizator!')</script>";
		
		
	} 
	else 
		echo "<script>alert('Asigurați-vă că introduceți parola pe care o doriți în ambele căsuțe')</script>";
		
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Register</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Înregistrare</p>
			
			<div class="input-group">
				<input type="text" placeholder="Numele de utilizator" name="username" value="<?php echo $username; ?>" required>
			</div>
			
			<div class="input-group">
				<input type="email" placeholder="E-mailul" name="email" value="<?php echo $email; ?>" required>
			</div>
			
			<div class="input-group">
				<input type="password" placeholder="Parola" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
			
            <div class="input-group">
				<input type="password" placeholder="Confirmați parola" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			
			<div class="input-group">
				<button name="submit" class="btn">Înregistrați-vă</button>
			</div>
			
			<p class="login-register-text">Aveți deja un cont? <a href="index.php">Autentificați-vă aici</a>.</p>
		</form>
	</div>
</body>
</html>