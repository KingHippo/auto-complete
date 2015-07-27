<?php
// mysql host
$host = 'localhost';
// user name
$user = 'root';
// password
$pass = 'b00gn1sh';
// PDO connect *********
try {
  $db = new PDO("mysql:host=$host;dbname=state_population", $user, $pass);
} catch(PDOException $e) {
    echo $e->getMessage();
  }
?>
