<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">Data Instansi
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

            <a href="<?= base_url(); ?>instansi/tambah" class="btn btn-primary"> Tambah Data </a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Instansi" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col-lg-12">
            <h2 class="text-center">Daftar Instansi</h2>
            <!-- alert -->
            <?php if (empty($instansi)) : ?>
                <div class="alert alert-danger" role="alert">Data Instansi tidak ditemukan</div>
            <?php endif; ?>
            <table class="table table-striped">
                <tr style="background-color: darkolivegreen">
                    <td>Nomor Instansi</td>
                    <td>Nama Instansi</td>
                    <td>Alamat</td>
                    <td>Aksi</td>
                </tr>
                <?php foreach ($instansi as $ins) : ?>
                    <tr>
                        <td><?= $ins['nomor_instansi']; ?></td>
                        <td><?= $ins['nama_instansi']; ?></td>
                        <td><?= $ins['alamat']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>instansi/hapus/<?= $ins['nomor_instansi']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                            <a href="<?= base_url(); ?>instansi/edit/<?= $ins['nomor_instansi']; ?>" class="badge badge-success float-right">Edit</a>
                            <a href="<?= base_url(); ?>instansi/detail/<?= $ins['nomor_instansi']; ?>" class="badge badge-primary float-right">Detail</a>
                        </td>

                    <?php endforeach; ?>
                    </tr>
            </table>

        </div>
    </div>
</div>