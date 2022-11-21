<?php

class Review {
    private $user_id, $breed, $review, $timestamp, $id;
    
    public function __construct($user_id, $breed, $review, $timestamp, $id = 0){
        $this-> set_user_id($user_id);
        $this-> set_breed($breed);
        $this-> set_review($review);
        $this-> timestamp = $timestamp;
        $this-> id = $id;
    }
    
    public function get_user_id() {
        return $this-> user_id;
    }

    public function get_breed() {
        return $this-> breed;
    }

    public function get_review() {
        return $this-> review;
    }

    public function get_timestamp() {
        return $this-> timestamp;
    }

    public function get_id() {
        return $this-> id;
    }

    public function set_user_id($user_id) {
        $this-> user_id = $user_id;
    }

    public function set_breed($breed) {
        $this-> breed = $breed;
    }

    public function set_review($review) {
        $this-> review = $review;
    }
}

function get_all_breed_reviews() {
    global $database;
    
    // reads breed review info
    $reviews_query = 'SELECT user_id, breed, review, timestamp, id FROM breed_review';
    $reviews_statement = $database->prepare($reviews_query);
    $reviews_statement->execute();
    $reviews = $reviews_statement->fetchAll();
    $reviews_statement->closeCursor();
    
    $reviews_array = array();
    
    foreach($reviews as $review) {
        $reviews_array[] = new Review($review['user_id'], $review['breed'], $review['review'], $review['timestamp'], $review['id']);
    }
    
    return $reviews_array;
}

function get_breed_reviews_by_name($breed) {
    global $database;
    
    // reads breed review info by breed name
    $reviews_query = 'SELECT user_id, review, timestamp, id FROM breed_review WHERE breed = :breed';
    $reviews_statement = $database->prepare($reviews_query);
    $reviews_statement->bindValue(":breed", $breed);
    $reviews_statement->execute();
    $reviews = $reviews_statement->fetchAll();
    $reviews_statement->closeCursor();
    
    $reviews_array = array();
    
    foreach($reviews as $review) {
        $reviews_array[] = new Review($review['user_id'], $review['review'], $review['timestamp'], $review['id']);
    }
    
    return $reviews_array;
}

function get_breed_reviews_by_user_id($user_id) {
    global $database;
    
    // reads breed review info by user id
    $reviews_query = 'SELECT user_id, breed, review, timestamp, id FROM breed_review WHERE user_id = :user_id';
    $reviews_statement = $database->prepare($reviews_query);
    $reviews_statement->bindValue(":user_id", $user_id);
    $reviews_statement->execute();
    $reviews = $reviews_statement->fetchAll();
    $reviews_statement->closeCursor();
    
    $reviews_array = array();
    
    foreach($reviews as $review) {
        $reviews_array[] = new Review($review['user_id'], $review['breed'], $review['review'], $review['timestamp'], $review['id']);
    }
    
    return $reviews_array;
}

function create_review($review) {
    global $database;

    // create new breed review
    $reviews_query = "INSERT INTO breed_review (user_id, breed, review) VALUES (:user_id, :breed, :review)";

    $reviews_statement = $database->prepare($reviews_query);
    $reviews_statement->bindValue(":user_id", $review-> get_user_id());
    $reviews_statement->bindValue(":breed", $review-> get_breed());
    $reviews_statement->bindValue(":review", $review-> get_review());
    $reviews_statement->execute();
    $reviews_statement->closeCursor();
}

function update_review($review) {
    global $database;

    // update breed review
    $tweets_query = "UPDATE breed_review SET review = :review WHERE id = :id";

    $reviews_statement = $database->prepare($tweets_query);
    $reviews_statement->bindValue(":id", $review-> get_id());
    $reviews_statement->bindValue(":review", $review-> get_review());
    $reviews_statement->execute();
    $reviews_statement->closeCursor();
}

function delete_review($id) {
    global $database;

     // delete breed review
    $reviews_query = "DELETE FROM breed_review WHERE id = :id";

    $reviews_statement = $database->prepare($reviews_query);
    $reviews_statement->bindValue("id", $id);
    $reviews_statement->execute();
    $reviews_statement->closeCursor();
}