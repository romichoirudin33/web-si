<!doctype html>
<html>
<head>
	<title><?php echo $judul; ?></title>
	<link rel="stylesheet"
	href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/SweetAlert2/sweetalert2.css') ?>">
	<script src="<?= base_url('assets/SweetAlert2/sweetalert2.all.js') ?>"></script>
</head>
<body>
	<!-- navbar	 -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
		<a href="#" class="navbar-brand">
			WEB II SI
		</a>

		<?php $id = $this->session->userdata('id'); ?>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="<?= site_url('administrator/pegawai') ?>" class="nav-link">Pegawai</a>
			</li>
			<li class="nav-item">
				<a href="<?= site_url('administrator/gaji') ?>" class="nav-link">Gaji</a>
			</li>
			<li class="nav-item">
				<a href="<?= site_url('administrator/user') ?>" class="nav-link">User</a>
			</li>
			<li class="nav-item">
				<a href="<?= site_url('logincontroller/proses_logout')  ?>" class="nav-link">Logout</a>
			</li>
			<li class="nav-item">
				<button onclick="logout()" class="badge badge-secondary" style="margin-top: 10px; margin-left: 5px">Logout</button>
				<script>
					function logout()
					{
						Swal.fire({
							title: 'LOGOUT',
							text: "Apakah anda ingin Logout ? ",
							icon: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Ya, Logout!'
						}).then((result) => {
							if (result.value) {
								window.location.href = '<?= site_url('LoginController/proses_logout') ?>';
							}
						})
					}
				</script>
			</li>
		</ul>

	</nav>

	<div class="alert alert-info">
		<h5 class="text-center">
			Welcome <?= $this->session->userdata('nama'); ?>
		</h5>
	</div>