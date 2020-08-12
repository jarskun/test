<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="card">
                                <div class="card-header">
                                    <h2>silahkan lihat daftar antrian</h2>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">selamat datang <?= $user['nama']; ?></h5>
                                    <h5 class="card-title float-right">jumlah antrian : <?= $jumlah; ?></h5>

                                    <?= $this->session->flashdata('message'); ?>
                                </div>
                            </div>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col"> no </th>
                                        <th scope="col">nama</th>
                                        <!-- <th scope="col"> jenis kendaraan </th>
                        <th scope="col"> merek kendaraan </th> -->
                                        <th scope="col"> tanggal booking </th>
                                        <th scope="col"> jam datang </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <tr>
                                        <?php $no = 1 ?>
                                        <?php foreach ($allantrian as $an) : ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        </th>
                                        <td> <?= $an['nama']; ?> </td>
                                        <!-- <td> <?= $an['id_kategori']; ?> </td>
                        <td> <?= $an['id_merek']; ?> </td> -->
                                        <td> <?= $an['date']; ?> </td>
                                        <td> <?= $an['time']; ?> </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>