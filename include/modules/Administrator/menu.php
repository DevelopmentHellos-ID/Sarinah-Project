<li class="nav-header">ADMINISTRATOR</li>
<li class="has-sub <?= $uriSegments[1] == 'adm_user_manajemen_web.php' ||
                        $uriSegments[1] == 'adm_user_manajemen_web_update.php' ||
                        $uriSegments[1] == 'adm_user_manajemen_web_resetpassword.php' ||
                        $uriSegments[1] == 'adm_setting.php' ||
                        $uriSegments[1] == 'adm_time_reload.php' ||
                        $uriSegments[1] == 'adm_info.php'
                        ? 'active' : '' ?>">
    <a href="javascript:;">
        <b class="caret"></b>
        <i class="fab fa-adn"></i>
        <span>Administrator Tools</span>
    </a>
    <ul class="sub-menu">
        <li class="<?= $uriSegments[1] == 'adm_user_manajemen_web.php' || $uriSegments[1] == 'adm_user_manajemen_web_update.php' || $uriSegments[1] == 'adm_user_manajemen_web_resetpassword.php' ? 'active' : '' ?>">
            <a href="adm_user_manajemen_web.php">User Manajemen Web</a>
        </li>
        <li class="<?= $uriSegments[1] == 'adm_setting.php' ? 'active' : '' ?>">
            <a href="adm_setting.php">Setting App TPB</a>
        </li>
        <li class="<?= $uriSegments[1] == 'adm_time_reload.php' ? 'active' : '' ?>">
            <a href="adm_time_reload.php">Set. Real Time Reload</a>
        </li>
        <li class="<?= $uriSegments[1] == 'adm_info.php' ? 'active' : '' ?>">
            <a href="adm_info.php">Setting Informasi</a>
        </li>
    </ul>
</li>