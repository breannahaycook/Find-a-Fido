<!DOCTYPE html>
<html lang="en" class="loginBackground">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Account | Find a Fido</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
            .loginContainer {
                display: flex;
                background-image: url("../utility/assets/whiteDogsBG.jpeg");
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center bottom;
                justify-content: center;
                align-items: center;
                height: 90vh;
            }

            .loginh1{
                padding: 30px 0;
                font-family: 'Fredoka', sans-serif;
                font-size: 50px;
                color: #3A4B86;
                letter-spacing: 1px;
                text-shadow: 0px 3px 2px rgb(201, 201, 201);
                text-align: center;
            }

            .loginLabels{
                font-size: 18px;
                color: rgb(43, 60, 133);
                font-family: 'Fredoka', sans-serif;
                font-weight: 500;
            }

            .createAccount{
                height: 510px;
                width: 500px;
                text-align: center;
                background-color: white;
                padding: 15px 0;
                border-radius: 70px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);
            }

            .emailAlign{
                margin-right: 50%;
            }

            .passwordAlign{
                margin-right: 43%;
            }
            
            .message {
                font-size: 13px;
            }

            .nameAlign{
                margin-right: 50%
            }

            .loginInput{
                margin-top: 10px;
                margin-bottom: 10px;
                width: 60%;
                outline: none;
                text-indent: 5px;
            }

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
                cursor: pointer;
            }

            #alreadyHaveAccount{
                text-align: center;
                font-style: italic;
                color: rgb(43, 60, 133);
                font-family: 'Fredoka', sans-serif;
            }
        </style>
    </head>
    <?php
        include('nav.php');
    ?>
    <body>
        <div class="loginContainer">
            <section class="createAccount">
                <h1 class="loginh1">Create Account</h1>
                <p class="message">
                    <?php
                        // will display error message if unable to create account
                        if (isset($message) && $message != " ") {
                            echo $message;
                        }
                    ?>
                </p>
                <br>
                <form action="../controllers/signup_controller.php" method="post">
                    <label class="nameAlign loginLabels" for="name">Name:</label><br>
                    <input class="it loginInput" type="text" id="name" name="name" placeholder="Enter your name" required><br>

                    <label class="emailAlign loginLabels" for="email">Email:</label><br>
                    <input class="it loginInput" type="text" id="email" name="email" placeholder="Enter your email" required><br>

                    <label class="passwordAlign loginLabels" for="password">Password:</label><br>
                    <input class="it loginInput" type="password" id="password" name="password" placeholder="Enter your password" required><br>

                    <input type="hidden" name="action" value="create_account">
                    <input class="button loginInput" type="submit" value="Submit">
                </form>
                <p id="alreadyHaveAccount">Already have an account? <a href="../views/login_view.php">Login!</a></p>      
            </section>
        </div>      
    </body>
    <?php
        include('footer.php');
    ?>
</html>
