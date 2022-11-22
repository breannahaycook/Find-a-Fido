<?php

session_start();
try {
    include ('../views/dog_care_view.php');
    
    
    
    
    
    
    
    
} catch (Exception $e) {
    
    
    $error_message = $e->getMessage();
    include('../views/error.php');
}