<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/804adbe216.js" crossorigin="anonymous"></script>
        <title>Reviews | Find-A-Fido</title>
        
        <style>


            :root {

                --header_color: blue;
                --review_box_color: ;
                --review_sec_color: ;
                --button_color: rgba(0, 153, 255, 0.413);
                --button_font: black;


            }


            * {

                padding: 0;
                margin: 0;
                box-sizing: border-box;

            }


            .header--main {
                background-image: linear-gradient(to right bottom, rgba(0, 111, 230, 0.951),
                    rgba(0, 62, 128, 0.279)),
                    url(./pictures/whiteDogsBG.jpeg);
                color: beige;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 80px;

            }

            .header--main-greetings {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            .header--main-greetings-h {
                padding: 20px 60px;
                font-size: 2.5rem;

            }

            .header--main-greetings-h2 {
                padding: 15px 60px;
                font-size: 1.3rem;
            }

            .main--reviews-container {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 80px;
                background-image: linear-gradient(to right bottom, rgba(0, 111, 230, 0.951),
                    rgba(0, 62, 128, 0.279)),
                    url(./pictures/whiteDogsBG.jpeg);


            }

            .main--reviews-first-container {
                background-color: white;
                /* -----add gradient------ */
                padding: 30px;
                border-radius: 30px;
                box-shadow: 2px 2px 8px black;
                text-align: left;

            }

            .main--reviews-first-container-box{

                padding: 30px;
                border-radius: 30px;
            }

            .main--reviews-first-container-h {
                margin-bottom: 20px;
                font-size: 1.4rem;
                text-decoration: underline;


            }

            .main--reviews-first-container-p {
                font-size: 1.1rem;
                margin-bottom: 15px;
            }

            .main--reviews-first-container-input-container {
                display: flex;
                justify-content: left;
                /* align-items: bottom; */
                margin-bottom: 5px;
            }

            .main--reviews-first-container-p-name {
                margin: 0px 5px 0 0;
                margin-bottom: 5px;


            }

            .main--reviews-first-container-textarea-container {
                display: block;
                position: relative;
                margin-bottom: 15px;

            }

            .main--reviews-first-container-textarea-comment {
                height: 150px;
                width: 440px;
            }

            .main--reviews-first-container-textarea-name {
                margin-bottom: 8px;
            }

            .main--reviews-second-container-button {
                height: 40px;
                width: 120px;
                border-radius: 19px;
                background-color: var(--button_color);
                color: var(--button_font);

            }

            .main--reviews-second-container-button:hover {
                transform: translateY(-3px);
                box-shadow: 0 1px 10px black;
            }


            .main--reviews-second-container-button:active {
                transform: translateY(-1px);
                box-shadow: 0 1px 10px black;

            }


        </style>

    </head>
    
    
    <?php
    include('nav.php');
    ?>
    
    
    <body>


        <main>


            <section class="header--main">

                <div class="header--main-greetings">

                    <h1 class="header--main-greetings-h">
                        Reviews!
                    </h1>

                    <h3 class="header--main-greetings-h2">
                        Welcome to our review section, here our valued members has left their thoughts about their new
                        friend!
                    </h3>

                </div>

            </section>

            <section class="main--reviews-container">

                <div class="main--reviews-first-container">

                    <form action="../controllers/reviews_controller.php" method="post">

                        <div class="main--reviews-first-container-box">

                            <h2 class="main--reviews-first-container-h"> Write A Review:</h2>

                            <p class="main--reviews-first-container-p">Please select which breed you would like to leave a
                                review on.</p>

                            <?php include('../utility/breed_list_drop_down.php'); ?>

                            <div class="main--reviews-first-container-input-container">
                                <p class="main--reviews-first-container-p-name">Username:</p>

                                <!<!--_Input style problem in name condition -->
                                <input class="main--reviews-first-container-p-name" type="name" id="password"
                                       name="username" placeholder="Username." required>
                            </div>


                            <div class="main--reviews-first-container-textarea-container">

                                <p class="main--reviews-first-container-textarea-name">Share your experience:</p>

                                <textarea class="main--reviews-first-container-textarea-comment" name="review"
                                          placeholder="Write your comment about your experience! "></textarea><br>

                            </div>

                            <input type="hidden" name="action" value="create_review">
                            <input class="main--reviews-second-container-button" type="submit" value="Create Review">

                        </div>

                </div>
            </section>

            <!-- Did not touch this section yet -->
            <section class="customer--review-main-container">

                <div class="customer--review-container">

                    <form action="../controllers/reviews_controller.php" method="post">
                        <?php include('../utility/breed_list_drop_down.php') ?>
                        <label>&nbsp;</label>
                        <input type="hidden" name='action' value="filter_reviews" />
                        <input type="submit" value="Filter Reviews"><br>
                    </form>
                    <br>


                    <table>
                        <?php foreach ($reviews as $review) : ?>
                            <tr>
                                <td>
                                    <?php
                                    $id = $review->get_user_id();
                                    echo $id;
                                    ?>
                                </td>
                                <td>
    <?php echo $review->get_breed(); ?>
                                </td>
                                <td>
    <?php echo $review->get_review(); ?>
                                </td>
                                <td>
    <?php echo $review->get_timestamp(); ?>
                                </td>
                            </tr>
<?php endforeach; ?>
                    </table>

                </div>

            </section>

        </main>


    </body>
    <?php
    include('footer.php');
    ?>
</html>