<?php
try {
    require_once 'controllers/database.php';
    require_once 'controllers/user_controller.php';
    
    echo $database_message;
    
    // create a user !! Breanna - SUCCESSFUL !!
//    $password_hash = password_hash("test", PASSWORD_DEFAULT);
//    $user = new User("Thumper", "thaycook@gmail.com", $password_hash);
//    create_users($user);
    
        // create a user !! Rafi
//    $password_hash = password_hash("test", PASSWORD_DEFAULT);
//    $user = new User("rafiTest", "rafiTest@gmail.com", $password_hash);
//    create_users($user);
    
        // create a user !! Kaitlyn
//    $password_hash = password_hash("test", PASSWORD_DEFAULT);
//    $user = new User("kaitlynTest", "kaitlynTest@gmail.com", $password_hash);
//    create_users($user);
    
    //  get all users
    $all_users = get_all_users();
    
//    // get user by email address
//    $email_address = "bmhaycook@gmail.com";
//    $one_user_email = get_user_by_email($email_address);

    
} catch (Exception $e) {
    $error_message = $e->getMessage();
    echo $error_message;
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Test</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>ID</th>
            </tr>
            <?php foreach($all_users as $user_info) : ?>
            <tr>
                <td><?php echo $user_info-> get_name(); ?></td>
                <td><?php echo $user_info-> get_email_address(); ?></td>
                <td><?php echo $user_info-> get_id(); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <h2>User By Email Table</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>ID</th>
            </tr>
            <tr>
                <td><?php echo $one_user_email[0]; ?></td>
                <td><?php echo $one_user_email[1]; ?></td>
            </tr>
        </table>
        
        <h2>User By ID Table</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
            </tr>
            <tr>
                <td><?php echo $user_info-> get_name(); ?></td>
                <td><?php echo $user_info-> get_email_address(); ?></td>
            </tr>
        </table>
    </body>
</html>
