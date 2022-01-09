<?php 
$conn = mysqli_connect( "localhost", "root", "")
    or die("Eroare la conectare cu MySQL");

$createdb = mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS login_system_rusmir");
if (!$createdb)
    echo "<br />". mysqli_errno($conn). " : ". mysqli_error($conn);
    
mysqli_close($conn);

// conectare la serverul MySQL 
$conn = new mysqli('localhost', 'root', '', 'login_system_rusmir');
// verifica conexiunea
if (mysqli_connect_errno()) 
  exit('Connect failed: '. mysqli_connect_error());


// interogare sql pentru CREATE TABLE
$sql = "CREATE TABLE IF NOT EXISTS `users` (
	`id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`username` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`password` VARCHAR(255) NOT NULL
 ) "; 
// Executa interogarea $sql query pe server pentru a crea tabelul
if ($conn->query($sql) === FALSE) 
  echo 'Error: '. $conn->error;

$sql = "CREATE TABLE IF NOT EXISTS `orders` (
	`id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	`username` VARCHAR(255) NOT NULL,
	`adress` VARCHAR(255) NOT NULL,
	`phone` VARCHAR(255) NOT NULL
 ) "; 
// Executa interogarea $sql query pe server pentru a crea tabelul
if ($conn->query($sql) === FALSE) 
  echo 'Error: '. $conn->error;
$conn->close();
?>