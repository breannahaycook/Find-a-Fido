<?php

class Review {
    private $user_id, $name, $breed_name, $review, $timestamp, $id;
    
    public function __construct($user_id, $name, $breed_name, $review, $timestamp, $id = 0){
        $this-> set_user_id($user_id);
        $this-> set_name($name);
        $this-> set_breed_name($breed_name);
        $this-> set_review($review);
        $this-> timestamp = $timestamp;
        $this-> id = $id;
    }
    
    public function get_user_id() {
        return $this->user_id;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_breed_name() {
        return $this->breed_name;
    }

    public function get_review() {
        return $this->review;
    }

    public function get_timestamp() {
        return $this->timestamp;
    }

    public function get_id() {
        return $this->id;
    }

    public function set_user_id($user_id) {
        $this->user_id = $user_id;
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function set_breed_name($breed_name) {
        $this->breed_name = $breed_name;
    }

    public function set_review($review) {
        $this->review = $review;
    }
}

function get_all_reviews() {
    global $database;
    
    // reads breed review info
    $reviews_query = 'SELECT user_id, name, breed_name, review, timestamp, id FROM breed_experience';
    $reviews_statement = $database->prepare($reviews_query);
    $reviews_statement->execute();
    $reviews = $reviews_statement->fetchAll();
    $reviews_statement->closeCursor();
    
    $reviews_array = array();
    
    foreach($reviews as $review) {
        $reviews_array[] = new User($review['user_id'], $review['name'],
            $review['breed_name'], $review['review'], $review['timestamp'], $review['id']);
    }
    
    return $reviews_array;
}

function create_review($review) {
    global $database;

    // create new breed review
    $reviews_query = "INSERT INTO breed_experience (user_id, name, breed_name, review) VALUES (:user_id, :name, :breed_name, :review)";

    $reviews_statement = $database->prepare($reviews_query);
    $reviews_statement->bindValue(":user_id", $review-> get_user_id());
    $reviews_statement->bindValue(":name", $review-> get_name());
    $reviews_statement->bindValue(":breed_name", $review-> get_breed_name());
    $reviews_statement->bindValue(":review", $review-> get_review());
    $reviews_statement->execute();
    $reviews_statement->closeCursor();
}

// Add Delete(Preferred) or Edit review
