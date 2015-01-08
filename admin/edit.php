<?php

/**
 * @author djack
 * @copyright 2015
 */



?>
<div class="container" style="min-height:768px;">
<p><h2>Daftar Pendaki</h2></p><br>
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href="#daftar" role="tab" data-toggle="tab"> Daftar Pendaki </a></li>
        <li class=""><a href="#tambah" role="tab" data-toggle="tab">Tambah</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="daftar">  
            <br>
                <!-- <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah </button> -->
            <br>                    
        <div class="tab-pane" id="tambah"><br>  
            <form method="post" action="" id="contactform" role="form">
                <input type="hidden" name="id" value="<?php echo $data['id']?>" >
                <div class="form-group">
                    <label for="exampleInputNama1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="Nama" value="<?php echo $data['nama'];?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" id="Email" value="<?php echo $data['email'];?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputTelepon1">Telepon</label>
                    <input type="text" name="telepon" class="form-control" id="Telepon" value="<?php echo $data['telepon'];?>" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputAlamat1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="Alamat" placeholder="<?php echo $data['alamat'];?>" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputJenisKelamin1">Jenis Kelamin</label><br>
                    <a><input type="radio" name="jenis_kelamin" class="" id="JenisKelamin" value="pria" >&nbsp;Pria</a>&nbsp;&nbsp;&nbsp;
                    <a><input type="radio" name="jenis_kelamin" class="" id="JenisKelamin" value="wanita" >&nbsp;Wanita</a>
                </div><br>
                <div class="checkbox">
                    <label><input type="checkbox" name="check" required> I am Agree</label>
                </div>
                <button type="submit" name="btn_submit" id="submitbtn" class="btn btn-success">Daftar</button>
                <a href="index.php"><button type="button" class="btn btn-primary">Back</button></a>
            </form>       
        </div>     
    </div>
</div>

