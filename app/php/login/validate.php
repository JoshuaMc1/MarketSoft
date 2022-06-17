<?php
    include("../../../config/start_sessions.php");
    $_SESSION['user'] = "1";
    header("Location: ../../?View=Dashboard", true, 301);
    exit();