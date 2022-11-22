<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/804adbe216.js" crossorigin="anonymous"></script>
        <title>Document</title>
        <style>

            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
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
        <section>
            <nav>
                <img src="./assets/Picture1.jpg">
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="DogBreed.html">Dog Breed</a></li>
                    <li><a href="DogCare.html">Dog Care</a></li>
                    <li><a href="Reviews.html">Reviews</a></li>
                    <li><a href="LogIn.html">LogIn</a></li>
                    <li><a href="AboutUs.html">About Us</a></li>


                </ul>
            </nav>
        </section>
        <main>

            <hr>
            <h1>Fido's that best fit your lifestyle!</h1>
            <p>Below are the results from the lifestyle survey for which dog breeds best fit your lifestyle.</p>
            <hr>

            <section>
                <h2>Chihuahua</h2>
                <img src="./assets/Chihuahua-Illo-2.jpg" alt="Picture of a Chihuahua">
                <p>The Chihuahua is a tiny dog with a huge personality. A national symbol of Mexico,
                    these alert and amusing "purse dogs" stand among the oldest breeds of the Americas, 
                    with a lineage going back to the ancient kingdoms of pre-Columbian times. 
                    The Chihuahua is a balanced, graceful dog of terrier-like demeanor, 
                    weighing no more than 6 pounds. The rounded "apple" head is a breed hallmark. 
                    The erect ears and full, luminous eyes are acutely expressive. Coats come in many 
                    colors and patterns, and can be long or short. The varieties are identical except for coat. 
                    Chihuahuas possess loyalty, charm, and big-dog attitude. Even tiny dogs require training, 
                    and without it this clever scamp will rule your household like a little Napoleon. 
                    Compact and confident, Chihuahuas are ideal city pets. 
                    They are too small for roughhousing with kids, and special care must be taken in cold weather, 
                    but Chihuahuas are adaptable'¿as long as they get lots of quality time in their preferred lap.</p>
            </section>

            <hr>


            <section>
                <h2>Poodle</h2>
                <img src="./assets/Standard-Poodle-illustration.jpg" alt="Picture of a Poodle">
                <p>Whether Standard, Miniature, or Toy, and either black, white, or apricot, the Poodle stands proudly 
                    among dogdom¿s true aristocrats. Beneath the curly, low-allergen coat is an elegant athlete and 
                    companion for all reasons and seasons.</p>
                <p>Poodles come in three size varieties: Standards should be more than 15 inches tall at the shoulder; 
                    Miniatures are 15 inches or under; Toys stand no more than 10 inches. All three varieties have the 
                    same build and proportions. At dog shows, Poodles are usually seen in the elaborate Continental 
                    clip. Most pet owners prefer the simpler Sporting clip, in which the coat is shorn to follow the 
                    outline of the squarely built, smoothly muscled body.  Forget any preconceived notions about 
                    Poodles you may have: Poodles are eager, athletic, and wickedly smart dogs of remarkable 
                    versatility. The Standard, with his greater size and strength, is the best all-around athlete 
                    of the family, but all Poodles can be trained with great success.</p>
            </section>

            <hr>

            <section>
                <h2>Doberman</h2>
                <img src="./assets/Dooberman.jpg" alt="Picture of a Doberman">
                <p>Sleek and powerful, possessing both a magnificent physique and keen intelligence, the Doberman 
                    Pinscher is one of dogkind's noblemen. This incomparably fearless and vigilant breed stands 
                    proudly among the world's finest protection dogs. Dobermans are compactly built dogs'¿muscular, 
                    fast, and powerful'¿standing between 24 to 28 inches at the shoulder. The body is sleek but 
                    substantial, and is covered with a glistening coat of black, blue, red, or fawn, with rust 
                    markings. These elegant qualities, combined with a noble wedge-shaped head and an easy, 
                    athletic way of moving, have earned Dobermans a reputation as royalty in the canine kingdom. 
                    A well-conditioned Doberman on patrol will deter all but the most foolish intruder.</p>
            </section>

            <hr>
        </main>
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