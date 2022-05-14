<li class="nav-header">ADMINISTRATOR</li>
<li class="has-sub <?= $uriSegments[1] == 'dp_bc2_3.php' ||
                        $uriSegments[1] == 'dp_bc2_5.php' ||
                        $uriSegments[1] == 'dp_bc2_6_1.php' ||
                        $uriSegments[1] == 'dp_bc2_6_2.php' ||
                        $uriSegments[1] == 'dp_bc2_7.php' ||
                        $uriSegments[1] == 'dp_bc4_0.php' ||
                        $uriSegments[1] == 'dp_bc4_1.php'
                        ? 'active' : '' ?>">
    <a href="javascript:;">
        <b class="caret"></b>
        <i class="fab fa-adn"></i>
        <span>Administrator Tools</span>
    </a>
    <ul class="sub-menu">
        <li class="<?= $uriSegments[1] == 'dp_bc2_3.php' ? 'active' : '' ?>">
            <a href="dp_bc2_3.php">BC 2.3</a>
        </li>
        <li class="<?= $uriSegments[1] == 'dp_bc2_5.php' ? 'active' : '' ?>">
            <a href="dp_bc2_5.php">BC 2.5</a>
        </li>
        <li class="<?= $uriSegments[1] == 'dp_bc2_6_1.php' ? 'active' : '' ?>">
            <a href="dp_bc2_6_1.php">BC 2.6.1</a>
        </li>
        <li class="<?= $uriSegments[1] == 'dp_bc2_6_2.php' ? 'active' : '' ?>">
            <a href="dp_bc2_6_2.php">BC 2.6.2</a>
        </li>
        <li class="<?= $uriSegments[1] == 'dp_bc2_7.php' ? 'active' : '' ?>">
            <a href="dp_bc2_7.php">BC 2.7</a>
        </li>
        <li class="<?= $uriSegments[1] == 'dp_bc4_0.php' ? 'active' : '' ?>">
            <a href="dp_bc4_0.php">BC 4.0</a>
        </li>
        <li class="<?= $uriSegments[1] == 'dp_bc4_1.php' ? 'active' : '' ?>">
            <a href="dp_bc4_1.php">BC 4.1</a>
        </li>
    </ul>
</li>