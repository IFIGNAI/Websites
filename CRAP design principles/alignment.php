<?php
    //section 1

    $pageTitle = 'Alignment';

    $heroImg = 'src="assets/media/Alignment_Hero.png" alt="Alignment hero image"';
    
    $introPgh = "Alignment positions content on a webpage, ensuring a clean,
                    organized layout. Consistent alignment creates cohesion,
                    similar to repetition, and considers spacing between elements, like proximity.";

    $whatPgh = " Alignment is how you position the content of your webpage. When a website uses 
                    good alignment, the content  is symmetrical and organized. However, when a 
                    website uses bad alignment, the content would be off center and messy. This 
                    principle shares some similarities with repetition and proximity. How you 
                    align the text and images should be consistent, to maintain a sense of cohesiveness, 
                    like repetition. Alignment should also consider how close together the content is 
                    put, like proximity.";

    $whyPgh = " Alignment is important for creating a website that is not only visually appealing, 
                    but it is also essential for good functionality. Like repetition, alignment helps 
                    users become familiar with the website and it helps them find information easily. 
                    Depending on how the information is aligned, it can also be used to attract the user’s 
                    attention. For example, English speakers are accustomed to look to the left first, 
                    because that is how the language is read. So if your target audience is English 
                    speakers, you would make sure your most important information is aligned more to 
                    the left.";

    $howPgh = "Most people naturally want to align all their information in the center, however, center 
                    isn't the only form of alignment you can use. There is also left alignment, right alignment, 
                    justified alignment, horizontal alignment, and vertical alignment. Left alignment keeps the 
                    contents to the left side and is mostly used for blocks of text. Right alignment keeps the 
                    contents to the right and is generally used for table of contents or ads. Justified alignment 
                    is when the whole screen gets covered, however this form of alignment isn’t used very often. 
                    Horizontal alignment is when content is formatted from left to right. Vertical alignment is 
                    seen often and is when content is formatted from top to bottom.";

    //section 2

    $example1 = 'src="assets/media/Alignment_1.png" alt="alignment example 1 image"';

    $example2 = 'src="assets/media/Alignment_2.png" alt="alignment example 2 image"';

    $example3 = 'src="assets/media/Alignment_3.png" alt="alignment example 3 image"';

    $example4 = 'src="assets/media/Alignment_4.png" alt="alignment example 4 image"';

    //section 3
    $pageTitleCaps = 'ALIGNMENT';
    $tipOneTitle = 'CONSISTENCY';
    $tipTwoTitle = 'PRECISION';
    $tipThreeTitle = 'INTENTIONALITY';
    $tipFourTitle = 'FLEXIBILITY';

    $tipOne = 'Stick to one form of alignment throughout the page to maintain a clean and organized look.';
    $tipTwo = 'Ensure all content is aligned evenly for a polished and professional design.';
    $tipThree = 'Select the alignment style that best supports your website\'s purpose and enhances user experience.';
    $tipFour = 'Check that your alignment works well on all screen sizes, ensuring responsiveness and accessibility.';

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