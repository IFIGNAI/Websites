<?php
    //section 1

    $pageTitle = 'Proximity';

    $heroImg = 'src="assets/media/Proximity_Hero.png" alt="Proximity hero image"';
    
    $introPgh = "Proximity in design refers to the spacing between content and whitespace.
                    Too little space makes a page cluttered, while too much can feel empty.
                    A balance is key for a clean, organized layout.";

    $whatPgh = " In design, proximity considers how close together the content is and how much 
                    whitespace there is on the page. If content is kept too close together, the 
                    page may begin to seem cluttered. However, if there is too much whitespace 
                    on a webpage, it begins to look odd. When working with proximity, it's important 
                    you are able to find a happy medium between too much and too little whitespace.";

    $whyPgh = "Good proximity plays a big part in ensuring readability throughout the webpage. 
                    Text that is separated by very little space is often hard to read, and the page 
                    looks very busy when text and images are grouped too close together. This property 
                    is not only helpful for formatting and readability, it can also help users determine 
                    what information is related. Text or images that are placed close together will be 
                    perceived as being related, while content that is more spaced out is assumed to be 
                    unrelated.";

    $howPgh = "Proximity is easy to implement into a website. The most important thing to look 
                    out for is spacing. If your contents seem too close to each other or if the text 
                    is hard to read, don’t be afraid to utilize all of the extra white space throughout 
                    the page. Using a lot of whitespace makes the information easy to digest and view. ";

    //section 2

    $example1 = 'src="assets/media/Proximity_1.png" alt="proximity example 1 image"';

    $example2 = 'src="assets/media/Proximity_2.png" alt="proximity example 2 image"';

    $example3 = 'src="assets/media/Proximity_3.png" alt="proximity example 3 image"';

    $example4 = 'src="assets/media/Proximity_4.png" alt="proximity example 4 image"';

    // section 3
    $pageTitleCaps = 'PROXIMITY';
    $tipOneTitle = 'UNIFORMITY';
    $tipTwoTitle = 'CLARITY';
    $tipThreeTitle = 'ORGANIZATION';
    $tipFourTitle = 'SPACING';

    $tipOne = 'Keep proximity consistent across your webpage to create a cohesive layout.';
    $tipTwo = 'Avoid placing content too close together; it makes information hard to process.';
    $tipThree = 'Place related information close together to help users easily associate and understand content.';
    $tipFour = 'Use white space effectively to prevent overcrowding and give elements room to breathe.';

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

