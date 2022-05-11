<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/top-header.php";
include "include/sidebar.php";
include "include/cssDatatables.php";
?>
<?php
// CREATE NEW USER WEB
if (isset($_POST["add_manajemen_user_web"])) {

    $CEKusername = $_POST['username'];
    $cekQuery = $dbcon->query("SELECT USER_NAME FROM view_privileges WHERE USER_NAME='$CEKusername'");
    $vald_d = mysqli_fetch_array($cekQuery);

    if ($vald_d != NULL) {
        echo "<script>window.location.href='uti_user_manajemen_web.php?UUMWInputFailed=true';</script>";
    } else {
        if ($_POST['able_add'] != 'Y') {
            $able_add = 'N';
        } else {
            $able_add = 'Y';
        }

        if ($_POST['able_edit'] != 'Y') {
            $able_edit = 'N';
        } else {
            $able_edit = 'Y';
        }

        if ($_POST['able_delete'] != 'Y') {
            $able_delete = 'N';
        } else {
            $able_delete = 'Y';
        }

        if ($_POST['able_send'] != 'Y') {
            $able_send = 'N';
        } else {
            $able_send = 'Y';
        }

        if ($_POST['able_password'] != 'Y') {
            $able_password = 'N';
        } else {
            $able_password = 'Y';
        }

        // tbl_users
        $UNIQ                 = $_POST['UNIQ'];
        $username             = $_POST['username'];
        $password             = 'changeme';
        $DOKUMENBC23          = 'Y';
        $DOKUMENBC25          = 'Y';
        $able_add             = $able_add;
        $able_edit            = $able_edit;
        $able_delete          = $able_delete;
        $able_send            = $able_send;
        $able_password        = $able_password;
        // tbl_pegawai
        $foto                 = 'default-user-imge.jpeg';
        $username             = $_POST['username'];
        $role                 = $_POST['HakAkses'];
        $status               = '0';
        $created_by           = $_SESSION['username'];
        $created_date         = date('Y-m-d h:m:i');

        $query = $dbcon->query("INSERT INTO tbl_users
                               (ID,IDUNIQ,USER_NAME,PASSWORD,DOKUMENBC23,DOKUMENBC25,INSERT_DATA,UPDATE_DATA,DELETE_DATA,KIRIM_DATA,UPDATE_PASSWORD)
                               VALUES
                               ('','$UNIQ','$username','$password','$DOKUMENBC23','$DOKUMENBC25','$able_add','$able_edit','$able_delete','$able_send','$able_password')");

        $query .= $dbcon->query("INSERT INTO tbl_pegawai
                               (id_pegawai,foto,IDUNIQ,username,role,status,created_by,created_date)
                               VALUES
                               ('','$foto','$UNIQ','$username','$role','$status','$created_by','$created_date')");

        if ($query) {
            echo "<script>window.location.href='uti_user_manajemen_web.php?UUMWInputSuccess=true';</script>";
        } else {
            echo "<script>window.location.href='uti_user_manajemen_web.php?UUMWInputFailed=true';</script>";
        }
    }
}
// END CREATE NEW USER WEB

// DELETE NEW USER WEB
if (isset($_POST["NDeleteData"])) {

    $IDUNIQ             = $_POST['IDUNIQ'];

    $query = $dbcon->query("DELETE FROM tbl_users WHERE IDUNIQ='$IDUNIQ'");

    $query .= $dbcon->query("DELETE FROM tbl_pegawai WHERE IDUNIQ='$IDUNIQ'");

    if ($query) {
        echo "<script>window.location.href='uti_user_manajemen_web.php?DeleteSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='uti_user_manajemen_web.php?DeleteFailed=true';</script>";
    }
}
// END DELETE NEW USER WEB

?>
<!-- begin #content -->
<div id="content" class="content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fab fa-medapps icon-page"></i>
                <font class="text-page">Utility</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Utility</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">User Manajemen</a></li>
                <li class="breadcrumb-item active">User Web System</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="icon-copy dw dw-calendar-11"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>
    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-xl-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="ui-modal-notification-2">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> [User Manajemen] User Web System</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body">
                    <!-- css-button -->
                    <div class="css-button">
                        <?php include "modal/m_uti_user_manajemen_web.php"; ?>
                    </div>
                    <!-- end css-button -->
                    <!-- Alert -->
                    <div class="note note-secondary">
                        <div class="note-icon"><i class="fas fa-info"></i></div>
                        <div class="note-content">
                            <h4><b>Informasi!</b></h4>
                            <p> Jika users telah mengganti password, maka sistem akan menampilkan data <i>encrypt</i> <b>********</b>!</p>
                        </div>
                    </div>
                    <!-- End Alert -->
                    <div class="table-responsive">
                        <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>
                                    <th width="1%" data-orderable="false"></th>
                                    <th class="text-nowrap">Username</th>
                                    <th class="text-nowrap">Password</th>
                                    <th class="text-nowrap">Status</th>
                                    <th class="text-nowrap">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $UserLogin = $_SESSION['username'];
                                $dataTable = $dbcon->query("SELECT * FROM view_privileges ORDER BY ID DESC LIMIT 50");
                                if (mysqli_num_rows($dataTable) > 0) {
                                    $no = 0;
                                    while ($row = mysqli_fetch_array($dataTable)) {
                                        $no++;
                                ?>
                                        <tr class="odd gradeX">
                                            <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
                                            <td width="1%" class="with-img">
                                                <?php if ($row['foto'] == NULL || $row['foto'] == 'default-user-imge.jpeg') { ?>
                                                    <img src="assets/images/users/default-user-imge.jpeg" alt="Foto Profile" class="img-rounded height-30" />
                                                <?php } else { ?>
                                                    <img src="assets/images/users/<?= $row['foto'] ?>" alt="Foto Profile" class="img-rounded height-30" />
                                                <?php } ?>
                                            </td>
                                            <td><?= $row['USER_NAME'] ?></td>
                                            <td>
                                                <?php if ($row['PASSWORD'] == 'changeme' || $row['PASSWORD'] == NULL) { ?>
                                                    <?php if ($row['PASSWORD'] == NULL) { ?>
                                                        <font style="color: red;"><i>Empty</i></font>
                                                    <?php } else { ?>
                                                        <?= $row['PASSWORD'] ?>
                                                    <?php } ?>
                                                <?php } else { ?>
                                                    ********
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <!-- 0 = User Baru/Aktif -->
                                                <!-- 1 = User Non-Aktif -->
                                                <!-- 2 = User Resign -->
                                                <?php if ($row['status'] == 0) { ?>
                                                    <label class="label label-success">User Baru/Aktif</label>
                                                    <font style="font-size: 10px;"><?= $row['created_by'] ?> - <?= $row['created_date'] ?></font>
                                                <?php } else if ($row['status'] == 1) { ?>
                                                    <label class="label label-inverse">User Non-Aktif</label>
                                                    <font style="font-size: 10px;"><?= $row['created_by'] ?> - <?= $row['created_date'] ?></font>
                                                <?php } else if ($row['status'] == 2) { ?>
                                                    <label class="label label-info">User Resign - Out Date <?= $row['out_tgl'] ?></label>
                                                    <font style="font-size: 10px;"><?= $row['created_by'] ?> - <?= $row['created_date'] ?></font>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if ($_SESSION['username'] == $row['USER_NAME']) { ?>
                                                    <i>Lakukan perubahan pada halaman profile anda!</i> <a href="usr_profile.php"><b>Klik disini!</b></a>
                                                <?php } else { ?>
                                                    <a href="#updateData<?= $row['ID'] ?>" class="btn btn-sm btn-warning" data-toggle="modal" title="Update Data"><i class="fas fa-edit"></i></a>
                                                    <a href="#deleteData<?= $row['ID'] ?>" class="btn btn-sm btn-danger" data-toggle="modal" title="Hapus Data"><i class="fas fa-trash"></i></a>
                                                    <a href="uti_user_manajemen_web_resetpassword.php?USER=<?= $row['USER_NAME'] ?>" class="btn btn-sm btn-info" target="_blank" title="Reset Password"><i class="fas fa-lock"></i></a>
                                                    <?php if ($row['status'] == 0) { ?>
                                                        <a href="#disabledData<?= $row['ID'] ?>" class="btn btn-sm btn-inverse" data-toggle="modal" title="Non-Aktif Users"><i class="fas fa-ban"></i></a>
                                                    <?php } else if ($row['status'] == 1) { ?>
                                                        <a href="#enabledData<?= $row['ID'] ?>" class="btn btn-sm btn-success" data-toggle="modal" title="Aktif Users"><i class="fas fa-check"></i></a>
                                                    <?php } ?>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <!-- Update Data -->
                                        <!-- Add Users -->
                                        <div class="modal fade" id="updateData<?= $row['ID'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="uti_user_manajemen_web.php" method="POST">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">[Tambah Data] User Web System</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div style="margin-bottom: 10px;">
                                                                            <font style="font-size: 20px;font-weight: 700;"><i class="fas fa-user-check"></i> Sign In Detail</font>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IDUsername">Username <font style="color: red;">*</font></label>
                                                                            <input type="text" class="form-control" name="username" id="IDUsername" placeholder="Username ..." required />
                                                                            <input type="hidden" name="UNIQ" value="USR<?= date('my') ?><?= substr(uniqid(), 5); ?>" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IDPassword">Password</label>
                                                                            <input type="password" class="form-control" id="IDPassword" placeholder="Password ..." readonly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div style="margin-bottom: 10px;">
                                                                            <font style="font-size: 20px;font-weight: 700;"><i class="fas fa-user-cog"></i> Hak Akses</font>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IDRole">Hak Akses <font style="color: red;">*</font></label>
                                                                            <select type="text" class="form-control" name="HakAkses" id="IDRole" required>
                                                                                <option value="">-- Pilih Hak Akses --</option>
                                                                                <?php
                                                                                $resultHakAkses = $dbcon->query("SELECT role FROM tbl_role ORDER BY role ASC");
                                                                                foreach ($resultHakAkses as $rowHakAkses) {
                                                                                ?>
                                                                                    <option value="<?= $rowHakAkses['role'] ?>"><?= $rowHakAkses['role'] ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label class="col-md-3 col-form-label">Privileges</label>
                                                                        <div class="col-md-9">
                                                                            <div class="form-check form-check-inline">
                                                                                <input type="checkbox" name="able_add" value="Y" id="checkbox-inline-1" class="form-check-input" />
                                                                                <label class="form-check-label" for="checkbox-inline-1">Insert Data</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input type="checkbox" name="able_edit" value="Y" id="checkbox-inline-2" class="form-check-input" />
                                                                                <label class="form-check-label" for="checkbox-inline-2">Update Data</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input type="checkbox" name="able_delete" value="Y" id="checkbox-inline-3" class="form-check-input" />
                                                                                <label class="form-check-label" for="checkbox-inline-3">Hapus Data</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input type="checkbox" name="able_send" value="Y" id="checkbox-inline-4" class="form-check-input" />
                                                                                <label class="form-check-label" for="checkbox-inline-4">Kirim Data</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="checkbox checkbox-css m-b-20">
                                                                            <input type="checkbox" id="nf_checkbox_css_1" name="able_password" value="Y" />
                                                                            <label for="nf_checkbox_css_1">Klik jika User dapat melakukan update password secara mandiri.</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <font style="color: red;">*</font> <i>Wajib diisi.</i>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tutup</a>
                                                            <button type="submit" name="add_manajemen_user_web" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Update Data -->

                                        <!-- Delete Data -->
                                        <div class="modal fade" id="deleteData<?= $row['ID'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="" method="POST">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">[Hapus Data] User Web System - <?= $row['ID'] ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="alert alert-danger m-b-0">
                                                                <h5><i class="fa fa-info-circle"></i> Anda yakin akan menghapus data ini?</h5>
                                                                <p>Anda tidak akan melihat data ini lagi, data akan di hapus secara permanen pada sistem informasi TPB!<br><i>"Silahkan klik <b>Ya</b> untuk melanjutkan proses penghapusan data."</i></p>
                                                                <input type="hidden" name="IDUNIQ" value="<?= $row['USRIDUNIQ'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tidak</button>
                                                            <button type="submit" class="btn btn-danger" name="NDeleteData"><i class="fas fa-check-circle"></i> Ya</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Delete Data -->

                                        <!-- Enabled Data -->
                                        <!-- End Enabled Data -->

                                        <!-- Disbaled Data -->
                                        <!-- End Disbaled Data -->
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="6" style="display:grid;text-align: center;">
                                            <i class="far fa-times-circle no-data"></i> Tidak ada data
                                        </td>
                                    </tr>
                                <?php }
                                mysqli_close($dbcon); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->
<?php include "include/panel.php"; ?>
<?php include "include/footer.php"; ?>
<?php include "include/jsDatatables.php"; ?>
<!-- Add Success -->
<script type="text/javascript">
    // INSERT SUCCESS
    if (window?.location?.href?.indexOf('UUMWInputSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil disimpan!',
            icon: 'success',
            text: 'Data berhasil disimpan didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './uti_user_manajemen_web.php');
    }
    // INSERT FAILED
    if (window?.location?.href?.indexOf('UUMWInputFailed') > -1) {
        Swal.fire({
            title: 'Data gagal disimpan!',
            icon: 'error',
            text: 'Data gagal disimpan didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './uti_user_manajemen_web.php');
    }

    // RESET PASSWORD SUCCESS
    if (window?.location?.href?.indexOf('ResetPasswordSuccess') > -1) {
        Swal.fire({
            title: 'Password berhasil direset!',
            icon: 'success',
            text: 'Password berhasil direset didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './uti_user_manajemen_web.php');
    }
    // RESET PASSWORD FAILED
    if (window?.location?.href?.indexOf('ResetPasswordFailed') > -1) {
        Swal.fire({
            title: 'Password gagal direset!',
            icon: 'error',
            text: 'Password gagal direset didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './uti_user_manajemen_web.php');
    }

    // DELETE SUCCESS
    if (window?.location?.href?.indexOf('DeleteSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil dihapus!',
            icon: 'success',
            text: 'Data berhasil dihapus didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './uti_user_manajemen_web.php');
    }
    // DELETE FAILED
    if (window?.location?.href?.indexOf('DeleteFailed') > -1) {
        Swal.fire({
            title: 'Data gagal dihapus!',
            icon: 'error',
            text: 'Data gagal dihapus didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './uti_user_manajemen_web.php');
    }
</script>