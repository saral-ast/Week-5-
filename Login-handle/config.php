<?php
session_start();
define('SESSION_TIMEOUT', 18); // 3 minutes in seconds

function checkSession() {
    if (isset($_SESSION['last_activity'])) {
        $inactive = time() - $_SESSION['last_activity'];
        if ($inactive >= SESSION_TIMEOUT) {
            session_unset();
            session_destroy();
            header("Location: login.php?timeout=1");
            exit();
        }
    }
    $_SESSION['last_activity'] = time();
}
?>  