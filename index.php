<?php

$servername = "localhost";
$database = "nowsms";
$username = "bangkit";
$password = "santai123";
 
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sender = $_GET['sender'];
$isi = $_GET['isi'];
$isi = trim($isi);
 // Masukkan data ke database
$sql = "INSERT INTO inbox (id, sender, isi) VALUES ('', '$sender', '$isi')" ;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//header("Location:http://127.0.0.1:8800/PhoneNumber=$sender&Text=$isi");

?>