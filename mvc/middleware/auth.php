<?php

class AuthMiddleware {
    public static function check() {
        session_start();
        if (!isset($_SESSION['id'])) {
			require_once "views/login/login.php";    
            exit();
        }
    }
}