<li class="nav-header">REFERENSI</li>
<li class="has-sub <?= $uriSegments[1] == 'ref_tarif_hs.php' ||
                        $uriSegments[1] == 'ref_daftar_barang.php' ||
                        $uriSegments[1] == 'ref_kantor_beacukai.php' ||
                        $uriSegments[1] == 'ref_alat_angkut.php' ||
                        $uriSegments[1] == 'ref_edifact.php' ||
                        $uriSegments[1] == 'ref_pemasok.php' ||
                        $uriSegments[1] == 'ref_perusahaan.php' ||
                        $uriSegments[1] == 'ref_tempat_penimbunan.php'
                        ? 'active' : '' ?>">
    <a href="javascript:;">
        <b class="caret"></b>
        <i class="fas fa-book"></i>
        <span>Referensi</span>
    </a>
    <ul class="sub-menu">
        <li class="<?= $uriSegments[1] == 'ref_tarif_hs.php' ? 'active' : '' ?>">
            <a href="ref_tarif_hs.php">Tarif HS</a>
        </li>
        <li class="<?= $uriSegments[1] == 'ref_daftar_barang.php' ? 'active' : '' ?>">
            <a href="ref_daftar_barang.php">Daftar Barang</a>
        </li>
        <li class="<?= $uriSegments[1] == 'ref_kantor_beacukai.php' ? 'active' : '' ?>">
            <a href="ref_kantor_beacukai.php">Kantor Bea Cukai</a>
        </li>
        <li class="<?= $uriSegments[1] == 'ref_alat_angkut.php' ? 'active' : '' ?>">
            <a href="ref_alat_angkut.php">Alat Angkut</a>
        </li>
        <li class="<?= $uriSegments[1] == 'ref_edifact.php' ? 'active' : '' ?>">
            <a href="ref_edifact.php">Edifact</a>
        </li>
        <li class="<?= $uriSegments[1] == 'ref_pemasok.php' ? 'active' : '' ?>">
            <a href="ref_pemasok.php">Pemasok</a>
        </li>
        <li class="<?= $uriSegments[1] == 'ref_perusahaan.php' ? 'active' : '' ?>">
            <a href="ref_perusahaan.php">Perusahaan</a>
        </li>
        <li class="<?= $uriSegments[1] == 'ref_tempat_penimbunan.php' ? 'active' : '' ?>">
            <a href="ref_tempat_penimbunan.php">Tempat Penimbunan</a>
        </li>
    </ul>
</li>