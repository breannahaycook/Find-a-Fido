<?php
function login($email_address, $password) {
    global $database;
    
    // read_users info
    $users_query = 'SELECT email_address, password_hash FROM users WHERE email_address = :email_address';
    $users_statement = $database->prepare($users_query);
    $users_statement->bindValue(":email_address", $email_address);
    $users_statement->execute();
    $users = $users_statement->fetch();
    $users_statement->closeCursor();
    
    if($users == null) {
        return false;
    }
    
    $password_hash = $users["password_hash"];
    
    return password_verify($password, $password_hash);
}