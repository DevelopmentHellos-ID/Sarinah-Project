<?php
session_start();
session_destroy();
header("Location: ../TPB/index.php ");
