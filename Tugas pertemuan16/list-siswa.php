<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}

		header {
			background-color: #f2f2f2;
			padding: 20px;
		}

		h3 {
			margin: 0;
		}

		nav {
			background-color: #333;
			color: #fff;
			padding: 10px;
		}

		nav a {
			color: #fff;
			text-decoration: none;
			margin-right: 10px;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		table th, table td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		table th {
			background-color: #f2f2f2;
		}

		table tr:hover {
			background-color: #f5f5f5;
		}

		.tindakan {
			display: flex;
			gap: 5px;
		}

		.tindakan a {
			padding: 5px 10px;
			background-color: #333;
			color: #fff;
			text-decoration: none;
			border-radius: 3px;
		}

		.tindakan a:hover {
			background-color: #555;
		}

		p {
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<header>
		<h3>Siswa yang sudah mendaftar</h3>
	</header>
	<nav>
		<a href="form-daftar.php">[+] Tambah Baru</a>
	</nav>
	<br>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Sekolah Asal</th>
				<th>Tindakan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM calon_siswa";
			$query = mysqli_query($db, $sql);
			while ($siswa = mysqli_fetch_array($query)) {
				echo "<tr>";
				echo "<td>" . $siswa['id'] . "</td>";
				echo "<td>" . $siswa['nama'] . "</td>";
				echo "<td>" . $siswa['alamat'] . "</td>";
				echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
				echo "<td>" . $siswa['agama'] . "</td>";
				echo "<td>" . $siswa['sekolah_asal'] . "</td>";
				echo "<td class='tindakan'>";
				echo "<a href='form-edit.php?id=" . $siswa['id'] . "'>Edit</a>";
				echo "<a href='hapus.php?id=" . $siswa['id'] . "'>Hapus</a>";
				echo "</td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>
