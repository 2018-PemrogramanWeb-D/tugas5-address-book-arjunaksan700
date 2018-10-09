<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "address_book";

$conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");

$id 				= $_POST['id'];
$firstname          = $_POST['firstname'];
$lastname           = $_POST['lastname'];
$email        		= $_POST['email'];
$telp			  	= $_POST['telp'];
$alamat         	= $_POST['alamat'];

 $query="UPDATE data SET id='$id', firstname='$firstname', lastname='$lastname', email='$email', telp='$telp', alamat='$alamat'";
 mysqli_query($conn, $query);
 echo 'Data berhasil di Update! <br> '; 
  echo '<a href="index.php">Kembali</a>';
  echo '<a href="view.php">View</a>';
?>