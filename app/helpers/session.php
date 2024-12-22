<?php

function verificarSesion() {
    session_start();
    if (!isset($_SESSION['user_id'])) {
        // Redirigir al login si no hay sesión
        header('Location:  ' .base_url());
        exit();
    }
}
