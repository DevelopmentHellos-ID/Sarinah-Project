<?php
include "include/connection.php";
include "include/restrict.php";
include "include/head.php";
include "include/alert.php";
include "include/top-header.php";
include "include/sidebar.php";
include "include/cssDatatables.php";
include "include/cssForm.php";

// SEARCH
$TableName = '';
if (isset($_GET['find'])) {
    $TableName = $_GET['TableName'];
}
// END SEARCH

?>
<!-- begin #content -->
<div id="content" class="content">
    <div class="page-title-css">
        <div>
            <h1 class="page-header-css">
                <i class="fas fa-database icon-page"></i>
                <font class="text-page">DB Tabel TPB</font>
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">DB Tabel TPB</li>
            </ol>
        </div>
        <div>
            <button class="btn btn-primary-css"><i class="icon-copy dw dw-calendar-11"></i> <span id="ct"></span></button>
        </div>
    </div>
    <div class="line-page"></div>
    <!-- begin Select Tabel -->
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-filter"></i> Filter DB Tabel TPB</h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <form action="tbl_tpb.php" method="GET">
                        <fieldset>
                            <div class="form-group row m-b-15">
                                <label class="col-md-3 col-form-label">Pilih Tabel</label>
                                <div class="col-md-7">
                                    <select class="default-select2 form-control" name="TableName" required>
                                        <?php if ($TableName == NULL) { ?>
                                            <option value="">-- Pilih Tabel --</option>
                                            <?php
                                            $result = $dbcon->query("SELECT TABLE_NAME FROM view_select_table ORDER BY TABLE_NAME ASC");
                                            foreach ($result as $row) {
                                            ?>
                                                <option value="<?= $row['TABLE_NAME'] ?>"><?= $row['TABLE_NAME'] ?></option>
                                            <?php } ?>
                                        <?php } else { ?>
                                            <option value="<?= $TableName ?>"><?= $TableName ?></option>
                                            <option value="">-- Pilih Tabel --</option>
                                            <?php
                                            $result = $dbcon->query("SELECT TABLE_NAME FROM view_select_table ORDER BY TABLE_NAME ASC");
                                            foreach ($result as $row) {
                                            ?>
                                                <option value="<?= $row['TABLE_NAME'] ?>"><?= $row['TABLE_NAME'] ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-7 offset-md-3">
                                    <button type="submit" name="find" class="btn btn-sm btn-info m-r-5">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                    <a href="tbl_tpb.php" type="button" class="btn btn-sm btn-yellow m-r-5">
                                        <i class="fa fa-refresh"></i> Reset
                                    </a>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Select Tabel -->
    <!-- begin row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="ui-icons-1">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fas fa-info-circle"></i> [Data Tabel]
                        <font style="text-transform: uppercase;"><?= $TableName ?></font>
                    </h4>
                    <?php include "include/panel-row.php"; ?>
                </div>
                <div class="panel-body text-inverse">
                    <div class="table-responsive">
                        <table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
                            <thead>
                                <tr>
                                    <?php
                                    if (isset($_GET['find'])) { ?>
                                        <th class="text-nowrap">#</th>
                                        <?php
                                        $TableName = $_GET['TableName'];
                                        $columns = $dbcon->query("SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME='$TableName'");
                                        foreach ($columns as $columns_name) {
                                        ?>
                                            <th class="text-nowrap"><?= $columns_name['COLUMN_NAME'] ?></th>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <!-- <th class="text-nowrap"></th> -->
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($_GET['find'])) { ?>
                                    <?php
                                    $TableName = $_GET['TableName'];
                                    $data = $dbcon->query("SELECT * FROM $TableName");
                                    ?>
                                    <?php if (mysqli_num_rows($data) > 0) {
                                        $no = 0;
                                        while ($row_data = mysqli_fetch_array($data)) {
                                            $no++;
                                    ?>
                                            <tr class="odd gradeX">
                                                <td width="1%" class="f-s-600 text-inverse"><?= $no ?>.</td>
                                                <?php
                                                $columns = $dbcon->query("SELECT COLUMN_NAME FROM information_schema.columns WHERE TABLE_NAME='$TableName'");
                                                foreach ($columns as $columns_name) {
                                                ?>
                                                    <td class="text-nowrap"><?= $row_data[$columns_name['COLUMN_NAME']] ?></td>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>
                                    <?php } else { ?>
                                    <?php
                                    }
                                    mysqli_close($dbcon);
                                    ?>
                                <?php } else { ?>
                                    <tr class="odd gradeX">
                                        <td style="display:grid;text-align: center;">
                                            <i class="far fa-times-circle no-data"></i> Tidak ada data
                                        </td>
                                    </tr>
                                <?php } ?>
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
<?php include "include/jsForm.php"; ?>