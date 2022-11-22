<!DOCTYPE html>
<html lang="en" class="boneBackground">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
        <script src="https://kit.fontawesome.com/804adbe216.js" crossorigin="anonymous"></script>
        <title>Dog Breeds | Find-A-Fido</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
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



            .button{
                background: linear-gradient(138deg, rgba(60,77,156,1) 0%, rgba(124,143,194,1) 75%, rgba(185,222,231,1) 100%);
                border: none;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);
                border-radius: 35px;
                color: white;
                font-family: 'Fredoka', sans-serif;
                font-size: 15px;
                font-weight: 500;
                height: 30px;
                letter-spacing: 1px;
            }

            .checked {
                color: #B9DEE7;
            }

            .container {
                align-items: center;
                display: flex;
                justify-content: center;
                margin: 25px;
            }

            .notchecked {
                color: #D3d3d3;
            }

            h1 {
                color: rgb(60, 77, 156);
                font-family: 'Fredoka', sans-serif;
                font-size: 50px;
                letter-spacing: 1px;
                text-align: center;
                text-shadow: 0px 3px 2px rgb(201, 201, 201);
            }
            h5 {
                color: rgb(43, 60, 133);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                margin: 30px;
            }

            h4 {
                color: rgb(60, 77, 156);
                font-size: 17px;
            }

            img {
                display: block;
                border-radius: 50px;
                height: 275px;
                width: 300px;
                margin-left: auto;
                margin-right: auto;
            }

            label {
                font-size: 15px;
            }

            .boneBackground{
                background-image: url("../utility/assets/whiteBonePawPrintsBG.jpg");
            }

            main {
                margin-left: 250px;
            }

            p {
                color: rgb(43, 60, 133);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                margin: 30px;
                text-align: center;
            }

            .results {
                border-radius: 50px;
                display: block;
                height: 250px;
                margin-left: auto;
                margin-right: auto;
                width: 200px;
            }

            section {
                background-color: white;
                border-radius: 70px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);
                font-family: 'Roboto', sans-serif;
                height: 60%;
                width: 70vw;
                min-width: 600px;
            }

            .sidenav {
                background-color: #3A4B86;
                color: #FFFFFF;
                font-family: 'Fredoka', sans-serif;
                font-size: 15px;
                height: 100%;
                left: 0;
                overflow-x: hidden;
                padding-left: 25px;
                position: fixed;
                top: 0; /* Stay at the top */
                width: 250px;
                z-index: 1; /* Stay on top */
            }

            table {
                width: 100%;
            }

            .tags{
                background: #B9DEE7;
                border: none;
                border-radius: 35px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);
                color: #3A4B86;
                font-family: 'Fredoka', sans-serif;
                font-size: 12px;
                font-weight: 500;
                height: 30px;
                letter-spacing: 1px;
                margin-left: 30px;
                padding: 5px;
                text-align: center;
            }

            td {
                text-align: center;
            }
            

        </style>

    </head>

    <body>
        <?php
        include('nav.php');
        ?>
        <main>
            <div class="sidenav">
                <h2>Filters:</h2>
                <form action="../controllers/breed_info_controller.php" method="post">
                    Size:<br>
                    <input type="radio" name="size" value="S">
                    <label for="small">Small</label><br>
                    <input type="radio" name="size" value="M">
                    <label for="medium">Medium</label><br>
                    <input type="radio" name="size" value="L">
                    <label for="large">Large</label>

                    <br><br>
                    Training Level:<br>
                    <input type="radio" name="training_level" value="Low">
                    <label for="low">Low</label><br>
                    <input type="radio" name="training_level" value="Moderate">
                    <label for="moderate">Moderate</label><br>
                    <input type="radio" name="training_level" value="High">
                    <label for="high">High</label>

                    <br><br>
                    Activity Level:<br>
                    <input type="radio" name="activity_level" value="Sedentary">
                    <label for="sedentary">Sedentary</label><br>
                    <input type="radio" name="activity_level" value="Moderately Active">
                    <label for="moderately_active">Moderately Active</label><br>
                    <input type="radio" name="activity_level" value="Very Active">
                    <label for="very_active">Very Active</label>

                    <br><br>
                    Grooming Needs:<br>
                    <input type="radio" name="grooming" value="Minimal">
                    <label for="minimal">Minimal</label><br>
                    <input type="radio" name="grooming" value="Moderate">
                    <label for="moderate">Moderate</label><br>
                    <input type="radio" name="grooming" value="A Lot">
                    <label for="a_lot">A Lot</label>

                    <br><br>
                    Shedding Level:<br>
                    <input type="radio" name="shedding" value="Minimal">
                    <label for="minimal">Minimal</label><br>
                    <input type="radio" name="shedding" value="Moderate">
                    <label for="moderate">Moderate</label><br>
                    <input type="radio" name="shedding" value="A Lot">
                    <label for="a_lot">A Lot</label>

                    <br><br>
                    Hypoallergenic:<br>
                    <input type="radio" name="hypoallergenic" value="Yes">
                    <label for="yes">Yes</label><br>
                    <input type="radio" name="hypoallergenic" value="No">
                    <label for="no">No</label>

                    <br><br>
                    Kids Temperament:<br>
                    <input type="radio" name="kids_temp" value="Poor">
                    <label for="poor">Poor</label><br>
                    <input type="radio" name="kids_temp" value="Good">
                    <label for="good">Good</label><br>
                    <input type="radio" name="kids_temp" value="Great">
                    <label for="great">Great</label>

                    <br><br>
                    Noise Level:<br>
                    <input type="radio" name="noise_level" value="Quiet">
                    <label for="quiet">Quiet</label><br>
                    <input type="radio" name="noise_level" value="Medium">
                    <label for="medium">Medium</label><br>
                    <input type="radio" name="noise_level" value="Very Vocal">
                    <label for="very_vocal">Very Vocal</label>

                    <br><br>
                    Household Size Needed:<br>
                    <input type="radio" name="household_size" value="Very Little">
                    <label for="very_little">Very Little</label><br>
                    <input type="radio" name="household_size" value="A Little">
                    <label for="a_little">A Little</label><br>
                    <input type="radio" name="household_size" value="A Lot">
                    <label for="a_lot">A Lot</label>

                    <br><br>
                    <input type="hidden" name="action" value="search">
                    <input class="button" type="submit" value="Apply Filter">
                </form>
            </div>
            <div class="main_bar">
                
                            <h1>Dog Breeds</h1>
                <?php if(!empty($tags)){ ?>
                        <h5>Applied Filters:</h5>
                <?php foreach($tags as $tag) : ?>  
                        <button class="tags">
                             <?php echo $tag; ?>            
                        </button> 
                <?php endforeach;
                    } ?>

            <!-- Display Dog Info -->
            <?php 
            if(!empty($breeds)) {
                foreach($breeds as $breed_info) : ?>
                    <div class="container">
                        <section>
                            <?php $breed_name = $breed_info-> get_breed(); ?>
                            <h1><?php echo $breed_name ?></h1>

                            <table>
                                <tr>
                                    <td>
                                        <img class="results" src="../utility/assets/<?php echo $breed_name; ?>.jpg" alt="Picture of a <?php echo $breed_name; ?>">
                                    </td>
                                    <td>
                                        <h4>Size:</h4> 
                                        <?php $size = $breed_info-> get_size();?>

                                        <i id="sizeBone1" class='fas fa-bone checked'></i>
                                        <i id="sizeBone2" class='fas fa-bone <?php if ($size == "S") { echo "not"; } ?>checked'></i>
                                        <i id="sizeBone3" class='fas fa-bone <?php if ($size !== "L") { echo "not"; } ?>checked'></i>



                                        <h4>Grooming Needs:</h4>
                                        <?php $grooming = $breed_info-> get_grooming(); ?>

                                        <i id="sizeBone1" class='fas fa-bone checked'></i>
                                        <i id="sizeBone2" class='fas fa-bone <?php if ($grooming == "Minimal") { echo "not"; } ?>checked'></i>
                                        <i id="sizeBone3" class='fas fa-bone <?php if ($grooming !== "A lot") { echo "not"; } ?>checked'></i>

                                        <h4>Kids Temperament:</h4>
                                        <?php $kids_temp = $breed_info-> get_kids_temp(); ?>

                                        <i id="sizeBone1" class='fas fa-bone checked'></i>
                                        <i id="sizeBone2" class='fas fa-bone <?php if ($kids_temp == "Poor") { echo "not"; } ?>checked'></i>
                                        <i id="sizeBone3" class='fas fa-bone <?php if ($kids_temp !== "Great") { echo "not"; } ?>checked'></i>
                                    </td>
                                    <td>
                                        <h4>Training Level:</h4>
                                        <?php $train = $breed_info-> get_training_level(); ?>

                                        <i id="sizeBone1" class='fas fa-bone checked'></i>
                                        <i id="sizeBone2" class='fas fa-bone <?php if ($train == "S") { echo "not"; } ?>checked'></i>
                                        <i id="sizeBone3" class='fas fa-bone <?php if ($train !== "L") { echo "not"; } ?>checked'></i>

                                        <h4>Shedding Level:</h4>
                                        <?php $shedding = $breed_info-> get_shedding(); ?>

                                        <i id="sizeBone1" class='fas fa-bone checked'></i>
                                        <i id="sizeBone2" class='fas fa-bone <?php if ($shedding == "Minimal") { echo "not"; } ?>checked'></i>
                                        <i id="sizeBone3" class='fas fa-bone <?php if ($shedding !== "A Lot") { echo "not"; } ?>checked'></i>

                                        <h4>Noise Level:</h4>
                                        <?php $noise_level = $breed_info-> get_noise_level(); ?>

                                        <i id="sizeBone1" class='fas fa-bone checked'></i>
                                        <i id="sizeBone2" class='fas fa-bone <?php if ($noise_level == "Quiet") { echo "not"; } ?>checked'></i>
                                        <i id="sizeBone3" class='fas fa-bone <?php if ($noise_level !== "Very Vocal") { echo "not"; } ?>checked'></i>
                                    </td>
                                    <td>
                                        <h4>Activity Level:</h4>
                                        <?php $activity_level = $breed_info-> get_activity_level(); ?>

                                        <i id="sizeBone1" class='fas fa-bone checked'></i>
                                        <i id="sizeBone2" class='fas fa-bone <?php if ($activity_level == "Sedentary") { echo "not"; } ?>checked'></i>
                                        <i id="sizeBone3" class='fas fa-bone <?php if ($activity_level !== "Very Active") { echo "not"; } ?>checked'></i>


                                        <h4>Hypoallergenic?</h4>
                                        <?php $hypoallergenic = $breed_info-> get_hypoallergenic(); ?>

                                        <i id="sizeBone1" class='fas fa-bone <?php if ($hypoallergenic != "Yes") { echo "not"; } ?>checked'></i>

                                        <h4>Household Size:</h4>
                                        <?php $house_size = $breed_info-> get_household_size(); ?>

                                        <i id="sizeBone1" class='fas fa-bone checked'></i>
                                        <i id="sizeBone2" class='fas fa-bone <?php if ($house_size == "Very Little") { echo "not"; } ?>checked'></i>
                                        <i id="sizeBone3" class='fas fa-bone <?php if ($house_size !== "A Lot") { echo "not"; } ?>checked'></i>
                                    </td>
                                </tr>
                            </table>
                            <p>
                                <?php echo $breed_info-> get_information(); ?>
                            </p>
                        </section>
                    </div>
                <?php endforeach; 
            } else {
                ?>
                <div class="container">
                    <section>
                        <h1>Oh No..</h1>
                        <p>There are no results that match your search, please try again.</p>
                        <img src="../utility/assets/dogWithBows.jpg" alt="Picture of three dogs with bows">
                        <p>
                            Don't forget to check out our Find-A-Fido Survey!
                            You enter a little information and we will make the perfect match!
                            <br>
                            <a href="../controllers/home_controller.php">Click here to Find-A-Fido!</a>
                            </p>
                        </section>
                    </div>
                <?php } ?>
                
            </div>
        </main>
        <?php
        include('footer.php');
        ?>
    </body>

</html>

