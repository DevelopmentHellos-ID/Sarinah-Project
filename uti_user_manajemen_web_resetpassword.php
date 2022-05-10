<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/top-header.php";
include "include/sidebar.php";

$GetData = $_GET['USER'];
$data = $dbcon->query("SELECT * FROM view_privileges WHERE USER_NAME='$GetData'");
$result = mysqli_fetch_array($data);

// RESET PASSWORD
if (isset($_POST["ResetPassword"])) {

    if ($_POST['othersPassword'] == NULL) {
        $NpassReset = 'changeme';
    } else {
        $NpassReset = $_POST['Nupdatepassword'];
    }

    $uid       = $_POST['ID'];

    $queryResetPass = $dbcon->query("UPDATE tbl_users SET PASSWORD='$NpassReset'
                                                          WHERE USER_NAME='$uid'");

    if ($queryResetPass) {
        echo "<script>window.location.href='uti_user_manajemen_web.php?ResetPasswordSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='uti_user_manajemen_web.php?ResetPasswordFailed=true';</script>";
    }
}
// END RESET PASSWORD
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
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> [Reset Password] User Web System - <?= $result['ID'] ?></h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <form action="" method="POST">
                        <div class="modal-header">
                            <font style="font-size: 20px;font-weight: 700;"><i class="fas fa-user-check"></i> Username: <?= $result['USER_NAME'] ?></font>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="margin-bottom: 10px;">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" onclick="myPasswordOthers()" class="custom-control-input" id="othersPassword" name="othersPassword" value="changeme">
                                            <input type="hidden" name="ID" value="<?= $result['USER_NAME'] ?>">
                                            <label class="custom-control-label" for="othersPassword"> Ceklis jika ingin merubah password bukan default! Password default: <b>"changeme"</b></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12" id="inputChangePassword" style="display: none;">
                                    <br>
                                    <div class="form-group">
                                        <label for="IDPassword">Reset Password</label>
                                        <input type="password" id="password" class="form-control" name="Nupdatepassword" id="IDPassword" placeholder="Password ..." />
                                    </div>
                                    <div class="checkbox checkbox-css">
                                        <input type="checkbox" id="ckb1" onclick="myFunction()" />
                                        <label for="ckb1">Lihat Password</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="ResetPassword" class="btn btn-info"><i class="fas fa-lock"></i> Reset Password</button>
                        </div>
                    </form>
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
<script type="text/javascript">
    // RESET PASSWORD
    function myPasswordOthers() {
        $('#othersPassword').change(function() {
            // this will contain a reference to the checkbox   
            if (this.checked) {
                $("#inputChangePassword").show();
            } else {
                $("#inputChangePassword").hide();
            }
        }).trigger('click');
    }
    // <!-- Show Password -->
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    // <!-- End Show Password -->
</script>