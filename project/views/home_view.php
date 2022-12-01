<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/804adbe216.js" crossorigin="anonymous"></script>
        <title>Home | Find-A-Fido</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

            :root {
                --lightblue: #B9DEE7;
                --navbar:#77CCFF;
                --button: #A91B0D;
                --buttonafter: #60100B;
                --hovercolor: #253DA1;
                --lightblue: #B9DEE7;
                --iconbar:#77CCFF;
                --button: #A91B0D;
                --buttonafter: #60100B;
                --hovercolor: #253DA1;
                --fontcolor: #FFFFFF;
            }

            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: 'Roboto', sans-serif;
            }


            /*            body__header{
                            font-family: "Lato", sans-serif;
                            font-weight: 400;
                            font-size: 16px;
                            line-height: 1.7;
                            color: #777;
                            padding: 150px;
                        }*/


            .header__section {
                height: 70vh;
                background-image: linear-gradient(to right bottom, rgba(0, 111, 230, 0.646),
                    rgba(0, 62, 128, 0.405)),
                    url(../utility/assets/whiteDogsBG.jpeg);
                background-repeat: no-repeat;
                background-position: bottom;
                /* clip-path: polygon(0 0, 100% 0, 100% 85vh, 0 100%); */
                position: relative;
                font-family: "Lato", sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 1.7;

            }

            .logo-box {
                position: absolute;
                top: 10px;
                left: 20px;
            }

            .logo {
                height: 85px;
            }

            .header-text-box {
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            .heading-primary {
                color: #fff;
                text-transform: uppercase;
                backface-visibility: hidden;
                margin-bottom: 50px;
            }

            .heading-primary-main {
                display: block;
                font-size: 80px;
                font-weight: 400;
                letter-spacing: 12.4px;
                animation-name: moveInLeft;
                animation-duration: 2s;
                animation-timing-function: ease-out;

            }

            .heading-primary-second {
                display: block;
                font-size: 20px;
                font-weight: 700;
                letter-spacing: 17.4px;

                animation: moveInRight 2s ease-out;

            }

            @keyframes moveInLeft {
                0% {
                    opacity: 0;
                    transform: translateX(-100px);
                }

                80% {
                    transform: translate(5px);
                }

                100% {
                    opacity: 1;
                    transform: translate(0);

                }
            }

            @keyframes moveInRight {
                0% {
                    opacity: 0;
                    transform: translateX(100px);
                }

                80% {
                    transform: translate(-5px);
                }

                100% {
                    opacity: 1;
                    transform: translate(0);

                }
            }

            .btn:link,
            .btn:visited {
                text-transform: uppercase;
                text-decoration: none;
                padding: 15px 40px;
                display: inline-block;
                border-radius: 100px;
                background-color: #003d80;
                color: #fff;
                transition: all .1s;

            }

            .btn:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 20px black;

            }

            .btn:active {
                transform: translateY(-1px);
                box-shadow: 0 5px 10px black;

            }

            .btn-white {
                background-color: #fff;
                color: #777;
            }

            .btn::after {
                content: "";
                display: 100%;
                height: 100%;
                width: 100%;
                border-radius: 100px;

            }


            /* ----------------CSSSS div main section container--------------------- */

            .main-cointainer {
                background-image: linear-gradient(to right bottom, rgba(0, 111, 230, 0.653),
                    rgba(0, 62, 128, 0.334)),
                    url();

                display: flex;
                justify-content: space-between;
                padding: 2rem;

            }

            /* ------------------Css design for form container-------------*/

            .main-cointainer--form {

                background-color: white;
                width: 50vw;
                margin-right: 20px;
                padding: 50px;
                text-align: left;
                font-size: 20px;
                border-radius: 40px;
                box-shadow: 20px 10px 50px black;

            }


            .main-cointainer--form-main-one{
                /* text-align: center; */
                /* margin: 0 auto; */
                padding: 50px 150px 90px 150px;
                margin-bottom: 50px;
                border: 5px solid black;
                border-radius: 20px;
                box-shadow: 10px 5px 10px black;
            }

            .main-cointainer--form-one-p {
                margin-bottom: 40px;
                color: black;

            }

            .main-cointainer--form-one-chkbox {
                margin-bottom: 20px;
            }

            .main-cointainer--form-one-chk{
                margin-right: 20px;
            }

            .main-cointainer--form_btn {
                display: flex;
                justify-content: center;
            }

            .main-cointainer--form_btn-sb{

                text-transform: uppercase;
                text-decoration: none;
                padding: 30px 90px;
                border-radius: 100px;
                background-color: #003d80;
                color: #fff;
                transition: all .1s;
                font-size: 16px;
            }


            .main-cointainer--form_btn-sb:hover {
                transform: translateY(-3px);
                box-shadow: 0 10px 20px black;

            }

            .main-cointainer--form_btn-sb:active {
                transform: translateY(-1px);
                box-shadow: 0 5px 10px black;
                color: black;

            }


            .main-cointainer--form_btn-sb::after {
                content: "";
                display: 100%;
                height: 100%;
                width: 100%;
                border-radius: 100px;

            }



            /*-------- Css design for reviews container ---------------*/

            .main-cointainer--reviews {

                background-color: white;
                width: 25vw;
                padding: 20px 40px 20px 40px;
                border-radius: 20px;
                text-align: center;
                font-size: 15px;
                box-shadow: 10px 10px 20px black;
                height: 80%;
            }

            .main-cointainer--reviews-one{
                padding: 30px 20px 70px 20px;
                
                
                
            }

            .main-cointainer--reviews-one-img {
                background-size: cover;
                background-position: center;
                border-radius: 10px;
                /* height: 30vh; */
                width: 10vw;
                border: 5px solid black;
                margin-bottom: 20px;
            }
            .reviews-header{
                margin-bottom: 10px;
            }
            .reviews-p-first{
                letter-spacing: 2px;
                margin-bottom: 50px;
                line-height: 25px;
            }

            /* -------section-activity------------- */

            .activity--container-main{
                background-image: linear-gradient(to right bottom, rgba(0, 111, 230, 0.621),
                    rgba(0, 62, 128, 0.384)),
                    url(../utility/assets/whiteDogsBG.jpeg);
                padding: 30px;
                background-size: cover;
                background-position: center;
            }

            .activity--container-main-greetings{
                text-align: center;
                padding: 80px;
            }

            .activity--container-main-greetings-h{
                font-size: 30px;
            }

            .activity--container-main-section{
                display: flex;
                justify-content: space-around;
                padding: 50px 10px 50px 10px;
            }

            .activity--container-main-section-block{
                text-align: center;
                margin: 20px 10px 20px 10px;
                padding: 10px 20px;
                border-radius: 20px;
                box-shadow: 10px 10px 20px black;
                background-color: #fff;
            }

            .activity--container-main-img{
                width: 20vw;
                /* margin: 50px; */
                padding: 50px;
            }

            .activity--container-main-h{
                margin-bottom: 20px;
            }

            .activity--container-main-p{
                padding: 20px;
            }


        </style>
    </head>

    <?php
    include('nav.php');
    ?>

    <body>



        <main>
            <div class="body__header">
                <section class="header__section">

                    <div class="header-text-box">
                        <h1 class="heading-primary">
                            <span class="heading-primary-main">Find a Fido</span>
                            <span class="heading-primary-second">Find a Friend wtih your Lifestyle.</span>
                        </h1>
                        <a href="# main-cointainer--form" class="btn btn-white">Take our Lifestyle Survey.</a>

                    </div>
                </section>
            </div>

            <div class="main-cointainer">

                <section class="main-cointainer--form">

                    <div class="main-cointainer--form-main">


                        <form class="main-cointainer--form-main-f" action="../controllers/results_controller.php" method="POST" >

                            <div class="main-cointainer--form-main-one">

                                <p class="main-cointainer--form-one-p">What size dog do you want?</p>
                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_low" name="size" value="S" >
                                    <label class="main-cointainer--form-one-lbl" for="low">Small</label>
                                </div>
                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_medium" name="size"
                                           value="M" >
                                    <label class="main-cointainer--form-one-lbl" for="moderate">Medium</label><br>
                                </div>
                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_high" name="size" value="L">
                                    <label class="main-cointainer--form-one-lbl" for="high">Large</label>
                                </div>
                            </div>

                            <div class="main-cointainer--form-main-one">

                                <p class="main-cointainer--form-one-p">How much time can you put into training?</p>
                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_low" name="training_level" value="Low">
                                    <label class="main-cointainer--form-one-lbl" for="low">Low</label>
                                </div>
                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_medium" name="training_level"
                                           value="Moderate">
                                    <label class="main-cointainer--form-one-lbl" for="moderate">Moderate</label><br>
                                </div>
                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_high" name="training_level" value="High">
                                    <label class="main-cointainer--form-one-lbl" for="high">High</label>
                                </div>

                            </div>

                            <div class="main-cointainer--form-main-one">

                                <p class="main-cointainer--form-one-p">Are allergies an issue?</p>
                                <div class="main-cointainer--form-one-chkbox">

                                    <input class="main-cointainer--form-one-chk" type="radio" id="hypoallergenic_no" name="hypoallergenic"
                                           value="No">
                                    <label class="main-cointainer--form-one-lbl" for="no">No</label><br>
                                </div>
                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="hypoallergenic_yes" name="hypoallergenic"
                                           value="Yes">
                                    <label class="main-cointainer--form-one-lbl" for="yes">YES</label><br>

                                </div>

                            </div>

                            <div class="main-cointainer--form-main-one">

                                <p class="main-cointainer--form-one-p">How active are you?</p>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_low" name="activity_level"
                                           value="Very Active">
                                    <label class="main-cointainer--form-one-lbl" for="sedantry">Sedentary</label><br>
                                </div>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_medium" name="activity_level"
                                           value="Moderately Active">
                                    <label class="main-cointainer--form-one-lbl" for="moderate_active">Moderately
                                        Active</label><br>
                                </div>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_high" name="activity_level"
                                           value="Very Active">
                                    <label class="main-cointainer--form-one-lbl" for="very_active">Very Active</label>
                                </div>


                            </div>

                            <div class="main-cointainer--form-main-one">
                                <p class="main-cointainer--form-one-p">How much noise can you tolerate?</p>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_low" name="noise_level" value="Quiet">
                                    <label class="main-cointainer--form-one-lbl" for="quite">Quite</label><br>
                                </div>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_medium" name="noise_level"
                                           value="Medium">
                                    <label class="main-cointainer--form-one-lbl" for="medium">Medium</label><br>
                                </div>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_high" name="noise_level"
                                           value="Very Vocal">
                                    <label class="main-cointainer--form-one-lbl" for="veryvocal">Very Vocal</label>
                                </div>
                            </div>


                            <div class="main-cointainer--form-main-one">
                                <p class="main-cointainer--form-one-p">Do you have a small children?</p>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_low" name="kids_temp" value="Poor">
                                    <label class="main-cointainer--form-one-lbl" for="poor">Poor</label><br>
                                </div>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_medium" name="kids_temp"
                                           value="Good">
                                    <label class="main-cointainer--form-one-lbl" for="good">Good</label><br>
                                </div>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_high" name="kids_temp" value="Great">
                                    <label class="main-cointainer--form-one-lbl" for="great">Great</label>
                                </div>
                            </div>

                            <div class="main-cointainer--form-main-one">


                                <p class="main-cointainer--form-one-p">How much time can you dedicate to gromming?</p>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_low" name="grooming"
                                           value="Minimal">
                                    <label class="main-cointainer--form-one-lbl" for="minimal">Minimal</label><br>
                                </div>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_medium" name="grooming"
                                           value="Moderate">
                                    <label class="main-cointainer--form-one-lbl" for="moderate">Moderate</label><br>
                                </div>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_high" name="grooming" value="A Lot">
                                    <label class="main-cointainer--form-one-lbl" for="alot">A Lot</label>
                                </div>

                            </div>

                            <div class="main-cointainer--form-main-one">

                                <p class="main-cointainer--form-one-p">How large is your House Hold?</p>
                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_low" name="household_size"
                                           value="Very Little">
                                    <label class="main-cointainer--form-one-lbl" for="minimal">Very Little</label><br>
                                </div>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_medium" name="household_size"
                                           value="A Little">
                                    <label class="main-cointainer--form-one-lbl" for="moderate">A Little</label><br>
                                </div>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_high" name="household_size" value="A Lot">
                                    <label class="main-cointainer--form-one-lbl" for="alot">A Lot</label>
                                </div>

                            </div>


                            <div class="main-cointainer--form-main-one">

                                <p class="main-cointainer--form-one-p">How much hair can you tolerate?</p>
                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_low" name="shedding"
                                           value="Minimal">
                                    <label class="main-cointainer--form-one-lbl" for="minimal">Minimal</label><br>
                                </div>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_medium" name="shedding"
                                           value="Moderate">
                                    <label class="main-cointainer--form-one-lbl" for="moderate">Moderate</label><br>
                                </div>

                                <div class="main-cointainer--form-one-chkbox">
                                    <input class="main-cointainer--form-one-chk" type="radio" id="training_high" name="shedding" value="A Lot">
                                    <label class="main-cointainer--form-one-lbl" for="alot">A Lot</label>
                                </div>

                            </div>


                            <div class="main-cointainer--form_btn">

                                <button class="main-cointainer--form_btn-sb" type="submit">Submit Form</button>

                            </div>



                        </form>

                    </div>

                </section>


                <section class="main-cointainer--reviews">

                    <h1 class="reviews-header">Customer reviews</h1>


                    <div class="main-cointainer--reviews-one">


                        <?php $counter = 0; ?>


                        <?php foreach ($reviews as $review) : ?>

                            <?php $breed_name = $review->get_breed(); ?>


                            <img class="main-cointainer--reviews-one-img" src="../utility/assets/<?php echo $breed_name; ?>.jpg" alt="Picture of a <?php echo $breed_name; ?>">

                            <h1 class="reviews-header"> <?php echo $breed_name; ?> </h1>

                            <p class="reviews-p-first"><?php echo $review->get_review(); ?> </p>

                            <?php
                            $counter++;

                            if ($counter == 3) {
                                break;
                            }
                        endforeach;
                        ?>

                    </div>

                </section>



            </div>

            <div class="activity--container-main">

                <div class="activity--container-main-greetings">
                    <h1 class="activity--container-main-greetings-h">We have more sections where you can choose your breed, or find the local dog vets, grooming and park center.</h1>

                </div>

                <section class="activity--container-main-section">

                    <div class="activity--container-main-section-block">

                        <img class="activity--container-main-img" src="../utility/assets/<?php echo $breed_name; ?>.jpg" alt="Picture of a <?php echo $breed_name; ?>">



                        <h1 class="activity--container-main-h">Dog Breed</h1>
                        <p class="activity--container-main-p">You can also select Breeds from our filter section to your desire needs!</p>
                        <a href="../controllers/breed_info_controller.php" class="btn btn-white">Dog Breed.</a>

                    </div>

                    <div class="activity--container-main-section-block">

                        <img class="activity--container-main-img" src="../utility/assets/Golden Retriever.jpg" alt="picture of dog breed page">
                        <h1 class="activity--container-main-h">Dog Care</h1>
                        <p class="activity--container-main-p">Concern about you Dog health we can help you find the local wets 
                            gromming, shredding and also to walk your dog around the park located next to your area.</p>
                        <a href="../controllers/dog_care_controller.php" class="btn btn-white">Dog Care.</a>

                    </div>

                    <div class="activity--container-main-section-block">

                        <img class="activity--container-main-img" src="../utility/assets/Golden Retriever.jpg" alt="picture of dog breed page">
                        <h1 class="activity--container-main-h">About US</h1>
                        <p class="activity--container-main-p">If you want to know a bit about the creator of the website. Click the link below!!!</p>
                        <a href="../controllers/about_us_controller.php" class="btn btn-white">About US</a>

                    </div>

                </section>

            </div>
        </main>


    </body>

    <?php
    include('footer.php');
    ?>

</html>