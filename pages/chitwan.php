<?php

    $pageName = "Chitwan";
    $path = "../";
	include($path . "assets/inc/header.php");
?>

     <!--Chitwan Content-->
     <div class="homeImgHolder">
        <img class="homeImg" src="<?php echo $path;?>assets/images/chitwan-main.png" alt="Chitwan">
    </div>
    <h2 class="little">Chitwan</h2>
    <hr class="homeHr">
    <div>
        <img class="overviewImg" src="<?php echo $path;?>assets/images/Chitwan-home.png" alt="Image of Elephant riding Chitwan">
        <h3 class="overviewTitle">Chitwan and wildlife</h3>
        <p class="overview">
            Just like Pokhara, Chitwan is also located on the western parts of Nepal.
             But unlike the other locations of Nepal, Chitwan is mostly known for its wildlife 
             as there are many safaris and zoos. 
             If you are interested in interacting with wildlifes then Chitwan is for you!
             Lets take a look at the most famous attraction of Chitwan: The Chitwan National Park.
        </p>
    </div>

    <!--Chitwan National Park Information -->
    <div class="clear">
        <h3>The National Park of Chitwan</h3>
        <p class="homeIntro">
            Chitwan National Park is the first national park in Nepal and 
            it contains beautiful scenes and abundant wildlifes. 
            This great park is a home to many endangered animals, 
            such as greater one horned rhinoceros, royal Bengal tiger, gharial crocodile, 
            freshwater gangetic dolphins, and many more. In additional to these endangered animals, 
            you will also find wild boar, sloth bears, elephants, and leopard in the park. 
        </p>
        <h3>Some rare animals found in the park</h3>
        <div class="imagesHolder">
            <div class="imageItem">
                <figure>
                    <img class="night" src="<?php echo $path;?>assets/images/royalTiger.png" alt="Picture of Royal Bengal Tiger">
                    <figcaption>Royal Bengal Tiger</figcaption>
                </figure>
            </div>
            <div class="imageItem">
                <figure>
                    <img class="night" src="<?php echo $path;?>assets/images/rhino.png" alt="Picture of One-horned rhinoceros">
                    <figcaption>One-horned Rhinoceros</figcaption>
                </figure>
            </div>
        </div>
        <div class="imagesHolder">
            <div class="imageItem">
                <figure>
                    <img class="night" src="<?php echo $path;?>assets/images/clouded.png" alt="Picture of Clouded leopard">
                    <figcaption>Clouded Leopard</figcaption>
                </figure>
            </div>
            <div class="imageItem">
                <figure>
                    <img class="night" src="<?php echo $path;?>assets/images/gaur.png" alt="Picture of Gaur">
                    <figcaption>Gaur/Indian Bison</figcaption>
                </figure>
            </div>
        </div>
    </div>

<?php
    include($path ."assets/inc/footer.php");
?>