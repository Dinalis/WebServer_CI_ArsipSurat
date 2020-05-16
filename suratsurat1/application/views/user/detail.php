<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Detail Surat Masuk
				</div>
				<table class="table table-striped">
					<tr style="background-color: sumary">
						<div class="card-body">
							<h5 class="card-title"><?= $surat_masuk->kode_surat; ?></h5>
							<p class="card-text">
								<label for=""><b>No Agenda:</b></label><?= $surat_masuk->no_agenda;
																		['no_agenda']; ?>
							</p>
							<p class="card-text">
								<label for=""><b>Isi Ringkasan:</b></label><?= $surat_masuk->isi_ringkasan;
																			['isi_ringkasan']; ?>
							</p>
							<!--  -->
							<p class="card-text">
								<label for=""><b>No Surat:</b></label><?= $surat_masuk->no_surat;
																		['no_surat']; ?>
							</p>
							<p class="card-text">
								<label for=""><b>Tanggal Surat:</b></label><?= $surat_masuk->tgl_surat;
																			['tgl_surat']; ?>
							</p>
							<p class="card-text">
								<label for=""><b>Tanggal Diterima:</b></label><?= $surat_masuk->tgl_diterima;
																				['tgl_diterima']; ?>
							</p>
							<p class="card-text">
								<label for=""><b>Penerima:</b></label><?= $surat_masuk->penerima;
																		['penerima']; ?>
							</p>
							<p class="card-text">
								<label for=""><b>Nomor Instansi:</b></label><?= $surat_masuk->nomor_instansi;
																			['nomor_instansi']; ?>
							</p>
							<a href="<?= base_url(); ?>surat_masuk" class="btn btn-primary">Kembali</a>
						</div>

			</div>
		</div>
	</div>
</div>