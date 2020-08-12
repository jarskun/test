<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="card">
                                <div class="card-header">
                                    kelola data user
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">selamat datang <?= $user['nama']; ?></h5>
                                    <h5 class="card-title float-right">jumlah user : <?= $jumlah; ?></h5>

                                    <?= $this->session->flashdata('message'); ?>
                                </div>
                            </div>


                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> no </th>
                                        <th> nama </th>
                                        <th> email </th>
                                        <th> role </th>
                                        <th> aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <tr>
                                        <?php $no = 1 ?>
                                        <?php foreach ($allUser as $u) : ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $u['nama'] ?></td>
                                        <td><?= $u['email'] ?></td>
                                        <td><?= $u['role'] ?></td>

                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary editButton" data-toggle="modal" data-target="#exampleModal" data-id="<?= $u['id']; ?>">
                                                edit role
                                            </button> |
                                            <a href="<?= base_url('user/hapus/') . $u['id']; ?>" class="btn btn-danger">hapus data</a>
                                        </td>
                                    </tr>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </tr>
            </tr>
            </table>
            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <form action="<?= base_url('user/editRole') ?>" method="post">
                                <input type="hidden" name="id" id="hiddenRole">
                        </div>
                        <div class="modal-body">
                            <select class="custom-select" name="role">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>