<li class="nav-header">UTILITY</li>
<li class="has-sub <?=
                    // Info Aktifasi
                    $uriSegments[1] == 'uti_ak_user.php' ||
                        $uriSegments[1] == 'uti_ak_version.php' ||
                        $uriSegments[1] == 'uti_ak_faq.php' ||
                        $uriSegments[1] == 'uti_ak_about.php' ||
                        // Back up
                        $uriSegments[1] == 'uti_backup.php' ||
                        // Restore
                        $uriSegments[1] == 'uti_restore.php' ||
                        // Hapus Data
                        $uriSegments[1] == 'uti_hapus_data.php' ||
                        // Restore Data Alama
                        $uriSegments[1] == 'uti_restore_data_lama.php' ||
                        // Setting
                        $uriSegments[1] == 'uti_set_notgl_aju.php' ||
                        $uriSegments[1] == 'uti_set_dokumen.php' ||
                        $uriSegments[1] == 'uti_set_database.php' ||
                        $uriSegments[1] == 'uti_set_server.php' ||
                        // User Manajemen
                        $uriSegments[1] == 'uti_user_manajemen_desktop.php' ||
                        $uriSegments[1] == 'uti_user_manajemen_web.php'
                        ? 'active' : '' ?>">
    <a href="javascript:;">
        <b class="caret"></b>
        <i class="fab fa-medapps"></i>
        <span>Utility</span>
    </a>
    <ul class="sub-menu">
        <li class="has-sub <?=
                            // Info Aktifasi
                            $uriSegments[1] == 'uti_ak_user.php' ||
                                $uriSegments[1] == 'uti_ak_version.php' ||
                                $uriSegments[1] == 'uti_ak_faq.php' ||
                                $uriSegments[1] == 'uti_ak_about.php'
                                ? 'active' : '' ?>">
            <a href="javascript:;"><b class="caret"></b> Info Aktifasi</a>
            <ul class="sub-menu">
                <li class="<?= $uriSegments[1] == 'uti_ak_user.php' ? 'active' : '' ?>">
                    <a href="uti_ak_user.php">User</a>
                </li>
                <li class="<?= $uriSegments[1] == 'uti_ak_version.php' ? 'active' : '' ?>">
                    <a href="uti_ak_version.php">Version</a>
                </li>
                <li class="<?= $uriSegments[1] == 'uti_ak_faq.php' ? 'active' : '' ?>">
                    <a href="uti_ak_faq.php">FAQ</a>
                </li>
                <li class="<?= $uriSegments[1] == 'uti_ak_about.php' ? 'active' : '' ?>">
                    <a href="uti_ak_about.php">About</a>
                </li>
            </ul>
        </li>
        <li class="<?= $uriSegments[1] == 'uti_backup.php' ? 'active' : '' ?>">
            <a href="uti_backup.php">Back Up</a>
        </li>
        <li class="<?= $uriSegments[1] == 'uti_restore.php' ? 'active' : '' ?>">
            <a href="uti_restore.php">Restore</a>
        </li>
        <li class="<?= $uriSegments[1] == 'uti_hapus_data.php' ? 'active' : '' ?>">
            <a href="uti_hapus_data.php">Hapus Data</a>
        </li>
        <li class="<?= $uriSegments[1] == 'uti_restore_data_lama.php' ? 'active' : '' ?>">
            <a href="uti_restore_data_lama.php">Restore Data Lama</a>
        </li>
        <li class="has-sub <?=
                            // Setting
                            $uriSegments[1] == 'uti_set_notgl_aju.php' ||
                                $uriSegments[1] == 'uti_set_dokumen.php' ||
                                $uriSegments[1] == 'uti_set_database.php' ||
                                $uriSegments[1] == 'uti_set_server.php'
                                ? 'active' : '' ?>">
            <a href="javascript:;"><b class="caret"></b> Setting</a>
            <ul class="sub-menu">
                <li class="<?= $uriSegments[1] == 'uti_set_notgl_aju.php' ? 'active' : '' ?>">
                    <a href="uti_set_notgl_aju.php">Update No/Tgl Aju</a>
                </li>
                <li class="<?= $uriSegments[1] == 'uti_set_dokumen.php' ? 'active' : '' ?>">
                    <a href="uti_set_dokumen.php">Dokumen</a>
                </li>
                <li class="<?= $uriSegments[1] == 'uti_set_database.php' ? 'active' : '' ?>">
                    <a href="uti_set_database.php">Setting Database</a>
                </li>
                <li class="<?= $uriSegments[1] == 'uti_set_server.php' ? 'active' : '' ?>">
                    <a href="uti_set_server.php">Setting Server</a>
                </li>
            </ul>
        </li>
        <li class="has-sub <?=
                            // User Manajemen
                            $uriSegments[1] == 'uti_user_manajemen_desktop.php' ||
                                $uriSegments[1] == 'uti_user_manajemen_web.php'
                                ? 'active' : '' ?>">
            <a href="javascript:;"><b class="caret"></b> User Manajemen</a>
            <ul class="sub-menu">
                <li class="<?= $uriSegments[1] == 'uti_user_manajemen_desktop.php' ? 'active' : '' ?>">
                    <a href="uti_user_manajemen_desktop.php">User Default</a>
                </li>
                <li class="<?= $uriSegments[1] == 'uti_user_manajemen_web.php' ? 'active' : '' ?>">
                    <a href="uti_user_manajemen_web.php">User Web Sytem</a>
                </li>
            </ul>
        </li>
    </ul>
</li>