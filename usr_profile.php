<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/sidebar.php";
?>
<link rel="stylesheet" href="assets/profile/css/profile.css">
<?php if ($resultSetting['bg_profile'] == NULL) { ?>
    <style>
        .bg-profile-css {
            min-height: 489px;
            background-image: url('assets/images/profile/profile-default.png');
            background-size: cover;
            background-position: center top;
            margin-top: -20px;
            margin-left: -30px;
            margin-right: -30px;
        }
    </style>
<?php } else { ?>
    <style>
        .bg-profile-css {
            min-height: 489px;
            background-image: url('assets/images/profile/<?= $resultSetting['bg_profile']  ?>');
            background-size: cover;
            background-position: center top;
            margin-top: -20px;
            margin-left: -30px;
            margin-right: -30px;
        }
    </style>
<?php } ?>
<style>
    @media (max-width: 767.5px) {
        .bg-profile-css {
            margin-top: -20px;
            margin-left: -20px;
            margin-right: -20px;
        }
    }
</style>
<!-- begin #content -->
<div id="content" class="content">
    <!-- Profile Content -->
    <div class="header-profile pb-6 d-flex align-items-center bg-profile-css">
        <span class="mask bg-gradient-default opacity-8"></span>
        <div class="container-fluid d-flex align-items-center">
            <div class="hello">
                <?php
                $dataProfile = $dbcon->query("SELECT * FROM view_privileges");
                $resultProfile = mysqli_fetch_array($dataProfile);
                ?>
                <?php if ($resultProfile['nama_lengkap'] == NULL) { ?>
                    <h1 class="display-2 text-white">Hi, Belum dilengkapi!</h1>
                <?php } else { ?>
                    <h1 class="display-2 text-white">Hi, <?= $resultProfile['nama_lengkap'] ?>!</h1>
                <?php } ?>
                <?php if ($resultSetting['app_name'] == NULL) { ?>
                    <p class="text-white mt-0 mb-5">Ini adalah tampilan halaman profile anda. Di halaman profile, anda dapat melihat biodata dan status pengguna anda pada <br><b><i>App Name</i></b>.</p>
                <?php } else { ?>
                    <p class="text-white mt-0 mb-5">Ini adalah tampilan halaman profile anda. Di halaman profile, anda dapat melihat biodata dan status pengguna anda pada <br><b><i><?= $resultSetting['app_name'] ?></i></b>.</p>
                <?php } ?>
                <a href="#!" class="btn btn-neutral-tf"><i class="fas fa-calendar-alt"></i> <span id="ct"></span></a>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-4 order-xl-2">
                <div class="card card-profile">
                    <img src="assets/images/users/001.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <?php if ($accessSidebar['foto'] == NULL || $accessSidebar['foto'] == 'default-user-imge.jpeg') { ?>
                                        <img src="assets/images/users/default-user-imge.jpeg" class="rounded-circle" alt="Foto Profile" />
                                    <?php } else { ?>
                                        <img src="assets/images/users/<?= $accessSidebar['foto'] ?>" class="rounded-circle" alt="Foto Profile" />
                                    <?php } ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <br><br><br>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="usr_password.php" class="btn btn-sm btn-info-profile mr-4" target="_blank"><i class="fas fa-lock"></i> Ganti Password</a>
                            <a href="#!" target="_blank" class="btn btn-sm btn-default float-right"><i class="fas fa-user-circle"></i> Pictures</a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="text-center">
                            <div class="garis-bio"></div>
                            <?php if ($resultProfile['nama_lengkap'] == NULL) { ?>
                                <h5 class="h3">Belum dilengkapi!</h5>
                            <?php } else { ?>
                                <h5 class="h3"><?= $resultProfile['nama_lengkap'] ?></h5>
                            <?php } ?>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Jakarta, Indonesia
                            </div>
                            <div class="garis-bio"></div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>...
                            </div>
                            <div>
                                <i class="fas fa-building"></i>
                                <?php if ($resultSetting['company'] == NULL) { ?>
                                    Perusahaan
                                <?php } else { ?>
                                    <?= $resultSetting['company'] ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">
                                    <font style="font-weight: 200;">Perbarui</font> Profile
                                </h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#!" class="btn btn-sm btn-primary-profile"><i class="fas fa-edit"></i> Edit</a>
                                <a href="#!" class="btn btn-sm btn-danger-pdf"><i class="fas fa-file-pdf"></i> PDF</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if ($access['nama_lengkap'] == NULL) { ?>
                            <form action="#!" method="POST">
                                <h6 class="heading-small text-muted mb-4">Informasi Pengguna</h6>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Username</label>
                                            <input type="text" class="form-control" placeholder="Username" id="input-username" value="<?= $access['USER_NAME'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-akses-tpb">Hak Akses TPB</label>
                                            <input type="text" class="form-control" placeholder="Hak Akses TPB ..." id="input-akses-tpb" value="<?= $access['role'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">No. Handphone <font style="color: red;">*</font></label>
                                            <div class="input-group bootstrap-NULL bootstrap-touchspin-injected">
                                                <span class="input-group-btn input-group-append">
                                                    <a href="#!" class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Isi No. Handphone">+62</a>
                                                </span>
                                                <input type="text" class="form-control" name="InputNoHP" id="input-no-handphone" placeholder="No. Handphone ..." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email <font style="color: red;">*</font></label>
                                            <div class="input-group bootstrap-NULL bootstrap-touchspin-injected">
                                                <input type="email" class="form-control" name="InputEmail" id="input-email" placeholder="Email ..." value="<?= $access['email'] ?>" required>
                                                <span class="input-group-btn input-group-append">
                                                    <button class="btn btn-warning bootstrap-touchspin-profil" type="submit" data-toggle="tooltip" data-placement="top" title="Silahkan verifikasi link diemail anda"><i class="fas fa-paper-plane"></i></button>
                                                </span>
                                            </div>
                                            <p class="email-wait"><i>* Silahkan verifikasi link di email anda</i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-NIK">NIK <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="InputNIK" id="input-NIK" placeholder="NIK ..." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-NIP">NIP <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="InputNIP" id="input-NIP" placeholder="NIP ..." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nama-lengkap">Nama Lengkap <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="InputNamaLengkap" id="input-nama-lengkap" placeholder="Nama Lengkap ..." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tempat-lahir">Tempat Lahir <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="InputTempatLahir" id="input-tempat-lahir" placeholder="Tempat Lahir ..." required>
                                        </div>
                                    </div>
                                    <div class=" col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tanggal-lahir">Tanggal Lahir <font style="color: red;">*</font></label>
                                            <input type="date" class="form-control" name="InputTanggalLahir" id="input-tanggal-lahir" placeholder="Tanggal Lahir ..." required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-usia">Usia <font style="color: red;">*</font></label>
                                            <input type="text" class="form-control" name="InputUsia" id="input-usia" placeholder="Usia" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jenis-kelamin">Jenis Kelamin <font style="color: red;">*</font></label>
                                            <select class="form-control" name="InputJenisKelamin" id="input-jenis-kelamin" required>
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-agama">Agama <font style="color: red;">*</font></label>
                                            <select class="form-control" name="InputAgama" id="input-agama" required>
                                                <option value="">-- Pilih Agama --</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Kong Hu Cu">Kong Hu Cu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-alamat">Alamat <font style="color: red;">*</font></label>
                                            <textarea type="text" class="form-control" name="InputAlamat" id="input-alamat" placeholder="Alamat ..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-departmen">Departmen <font style="color: red;">*</font></label>
                                            <select class="form-control" name="InputDepartemen" id="input-departmen" required>
                                                <option value="">-- Pilih Departemen --</option>
                                                <?php
                                                $resultDepartment = $dbcon->query("SELECT department FROM tbl_department ORDER BY department ASC");
                                                foreach ($resultDepartment as $RowDepartment) {
                                                ?>
                                                    <option value="<?= $RowDepartment['department'] ?>"><?= $RowDepartment['department'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jabatan">Jabatan <font style="color: red;">*</font></label>
                                            <select class="form-control" name="InputJabatan" id="input-jabatan" required>
                                                <option value="">-- Pilih Jabatan --</option>
                                                <?php
                                                $resultJabatan = $dbcon->query("SELECT jabatan FROM tbl_jabatan ORDER BY jabatan ASC");
                                                foreach ($resultJabatan as $RowJabatan) {
                                                ?>
                                                    <option value="<?= $RowJabatan['jabatan'] ?>"><?= $RowJabatan['jabatan'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary" name="SaveInput" id="btn-sisi"><i class="fa fa-save"></i> Simpan</button>
                            </form>
                        <?php } else { ?>
                            <form action="#!" method="POST">
                                <h6 class="heading-small text-muted mb-4">Informasi Pengguna</h6>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Username</label>
                                            <input type="text" class="form-control" placeholder="Username" id="edit-username" value="<?= $access['USER_NAME'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-akses-tpb">Hak Akses TPB</label>
                                            <input type="text" class="form-control" placeholder="Hak Akses TPB ..." id="edit-akses-tpb" value="<?= $access['role'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">No. Handphone</label>
                                            <div class="input-group bootstrap-NULL bootstrap-touchspin-injected">
                                                <span class="input-group-btn input-group-append">
                                                    <a href="#!" class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Isi No. Handphone">+62</a>
                                                </span>
                                                <input type="text" class="form-control" name="EditNoHP" id="edit-no-handphone" placeholder="No. Handphone ..." disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email</label>
                                            <div class="input-group bootstrap-NULL bootstrap-touchspin-injected">
                                                <input type="email" class="form-control" name="EditEmail" id="edit-email" placeholder="Email ..." value="<?= $access['email'] ?>" disabled>
                                                <span class="input-group-btn input-group-append">
                                                    <button class="btn btn-warning bootstrap-touchspin-profil" type="submit" data-toggle="tooltip" data-placement="top" title="Silahkan verifikasi link diemail anda"><i class="fas fa-paper-plane"></i></button>
                                                </span>
                                            </div>
                                            <p class="email-wait"><i>* Silahkan verifikasi link di email anda</i></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-NIK">NIK</label>
                                            <input type="text" class="form-control" name="EditNIK" id="edit-NIK" placeholder="NIK ..." disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-NIP">NIP</label>
                                            <input type="text" class="form-control" name="EditNIP" id="edit-NIP" placeholder="NIP ..." disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nama-lengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="EditNamaLengkap" id="edit-nama-lengkap" placeholder="Nama Lengkap ..." disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tempat-lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="EditTempatLahir" id="edit-tempat-lahir" placeholder="Tempat Lahir ..." disabled>
                                        </div>
                                    </div>
                                    <div class=" col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tanggal-lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="EditTanggalLahir" id="edit-tanggal-lahir" placeholder="Tanggal Lahir ..." disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-usia">Usia</label>
                                            <input type="text" class="form-control" name="EditUsia" id="edit-usia" placeholder="Usia" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jenis-kelamin">Jenis Kelamin</label>
                                            <select class="form-control" name="EditJenisKelamin" id="edit-jenis-kelamin" disabled>
                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                <option value="Pria">Pria</option>
                                                <option value="Wanita">Wanita</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-agama">Agama</label>
                                            <select class="form-control" name="EditAgama" id="edit-agama" disabled>
                                                <option value="">-- Pilih Agama --</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen Protestan">Kristen Protestan</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Buddha">Buddha</option>
                                                <option value="Kong Hu Cu">Kong Hu Cu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-alamat">Alamat</label>
                                            <textarea type="text" class="form-control" name="EditAlamat" id="edit-alamat" placeholder="Alamat ..." disabled></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-departmen">Departmen</label>
                                            <select class="form-control" name="EditDepartemen" id="edit-departmen" disabled>
                                                <option value="">-- Pilih Departemen --</option>
                                                <?php
                                                $resultDepartment = $dbcon->query("SELECT department FROM tbl_department ORDER BY department ASC");
                                                foreach ($resultDepartment as $RowDepartment) {
                                                ?>
                                                    <option value="<?= $RowDepartment['department'] ?>"><?= $RowDepartment['department'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jabatan">Jabatan</label>
                                            <select class="form-control" name="EditJabatan" id="edit-jabatan" disabled>
                                                <option value="">-- Pilih Jabatan --</option>
                                                <?php
                                                $resultJabatan = $dbcon->query("SELECT jabatan FROM tbl_jabatan ORDER BY jabatan ASC");
                                                foreach ($resultJabatan as $RowJabatan) {
                                                ?>
                                                    <option value="<?= $RowJabatan['jabatan'] ?>"><?= $RowJabatan['jabatan'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-warning" name="SaveEdit" id="btn-sisi"><i class="fa fa-edit"></i> Edit</button>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Profile Content -->
    <?php include "include/creator.php"; ?>
</div>
<!-- end #content -->
<?php include "include/panel.php"; ?>
<?php include "include/footer.php"; ?>
<script type="text/javascript">
    // UPDATE SUCCESS
    if (window?.location?.href?.indexOf('UpdatePasswordSuccess') > -1) {
        Swal.fire({
            title: 'Password berhasil disimpan!',
            icon: 'success',
            text: 'Password berhasil disimpan didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './usr_profile.php');
    }
</script>