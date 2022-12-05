<!DOCTYPE html>
<html lang="en" class="boneBackground">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/804adbe216.js" crossorigin="anonymous"></script>
        <title>Reviews | Find-A-Fido</title>
        
        <style> 
            @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
            
            a {
                text-decoration: none;   
            }
            
            a:visited {
                color: white;
                text-decoration: none;
            }
            
            .aboutReviews {
                text-align: center;
                color: rgb(102, 102, 102);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
            }
            
            .boneBackground{
                background-image: url("../utility/assets/whiteBonePawPrintsBG.jpg");   
            }
            
            .button{
                background: linear-gradient(138deg, rgba(60,77,156,1) 0%, rgba(124,143,194,1) 75%, rgba(185,222,231,1) 100%);
                border: none;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);
                border-radius: 5px;
                color: white;
                font-family: 'Fredoka', sans-serif;
                font-size: 15px;
                font-weight: 500;
                height: 30px;
                letter-spacing: 1px;
                padding-left: 10px;
                padding-right: 10px;
                margin: 5px;
            }
            
            .commentSection {
                background-color: white;
                border-radius: 70px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);
                font-family: 'Roboto', sans-serif;
                height: 60%;
                width: 45vw;
                margin-top: 25px;
                margin-left: auto;
                margin-right: auto;
                min-width: 600px;
            }
            
            .container {
                align-items: center;
                display: flex;
                justify-content: center;
                text-align: center;
            }
            
            .deleteButton {
                background: linear-gradient(138deg, rgba(60,77,156,1) 0%, rgba(124,143,194,1) 75%, rgba(185,222,231,1) 100%);
                border: none;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);
                border-radius: 5px;
                color: white;
                font-family: 'Fredoka', sans-serif;
                font-size: 15px;
                font-weight: 500;
                height: 30px;
                letter-spacing: 1px;
                padding-left: 10px;
                padding-right: 10px;
                display: block; 
                margin: 0 auto;
            }
            
            .dogImage {
                height: 300px;
                width: 400px;
            }
            
            h1 {
                color: rgb(60, 77, 156);
                font-family: 'Fredoka', sans-serif;
                font-size: 50px;
                letter-spacing: 1px;
                text-align: center;
                text-shadow: 0px 3px 2px rgb(201, 201, 201);
            }
            
            h2 {
                font-family: 'Fredoka', sans-serif;
                color: rgb(60, 77, 156);
                margin-left: 20px;
            }

            h4 {
                color: rgb(60, 77, 156);
                font-family: 'Fredoka', sans-serif;
                font-size: 30px;
                font-style: normal;
                margin-top: 30px;
                margin-right: 30px;
                text-align: right;
            }

            h5 {
                color: rgb(60, 77, 156);
                font-family: 'Roboto', sans-serif;
                font-size: 15px;
                font-style: normal;
                margin: 30px;
            }

            hr {
                width: 85%;
                margin: auto;
            }
            
            form {
                text-align: center;
            }
            
            .para {
                color: rgb(43, 60, 133);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                margin: 30px;
                text-align: center;
            }
            
            section {
                background-color: white;
                border-radius: 70px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);
                font-family: 'Roboto', sans-serif;
                height: 60%;
                width: 70vw;
                margin-top: 25px;
                margin-left: auto;
                margin-right: auto;
                min-width: 600px;
            }
            
            .sidenav {
                color: #FFFFFF;
                font-family: 'Fredoka', sans-serif;        
                font-size: 16px;
                overflow-x: hidden;
                position: sticky;
                top: 0; /* Stay at the top */
                width: 10wh;
            }
            
            .textArea {
                border: 1px solid rgb(43, 60, 133);
                border-radius: 5px;
                height: 250px;
                text-align: center;
                width: 400px;
            }
            
            .title {
                width: 100%;
                background-color: rgba(255, 255, 255, 0.5);
            }
            
            .topButton{
                background: linear-gradient(138deg, rgba(60,77,156,1) 0%, rgba(124,143,194,1) 75%, rgba(185,222,231,1) 100%);
                border: none;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);
                border-radius: 5px;
                color: white;
                font-family: 'Fredoka', sans-serif;
                font-size: 12px;
                font-style: none;
                height: 25px;
                letter-spacing: 1px;
                padding-left: 10px;
                padding-right: 10px;
                margin: 5px;
            }
            
            .reviewPara {
                color: rgb(43, 60, 133);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                margin: 30px;
                text-align: center;
                width: 65vw;
            }

            .reviewsTitle {
                font-size: 60px;
            }
        </style>

    </head>
    <?php
        include('nav.php');
    ?>
    <body>
        <main>
            <div class="title">
                <h1 class="reviewsTitle">Dog Blog</h1>
                <p class="aboutReviews">
                    This page is to showcase our users written reviews and experiences for dog breeds! <br> Login to leave your own personal comments about your fur babies!
                </p>
                <br>
                <hr>
            </div>
            <div class="container">
                <section class="commentSection">
                    <h1>Write A Review:</h1>
                    <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){ ?> 
                    <form action="../controllers/reviews_controller.php" method="post">
                        <br>
                        <p class="para">Please select which breed you would like to leave a review on: <?php include('../utility/breed_list_drop_down.php'); ?></p>
                        <textarea class="textArea" name="review" placeholder="Write your comment about your experience here!"></textarea><br>
                        <input type="hidden" name="action" value="create_review">
                        <input class="button" type="submit" value="Create Review">
                    </form>
                    <?php } else { ?>
                    <p class="para">
                        <img class="dogImage" src="../utility/assets/smallDogs.jpg" alt="Image of two small dogs."/>
                        <br>
                        <br>
                        <a href="../controllers/login_controller.php">
                            Click to Login into an existing account or Sign up as a new user to leave a review!
                        </a>
                    </p>
                    <?php } ?>
                    <br>
                    <br>
                </section>
            </div>

            <div class="title">
                <br>
                <hr>
                <form action="../controllers/reviews_controller.php" method="post">
                    <p class="para">Would you like to read reviews about a particular breed? <br> Select a breed from the drop down list to view the reviews for that breed.</p>
                    <?php include('../utility/breed_list_drop_down.php') ?>
                    <label>&nbsp;</label>
                    <input class="button" type="submit" name="action" value="Filter Reviews">
                    <input class="button" type="submit"  name="action" value="Clear Filters">
                </form>
                <br>
                <hr>
                <h1>Reviews:</h1>
                <br>
            </div>
            
            <div class="sidenav">
                <button class="topButton"><a href="#top">Back to Top</a></button>
            </div>
            <?php if ($reviews !== []) {
                foreach ($reviews as $review) : ?>
                    <section>
                    <table>
                        <tr>
                            <td>
                                <h4><?php echo $review->get_breed(); ?></h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h2>
                                    <?php 
                                        $id = $review->get_user_id();
                                        $user_name = get_user_by_id($id); 
                                        echo "<h2>" . $user_name[0] . ", </h2>";
                                    ?>
                                </h2>
                                <p class="reviewPara">
                                    <?php echo $review->get_review(); ?>
                                </p>    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5>
                                    <?php echo $review->get_timestamp(); ?>
                                </h5>
                                <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){ 
                                    if($_SESSION['id'] == $id) { 
                                        $id = $review->get_id();?> 
                                        <form action="../controllers/reviews_controller.php" method="post">
                                            <input type="hidden" name='id' value="<?php echo $id; ?>" />
                                            <button class="deleteButton" name='action' value="delete" >Delete Review</button>
                                        </form>
                                        <br>
                                    <?php }
                                } ?>
                            </td>
                        </tr>
                    </table>
                <br>
                </section>
            <?php endforeach; } else { ?>
                <div class="container">
                    <section>
                        <h1>Oh No..</h1>
                        <p class="para">There are no reviews that match your search, please try again.</p>
                        <img src="../utility/assets/dogWithBows.jpg" alt="Picture of three dogs with bows">
                        <p class="para">
                            Don't forget to check out our Find-A-Fido Survey!
                            You enter a little information and we will make the perfect match!
                            <br>
                            <a href="../controllers/home_controller.php">Click here to Find-A-Fido!</a>
                            <br>
                        </p>
                    </section>
                </div>
            <?php } ?>
            <br>
        </main>
    </body>
    <?php
        include('footer.php');
    ?>
</html>