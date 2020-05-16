<div class="container mt-4">
	<div class="card">
		<div class="card-header">
			Edit User
		</div>
		<div class="card-body">
			<form action="<?= base_url('surat_masuk/useredit/').$user['id_user'] ?>" method="POST">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" />
		            <span class="text-danger"><?php echo form_error('username');?></span>
				</div>
				<div class="form-group">
					<label for="level">Level</label>
					<select name="level" class="form-control">
                        <option value="<?= $user['level'] ?>"><?= $user['level'] ?></option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <?= form_error('level','<div class="text-small text-danger">','</div>') ?>
					</select>
				</div>
				<div class="form-group">
					<label for="status">Status</label>
					<select name="status" class="form-control">
                        <option value="<?= $user['status'] ?>"><?= $user['status'] ?></option>
                        <option value="aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                        <?= form_error('status','<div class="text-small text-danger">','</div>') ?>
					</select>
				</div>
				<button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
			</form>
		</div>
	</div>
</div>