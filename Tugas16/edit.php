<?php
include("config.php");

// Jika tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa-admin.php');
    exit();
}

// Ambil id dari query string
$id = $_GET['id'];

// Buat query untuk mengambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// Jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}

// Jika form disubmit, update data siswa
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // Upload foto
    $foto = $siswa['foto']; // Menggunakan foto yang sudah ada sebagai default
    if ($_FILES['foto']['name']) {
        $foto = "uploads/" . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
    }

    // Update data siswa
    $sql = "UPDATE calon_siswa SET username='$username', password='$password', nama='$nama', tanggal_lahir='$tanggal_lahir', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal', foto='$foto' WHERE id=$id";
    mysqli_query($db, $sql);

    // Redirect ke halaman list-siswa-admin.php setelah proses update selesai
    header('Location: list-siswa-admin.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Formulir Edit Siswa Baru | SMAN 55 JAKARTA</title>
    <!-- ...Kode CSS lainnya... -->
</head>

<body>
    <!-- ...Kode HTML lainnya... -->
    <div class="edit">
        <form action="edit.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                <p>
                    <label for="username">Username:</label>
                    <input type="text" name="username" placeholder="Username" value="<?php echo $siswa['username'] ?>" required>
                </p>
                <p>
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="Password" required>
                </p>
                <p>
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                </p>
                <p>
                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                    <input type="date" name="tanggal_lahir" value="<?php echo $siswa['tanggal_lahir'] ?>" />
                </p>
                <p>
                    <label for="alamat">Alamat:</label>
                    <textarea name="alamat" placeholder="Alamat"><?php echo $siswa['alamat'] ?></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin:</label>
                    <input type="radio" name="jenis_kelamin" value="L" <?php if ($siswa['jenis_kelamin'] == 'L') echo 'checked' ?>> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php if ($siswa['jenis_kelamin'] == 'P') echo 'checked' ?>> Perempuan
                </p>
                <p>
                    <label for="agama">Agama:</label>
                    <select name="agama">
                        <option value="Islam" <?php if ($siswa['agama'] == 'Islam') echo 'selected' ?>>Islam</option>
                        <option value="Kristen" <?php if ($siswa['agama'] == 'Kristen') echo 'selected' ?>>Kristen</option>
                        <option value="Katolik" <?php if ($siswa['agama'] == 'Katolik') echo 'selected' ?>>Katolik</option>
                        <option value="Hindu" <?php if ($siswa['agama'] == 'Hindu') echo 'selected' ?>>Hindu</option>
                        <option value="Buddha" <?php if ($siswa['agama'] == 'Buddha') echo 'selected' ?>>Buddha</option>
                        <option value="Konghucu" <?php if ($siswa['agama'] == 'Konghucu') echo 'selected' ?>>Konghucu</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal:</label>
                    <input type="text" name="sekolah_asal" placeholder="Nama sekolah asal" value="<?php echo $siswa['sekolah_asal'] ?>" />
                </p>
                <p>
                    <label for="foto">Foto:</label>
                    <?php if ($siswa['foto']): ?>
                        <img src="<?php echo $siswa['foto'] ?>" alt="Foto" width="100" height="100" /><br />
                    <?php endif; ?>
                    <input type="file" name="foto" accept="image/*">
                </p>
                <p>
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="reset" value="Reset">
                </p>
            </fieldset>
        </form>
    </div>
    <!-- ...Kode HTML lainnya... -->
</body>

</html>
