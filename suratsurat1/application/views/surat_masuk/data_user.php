<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">Data User
                    <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-lg-12">
            <h2 class="text-center">Daftar User</h2>
            <table class="table table-striped">
                <tr style="background-color: darkolivegreen">
                    <td>No</td>
                    <td>Username</td>
                    <td>Level</td>
                    <!-- <td>Asal_surat</td> -->
                    <td>Status</td>
                    <!-- <td>nama_instansi</td> -->
                    <td>Aksi</td>
                </tr>
                <?php $no = 1 ?>
                <?php foreach($user as $u){ ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $u['username'] ?></td>
                        <td><?= $u['level'] ?></td>
                        <td><?= $u['status'] ?></td>
                        <td>
                            <a href="<?= base_url(); ?>surat_masuk/userhapus/<?= $u['id_user']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                            <a href="<?= base_url(); ?>surat_masuk/useredit/<?= $u['id_user']; ?>" class="badge badge-success float-right">Edit</a>
                        </td>

                    </tr>
                <?php } ?>
            </table>

        </div>
    </div>
</div>