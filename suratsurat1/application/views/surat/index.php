<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">Data Surat
                    <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-4">
        <div class="col-md-6">

            <a href="<?= base_url(); ?>Surat/tambah" class="btn btn-primary"> Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Surat" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Daftar Surat</h2>
            <!-- alert -->
            <?php if (empty($surat)) : ?>
                <div class="alert alert-danger" role="alert">Data Surat tidak ditemukan</div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($surat as $srt) : ?>
                    <li class="list-group-item"><?= $srt['kode_surat']; ?>
                        <a href="<?= base_url(); ?>surat/hapus/<?= $srt['kode_surat']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                        <a href="<?= base_url(); ?>surat/edit/<?= $srt['kode_surat']; ?>" class="badge badge-success float-right">Edit</a>
                        <a href="<?= base_url(); ?>surat/detail/<?= $srt['kode_surat']; ?>" class="badge badge-primary float-right">Detail
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>