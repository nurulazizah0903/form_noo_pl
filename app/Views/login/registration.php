<?= $this->extend('layouts/login_base') ?>

<?= $this->section('content') ?>
<div id="login-wrapper">
    <div>
        <div class="row mx-0 justify-content-between align-items-center">
            <div class="col-6">
                <div class="login-title text-light text-center">Welcome to PT. Pangan Lestari</div>
                <div class="sub-title text-center">Specialized Dry and Frozen Food.</div>
            </div>
            <div class="col-6">
                <div class="login-title text-center">Form Master Customer</div>
                <hr class="mx-auto border 2 opacity-100 border-dark" style="height:2px; width:25px">
                <div class="col-lg-9 col-md-10 col-sm-12 col-12 mx-auto mt-3" style="min-height:100%">
                    <div class="card shadow rounded-0">
                        <div class="card-body rounded-0">
                            <div class="container-fluid">
                                <form action="" id="login-form" method="POST">
                                    <?php if($session->getFlashdata('error')): ?>
                                        <div class="alert alert-danger rounded-0 mb-3">
                                            <?= $session->getFlashdata('error') ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if($session->getFlashdata('success')): ?>
                                        <div class="alert alert-success rounded-0 mb-3">
                                            <?= $session->getFlashdata('success') ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="mb-3">
                                        <label for="status-formulir" class="form-label tex-body">Status Formulir</label><br>
                                        
                                        <input type="radio" class="form-check-input" id="new-customer" name="status_formulir" value="new-customer" required>
                                        <label for="new-customer" class="form-check-label">New Customer</label><br>
                                        <input type="radio" class="form-check-input" id="kenaikan-credit-limit" name="status_formulir" value="kenaikan-credit-limit" required>
                                        <label for="kenaikan-credit-limit" class="form-check-label">Kenaikan Credit-Limit</label><br>
                                        <input type="radio" class="form-check-input" id="penurunan-credit-limit" name="status_formulir" value="penurunan-credit-limit" required>
                                        <label for="penurunan-credit-limit" class="form-check-label">Penurunan Credit-Limit</label><br>
                                        <input type="radio" class="form-check-input" id="penurunan-credit-limit" name="status_formulir" value="penurunan-credit-limit" required>
                                        <label for="penurunan-credit-limit" class="form-check-label">Perubahan Lainnya</label><br>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama-pemilik" class="form-label tex-body">Nama Pemilik / Pengelola</label>
                                        <input type="text" class="form-control rounded-0" id="nama-pemilik" name="nama_pemilik" required="required" placeholder="Nama Pemilik / Pengelola">
                                    </div>
                                    <div class="mb-3">
                                        <label for="provinsi" class="form-label tex-body">Provinsi</label>
                                        <input type="text" class="form-control rounded-0" id="provinsi" name="provinsi"placeholder="Provinsi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label tex-body">Alamat</label>
                                        <input type="text" class="form-control rounded-0" id="alamat" name="alamat"placeholder="Alamat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kelurahan" class="form-label tex-body">Kelurahan</label>
                                        <input type="text" class="form-control rounded-0" id="kelurahan" name="kelurahan" required="required" placeholder="Kelurahan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kecamatan" class="form-label tex-body">Kecamatan</label>
                                        <input type="text" class="form-control rounded-0" id="kecamatan" name="kecamatan" required="required" placeholder="Kecamatan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kabupaten" class="form-label tex-body">Kabupaten/Kota</label>
                                        <input type="text" class="form-control rounded-0" id="kabupaten" name="kabupaten" required="required" placeholder="Kabupaten/Kota">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kode-pos" class="form-label tex-body">Kode Pos</label>
                                        <input type="text" class="form-control rounded-0" id="kode-pos" name="kode_pos" required="required" placeholder="Kode Pos">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label tex-body">Email</label>
                                        <input type="email" class="form-control rounded-0" id="email" name="email" required="required" placeholder="mcooper@mail.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label tex-body">Password</label>
                                        <input type="password" class="form-control rounded-0" id="password" name="password" required="required" placeholder="*******">
                                    </div>
                                    <div class="mb-3">
                                        <span class="text-body fw-light"><small>Already have an Account?</small></span>
                                        <span><a href="<?= base_url() ?>"><small>Login Here</small></a></span>
                                    </div>
                                    <div class="mb-3">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12 mx-auto">
                                            <button class="btn btn-dark bg-gradient rounded-pill w-100 fw-bolder">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>