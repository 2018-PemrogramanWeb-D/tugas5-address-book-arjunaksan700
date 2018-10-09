<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "address_book";

$conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
$id 				= $_GET['id'];
mysqli_query($conn, "DELETE FROM data WHERE id=$id");
 
header("location:view.php?");
?>
