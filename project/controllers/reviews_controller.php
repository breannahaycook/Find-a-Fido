<?php
session_start();

try {
    require_once '../model/database_model.php';
    require_once '../model/breed_info_model.php';
    require_once '../model/breed_review_model.php';
    
    $action = htmlspecialchars(filter_input(INPUT_POST, "action"));
    $breed = htmlspecialchars(filter_input(INPUT_POST, "breed"));
    $name = htmlspecialchars(filter_input(INPUT_POST, "name"));
    $review = htmlspecialchars(filter_input(INPUT_POST, "review"));
    
    if ($action === 'filter_reviews') {
        $reviews = get_breed_reviews_by_name($breed);
    } else {
        $reviews = get_all_breed_reviews();
    }
    
    if($action === 'create_review') {
        $new_review = new Review($_SESSION['id'], $breed, $review, '', 0);
        create_review($new_review); 
    }
    
    if ($action === 'Delete') {
        delete_review($id);
    }
    
    $breeds = get_all_breeds();
    
    include ('../views/reviews_view.php');
} catch (Exception $e) {
    $error_message = $e->getMessage();
    include('../views/error.php');
}