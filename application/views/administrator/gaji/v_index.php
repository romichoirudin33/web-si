
<!-- navbar	 -->
<?php $this->load->view('administrator/navbar'); ?>

<div class="container">

	<?php if ($this->session->flashdata('info')): ?>
		<div class="alert alert-info">
			<strong>Info</strong>
			<p><?= $this->session->flashdata('info'); ?></p>
		</div>
	<?php endif ?>

	<h3>
		<?php echo $judul; ?>
	</h3>

	


	<div class="float-right mb-3">
		<a href="<?= site_url('administrator/gaji/tambah') ?>" class="btn btn-outline-primary btn-sm">
			Tambah
		</a>
	</div>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA PEGAWAI</th>
			<th>GAJI POKOK</th>
			<th>TUNJANGAN</th>
			<th>TOTAL GAJI</th>
			<th class="text-center">AKSI</th>
		</tr>
		
		<?php 
		$no = 0; 
		$total_gaji_pokok = 0;
		$total_tunjangan = 0;
		?>
		<?php foreach ($data_gaji as $key): ?>
			<?php $total_gaji_pokok = $total_gaji_pokok + $key->gaji_pokok; ?>
			<?php $total_tunjangan = $total_tunjangan + $key->tunjangan; ?>
			<tr>
				<td><?= $no+=1; ?></td>
				<td><?= $key->nama_pegawai ?></td>
				<td class="text-right"><?= $key->gaji_pokok ?></td>
				<td class="text-right"><?= $key->tunjangan ?></td>
				<td style="text-align: right;">
					<?= $key->gaji_pokok + $key->tunjangan ?>
				</td>
				<td class="text-center">
					<a href="<?= site_url('administrator/gaji/hapus/'.$key->id) ?>" class="btn btn-outline-danger btn-sm">
						Hapus
					</a>
					<a href="<?= site_url('administrator/gaji/edit/'.$key->id) ?>" class="btn btn-outline-info btn-sm">
						Edit
					</a>
				</td>
			</tr>
		<?php endforeach ?>

		<tr>
			<td colspan="2" class="font-weight-bold">Total</td>
			<td class="text-right"><?= $total_gaji_pokok ?></td>
			<td class="text-right"><?= $total_tunjangan ?></td>
			<td class="text-right"><?= $total_gaji_pokok + $total_tunjangan ?></td>
			<td></td>
		</tr>
		
	</table>
</div>
</body>
</html>