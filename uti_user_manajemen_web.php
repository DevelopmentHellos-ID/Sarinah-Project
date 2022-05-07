<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/header.php";
include "include/sidebar.php";
include "include/cssDatatables.php";
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
                        <!-- #modal-dialog -->
                        <a href="#modal-add" class="btn btn-sm btn-primary" data-toggle="modal"><i class="fas fa-plus-circle"></i> Tambah Data</a>
                        <div class="modal fade" id="modal-add">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">[Tambah Data] User Web System</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/" method="POST">
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div style="margin-bottom: 10px;">
                                                            <font style="font-size: 20px;font-weight: 700;"><i class="fas fa-user-check"></i> Sign In Detail</font>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IDUsername">Username</label>
                                                            <input type="text" class="form-control" id="IDUsername" placeholder="Username ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IDPassword">Password</label>
                                                            <input type="password" class="form-control" id="IDPassword" placeholder="Password ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IDRole">Hak Akses</label>
                                                            <select type="text" class="form-control" name="" id="IDRole">
                                                                <option value="">-- Pilih Hak Akses --</option>
                                                                <?php
                                                                $result = $dbcon->query("SELECT role FROM tbl_role ORDER BY role ASC");
                                                                foreach ($result as $HakAkses) {
                                                                ?>
                                                                    <option value="<?= $HakAkses['role'] ?>"><?= $HakAkses['role'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div style="margin-bottom: 10px;">
                                                            <font style="font-size: 20px;font-weight: 700;"><i class="fas fa-address-card"></i> Profile</font>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="IDFoto">Foto</label>
                                                            <input type="file" class="form-control" id="IDFoto" placeholder="Foto ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IDNIP">NIP</label>
                                                            <input type="number" class="form-control" id="IDNIP" placeholder="NIP ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IDNIK">NIK</label>
                                                            <input type="number" class="form-control" id="IDNIK" placeholder="NIK ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IDNamaLengkap">Nama Lengkap</label>
                                                            <input type="text" class="form-control" id="IDNamaLengkap" placeholder="Nama Lengkap ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="IDTempatLahir">Tempat Lahir</label>
                                                            <input type="text" class="form-control" id="IDTempatLahir" placeholder="Tempat Lahir ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="IDTglLahir">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" id="IDTglLahir" placeholder="Tanggal Lahir ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="IDUsia">Usia</label>
                                                            <input type="number" class="form-control" id="IDUsia" placeholder="Usia ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IDJenisKelamin">Jenis Kelamin</label>
                                                            <select type="text" class="form-control" name="" id="IDJenisKelamin">
                                                                <option value="">-- Pilih Jenis Kelamin --</option>
                                                                <option value="Pria">Pria</option>
                                                                <option value="Wanita">Wanita</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IDAgama">Agama</label>
                                                            <select type="text" class="form-control" name="" id="IDAgama">
                                                                <option value="">-- Pilih Agama --</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Protestan">Protestan</option>
                                                                <option value="Katolik">Katolik</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Buddha">Buddha</option>
                                                                <option value="Konghucu">Konghucu</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="IDAlamat">Alamat</label>
                                                            <textarea type="number" class="form-control" id="IDAlamat" placeholder="Alamat ..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IDTelepon">Telepon</label>
                                                            <div class="input-group m-b-10">
                                                                <div class="input-group-prepend"><span class="input-group-text">+62</span></div>
                                                                <input type="number" class="form-control" id="IDTelepon" placeholder="Telepon ..." />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="IDEmail">Email</label>
                                                            <div class="input-group m-b-10">
                                                                <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                                                                <input type="email" class="form-control" id="IDEmail" placeholder="Email ..." />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IDDepartment">Departemen</label>
                                                            <select type="text" class="form-control" name="" id="IDDepartment">
                                                                <option value="">-- Pilih Departemen --</option>
                                                                <?php
                                                                $result = $dbcon->query("SELECT department FROM tbl_department ORDER BY department ASC");
                                                                foreach ($result as $RowDepartment) {
                                                                ?>
                                                                    <option value="<?= $RowDepartment['role'] ?>"><?= $RowDepartment['department'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IDJabatan">Jabatan</label>
                                                            <select type="text" class="form-control" name="" id="IDJabatan">
                                                                <option value="">-- Pilih Jabatan --</option>
                                                                <?php
                                                                $result = $dbcon->query("SELECT jabatan FROM tbl_jabatan ORDER BY jabatan ASC");
                                                                foreach ($result as $RowJabatan) {
                                                                ?>
                                                                    <option value="<?= $RowJabatan['role'] ?>"><?= $RowJabatan['jabatan'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="IDTgBergabung">Tanggal Bergabung</label>
                                                            <input type="date" class="form-control" id="IDTgBergabung" placeholder="Tanggal Bergabung ..." />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="checkbox checkbox-css m-b-20">
                                                            <input type="checkbox" id="nf_checkbox_css_1" />
                                                            <label for="nf_checkbox_css_1">Check me out</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-white" data-dismiss="modal"><i class="fas fa-times-circle"></i> Tutup</a>
                                        <a href="javascript:;" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end css-button -->
                    <div class="table-responsive">
                        <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <th width="1%"></th>
                                    <th width="1%" data-orderable="false"></th>
                                    <th class="text-nowrap">Rendering engine</th>
                                    <th class="text-nowrap">Browser</th>
                                    <th class="text-nowrap">Platform(s)</th>
                                    <th class="text-nowrap">Engine version</th>
                                    <th class="text-nowrap">CSS grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td width="1%" class="f-s-600 text-inverse">1</td>
                                    <td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="img-rounded height-30" /></td>
                                    <td>Trident</td>
                                    <td>Internet Explorer 4.0</td>
                                    <td>Win 95+</td>
                                    <td>4</td>
                                    <td>X</td>
                                </tr>
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