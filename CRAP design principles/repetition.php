<?php
    //section 1

    $pageTitle = 'Repetition';

    $heroImg = 'src="assets/media/Repetition_Hero.png" alt="Repetition hero image"';
    
    $introPgh = "Repetition in web design is the consistent use of an element or
                    elements throughout a web page. Much like the other principles
                    of CRAP; colors, shapes, sizes and textures can all be used to
                    display repetition. Using this principle correctly helps give the
                    page a theme and a feeling of consistency as you scroll through it.
                    Not only does it allow for a visually appealing design, but it can
                    also be used to organize information coherently and help the user
                    navigate through the website.";

    $whatPgh = "Repetition in web design is the consistent use of an element or
                    elements throughout a web page. Much like the other principles
                    of CRAP; colors, shapes, sizes and textures can all be used to
                    display repetition. Using this principle correctly helps give the
                    page a theme and a feeling of consistency as you scroll through it.
                    Not only does it allow for a visually appealing design, but it can
                    also be used to organize information coherently and help the user
                    navigate through the website.";

    $whyPgh = "Repetition is one of the most important principles to use if you
                    want your website to feel uniform. The patterns you create using
                    this principle help improve the design and usability of your website.
                    A good use of repetition will show a visual hierarchy, rhythm, and
                    unity. A hierarchy is shown by creating certain patterns which are
                    used to highlight important information. Rhythm and unity comes from
                    the repeated patterns.";

    $howPgh = "Repetition is shown in a website by repeating certain elements or patterns.
                    This principle can show a hierarchy by establishing a pattern of making headings
                    or other important information a larger font or a different color from the rest
                    of the text. Doing this will not only make the website look organized, it will
                    also help the user navigate the site with more ease, since this pattern will help
                    them find whatever section of the website they’re looking for. Repetition also
                    creates unity and rhythm throughout the page. Unity and rhythm is created by
                    seeing similar patterns, colors and fonts throughout the site, making it feel consistent.";

    //section 2

    $example1 = 'src="assets/media/Repetition_1.png" alt="repetition example 1 image"';

    $example2 = 'src="assets/media/Repetition_2.png" alt="repetition example 2 image"';

    $example3 = 'src="assets/media/Repetition_3.png" alt="repetition example 3 image"';
    
    $example4 = 'src="assets/media/Repetition_4.png" alt="repetition example 4 image"';

    //section 3
    $pageTitleCaps = 'REPETITION';
    $tipOneTitle = 'MODERATION';
    $tipTwoTitle = 'VARIETY';
    $tipThreeTitle = 'HIERARCHY';
    $tipFourTitle = 'UNITY';

    $tipOne = 'Don\'t overuse repetition; excessive use can make the page look cluttered and distract users from the main content.';
    $tipTwo = 'Refrain from repeating text; instead, use repetition with colors, shapes, and patterns to enhance the design.';
    $tipThree = 'Leverage repetition to establish a visual hierarchy, helping users navigate your webpage effectively.';
    $tipFour = 'Use repetition strategically to create cohesion and reinforce brand identity throughout the webpage.';

    require_once('./assets/inc/header.inc.php');
?>

<body>
    
    <div id="source"></div>

    <!-- explain -->
    
    <?php require_once('./assets/inc/explain.inc.php')?>
    
    <!--examples-->
    
    <?php require_once('./assets/inc/examples.inc.php')?>

    <!--tips-->
    
    <?php require_once('./assets/inc/tips.inc.php')?>
    <!--back to top-->

    <button class="button" id="back_to_top"><a id="buttonsi" href="#source">Back to top</a></button>

</body>
<?php
	require_once('./assets/inc/footer.inc.php');
?>