<?php

include 'koneksi.php';

$id = $_GET['id'];

$sql=mysqli_query($koneksi, "UPDATE tb_skripsi set status='tidak aktif' where id='$id'") or die(mysqli_error($koneksi)) ;

if($sql){
  echo '<script>alert("Berhasil Menghapus Data."); document.location="table.php?message=berhasil"; </script>';
 
}else{
  echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
}
?>