<div class="container">
	<div class="card">
		<div class="card-header">
			Form Tambah Data Instansi
		</div>
		<div class="card-body">
			<?php if (validation_errors()) : ?>
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			<?php endif ?>
			<form action="" method="POST">
				<div class="form-group">
					<label for="nomor">Nomor Instansi</label>
					<input type="number" class="form-control" id="nomor_instansi" name="nomor_instansi">
				</div>
				<div class="form-group">
					<label for="nama">Nama Instansi</label>
					<input type="text" class="form-control" id="nama_instansi" name="nama_instansi">
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" class="form-control" id="alamat" name="alamat">
				</div>

				<button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
			</form>
		</div>
	</div>
</div>