<div class="container">
	<div class="card">
		<div class="card-header">
			Form Tambah Data Surat
		</div>
		<div class="card-body">
		<?php if (validation_errors()) :?>
		<div class="alert alert-danger" role="alert">
			<?= validation_errors() ?>
		</div>
		<?php endif ?>
			<form action="" method="POST">
				<div class="form-group">
					<label for="kode">Kode_surat</label>
					<input type="number" class="form-control" id="kode_surat" name="Kode_surat">
				</div>
				<div class="form-group">
					<label for="tipe">Tipe_surat</label>
					<input type="text" class="form-control" id="tipe" name="tipe">
				</div>
				<div class="form-group">
					<label for="no_agenda">No_agenda</label>
					<input type="number" class="form-control" id="no_agenda" name="no_agenda">
				</div>
				<div class="form-group">
					<label for="isi">Isi_Ringkasan</label>
					<input type="text" class="form-control" id="isi" name="isi">
				</div>
				<div class="form-group">
					<label for="asal">Asal Surat</label>
					<input type="text" class="form-control" id="asal" name="asal">
				</div>
				<div class="form-group">
					<label for="no">No_Surat</label>
					<input type="number" class="form-control" id="no" name="no">
				</div>
				<div class="form-group">
					<label for="tgl">Tanggal_Surat</label>
					<input type="date" class="form-control" id="tgl" name="tgl">
				</div>
				<div class="form-group">
					<label for="tgl_diterima">Tanggal_Diterima</label>
					<input type="date" class="form-control" id="tgl_diterima" name="tgl_diterima">
				</div>
				<div class="form-group">
					<label for="penerima">Penerima</label>
					<input type="text" class="form-control" id="penerima" name="penerima">
				</div>
				<div class="form-group">
					<label for="kode">Kode_instansi</label>
					<input type="number" class="form-control" id="kode" name="kode">
					<select class="form-control" name="kode_instansi" id="kode_instansi" name="kode_instansi">
						<?php foreach($kode_instansi as $key) : ?>
							<option value="<?= $key ?>"
								selected><? $key ?>
							</option>
					<?php endforeach;?>
					</select>
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
			</form>
		</div>
	</div>
</div>

