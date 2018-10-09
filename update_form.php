<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "address_book";

$conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id ='$id'");
$data  = mysqli_fetch_array($query);
?>

<form method="post" action="update.php">
            <table>
                <tr><td>ID</td><td><input type="text" name="id" value="<?php echo $data['id']; ?>"></td></tr>
                <tr><td>NAMA DEPAN</td><td><input type="text" name="firstname" value="<?php echo $data['firstname']; ?>"></td></tr>
                <tr><td>NAMA BELAKANG</td><td><input type="text" name="lastname" value="<?php echo $data['lastname']; ?>"></td></tr>
                <tr><td>EMAIL</td><td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td></tr>
                <tr><td>TELP</td><td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan" >SIMPAN PERBAHAN</button></td></tr>
            </table>
            
        </form>

