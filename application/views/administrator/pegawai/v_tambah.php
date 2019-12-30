
<?php $this->load->view('administrator/navbar'); ?>

<div class="container">
	<h3>
		<?php echo $judul; ?>
	</h3>

	<!-- buat tag form -->
	<form action="<?= site_url('administrator/pegawai/proses_tambah') ?>" method="post">
		<div class="form-group">
			<label>NIK</label>
			<input type="text" name="nik" class="form-control">
		</div>
		<div class="form-group">
			<label>NAMA</label>
			<input type="text" name="nama" class="form-control">
		</div>
		<div class="form-group">
			<label>ALAMAT</label>
			<input type="text" name="alamat" class="form-control">
		</div>
		<div class="form-group">
			<label>JABATAN</label>
			<input type="text" name="jabatan" class="form-control">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-outline-primary btn-sm">
				Simpan
			</button>
			<a href="<?= site_url('administrator/pegawai') ?>" class="btn btn-outline-warning btn-sm">
				Kembali
			</a>
		</div>
	</form>
</div>
</body>
</html>