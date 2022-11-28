
        <script src="https://kit.fontawesome.com/804adbe216.js" crossorigin="anonymous"></script>
        <style>

            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

            :root {
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
                background-color: var(--hovercolor);
                padding: 8px 10px;
                border-radius: 10px;
                
            }

            .nav__tags:hover{
                background-color: var(--hovercolor);
                transition: all 0.5s ease-in-out;
                border-radius: 50px;
                color: black;

            }
            .btn{
                background-color: var(--button);
                transition: all 0.5s ease-in-out;
                border-radius: 50px;
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


                .btns{
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


                @media screen and (max-width: 1442px) {

                    .nav__lists{
                        padding-right: 15px;
                    }




        </style>
        
        
    <header class="header">
        <div class="nav__label">
            <img class="nav__logo" src="../utility/assets/Picture1.jpg" alt="Company Logo!">

        </div>
        <nav class="nav__bar">    
            <ul class="nav__items">
                <li class="nav__lists"><a class="nav__tags" href="../controllers/home_controller.php">Home</a></li>
                <li class="nav__lists"><a class="nav__tags" href="../controllers/breed_info_controller.php">Dog Breed</a></li>
                <li class="nav__lists"><a class="nav__tags" href="../controllers/dog_care_controller.php">Dog Care</a></li>
                <li class="nav__lists"><a class="nav__tags" href="../controllers/reviews_controller.php">Dog Blog</a></li>
                <li class="nav__lists"><a class="nav__tags" href="../controllers/about_us_controller.php">About Us</a></li>

                <?php if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] ){?>
                
                <li class="nav__lists"><a class="nav__tags btns" href="../controllers/login_controller.php?action_url=logout">Log Out</a></li>
                
                <?php  } else{?>
                
                <li class="nav__lists"><a class="nav__tags btns" href="../controllers/login_controller.php">Log In / Sign UP</a></li>
                
                <?php }?>
 
            </ul>
        </nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">

            <i class="fa-solid fa-bars"></i>

        </label>

    </header>   




