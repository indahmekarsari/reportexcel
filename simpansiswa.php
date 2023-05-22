<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "db_siswa";

// Membuat Koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
    $nama=$_POST['nama'];
    $jkelamin=$_POST['jkelamin'];
    $nisn=$_POST['nisn'];
    $nik=$_POST['nik'];
    $tempattgllahir=$_POST['tempattgllahir'];
    $agama=$_POST['agama'];
    $kelas=$_POST['kelas'];
    $nohp=$_POST['nohp'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    

$tambah = mysqli_query($conn, "INSERT INTO  db_report VALUES ( '$nama', '$jkelamin','$nisn', '$nik', '$tempattgllahir', '$agama', '$kelas', '$nohp', '$email', '$alamat')")or die("Proses simpan ke database gagal");

header("location:cetakdata.php");
?>