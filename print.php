<?php
  include 'koneksi.php';
  $id = $_GET['id'];
  $sql = "select * from tb_skripsi where status='aktif' and id='$id' order by id desc";
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
    <script type="text/javascript">
      window.print();
    </script>
  </head>
  <body style="margin-top: 10px;">
    <br>
    <div class="container">
     <!--  <center><h2>Daftar Rekapan Sidang Mahasiswa</h2></center> 
      <center><h2>Jurusan Perbandingan Mazhab</h2></center> 
       --> 
       <!-- <p ><img src=”logo.png” style=”float:left;” />tulis teks disini</p> -->
       <img src="logo.png" width="200px" height="150px" style="float: left;">
       <center><h3>KEMENTRIAN AGAMA</h3></center>
       <center><h2>UIN SUNAN GUNUNG DJATI BANDUNG</h2></center>
       <center><h2>FAKULTAS SYARI'AH DAN HUKUM</h2></center>
       <hr style="height:2px;margin-top: 50px; border-width: 5px; color: black; background-color:black">
      <center>
        <p style="margin-top: 3px; margin-bottom: -5px; font-weight: bold; ">FORMRULIR PENDAFTARAN UJIAN KOMPREHENSIF/MUNAQASAH</p>
      </center>

       <table style="margin-right: 110px; margin-top: 0px" style="font-size: 15px">
         <thead>
          <br>
            <?php
            foreach($skripsi as $key=> $data ){
            ?>
    
           <tr>
             <td style="width: 210px">Nama Lengkap</td>
             <td>:<?php echo $data['nama_lengkap']; ?></td>
           </tr>
           <tr>
             <td> Tempat dan Tanggal Lahir</td>
             <td>:<?php echo $data['tempat_lahir'] .",". $data['tanggal_lahir']; ?></td>
           </tr>
           <tr>
             <td>Nomor Induk Mahasiswa</td>
             <td>:<?php echo $data['nim']; ?></td>
           </tr>
           <tr>
             <td>Jurusan/Program Studi</td>
             <td>:Perbandingan Mazhab</td>
           </tr>
             <td style="vertical-align: top;">Judul Skripsi</td>
             <td style="height: 90px; vertical-align: top;">:<?php echo $data['judul_skripsi']; ?></td>
           </tr>
           <tr>
             <td>Pembimbing I</td>
             <td>:<?php echo $data['pemb_satu']; ?></td>
           </tr>
           <tr>
             <td>Pembimbing II</td>
             <td>:<?php echo $data['pemb_dua']; ?></td>
           </tr>
           <tr>
             <td>Alamat Rumah</td>
             <td>:<?php echo $data['alamat']; ?></td>
           </tr>
           <tr>
             <td>Nomor Handphone</td>
             <td>:<?php echo $data['no_hp']; ?></td>
           </tr>
  
            <?php
            }
          ?>
         </thead>
       </table>
       <p style="margin-top: 3px; margin-bottom: -5px; font-weight: bold;">PERSYARATAN YANG HARUS DILAMPIRKAN (dimasukkan dalam StofMap warna merah muda):</p>
       <ol>
         <li value="1"> ( ) Asli Tanda Bukti Keterangan Lunas SPP Terbaru (dari Bag.Keuangan Al-Jami'ah);</li>
         <li>( ) Photo copy Kartu Tanda Mahasiswa (KTM) 1 (satu)lembar;</li>
         <li>( ) Pas foto terbaru ukuran 3x4 (hitam putih) 3 (tiga) lembar, tidak berkacamata. </li>
         <li>( ) Photo copy SK Judul- Pemimbing Skripsi (untuk syarat munaqosyahtanggal SK Skripsi minimal berumul 3 bulan penuh);</li>
         <li>( ) Photo copy Sertifikat Orientasi Pembinaan Mahasiswa Baru (OPAK);</li>
         <li>( ) Photo copy Sertifikat  Pelatihan Komputer;</li>
         <li>( ) Asli Keterangan Lulus Praktik/Praktikum (nilai dilampirkan);</li>
         <li>( ) Photo copy Sertifikat Lulus Tahfidz Al-Qur'an 1 (satu) Juz (dengan menunjukkan Asli);</li>
         <li>( ) Photo copy Ijazah/STTB SLTA/MA/Sederajat;</li>
         <li>( ) Asli Daftar Nilai Terbaru yang Telah Disahkan oleh Ketua Jurusan/Prodi;</li>
         <li>( ) Form Biodata Calon Peserta Sidang Munaqosyah;</li>
         <li>( ) Asli Surat Keterangan Lulus Komprehensif;</li>
         <li>( ) Asli Nilai Bimbingan Skripsi (Pembimbing I dan Pembimbing II);</li>
         <li>( ) Asli Keterangan Pernah Menghadiri Sidang Munaqosyah (minimal 5 peserta);</li>
         <li>( ) Photo  copy Sertifikat TOEFL dan TOAFL (dengan menunjukkan Asli);</li>
         <li>( ) Photo  copy Naskah Skripsi sebanyak 2 (dua) Bundel, masing-masing dimasukkan dalam Stofmap warna merah muda;</li>
       </ol>
       <p style="margin-top: -3px; font-weight: bold; text-decoration: underline;">NB: Persyaratan Komprehensif (Nomor 1 s.d 10); Persyaratan Munaqosyah (Nomor 1 s.d 16)</p>
       <p style="margin-top: -5px; font-weight: bold;">Sesuai Data Aplikasi PIN (PDDIKTI):</p>
       <p>ELIGIBLE/TIDAK ELIGIBLE</p>

       <table class="col-md-12">
         <tr>
           <td class="">
              Mengetahui,
              <p style="font-weight: bold;">Ketua Program Studi,</p> <br><br><br>
              <p style="font-weight: bold;">Dr. Ayi Yunus Ruusyana, M.Ag</p>
              <p style="margin-top: -15px;">NIP. 19751008 200501 1 003</p>
           </td>

           <td class="">
              Bandung, 
              <p style="font-weight: bold;">Mahasiswwa Pendaftar,</p> <br><br><br>
              <p style="font-weight: bold;">............................................</p>
              <p style="margin-top: -15px;">NIM. </p>
           </td>

         </tr>
        
       </table>
       <!-- <p align="right" style="margin-top: 450px; margin-right: 100px;">12 maret 2020</p> -->
       
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>