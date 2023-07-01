<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}

		h3 {
			margin: 0;
		}

		h1 {
			margin: 10px 0;
		}

		h4 {
			margin-top: 30px;
		}

		nav {
			background-color: #666;
			padding: 10px;
		}

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
		}

		nav li {
			float: left;
		}

		nav li a {
			display: block;
			color: #fff;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		nav li a:hover {
			background-color: #999;
		}

		.content {
			padding: 20px;
			margin: 20px;
			background-color: #fff;
		}

		.success {
			color: green;
		}

		.failure {
			color: red;
		}
	</style>
</head>
<body>
	<header>
		<h3>Pendaftaran Siswa Baru</h3>
		<h1>SMK Coding</h1>
	</header>

	<div class="content">
		<h4>Menu</h4>

		<?php if(isset($_GET['status'])): ?>
			<p class="<?php echo ($_GET['status'] == 'sukses') ? 'success' : 'failure'; ?>">
				<?php echo ($_GET['status'] == 'sukses') ? 'Pendaftaran siswa baru berhasil!' : 'Pendaftaran gagal!'; ?>
			</p>
		<?php endif; ?>

		<nav>
			<ul>
				<li><a href="form-daftar.php">Daftar Baru</a></li>
				<li><a href="list-siswa.php">Pendaftar</a></li>
			</ul>
		</nav>
	</div>
</body>
</html>
