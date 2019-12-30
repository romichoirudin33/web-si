
<?php $this->load->view('administrator/navbar'); ?>
<?php if ($this->session->flashdata('login')): ?>
	<script>
		Swal.fire({
			position: 'center',
			title: '<?= $this->session->flashdata('login') ?>',
			showConfirmButton: false,
			timer: 1500,
			type: 'success'
		})
	</script>

<?php endif ?>
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
			<th class="text-center">AKSI</th>
		</tr>

		<?php foreach ($data_pegawai as $key): ?>
			<tr>
				<td>#</td>
				<td><?= $key->nik ?></td>
				<td><?= $key->nama ?></td>
				<td><?= $key->alamat ?></td>
				<td><?= $key->jabatan ?></td>
				<td class="text-center">
					<a href="<?= site_url('administrator/pegawai/hapus/'.$key->id) ?>" class="btn btn-outline-danger btn-sm">
						Hapus
					</a>
					<a href="<?= site_url('administrator/pegawai/edit/'.$key->id) ?>" class="btn btn-outline-info btn-sm">
						Edit
					</a>
				</td>
			</tr>
		<?php endforeach ?>
		
	</table>
</div>
</body>
</html>