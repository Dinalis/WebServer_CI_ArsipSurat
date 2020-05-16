<div class="container">
	<div class="card">
		<div class="card-header">
			Form Merubah Data Surat Masuk
		</div>
		<div class="card-body">
			<?php if (validation_errors()) : ?>
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			<?php endif ?>
			<form action="" method="POST">
				<div class="form-group">
					<label for="kode_surat">Kode_surat</label>
					<input type="number" class="form-control" id="kode_surat" value="<?= $surat_masuk->kode_surat ?>" name="Kode_surat">
				</div>
				<!-- <div class="form-group">
					<label for="tipe_surat">Tipe_surat</label>
					<input type="text" class="form-control" id="tipe" name="tipe">
				</div> -->
				<div class="form-group">
					<label for="no_agenda">No_agenda</label>
					<input type="number" class="form-control" id="no_agenda" value="<?= $surat_masuk->no_agenda ?>" name="no_agenda">
				</div>
				<div class="form-group">
					<label for="isi_ringkasan">Isi_Ringkasan</label>
					<input type="text" class="form-control" id="isi" value="<?= $surat_masuk->isi_ringkasan ?>" name="isi_ringkasan">
				</div>
				<!-- <div class="form-group">
					<label for="asal_surat">Asal Surat</label>
					<input type="text" class="form-control" id="asal" name="asal">
				</div> -->
				<div class="form-group">
					<label for="no_surat">No_Surat</label>
					<input type="number" class="form-control" id="no" value="<?= $surat_masuk->no_surat ?>" name="no_surat">
				</div>
				<div class="form-group">
					<label for="tgl_surat">Tanggal_Surat</label>
					<input type="date" class="form-control" id="tgl" value="<?= $surat_masuk->tgl_surat ?>" name="tgl_surat">
				</div>
				<div class="form-group">
					<label for="tgl_diterima">Tanggal_Diterima</label>
					<input type="date" class="form-control" id="tgl_diterima" value="<?= $surat_masuk->tgl_diterima ?>" name="tgl_diterima">
				</div>
				<div class="form-group">
					<label for="penerima">Penerima</label>
					<input type="text" class="form-control" id="penerima" value="<?= $surat_masuk->penerima ?>" name="penerima">
				</div>
				<div class="form-group">
					<label for="kode">Nomor_instansi</label>
					<!-- <input type="number" class="form-control" id="nomer" name="nomer"> -->
					<select class="form-control" name="nomor_instansi" id="nomor_instansi" name="nomor_instansi">
						<option selected>Choose One</option>
						<?php foreach ($instansi as $key) : ?>
							<option value="<?= $key['nomor_instansi'] ?>"><?= $key['nama_instansi'] ?></option>
							</option>
						<?php endforeach; ?>
					</select>
				</div>

				<button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
			</form>
		</div>
	</div>
</div>