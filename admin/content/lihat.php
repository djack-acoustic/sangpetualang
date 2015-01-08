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
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="text-primary bg-primary">
                            <td><b>Id</b></td>
                            <td><b>Nama</b></td>
                            <td><b>Jenis Kelamin</b></td>
                            <td><b>Email</b></td>
                            <td><b>Telepone</b></td>
                            <td><b>Alamat</b></td>
                            <td colspan="9" style="text-align:center;"><b>Aksi</b></td>
                        </tr>
                    </thead>
                    <?php
                    include('../koneksi.php');
                    $sql = mysql_query("SELECT * FROM peserta ORDER BY id DESC");
                    if(mysql_num_rows($sql) > 0){
                    $no=1;
                    while($data = mysql_fetch_array($sql)){
                    ?>	
                        <form method="post" action="">
                            <input type="hidden" name="id" value="<?php echo $data['id']?>" >
                            <tr>      
                                <td><?php echo $no++; ?> </td>
                                <td><?php echo $data['nama'];?></td>
                                <td><?php echo $data['jenis_kelamin'];?></td>
                                <td><?php echo $data['email'];?></td>
                                <td><?php echo $data['telepon'];?></td>
                                <td><?php echo $data['alamat'];?></td>
                                <!--<td>
                                    <button type="button" class="btn btn-success" name="confirm"><span class="glyphicon glyphicon-check"></span> Confirmasi </button>
                                </td>-->
                                <td style="text-align:right;">
                                    <a href="edit.php"><button type="submit" class="btn btn-primary" name="edit" > <span class="glyphicon glyphicon-edit"></span> Edit </button></a>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-danger" name="delete"><span class="glyphicon glyphicon-trash"></span> Hapus </a></button>
                                </td>
                            </tr>
                        </form>
                    <tbody>
                    <?php 	
                    }
                    }else{
                    ?>
                        <tbody>
                            <tr align="center">
                                <td align="center" colspan="4"> Tidak ada data! </td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <center><br>
                <?php
                while($no > 10){
                echo '
                  <ul class="pagination">
                      <li><a href="#">&laquo;</a></li>
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">&raquo;</a></li>
                  </ul>
                  ';
                break;
                }
                ?>
            </center>
        </div>
        <div class="tab-pane" id="tambah"><br>  
            <form method="post" action="" id="contactform" role="form">
                <div class="form-group">
                    <label for="exampleInputNama1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="Nama" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" name="email" class="form-control" id="Email" placeholder="E-Mail" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputTelepon1">Telepon</label>
                    <input type="text" name="telepon" class="form-control" id="Telepon" placeholder="Telepone" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputAlamat1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="Alamat" placeholder="Alamat Lengkap" required></textarea>
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

