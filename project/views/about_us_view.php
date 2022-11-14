<!DOCTYPE html>
<html class="aboutUsBackground" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Find a Fido</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
        .gridContainer{
            display: grid;
            grid: 500px 500px 500px 500px / auto auto;
   
            gap: 70px;
            padding: 100px;
            justify-content: center;
        }

        
        .imageItem{
    
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


        .profilePic{
            border-radius: 50px;
            width: 500px;
            height: 500px
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

    </style>
</head>
<body>
    <h1 class="aboutUsTitle">About Us</h1>
    <p class="aboutUsBio">Our goal as Team Fido’s Friends is to help aspiring dog owners find the dog breed that
        best suits their lifestyle. <br> Meet our developers and their own furry friends below!</p>
    <hr>
    <div class="gridContainer">
        <!--Breanna-->
        <div class="imageItem"><img class="profilePic" src="../utility/assets/Dooberman.jpg"></div>
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
        <div class="imageItem"><img class="profilePic" src="../utility/assets/Husky.jpg"></div>
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
        <div class="imageItem"><img class="profilePic" src="../utility/assets/Goldenretreiver.jpg"></div>
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
        <div class="imageItem"><img class="profilePic" src="../utility/assets/french_bulldog.jpg"></div>
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
</body>
</html>
