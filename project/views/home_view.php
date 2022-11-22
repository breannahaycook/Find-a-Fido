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

        </style>
    </head>

    <body>
        <?php
        include('nav.php');
        ?> 
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
            <?php
        include('footer.php');
        ?>
    </body>
</html>