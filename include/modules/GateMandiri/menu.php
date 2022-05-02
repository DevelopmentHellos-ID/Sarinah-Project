<li class="nav-header">GATE MANDIRI</li>
<li class="has-sub <?= $uriSegments[1] == 'gm_pemasukan.php' ||
                        $uriSegments[1] == 'gm_pengeluaran.php'
                        ? 'active' : '' ?>">
    <a href="javascript:;">
        <b class="caret"></b>
        <i class="fas fa-door-open"></i>
        <span>Gate</span>
    </a>
    <ul class="sub-menu">
        <li class="<?= $uriSegments[1] == 'gm_pemasukan.php' ? 'active' : '' ?>">
            <a href="gm_pemasukan.php">Gate Pemasukan</a>
        </li>
        <li class="<?= $uriSegments[1] == 'gm_pengeluaran.php' ? 'active' : '' ?>">
            <a href="gm_pengeluaran.php">Gate Pengeluaran</a>
        </li>
    </ul>
</li>