<?php
session_start();

try {
    require_once '../model/breed_review_model.php';
    
    $reviews = get_all_breed_reviews();
    
    include ('../views/reviews_view.php');
} catch (Exception $e) {
    $error_message = $e->getMessage();
    include('../views/error.php');
}