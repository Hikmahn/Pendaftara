<?php
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
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <title>Data Mahasiswa</title>
  </head>
  <body>
    <br>
    <div class="container">
      <center><h2>Daftar Rekapan Sidang Mahasiswa</h2></center> 
      <center><h2>Program Studi Perbandingan Mazhab</h2></center> 
       <table border="1">
         <thead>
          <br>

           <tr>
             <th>No</th>
             <th>Jenis Ujian</th>
             <th>Nama Lengkap</th>
             <th>Tempat Lahir</th>
             <th>Tanggal Lahir</th>
             <th>NIM</th>
             <th>Judul Skripsi</th>
             <th>Pembimbing 1</th>
             <th>Pembimbing 2</th>
             <th>Alamat</th>
             <th>No. Handphone</th>
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
              /tr>
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