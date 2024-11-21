<?php

    $pageName = "Grading";
    $path = "../";
	include($path . "assets/inc/header.php");
?>
    <!--Grading Content-->
    <div>
        <h2 class="little">Grading</h2>
        <hr class="homeHr">
        <h3 class="little">Part 1: </h3>
        <p class="homeIntro">Hi. Overall, I think I did a pretty good job on this site about Nepal. 
        </p>
        <ul class="homeIntro">
            <li> I have a decent layout of the content.</li>
            <li> I have a navigation bar on the top that helps the users get to the different pages on this site.</li>
            <li> I have good UX design for links on the nav bar (the user is able to tell when they are selecting something).</li>
            <li>I think the user is easily able to access the information on this 
                site as they have a good indicator of what page they exactly are on with the page heading so that checks the CRAP priniciple.</li>
            <li>I don't think I left a big chunk of information on any pages. </li>
            <li>The closely related content are close to each other.</li>
            <li>I have 10 pages of content with decent quality I believe.</li>
            <li>I have a global CSS file that is used by all other pages.</li>
            <li>The user is able to access the grading page from Homepage</li>
            <li>All html files and CSS is validated</li>
            <li>Mostly responsive, need to fix the nav bar layout</li>
        </ul>

        <h4 class="homeIntro">What went well:
        </h4>

        <ul class="homeIntro">
            <li>I had fun working on this site; I learned a lot and got better at designing as well as coding HTML/CSS.
                I know that this is not the best, but I am proud of the time I spent on it and what became the final product.
            </li>
        </ul>

        <h4 class="homeIntro">What went bad:
        </h4>
        <ul class="homeIntro">
            <li> I think I sort of underestimated this assignment or just did not use my time wisely; 
                for that reason, this was completed late so I have to learn not to do that anymore.
            </li>
            <li>
                Other than being late, 
                one thing that I wasn't able to do properly was a 
                responsive nav menu; the layout of nav bar is completely messed up on mobile sizes or any sizes outside of desktop. 
                But the body and content are all responsive.
            </li>
            <li>
                I think I also need to get much more better at utilizing colors, as well as doing a more modern designs.
                In the future, I'd like to incorporate some animations or some form of interactions. 
            </li>
        </ul>
    </div>

    <hr class="longHr">

    <div>
        <h3 class="little">Part 2:</h3>
        <h4 class="homeIntro">Comment Section</h4>
        <ul class="homeIntro">
            <li>
                Comment feature has been implemented; you can find this as "Share" on the nav bar.
            </li>
        </ul>
        <h4 class="homeIntro">Original JavaScript component</h4>
        <ul class="homeIntro">
            <li>On the home page, I have a created a expense calculator/estimator for traveling to Nepal.
                It estimates the expenses one might have based on selected answer.</li>
        </ul>
        <h4 class="homeIntro">DHTML Component</h4>
        <ul class="homeIntro">
            <li>I combined my DHTML with the original JS component. 
                The user can click on the "down" arrow on homepage, which will display the the expense estimator.
                If the users click on it again after displaying it, it will hide it.</li>
        </ul>
        <h4 class="homeIntro">Extras</h4>
        <ul class="homeIntro">
            <li>I added a favicon</li>
            <li>I have like a scroller on the bottom right corner of the screen which takes the users to the top once clicked on it</li>
            <li>I have a decent design of the comment/share feature and I think overall the designs/implementations is clean</li>

        </ul>
        <h4 class="homeIntro">Fixes from Part 1</h4>
        <ul class="homeIntro">
            <li>On part one, I had lost point on missing the "You are Here Indicator". 
                I was able to implement this with modular site now.</li>
        </ul>
        <h4 class="homeIntro">What still needs work</h4>
        <ul class="homeIntro">
            <li>I was struggling to fix the navigation bar for mobiles so this is something that is lacking on this website. 
                With that being said, it is responsive excluding the nav bar. 
            </li>
        </ul>
    </div>


<?php
    include($path ."assets/inc/footer.php");
?>