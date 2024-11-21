<?php

    $pageName = "Everest";
    $path = "../";
	include($path . "assets/inc/header.php");
?>
     <!--Everest Content-->
     <div class="homeImgHolder">
        <img class="homeImg" src="<?php echo $path;?>assets/images/everest-main.png" alt="Mount Everest">
    </div>
    <h2 class="little">Mount Everest</h2>
    <hr class="homeHr">
    <div>
        <img class="overviewImg" src="<?php echo $path;?>assets/images/everest1.png" alt="Image of horse Everest">
        <h3 class="overviewTitle">The mighty Everest</h3>
        <p class="overview">
            Mount Everest also known as <i>Sagarmatha</i> in the Nepali language is known to be the highest mountain
             in the world with the summit reaching a peak of 29,029 feet or 8,848 meters. 
             This mighty mountain is located in the Himalayan mountain range which borders between Nepal and Tibet. 
             Mount Everest is also known to be one of the Seven Wonders of Nature. 
            Let's take a look at the wonders of Mount Everest. 
        </p>
    </div>
    <div class="clear">
        <h3>The Wonders of Mount Everest</h3>
        <img class="kathmanduActImgBig" src="<?php echo $path;?>assets/images/everest2.png" alt="Climbing Mount Everest">
        <p class="homeIntro">
            Sagarmatha, translating to “goddess of the sky” is the dream of all climbers around the world. 
            Although it seems impossible and definitely dangerous, 
            climbers of all levels are attracted to this mountain because of how challenging it is. 
            The thrill of accomplishing the impossible of climbing this mountain is unmatched. 
            These climbers will be able to proudly say
             “I have reached the summit of the highest mountain in the world”. 
        </p>
        <img class="kathmanduActImgBig" src="<?php echo $path;?>assets/images/everest3.png" alt="Camps in Mount Everest">
        <p class="homeIntro">
            So far in the world, only 6338 different people have been able to reach the summit of Mount Everest. 
            In other words, 6338 out of 7.8 billion people. 
            The dangers of Mount Everest is well known as there is a death toll average of 4.4 deaths per year. 

        </p>
        <p class="homeIntro">
            For us non climbers, 
            the best way to view the scenes of Mount Everest
             is to take a short flight found in Kathmandu which takes the visitors around the 
             Everest for a closer view. 
        </p>
        <div class="everestLearnMore">
            <a class="activityLearnMoreLink" href="<?php echo $path;?>pages/everestClimb.php">
                Learn more about what it takes to climb Mount Everest!
            </a>
        </div>
    </div>

<?php
    include($path ."assets/inc/footer.php");
?>