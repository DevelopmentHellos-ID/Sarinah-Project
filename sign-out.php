<?php
session_start();
session_destroy();
header("Location: ../sign-in.php?OutAccess=true");
// header("Location: ../TPB/index.php ");