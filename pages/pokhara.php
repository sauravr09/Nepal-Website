<?php

    $pageName = "Pokhara";
    $path = "../";
	include($path . "assets/inc/header.php");
?>

    <!--Pokhara Information-->
    <div>
        <div class="homeImgHolder">
            <img class="homeImg" src="<?php echo $path;?>assets/images/Pokhara-main.png" alt="The City of Pokhara">
        </div>
        <h2 class="little">Pokhara</h2>
        <hr class="homeHr">
        <div>
            <img class="overviewImg" src="<?php echo $path;?>assets/images/Pokhara-home.png" alt="Image of Pokhara Area">
            <h3 class="overviewTitle">The beauty of Pokhara</h3>
            <p class="overview">
                Pokhara is a charming city located in the western part of Nepal;
                just like the other cities in Nepal, Pokhara is also surrounded by the stunning Himalayas. 
                Pokhara has a history of being an important city of Nepal, 
                as it once served as a trading hub between neighboring countries such as India and Tibet. 
                Today, it is a very popular destination for tourists whenever they visit Nepal as it is a natural beauty 
                and has many adventurous activities one can take part in. 
            </p>
        </div>

         <!-- Activities in Pokhara-->
         <div class="clear">
            <h3>Activities in Pokhara</h3>
            <!-- <hr class="subHr"> -->
            <div class="activitiesPokhara">
                <div class="activity">
                    <p class="activityTitle">The Phewa Lake</p>
                    <img class="activityImgPokhara" src="<?php echo $path;?>assets/images/Phewa-display.png" alt="The Phewa Lake">
                    <p class="activityDesc">A majestic lake with scenic views</p>

                </div>
                <div class="activity">
                    <p class="activityTitle">Sarangkot</p>
                    <img class="activityImgPokhara" src="<?php echo $path;?>assets/images/sarangkot-display.png" alt="View from Sarangkot">
                    <p class="activityDesc">Enjoy the beauty of Sarangkot</p>


                </div>
                <div class="activity">
                    <p class="activityTitle">Adventure Sports</p>
                    <img class="activityImgPokhara" src="<?php echo $path;?>assets/images/sport-display.png" alt="Paragliding in Pokhara">
                    <p class="activityDesc">Take part in many sporting activities</p>
                </div>
            </div>
            <div class="activityLearnMore">
                <a class="activityLearnMoreLink" href="<?php echo $path;?>pages/pokharaActivities.php">
                    Learn More about the Activities!
                </a>
            </div>
        </div>
    </div>

<?php
    include($path ."assets/inc/footer.php");
?>