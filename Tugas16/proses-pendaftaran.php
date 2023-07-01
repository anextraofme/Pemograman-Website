<?php
include("config.php");

if (isset($_POST['daftar'])) {
    // Ambil data dari formulir
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // Proses upload foto
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "uploads/" . $foto;

    // Pindahkan file foto yang diupload ke folder tujuan
    move_uploaded_file($tmp, $path);

    // Buat query
    $sql = "INSERT INTO calon_siswa (username, password, nama, tanggal_lahir, alamat, jenis_kelamin, agama, sekolah_asal, foto) VALUES ('$username', '$password','$nama', '$tanggal_lahir', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal', '$foto')";
    $query = mysqli_query($db, $sql);

    // Apakah query simpan berhasil?
    if ($query) {
        // Jika berhasil, alihkan ke halaman index.php dengan status-sukses
        header('Location: index.php?status=sukses');
    } else {
        // Jika gagal, alihkan ke halaman index.php dengan status-gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>
