<h1>Edit data mahasiswa || carikode.com</h1>
<?php
mysql_connect("localhost","root","");
mysql_select_db("sp");

$sql = mysql_query("SELECT * FROM peserta ORDER BY id DESC");
if(mysql_num_rows($sql) > 0){
$no=1;
while($data = mysql_fetch_array($sql)){
?>
    <table>
        <form action="" method="post">            
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="telepon" value="<?php echo $data['telepon'] ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
            </tr>
                
            <tr>
                <td></td><td><input type="submit" value="update"></td>
            </tr>
        </form>
    </table>
<?php
break;
}
}
?>