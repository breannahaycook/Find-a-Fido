<?php
try {
    require_once 'model/database_model.php';
    require_once 'model/user_model.php';
    require_once 'model/login_model.php';
    require_once 'model/breed_info_model.php';
    require_once 'model/breed_review_model.php';
    
    $email_address = htmlspecialchars(filter_input(INPUT_POST, "email_address"));
    $password = htmlspecialchars(filter_input(INPUT_POST, "password"));
    
    echo $database_message;
    echo "Testing";

    // create a user !!
//    $password_hash = password_hash("test", PASSWORD_DEFAULT);
//    $user = new User("Thumper", "thaycook@gmail.com", $password_hash);
//    create_users($user);
    
    //  get all users
    $all_users = get_all_users();
    
    // get user by email address
    $get_user_email_address = "bmhaycook@gmail.com";
    $one_user_email = get_user_by_email($get_user_email_address);
    
    // get user by id
    $get_user_id = "6";
    $one_user_id = get_user_by_id($get_user_id);
    
    // login with email "bmhayook@gmail.com" and pass "test"
    $loginTest = login($email_address, $password);
    
    // get all dog breeds
    $all_breeds = get_all_breeds();
    
    // get dog breed by name
    $breed_info_by_name = "Poodle";
    $one_breed_by_name = get_breed_by_name($breed_info_by_name);
    
    // create review
//    $review = new Review(2, "Poodle", "PoodleReview", "", 0);
//    create_review($review);
    
    // get all breed reviews
    $all_breed_reviews = get_all_breed_reviews();
    
    // get breed review by name
    $breed_review_name = "Poodle";
    $one_breed_review_by_name = get_breed_reviews_by_name($breed_review_name);
    
    // get breed review by user id
    $breed_review_user_id = 1;
    $breed_reviews_by_user_id = get_breed_reviews_by_user_id($breed_review_user_id);
    
    // delete review 
//    $id = 6;
//    delete_review($id);
    
    // update review
//    $review = new Review(0, "", "PoodleReview2", "", 1);
//    update_review($review);
    
    $size = "S";
    $filter = " WHERE size = \"$size\" ";
    $filter_breeds = filter_breeds($filter);
    
    $training_level = "High";
    $filter = " WHERE training_level = \"$training_level\" ";
    $filter_breeds = filter_breeds($filter);

    
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
        <h2>All Users Table</h2>
        <h5><i>get_all_users()</i></h5>
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
        
        <hr>
        
        <h2>User By Email Table</h2>
        <h5><i>get_user_by_email()</i></h5>
        <h4><?php echo "Email: " . $get_user_email_address; ?></h4>
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
        
        <hr>
        
        <h2>User By ID Table</h2>
        <h5><i>get_user_by_id()</i></h5>
        <h4><?php echo "Id: " . $get_user_id; ?></h4>
        <table>
            <tr>
                <th>Name</th>
                <th>Email Address</th>
            </tr>
            <tr>
                <td><?php echo $one_user_id[0]; ?></td>
                <td><?php echo $one_user_id[1]; ?></td>
            </tr>
        </table>
        
        <hr>
        
        <h2>Login Form</h2>
        <h5><i>login()</i></h5>
        <form action="index.php" method="post">
            <label><h4>Email Address: </h4></label>
            <input type="text" name="email_address"><br>
            <label><h4>Password: </h4></label>
            <input type="password" name="password"><br>
            <label>&nbsp;</label><br>
            <input type="submit" value="login"><br>
        </form>
        <?php echo "Login Test Result: " . $loginTest . "<br><br> Note: <br> - Success: \"1\"<br> - Failed: \" \""?>

        <hr>
        
        <h2>All Dog Breeds Table</h2>
        <h5><i>get_all_breeds()</i></h5>
        <table>
            <tr>
                <th>Breed</th>
                <th>Size</th>
                <th>Training Level</th>
                <th>Hypoallergenic</th>
                <th>Activity Level</th>
                <th>Noise Level</th>
                <th>Kids Temp</th>
                <th>Grooming Level</th>
                <th>Household Size</th>
                <th>Shedding</th>
                <th>Information</th>
                <th>Id</th>
            </tr>
            <?php foreach($all_breeds as $breed_info) : ?>
            <tr>
                <td><?php echo $breed_info-> get_breed(); ?></td>
                <td><?php echo $breed_info-> get_size(); ?></td>
                <td><?php echo $breed_info-> get_training_level(); ?></td>
                <td><?php echo $breed_info-> get_hypoallergenic(); ?></td>
                <td><?php echo $breed_info-> get_activity_level(); ?></td>
                <td><?php echo $breed_info-> get_noise_level(); ?></td>
                <td><?php echo $breed_info-> get_kids_temp(); ?></td>   
                <td><?php echo $breed_info-> get_grooming(); ?></td>
                <td><?php echo $breed_info-> get_household_size(); ?></td> 
                <td><?php echo $breed_info-> get_shedding(); ?></td>
                <td><?php echo $breed_info-> get_information(); ?></td>
                <td><?php echo $breed_info-> get_id(); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <hr>
        
        <h2>Dog Breed By Name Table</h2>
        <h5><i>get_breed_by_name()</i></h5>
        <h4><?php echo "Breed: " . $breed_info_by_name; ?></h4>
        <table>
            <tr>
                <th>Size</th>
                <th>Training Level</th>
                <th>Hypoallergenic</th>
                <th>Activity Level</th>
                <th>Noise Level</th>
                <th>Kids Temp</th>
                <th>Grooming Level</th>
                <th>Household Size</th>
                <th>Shedding</th>
                <th>Information</th>
                <th>Id</th>
            </tr>
            <tr>
                <td><?php echo $one_breed_by_name[0] ?></td>
                <td><?php echo $one_breed_by_name[1] ?></td>
                <td><?php echo $one_breed_by_name[2] ?></td>
                <td><?php echo $one_breed_by_name[3] ?></td>
                <td><?php echo $one_breed_by_name[4] ?></td>
                <td><?php echo $one_breed_by_name[5] ?></td>
                <td><?php echo $one_breed_by_name[6] ?></td>
                <td><?php echo $one_breed_by_name[7] ?></td>
                <td><?php echo $one_breed_by_name[8] ?></td>
                <td><?php echo $one_breed_by_name[9] ?></td>
                <td><?php echo $one_breed_by_name[10] ?></td>                                                                    
            </tr>
        </table>
        
        <hr>
        
        <h2>All Breed Reviews Table</h2>
        <h5><i>get_all_breed_reviews()</i></h5>
        <table>
            <tr>
                <th>User Id</th>
                <th>Breed</th>
                <th>Review</th>
                <th>Timestamp</th>
                <th>Id</th>
            </tr>
            <?php foreach($all_breed_reviews as $breed_reviews) : ?>
            <tr>
                <td><?php echo $breed_reviews-> get_user_id(); ?></td>
                <td><?php echo $breed_reviews-> get_breed(); ?></td>
                <td><?php echo $breed_reviews-> get_review(); ?></td>
                <td><?php echo $breed_reviews-> get_timestamp(); ?></td>
                <td><?php echo $breed_reviews-> get_id(); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <hr>
       
        
        
        
        <h2>1</h2>
        <h5><i>get_all_breeds()</i></h5>
        <table>
            <tr>
                <th>Breed</th>
                <th>Size</th>
                <th>Training Level</th>
                <th>Hypoallergenic</th>
                <th>Activity Level</th>
                <th>Noise Level</th>
                <th>Kids Temp</th>
                <th>Grooming Level</th>
                <th>Household Size</th>
                <th>Shedding</th>
                <th>Information</th>
                <th>Id</th>
            </tr>
            <?php foreach($filter_breeds as $breed_info) : ?>
            <tr>
                <td><?php echo $breed_info-> get_breed(); ?></td>
                <td><?php echo $breed_info-> get_size(); ?></td>
                <td><?php echo $breed_info-> get_training_level(); ?></td>
                <td><?php echo $breed_info-> get_hypoallergenic(); ?></td>
                <td><?php echo $breed_info-> get_activity_level(); ?></td>
                <td><?php echo $breed_info-> get_noise_level(); ?></td>
                <td><?php echo $breed_info-> get_kids_temp(); ?></td>   
                <td><?php echo $breed_info-> get_grooming(); ?></td>
                <td><?php echo $breed_info-> get_household_size(); ?></td> 
                <td><?php echo $breed_info-> get_shedding(); ?></td>
                <td><?php echo $breed_info-> get_information(); ?></td>
                <td><?php echo $breed_info-> get_id(); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        
        <h2>2</h2>
        <h5><i>get_all_breeds()</i></h5>
        <table>
            <tr>
                <th>Breed</th>
                <th>Size</th>
                <th>Training Level</th>
                <th>Hypoallergenic</th>
                <th>Activity Level</th>
                <th>Noise Level</th>
                <th>Kids Temp</th>
                <th>Grooming Level</th>
                <th>Household Size</th>
                <th>Shedding</th>
                <th>Information</th>
                <th>Id</th>
            </tr>
            <?php foreach($filter_breeds as $breed_info) : ?>
            <tr>
                <td><?php echo $breed_info-> get_breed(); ?></td>
                <td><?php echo $breed_info-> get_size(); ?></td>
                <td><?php echo $breed_info-> get_training_level(); ?></td>
                <td><?php echo $breed_info-> get_hypoallergenic(); ?></td>
                <td><?php echo $breed_info-> get_activity_level(); ?></td>
                <td><?php echo $breed_info-> get_noise_level(); ?></td>
                <td><?php echo $breed_info-> get_kids_temp(); ?></td>   
                <td><?php echo $breed_info-> get_grooming(); ?></td>
                <td><?php echo $breed_info-> get_household_size(); ?></td> 
                <td><?php echo $breed_info-> get_shedding(); ?></td>
                <td><?php echo $breed_info-> get_information(); ?></td>
                <td><?php echo $breed_info-> get_id(); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
