<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link rel="stylesheet"
	href="<?= base_url('assets/bootstrap/css/bootstrap.css') ?>">
	<style>

	body {
		background-color: #483D8B;
	}

	.login-box {

		width: 100%;
		height: 700px;
		background-color: #fff;
		margin-top: 100px;
		box-shadow: 10px 10px 10px rgba(1,1,1,0.7);
		border-radius: 10px;
		margin-bottom: 30px;
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
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-4 offset-4 login-box">
				<h3 class="text-center mt-5 title">REGISTER</h3>

				<form action="<?= site_url('register/index') ?>" class="mt-4" method="post">
					<div class="form-group">
						<label for="">Nama</label>
						<input type="text" class="form-control input <?= (form_error('nama') ? 'is-invalid' : '') ?>" name="nama" value="<?= set_value('nama') ?>">
						
						<?= form_error('nama', '<small class="text-danger ml-3">', '</small>') ?>
					</div>

					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control input <?= (form_error('username') ? 'is-invalid' : '') ?>" " name="username" value="<?= set_value('username') ?>">

						<?= form_error('username', '<small class="text-danger ml-3">', '</small>') ?>
					</div>

					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control input <?= (form_error('email') ? 'is-invalid' : '') ?>" name="email" value="<?= set_value('email')  ?>">

						<?= form_error('email', '<small class="text-danger ml-3">', '</small>') ?>
					</div>

					<div class="row">
						<div class="col-6">
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control input <?= (form_error('password') ? 'is-invalid' : '') ?>" name="password">
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="">Confirm Password</label>
								<input type="password" class="form-control input <?= (form_error('confirm') ? 'is-invalid' : '') ?>" name="confirm">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<?= form_error('password', 
								'<div class="alert alert-danger" align="center">
								<p class="text-danger">',
								
								'</p></div>')?>
							</div>
						</div>


						<button type="submit" class="btn btn-primary btn-block btn-login">Register</button>

						<p class="text-center mt-3">Already have an account ? <a href="<?= site_url('welcome')  ?>">Login</a></p>

					</form>
				</div>
			</div>
		</div>

	</body>
	</html>