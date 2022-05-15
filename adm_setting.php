<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/top-header.php";
include "include/sidebar.php";
?>
<?php
// FOR ICON
// Save Icon
if (isset($_POST["SaveIcon"])) {
    $Iconnama = $_FILES['icon']['name'];
    $file_tmp = $_FILES['icon']['tmp_name'];

    move_uploaded_file($file_tmp, './assets/images/icon/' . $Iconnama);

    $query = $dbcon->query("UPDATE tbl_setting SET icon='$Iconnama'
                                               WHERE id='1'");

    if ($query) {
        echo "<script>window.location.href='adm_setting.php?InputIconSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='adm_setting.php?InputIconFailed=true';</script>";
    }
}
// Update Icon
if (isset($_POST["EditIcon"])) {
    $Iconnama = $_FILES['icon']['name'];
    $file_tmp = $_FILES['icon']['tmp_name'];

    move_uploaded_file($file_tmp, './assets/images/icon/' . $Iconnama);

    $query = $dbcon->query("UPDATE tbl_setting SET icon='$Iconnama'
                                               WHERE id='1'");

    if ($query) {
        echo "<script>window.location.href='adm_setting.php?InputIconSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='adm_setting.php?InputIconFailed=true';</script>";
    }
}

// FOR SETTING TEXT
// Save Setting Text
if (isset($_POST["SimpanSetting"])) {

    $title                 = $_POST['title'];
    $app_name              = $_POST['app_name'];
    $company               = $_POST['company'];
    $address               = $_POST['address'];
    $text_signin_one       = $_POST['text_signin_one'];
    $text_signin_two       = $_POST['text_signin_two'];
    $text_signin_detail    = $_POST['text_signin_detail'];
    $sd_one                = $_POST['sd_one'];
    $sd_two                = $_POST['sd_two'];
    $version               = $_POST['version'];
    $type                  = $_POST['type'];
    $dev_by                = $_POST['dev_by'];
    $dev_url               = $_POST['dev_url'];

    $query = $dbcon->query("INSERT INTO tbl_setting
                                        (id,title,app_name,company,address,text_signin_one,text_signin_two,text_signin_detail,sd_one,sd_two,version,type,dev_by,dev_url)
                                        VALUES
                                        ('','$title','$app_name','$company','$address','$text_signin_one','$text_signin_two','$text_signin_detail','$sd_one','$sd_two','$version','$release','$dev_by','$dev_url')");
    if ($query) {
        echo "<script>window.location.href='adm_setting.php?SaveSettingTextSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='adm_setting.php?SaveSettingTextFailed=true';</script>";
    }
}

// Update Setting Text
if (isset($_POST["EditSetting"])) {

    $title                 = $_POST['title'];
    $app_name              = $_POST['app_name'];
    $company               = $_POST['company'];
    $address               = $_POST['address'];
    $text_signin_one       = $_POST['text_signin_one'];
    $text_signin_two       = $_POST['text_signin_two'];
    $text_signin_detail    = $_POST['text_signin_detail'];
    $sd_one                = $_POST['sd_one'];
    $sd_two                = $_POST['sd_two'];
    $version               = $_POST['version'];
    $type                  = $_POST['type'];
    $dev_by                = $_POST['dev_by'];
    $dev_url               = $_POST['dev_url'];

    $query = $dbcon->query("UPDATE tbl_setting SET title='$title',
                                                   app_name='$app_name',
                                                   company='$company',
                                                   address='$address',
                                                   text_signin_one='$text_signin_one',
                                                   text_signin_two='$text_signin_two',
                                                   text_signin_detail='$text_signin_detail',
                                                   sd_one='$sd_one',
                                                   sd_two='$sd_two',
                                                   version='$version',
                                                   type='$type',
                                                   dev_by='$dev_by',
                                                   dev_url='$dev_url'
                                                   WHERE id='1'");
    if ($query) {
        echo "<script>window.location.href='adm_setting.php?UpdateSettingTextSuccess=true';</script>";
    } else {
        echo "<script>window.location.href='adm_setting.php?UpdateSettingTextFailed=true';</script>";
    }
}
// END FOR SETTING TEXT
?>
<!-- End Save Setting Text -->
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
                <li class="breadcrumb-item active">Setting App TPB</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="icon-copy dw dw-calendar-11"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>
    <!-- begin row -->
    <div class="row">
        <div class="col-xl-5">
            <div class="panel panel-inverse" data-sortable-id="data-pictures">
                <div class="panel-heading">
                    <h4 class="panel-title">[Administrator Tools] Pictures</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <?php
                    $data = $dbcon->query("SELECT * FROM tbl_setting");
                    $row = mysqli_fetch_array($data);
                    ?>
                    <!-- Icon -->
                    <?php if ($row['icon'] == NULL) { ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>Icon</label>
                                    <div style="display: flex;justify-content:center;">
                                        <img src="assets/images/icon/icon-default.png" alt="Icon">
                                    </div>
                                    <input type="file" class="form-control" name="icon" required />
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="SaveIcon" class="btn btn-sm btn-primary"><i class="fa fa-images"></i> Upload</button>
                                </div>
                            </fieldset>
                        </form>
                    <?php } else { ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>Icon</label>
                                    <div style="display: flex;justify-content:center;">
                                        <img src="assets/images/icon/<?= $row['icon'] ?>" alt="Icon">
                                    </div>
                                    <input type="file" class="form-control" name="icon" value="<?= $row['icon'] ?>" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="EditIcon" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Update</button>
                                </div>
                            </fieldset>
                        </form>
                    <?php } ?>
                    <!-- End Icon -->
                    <!-- Logo -->
                    <?php if ($row['logo'] == NULL) { ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>Logo</label>
                                    <div style="display: flex;justify-content:center">
                                        <img src="assets/images/logo/logo-default.png" alt="Logo">
                                    </div>
                                    <input type="file" class="form-control" name="logo" required />
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="SaveLogo" class="btn btn-sm btn-primary"><i class="fa fa-images"></i> Upload</button>
                                </div>
                            </fieldset>
                        </form>
                    <?php } else { ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>Logo</label>
                                    <div style="display: flex;justify-content:center">
                                        <img src="assets/images/logo/<?= $row['logo'] ?>" alt="Logo">
                                    </div>
                                    <input type="file" class="form-control" name="logo" value="<?= $row['logo'] ?>" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="EditLogo" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Update</button>
                                </div>
                            </fieldset>
                        </form>
                    <?php } ?>
                    <!-- End Logo -->
                    <!-- Background Sign IN -->
                    <?php if ($row['bg_signin'] == NULL) { ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>Background Sign In</label>
                                    <div style="display: flex;justify-content:center; margin-bottom: 5px;">
                                        <img src="assets/images/bg-signin/signin-default.png" style="width: 160px;" alt="Background Sign In">
                                    </div>
                                    <input type="file" class="form-control" name="bg_signin" required />
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="SaveBgSignIn" class="btn btn-sm btn-primary"><i class="fa fa-images"></i> Upload</button>
                                </div>
                            </fieldset>
                        </form>
                    <?php } else { ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>Background Sign In</label>
                                    <div style="display: flex;justify-content:center; margin-bottom: 5px;">
                                        <img src="assets/images/bg-signin/<?= $row['bg_signin'] ?>" style="width: 160px;" alt="Background Sign In">
                                    </div>
                                    <input type="file" class="form-control" name="bg_signin" value="<?= $row['bg_signin'] ?>" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="EditBgSignIn" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Update</button>
                                </div>
                            </fieldset>
                        </form>
                    <?php } ?>
                    <!-- End Background Sign IN -->
                    <!-- Background Sidebar -->
                    <?php if ($row['bg_sidebar'] == NULL) { ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>Background Sidebar</label>
                                    <div style="display: flex;justify-content:center; margin-bottom: 5px;">
                                        <img src="assets/images/sidebar/sidebar-default.png" style="width: 160px;" alt="Background Sidebar">
                                    </div>
                                    <input type="file" class="form-control" name="bg_sidebar" required />
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="SaveSidebar" class="btn btn-sm btn-primary"><i class="fa fa-images"></i> Upload</button>
                                </div>
                            </fieldset>
                        </form>
                    <?php } else { ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>Background Sidebar</label>
                                    <div style="display: flex;justify-content:center; margin-bottom: 5px;">
                                        <img src="assets/images/sidebar/<?= $row['bg_sidebar'] ?>" style="width: 160px;" alt="Background Sidebar">
                                    </div>
                                    <input type="file" class="form-control" name="bg_sidebar" value="<?= $row['bg_sidebar'] ?>" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="SaveSidebar" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Update</button>
                                </div>
                            </fieldset>
                        </form>
                    <?php } ?>
                    <!-- End Background Profile -->
                    <!-- Background Profile -->
                    <?php if ($row['bg_profile'] == NULL) { ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>Background Profile</label>
                                    <div style="display: flex;justify-content:center; margin-bottom: 5px;">
                                        <img src="assets/images/profile/profile-default.png" style="width: 160px;" alt="Background Profile">
                                    </div>
                                    <input type="file" class="form-control" name="bg_profile" required />
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="SaveProfile" class="btn btn-sm btn-primary"><i class="fa fa-images"></i> Upload</button>
                                </div>
                            </fieldset>
                        </form>
                    <?php } else { ?>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <label>Background Profile</label>
                                    <div style="display: flex;justify-content:center; margin-bottom: 5px;">
                                        <img src="assets/images/profile/<?= $row['bg_profile'] ?>" style="width: 160px;" alt="Background Profile">
                                    </div>
                                    <input type="file" class="form-control" name="bg_profile" value="<?= $row['bg_profile'] ?>" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="SaveProfile" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Update</button>
                                </div>
                            </fieldset>
                        </form>
                    <?php } ?>
                    <!-- End Background Profile -->
                </div>
            </div>
        </div>
        <div class="col-xl-7">
            <div class="panel panel-inverse" data-sortable-id="data-table">
                <div class="panel-heading">
                    <h4 class="panel-title">[Administrator Tools] Setting App TPB</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <?php
                    $dataTwo = $dbcon->query("SELECT * FROM tbl_setting");
                    $rowTwo = mysqli_fetch_array($dataTwo);
                    ?>
                    <?php if ($rowTwo['id'] == NULL) { ?>
                        <form action="" method="POST">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Title ..." required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>App Name</label>
                                            <input type="text" class="form-control" name="app_name" placeholder="App Name ..." required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Nama Perusahaan</label>
                                            <input type="text" class="form-control" name="company" placeholder="Nama Perusahaan ..." required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Alamat Perusahaan</label>
                                            <textarea type="text" class="form-control" name="address" placeholder="Alamat Perusahaan ..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sign Name 1</label>
                                            <input type="text" class="form-control" name="text_signin_one" placeholder="Sign Name 1 ..." required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sign Name 2</label>
                                            <input type="text" class="form-control" name="text_signin_two" placeholder="Sign Name 2 ..." required />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Text Detail Sign In</label>
                                            <textarea type="text" class="form-control" name="text_signin_detail" placeholder="Text Detail Sign In ..." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sidebar Name 1</label>
                                            <input type="text" class="form-control" name="sd_one" placeholder="Sidebar Name 1 ..." required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sidebar Name 2</label>
                                            <input type="text" class="form-control" name="sd_two" placeholder="Sidebar Name 2 ..." required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Version</label>
                                            <input type="text" class="form-control" name="version" placeholder="Version ..." required />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control" name="type" required>
                                                <option value="">-- Pilih Type --</option>
                                                <option value="Alpha">Alpha</option>
                                                <option value="Beta">Beta</option>
                                                <option value="Release candidate (RC)">Release candidate (RC)</option>
                                                <option value="Stable">Stable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="dev_by" value="HellosID" required />
                                    <input type="hidden" class="form-control" name="dev_url" value="https://hellos-id.com/" required />
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-sm btn-primary" name="SimpanSetting"><i class="fa fa-save"></i> Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    <?php } else { ?>
                        <form action="" method="POST">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Title ..." value="<?= $rowTwo['title'] ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>App Name</label>
                                            <input type="text" class="form-control" name="app_name" placeholder="App Name ..." value="<?= $rowTwo['app_name'] ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Nama Perusahaan</label>
                                            <input type="text" class="form-control" name="company" placeholder="Nama Perusahaan ..." value="<?= $rowTwo['company'] ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Alamat Perusahaan</label>
                                            <textarea type="text" class="form-control" name="address" placeholder="Alamat Perusahaan ..."><?= $rowTwo['address'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sign Name 1</label>
                                            <input type="text" class="form-control" name="text_signin_one" placeholder="Sign Name 1 ..." value="<?= $rowTwo['text_signin_one'] ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sign Name 2</label>
                                            <input type="text" class="form-control" name="text_signin_two" placeholder="Sign Name 2 ..." value="<?= $rowTwo['text_signin_two'] ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Text Detail Sign In</label>
                                            <textarea type="text" class="form-control" name="text_signin_detail" placeholder="Text Detail Sign In ..."><?= $rowTwo['text_signin_detail'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sidebar Name 1</label>
                                            <input type="text" class="form-control" name="sd_one" placeholder="Sidebar Name 1 ..." value="<?= $rowTwo['sd_one'] ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sidebar Name 2</label>
                                            <input type="text" class="form-control" name="sd_two" placeholder="Sidebar Name 2 ..." value="<?= $rowTwo['sd_two'] ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Version</label>
                                            <input type="text" class="form-control" name="version" placeholder="Version ..." value="<?= $rowTwo['version'] ?>" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control" name="type" value="">
                                                <option value="<?= $rowTwo['type'] ?>"><?= $rowTwo['type'] ?></option>
                                                <option value="">-- Pilih Type --</option>
                                                <option value="Alpha">Alpha</option>
                                                <option value="Beta">Beta</option>
                                                <option value="Release candidate (RC)">Release candidate (RC)</option>
                                                <option value="Stable">Stable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="dev_by" value="HellosID" />
                                    <input type="hidden" class="form-control" name="dev_url" value="https://hellos-id.com/" />
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-sm btn-primary" name="EditSetting"><i class="fa fa-save"></i> Simpan</button>
                                        </div>
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
    // SAVED ICON SUCCESS
    if (window?.location?.href?.indexOf('InputIconSuccess') > -1) {
        Swal.fire({
            title: 'Icon berhasil disimpan!',
            icon: 'success',
            text: 'Icon berhasil disimpan didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './adm_setting.php');
    }
    // SAVED ICON FAILED
    if (window?.location?.href?.indexOf('InputIconFailed') > -1) {
        Swal.fire({
            title: 'Icon gagal disimpan!',
            icon: 'error',
            text: 'Icon gagal disimpan didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './adm_setting.php');
    }
    // SAVED SETTING TEXT SUCCESS
    if (window?.location?.href?.indexOf('SaveSettingTextSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil disimpan!',
            icon: 'success',
            text: 'Data berhasil disimpan didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './adm_setting.php');
    }
    // SAVED SETTING TEXT FAILED
    if (window?.location?.href?.indexOf('SaveSettingTextFailed') > -1) {
        Swal.fire({
            title: 'Data gagal disimpan!',
            icon: 'error',
            text: 'Data gagal disimpan didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './adm_setting.php');
    }

    // UPDATE SETTING TEXT SUCCESS
    if (window?.location?.href?.indexOf('UpdateSettingTextSuccess') > -1) {
        Swal.fire({
            title: 'Data berhasil diupdate!',
            icon: 'success',
            text: 'Data berhasil diupdate didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './adm_setting.php');
    }
    // UPDATE SETTING TEXT FAILED
    if (window?.location?.href?.indexOf('UpdateSettingTextFailed') > -1) {
        Swal.fire({
            title: 'Data gagal diupdate!',
            icon: 'error',
            text: 'Data gagal diupdate didalam sistem TPB Sarinah Persero!'
        })
        history.replaceState({}, '', './adm_setting.php');
    }
</script>