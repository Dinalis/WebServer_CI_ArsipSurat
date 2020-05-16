<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Detail Surat Keluar
				</div>
				<table class="table table-striped">
					<tr style="background-color: sumary">
						<div class="card-body">
							<h5 class="card-title"><?= $surat_keluar->no_surat;
													['no_surat']; ?></h5>
							<p class="card-text">
								<label for=""><b>Tanggal Surat:</b></label><?= $surat_keluar->tgl_surat;
																			['tgl_surat']; ?>
							</p>
							<p class="card-text">
								<label for=""><b>Isi Ringkasan:</b></label><?= $surat_keluar->isi_ringkasan;
																			['isi_ringkasan']; ?>
							</p>
							<p class="card-text">
								<label for=""><b>Nomor Instansi:</b></label><?= $surat_keluar->nomor_instansi;
																			['nomor_instansi']; ?>
							</p>

							<a href="<?= base_url(); ?>surat_keluar" class="btn btn-primary">Kembali</a>
						</div>

			</div>
		</div>
	</div>
</div>