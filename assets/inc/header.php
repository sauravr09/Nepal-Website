<!DOCTYPE html>
<!-- Saurav Raut 
    Individual Proj:part 1
    Home Page-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageName; ?></title>
    <link rel="stylesheet" href= "<?php echo $path;  ?>assets/css/styles.css">
    <script type="text/javascript" src="<?php echo $path;?>assets/scripts/validateForm.js"></script>
    <script type="text/javascript" src="<?php echo $path;?>assets/scripts/expense.js"></script>
    <script type="text/javascript" src="<?php echo $path;?>assets/scripts/scrollUp.js"></script>
    <link rel="icon" type="image/png" href="<?php echo $path;?>assets/images/nepal-logo.png">
</head>
<body>
    <!--NAV BAR-->
    <div class="nav">
        <div class="navLogo">
            <a href="<?php echo $path;?>index.php">
                <img id="navImg" src="<?php echo $path;?>assets/images/nepal-logo.png" alt="Nepal Nav Image"> 
            </a>
            <!-- <div class="navTitle">Trip to Nepal</div> -->
        </div>

        <nav class="menu">
            <ul>
                <li class="top">
                    <a href="<?php echo $path;?>index.php">Home</a>
                </li>
                <li class="top">
                    <a href="#">Attractions</a>
                    <ul class="submenu">
                        <li><a href="<?php echo $path;  ?>pages/khatmandu.php">Kathmandu</a></li>
                        <li><a href="<?php echo $path;  ?>pages/pokhara.php">Pokhara</a></li>
                        <li><a href="<?php echo $path;  ?>pages/chitwan.php">Chitwan</a></li>
                        <li><a href="<?php echo $path;  ?>pages/everest.php">Everest</a></li>
                    </ul>
                </li>
                <li class="top">
                    <a href="<?php echo $path;  ?>pages/foods.php">Foods</a>
                </li>
                <li class="top">
                    <a href="<?php echo $path;  ?>pages/location.php">Location</a>
                </li>
                <li id="divider">|</li>
                <li class="top"><a href="<?php echo $path;?>pages/comments.php">Share</a></li>
                <li class="top">
                    <a href="#">Others</a>
                    <ul class="submenu">
                        <li><a href="<?php echo $path;  ?>pages/sources.php">Sources</a></li>
                        <li><a href="<?php echo $path;  ?>pages/grading.php">Grading</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>


    <div id="scroll-up" onclick="goUp()">
    </div>
