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
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);;
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



    </style>
</head>
<body>
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
</body>
</html>
