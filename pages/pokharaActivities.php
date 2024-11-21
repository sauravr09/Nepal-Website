<?php

    $pageName = "Activities in Pokhara";
    $path = "../";
	include($path . "assets/inc/header.php");
?>
    <!--Pokhara Activities Information -->
    <div>
        <h2 class="little">Things to do in Pokhara</h2>
        <hr class="homeHr">
        <p class="homeIntro">There are a lot things that can be done in Pokhara,
            but we will only be the most popular attractions for tourists such as: 
            the Phewa Lake, the beautiful views of Sarangot, and the many adventure sports.</p>
        
        <div class="kathmanduAct">
            <h3>The Phewa Lake</h3>
            <img class="kathmanduActImgBig" src="<?php echo $path;?>assets/images/Phewa-Home.png" alt="The Phewa Lake">
            <p class="homeIntro">
                Are you interested in scenic views while taking a boat ride? If that is the case, Phewa Lake is for you!
            </p>
            <div class="imagesHolder">
                <div class="imageItem">
                    <figure>
                        <img class="night" src="<?php echo $path;?>assets/images/phewa-sunset.png" alt="The beautiful sunset from Phewa Lake">
                        <figcaption>The beautiful sunset seen from Phewa Lake</figcaption>
                    </figure>
                </div>
                <div class="imageItem">
                    <figure>
                        <img class="night" src="<?php echo $path;?>assets/images/phewa-reflection.png" alt="Reflection of mountain range seen at Phewa lake">
                        <figcaption>Reflection of surrounding mountain range seen at Phewa Lake</figcaption>
                    </figure>
                </div>
            </div>
            <p class="homeIntro">Phewa Lake is one of the main attractions of Pokhara as it is 
                located in the heart of the city and offers various different fun activities. 
                The bright lake offers boat rides, and very beautiful scenic views.
            </p>
            <p class="homeIntro"> 
                If you find yourself in Pokhara, 
                the Phewa Lake is most definitely one of the must-visit locations for a tourist. 
                This lake can be visited any time, 
                but it is best to go during the morning or evening for majestic views. 

            </p>

        </div>
        <div class="kathmanduAct">
            <h3>The majestic scenes of Sarangkot</h3>
            <img class="kathmanduActImgBig" src="<?php echo $path;?>assets/images/sarangkot-main.png" alt="View of Phewa Lake from top of Sarangkot">
            <div class="imagesHolder">
                <div class="imageItem">
                    <figure>
                        <img class="night" src="<?php echo $path;?>assets/images/sarangkot1.png" alt="views from the hilltop">
                        <figcaption>Views from the hilltop</figcaption>
                    </figure>
                </div>
                <div class="imageItem">
                    <figure>
                        <img class="night" src="<?php echo $path;?>assets/images/sarangkot2.png" alt="hiking to sarangkot">
                        <figcaption>Views found as hiking to hilltop</figcaption>
                    </figure>
                </div>

            </div>
            <p class="homeIntro">
                Sarangkot is another popular location in Pokhara, 
                it is a hilltop that is located on the outskirts of the city. 
                Visitors can either hike up to the hilltop or take a jeep ride to enjoy the scenic views.
                 Sarangkot offers stunning views of the sunrise and sunset 
                 over the various surrounding mountain ranges so it is best visited during the sunrise or sunset.

            </p>
        </div>

        <div class="kathmanduAct">
            <h3>Taking part in adventurous sports</h3>
            <img class="kathmanduActImgBig" src="<?php echo $path;?>assets/images/sport-main.png" alt="Picture of rafting in Pokhara">
            <div class="imagesHolder">
                <div class="imageItem">
                    <figure>
                        <img class="night" src="<?php echo $path;?>assets/images/sport1.png" alt="Picture of ziplining in Pokhara">
                        <figcaption>Ziplining in Pokhara</figcaption>
                    </figure>
                </div>
                <div class="imageItem">
                    <figure>
                        <img class="night" src="<?php echo $path;?>assets/images/sport2.png" alt="Picture of paragliding in Pokhara">
                        <figcaption>Paragliding in Pokhara</figcaption>
                    </figure>
                </div>
            </div>
            <p class="homeIntro">
                If you are interested in not just sightseeing, 
                but also partaking in activities yourself, Pokhara is a great place to visit. 
                Pokhara offers activities such as paragliding, 
                allowing the tourists to soar above the city and take in the scenic views of the 
                surrounding mountains and lakes. 
                One can also partake in bungee jumping that is available at the Hemja Bungee Jumping site 
                where they can jump from a bridge over the rivers of Pokhara. 
                These are not the only sporting activities; others such as zip-lining, 
                kayaking or canoeing, as well as taking part in mountain bike rides to explore Pokhara. 
            </p>
        </div>

    </div>

<?php
    include($path ."assets/inc/footer.php");
?>