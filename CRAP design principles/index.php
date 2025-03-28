<?php
    $pageTitle = 'Home';

    require_once('./assets/inc/header.inc.php');
?>

    <main>
        <section id="intro">
            <h2>Learn to crap today.</h2>
            <p>A website to learn <em>crap</em>,
                the four key design principles for
                creating visually appealing and
                effective webpage layouts.
            </p>

            <button class="button"><a id="buttonsi" href="contrast.php">Get Started</a></button>
        </section>

        <section class="heroimg">
            <img src="assets/media/Home_Hero_img.png" alt=heroImg width="100%">
        </section>
        
        <section class="mission">
            <h2>our mission.</h2>
            <p id="round_box">
                Make understanding the CRAP principles
                easy and enjoyable by providing clear,
                fun, and informative.
            </p>
        </section>
        <?php
	        require_once('./assets/inc/footer.inc.php');
        ?>
    </main>
</body>

