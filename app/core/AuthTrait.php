<?php
trait AuthTrait {
    protected function checkLogin() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_role'])) {
            header("Location: " . APP_URL . "/login");
            exit();
        }
    }

}
?>
