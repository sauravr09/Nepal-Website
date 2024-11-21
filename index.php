<?php

    $pageName = "Trip to Nepal";
    $path = "./";
	include($path . "assets/inc/header.php");
?>

    <!-- Home Page Content-->
    <div>
        <div class="homeImgHolder">
            <img class="homeImg" src="assets/images/home_page.png" alt="Photo of Nepal">
        </div>
       
        <h2 class="little">A little about Nepal</h2>
        <hr class="homeHr">
        <p class="homeIntro">
            Nepal is a beautiful country located in South Asia. 
            Although Nepal is small, there are thousands of activities that one can do when visiting this country. 
            In this site, you will be introduced to some of them, such as:
            the city of Kathmandu, Pokhara, Mount Everest, the unique foods, as well as the geographic location of Nepal.
        </p>


        <h3 class="little">Worried about the expenses of visiting? Get help from expense calculator below!</h3>
        <div id="expense-calculator" onclick="showCalc()">
        </div>

        <div id="calc" style="display: none;">
            <label class="expense-question" for="budget">Enter your budget: </label>
            <input type="number" name="budget" id="budget" value="" placeholder="5000">

            <p class="expense-question">How many days are you planning to visit for?</p>
            <p><input type="radio" name="days" value="1" checked="true">1 day</p>
            <p><input type="radio" name="days" value="3">3 days</p>
            <p><input type="radio" name="days" value="5">5 days</p>
            <p><input type="radio" name="days" value="7">7 days+</p><br>

            <p class="expense-question">What activities are you doing?</p>
            <p><input type="radio" name="expense-activity" value="temple" checked="true">Visiting Temple</p>
            <p><input type="radio" name="expense-activity" value="flying">Flying Around Everest</p>
            <p><input type="radio" name="expense-activity" value="sport">Sports Activity in Pokhara</p>
            <p><input type="radio" name="expense-activity" value="shopping">Shopping at Bazaars</p><br>

            <p class="expense-question">How many meals per day?</p>
            <p><input type="radio" name="expense-meal" value="1" checked="true">1 meal</p>
            <p><input type="radio" name="expense-meal" value="2">2 meal</p>
            <p><input type="radio" name="expense-meal" value="3">3 meal</p>
            <p><input type="radio" name="expense-meal" value="4">4 or more meals</p>

            <button class="expense-button" onclick="displayExpense()">Calculate</button>
            <br>
            <div class="expenses-outcome">
                <span id="total-expense"></span>
                <span id="expense-cost"></span>
                <span id="expense-result"></span>
            </div>

        </div>

    </div>
<?php
    include($path ."assets/inc/footer.php");
?>