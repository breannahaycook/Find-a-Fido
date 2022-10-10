<?php

class User {
    private $name, $email_address, $password_hash, $id;
    
    public function __construct($name, $email_address, $password_hash, $id = 0){
        $this-> set_name($name);
        $this-> set_email_address($email_address);
        $this-> set_password_hash($password_hash);
        $this->id = $id;
    }
    
    public function get_name() {
        return $this-> name;
    }
    
    public function get_email_address() {
        return $this-> email_address;
    }
    
    public function get_password_hash() {
        return $this-> password_hash;
    }
    
    public function get_following() {
        return $this-> following;
    }

    public function get_id() {
        return $this-> id;
    }
    
    public function set_name($name) {
        $this-> name = $name;
    }

    public function set_email_address($email_address){
        $this-> email_address = $email_address;
    }
    
    public function set_password_hash($password_hash) {
        $this-> password_hash = $password_hash;
    }

    public function set_id($id){
        $this-> id = $id;
    }
}

function get_all_users() {
    global $database;
    
    // read users info
    $users_query = 'SELECT name, email_address, id FROM users';
    $users_statement = $database->prepare($users_query);
    $users_statement->execute();
    $users = $users_statement->fetchAll();
    $users_statement->closeCursor();
    
    $users_array = array();
    
    foreach($users as $user) {
        $users_array[] = new User($user['name'], $user['email_address'], $user['id']);
    }
    
    return $users_array;
}

function get_user_by_email($email_address) {
    global $database;
    
    // read one user info
    $users_query = 'SELECT name, id, FROM users WHERE email_address = :email_address';
    $users_statement = $database->prepare($users_query);
    $users_statement->bindValue(":email_address", $email_address);
    $users_statement->execute();
    $users = $users_statement->fetch();
    $users_statement->closeCursor();
    
    return $users;
}

function get_user_by_id($id) {
    global $database;
    
    // read one user info
    $users_query = 'SELECT name, email_address FROM users WHERE id = :id';
    $users_statement = $database->prepare($users_query);
    $users_statement->bindValue(":id", $id);
    $users_statement->execute();
    $users = $users_statement->fetch();
    $users_statement->closeCursor();
    
    return $users;
}

function create_users($user) {
    global $database;

    // create new user
    $users_query = "INSERT INTO users (name, email_address, password_hash) VALUES (:name, :email_address, :password_hash)";

    $users_statement = $database->prepare($users_query);
    $users_statement->bindValue(":name", $user-> get_name());
    $users_statement->bindValue(":email_address", $user-> get_email_address());
    $users_statement->bindValue(":password_hash", $user-> get_password_hash());
    $users_statement->execute();
    $users_statement->closeCursor();
}