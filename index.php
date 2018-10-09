<!DOCTYPE html>
<html>
    <head>
        <title>Tugas 5_05111740000133</title>
    </head>
    <body>
        <form method="post" action="simpan.php">
            <table>
                <tr><td>ID</td><td><input type="text" name="id"></td></tr>
                <tr><td>NAMA DEPAN</td><td><input type="text" name="firstname"></td></tr>
                <tr><td>NAMA BELAKANG</td><td><input type="text" name="lastname"></td></tr>
                <tr><td>EMAIL</td><td><input type="text" name="email"></td></tr>
                <tr><td>TELP</td><td><input type="text" name="telp"></td></tr>
                <tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
                <tr><td colspan="2"><button type="submit" value="view"><a href="view.php">View</a></button></td></tr>
            </table>
            
        </form>
        
    </body>
</html>