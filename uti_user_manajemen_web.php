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
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> [User Manajemen] User Web System</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
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
                                    <th class="text-nowrap">Detail</th>
                                    <th class="text-nowrap">Status</th>
                                    <th class="text-nowrap">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $UserLogin = $_SESSION['username'];
                                $result = $dbcon->query("SELECT * FROM view_privileges ORDER BY ID DESC LIMIT 50");
                                if (mysqli_num_rows($result) > 0) {
                                    $no = 0;
                                    while ($row = mysqli_fetch_array($result)) {
                                        $no++;
                                ?>
                                        <tr class="odd gradeX">
                                            <td width="1%" class="f-s-600 text-inverse"><?= $no ?></td>
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
                                            <td>detail</td>
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
                                                <?php if ($access['USER_NAME'] == $row['USER_NAME']) { ?>
                                                    <i>Lakukan perubahan pada halaman profile anda!</i> <a href="usr_profile.php"><b>Klik disini!</b></a>
                                                <?php } else { ?>
                                                    <a href="#updateData<?= $row['ID'] ?>" class="btn btn-sm btn-warning" data-toggle="modal" title="Update Data"><i class="fas fa-edit"></i></a>
                                                    <a href="#deleteData<?= $row['ID'] ?>" class="btn btn-sm btn-danger" data-toggle="modal" title="Hapus Data"><i class="fas fa-trash"></i></a>
                                                    <a href="#passwordData<?= $row['ID'] ?>" class="btn btn-sm btn-info" data-toggle="modal" title="Ganti Password"><i class="fas fa-lock"></i></a>
                                                    <?php if ($row['status'] == 0) { ?>
                                                        <a href="#disabledData<?= $row['ID'] ?>" class="btn btn-sm btn-inverse" data-toggle="modal" title="Non-Aktif Users"><i class="fas fa-ban"></i></a>
                                                    <?php } else if ($row['status'] == 1) { ?>
                                                        <a href="#enabledData<?= $row['ID'] ?>" class="btn btn-sm btn-success" data-toggle="modal" title="Aktif Users"><i class="fas fa-check"></i></a>
                                                    <?php } ?>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <!-- Update Data -->
                                        <!-- End Update Data -->
                                        <!-- Delete Data -->
                                        <!-- End Delete Data -->
                                        <!-- Password Data -->
                                        <div class="modal fade" id="passwordData<?= $row['ID'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="uti_user_manajemen_web.php" method="POST">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">[Ganti Passowrd] User Web System - <?= $row['ID'] ?></h4>
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
                                                                            <label for="IDUsername">Username</label>
                                                                            <input type="text" class="form-control" name="username" id="IDUsername" placeholder="Username ..." value="<?= $row['USER_NAME'] ?>" readonly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IDPassword">Password</label>
                                                                            <input type="password" class="form-control" name="Nupdatepassword" id="IDPassword" placeholder="Password ..." required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tutup</a>
                                                            <button type="submit" name="updatepassword" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Password Data -->
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
        </div>
    </div>
    <!-- end row -->
    <?php include "include/creator.php"; ?>
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
</script>