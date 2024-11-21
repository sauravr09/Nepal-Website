<?php

    $pageName = "Kathmandu";
    $path = "../";
	include($path . "assets/inc/header.php");
?>
    <!--Khatmandu Content-->
    <div>
        <div class="homeImgHolder">
            <img class="homeImg" src="<?php echo $path;?>assets/images/kathmandu-main.png" alt="The City of Kathmandu">
        </div>
        <h2 class="little">Kathmandu</h2>
        <hr class="homeHr">
        <div>
            <img class="overviewImg" src="<?php echo $path;?>assets/images/kathmandu-img1.png" alt="Street Image of Kathmandu">
            <h3 class="overviewTitle">The Capital of Nepal</h3>
            <p class="overview">Kathmandu, the capital and largest metropolitan city is a leading traditional and commercial centre of Nepal. 
                For that reason, it is also known as a major urban city and
                is rich with history, culture, tradition, and receives many travelers from all around the world every year. Lets look at some activities visitors can do!
            </p>
        </div>
        <!-- Activities in Kathmandu-->
        <div class="clear">
            <h3>Activities in Kathmandu</h3>
            <!-- <hr class="subHr"> -->
            <div class="activities">
                <div class="activity">
                    <p class="activityTitle">The Boudhanath Temple</p>
                    <img class="activityImg" src="<?php echo $path;?>assets/images/Bouda-display.png" alt="The Boudhanath Temple">
                    <p class="activityDesc">A colorful temple that you must explore!</p>

                </div>
                <div class="activity">
                    <p class="activityTitle">Fly past Everest</p>
                    <img class="activityImg" src="<?php echo $path;?>assets/images/flying-display.png" alt="Flying Around Everest">
                    <p class="activityDesc">Take a short journey around the Everest</p>


                </div>
                <div class="activity">
                    <p class="activityTitle"> Ason and Mangal Bazaars</p>
                    <img class="activityImg" src="<?php echo $path;?>assets/images/bazzar-display.png" alt="Streets of Ason and Mangal Bazaars">
                    <p class="activityDesc">Take a stroll around the streets for souvenirs</p>
                </div>
            </div>
            <div class="activityLearnMore">
                <a class="activityLearnMoreLink" href="<?php echo $path;?>pages/kathmanuActivities.php">
                    Learn More about the Activities!
                </a>
            </div>
        </div>


    </div>

<?php
    include($path ."assets/inc/footer.php");
?>