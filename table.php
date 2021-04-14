<?php
  session_start();
  if (isset($_SESSION['status']) && $_SESSION['status'] == true) {
    
  } else {
      header("location:login.php");
  }    
     
  include 'koneksi.php';

  $sql = "select * from tb_skripsi where status='aktif' order by id desc";
  $skripsi = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
  
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



    <title>Data Mahasiswa</title>
  </head>
  <body style="padding: 30px;">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <ul class="navbar-nav mr-auto">
              <li><h2 style="">TABEL MAHASISWA</h2></li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li><a href="logout.php" class="btn btn-info">Logout</a></li>
            </ul>
          </div>
        </nav>

       

         <div class="form-group row">
        <!-- <label class=" col-form-label">&nbsp;</label> -->
      </div>
    </div>
       <table class="table table-striped table-bordered table-hover">
         <thead class="thead-dark">
           <tr>
             <th scope="col">No</th>
             <th scope="col">Jenis Ujian</th>
             <th scope="col">Nama Lengkap</th>
             <th scope="col">Tempat Lahir</th>
             <th scope="col">Tanggal Lahir</th>
             <th scope="col">NIM</th>
             <th scope="col">Judul Skripsi</th>
             <th scope="col">Pembimbing 1</th>
             <th scope="col">Pembimbing 2</th>
             <th scope="col">Alamat</th>
             <th scope="col">No. Handphone</th>
             <th scope="col" colspan="3">Aksi</th>
             <!-- <th scope="col">Status</th> -->
           </tr>
         </thead>

         <tbody>
                 
          <?php
            foreach($skripsi as $key=> $data ){
            ?>
              <tr> 
                 <td><?php echo $key+1; ?></td>
                 <td><?php echo $data['jenis_ujian']; ?></td>
                 <td><?php echo $data['nama_lengkap']; ?></td>
                 <td><?php echo $data['tempat_lahir']; ?></td>
                 <td><?php echo $data['tanggal_lahir']; ?></td>
                 <td><?php echo $data['nim']; ?></td>
                 <td><?php echo $data['judul_skripsi']; ?></td>
                 <td><?php echo $data['pemb_satu']; ?></td>
                 <td><?php echo $data['pemb_dua']; ?></td>
                 <td><?php echo $data['alamat']; ?></td>
                 <td><?php echo $data['no_hp']; ?></td>
                 <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
                 <td><a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
                 <td><a href="print.php?id=<?php echo $data['id']; ?>">Print</a></td>
                 <!-- <td><?php echo $data['status']; ?></td> -->
             </tr>
            <?php
            }
          ?>
         </tbody>
       </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php

?>