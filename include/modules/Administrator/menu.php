<li class="nav-header">ADMINISTRATOR</li>
<li class="has-sub <?= $uriSegments[1] == 'adm_setting.php' ||
                        $uriSegments[1] == 'adm_time_reload.php'
                        ? 'active' : '' ?>">
    <a href="javascript:;">
        <b class="caret"></b>
        <i class="fab fa-adn"></i>
        <span>Administrator Tools</span>
    </a>
    <ul class="sub-menu">
        <li class="<?= $uriSegments[1] == 'adm_setting.php' ? 'active' : '' ?>">
            <a href="adm_setting.php">Setting App TPB</a>
        </li>
        <li class="<?= $uriSegments[1] == 'adm_time_reload.php' ? 'active' : '' ?>">
            <a href="adm_time_reload.php">Set. Real Time Reload</a>
        </li>
    </ul>
</li>