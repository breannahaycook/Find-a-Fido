<?php
session_start();

try {
    require_once '../model/database_model.php';
    require_once '../model/breed_info_model.php';
    require_once '../model/breed_review_model.php';
    require_once '../model/user_model.php';
    
    $action = htmlspecialchars(filter_input(INPUT_POST, "action"));
    $breed = htmlspecialchars(filter_input(INPUT_POST, "breed"));
    $name = htmlspecialchars(filter_input(INPUT_POST, "name"));
    $review = htmlspecialchars(filter_input(INPUT_POST, "review"));
    $dog_breed = htmlspecialchars(filter_input(INPUT_POST, "dogBreed"));
    $id = htmlspecialchars(filter_input(INPUT_POST, "id"));
    
    // if filter is applied filter all reviews by $breed else it gets all reviews
    if ($action === 'filter_reviews') {
        $reviews = get_breed_reviews_by_name($breed);
    } else {
        $reviews = get_all_breed_reviews();
    }
    
    // creates a review object, creates review, and refreshes page
    if($action === 'create_review') {
        $new_review = new Review($_SESSION['id'], $breed, $review, '', 0);
        create_review($new_review); 
        
        header("Location: ../controllers/reviews_controller.php");
    }

    // deletes selected review and refreshes page
    if ($action === 'delete') {
        delete_review($id);
        
        header("Location: ../controllers/reviews_controller.php");
    }
    
    // gets all breeds for dropdown list
    $breeds = get_all_breeds();
    
    include ('../views/reviews_view.php');
    
} catch (Exception $e) {
    $error_message = $e->getMessage();
    echo '<script>console.log("' . $error_message . '");</script>';
    include ('../views/reviews_view.php');
}