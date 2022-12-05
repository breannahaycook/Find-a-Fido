<?php
session_start();

try {
    require_once '../model/database_model.php';
    require_once '../model/login_model.php';
    require_once '../model/user_model.php';
    
    // assigns input from form to variables
    $email = htmlspecialchars(filter_input(INPUT_POST, "email"));
    $password = htmlspecialchars(filter_input(INPUT_POST, "password"));
    $action = htmlspecialchars(filter_input(INPUT_POST, "action"));
    
    // assigns input from url to variables (logout from nav)
    $action_url = htmlspecialchars(filter_input(INPUT_GET, "action_url"));
    
    // if action is "logout" destory the current session and clear $_SESSION variables
    if ($action == "logout" || $action_url == "logout") {
        $_SESSION = array();
        session_destroy();
    }
    
    // if action is "login" and $email && $password are not "" login
    if ($action == "login") {
        if ($email != "" && $password != "") {
            if (login($email, $password)) {
                
                // if login was successful set $_SESSION variables
                $_SESSION['logged_in'] = true;

                $user_info = get_user_by_email($email);
                $_SESSION['email_address'] = $email;
                $_SESSION['name'] = $user_info[0];
                $_SESSION['id'] = $user_info[1];

                // return to home page
                header("Location: ../controllers/home_controller.php");
            } else {
                $message = "User connot be logged in at this time, please try again.<br>";
            }
        }
    }
    
    include ('../views/login_view.php');
    
} catch (Exception $e) {
    $error_message = $e->getMessage();
    echo '<script>console.log("' . $error_message . '");</script>';
    $message = "User connot be logged in at this time, please try again.<br>";
    include('../views/login_view.php');
}

