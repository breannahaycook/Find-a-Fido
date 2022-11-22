<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://kit.fontawesome.com/804adbe216.js" crossorigin="anonymous"></script>
        <title>Dog Care | Find-A-Fido</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Merriweather&display=swap');
            
            
            
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


/*            body {
                height: 100vh;
                margin: 0;
                padding: 0;
            }
            */
            
            #map {
                width: 90%;
                height: 500px;
                margin: auto;
                padding: 0;
            }

            a{
                text-decoration: none; 
                text-align: center;
            }

            h3{
                font-family: 'Roboto', sans-serif;
                width: 75%;
                margin: auto;
                font-size: 20px;
                color: grey;
                font-weight: normal;
                margin-bottom: 40px;
            }

            h1{
                font-family: 'Fredoka', serif;
                font-size: 70px;
                letter-spacing: 1px;

            }

            .dogCareResourceImg{
                margin-top: 20px;
                width:90%;
                height: 350px;
                object-fit: cover;
            }


            ul{
                width:150px;
                text-align: center;
                list-style-position: inside;
                margin: auto;
            }
            li{
                text-align: left;
                font-family: 'Roboto', sans-serif;
                font-size: 18px;
            }


            hr{
                width: 90%;
                margin-top: 20px;
            }

            h2{
                font-family: 'Fredoka', serif;
                color: rgb(60, 77, 156);
                font-size: 50px;
            }
            .adopth2{
                font-family: 'Merriweather', serif;
                font-size:30px;
            }

            .dogCareContainer{
                display: flex;
                width:75%;
                margin: auto;
                flex-direction: column;
                justify-content: center;
                text-align: center;

            }

            .careDesc{
                font-family: 'Fredoka', serif;

                width: 80%;
                margin: auto;
                margin-top: 20px;
                margin-bottom: 20px;
                font-size: 18px;

            }

            .heroImage{
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../utility/assets/dog_care.jpg");
                width: 100%;
                height: 35%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }
            .heroText {
                text-align: center;
                font-family: 'Fredoka', serif;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: white;
            }

            .heroDesc{
                font-size: 23px;
            }

            .custom-map-control-button {
                background-color: #fff;
                border: 0;
                border-radius: 2px;
                box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
                margin: 10px;
                padding: 0 0.5em;
                font: 400 18px Roboto, Arial, sans-serif;
                overflow: hidden;
                height: 40px;
                cursor: pointer;
                text-align: center;
            }
            .custom-map-control-button:hover {
                background: rgb(235, 235, 235);
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


        <div class='heroImage'>
            <div class="heroText">
                <h1>Dog Care Center</h1>
                <p class="heroDesc">Essential ways to care for your pets</p>
            </div>
        </div>
        <div class="dogCareContainer">
            <section>         
                <img class="dogCareResourceImg" src="../utility/assets/vet.jpg">
                <h2>Veterinary Care</h2>
                <p class="careDesc">A Veterinarian, or Vet, is an animal doctor that is responsible for diagnosing 
                    and treating animals who are sick, injured or need routine care. Their duties include 
                    giving advice to humans on how to properly care for their pets, administering medication 
                    and performing surgery on animals.
                    <br><br>
                    When adopting a dog it's important to have a clinic nearby that you can go to for neutering, shots, preventative care,
                    emergencies, and more. Make sure to voice any concerns you have with your vet clinic to get your pet the best help they can. No concern 
                    is too small.
                    <br><br>

                    Vet bills can be costly, so contact your local vet to discuss costs, payment plans, and insurance.
                    <br>
                    Interested in finding a clinic near you? <a href="#map">Check out our interactive map below!</a>
                </p>

            </section>
            <hr>
            <section>

                <img class="dogCareResourceImg" src="../utility/assets/grooming.png">
                <h2>Grooming</h2>
                <p class="careDesc">
                    Bathing and grooming are essential to a healthy and happy pet. How often you need to groom your dog will depend on the breed 
                    (take our lifestyle survey to find a breed that works with your schedule!) and hair type. There are a lot of steps involved 
                    in the grooming process including, but not limited to:</p>
                <br>
                <ul>
                    <li>Shampooing</li>
                    <li>Blow-Drying</li>
                    <li>Style/Cut</li>
                    <li>Nail trim</li>
                    <li>Paw Pad Trim</li>
                    <li>Ear cleaning</li>
                </ul>
                <br>
                <p class="careDesc">
                    Because of this,
                    many pet owners opt to take their pets to a grooming center where trained professionals will do the 
                    work for you. The cost of your dog's groom will vary by location, the size of your dog, and the 
                    difficulty of the style/cut. If your pup has a special condition or requires special products, there may be 
                    an additional cost. 
                    <br>
                    Or, you could opt to do the grooming yourself. There are plenty of resources available to learn dog grooming such as paid courses and tutorials. 
                    All of the tools and products you'll need will be available in specialized pet stores, or online for purchase. This is a great option for dogs 
                    with anxiety, or dogs that react poorly to the groomers.
                    <br><br>
                    Compare groomers in your area to find one that best suits your needs!
                </p>           
            </section>
            <section>     
                <hr>
                <img class="dogCareResourceImg" src="../utility/assets/dog_park.jpg">
                <h2>Dog Park</h2>
                <p class="careDesc">There are several benefits a dog park has to offer as far as your pet is concerned. 
                    It gives them an opportunity to be free of a leash, an opportunity to be able to 
                    roam in a large area instead of being confined to a small fenced-in area or enclosure 
                    and it also gives them an opportunity to socialize with other dogs, and with other people as well. 
                    The Association of Pet Dog Trainers will tell you that some dog parks are not suitable for some dogs, 
                    and some dogs should not be taken to dog parks. In most cases, however, your pet will be perfectly 
                    safe in a dog park, it will enjoy the visit, and you will as well.
                    <br><br> 
                    While a visit to the dog park isn't necessary, it's a great way to socialize your pup' and 
                    burn through some of their energy. Dog parks are located in nearly every city, so it should be easy to 
                    find one near you!
                </p>
                <hr>     
            </section>
            <section>
                <h2 class="adopth2">Interested in adopting a dog?</h2>
                <h3>Continue reading to learn more about adoption options</h3>
                <hr>
                <img class="dogCareResourceImg" src="../utility/assets/shelter.jpg">
                <h2 >Animal Shelter</h2>

                <p class="careDesc">
                    Every year thousands of dogs are dropped off at the side of the road because owners didn’t properly spay or neuter them, 
                    resulting in unwanted puppies. Other times, pet owners simply cannot afford to take care of an animal anymore or they are moving 
                    to a home that won’t allow them to bring their beloved dog with them.
                    <br><br>
                    Can these puppies find a home and family to live their life happily? Not only just them there are a lot of puppies and dogs 
                    who are waiting for someone to accept them lovingly and take them home with them. Dogs have a reputation for being 
                    "man's best friend" for excellent reasons. Dogs are wonderful companions. In addition to being affectionate, devoted 
                    members of the family, many breeds are useful working dogs and guardians.
                    <br><br>
                    Visit your local animal shelter today to browse the dogs and puppies that are waiting for their forever homes!
                </p>  
            </section>
            <section>     
                <hr>
                <img class="dogCareResourceImg" src="../utility/assets/breeder.jpg">
                <h2>Breeder</h2>
                <p class="careDesc">
                    A dog breeder is a professional who breeds dogs to produce puppies and matches those puppies to new owners. Breeders will typically 
                    be specialized in and sell one particular breed of dog. Buying a puppy from a reputable breeder prepares you with the knowledge of practically everything that you need 
                    to know about the breed. In fact, a well-versed breeder will often counsel you on your expectations, family, 
                    and lifestyle to make sure their puppies are a right match for you. 
                    <br><br>
                    One of the most welcome advantages of buying a puppy from a breeder is that you 
                    know where the dog is from. The breeder will, as such, inform you about the puppy’s father, mother, and relatives and you will get 
                    to know about their health history in details. They will have the dog’s lineage on paper.
                    <br><br>
                    The most noticeable disadvantage to dog breeders is the much higher cost compared to other adoption options. However, in return for the high price that you pay, 
                    through an ethical breeder you should receive a puppy that is healthy, free of genetic disorders, psychologically sound and most importantly, from well-known pedigrees.
                    <br>
                    After deciding on the dog breed you want you can start your search for breeders. Keep in mind that there aren't always breeders for every breed in your area, so it could end up requiring 
                    a long trip to retrieve the puppy, or having the puppy shipped to you.
                </p>    
            </section>
            <section>     
                <hr>
                <img class="dogCareResourceImg" src="../utility/assets/pet_store.jpg">
                <h2>Pet Store</h2>
                <p class="careDesc">
                    A pet store or pet shop is a retail business which sells animals and pet care resources to the public. You may have seen one in your local mall! They are ideal 
                    for impulse buyers but offer very little information about a puppy’s background. The most obvious advantage of buying a puppy from a pet store is that you can 
                    access it anytime you want. This is because most pet stores are just a few minutes of drive from your home and they are open throughout the week for long hours. 
                    Most pet stores will also allow you to interact with the puppies in small play areas. This way, you can get an idea of the dog’s personality and 
                    see if their right for you.
                    <br><br>
                    There are a few downsides you will want to consider before adopting a dog from a pet store. For starters, it’s common for stores to charge much more for a dog 
                    than the actual breeder will. Because a pet store is a middle man between you and a breeder, this can lead to a considerable price hike or convenience fee for 
                    being able to get your dog from the store. Also, you will need to check where the puppies come from to verify you aren’t receiving a puppy bred in a mill. 
                    A puppy mill is a commercial dog breeding operation where profits are more of a concern than the wellbeing of the dog.
                    <br><br>
                    Find a pet store near you and take a look at the breeds they have available, and play with some puppies!  
                </p>
                <hr>     
            </section>

            <section>               
                <div id="map"></div>
            </section>
        </div>
        <div class="body__footer">
            <footer class="footer">
                <div class="footer_bars">

                    <div class="aboutus">
                        <h2 class="aboutus_h">About us</h2>
                        <p class="aboutus_p">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium amet, 
                            asperiores explicabo ipsam animi accusantium. Possimus, quas at nobis deleniti ab aut 
                            ipsa illo veniam, quis odit in quidem quae.</p>
                        <ul class="aboutus_ul">
                            <li class="aboutus_li"><a class="aboutus_a" href="https://www.facebook.com/profile.php?id=100087791181706"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="aboutus_li"><a class="aboutus_a" href="https://www.instagram.com/find_a_fido/"><i class="fab fa-instagram"></i></a></li>
                            <li class="aboutus_li"><a class="aboutus_a" href="https://www.ti.com/find_a_fido/"><i class="fab fa-twitter"></i></a></li>
                        </ul>    
                    </div>

                    <div class="links">
                        <h2 class="aboutus_h">Quick Links</h2>
                        <ul class="footer_items">
                            <li class="footer_lists"><a class="footer_tags" href="home_view.php">Home</a></li>
                            <li class="footer_lists"><a class="footer_tags" href="dog_breed_view.php">Dog Breed</a></li>
                            <li class="footer_lists"><a class="footer_tags" href="dog_care_view.php">Dog Care</a></li>
                            <li class="footer_lists"><a class="footer_tags" href="reivews_view.php">Reviews</a></li>
                            <li class="footer_lists"><a class="footer_tags" href="about_us_view.php">About Us</a></li>
                            <li class="footer_lists"><a class="footer_tags" href="login_view.php">Log In / Sign UP</a></li>
                        </ul>
                    </div>

                    <div class="contact_us">
                        <h2 class="aboutus_h">Contact US</h2>
                        <ul class="info">
                            <li class="info_list">
                                <span class="info_list"><i class="fa-regular fa-envelope"></i></span>
                                <p class="info_p"><a class="info_a" href="#">findfidoocc@gmail.com</a></p>
                            </li>
                            <li class="info_list">
                                <span class="info_list"><i class="fa-solid fa-location-dot"></i></span>
                                <span class="info_list">Oakland Community College Hall</span>
                            </li>
                            <li class="info_list"><a class="info_a" href="#"><img class="footer_logo" src="../utility/assets/Picture1.jpg" alt="Company Logo!"></a></li>
                        </ul>

                    </div>
                </div>

            </footer>
        </div>
        <div class="copy">
            <p>Copyright © Find-A-Fido. All rights Reserved.</p>
        </div>


        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_K5n8e-dlYlCRdCQrDshhbSM2bnD6NTk&libraries=places&callback=initMap" async defer></script>
        <script>
            var map;
            var service;
            var infowindow;
            var pos;
            var request;
            var place;
            var query = "vet";
            var markersArray = [];

            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: {lat: -34.397, lng: 150.644},
                    zoom: 6,
                });
                infoWindow = new google.maps.InfoWindow();

                //create a button for each resource
                //vet button
                const vetButton = document.createElement("button");
                vetButton.textContent = "Vet";
                //groomer button
                const groomerButton = document.createElement("button");
                groomerButton.textContent = "Groomers";
                //dog park button
                const parkButton = document.createElement("button");
                parkButton.textContent = "Dog Parks";
                //shelter button
                const shelterButton = document.createElement("button");
                shelterButton.textContent = "Shelters";
                //breeder button
                const breederButton = document.createElement("button");
                breederButton.textContent = "Breeders";
                //store button
                const storeButton = document.createElement("button");
                storeButton.textContent = "Stores";


                vetButton.classList.add("custom-map-control-button");
                groomerButton.classList.add("custom-map-control-button");
                parkButton.classList.add("custom-map-control-button");
                shelterButton.classList.add("custom-map-control-button");
                breederButton.classList.add("custom-map-control-button");
                storeButton.classList.add("custom-map-control-button");
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(vetButton);
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(groomerButton);
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(parkButton);
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(shelterButton);
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(breederButton);
                map.controls[google.maps.ControlPosition.TOP_CENTER].push(storeButton);


                //get users location
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (position) {
                        pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };

                        infoWindow.setPosition(pos);
                        map.setCenter(pos);
                        getNearByPlaces(pos, query);
                    }, function () {
                        console.log("calling handleLocationError(true)");
                        handleLocationError(true, infoWindow, map.getCenter());
                    });
                } else {
                    // Browser doesn't support Geolocation
                    console.log("calling handleLocationError(false)")
                    handleLocationError(false, infoWindow, map.getCenter());
                }

                infowindow = new google.maps.InfoWindow();


                //create button onclicks
                groomerButton.addEventListener("click", () => {
                    clearOverlays();
                    query = "dog grooming";
                    getNearByPlaces(pos, query);
                });

                vetButton.addEventListener("click", () => {
                    clearOverlays();
                    query = "vet";
                    getNearByPlaces(pos, query);
                });

                parkButton.addEventListener("click", () => {
                    clearOverlays();
                    query = "dog park";
                    getNearByPlaces(pos, query);
                });

                shelterButton.addEventListener("click", () => {
                    clearOverlays();
                    query = "animal shelter";
                    getNearByPlaces(pos, query);
                });

                breederButton.addEventListener("click", () => {
                    clearOverlays();
                    query = "dog breeders";
                    getNearByPlaces(pos, query);
                });

                storeButton.addEventListener("click", () => {
                    clearOverlays();
                    query = "pet stores";
                    getNearByPlaces(pos, query);
                });
            }

        //clear previous markers
            function clearOverlays() {
                for (var i = 0; i < markersArray.length; i++) {
                    markersArray[i].setMap(null);
                }
                markersArray.length = 0;
            }


            function getNearByPlaces(pos, query) {
                console.log("getNearByPlaces:" + pos.lat + "," + pos.lng);
                request = {
                    location: pos,
                    radius: '500',
                    query: query
                };

                service = new google.maps.places.PlacesService(map);
                service.textSearch(request, callback);
            }

            function callback(results, status) {
                if (status == google.maps.places.PlacesServiceStatus.OK) {
                    console.log("callback received " + results.length + " results");
                    var bounds = new google.maps.LatLngBounds();
                    for (var i = 0; i < results.length; i++) {

                        place = results[i];
                        var mark = createMarker(results[i]);
                        bounds.extend(mark.getPosition());
                    }
                    map.fitBounds(bounds);
                } else
                    console.log("callback.status=" + status);
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                infoWindow.setPosition(pos);
                infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
                infoWindow.open(map);
            }

            function createMarker(place) {
                var marker = new google.maps.Marker({
                    map: map,
                    position: place.geometry.location,
                });

                markersArray.push(marker);

                google.maps.event.addListener(marker, 'click', function () {
                    const content = document.createElement("div");

                    const nameElement = document.createElement("h4");

                    nameElement.textContent = place.name;
                    content.appendChild(nameElement);

                    const placeAddressElement = document.createElement("p");

                    placeAddressElement.textContent = place.formatted_address;
                    content.appendChild(placeAddressElement);

                    const placeLinkElement = document.createElement("a");
                    placeLinkElement.setAttribute('href', "https://www.google.com/maps/search/?api=1&query=" + place.lat + "%2C" + place.lng + "&query_place_id=" + place.place_id);
                    placeLinkElement.setAttribute('target', "_blank");
                    placeLinkElement.textContent = "View on Google Maps";
                    content.appendChild(placeLinkElement);

                    infowindow.setContent(content);
                    infowindow.open(map, this);
                });
                return marker;
            }
        </script>
        
    </body>

</html>