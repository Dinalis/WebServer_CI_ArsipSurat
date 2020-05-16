<div class="container">
	<div class="card">
		<div class="card-header">
			Form Tambah Data Surat Keluar
		</div>
		<div class="card-body">
			<?php if (validation_errors()) : ?>
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			<?php endif ?>
			<form action="" method="POST">
				<div class="form-group">
					<label for="nomor_instansi">Asal Surat</label>
					<select name="nomor_instansi" id="nomor_instansi">
						<option selected> Pilih Asal Surat</option>
						<?php foreach ($instansi as $key) : ?>
							<option value="<?= $key['nomor_instansi'] ?>"><?= $key['nama_instansi'] ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			
				<div class="form-group">
					<label for="no_surat">No_surat</label>
					<input type="number" class="form-control" id="no_surat" name="no_surat">
				</div>
				<div class="form-group">
					<label for="tgl_surat">Tanggal_Surat</label>
					<input type="date" class="form-control" id="tgl_surat" name="tgl_surat">
				</div>
				<div class="form-group">
					<label for="isi_ringkasan">Isi_Ringkasan</label>
					<input type="text" class="form-control" id="isi" name="isi_ringkasan">
				</div>

				<button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
			</form>
		</div>
	</div>
</div>