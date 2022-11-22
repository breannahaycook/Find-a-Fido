<!DOCTYPE html>
<html lang="en" class="loginBackground">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://kit.fontawesome.com/804adbe216.js" crossorigin="anonymous"></script>
        <title>Create Account | Find a Fido</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
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


            .header{
                width: 100%;
                height: 120px;
                background-color: var(--lightblue);
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-radius: 20px;
                padding: 0 100px;

            }
            .nav__logo{
                height: 105px;
                border-radius: 25px;

                margin-top: 5px;
                margin-bottom: 5px;
                margin-right: 11px;
            }

            .hamburger{
                display: none;
            }
            /*            .head{
                            font-size: 30px;
            
                        }
                        .head_f{
                            font-size: 40px;
                            color: blue;
                        }*/

            .nav__label{
                display: flex;
                justify-content: space-around;
                align-items: center;
            }

            .nav__items{
                display: flex;
                margin-right: 20px;

            }

            .nav__lists{
                list-style: none;
                text-transform: uppercase;
                padding-right: 50px;

            }


            .nav__tags{
                text-decoration: none;
                color: white;
                padding: 8px 10px;
            }

            .nav__tags:hover{
                background-color: var(--hovercolor);
                transition: all 0.5s ease-in-out;
                border-radius: 100px;
                color: black;

            }
            .btn{
                background-color: var(--button);
                transition: all 0.5s ease-in-out;
                border-radius: 100px;
                color: black;
            }

            .checkbtn{
                color: var(--hovercolor);
                font-size: 25px;
                cursor: pointer;
                float: right;
                display: none;
            }

            #check{
                display: none;
            }


            .loginBackground {
                background: url("../utility/assets/whiteDogsBG.jpeg") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-color: #B9DEE7;
            }

            /* login flex container */
            .loginContainer {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 90vh;
            }

            h1{
                font-family: 'Fredoka', sans-serif;
                font-size: 50px;
                color: rgb(60, 77, 156);
                letter-spacing: 1px;
                text-shadow: 0px 3px 2px rgb(201, 201, 201);
                text-align: center;
            }

            /* login box */
            section{
                text-align: center;
                background-color: white;
                height: 440px;
                width: 440px;
                border-radius: 70px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);
                ;
            }

            label{
                font-size: 18px;
                color: rgb(43, 60, 133);
                font-family: 'Fredoka', sans-serif;
                font-weight: 500;
            }

            .createAccount{
                height: 510px;
                width: 500px;
            }


            /* these are simply because I can't figure out how to align the labels to the left and have the inputs centered at the same time*/
            /* maybe fix with flex? */
            .emailAlign{
                margin-right: 50%;
            }

            .passwordAlign{
                margin-right: 43%;
            }

            .nameAlign{
                margin-right: 50%
            }
            /*--------------------------------------------------------------------------*/

            input{
                margin-top: 10px;
                margin-bottom: 10px;
                width: 60%;
                outline: none;
                text-indent: 5px;
            }

            /* input box style */
            .it{
                border-radius: 5px;
                border: 1px solid rgb(186, 192, 199);
                height: 28px;
                box-shadow: 0.7px 0.7px 4px rgb(194, 196, 199) inset;
            }


            ::placeholder{
                color: rgb(161, 161, 161);
                font-style: italic;
                opacity: 1;
                text-indent: 5px;
            }

            .button{
                margin-top: 20px;
                height: 45px;
                background: linear-gradient(138deg, rgba(60,77,156,1) 0%, rgba(124,143,194,1) 75%, rgba(185,222,231,1) 100%);
                font-size: 25px;
                font-weight: 500;
                letter-spacing: 2px;
                color: white;
                border-radius: 35px;
                border: none;
                font-family: 'Fredoka', sans-serif;
            }


            p{
                text-align: center;
                font-style: italic;
                color: rgb(43, 60, 133);
                font-family: 'Fredoka', sans-serif;
            }

