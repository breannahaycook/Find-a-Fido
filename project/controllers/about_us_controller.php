<?php
session_start();

try {
    include ('../views/about_us_view.php');
} catch (Exception $e) {
    $error_message = $e->getMessage();
    echo '<script>console.log("' . $error_message . '");</script>';
    include ('../views/about_us_view.php');
}