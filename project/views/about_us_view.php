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



        </style>
    </head>

    <body>
        <?php
        include('nav.php');
        ?>

     

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
        <?php
        include('footer.php');
        ?>

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
