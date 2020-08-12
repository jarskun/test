<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= base_url('image/ashole.png') ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">TRANSAKSI</h5>
                            <p class="card-text">nama pelanggan : <h5 class="card-title"><?= $user['nama']; ?></h5>
                            </p>
                            <p class="card-text">jumlah yang harus dibayar : <h5 class="card-title"><?= $kendaraan['nama_kategori']; ?></h5>
                            </p>
                            <p class="card-text">data kendaraan : <h5 class="card-title">no sim : <?= $kendaraan['sim']; ?></h5>
                            </p>



                            <p class="text text-danger">*silahkan transaksi dikasir</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>