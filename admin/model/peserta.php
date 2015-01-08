<?php      
	include('../koneksi.php');
	
	error_reporting(0);
	
	if(isset($_POST['btn_submit']))
	{
	$sql = " INSERT INTO peserta set 
			nama = \"".$_POST[nama]."\",
			email = \"".$_POST[email]."\",
			jenis_kelamin = \"".$_POST[jenis_kelamin]."\",
			telepon = \"".$_POST[telepon]."\",
			alamat = \"".$_POST[alamat]."\""; 
			$query = mysql_query($sql) or die (mysql_error());
			if ($query) {
				echo "<script> alert ('Registrasi Berhasil')</script>";  
			}
	}
	
	if(isset($_POST['delete'])){
		
		$id = $_POST['id'];
		$hps = mysql_query("delete from peserta where id=$id");
		if ($hps) {
			header("location:index.php");
		} else {
			echo "<script> alert ('Maaf, Gagal Menghapus!!!')</script>"; 
		}
	}
    if(isset($_POST['edit'])){
		
		$id = $_POST['id'];
		$edit = mysql_query("update peserta set
            id=\"".$_POST[id]."\",
            nama = \"".$_POST[nama]."\",
			email = \"".$_POST[email]."\",
			jenis_kelamin = \"".$_POST[jenis_kelamin]."\",
			telepon = \"".$_POST[telepon]."\",
			alamat = \"".$_POST[alamat]."\"           
            where id=$id");
		if ($edit) {
			header("location:index.php");
		} else {
			echo "<script> alert ('Maaf, Gagal Menghapus!!!')</script>"; 
		}
	}
?>