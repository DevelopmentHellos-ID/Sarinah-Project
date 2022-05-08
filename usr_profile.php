<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/sidebar.php";
?>
<link rel="stylesheet" href="assets/profile/css/profile.css">
<style>
    .bg-profile-css {
        min-height: 489px;
        background-image: url('assets/profile/img/theme/bg-01.png');
        background-size: cover;
        background-position: center top;
        margin-top: -20px;
        margin-left: -30px;
        margin-right: -30px;
    }

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
                <h1 class="display-2 text-white">Hello, <?= $_SESSION['username'] ?></h1>
                <p class="text-white mt-0 mb-5">Ini adalah tampilan halaman profile anda. Di halaman profile, anda dapat melihat biodata dan status pengguna anda pada <br><b><i>Sistem Informasi Tempat Penimbunan Berikat (SI-TPB)</i></b>.</p>
                <a href="#!" class="btn btn-neutral-tf"><i class="icon-copy dw dw-calendar-11"></i> <span id="ct"></span></a>
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
                            <a href="#!" class="btn btn-sm btn-info-profile  mr-4 "><i class="icon-copy dw dw-password"></i> Ubah Password</a>
                            <a href="#!" target="_blank" class="btn btn-sm btn-default float-right"><i class="icon-copy dw dw-chat-4"></i> ...</a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="text-center">
                            <div class="garis-bio"></div>
                            <h5 class="h3">
                                <?= $_SESSION['username'] ?>. </h5>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Jakarta, Indonesia
                            </div>
                            <div class="garis-bio"></div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>...
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>Sarinah Persero
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
                                <a href="#!" class="btn btn-sm btn-danger-pdf"><i class="icon-copy fi-page-export-pdf"></i> PDF</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="#!" method="POST">
                            <div class="pl-lg-4">
                                <h6 class="heading-small text-muted mb-4">Informasi Pengguna</h6>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Username</label>
                                            <input type="text" class="form-control" placeholder="Username" name="user_name" id="input-username" value="<?= $access['USER_NAME'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-email">Email <font style="color: red;">*</font></label>
                                            <!-- Jika Email Diisi telah diverifikasi menunggu verifikasi dari token -->
                                            <div class="input-group bootstrap-NULL bootstrap-touchspin-injected">
                                                <input type="email" class="form-control" name="user_email" id="input-email" value="<?= $access['email'] ?>" placeholder="Email ...">
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
                                            <label class="form-control-label" for="input-nama-lengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" id="input-nama-lengkap" value="<?= $access['nama_lengkap'] ?>" placeholder="Nama Lengkap ..." disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-akses-dias">Hak Akses TPB</label>
                                            <input type="text" class="form-control" id="input-akses-dias" placeholder="Hak Akses TPB" value="<?= $access['role'] ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="btn-sisi" disabled><i class="fa fa-save"></i> Simpan</button>
                        </form>
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