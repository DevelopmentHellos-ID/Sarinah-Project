<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/top-header.php";
include "include/sidebar.php";
?>
<?php
// Saved
if (isset($_POST["SaveReload"])) {

    $reload                 = $_POST['reload'];

    $query = $dbcon->query("UPDATE tbl_realtime SET reload='$reload'
                                                   WHERE id='1'");
    if ($query) {
        echo "<script>window.location.href='adm_time_reload.php?SaveSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='adm_time_reload.php?SaveFailed=true';</script>";
    }
}

// Update
if (isset($_POST["EditReload"])) {

    $reload                 = $_POST['reload'];

    $query = $dbcon->query("UPDATE tbl_realtime SET reload='$reload'
                                                   WHERE id='1'");
    if ($query) {
        echo "<script>window.location.href='adm_time_reload.php?UpdateSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='adm_time_reload.php?UpdateFailed=true';</script>";
    }
}
?>
<!-- begin #content -->
<div id="content" class="content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fab fa-adn icon-page"></i>
                <font class="text-page">Administrator Tools</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript:;">Administrator Tools</a></li>
                <li class="breadcrumb-item active">Set. Real Time Reload</li>
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
            <div class="panel panel-inverse" data-sortable-id="data-table">
                <div class="panel-heading">
                    <h4 class="panel-title">[Administrator Tools] Set. Real Time Reload</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <?php
                    $data = $dbcon->query("SELECT * FROM tbl_realtime");
                    $row = mysqli_fetch_array($data);
                    ?>
                    <?php if ($row['id'] == NULL) { ?>
                        <form action="" method="POST">
                            <fieldset>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-3 col-form-label">Time Second</label>
                                    <div class="col-md-7">
                                        <input type="number" class="form-control" name="reload" value="<?= $row['reload'] ?>" placeholder="Time Second ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-7 offset-md-3">
                                        <button type="submit" class="btn btn-sm btn-primary m-r-5" name="EditReload"><i class="fa fa-save"></i> Simpan</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    <?php } else { ?>
                        <form action="" method="POST">
                            <fieldset>
                                <div class="form-group row m-b-15">
                                    <label class="col-md-3 col-form-label">Time Second</label>
                                    <div class="col-md-7">
                                        <input type="number" class="form-control" name="reload" value="<?= $row['reload'] ?>" placeholder="Time Second ...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-7 offset-md-3">
                                        <button type="submit" class="btn btn-sm btn-primary m-r-5" name="SaveReload"><i class="fa fa-save"></i> Simpan</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    <?php } ?>
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
    // SAVED SUCCESS
    if (window?.location?.href?.indexOf('SaveSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil disimpan!',
            icon: 'success',
            text: 'Data berhasil disimpan didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './adm_time_reload.php');
    }
    // SAVED FAILED
    if (window?.location?.href?.indexOf('SaveFailed') > -1) {
        Swal.fire({
            title: 'Data gagal disimpan!',
            icon: 'error',
            text: 'Data gagal disimpan didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './adm_time_reload.php');
    }

    // UPDATE SUCCESS
    if (window?.location?.href?.indexOf('UpdateSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil diupdate!',
            icon: 'success',
            text: 'Data berhasil diupdate didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './adm_time_reload.php');
    }
    // UPDATE FAILED
    if (window?.location?.href?.indexOf('UpdateFailed') > -1) {
        Swal.fire({
            title: 'Data gagal diupdate!',
            icon: 'error',
            text: 'Data gagal diupdate didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './adm_time_reload.php');
    }
</script>