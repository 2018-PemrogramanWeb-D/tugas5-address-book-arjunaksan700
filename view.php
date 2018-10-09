<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "address_book";

$conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");

$query = mysqli_query($conn,"SELECT * FROM data ");
?>
<form action="" method="post">
	<a href="index.php">Back</a>
    <table border="2" cellpadding="3" cellspacing="3">
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Telp</th>
            <th>Alamat</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["firstname"];?></td>
            <td><?php echo $data["lastname"];?></td>
            <td><?php echo $data["email"];?></td>
            <td><?php echo $data["telp"];?></td>
            <td><?php echo $data["alamat"];?></td>
            <td>
                <a href="delete.php?id=<?php echo $data['id'];?>">Hapus</a> 
                <a href="update_form.php?id=<?php echo $data['id'];?>">Update</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>