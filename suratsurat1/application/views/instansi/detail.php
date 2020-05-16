<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<div class="card">
				<div class="card-header">
					Detail Surat Instansi
				</div>
				<table class="table table-striped">
					<tr style="background-color: sumary">
						<div class="card-body">
							<h5 class="card-title"><?= $instansi->nomor_instansi; ?></h5>
							<p class="card-text">
								<label for=""><b>Nama Instansi:</b></label><?= $instansi->nama_instansi;
																			['nama_instansi']; ?>
							</p>
							<p class="card-text">
								<label for=""><b>Alamat:</b></label><?= $instansi->alamat;
																	['alamat']; ?>
							</p>

							<a href="<?= base_url(); ?>surat_masuk" class="btn btn-primary">Kembali</a>
						</div>

			</div>
		</div>
	</div>
</div>