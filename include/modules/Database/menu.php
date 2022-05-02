<li class="nav-header">DATABASE</li>
<li class="<?= $uriSegments[1] == 'tbl_tpb.php' ? 'active' : '' ?>">
    <a href="tbl_tpb.php">
        <?php
        $jumlah_table = $dbcon->query("SELECT view_tables FROM view_all_tables");
        $jt_query = mysqli_fetch_array($jumlah_table);
        ?>
        <span class="badge pull-right"><?= $jt_query['view_tables'] ?></span>
        <i class="fas fa-database"></i>
        <span>DB Tabel TPB</span>
    </a>
</li>