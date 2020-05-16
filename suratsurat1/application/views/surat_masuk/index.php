<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">Data Surat Masuk
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

            <a href="<?= base_url(); ?>surat_masuk/tambah" class="btn btn-primary"> Tambah Data </a>
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
        <div class="col-lg-12">
            <h2 class="text-center">Daftar Surat Masuk</h2>
            <!-- alert -->
            <?php if (empty($surat_masuk)) : ?>
                <div class="alert alert-danger" role="alert">Data Surat tidak ditemukan</div>
            <?php endif; ?>
            <table class="table table-striped">
                <tr style="background-color: darkolivegreen">
                    <td>Kode Surat</td>
                    <td>No Agenda</td>
                    <td>Isi Ringkasan</td>
                    <!-- <td>Asal_surat</td> -->
                    <td>No_surat</td>
                    <!-- <td>nama_instansi</td> -->
                    <td>Aksi</td>
                </tr>
                <?php foreach ($surat_masuk as $srt) : ?>
                    <tr>
                        <td><?= $srt['kode_surat']; ?></td>
                        <td><?= $srt['no_agenda']; ?></td>
                        <td><?= $srt['isi_ringkasan']; ?></td>
                        <td><?= $srt['no_surat']; ?></td>


                        <td>
                            <a href="<?= base_url(); ?>surat_masuk/hapus/<?= $srt['kode_surat']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                            <a href="<?= base_url(); ?>surat_masuk/edit/<?= $srt['kode_surat']; ?>" class="badge badge-success float-right">Edit</a>
                            <a href="<?= base_url(); ?>surat_masuk/detail/<?= $srt['kode_surat']; ?>" class="badge badge-primary float-right">Detail</a>
                        </td>

                    <?php endforeach; ?>
                    </tr>
            </table>

        </div>
    </div>
</div>