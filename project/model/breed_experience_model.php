<?php

class Comment {
    private $user_id, $name, $breed_name, $comment, $timestamp, $id;
    
    public function __construct($user_id, $name, $breed_name, $comment, $timestamp, $id = 0){
        $this-> set_user_id($user_id);
        $this-> set_name($name);
        $this-> set_breed_name($breed_name);
        $this-> set_comment($comment);
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

    public function get_comment() {
        return $this->comment;
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

    public function set_comment($comment) {
        $this->comment = $comment;
    }
}

function get_all_comments() {
    global $database;
    
    // reads breed comment info
    $comments_query = 'SELECT user_id, name, breed_name, comment, timestamp, id FROM breed_experience';
    $comments_statement = $database->prepare($comments_query);
    $comments_statement->execute();
    $comments = $comments_statement->fetchAll();
    $comments_statement->closeCursor();
    
    $comments_array = array();
    
    foreach($comments as $comment) {
        $comments_array[] = new User($comment['user_id'], $comment['name'],
            $comment['breed_name'], $comment['comment'], $comment['timestamp'], $comment['id']);
    }
    
    return $comments_array;
}

function create_comment($comment) {
    global $database;

    // create new breed comment
    $comments_query = "INSERT INTO breed_experience (user_id, name, breed_name, comment) VALUES (:user_id, :name, :breed_name, :comment)";

    $comments_statement = $database->prepare($comments_query);
    $comments_statement->bindValue(":user_id", $comment-> get_user_id());
    $comments_statement->bindValue(":name", $comment-> get_name());
    $comments_statement->bindValue(":breed_name", $comment-> get_breed_name());
    $comments_statement->bindValue(":comment", $comment-> get_comment());
    $comments_statement->execute();
    $comments_statement->closeCursor();
}
