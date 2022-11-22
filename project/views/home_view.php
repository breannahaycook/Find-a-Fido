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

            .header__section{
                height: 105vh;
                background-image: linear-gradient(
                    to right bottom, rgba(0, 111, 230, 0.646),
                    rgba(0, 62, 128, 0.405)),
                    url(../img/background_Header.webp);
                background-size: cover;
                background-position: center;
                clip-path: polygon(0 0, 100% 0, 100% 85vh, 0 100%);
                position: relative;
                font-family: "Lato", sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 1.7;
            }

            .logo-box{
                position: absolute;
                top: 10px;
                left: 20px;
            }

            .logo{
                height: 85px;
            }

            .header-text-box{
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }

            .heading-primary{
                color: #fff;
                text-transform: uppercase;
                backface-visibility: hidden;
                margin-bottom: 50px;
            }

            .heading-primary-main{
                display: block;
                font-size: 80px;
                font-weight: 400;
                letter-spacing: 12.4px;
                animation-name: moveInLeft;
                animation-duration: 2s;
                animation-timing-function: ease-out;

            }

            .heading-primary-second{
                display: block;
                font-size: 20px;
                font-weight: 700;
                letter-spacing: 17.4px;

                animation: moveInRight 2s ease-out;

            }

            @keyframes moveInLeft{
                0%{
                    opacity: 0;
                    transform: translateX(-100px);
                }

                80%{
                    transform: translate(5px);
                }

                100%{
                    opacity: 1;
                    transform: translate(0);

                }
            }
            @keyframes moveInRight{
                0%{
                    opacity: 0;
                    transform: translateX(100px);
                }

                80%{
                    transform: translate(-5px);
                }

                100%{
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

            .btn-white{
                background-color: #fff;
                color: #777;
            }

            .btn::after{
                content: "";
                display: 100%;
                height: 100%;
                width:100%;
                border-radius: 100px;

            }
            .main-cointainer{
                display: grid;
                grid-template-columns: 1fr 4fr ;
                grid-template-rows: 1fr;
                grid-column-gap: 90px;
                
                height: 100vh;
                
                
                
            }
            
            .main-cointainer--reviews{
                display: grid;

                grid-template-columns: 1fr  ;
                grid-template-rows: repeat(4, 1fr);
                grid-row-gap: 50px;
            }
            
            .main-cointainer--form{
                display: grid;
                margin:0 auto;
                grid-template-columns: 1fr;
                grid-template-rows: repeat(8, 1fr);
                grid-row-gap: 50px; 
                
                
            }


        </style>
    </head>

    <body>
         <?php

        include('nav.php');
        ?>


        <main>
            <div class="body__header">
                <section class="header__section">

                    <div class="header-text-box">
                        <h1 class="heading-primary">
                            <span class="heading-primary-main">Find a Fido</span>
                            <span class="heading-primary-second">Find a Friend wtih your Lifestyle.</span>
                        </h1>
                        <a href="#form" class="btn btn-white">Take our Lifestyle Survey.</a>

                    </div>
                </section>
            </div>

            <div class="main-cointainer">

                <aside class="main-cointainer--reviews">
                    <div class="main-cointainer--reviews_one">
                        <h1 class="reviews-header">Customer reviews</h1>
                        <p class="reviews-p first">lorem ipsum diuwmsdsfassfsffsffs</p>

                    </div>
                    <div class="main-cointainer--reviews_two">
                        <h1 class="reviews-header">Customer reviews</h1>
                        <img class="img" href="#" >
                        
                        <p class="reviews-p first">lorem ipsum diuwmsdsfassfsffsffs</p>

                    </div><!-- comment -->
                    
                    <div class="main-cointainer--reviews_three">
                        <h1 class="reviews-header">Customer reviews</h1>
                        <p class="reviews-p first">lorem ipsum diuwmsdsfassfsffsffs</p>

                    </div><!-- comment -->
                    <div class="main-cointainer--reviews_four">
                        <h1 class="reviews-header">Customer reviews</h1>
                        <p class="reviews-p first">lorem ipsum diuwmsdsfassfsffsffs</p>

                    </div><!-- comment -->

                </aside>

                <section class="main-cointainer--form"> 

                    <div class="main-cointainer--form-one">
                        <form action="">
                            <p>How much time can you put into training?</p>
                            <input type="radio" id="training_low" name="range" value="low">
                            <label for="low">Low</label><br>
                            <input type="radio" id="training_medium" name="range" value="moderate">
                            <label for="moderate">Moderate</label><br>
                            <input type="radio" id="training_high" name="range" value="high">
                            <label for="high">High</label>
                        </form>
                    </div>


                   
                    <div class="main-cointainer--form-two">
                        <form action="">
                            <p>Are allergies an issue?</p>
                            <input type="radio" id="hypoallergenic_no" name="range" value="no">
                            <label for="no">No</label><br>
                            <input type="radio" id="hypoallergenic_yes" name="range" value="yes">
                            <label for="yes">YES</label><br>
                        </form>
                    </div>

                    
                    <div class="main-cointainer--form-three">

                        <form action="">
                            <p>How active are you?</p>
                            <input type="radio" id="training_low" name="range" value="sedantry">
                            <label for="sedantry">Sedentary</label><br>
                            <input type="radio" id="training_medium" name="range" value="moderate_active">
                            <label for="moderate_active">Moderately Active</label><br>
                            <input type="radio" id="training_high" name="range" value="very_active">
                            <label for="very_active">Very Active</label>
                        </form>
                    </div>    

                
                    <div class="main-cointainer--form-four">
                        <form action="">
                            <p>How much noise can you tolerate?</p>
                            <input type="radio" id="training_low" name="range" value="quite">
                            <label for="quite">Quite</label><br>
                            <input type="radio" id="training_medium" name="range" value="medium">
                            <label for="medium">Medium</label><br>
                            <input type="radio" id="training_high" name="range" value="veryvocal">
                            <label for="veryvocal">VeryVocal</label>
                        </form>
                    </div>

                 
                    <div class="main-cointainer--form-five">
                        <form action="">
                            <p>Do you have a small children?</p>
                            <input type="radio" id="training_low" name="range" value="poor">
                            <label for="poor">Poor</label><br>
                            <input type="radio" id="training_medium" name="range" value="good">
                            <label for="good">Good</label><br>
                            <input type="radio" id="training_high" name="range" value="great">
                            <label for="great">Great</label>
                        </form>
                    </div>

              
                    <div class="main-cointainer--form-six">
                        <form action="">
                            <p>How much time can you dedicate to gromming?</p>
                            <input type="radio" id="training_low" name="range" value="minimal">
                            <label for="minimal">Minimal</label><br>
                            <input type="radio" id="training_medium" name="range" value="moderate">
                            <label for="moderate">Moderate</label><br>
                            <input type="radio" id="training_high" name="range" value="alot">
                            <label for="alot">A Lot</label>
                        </form>
                    </div>

                
                    <div class="main-cointainer--form-seven">
                        <form action="">
                            <p>How much space do you have?</p>
                            <input type="radio" id="training_low" name="range" value="verylittle">
                            <label for="verylittle">Very Little</label><br>
                            <input type="radio" id="training_medium" name="range" value="alittle">
                            <label for="alittle">A little</label><br>
                            <input type="radio" id="training_high" name="range" value="alot">
                            <label for="alot">A Lot</label>
                        </form>
                    </div>

                 
                    <div class="main-cointainer--form-eight">
                        <form action="">
                            <p>How much hair can you tolerate?</p>
                            <input type="radio" id="training_low" name="range" value="minimal">
                            <label for="minimal">Minimal</label><br>
                            <input type="radio" id="training_medium" name="range" value="moderate">
                            <label for="moderate">Moderate</label><br>
                            <input type="radio" id="training_high" name="range" value="alot">
                            <label for="alot">A Lot</label>
                        </form>
                    </div>
                   
                    <button type="submit">Submit Form</button>

               

                </section>
            </div>

        </main>
         <?php

        include('footer.php');
        ?>

    </body>

</html>