<!doctype html>
<html>
<head>
	<title><?php echo $judul; ?></title>
	<link rel="stylesheet"
	href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>">
</head>
<body>
	<!-- navbar	 -->
	<nav class="navbar navbar-dark bg-dark mb-4">
		<a href="#" class="navbar-brand">
			WEB II SI
		</a>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="" class="nav-link">Pegawai</a>
			</li>
		</ul>
	</nav>

	<div class="container">
		<h3>
			<?php echo $judul; ?>
		</h3>

		<div class="float-right mb-3">
			<a href="<?= site_url('administrator/pegawai/tambah') ?>" class="btn btn-outline-primary btn-sm">
				Tambah
			</a>
		</div>

		<table class="table table-bordered">
			<tr>
				<th>NO</th>
				<th>NIK</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
				<th>JABATAN</th>
			</tr>

			<?php foreach ($data_pegawai as $key): ?>
				<tr>
					<td>#</td>
					<td><?= $key->nik ?></td>
					<td><?= $key->nama ?></td>
					<td><?= $key->alamat ?></td>
					<td><?= $key->jabatan ?></td>
				</tr>
			<?php endforeach ?>
			
		</table>
	</div>
</body>
</html>