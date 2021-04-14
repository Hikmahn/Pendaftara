<?php 
    
  include "koneksi.php";

  $sql2 = "select * from tb_dosen";
  $dosen = mysqli_query($koneksi, $sql2) or die(mysqli_error($koneksi));;
  
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
  </style>
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

  <form action="form.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Jenis Ujian</label>
    <select name="jenis_ujian" class="form-control" >
      <option value="">Pilih Jenis Ujian</option>
      <option value="Komprehensif">1. Ujian Komprehensif</option>
      <option value="Munaqosyah">2. Ujian Munaqosyah</option>
    </select>
  </div>

  <div class="form-group">
    <label>Nama Lengkap</label>
    <input name="nama" type="text" name="" class="form-control">
  </div>

  <div class="form-group">
    <label>Tempat Lahir</label>
    <input name="tempat_lahir" type="text" name="" class="form-control">
  </div>

  <div class="form-group">
    <label>Tanggal Lahir</label>
    <input  type="date" name="tanggal_lahir" class="form-control">
  </div>

  <div class="form-group">
    <label>Nomor Induk Mahasiswa</label>
    <input name="nim" type="number" name="" class="form-control">
  </div>

  <div class="form-group">
    <label>Judul Skripsi</label>
    <input name="judul" type="text" name="" class="form-control">
  </div>

  <div class="form-group">
    <label>Pembimbing I</label>
    <select name="pem1a" class="form-control" id="exampleFormControlSelect1">
      <option>Piih Dosen Pembimbing</option>
    
      <?php
        foreach ($dosen as $key => $value) {
          echo "<option value='$value[nama_dosen]'>$value[nama_dosen]</option>";
        }
      ?>
    </select>
  </div>

  <div class="form-group">
    <label>Pembimbing II</label>
    <select name="pem2a" class="form-control" id="exampleFormControlSelect1">
      <option>Piih Dosen Pembimbing</option>
      <?php
        foreach ($dosen as $key => $value) {
          echo "<option value='$value[nama_dosen]'>$value[nama_dosen]</option>";
        }
      ?>
    </select>
  </div>

  <div class="left-box">
    <label>Alamat Lengkap</label>
    <input name="alamat" type="text" class="form-control">
  </div>

  <div class="form-group">
    <label>No. Handphone</label>
    <input type="number" name="no_hp" class="form-control">
  </div>

  <div class="form-group row">
        <label class="col-form-label">&nbsp;</label>
        <div class="col-sm-10">
          <input type="submit" name="submit" class="btn btn-primary" value="SIMPAN">
          <a class="btn btn-primary btn-md" href="login.php" role="button">LOGIN</a>
        </div>
      </div>

  </div>

    <?php
    if(isset($_POST['submit'])){
      $jenis_ujian      = $_POST['jenis_ujian'];
      $nama_lengkap     = $_POST['nama'];
      $tempat_lahir  = $_POST['tempat_lahir'];
      $tanggal_lahir    = $_POST['tanggal_lahir'];
      $nim    = $_POST['nim'];
      $judul_skripsi    = $_POST['judul'];
      $pem1a   = $_POST['pem1a'];
      $pem2a   = $_POST['pem2a'];
      $alamat  = $_POST['alamat'];
      $no_hp  = $_POST['no_hp'];
      
    
      // $cek = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'") or die(mysqli_error($koneksi));
      
       $sql = mysqli_query($koneksi, "INSERT INTO tb_skripsi(jenis_ujian,nama_lengkap,tempat_lahir,tanggal_lahir,nim,judul_skripsi,pemb_satu, pemb_dua, alamat, no_hp,status) VALUES('$jenis_ujian', '$nama_lengkap', '$tempat_lahir','$tanggal_lahir', '$nim', '$judul_skripsi', '$pem1a', '$pem2a', '$alamat', '$no_hp', 'aktif')") or die(mysqli_error($koneksi));
        
        if($sql){
          echo '<script>alert("Berhasil menambahkan data.");</script>';
         
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
