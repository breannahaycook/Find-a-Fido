<!DOCTYPE html>
<html lang="en" class="boneBackground">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/804adbe216.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
        <title>Dog Breeds | Find-A-Fido</title>      
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

            .aboutDogBreeds {
                text-align: center;
                color: rgb(102, 102, 102);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
            }
            
            .boneBackground {
                background-image: url("../utility/assets/whiteBonePawPrintsBG.jpg");   
            }
            
            .breedInfoFooter {
                grid-area: breedInfoFooter;
            }
            
            .button {
                background: linear-gradient(138deg, rgba(60,77,156,1) 0%, rgba(124,143,194,1) 75%, rgba(185,222,231,1) 100%);
                border: none;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);
                border-radius: 10px;
                color: white;
                font-family: 'Fredoka', sans-serif;
                font-size: 15px;
                font-weight: 500;
                height: 40px;
                letter-spacing: .5px;
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
            
            .dogBreedsTitle {
                font-size: 60px;
            }
            
            form {
                font-family: 'Roboto', sans-serif !important; 
            }

            h1 {
                color: rgb(60, 77, 156);
                font-family: 'Fredoka', sans-serif;
                font-size: 50px;
                letter-spacing: 1px;
                text-align: center;
                text-shadow: 0px 3px 2px rgb(201, 201, 201);
            }
            
            h2 {
                font-family: 'Roboto', sans-serif;
            }
            
            h4 {
                font-family: 'Roboto', sans-serif;
                color: rgb(60, 77, 156);
                font-size: 17px;
            }

            h5 {
                color: rgb(43, 60, 133);
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                font-style: normal;
                margin: 30px;
            }
            
            header {
                grid-area: header;
            }
            
            hr {
                width: 85%;
                margin: auto;
            }

            label {
                font-family: 'Roboto', sans-serif;
                font-size: 13px;
            }

            main {
                display: grid;
                grid-template-areas:
                    'header header header'
                    'sideNav container container'
                    'breedInfoFooter breedInfoFooter breedInfoFooter';    
            }

            .notchecked {
                color: #D3d3d3;
            }

            .para {
                color: rgb(43, 60, 133);
                font-family: 'Roboto', sans-serif !important;
                font-size: 20px;
                font-style: normal;
                margin: 30px;
                text-align: center;
            }

            .results {
                display: block;
                height: 250px;
                margin-left: auto;
                margin-right: auto;
                width: 220px;
            }
            
            .searchResults {
                grid-area: container;
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
                font-size: 16px;
                grid-area: sideNav;
                height: 1000px;
                overflow-x: hidden;
                padding: 25px;
                position: sticky;
                top: 0; /* Stay at the top */
                width: 250px;
            }

            table {
                width: 100%;
            }

            .tags{
                background: #B9DEE7;
                border: none;
                border-radius: 5px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(43, 60, 133, 0.301);
                color: #3A4B86;
                font-family: 'Fredoka', sans-serif;
                font-size: 12px;
                font-weight: 500;
                height: 30px;
                letter-spacing: 1px;
                margin-left: 30px;
                margin-bottom: 10px;
                padding: 5px;
                text-align: center;
            }

            td {
                text-align: center;
            }
            
            .title {
                width: 100%;
                background-color: rgba(255, 255, 255, 0.5);
            }
        </style>
    </head>
    <header>
        <?php include 'nav.php'; ?>
    </header>
    <body>
        <main>
            <div class="sidenav">
                <h2>Filters:</h2>
                <br>
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
                    Household Room Needed:<br>
                    <input type="radio" name="household_size" value="Very Little">
                    <label for="very_little">Very Little</label><br>
                    <input type="radio" name="household_size" value="A Little">
                    <label for="a_little">A Little</label><br>
                    <input type="radio" name="household_size" value="A Lot">
                    <label for="a_lot">A Lot</label>

                    <br><br>
                    <input class="button" type="submit" name="action" value="Apply Filters">
                    <input class="button" type="submit"  name="action" value="Clear Filters">
                </form>
            </div>
            <div class="searchResults">
                <div class='title'>
                    <h1 class="dogBreedsTitle">Dog Breeds</h1>
                    <p class="aboutDogBreeds">
                        Find the perfect Fido with our dog breed page! This page contains a list full
                        of all the dog breeds Find a Fido has to offer. <br> You can browse through this list for a specific 
                        breed or choose to search by various criteria such as size, activity level, and grooming 
                        requirements.
                    </p>
                    <br>
                    <hr>
                </div>
                    <?php if(!empty($tags)){ ?>
                            <h5> <?php echo $i; ?> Applied Filters:</h5>
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
                                            <i id="sizeBone2" class='fas fa-bone <?php if ($train == "Low") { echo "not"; } ?>checked'></i>
                                            <i id="sizeBone3" class='fas fa-bone <?php if ($train !== "High") { echo "not"; } ?>checked'></i>

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
                                <p class="para">
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
                            <p class="para">There are no results that match your search, please try again.</p>
                            <img src="../utility/assets/dogWithBows.jpg" alt="Picture of three dogs with bows">
                            <p class="para">
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
    </body>
    <footer class="breedInfoFooter">
        <?php
            include('footer.php');
        ?>
    </footer>
</html>
