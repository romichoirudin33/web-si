<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/SweetAlert2/sweetalert2.css') ?>">

	<style>

	body {
		background-color: #483D8B;
	}

	.login-box {

		width: 100%;
		height: 400px;
		background-color: #fff;
		margin-top: 100px;
		box-shadow: 10px 10px 10px rgba(1,1,1,0.7);
		border-radius: 10px;
	}

	.title {
		font-family: 'arial';
		font-size: 35px;
		font-weight: 500;
		text-shadow: 2px 2px 2px rgba(0,0,0,0.4);
	}

	.input {
		border-radius: 20px;
	}

	label {
		margin-left: 15px;
	}

	.btn-login {
		border-radius: 10px;
		background-color: #483D8B;
		box-shadow: 2px 2px 2px #483D8B;
	}

</style>
<script src="<?= base_url('assets/SweetAlert2/sweetalert2.all.js') ?>"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-4 offset-4 login-box">
				<h3 class="text-center mt-5 title">LOGIN</h3>
				<?php if ($this->session->flashdata('register')): ?>
					<script>
						Swal.fire({
							position: 'center',
							title: '<?= $this->session->flashdata('register') ?>',
							showConfirmButton: false,
							timer: 1500,
							type: 'success'
						})
					</script>
					
				<?php endif ?>
				<?php if ($this->session->flashdata('gagal')): ?>
					<script>
						Swal.fire({
							position: 'center',
							title: 'LOGIN GAGAL',
							text: '<?= $this->session->flashdata('gagal') ?>',
							showConfirmButton: false,
							timer: 2000,
							type: 'error'
						})
					</script>
					
				<?php endif ?>
				<form action="<?= site_url('logincontroller/proses_login') ?>" class="mt-4" method="post">
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control input" name="username">
					</div>

					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control input" name="password">
					</div>

					<button type="submit" class="btn btn-primary btn-block btn-login">Login</button>

					<p class="text-center mt-3">Dont have an account ? <a href="<?= site_url('register') ?>">Register</a></p>

				</form>
			</div>
		</div>
	</div>

	
</body>
</html>