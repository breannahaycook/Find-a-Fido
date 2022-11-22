<!DOCTYPE html>
<html class="aboutUsBackground" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/804adbe216.js" crossorigin="anonymous"></script>
        <title>About Us | Find a Fido</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

            :root {
                --lightblue: #B9DEE7;
                --iconbar:#77CCFF;
                --button: #A91B0D;
                --buttonafter: #60100B;
                --hovercolor: #253DA1;
                --fontcolor: #FFFFFF;
                --lightblue: #B9DEE7;
                --navbar:#77CCFF;
                --button: #A91B0D;
                --buttonafter: #60100B;
                --hovercolor: #253DA1;
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
            
            .gridContainer{
                display: grid;
                grid: 500px 500px 500px 500px / auto auto;
                gap: 70px;
                padding: 100px;
                justify-content: center;
            }

            .imageItem{
                background-image: url("../utility/assets/Dooberman.jpg");
                background-position: center;
                background-size: cover;
                border-radius: 50px;
                width: 500px;
                height: 500px;

            }

            h1{
                font-family: 'Fredoka', sans-serif;
                font-size: 50px;
                color: rgb(60, 77, 156);
                letter-spacing: 1px;
                text-shadow: 0px 3px 2px rgb(201, 201, 201);
                text-align: center;
            }

            .bioItem{
                display: flex;
                flex-direction: column;
                justify-content:end;
                width: 500px

            }

            .bio{
                text-align: left;
                color: rgb(43, 60, 133);
                font-family: 'Fredoka', sans-serif;
                font-size: 20px;
                font-style: normal;
            }

            .aboutUsName{
                text-align: left;
                color: rgb(43, 60, 133);
                font-size: 40px;
                font-family: 'Fredoka', sans-serif;
                text-shadow: 0px 3px 2px rgb(201, 201, 201);
            }

            hr{
                width: 75%;
            }

            .aboutUsBio{
                text-align: center;
                color: rgb(102, 102, 102);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
            }

            .aboutUsTitle{
                font-size: 60px;
            }


            .prev, .next {
                cursor: pointer;
                position: relative;
                top: 50%;
                width: auto;
                margin-top: -22px;
                padding: 16px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }
            .next {
                float: right;
                right: 0px;
                border-radius: 3px 0 0 3px;
            }
            .prev:hover, .next:hover {
                background-color: rgba(0,0,0,0.8);
            }

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

        <h1 class="aboutUsTitle">About Us</h1>
        <p class="aboutUsBio">Our goal as Team Fido’s Friends is to help aspiring dog owners find the dog breed that
            best suits their lifestyle. <br> Meet our developers and their own furry friends below!</p>
        <hr>
        <div class="gridContainer">
            <!--Breanna-->
            <div id="bh" class="imageItem">
                <a class="prev" onclick="nextImage(-1, 'bh', bh)">&#10094;</a>
                <a class="next" onclick="nextImage(1, 'bh', bh)">&#10095;</a>
            </div>

            <div class="bioItem">
                <h2 class="aboutUsName">Breanna Haycook</h2>
                <p class="bio">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    id est laborum.
                </p>
            </div>


            <!--Kaitlyn Howell-->
            <div class="imageItem">
                <a class="prev" onclick="">&#10094;</a>
                <a class="next" onclick="">&#10095;</a>
            </div>
            <div class="bioItem">
                <h1 class="aboutUsName">Kaitlyn Howell</h1>
                <p class="bio">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    id est laborum.
                </p>
            </div>

            <!--Rafiul Hassan-->
            <div class="imageItem">
                <a class="prev" onclick="">&#10094;</a>
                <a class="next" onclick="">&#10095;</a>
            </div>
            <div class="bioItem">
                <h2 class="aboutUsName">Rafiul Hassan</h2>
                <p class="bio">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    id est laborum.
                </p>
            </div>

            <!--Tahreem Bhatti-->
            <div class="imageItem">
                <a class="prev" onclick="">&#10094;</a>
                <a class="next" onclick="">&#10095;</a>
            </div>
            <div class="bioItem">
                <h2 class="aboutUsName">Tahreem Bhatti</h2>
                <p class="bio">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    id est laborum.
                </p>
            </div>

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

        <script>
            //works best if everyone has the same amount of images
            //will need to alter code if various numbers
            let bh0 = "url(../utility/assets/Dooberman.jpg)";
            let bh1 = "url(../utility/assets/Husky.jpg";
            let bh2 = "url(../utility/assets/Bolognese.jpg";
            const bh = [bh0, bh1, bh2, 0];

            function nextImage(num, name, array) {
                array[3] = array[3] + num;
                if (array[3] > 2) {
                    array[3] = 0;
                } else if (array[3] < 0) {
                    array[3] = 2;
                }
                document.getElementById(name).style.backgroundImage = array[array[3]];
            }
        </script>


    </body>


</html>
