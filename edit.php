<?php 
  include "koneksi.php";

  $id=$_GET['id'];
  $sql1 = "select* from tb_skripsi where id=$id";
  $skripsi = mysqli_query($koneksi, $sql1) or die(mysqli_error($koneksi));
  $sql2 = "select * from tb_dosen";
  $dosen = mysqli_query($koneksi, $sql2) or die(mysqli_error($koneksi));
  
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Form Pendaftaran Sidang</title>
  <style type="text/css">
    .bg{
      /*background: url("img/slider-bg-1.png");*/
      height: 100%;
      background-position: center;
      background-repeat: no-repeat;
      background-size: contain;

      position: fixed;
      height: 100%;
      width: 100%;

      -z-index: -1;
      /*bac*/
    }

    img {
      position: absolute;
      left: -50%;
      top: 0px;
      z-index: -1;
    }
  </style>t
</head>
<body>
  <div class="container">
    <img src="img/slider-bg-1.png" class="" width="150%" height="250%">
    <?php
          if (isset($_GET['message'])) {
            echo '<div class="alert alert-success">Pendaftaran Berhasil</div>';
          }
    ?>
    

    <h1>Form Pendaftaran Ujian Program Studi Perbandingan Mazhab</h1>
  <?php
    foreach ($skripsi as $key => $value) {
  ?>
  <form action="edit.php?id=<?php echo $id?>" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Jenis Ujian</label>
    <select name="jenis_ujian" class="form-control" >
      <option><?php echo $value ['jenis_ujian']; ?></option>
      <option value="">Pilih Jenis Ujian</option>
      <option value="Komprehensif">1. Ujian Komprehensif</option>
      <option value="Munaqosyah">2. Ujian Munaqosyah</option>
    </select>
  </div>

  <div class="form-group">
    <label>Nama Lengkap</label>
    <input name="nama" type="text" name="" class="form-control" value="<?php echo $value ['nama_lengkap']; ?>">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input name="tempat_lahir" type="text" name="" class="form-control" value="<?php echo $value ['tempat_lahir']; ?>">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input  type="date" name="tanggal_lahir" class="form-control" value="<?php echo $value ['tanggal_lahir']; ?>">
  </div>

  <div class="form-group">
    <label>Nomor Induk Mahasiswa</label>
    <input name="nim" type="number" name="" class="form-control" value="<?php echo $value ['nim']; ?>">
  </div>

  <div class="form-group">
    <label>Judul Skripsi</label>
    <input name="judul" type="text" name="" class="form-control" value="<?php echo $value ['judul_skripsi']; ?>">
  </div>

  <div class="form-group">
    <label>Pembimbing I</label>
    <select name="pem1a" class="form-control" id="exampleFormControlSelect1">
      <option><?php echo $value ['pemb_satu']; ?></option>
      <option>Piih Dosen Pembimbing</option>
    
      <?php
        foreach ($dosen as $key => $data) {
          echo "<option value='$data[nama_dosen]'>$data[nama_dosen]</option>";
        }
      ?>
    </select>
  </div>

  <div class="form-group">
    <label>Pembimbing II</label>
    <select name="pem2a" class="form-control" id="exampleFormControlSelect1">
      <option><?php echo $value ['pemb_dua']; ?></option>
      <option>Piih Dosen Pembimbing</option>
      <?php
        foreach ($dosen as $key => $data) {
          echo "<option value='$data[nama_dosen]'>$data[nama_dosen]</option>";
        }
      ?>
    </select>
  </div>


  <div class="left-box">
    <label>Alamat Lengkap</label>
    <input name="alamat" type="text" class="form-control" value="<?php echo $value ['alamat']; ?>">
  </div>

  <div class="form-group">
    <label>No. Handphone</label>
    <input type="number" name="no_hp" class="form-control" value="<?php echo $value ['no_hp']; ?>">
  </div>

  <div class="form-group row">
        <label class=" col-form-label">&nbsp;</label>
        <div class="col-sm-10">
          <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
        </div>
      </div>
      <input type="hidden" name="id" value="<?php echo $value ['id']; ?>">

    <!-- <div class="form-group">
    <label>Status</label>
    <input type="number" name="status" class="form-control" value="<?php echo $value ['status']; ?>">
  </div> -->
    </form>
    <?php    
    }
  ?>
  </div>

    <?php
    if(isset($_POST['submit'])){
      $jenis_ujian      = $_POST['jenis_ujian'];
      $nama_lengkap     = $_POST['nama'];
      $tempat_lahir  = $_POST['tempat_lahir'];
      $tanggal_lahir    = $_POST['tanggal_lahir'];
      $nim    = $_POST['nim'];
      $judul_skripsi    = $_POST['judul'];
      $pemb_satu   = $_POST['pem1a'];
      $pemb_dua   = $_POST['pem2a'];
      $alamat  = $_POST['alamat'];
      $no_hp  = $_POST['no_hp'];
      $id= $_GET['id'];
      $no_hp  = $_POST['no_hp'];
      
    
      // $cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'") or die(mysqli_error($koneksi));
      
       $sql = mysqli_query($koneksi, "UPDATE tb_skripsi SET 
        jenis_ujian='$jenis_ujian',
        nama_lengkap='$nama_lengkap',
        tempat_lahir='$tempat_lahir',
        tanggal_lahir='$tanggal_lahir',
        nim='$nim',
        judul_skripsi='$judul_skripsi',
        pemb_satu='$pemb_satu',
        pemb_dua='$pemb_dua', 
        alamat='$alamat', 
        no_hp='$no_hp' 
        WHERE id='$id'")  or die(mysqli_error($koneksi));
        $status='$status' ;
        
        if($sql){
          echo '<script>alert("Berhasil mengubah data."); document.location="table.php?message=berhasil"; </script>';
         
        }else{
          echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
      }
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
