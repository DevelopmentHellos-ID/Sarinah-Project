<div class="line-page-bottom"></div>
<div class="footer-wrap pd-20 mb-20 card-box">
    © <a class="font-w600" href="mailto:info@hellos-id.com" target="_blank">
        <?php if ($resultSetting['company'] == NULL) { ?>
            <b>Perusahaan - HELLOS<sup>ID</sup></b>
        <?php } else { ?>
            <b><?= $resultSetting['company'] ?> - HELLOS<sup>ID</sup></b>
        <?php } ?>
    </a>
    <span class="js-year-copy js-year-copy-enabled">2022 - <?= date('Y') ?></span> |
    <?php if ($resultSetting['app_name'] == NULL) { ?>
        <a class="font-w600" href="https://hellos-id.com/" target="_blank">App Name</a>
    <?php } else { ?>
        <a class="font-w600" href="https://hellos-id.com/" target="_blank"><?= $resultSetting['app_name'] ?></a>
    <?php } ?>
    <br>
    <?php if ($resultSetting['version'] == NULL) { ?>
        <b>Version 0.0.0</b>
    <?php } else { ?>
        <b><?= $resultSetting['version'] ?> - <?= $resultSetting['release'] ?></b>
    <?php } ?>
</div>