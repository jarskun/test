<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="card mb-5" style="max-width: 1200px;">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/'); ?>assets/images/faces/propil.png" class="card-img">
                    </div>

                    <div class="col-md-10">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item text text-black">nama : <?= $user['nama']; ?></li>
                                <li class="list-group-item text text-black">email : <?= $user['email']; ?></li>
                                <li class="list-group-item text text-black">nomor telepon : <?= $user['no_tel']; ?></li>
                                <li class="list-group-item text text-black">tanggal lahir : <?= $user['tanggal']; ?></li>
                                <li class="list-group-item text text-black">alamat : <?= $user['alamat']; ?></li>
                            </ul>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>