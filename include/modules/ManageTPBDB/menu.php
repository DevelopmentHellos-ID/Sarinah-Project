<li class="nav-header">Manajemen Tabel TPB</li>
<li class="has-sub">
    <a href="javascript:;">
        <!-- SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = 'tpbdb' -->
        <?php
        $jumlah_table = $dbcon->query("SELECT view_tables FROM view_all_tables");
        $jt_query = mysqli_fetch_array($jumlah_table);
        ?>
        <span class="badge pull-right"><?= $jt_query['view_tables'] ?></span>
        <i class="fas fa-table"></i>
        <span>Tabel TPB</span>
    </a>
    <ul class="sub-menu">
        <li><a href="email_inbox.html">Inbox</a></li>
        <li><a href="email_compose.html">Compose</a></li>
        <li><a href="email_detail.html">Detail</a></li>
    </ul>
</li>