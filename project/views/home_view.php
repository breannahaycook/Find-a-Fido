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
        <main>

            <section id ="form"> 
                <form action="">
                    <p>How much time can you put into training?</p>
                    <input type="radio" id="training_low" name="range" value="low">
                    <label for="low">Low</label><br>
                    <input type="radio" id="training_medium" name="range" value="moderate">
                    <label for="moderate">Moderate</label><br>
                    <input type="radio" id="training_high" name="range" value="high">
                    <label for="high">High</label>
                </form>

                <hr>

                <form action="">
                    <p>Are allergies an issue?</p>
                    <input type="radio" id="hypoallergenic_no" name="range" value="no">
                    <label for="no">No</label><br>
                    <input type="radio" id="hypoallergenic_yes" name="range" value="yes">
                    <label for="yes">YES</label><br>
                </form>

                <hr>

                <form action="">
                    <p>How active are you?</p>
                    <input type="radio" id="training_low" name="range" value="sedantry">
                    <label for="sedantry">Sedentary</label><br>
                    <input type="radio" id="training_medium" name="range" value="moderate_active">
                    <label for="moderate_active">Moderately Active</label><br>
                    <input type="radio" id="training_high" name="range" value="very_active">
                    <label for="very_active">Very Active</label>
                </form>

                <hr>

                <form action="">
                    <p>How much noise can you tolerate?</p>
                    <input type="radio" id="training_low" name="range" value="quite">
                    <label for="quite">Quite</label><br>
                    <input type="radio" id="training_medium" name="range" value="medium">
                    <label for="medium">Medium</label><br>
                    <input type="radio" id="training_high" name="range" value="veryvocal">
                    <label for="veryvocal">VeryVocal</label>
                </form>

                <hr>

                <form action="">
                    <p>Do you have a small children?</p>
                    <input type="radio" id="training_low" name="range" value="poor">
                    <label for="poor">Poor</label><br>
                    <input type="radio" id="training_medium" name="range" value="good">
                    <label for="good">Good</label><br>
                    <input type="radio" id="training_high" name="range" value="great">
                    <label for="great">Great</label>
                </form>

                <hr>

                <form action="">
                    <p>How much time can you dedicate to gromming?</p>
                    <input type="radio" id="training_low" name="range" value="minimal">
                    <label for="minimal">Minimal</label><br>
                    <input type="radio" id="training_medium" name="range" value="moderate">
                    <label for="moderate">Moderate</label><br>
                    <input type="radio" id="training_high" name="range" value="alot">
                    <label for="alot">A Lot</label>
                </form>

                <hr>

                <form action="">
                    <p>How much space do you have?</p>
                    <input type="radio" id="training_low" name="range" value="verylittle">
                    <label for="verylittle">Very Little</label><br>
                    <input type="radio" id="training_medium" name="range" value="alittle">
                    <label for="alittle">A little</label><br>
                    <input type="radio" id="training_high" name="range" value="alot">
                    <label for="alot">A Lot</label>
                </form>

                <hr>

                <form action="">
                    <p>How much hair can you tolerate?</p>
                    <input type="radio" id="training_low" name="range" value="minimal">
                    <label for="minimal">Minimal</label><br>
                    <input type="radio" id="training_medium" name="range" value="moderate">
                    <label for="moderate">Moderate</label><br>
                    <input type="radio" id="training_high" name="range" value="alot">
                    <label for="alot">A Lot</label>
                </form>
                <br>
                <button type="submit">Submit Form</button>

                <hr>

            </section>

        </main>

        
    </body>
    <?php
        include('footer.php');
        ?>
</html>