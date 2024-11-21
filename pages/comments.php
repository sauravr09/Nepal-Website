<?php
    $pageName = "Plan your trip!";
    $path = "../";
    include($path ."assets/inc/header.php");
    include($path . "../dbConn.php");

    $posted = false;

    function sanitize($str, $length=200){
		$str = trim($str);
		$str = htmlentities($str, ENT_QUOTES);
		return substr($str, 0, $length);
    }

    if (!empty($_GET['name']) && isset($_GET['place']) && isset($_GET['food']) && isset($_GET['rating'])){

        $name = sanitize($_GET['name']);
        $place = $_GET['place'];
        $food = $_GET['food'];
        $excited = $_GET['rating'];
        $additional = sanitize($_GET['additional']);

        $sql = "INSERT INTO `final_comments` (`name`, `place`, `food`, `excited`, `additional`) VALUES (?,?,?,?,?);";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssis', $name, $place, $food, $excited, $additional);
        $stmt->execute();

        $posted = true;
        if ($posted === true){
            header('Location: comments.php' );
        }

    }
?>

<!--Comment Section --->

<div>

    <h2 class="little">Plans to visit Nepal</h2>
    <hr class="homeHr">

    <!--People's Plan box-->
    <h3 class="little">People's Plan</h3>

    
    <div class="plansBox">
        <div>
            <?php
                $sql = "SELECT * FROM `final_comments` ORDER BY `id` DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo  "<span class='user-name'>" . $row['name'] . "</span>" . "<ul>" . "<li><span class='commentSub'>Visiting: </span>". $row['place'] . "</li>" .
                            "<li><span class='commentSub'>Food to Eat: </span>". $row['food'] . "</li>". "<li><span class='commentSub'>How Excited: </span>" . $row['excited'] . "</li>" . 
                            "<li><span class='commentSub'>Additional Information: </span>" . $row['additional'] . "</li>" . "</ul>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();

            ?>
        </div>
    </div>
    <h3 class="little">Share your Plan!</h3>
    <form name="commentForm" action="<?php echo $path;?>pages/comments.php" method="GET">

        <div class="visiting">
            <fieldset id="field">
                <legend>Fill out the form</legend>
                <br>
                <div class="questions">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" value=""><br><br>

                    <span>Where you are going?</span>
                    <p><input type="radio" name="place" value="Everest">Everest</p>
                    <p><input type="radio" name="place" value="Chitwan">Chitwan</p>
                    <p><input type="radio" name="place" value="Kathmandu">Kathmandu</p>
                    <p><input type="radio" name="place" value="Pokhara">Pokhara</p><br>

                    <span>What food are you most excited to eat?</span>
                    <p><input type="radio" name="food" value="Dal Bhat">Dal Bhat</p>
                    <p><input type="radio" name="food" value="Alu Tama">Alu Tama</p>
                    <p><input type="radio" name="food" value="Gundruk">Gundruk</p>
                    <p><input type="radio" name="food" value="Selroti">Selroti</p>
                    <p><input type="radio" name="food" value="Momo">Momo</p><br>

                    <div class="slider">
                        <label for="rating">How excited are you about this plan? (from 1-10)</label>
                        <p><input type="range" min="1" max="10" name="rating" id="rating" value="5"></p>
                    </div>

                    <label for="additional">Anything else you would like to share?</label>
                    <p><textarea name="additional" id="additional" cols="40" rows="10" placeholder="type here.."></textarea></p>
                </div>


            </fieldset>
        </div>
        <br>
        <div class="buttonHolder">
            <button type="submit" id="post" onclick="return validateForm()">Post</button>
        </div>
        
    </form>

</div>
