<!DOCTYPE html>

<style>

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

    :root {
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
    .body{
        display: grid;
        justify-content: end;
        align-content: end;
        min-height: 100vh;
    }
    .footer{
        background-color: var(--lightblue);
        position: relative;
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
</style>


<div class="body">
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
                    <li class="aboutus_li"><a class="aboutus_a" href="https://www.twitter.com/find_a_fido/"><i class="fab fa-twitter"></i></a></li>
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

    <div class="copy">
        <p>Copyright © Find-A-Fido. All rights Reserved.</p>
    </div>

</div>






