<?php
session_start();

try {
    require_once '../model/database_model.php';
    require_once '../model/user_model.php';
    require_once '../model/login_model.php';
    
    // assigns input from form to variables
    $name = htmlspecialchars(filter_input(INPUT_POST, "name"));
    $email = htmlspecialchars(filter_input(INPUT_POST, "email"));
    $password = htmlspecialchars(filter_input(INPUT_POST, "password"));
    $action = htmlspecialchars(filter_input(INPUT_POST, "action"));
    
    // converts password to hashed password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    
    // if action is "create_account" and $name && $email && $password are not "" create new account
    if ($action == "create_account") {
        if ($name != "" && $email != "" && $password != "") {
            $user = new User($name, $email, $password_hash, "");
            create_user($user);
            
            // login after create a new account
            if (login($email, $password)) {
                
                // if login was successful set $_SESSION variables
                $_SESSION['logged_in'] = true;
                
                $user_info = get_user_by_email($email_address);
                $_SESSION['email_address'] = $email_address;
                $_SESSION['name'] = $user_info[0];
                $_SESSION['id'] = $user_info[1];
                
                // return to home page
                header("Location: ../views/home_view.php");
            }
        } else {
            $message = "New user connot be created at this time, please try again.<br>";
        }
    }
    include ('../views/signup_view.php');
} catch (Exception $e) {
    $error_message = $e->getMessage();
    include('../views/error.php');
}

