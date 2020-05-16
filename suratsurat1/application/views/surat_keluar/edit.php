<div class="container">
	<div class="card">
		<div class="card-header">
			Form Merubah Data Surat Keluar
		</div>
		<div class="card-body">
			<?php if (validation_errors()) : ?>
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			<?php endif ?>
			<form action="" method="POST">
				<div class="form-group">
					<label for="no">No_surat</label>
					<input type="number" class="form-control" id="no_surat" value="<?= $surat_keluar->no_surat ?>"" name=" no_surat">
				</div>
				<div class="form-group">
					<label for="tgl">Tanggal surat</label>
					<input type="text" class="form-control" id="tgl_surat" value="<?= $surat_keluar->tgl_surat ?>"" name=" tgl_surat">
				</div>
				<div class=" form-group">
					<label for="isi">Isi Ringkasan</label>
					<input type="text" class="form-control" id="isi_ringkasan" value="<?= $surat_keluar->isi_ringkasan ?>"" name=" isi_ringkasan">
				</div>
				<div class="form-group">
					<label for="nomor_instansi">Kode_instansi</label>
					<select name="nomor_instansi" id="nomor_instansi">
						<option selected> Pilih Kode Instansi </option>
						<?php foreach ($instansi as $key) : ?>
							<option value="<?= $key['nomor_instansi'] ?>"><?= $key['nama_instansi'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>


				<button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
			</form>
		</div>
	</div>
</div>