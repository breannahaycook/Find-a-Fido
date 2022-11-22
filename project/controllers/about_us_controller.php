<?php

session_start();
try {
    include ('../views/about_us_view.php');
    
    
    
    
    
    
    
    
} catch (Exception $e) {
    
    
    $error_message = $e->getMessage();
    include('../views/error.php');
}