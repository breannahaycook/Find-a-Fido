<?php
    session_start();
    
try {
    require_once '../model/database_model.php';
    require_once '../model/breed_review_model.php';
    
    $reviews = get_all_breed_reviews();
    
    include ('../views/home_view.php');

} catch (Exception $e) {
    $error_message = $e->getMessage();
    echo '<script>console.log("' . $error_message . '");</script>';
    include ('../views/home_view.php');
}

