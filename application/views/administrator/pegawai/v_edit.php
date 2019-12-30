
<?php $this->load->view('administrator/navbar'); ?>

<div class="container">
	<h3>
		<?php echo $judul; ?>
	</h3>

	<!-- buat tag form -->
	<form action="<?= site_url('administrator/pegawai/proses_edit') ?>" method="post">
		<input type="hidden" name="id" value="<?= $data_pegawai->id ?>">
		<div class="form-group">
			<label>NIK</label>
			<input type="text" name="nik" class="form-control" value="<?= $data_pegawai->nik ?>">
		</div>
		<div class="form-group">
			<label>NAMA</label>
			<input type="text" name="nama" class="form-control"
			value="<?= $data_pegawai->nama ?>">
		</div>
		<div class="form-group">
			<label>ALAMAT</label>
			<input type="text" name="alamat" class="form-control" value="<?= $data_pegawai->alamat ?>">
		</div>
		<div class="form-group">
			<label>JABATAN</label>
			<input type="text" name="jabatan" class="form-control" value="<?= $data_pegawai->jabatan ?>">
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