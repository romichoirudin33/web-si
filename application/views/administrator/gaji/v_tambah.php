
<?php $this->load->view('administrator/navbar'); ?>

<div class="container">
	<h3>
		<?php echo $judul; ?>
	</h3>

	<!-- buat tag form -->
	<form action="<?= site_url('administrator/gaji/proses_tambah') ?>" method="post">
		<div class="form-group">
			<label>NAMA PEGAWAI</label>
			<input type="text" name="nama_pegawai" class="form-control">
		</div>
		<div class="form-group">
			<label>GAJI POKOK</label>
			<input type="text" name="gaji_pokok" class="form-control">
		</div>
		<div class="form-group">
			<label>TUNJANGAN</label>
			<input type="text" name="tunjangan" class="form-control">
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