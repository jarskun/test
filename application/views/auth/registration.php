<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Register</h3>


                        <form method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <label>nama</label>
                                <input type="text" class="form-control p_input" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label>email</label>
                                <input type="email" class="form-control p_input" id="email" name="email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label>tanggal</label>
                                <input type="date" class="form-control p_input" id="tanggal" name="tanggal" value="<?= set_value('tanggal'); ?>">
                                <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label>alamat</label>
                                <input type="text" class="form-control p_input" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>">
                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label>no_tel</label>
                                <input type="text" class="form-control p_input" id="no_tel" name="no_tel" value="<?= set_value('no_tel'); ?>">
                                <?= form_error('no_tel', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control p_input" id="password" name="password" value="<?= set_value('password'); ?>">
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <br>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn">register</button>
                            </div>
                            <div class="d-flex">
                            </div>
                            <p class="sign-up text-center">Already have an Account?<a href="<?= base_url('auth'); ?>"> Sign Up</a></p>
                            <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>