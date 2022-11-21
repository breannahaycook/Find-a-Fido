<?php
    session_start();

try {
    require_once '../model/database_model.php';
    
    include ('../views/home_view.php');
} catch (Exception $e) {
    $error_message = $e->getMessage();
    include('../views/error.php');
}

