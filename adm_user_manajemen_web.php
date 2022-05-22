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
        echo "<script>window.location.href='adm_user_manajemen_web.php?UUMWInputFailed=true';</script>";
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
        $foto                 = 'default-user-images.jpeg';
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
            echo "<script>window.location.href='adm_user_manajemen_web.php?UUMWInputSuccess=true';</script>";
        } else {
            echo "<script>window.location.href='adm_user_manajemen_web.php?UUMWInputFailed=true';</script>";
        }
    }
}
// END CREATE NEW USER WEB

// UPDATE NEW USER WEB
if (isset($_POST["NUpdateData"])) {

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

    $IDUNIQ               = $_POST['IDUNIQ'];
    $role                 = $_POST['HakAkses'];
    $able_add             = $able_add;
    $able_edit            = $able_edit;
    $able_delete          = $able_delete;
    $able_send            = $able_send;
    $able_password        = $able_password;

    $query = $dbcon->query("UPDATE tbl_users SET INSERT_DATA='$able_add',
                                                 UPDATE_DATA='$able_edit',
                                                 DELETE_DATA='$able_delete',
                                                 KIRIM_DATA='$able_send',
                                                 UPDATE_PASSWORD='$able_password'
                                                 WHERE IDUNIQ='$IDUNIQ'");

    $query .= $dbcon->query("UPDATE tbl_pegawai SET role='$role'
                                                    WHERE IDUNIQ='$IDUNIQ'");
    if ($query) {
        echo "<script>window.location.href='adm_user_manajemen_web.php?UpdateSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='adm_user_manajemen_web.php?UpdateFailed=true';</script>";
    }
}
// END UPDATE NEW USER WEB

// DELETE NEW USER WEB
if (isset($_POST["NDeleteData"])) {

    $IDUNIQ             = $_POST['IDUNIQ'];

    $query = $dbcon->query("DELETE FROM tbl_users WHERE IDUNIQ='$IDUNIQ'");

    $query .= $dbcon->query("DELETE FROM tbl_pegawai WHERE IDUNIQ='$IDUNIQ'");

    if ($query) {
        echo "<script>window.location.href='adm_user_manajemen_web.php?DeleteSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='adm_user_manajemen_web.php?DeleteFailed=true';</script>";
    }
}
// END DELETE NEW USER WEB

// ENABLED NEW USER WEB
if (isset($_POST["NEnabledData"])) {

    $IDUNIQ             = $_POST['IDUNIQ'];
    $status             = $_POST['status'];

    $query = $dbcon->query("UPDATE tbl_pegawai SET status='$status'
                                                    WHERE IDUNIQ='$IDUNIQ'");
    if ($query) {
        echo "<script>window.location.href='adm_user_manajemen_web.php?EnabledSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='adm_user_manajemen_web.php?EnabledFailed=true';</script>";
    }
}
// END ENABLED NEW USER WEB

// DISABLED NEW USER WEB
if (isset($_POST["NDisabledData"])) {

    $IDUNIQ             = $_POST['IDUNIQ'];
    $status             = $_POST['status'];

    $query = $dbcon->query("UPDATE tbl_pegawai SET status='$status'
                                                    WHERE IDUNIQ='$IDUNIQ'");

    if ($query) {
        echo "<script>window.location.href='adm_user_manajemen_web.php?DisabledSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='adm_user_manajemen_web.php?DisabledFailed=true';</script>";
    }
}
// END DISABLED NEW USER WEB

// RESIGN NEW USER WEB
if (isset($_POST["NResignData"])) {

    $IDUNIQ             = $_POST['IDUNIQ'];
    $status             = $_POST['status'];
    $out_tgl            = $_POST['out_tgl'];

    $query = $dbcon->query("UPDATE tbl_pegawai SET status='$status',
                                                    out_tgl='$out_tgl'
                                                    WHERE IDUNIQ='$IDUNIQ'");

    if ($query) {
        echo "<script>window.location.href='adm_user_manajemen_web.php?ResignSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='adm_user_manajemen_web.php?ResignFailed=true';</script>";
    }
}
// END RESIGN NEW USER WEB

// FUNCTION SEARCHING
$fusername = '';
if (isset($_GET['findOne'])) {
    $fusername = $_GET['fusername'];
}

$fHakAkses = '';
if (isset($_GET['findTwo'])) {
    $fHakAkses = $_GET['fHakAkses'];
}

$startdate = '';
$enddate = '';
if (isset($_GET['findThree'])) {
    $startdate = $_GET['startdate'];
    $enddate = $_GET['enddate'];
}
// END FUNCTION SEARCHING

if (isset($_GET['findOne']) != '') {
    $displayOne = 'show';
    $displayTwo = 'none';
    $displayThree = 'none';

    $selectOne = 'selected';
    $selectTwo = '';
    $selectThree = '';
} else if (isset($_GET['findTwo']) != '') {
    $displayOne = 'none';
    $displayTwo = 'show';
    $displayThree = 'none';

    $selectOne = '';
    $selectTwo = 'selected';
    $selectThree = '';
} else if (isset($_GET['findThree']) != '') {
    $displayOne = 'none';
    $displayTwo = 'none';
    $displayThree = 'show';

    $selectOne = '';
    $selectTwo = '';
    $selectThree = 'selected';
} else {
    $displayOne = 'show';
    $displayTwo = 'none';
    $displayThree = 'none';

    $selectOne = 'selected';
    $selectTwo = '';
    $selectThree = '';
}

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
            <button class="btn btn-primary-css"><i class="fas fa-calendar-alt"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>

    <!-- begin Search -->
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-filter"></i> Filter User Web System - by
                        <select type="text" id="findby" style="background: transparent;border-color: transparent;color:#fff;">
                            <option value="opone" style="color: #1d2226;" <?= $selectOne ?>>Username</option>
                            <option value="optwo" style="color: #1d2226;" <?= $selectTwo ?>>Hak Akses</option>
                            <option value="opthree" style="color: #1d2226;" <?= $selectThree ?>>Tanggal Created</option>
                        </select>
                    </h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <form action="" id="fformone" method="GET" style="display: <?= $displayOne ?>;">
                        <fieldset>
                            <div class="form-group row m-b-15">
                                <label class="col-md-3 col-form-label">Username</label>
                                <div class="col-md-7">
                                    <?php if ($fusername == '') { ?>
                                        <input type="text" class="form-control" name="fusername" placeholder="Username ...">
                                    <?php } else { ?>
                                        <input type="text" class="form-control" name="fusername" placeholder="Username ..." value="<?= $fusername; ?>">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <button type="submit" class="btn btn-sm btn-info m-r-5" name="findOne">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                    <a href="adm_user_manajemen_web.php" type="button" class="btn btn-sm btn-yellow m-r-5">
                                        <i class="fa fa-refresh"></i> Reset
                                    </a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" id="fformtwo" method="GET" style="display: <?= $displayTwo ?>;">
                        <fieldset>
                            <div class="form-group row m-b-15">
                                <label class="col-md-3 col-form-label">Hak Akses</label>
                                <div class="col-md-7">
                                    <select class="form-control" name="fHakAkses">
                                        <?php if ($fHakAkses == '') { ?>
                                            <option value="">-- Pilih Hak Akses --</option>
                                        <?php } else { ?>
                                            <option value="<?= $fHakAkses; ?>"><?= $fHakAkses; ?></option>
                                            <option value="">-- Pilih Hak Akses --</option>
                                        <?php } ?>
                                        <?php
                                        $findresultHakAkses = $dbcon->query("SELECT role FROM tbl_role ORDER BY role ASC");
                                        foreach ($findresultHakAkses as $findrowHakAkses) {
                                        ?>
                                            <option value="<?= $findrowHakAkses['role'] ?>"><?= $findrowHakAkses['role'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <button type="submit" class="btn btn-sm btn-info m-r-5" name="findTwo">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                    <a href="adm_user_manajemen_web.php" type="button" class="btn btn-sm btn-yellow m-r-5">
                                        <i class="fa fa-refresh"></i> Reset
                                    </a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <form action="" id="fformthree" class="form-inline" style="justify-content: center; display: <?= $displayThree ?>" method="GET">
                        <div class="form-group m-r-10">
                            <?php if ($startdate == '') { ?>
                                <input type="date" name="startdate" class="form-control" required>
                            <?php } else { ?>
                                <input type="date" name="startdate" class="form-control" value="<?= $startdate ?>">
                            <?php } ?>
                        </div>
                        <div class="form-check m-r-10">
                            <label class="form-check-label" for="inline_form_checkbox">s/d</label>
                        </div>
                        <div class="form-group m-r-10">
                            <?php if ($enddate == '') { ?>
                                <input type="date" name="enddate" class="form-control" required>
                            <?php } else { ?>
                                <input type="date" name="enddate" class="form-control" value="<?= $enddate ?>">
                            <?php } ?>
                        </div>
                        <button type="submit" class="btn btn-sm btn-info m-r-5" name="findThree"><i class="fa fa-search"></i> Search</button>
                        <a href="adm_user_manajemen_web.php" type="button" class="btn btn-sm btn-yellow"><i class="fa fa-refresh"></i> Reset</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search -->

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
                        <?php include "modal/m_adm_user_manajemen_web.php"; ?>
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
                    <!-- Data Count -->
                    <style>
                        @media (max-width: 1157px) {
                            #bg-all-record {
                                background-image: url('assets/images/users/92ru.gif');
                                background-repeat: no-repeat;
                                background-size: cover;
                                background-position: center;
                                color: #fff;
                            }

                            .all-record {
                                display: grid;
                                justify-content: space-between;
                                align-items: center;
                            }

                            .all-record-detail {
                                display: grid;
                                margin-bottom: 15px;
                            }
                        }
                    </style>
                    <div class="card-box" id="bg-all-record">
                        <div class="all-record">
                            <div class="all-record-detail">
                                <font style="font-size: 25px;font-weight: 600;"><i class="fas fa-users" style="font-weight: 800;"></i> Total Data</font>
                                <!-- QUERY -->
                                <?php
                                $q_count_total = $dbcon->query("SELECT COUNT(*) AS total_qct FROM tbl_users AS usr
                                                                LEFT JOIN tbl_pegawai AS peg ON usr.USER_NAME=peg.username
                                                                ORDER BY usr.ID DESC");
                                $result_qct = mysqli_fetch_array($q_count_total);
                                ?>
                                <font style="font-size: 16px;font-weight: 300;"><?= $result_qct['total_qct'] ?> User Web System</font>
                            </div>
                            <div class="all-record-detail">
                                <font style="font-size: 16px;font-weight: 600;"><?= date('Y') ?></font>
                                <div class="card_divider"></div>
                                <font style="font-size: 10px;font-weight: 300;"><?= date_indo(date('Y-m-d'), TRUE); ?></font>
                            </div>
                            <div class="all-record-detail">
                                <font style="font-size: 25px;font-weight: 600;"><i class="fas fa-user-check" style="font-weight: 800;"></i> Aktif</font>
                                <!-- QUERY -->
                                <?php
                                $q_count_aktif = $dbcon->query("SELECT COUNT(*) AS total_qca FROM tbl_users AS usr
                                                                LEFT JOIN tbl_pegawai AS peg ON usr.USER_NAME=peg.username
                                                                WHERE peg.status='0'
                                                                ORDER BY usr.ID DESC");
                                $result_qca = mysqli_fetch_array($q_count_aktif);
                                ?>
                                <font style="font-size: 16px;font-weight: 300;"><?= $result_qca['total_qca'] ?> User Web System</font>
                            </div>
                            <div class="all-record-detail">
                                <font style="font-size: 25px;font-weight: 600;"><i class="fas fa-user-slash" style="font-weight: 800;"></i> Non-Aktif</font>
                                <!-- QUERY -->
                                <?php
                                $q_count_nonaktif = $dbcon->query("SELECT COUNT(*) AS total_qcn FROM tbl_users AS usr
                                                                LEFT JOIN tbl_pegawai AS peg ON usr.USER_NAME=peg.username
                                                                WHERE peg.status='1'
                                                                ORDER BY usr.ID DESC");
                                $result_qcn = mysqli_fetch_array($q_count_nonaktif);
                                ?>
                                <font style="font-size: 16px;font-weight: 300;"><?= $result_qcn['total_qcn'] ?> User Web System</font>
                            </div>
                            <div class="all-record-detail">
                                <font style="font-size: 25px;font-weight: 600;"><i class="fas fa-user-minus" style="font-weight: 800;"></i> Resign</font>
                                <?php
                                $q_count_resign = $dbcon->query("SELECT COUNT(*) AS total_qcr FROM tbl_users AS usr
                                                                LEFT JOIN tbl_pegawai AS peg ON usr.USER_NAME=peg.username
                                                                WHERE peg.status='2'
                                                                ORDER BY usr.ID DESC");
                                $result_qcr = mysqli_fetch_array($q_count_resign);
                                ?>
                                <font style="font-size: 16px;font-weight: 300;"><?= $result_qcr['total_qcr'] ?> User Web System</font>
                            </div>
                        </div>
                    </div>
                    <!-- End Data Count -->
                    <div class="table-responsive">
                        <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>
                                    <th width="1%" data-orderable="false"></th>
                                    <th class="text-nowrap">Username</th>
                                    <th class="text-nowrap">Password</th>
                                    <th class="text-nowrap" style="text-align: center;">Hak Akses</th>
                                    <th class="text-nowrap">Status</th>
                                    <th class="text-nowrap">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $UserLogin = $_SESSION['username'];
                                if (isset($_GET['findOne'])) {
                                    // SEARCH BY USERNAME
                                    $fusername = $_GET['fusername'];
                                    $dataTable = $dbcon->query("SELECT usr.ID,usr.ID_MODUL,peg.id_pegawai,usr.DOKUMENBC23,usr.DOKUMENBC25,peg.foto,usr.IDUNIQ AS USRIDUNIQ,usr.USER_NAME,peg.username,usr.PASSWORD,peg.NIP,peg.NIK,peg.role,peg.nama_lengkap,peg.tempat_lahir,peg.tgl_lahir,peg.usia,peg.jenis_kelamin,peg.agama,peg.alamat,peg.no_hp,peg.email,peg.departemen,peg.jabatan,peg.join_tgl,peg.out_tgl,peg.status,usr.INSERT_DATA,usr.UPDATE_DATA,usr.DELETE_DATA,usr.KIRIM_DATA,usr.UPDATE_PASSWORD,peg.created_by,peg.created_date
                                                                FROM tbl_users AS usr
                                                                LEFT JOIN tbl_pegawai AS peg ON usr.USER_NAME=peg.username
                                                                WHERE usr.USER_NAME LIKE '%$fusername%'
                                                                ORDER BY usr.ID DESC");
                                } else if (isset($_GET['findTwo'])) {
                                    // SEARCH BY HAK AKSES
                                    $fHakAkses = $_GET['fHakAkses'];
                                    $dataTable = $dbcon->query("SELECT usr.ID,usr.ID_MODUL,peg.id_pegawai,usr.DOKUMENBC23,usr.DOKUMENBC25,peg.foto,usr.IDUNIQ AS USRIDUNIQ,usr.USER_NAME,peg.username,usr.PASSWORD,peg.NIP,peg.NIK,peg.role,peg.nama_lengkap,peg.tempat_lahir,peg.tgl_lahir,peg.usia,peg.jenis_kelamin,peg.agama,peg.alamat,peg.no_hp,peg.email,peg.departemen,peg.jabatan,peg.join_tgl,peg.out_tgl,peg.status,usr.INSERT_DATA,usr.UPDATE_DATA,usr.DELETE_DATA,usr.KIRIM_DATA,usr.UPDATE_PASSWORD,peg.created_by,peg.created_date
                                                                FROM tbl_users AS usr
                                                                LEFT JOIN tbl_pegawai AS peg ON usr.USER_NAME=peg.username
                                                                WHERE peg.role LIKE '%$fHakAkses%'
                                                                ORDER BY usr.ID DESC");
                                } else if (isset($_GET['findThree'])) {
                                    // SEARCH BY TANGGAL USER DIBUAT
                                    $startdate = $_GET['startdate'];
                                    $enddate   = $_GET['enddate'];
                                    $dataTable = $dbcon->query("SELECT usr.ID,usr.ID_MODUL,peg.id_pegawai,usr.DOKUMENBC23,usr.DOKUMENBC25,peg.foto,usr.IDUNIQ AS USRIDUNIQ,usr.USER_NAME,peg.username,usr.PASSWORD,peg.NIP,peg.NIK,peg.role,peg.nama_lengkap,peg.tempat_lahir,peg.tgl_lahir,peg.usia,peg.jenis_kelamin,peg.agama,peg.alamat,peg.no_hp,peg.email,peg.departemen,peg.jabatan,peg.join_tgl,peg.out_tgl,peg.status,usr.INSERT_DATA,usr.UPDATE_DATA,usr.DELETE_DATA,usr.KIRIM_DATA,usr.UPDATE_PASSWORD,peg.created_by,peg.created_date
                                                                FROM tbl_users AS usr
                                                                LEFT JOIN tbl_pegawai AS peg ON usr.USER_NAME=peg.username
                                                                WHERE peg.created_date BETWEEN '$startdate' AND '$enddate'
                                                                ORDER BY usr.ID DESC");
                                } else {
                                    $dataTable = $dbcon->query("SELECT usr.ID,usr.ID_MODUL,peg.id_pegawai,usr.DOKUMENBC23,usr.DOKUMENBC25,peg.foto,usr.IDUNIQ AS USRIDUNIQ,usr.USER_NAME,peg.username,usr.PASSWORD,peg.NIP,peg.NIK,peg.role,peg.nama_lengkap,peg.tempat_lahir,peg.tgl_lahir,peg.usia,peg.jenis_kelamin,peg.agama,peg.alamat,peg.no_hp,peg.email,peg.departemen,peg.jabatan,peg.join_tgl,peg.out_tgl,peg.status,usr.INSERT_DATA,usr.UPDATE_DATA,usr.DELETE_DATA,usr.KIRIM_DATA,usr.UPDATE_PASSWORD,peg.created_by,peg.created_date
                                                                FROM tbl_users AS usr
                                                                LEFT JOIN tbl_pegawai AS peg ON usr.USER_NAME=peg.username
                                                                ORDER BY usr.ID DESC");
                                }
                                if (mysqli_num_rows($dataTable) > 0) {
                                    $no = 0;
                                    while ($row = mysqli_fetch_array($dataTable)) {
                                        $no++;
                                ?>
                                        <tr class="odd gradeX">
                                            <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
                                            <td width="1%" class="with-img">
                                                <?php if ($row['foto'] == NULL || $row['foto'] == 'default-user-images.jpeg') { ?>
                                                    <img src="assets/images/users/default-user-images.jpeg" alt="Foto Profile" class="img-rounded height-30" />
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
                                            <td style="text-align: center;">
                                                <?= $row['role'] ?>
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
                                                    <a href="adm_user_manajemen_web_resetpassword.php?USER=<?= $row['USER_NAME'] ?>" class="btn btn-sm btn-info" target="_blank" title="Reset Password"><i class="fas fa-lock"></i></a>
                                                    <?php if ($row['status'] == 0) { ?>
                                                        <a href="#disabledData<?= $row['ID'] ?>" class="btn btn-sm btn-inverse" data-toggle="modal" title="Non-Aktif Users"><i class="fas fa-user-slash"></i></a>
                                                    <?php } else if ($row['status'] == 1) { ?>
                                                        <a href="#enabledData<?= $row['ID'] ?>" class="btn btn-sm btn-success" data-toggle="modal" title="Aktif Users"><i class="fas fa-user-check"></i></a>
                                                    <?php } ?>
                                                    <a href="#resignData<?= $row['ID'] ?>" class="btn btn-sm btn-secondary" data-toggle="modal" title="Resign Users"><i class="fas fa-user-minus"></i></a>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <!-- Update Data -->
                                        <div class="modal fade" id="updateData<?= $row['ID'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="" method="POST">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">[Update Data] User Web System - <?= $row['ID'] ?></h4>
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
                                                                            <input type="text" class="form-control" name="username" id="IDUsername" placeholder="Username ..." value="<?= $row['username'] ?>" readonly />
                                                                            <input type="hidden" name="IDUNIQ" value="<?= $row['USRIDUNIQ'] ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IDPassword">Password</label>
                                                                            <input type="password" class="form-control" id="IDPassword" placeholder="Password ..." value="<?= $row['PASSWORD'] ?>" readonly />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div style="margin-bottom: 10px;">
                                                                            <font style="font-size: 20px;font-weight: 700;"><i class="fas fa-user-cog"></i> Hak Akses</font>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IDRole">Hak Akses</label>
                                                                            <select type="text" class="form-control" name="HakAkses" id="IDRole" required>
                                                                                <option value="<?= $row['role'] ?>"><?= $row['role'] ?></option>
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
                                                                        <!-- INSERT_DATA,UPDATE_DATA,DELETE_DATA,KIRIM_DATA,UPDATE_PASSWORD -->
                                                                        <div class="col-md-9">
                                                                            <div class="form-check form-check-inline">
                                                                                <?php if ($row['INSERT_DATA'] == 'Y') { ?>
                                                                                    <?php $insert_checked = 'checked'; ?>
                                                                                <?php } else if ($row['INSERT_DATA'] == 'N') { ?>
                                                                                    <?php $insert_checked = ''; ?>
                                                                                <?php } ?>
                                                                                <input type="checkbox" name="able_add" value="Y" id="checkbox-inline-c-1" class="form-check-input" <?= $insert_checked; ?> />
                                                                                <label class="form-check-label" for="checkbox-inline-c-1">Insert Data</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <?php if ($row['UPDATE_DATA'] == 'Y') { ?>
                                                                                    <?php $update_checked = 'checked'; ?>
                                                                                <?php } else if ($row['UPDATE_DATA'] == 'N') { ?>
                                                                                    <?php $update_checked = ''; ?>
                                                                                <?php } ?>
                                                                                <input type="checkbox" name="able_edit" value="Y" id="checkbox-inline-c-2" class="form-check-input" <?= $update_checked; ?> />
                                                                                <label class="form-check-label" for="checkbox-inline-c-2">Update Data</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <?php if ($row['DELETE_DATA'] == 'Y') { ?>
                                                                                    <?php $delete_checked = 'checked'; ?>
                                                                                <?php } else if ($row['DELETE_DATA'] == 'N') { ?>
                                                                                    <?php $delete_checked = ''; ?>
                                                                                <?php } ?>
                                                                                <input type="checkbox" name="able_delete" value="Y" id="checkbox-inline-c-3" class="form-check-input" <?= $delete_checked; ?> />
                                                                                <label class="form-check-label" for="checkbox-inline-c-3">Hapus Data</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <?php if ($row['KIRIM_DATA'] == 'Y') { ?>
                                                                                    <?php $send_checked = 'checked'; ?>
                                                                                <?php } else if ($row['KIRIM_DATA'] == 'N') { ?>
                                                                                    <?php $send_checked = ''; ?>
                                                                                <?php } ?>
                                                                                <input type="checkbox" name="able_send" value="Y" id="checkbox-inline-c-4" class="form-check-input" <?= $send_checked; ?> />
                                                                                <label class="form-check-label" for="checkbox-inline-c-4">Kirim Data</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="checkbox checkbox-css m-b-20">
                                                                            <?php if ($row['UPDATE_PASSWORD'] == 'Y') { ?>
                                                                                <?php $pass_checked = 'checked'; ?>
                                                                            <?php } else if ($row['UPDATE_PASSWORD'] == 'N') { ?>
                                                                                <?php $pass_checked = ''; ?>
                                                                            <?php } ?>
                                                                            <input type="checkbox" id="nf_checkbox_css_c_1" name="able_password" value="Y" <?= $pass_checked; ?> />
                                                                            <label for="nf_checkbox_css_c_1">Klik jika User dapat melakukan update password secara mandiri.</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tutup</a>
                                                            <button type="submit" name="NUpdateData" class="btn btn-warning"><i class="fas fa-edit"></i> Update</button>
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
                                        <div class="modal fade" id="enabledData<?= $row['ID'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="" method="POST">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">[Aktif Data] User Web System - <?= $row['ID'] ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="alert alert-warning m-b-0">
                                                                <h5><i class="fa fa-info-circle"></i> Anda yakin akan melakukan aktif user ini?</h5>
                                                                <p>Jika anda melakukan aktif user, user akan dapat memulai <i>session</i> pada sistem informasi TPB!<br><i>"Silahkan klik <b>Aktif</b> untuk melanjutkan proses."</i></p>
                                                                <input type="hidden" name="status" value="0">
                                                                <input type="hidden" name="IDUNIQ" value="<?= $row['USRIDUNIQ'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tutup</a>
                                                            <button type="submit" class="btn btn-success" name="NEnabledData"><i class="fas fa-user-check"></i> Aktif</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Enabled Data -->

                                        <!-- Disbaled Data -->
                                        <div class="modal fade" id="disabledData<?= $row['ID'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="" method="POST">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">[Non-Aktif Data] User Web System - <?= $row['ID'] ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="alert alert-warning m-b-0">
                                                                <h5><i class="fa fa-info-circle"></i> Anda yakin akan melakukan non-aktif user ini?</h5>
                                                                <p>Jika anda melakukan non-aktif user, user tidak akan dapat memulai <i>session</i> pada sistem informasi TPB!<br><i>"Silahkan klik <b>Non-Aktif</b> untuk melanjutkan proses."</i></p>
                                                                <input type="hidden" name="status" value="1">
                                                                <input type="hidden" name="IDUNIQ" value="<?= $row['USRIDUNIQ'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tutup</a>
                                                            <button type="submit" class="btn btn-dark" name="NDisabledData"><i class="fas fa-user-slash"></i> Non-Aktif</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Disbaled Data -->

                                        <!-- Resign Data -->
                                        <div class="modal fade" id="resignData<?= $row['ID'] ?>">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form action="" method="POST">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">[Resign Users] User Web System - <?= $row['ID'] ?></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IDUsername">Username</label>
                                                                            <input type="text" class="form-control" name="username" id="IDUsername" placeholder="Username ..." value="<?= $row['username'] ?>" readonly />
                                                                            <input type="hidden" name="IDUNIQ" value="<?= $row['USRIDUNIQ'] ?>">
                                                                            <input type="hidden" name="status" value="2">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="IDOUtDate">Tanggal Resign</label>
                                                                            <input type="date" class="form-control" name="out_tgl" id="IDOUtDate" placeholder="Tanggal Resign ..." required />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tutup</a>
                                                            <button type="submit" name="NResignData" class="btn btn-secondary"><i class="fas fa-user-minus"></i> Resign</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Resign Data -->
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="7">
                                            <center>
                                                <div style="display: grid;">
                                                    <i class="far fa-times-circle no-data"></i> Tidak ada data
                                                </div>
                                            </center>
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
            text: 'Data berhasil disimpan didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }
    // INSERT FAILED
    if (window?.location?.href?.indexOf('UUMWInputFailed') > -1) {
        Swal.fire({
            title: 'Data gagal disimpan!',
            icon: 'error',
            text: 'Data gagal disimpan didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }

    // UPDATE SUCCESS
    if (window?.location?.href?.indexOf('UpdateSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil diupdate!',
            icon: 'success',
            text: 'Data berhasil diupdate didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }
    // UPDATE FAILED
    if (window?.location?.href?.indexOf('UpdateFailed') > -1) {
        Swal.fire({
            title: 'Data gagal diupdate!',
            icon: 'error',
            text: 'Data gagal diupdate didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }

    // DELETE SUCCESS
    if (window?.location?.href?.indexOf('DeleteSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil dihapus!',
            icon: 'success',
            text: 'Data berhasil dihapus didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }
    // DELETE FAILED
    if (window?.location?.href?.indexOf('DeleteFailed') > -1) {
        Swal.fire({
            title: 'Data gagal dihapus!',
            icon: 'error',
            text: 'Data gagal dihapus didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }

    // RESET PASSWORD SUCCESS
    if (window?.location?.href?.indexOf('ResetPasswordSuccess') > -1) {
        Swal.fire({
            title: 'Password berhasil direset!',
            icon: 'success',
            text: 'Password berhasil direset didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }
    // RESET PASSWORD FAILED
    if (window?.location?.href?.indexOf('ResetPasswordFailed') > -1) {
        Swal.fire({
            title: 'Password gagal direset!',
            icon: 'error',
            text: 'Password gagal direset didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }

    // ENABLED SUCCESS
    if (window?.location?.href?.indexOf('EnabledSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil diaktifkan!',
            icon: 'success',
            text: 'Data berhasil diaktifkan didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }
    // ENABLED FAILED
    if (window?.location?.href?.indexOf('EnabledFailed') > -1) {
        Swal.fire({
            title: 'Data gagal diaktifkan!',
            icon: 'error',
            text: 'Data gagal diaktifkan didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }

    // DISABLED SUCCESS
    if (window?.location?.href?.indexOf('DisabledSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil dinon-aktifkan!',
            icon: 'success',
            text: 'Data berhasil dinon-aktifkan didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }
    // DISABLED FAILED
    if (window?.location?.href?.indexOf('DisabledFailed') > -1) {
        Swal.fire({
            title: 'Data gagal dinon-aktifkan!',
            icon: 'error',
            text: 'Data gagal dinon-aktifkan didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }

    // RESIGN SUCCESS
    if (window?.location?.href?.indexOf('ResignSuccess') > -1) {
        Swal.fire({
            title: 'Status Resign user berhasil disimpan!',
            icon: 'success',
            text: 'Data Resign user berhasil disimpan didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }
    // RESIGN FAILED
    if (window?.location?.href?.indexOf('ResignFailed') > -1) {
        Swal.fire({
            title: 'Status Resign user gagal disimpan!',
            icon: 'error',
            text: 'Data Resign user gagal disimpan didalam <?= $alertAppName ?>!'
        })
        history.replaceState({}, '', './adm_user_manajemen_web.php');
    }
</script>

<script type="text/javascript">
    $(function() {
        $("#findby").change(function() {
            if ($(this).val() == "opone") {
                $("#fformone").show();
                $("#fformtwo").hide();
                $("#fformthree").hide();
            } else if ($(this).val() == "optwo") {
                $("#fformtwo").show();
                $("#fformone").hide();
                $("#fformthree").hide();
            } else if ($(this).val() == "opthree") {
                $("#fformthree").show();
                $("#fformone").hide();
                $("#fformtwo").hide();
            } else {
                $("#fformone").hide();
                $("#fformtwo").hide();
                $("#fformthree").hide();
            }
        });
    });
</script>