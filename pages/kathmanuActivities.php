<?php

    $pageName = "Activites in Kathmandu";
    $path = "../";
	include($path . "assets/inc/header.php");
?>
    <!--Kathmandu Activities Information -->
    <div>
        <h2 class="little">Things to do in Kathmandu</h2>
        <hr class="homeHr">
        <p class="homeIntro">There are a lot things that can be done in Kathmandu,
            but we will only be highlighting some popular ones for tourists such as: 
            The Boudhanath Temple, Scouting the Everest from flight, and the adventures of Ason and Mangal Bazaars</p>
        
        <div class="kathmanduAct">
            <h3>The Boudhanath Temple</h3>
            <img class="kathmanduActImgBig" src="<?php echo $path;?>assets/images/boudha-explore.png" alt="Visiting Boudhanath Temple">
            <p class="homeIntro">Are you visiting Kathmandu and interested in exploring temples or learning a little about the Buddhist religion?
                 If you are, there is no place other than visiting the Boudhanath Temple in Kathmandu. 
            </p>
            <div class="imagesHolder">
                <div class="imageItem">
                    <figure>
                        <img src="<?php echo $path;?>assets/images/boudhanath-wheel.png" alt="The wheel of prayer inside the temple">
                        <figcaption>The wheel of prayer at Boudhanath Temple</figcaption>
                    </figure>
                </div>
                <div class="imageItem">
                    <figure>
                        <img class="night" src="<?php echo $path;?>assets/images/boudha-night.png" alt="Boudhanath at Night time">
                        <figcaption>Boudhanath Temple at nighttime</figcaption>
                    </figure>
                </div>
                <div class="imageItem">
                    <figure>
                        <img src="<?php echo $path;?>assets/images/boudha-statue.png" alt="A statue found in Boudhanath">
                        <figcaption>A statue found in Boudhanath Temple</figcaption>
                    </figure>
                </div>
            </div>
            <p class="homeIntro">The Boudhanath temple, also known as a Stupa is a Buddhist religious site. 
                It is the largest and also the most sacred Tibetan Buddhist temple outside of Tibet itself. 
                Sometimes the temple is also referred to as a colorful Cosmos because of its vibrant colors.
            </p>
            <p class="homeIntro">As a traveler, you can explore this temple, 
                get an understanding of the Tibetien people and the Buddhist religion,
                 enter many monasteries around the temple as well as have the ability to spin the giant wheel of prayers!
            </p>

        </div>
        <div class="kathmanduAct">
            <h3>Flying around Everest</h3>
            <img class="kathmanduActImgBig" src="<?php echo $path;?>assets/images/flying-display.png" alt="View of Everest through Plane Window">
            <div class="imagesHolder">
                <div class="imageItem">
                    <figure>
                        <img class="night" src="<?php echo $path;?>assets/images/everest-plane.png" alt="Picture of Plane flying near Everest">
                        <figcaption>Flight near Everest of BuddhaAir Plane</figcaption>
                    </figure>
                </div>
                <div class="imageItem">
                    <figure>
                        <img class="night" src="<?php echo $path;?>assets/images/everest-heli.png" alt="Picture of Helicopter near Everest">
                        <figcaption>Helicopter flying near Everest</figcaption>
                    </figure>
                </div>

            </div>
            <p class="homeIntro">During your travels to Kathmandu, 
                you may find yourself being amazed by the surrounding mountains. 
                In fact, not just any mountains but one of the largest in the entire world. 
                You may not have the capabilities to hike and get a closer look at it, 
                but no worries because you can get a short 1-hour flight that takes you on a journey around Mount Everest! 
            </p>
        </div>

        <div class="kathmanduAct">
            <h3>A stroll around Ason and Mangal Bazaars</h3>
            <img class="kathmanduActImgBig" src="<?php echo $path;?>assets/images/mangal-main.png" alt="Picture of Mangal Bazaar">
            <div class="imagesHolder">
                <div class="imageItem">
                    <figure>
                        <img class="night" src="<?php echo $path;?>assets/images/bazaar-item.png" alt="Picture of Items sold at the Bazaars">
                        <figcaption>Some items that may be sold at the bazaars</figcaption>
                    </figure>
                </div>
                <div class="imageItem">
                    <figure>
                        <img class="night" src="<?php echo $path;?>assets/images/bazaar-item2.png" alt="Picture of Items sold at the Bazaars">
                        <figcaption>Example of the items that may be sold at the bazaars</figcaption>
                    </figure>
                </div>
            </div>
            <p class="homeIntro">You may be looking to get a memorable item to take back with you once you are ready to leave Kathmandu. 
                There is no other place than the Ason and Mangal Bazaars. 
                This part of Kathmandu sells everything from street food, spices, gifts, and everyday goodies. 
                You don't wanna miss out so take a stroll around these streets. 
                You may want to have some bargaining skills though as prices may not be very friendly to tourists. 
            </p>
        </div>

    </div>


<?php
    include($path ."assets/inc/footer.php");
?>