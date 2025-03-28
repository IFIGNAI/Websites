<?php
    $title_sect = 'Bath extras';
    $css_sect = 'styles-extras.css';
    require_once('inc/header.php');
?>
<body>
    <?php require_once('inc/navigation.php');?>
    <br>
    <section class="intro">
        <br>
        <p>Here you can find additional information</p>
    </section>
    <br>
    <nav>
        <ul class="navigation">
            <li>
                <a href="comments.php">
                    <img src="images/mountain.jpg" alt="forest">
                    <div class="label">Comments</div>
                </a>
            </li>
            <li>
                <a href="grades.php">
                    <img src="images/bath.jpg" alt="bath">
                    <div class="label">Grades page</div>
                </a>
            </li>
            <li>
                <a href="sources.php">
                    <img src="images/sightseeings.jpg" alt="sightseeings">
                    <div class="label">Sources</div>
                </a>
            </li>
        </ul>
    </nav>
    <?php require_once('inc/footer.php');?>
</body>
</html>