/*********************** Footer Starts***********************/
/*********************** Footer Starts***********************/
/*********************** Footer Starts***********************/
/*********************** Footer Starts***********************/


            .body__footer{
                display: grid;
/*                justify-content: end;*/
                align-content: end;
                min-height: 100vh;

            }
            .footer{
                background-color: var(--lightblue);

                height: auto;
                padding: 50px 80px;
                width: 100%;

            }
            .footer_logo{
                height: 60px;
                border-radius: 15px;
            }

            .footer_bars{
                width: 100%;
                display: grid;
                grid-template-columns: 2fr 1fr 1fr;
                grid-gap: 90px;

            }

            .aboutus_h{
                position: relative;
                color: var(--fontcolor);
                font-weight: 500;
                margin-bottom: 15px;
            }

            .aboutus_h::before{
                content: "";
                position: absolute;
                bottom: -5px;
                left: 0;
                width: 50px;
                height: 6px;
                background: #253DA1;
            }

            .aboutus_p{
                color: var(--fontcolor);
                line-height: 2;

            }

            .aboutus_ul{
                margin-top: 20px;
                display: grid;
                grid-template-columns: repeat(3, 60px);
                grid-gap: 10px;
            }

            .aboutus_li{
                list-style: none;
            }

            .aboutus_a{
                display: inline-block;
                height: 48px;
                width: 48px;
                background: var(--iconbar);
                display: grid;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                border-radius: 20px;
            }

            .aboutus_a:hover{
                color: red;
            }

            .links{
                position: relative;
            }


            .footer_items{
                list-style: none;

            }

            .footer_tags{
                text-decoration: none;
                color: var(--fontcolor);
                display: inline-block;
                margin-bottom: 10px;
                transition: all 0.1s ease-in;


            }
            .footer_tags:hover{
                color: var(--fontcolor);
                background: var(--hovercolor);
                padding: 4px 10px;
                border-radius: 20px;
            }

            .contact_us{
                position: relative;

            }

            .info_list{
                display: grid;
                grid-template-columns: 30px 1fr;
                margin-bottom: 16px;
                color: var(--fontcolor);

            }

            .info_a{
                color: var(--fontcolor);
            }

            .copy{
                background-color: var(--hovercolor);
                width: 100%;
                padding: 8px 100px;
                text-align: center;
                color: var(--fontcolor);
            }


            @media (max-width: 800px) {

                .footer_bars{
                    grid-template-columns: repeat(1, 1fr);
                }

            }
            
                        @media screen and (max-width: 1442px) {

                .nav__lists{
                    padding-right: 15px;
                }


            }
            @media screen and (max-width: 1300px) {

                .nav__lists{
                    padding-right: 5px;
                }


            }

            @media screen and (max-width: 1300px) {

                .nav__lists{
                    padding-right: 5px;
                }
                .header{
                    padding: 20px;
                }


            }

            @media screen and (max-width: 994px) {

                .nav__lists{
                    padding-right: 2px;
                }
                .header{
                    padding: 5px;
                }


            }

            @media screen and (max-width: 990px) {

                .header{
                    display: flex;
                    justify-content: space-around;
                    align-items: center;
                }
                .checkbtn{
                    display: block;
                    height: 20px;
                    padding-right: 50px;

                }
                .nav__logo{
                    height: 80px;
                    border-radius: 25px;
                    margin-top: 5px;
                    margin-bottom: 5px;
                    margin-right: 11px;
                }
                .nav__items{
                    display: none;
                }

                /* .nav__items{
                    width: 100%;
                    height: 100vh;
                    background-color: var(--lightblue);
                    
                    top: 80px;
                }
                .nav__lists{
                    display: block;
                    margin: 60px 0px;
                } */



            }
            @media screen and (max-width: 410px){

                .checkbtn{
                    padding-left: 10px;

                }
                /*                .head{
                                    font-size: 22px;
                
                                }
                
                                .head_f{
                                    font-size: 22px;
                                    color: blue;
                                }*/
                .nav__logo{
                    height: 80px;
                    border-radius: 25px;
                    margin-top: 5px;
                    margin-bottom: 5px;
                    margin-right: 11px;
                }

            }
            /*********************** Footer Ends***********************/
            /*********************** Footer Ends***********************/
            /*********************** Footer Ends***********************/
            




        </style>

    </head>
    <body>
        <header class="header">
            <div class="nav__label">
                <img class="nav__logo" src="../utility/assets/Picture1.jpg" alt="Company Logo!">

            </div>
            <nav class="nav__bar">    
                <ul class="nav__items">
                    <li class="nav__lists"><a class="nav__tags" href="home_view.php">Home</a></li>
                    <li class="nav__lists"><a class="nav__tags" href="dog_breed_view.php">Dog Breed</a></li>
                    <li class="nav__lists"><a class="nav__tags" href="dog_care_view.php">Dog Care</a></li>
                    <li class="nav__lists"><a class="nav__tags" href="reivews_view.php">Reviews</a></li>
                    <li class="nav__lists"><a class="nav__tags" href="about_us_view.php">About Us</a></li>
                    <li class="nav__lists"><a class="nav__tags btn" href="login_view.php">Log In / Sign UP</a></li>
                </ul>
            </nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">

                <i class="fa-solid fa-bars"></i>

            </label>

        </header>
        <div class="loginContainer">
            <section class="createAccount">
                <h1>Create Account</h1>
                <?php
                // will display error message if unable to create account
                if (isset($message) && $message != " ") {
                    echo $message;
                }
                ?>

                <form action="../controllers/signup_controller.php" method="post">
                    <label class="nameAlign" for="name">Name:</label><br>
                    <input class="it" type="text" id="name" name="name" placeholder="Enter your name" required><br>

                    <label class="emailAlign" for="email">Email:</label><br>
                    <input class="it" type="text" id="email" name="email" placeholder="Enter your email" required><br>

                    <label class="passwordAlign" for="password">Password:</label><br>
                    <input class="it" type="password" id="password" name="password" placeholder="Enter your password" required><br>

                    <input type="hidden" name="action" value="create_account">
                    <input class="button" type="submit" value="Submit">
                </form>
                <p>Already have an account? <a href="../views/login_view.php">Login!</a></p>
            </section>
        </div>
        <div class="body__footer">
            <footer class="footer">
                <div class="footer_bars">

                    <div class="aboutus">
                        <h2 class="aboutus_h">About us</h2>
                        <p class="aboutus_p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium amet, 
                            asperiores explicabo ipsam animi accusantium. Possimus, quas at nobis deleniti ab aut 
                            ipsa illo veniam, quis odit in quidem quae.</p>
                        <ul class="aboutus_ul">
                            <li class="aboutus_li"><a class="aboutus_a" href="https://www.facebook.com/profile.php?id=100087791181706"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="aboutus_li"><a class="aboutus_a" href="https://www.instagram.com/find_a_fido/"><i class="fab fa-instagram"></i></a></li>
                            <li class="aboutus_li"><a class="aboutus_a" href="https://www.ti.com/find_a_fido/"><i class="fab fa-twitter"></i></a></li>
                        </ul>    
                    </div>

                    <div class="links">
                        <h2 class="aboutus_h">Quick Links</h2>
                        <ul class="footer_items">
                            <li class="footer_lists"><a class="footer_tags" href="home_view.php">Home</a></li>
                            <li class="footer_lists"><a class="footer_tags" href="dog_breed_view.php">Dog Breed</a></li>
                            <li class="footer_lists"><a class="footer_tags" href="dog_care_view.php">Dog Care</a></li>
                            <li class="footer_lists"><a class="footer_tags" href="reivews_view.php">Reviews</a></li>
                            <li class="footer_lists"><a class="footer_tags" href="about_us_view.php">About Us</a></li>
                            <li class="footer_lists"><a class="footer_tags" href="login_view.php">Log In / Sign UP</a></li>
                        </ul>
                    </div>

                    <div class="contact_us">
                        <h2 class="aboutus_h">Contact US</h2>
                        <ul class="info">
                            <li class="info_list">
                                <span class="info_list"><i class="fa-regular fa-envelope"></i></span>
                                <p class="info_p"><a class="info_a" href="#">findfidoocc@gmail.com</a></p>
                            </li>
                            <li class="info_list">
                                <span class="info_list"><i class="fa-solid fa-location-dot"></i></span>
                                <span class="info_list">Oakland Community College Hall</span>
                            </li>
                            <li class="info_list"><a class="info_a" href="#"><img class="footer_logo" src="../utility/assets/Picture1.jpg" alt="Company Logo!"></a></li>
                        </ul>

                    </div>
                </div>

            </footer>
        </div>
        <div class="copy">
            <p>Copyright © Find-A-Fido. All rights Reserved.</p>
        </div>

    </body>

</html>
