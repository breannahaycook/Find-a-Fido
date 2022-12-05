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
            .gridContainer{
                display: grid;
                grid: 500px 500px 500px 500px / auto auto;
                gap: 70px;
                padding: 75px;
                justify-content: center;
            }

            .imageItem{
                background-position: center;
                background-size: cover;
                border-radius: 50px;
                width: 500px;
                height: 500px;
            }
            
            #bh{
                background-image: url("../utility/assets/breanna1.jpg");
            }
            
            #kh{
                background-image: url("../utility/assets/kaitlyn1.jpg");
            }
            
            #rh{
                background-image: url("../utility/assets/rafiul1.png");
            }
            
            #tb{
                background-image: url("../utility/assets/tahreem1.jpg");
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
                margin: auto;
                width: 75%;
            }

            .aboutUsBio{
                text-align: center;
                color: rgb(102, 102, 102);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                padding:20px;
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
    <?php
    include('nav.php');
    ?>
    <body>
        <h1 class="aboutUsTitle">About Us</h1>
        <p class="aboutUsBio">Our goal as Team Fido’s Friends is to help aspiring dog owners find the dog breed that
            best suits their lifestyle. <br> Meet our developers and some of their own furry friends below!</p>
        <hr>
        <div class="gridContainer">
            <!--Breanna-->
            <div id="bh" class="imageItem">
                <a class="prev" onclick="nextImage(-1, 'bh', bh)">&#10094;</a>
                <a class="next" onclick="nextImage(1, 'bh', bh)">&#10095;</a>
            </div>
            <div class="bioItem">
                <h2 class="aboutUsName">Breanna Haycook</h2>
                <br>
                <p class="bio">
                    Hi Everyone, My name is Breanna! This has been such an exciting project for me as this touches home. I have been considering 
                    adopting a dog and it’s always a thought about which dog breed would fit best with my lifestyle, as I have a small home, 
                    but I am a very active person! This idea came up as a resolution to my issue to make sure my future fur baby and I will be 
                    a perfect match. I hope it helps you as much as it helps me! 
                    <br><br>
                    Photos: Jake, the Husky who is our longtime family dog. Thumper, the Bunny who thinks he’s a tiny dog. Izzy, 
                    the Tarantula who isn’t the easiest to take a selfie with.
                </p>
            </div>

            <!--Kaitlyn-->
            <div id="kh" class="imageItem">
                <a class="prev" onclick="nextImage(-1, 'kh', kh)">&#10094;</a>
                <a class="next" onclick="nextImage(1, 'kh', kh)">&#10095;</a>
            </div>
            <div class="bioItem">
                <h2 class="aboutUsName">Kaitlyn Howell</h2>
                <br>
                <p class="bio">
                    Hello! My name is Kaitlyn and i'm an aspiring web developer currently enrolled in my last semester at Oakland 
                    Community College studying for my AAS in software engineering! As an animal lover and someone who really wants a dog of their 
                    own someday, this was an exciting project to end my degree on, and I really hope you enjoy it!
                    <br><br>
                    Photos: My grumpy adopted cat George and I (I was told he's named after a Grey's Anatomy character!), my furry other half Miles 
                    (who is affectionately named after one of my favorite video game characters Miles Edgeworth from the Ace Attorney series), 
                    and the brand new addition to my family, Milo!
                </p>
            </div>

            <!--Rafiul-->
            <div id="rh" class="imageItem">
                <a class="prev" onclick="nextImage(-1, 'rh', rh)">&#10094;</a>
                <a class="next" onclick="nextImage(1, 'rh', rh)">&#10095;</a>
            </div>
            <div class="bioItem">
                <h2 class="aboutUsName">Rafiul Hassan</h2>
                <br>
                <p class="bio">
                    Hey everyone! I am Rafiul Hassan, I am a studying Computer Science in Oakland Community College. 
                    I am on my Senior Year in my Associate degree Program. I cook happiness which is the one of my specialty I do on my 
                    free times!!
                </p>
            </div>

            <!--Tahreem-->
            <div id="tb" class="imageItem">
                <a class="prev" onclick="nextImage(-1, 'tb', tb)">&#10094;</a>
                <a class="next" onclick="nextImage(1, 'tb', tb)">&#10095;</a>
            </div>
            <div class="bioItem">
                <h2 class="aboutUsName">Tahreem Bhatti</h2>
                <br>
                <p class="bio">
                    Hello! My name is Tahreem Bhatti I am a software engineering student at Oakland community college. This is my Junior 
                    year in college and I'll be done with my association in 2023. After that I'll apply in the Oakland university for further 
                    studies.
                </p>
            </div>
        </div>
        
        <?php
        include('footer.php');
        ?>

        <script>
            //breanna
            let bh0 = "url(../utility/assets/breanna1.jpg)";
            let bh1 = "url(../utility/assets/breanna2.jpg";
            let bh2 = "url(../utility/assets/breanna3.png";         
            const bh = [bh0, bh1, bh2, 0];
            
            //kaitlyn
            let kh0 = "url(../utility/assets/kaitlyn1.jpg)";
            let kh1 = "url(../utility/assets/kaitlyn2.jpg";
            let kh2 = "url(../utility/assets/kaitlyn3.jpg";
            const kh = [kh0, kh1, kh2, 0];
            //rafiul
            let rh0 = "url(../utility/assets/rafiul1.png)";
            let rh1 = "url(../utility/assets/rafiul2.png";
            let rh2 = "url(../utility/assets/rafiul3.png";
            const rh = [rh0, rh1, rh2, 0];
            //tahreem
            let tb0 = "url(../utility/assets/tahreem1.jpg)";
            let tb1 = "url(../utility/assets/tahreem2.jpg";
            let tb2 = "url(../utility/assets/tahreem3.jpg";
            const tb = [tb0, tb1, tb2, 0];
            
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
