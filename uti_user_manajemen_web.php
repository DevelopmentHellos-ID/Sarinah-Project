<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
// include "include/alert.php";
include "include/top-header.php";
include "include/sidebar.php";
include "include/cssDatatables.php";

// CREATE NEW USER WEB
if (isset($_POST["add_manajemen_user_web"])) {

    $CEKusername = $_POST['username'];
    $cekQuery = $dbcon->query("SELECT USER_NAME FROM view_privileges WHERE USER_NAME='$CEKusername'");
    $vald_d = mysqli_fetch_array($cekQuery);

    if ($vald_d != NULL) {
        header("Location: ./uti_user_manajemen_web.php?InputFailed=true");
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
        $created_date         = date('Y-m-d h:m:a');

        $insertData = $dbcon->query("INSERT INTO tbl_users
                               (ID,USER_NAME,PASSWORD,DOKUMENBC23,DOKUMENBC25,INSERT_DATA,UPDATE_DATA,DELETE_DATA,KIRIM_DATA,UPDATE_PASSWORD)
                               VALUES
                               ('','$username','$password','$DOKUMENBC23','$DOKUMENBC25','$able_add','$able_edit','$able_delete','$able_send','$able_password')");

        $insertData .= $dbcon->query("INSERT INTO tbl_pegawai
                               (id_pegawai,foto,username,role,status,created_by,created_date)
                               VALUES
                               ('','$foto','$username','$role','$status','$created_by','$created_date')");

        if ($insertData) {
            header("Location: ./uti_user_manajemen_web.php?InputSuccess=true");
        } else {
            header("Location: ./uti_user_manajemen_web.php?InputFailed=true");
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
                    <div class="table-responsive">
                        <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>
                                    <th width="1%" data-orderable="false"></th>
                                    <th class="text-nowrap">Username</th>
                                    <th class="text-nowrap">Password</th>
                                    <th class="text-nowrap">NIP/NIK</th>
                                    <th class="text-nowrap">Nama Lengkap</th>
                                    <th class="text-nowrap">Detail</th>
                                    <th class="text-nowrap">Status</th>
                                    <th class="text-nowrap">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $result = $dbcon->query("SELECT * FROM view_privileges ORDER BY ID DESC LIMIT 50");
                                if (mysqli_num_rows($result) > 0) {
                                    $no = 0;
                                    while ($row = mysqli_fetch_array($result)) {
                                        $no++;
                                ?>
                                        <tr class="odd gradeX">
                                            <td width="1%" class="f-s-600 text-inverse"><?= $no ?></td>
                                            <td width="1%" class="with-img"><img src="assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                            <td><?= $row['USER_NAME'] ?></td>
                                            <td><?= $row['PASSWORD'] ?></td>
                                            <td><?= $row['NIP'] ?>/<?= $row['NIK'] ?></td>
                                            <td><?= $row['nama_lengkap'] ?></td>
                                            <td>detail</td>
                                            <td>status</td>
                                            <td>aksi</td>
                                        </tr>
                                <?php }
                                } else {
                                    echo "<tr>";
                                    echo "<td colspan='4' align='center'><b><i>" . "No Available Record" . "</i></b></td>";
                                    echo "</tr>";
                                }
                                mysqli_close($dbcon);
                                ?>
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
    if (window?.location?.href?.indexOf('InputSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil disimpan!',
            icon: 'success',
            text: 'Data berhasil disimpan didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './uti_user_manajemen_web.php');
    }

    if (window?.location?.href?.indexOf('InputFailed') > -1) {
        Swal.fire({
            title: 'Data gagal disimpan!',
            icon: 'error',
            text: 'Data gagal disimpan didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './uti_user_manajemen_web.php');
    }
</script>