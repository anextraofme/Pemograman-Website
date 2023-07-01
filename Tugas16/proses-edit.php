<?php
include("config.php");

// Cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST['simpan'])) {
    // Ambil data dari formulir
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // Buat query update
    $sql = "UPDATE calon_siswa SET username='$username', password='$password', nama='$nama', tanggal_lahir='$tanggal_lahir', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // Apakah query update berhasil?
    if ($query) {
        // Jika berhasil, alihkan ke halaman list-siswa.php
        header('Location: list-siswa-admin.php');
    } else {
        // Jika gagal, tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>
