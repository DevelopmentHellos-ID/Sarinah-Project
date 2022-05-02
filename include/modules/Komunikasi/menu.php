<li class="nav-header">KOMUNIKASI</li>
<li class="has-sub <?= $uriSegments[1] == 'kom_kirim_data.php' ||
                        $uriSegments[1] == 'kom_kirim_dokumen.php' ||
                        $uriSegments[1] == 'kom_respon_perdokumen.php' ||
                        $uriSegments[1] == 'kom_respon_semua.php' ||
                        $uriSegments[1] == 'kom_transfer_data.php'
                        ? 'active' : '' ?>">
    <a href="javascript:;">
        <b class="caret"></b>
        <i class="fas fa-paper-plane"></i>
        <span>Data</span>
    </a>
    <ul class="sub-menu">
        <li class="<?= $uriSegments[1] == 'kom_kirim_data.php' ? 'active' : '' ?>">
            <a href="kom_kirim_data.php">Kirim Data</a>
        </li>
        <li class="<?= $uriSegments[1] == 'kom_kirim_dokumen.php' ? 'active' : '' ?>">
            <a href="kom_kirim_dokumen.php">Kirim Dokumen</a>
        </li>
        <li class="<?= $uriSegments[1] == 'kom_respon_perdokumen.php' ? 'active' : '' ?>">
            <a href="kom_respon_perdokumen.php">Respon Per Dokumen</a>
        </li>
        <li class="<?= $uriSegments[1] == 'kom_respon_semua.php' ? 'active' : '' ?>">
            <a href="kom_respon_semua.php">Respon Semua</a>
        </li>
        <li class="<?= $uriSegments[1] == 'kom_transfer_data.php' ? 'active' : '' ?>">
            <a href="kom_transfer_data.php">Transfer Data</a>
        </li>
    </ul>
</li>