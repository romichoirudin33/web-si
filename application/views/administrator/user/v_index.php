
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
		<a href="<?= site_url('administrator/user/tambah') ?>" class="btn btn-outline-primary btn-sm">
			Tambah
		</a>
	</div>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
			<th class="text-center">AKSI</th>
		</tr>
		
		<?php 
		$no = 0; 
		?>
		<?php foreach ($data as $key): ?>
			<tr>
				<td><?= $no+=1; ?></td>
				<td><?= $key->nama ?></td>
				<td><?= $key->username ?></td>
				<td><?= $key->email ?></td>
				<td class="text-center">
					<a href="<?= site_url('administrator/user/hapus/'.$key->id) ?>" class="btn btn-outline-danger btn-sm">
						Hapus
					</a>
					<a href="<?= site_url('administrator/user/edit/'.$key->id) ?>" class="btn btn-outline-info btn-sm">
						Edit
					</a>
				</td>
			</tr>
		<?php endforeach ?>			
	</table>
</div>
</body>
</html>