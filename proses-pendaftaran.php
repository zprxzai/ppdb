<?php
require_once("config.php");
if(isset($_POST['simpan'])){  
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];

$sql = "INSERT INTO calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal'";
$query = mysqli_query($db, $sql);
if($query){
    header('location: list-siswa.php');
} else {
    header('loation: index.php?status=gagal');
}
}else{
    die("akses dilarang... <a href= 'index.php'>kemabali</a>");
}

