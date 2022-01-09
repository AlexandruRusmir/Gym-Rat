<script type="text/javascript">
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}</script>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_system_rusmir";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, email, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
	echo  "<b>Lista utilizatorilor: </b>" . "<br>";
	while($row = $result->fetch_assoc()) 
		echo "- username: <b>" . $row["username"]. "</b>, email: <b>" . $row["email"]. "</b><br>";
}
else
	echo "Nu exista utilizatori!";
$conn->close();


include 'config.php'; //Conexiune la baza de date

error_reporting(0);

session_start();
if (isset($_POST['submit'])) 
{
	$email = $_POST['email'];
	$sql = "DELETE FROM users WHERE email='$email'";
	
	if ($conn->query($sql) === TRUE) 
		echo "<br>Utilizatorul cu e-mailul $email a fost șters cu succes";
	else 
		echo "Eroare la ștergere: " . $conn->error;
	
	header("Location: admin_page.php");
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Welcome, Admin</title>
</head>

<body>
	<head>
        <title>Gym Rat</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="style2.css" />
    </head>
    <body>
        <header class="main-header">
            <h1 class="gymrat-name gymrat-name-large">Gym Rat</h1>
        </header>
		<form action="" method="POST" class="login-email">
			<h4>Bun venit pe pagina de admin! Dacă doriți să ștergeți o persoană din lista de mai sus, introduceți e-mailul acesteia în căsuța de mai jos.</h4>
			<div class="input-group">
				<input type="email" placeholder="E-mailul persoanei" name="email" value="<?php echo $email; ?>" required>
			</div>
			
			<div class="input-group">
				<button name="submit" class="btn">Ștergeți persoana</button>
			</div>
			<p><br><br><b>Doriți să părăsiți pagina?</b> <a href="logout.php">Deconectare</a></p>
		</form>
	</div>
</body>
</html>