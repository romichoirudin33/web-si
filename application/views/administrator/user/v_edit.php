
<?php $this->load->view('administrator/navbar'); ?>

<div class="container">
	<h3>
		<?php echo $judul; ?>
	</h3>

	<!-- buat tag form -->
	<form action="<?= site_url('administrator/user/proses_edit') ?>" method="post">
		<input type="hidden" name="id" value="<?= $data->id ?>">
		<div class="form-group">
			<label>NAMA</label>
			<input type="text" name="nama" class="form-control" value="<?= $data->nama ?>">
		</div>
		<div class="form-group">
			<label>USERNAME</label>
			<input type="text" name="username" class="form-control" value="<?= $data->username ?>">
		</div>
		<div class="form-group">
			<label>EMAIL</label>
			<input type="email" name="email" class="form-control" value="<?= $data->email ?>">
		</div>
		<div class="form-group">
			<label>PASSWORD</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<label>ULANGI PASSWORD</label>
			<input type="password" name="c_password" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('administrator/gaji') ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
</div>
</body>
</html>