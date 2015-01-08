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
                      <td></td>
                      <td><b>Aksi</b></td>
                      <td></td>
                  </tr>
            	</thead>
              <?php
              include('../koneksi.php');
              $sql = mysql_query("SELECT * FROM peserta ORDER BY id DESC");
              if(mysql_num_rows($sql) > 0){
                $no = 1;
                while($data = mysql_fetch_assoc($sql)){
                  echo '
                    <tbody>
                    <tr>      
                        <td>'.$no.'</td>
                        <td>'.$data['nama'].'</td>
                        <td>'.$data['jenis_kelamin'].'</td>
                        <td>'.$data['telepon'].'</td>
                        <td>'.$data['email'].'</td>
                        <td>'.$data['alamat'].'</td>
                        <td>
                          <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-check"></span> Confirmasi </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary" ><span class="glyphicon glyphicon-edit"></span> Edit </button>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" ><span class="glyphicon glyphicon-remove"></span> Hapus </button>
                        </td>
                    </tr>
                </tbody>
                <tbody>
                  ';
                  $no++;
                }
              }else{
                echo '
                <tbody>
                  <tr align="center">
                    <td align="center" colspan="4" align="center">Tidak ada data!</td>
                  </tr>
                </tbody>
                ';
              }
              ?>
                
        	</table>
        </div>
  	</div>
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