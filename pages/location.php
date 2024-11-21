<?php

    $pageName = "Nepal's Location";
    $path = "../";
	include($path . "assets/inc/header.php");
?>

    <!--Location Information-->
    <div class="homeImgHolder">
        <img class="homeImg" src="<?php echo $path;?>assets/images/nepalflag.png" alt="Nepal Flag">
    </div>
    <h2 class="little">Geographic Location of Nepal</h2>
    <hr class="homeHr">
    <div>
        <iframe class="map"
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7194836.568742231!2d78.83799457325122!3d28.295179826708868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995e8c77d2e68cf%3A0x34a29abcd0cc86de!2sNepal!5e0!3m2!1sen!2sus!4v1697336862803!5m2!1sen!2sus"
          allowfullscreen></iframe>
        <h3 class="overviewTitle">Where is Nepal</h3>
        <p class="overview">
            Nepal is a small country located in South Asia, it is in the central part of the Himalayan mountain range.
            Big countries that neighbor Nepal are China to the north and India to the south.
        </p>
        <p class="overview">
            Nepal is mostly famous for its beautiful landscape, including the Mount Everest.
            If you were to take a flight from Rochester, NY to Kathmandu, Nepal; 
            it would take you roughly about 16 hours without stopping.
        </p>
    </div>

<?php
    include($path ."assets/inc/footer.php");
?>