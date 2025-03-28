<?php
    //section 1
    
    $pageTitle = 'Contrast';

    $heroImg = 'src="assets/media/Contrast_Hero.png" alt="Contrast hero image"';
    
    $introPgh = "Contrast in web design highlights differences in elements, such as size, color, or shape,
                    to draw attention and guide users. High contrast areas naturally grab attention,
                    helping direct focus where the designer intends.";

    $whatPgh = " Contrast is described as a difference in two elements, making them 
                    stand out. In web design, this principle can be shown through an 
                    extreme difference in the size of text or pictures, the colors displayed 
                    throughout the page, or even using two differing shapes . It helps to 
                    visually bring the webpage together smoothly while still directing the user’s 
                    attention to where the designer wants it to be. An area of high contrast on 
                    a page is more likely to grab attention than an area of low contrast.";

    $whyPgh = "Contrast is very important when it comes to grabbing the user’s attention. If 
                    used right, it can be an easy way to make something stand out while maintaining 
                    unity. It is especially important when there is a lot of text being displayed 
                    throughout the site. Having low contrast could make the text blend in with the 
                    background, making it harder to read; however, displaying high contrast makes 
                    the text pop and much easier to read.";

    $howPgh = "Most times, when people think of contrast, they immediately think of differences 
                    in color. However, color often isn't the only element used to display contrast, 
                    designers utilize sizes, shapes, and even texture. 

                    You can show contrast in colors by choosing colors that are not only opposite 
                    to each other on the color wheel, but that also blend together nicely. Some 
                    people choose bright colors when trying to depict contrast, however many times 
                    these colors strain a person’s eyes. You can show contrast in size by showing 
                    variation in how big or small the content of your page is. To show extreme 
                    juxtaposition you can make one element extremely big while keeping the others 
                    smaller. Shapes can show contrast when you put round ones in close proximity 
                    to sharper ones. ";

    //section 2

    $example1 = 'src="assets/media/Contrast_1.png" alt="contrast example 1 image"';

    $example2 = 'src="assets/media/Contrast_2.png" alt="contrast example 2 image"';

    $example3 = 'src="assets/media/Contrast_3.png" alt="contrast example 3 image"';

    $example4 = 'src="assets/media/Contrast_4.png" alt="contrast example 4 image"';

    //section 3
    $pageTitleCaps = 'CONTRAST';

    $tipOneTitle = 'HARMONY';
    $tipTwoTitle = 'DEPTH';
    $tipThreeTitle = 'READABILITY';
    $tipFourTitle = 'ACCESSIBILITY';

    $tipOne = 'Using opposing colors doesn\'t automatically mean good contrast;
    the colors must harmonize to avoid eye strain and maintain a clean design.';
    $tipTwo = 'Include a variety of textures to add depth and interest to your page, preventing a flat or monotonous look.';
    $tipThree = 'Use dark text on light backgrounds and light text on dark backgrounds to ensure readability and visual clarity.';
    $tipFour = 'Ensure sufficient contrast between elements, especially text and background, to make your design accessible to everyone, including those with visual impairments.';

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

    <button class="button" id="back_to_top"><a  id="buttonsi" href="#source">Back to top</a></button>

</body>

<?php
	require_once('./assets/inc/footer.inc.php');
?>
